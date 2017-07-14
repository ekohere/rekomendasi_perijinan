<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBiodataRequest;
use App\Http\Requests\UpdateBiodataRequest;
use App\Models\JenjangPendidikan;
use App\Repositories\BiodataRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Agama;
use App\Models\Alamat;
use App\Models\Biodata;
use App\Models\Kontak;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BiodataController extends AppBaseController
{
    /** @var  BiodataRepository */
    private $biodataRepository;

    public function __construct(BiodataRepository $biodataRepo)
    {
        $this->biodataRepository = $biodataRepo;
    }

    /**
     * Display a listing of the Biodata.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        /*$this->biodataRepository
            ->pushCriteria(new RequestCriteria($request));*/
        $biodatas = Biodata::where('user_id', Auth::id())
            ->first();
        $agamas =Agama::pluck('nama','id');
        $jenjangPendidikan = JenjangPendidikan::pluck('nama','id');

        return view('biodatas.index',
            compact('biodatas','agamas','jenjangPendidikan'));
    }

    /**
     * Show the form for creating a new Biodata.
     *
     * @return Response
     */
    public function create()
    {
        $agamas =Agama::pluck('nama','id');
        $jenjangPendidikan = JenjangPendidikan::pluck('nama','id');
        return view('biodatas.create',
            compact('agamas', 'jenjangPendidikan'));
    }

    /**
     * Store a newly created Biodata in storage.
     *
     * @param CreateBiodataRequest $request
     *
     * @return Response
     */
    public function store(CreateBiodataRequest $request)
    {
        $requestData = $request->all();

        $dataBiodata = $request->only([
            'user_id',
            'nik',
            'npwp_pribadi',
            'scan_ktp',
            'scan_npwp',
            'jenjang_pendidikan_id',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'kewarganegaraan',
            'status_perkawinan',
            'agama_id',
            'website',
            'foto'
        ]);
        $requestAlamatAsal=$request->get('alamat_asal');
        $requestAlamatSekarang=$request->get('alamat_sekarang');

        try{
            DB::beginTransaction();

            $biodatum = Biodata::updateOrCreate(['user_id'=> Auth::id()],
                $dataBiodata);
            $path1=null;
            $path2=null;
            $path3=null;

            if( $request->hasFile('foto')) {
                $ext=File::extension($request->file('foto')->getClientOriginalName());
                $filename='foto'.$biodatum->id.'.'.$ext;
                $path1 = $request->foto->storeAs('foto', $filename,'local_public');
                chmod(public_path().'/'.$path1, 0777);
            }
            if($path1!=null){
                $biodatum->foto=$path1;
                $biodatum->save();
            }
            if( $request->hasFile('scan_npwp')) {
                $ext=File::extension($request->file('scan_npwp')->getClientOriginalName());
                $filename='npwp'.$biodatum->id.'.'.$ext;
                $path2 = $request->scan_npwp->storeAs('scan_npwp', $filename,'local_public');
                chmod(public_path().'/'.$path2, 0777);
            }
            if($path2!=null){
                $biodatum->scan_npwp=$path2;
                $biodatum->save();
            }
            if( $request->hasFile('scan_ktp')) {
                $ext=File::extension($request->file('scan_ktp')->getClientOriginalName());
                $filename='ktp'.$biodatum->id.'.'.$ext;
                $path3 = $request->scan_ktp->storeAs('scan_ktp', $filename,'local_public');
                chmod(public_path().'/'.$path3, 0777);
            }
            if($path3!=null){
                $biodatum->scan_ktp=$path3;
                $biodatum->save();
            }

            Alamat::updateOrCreate(
                ['biodata_id'=>$biodatum->id,'status'=>'asal'],
                $requestAlamatAsal
            );

            Alamat::updateOrCreate(
                ['biodata_id'=>$biodatum->id,'status'=>'sekarang'],
                $requestAlamatSekarang
            );

            DB::commit();

            Session::flash('flash_message', 'Biodata added!');
        }catch(Exception $e){
            DB::rollback();
        }

        return redirect(route('biodatas.index'));
    }

    /**
     * Display the specified Biodata.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $biodata = $this->biodataRepository->findWithoutFail($id);

        if (empty($biodata)) {
            Flash::error('Biodata not found');

            return redirect(route('biodatas.index'));
        }

        return view('biodatas.show')->with('biodata', $biodata);
    }

    /**
     * Show the form for editing the specified Biodata.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $biodata = $this->biodataRepository->findWithoutFail($id);
        //$biodatum = Biodata::findOrFail(Auth::user()->biodata->id);

        if (empty($biodata)) {
            Flash::error('Biodata not found');

            return redirect(route('biodatas.index'));
        }

        return view('biodatas.edit')
           // ->with('biodatum', $biodatum)
            ->with('biodata', $biodata);
    }

    /**
     * Update the specified Biodata in storage.
     *
     * @param  int              $id
     * @param UpdateBiodataRequest $request
     *
     * @return Response
     */
     public function update($id, UpdateDataUsahaRequest $request)
    {
        $dataUsaha = $this->dataUsahaRepository->findWithoutFail($id);

        if (empty($dataUsaha)) {
            Flash::error('Data Usaha not found');

            return redirect(route('dataUsahas.index'));
        }

        $dataUsaha = $this->dataUsahaRepository->update($request->all(), $id);
        $requestData = $request->all();


        $dataBiodata = $request->only([
            'user_id',
            'nik',
            'npwp_pribadi',
            'scan_ktp',
            'scan_npwp',
            'jenjang_pendidikan_id',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'kewarganegaraan',
            'status_perkawinan',
            'agama_id',
            'website',
            'foto'
        ]);
        $requestAlamatAsal=$request->get('alamat_asal');
        $requestAlamatSekarang=$request->get('alamat_sekarang');
        try{
            DB::beginTransaction();

            $biodatum = Biodata::updateOrCreate(['user_id'=> Auth::id()],
                $dataBiodata);
            $path1=null;
            $path2=null;
            $path3=null;

            if( $request->hasFile('foto')) {
                $ext=File::extension($request->file('foto')->getClientOriginalName());
                $filename=$biodatum->id.'.'.$ext;
                $path1 = $request->foto->storeAs('foto', $filename,'local_public');
                chmod(public_path().'/'.$path1, 0777);
            }
            if($path1!=null){
                $biodatum->foto=$path1;
                $biodatum->save();
            }
            if( $request->hasFile('scan_npwp')) {
                $ext=File::extension($request->file('scan_npwp')->getClientOriginalName());
                $filename=$biodatum->id.'.'.$ext;
                $path2 = $request->scan_npwp->storeAs('scan_npwp', $filename,'local_public');
                chmod(public_path().'/'.$path2, 0777);
            }
            if($path2!=null){
                $biodatum->scan_npwp=$path2;
                $biodatum->save();
            }
            if( $request->hasFile('scan_ktp')) {
                $ext=File::extension($request->file('scan_ktp')->getClientOriginalName());
                $filename=$biodatum->id.'.'.$ext;
                $path3 = $request->scan_ktp->storeAs('scan_ktp', $filename,'local_public');
                chmod(public_path().'/'.$path3, 0777);
            }
            if($path3!=null){
                $biodatum->scan_ktp=$path3;
                $biodatum->save();
            }

            Alamat::updateOrCreate(
                ['biodata_id'=>$biodatum->id,'status'=>'asal'],
                $requestAlamatAsal
            );

            Alamat::updateOrCreate(
                ['biodata_id'=>$biodatum->id,'status'=>'sekarang'],
                $requestAlamatSekarang
            );

            DB::commit();

            Session::flash('flash_message', 'Biodata added!');
        }catch(Exception $e){
            DB::rollback();
        }

        Flash::success('Biodata updated successfully.');

        return redirect(route('biodatas.index'));
    }

    /**
     * Remove the specified Biodata from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $biodata = $this->biodataRepository->findWithoutFail($id);

        if (empty($biodata)) {
            Flash::error('Biodata not found');

            return redirect(route('biodatas.index'));
        }

        $this->biodataRepository->delete($id);

        Flash::success('Biodata deleted successfully.');

        return redirect(route('biodatas.index'));
    }
}
