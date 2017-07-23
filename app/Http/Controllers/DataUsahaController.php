<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDataUsahaRequest;
use App\Http\Requests\UpdateDataUsahaRequest;
use App\Models\DataUsaha;
use App\Repositories\DataUsahaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class DataUsahaController extends AppBaseController
{
    /** @var  DataUsahaRepository */
    private $dataUsahaRepository;

    public function __construct(DataUsahaRepository $dataUsahaRepo)
    {
        $this->dataUsahaRepository = $dataUsahaRepo;
    }

    /**
     * Display a listing of the DataUsaha.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->dataUsahaRepository->pushCriteria(new RequestCriteria($request));
        $dataUsahas = $this->dataUsahaRepository->paginate(10);

        return view('data_usahas.index')
            ->with('dataUsahas', $dataUsahas);
    }

    /**
     * Show the form for creating a new DataUsaha.
     *
     * @return Response
     */
    public function create()
    {
        return view('data_usahas.create');
    }

    /**
     * Store a newly created DataUsaha in storage.
     *
     * @param CreateDataUsahaRequest $request
     *
     * @return Response
     */
    public function store(CreateDataUsahaRequest $request)
    {
        $input = $request->all();

        $dataUsaha = $this->dataUsahaRepository->create($input);

        $requestData = $request->all();

        try{
            DB::beginTransaction();

            $dataUsahas = DataUsaha::create($requestData);
            $path1=null;
            $path2=null;
            $path3=null;

            if( $request->hasFile('scan_npwp')) {
                $ext=File::extension($request->file('scan_npwp')->getClientOriginalName());
                $filename='npwp'.$dataUsahas->id.'.'.$ext;
                $path1 = $request->scan_npwp->storeAs('data_scan_npwp', $filename,'local_public');
                chmod(public_path().'/'.$path1, 0777);
            }
            if($path1!=null){
                $dataUsahas->scan_npwp=$path1;
                $dataUsahas->save();
            }
            if( $request->hasFile('scan_siup')) {
                $ext=File::extension($request->file('scan_siup')->getClientOriginalName());
                $filename='siup'.$dataUsahas->id.'.'.$ext;
                $path2 = $request->scan_siup->storeAs('data_scan_siup', $filename,'local_public');
                chmod(public_path().'/'.$path2, 0777);
            }
            if($path2!=null){
                $dataUsahas->scan_siup=$path2;
                $dataUsahas->save();
            }
            if( $request->hasFile('scan_situ')) {
                $ext=File::extension($request->file('scan_situ')->getClientOriginalName());
                $filename='situ'.$dataUsahas->id.'.'.$ext;
                $path3 = $request->scan_situ->storeAs('data_scan_situ', $filename,'local_public');
                chmod(public_path().'/'.$path3, 0777);
            }
            if($path3!=null){
                $dataUsahas->scan_situ=$path3;
                $dataUsahas->save();
            }

            DB::commit();

            Session::flash('flash_message', 'Biodata added!');
        }catch(Exception $e){
            DB::rollback();
        }

        return redirect(route('dataUsahas.index'));
    }

    /**
     * Display the specified DataUsaha.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dataUsaha = $this->dataUsahaRepository->findWithoutFail($id);

        if (empty($dataUsaha)) {
            Flash::error('Data Usaha not found');

            return redirect(route('dataUsahas.index'));
        }

        return view('data_usahas.show')->with('dataUsaha', $dataUsaha);
    }

    /**
     * Show the form for editing the specified DataUsaha.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dataUsaha = $this->dataUsahaRepository->findWithoutFail($id);

        if (empty($dataUsaha)) {
            Flash::error('Data Usaha not found');

            return redirect(route('dataUsahas.index'));
        }

        return view('data_usahas.edit')->with('dataUsaha', $dataUsaha);
    }

    /**
     * Update the specified DataUsaha in storage.
     *
     * @param  int              $id
     * @param UpdateDataUsahaRequest $request
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

        try{
            DB::beginTransaction();

            $dataUsahas = DataUsaha::where('id',$id)->where('user_id',Auth::id())->firstOrFail();
            $dataUsahas->update($requestData);
            $path1=null;
            $path2=null;
            $path3=null;

            if( $request->hasFile('scan_npwp')) {
                $ext=File::extension($request->file('scan_npwp')->getClientOriginalName());
                $filename='npwp'.$dataUsahas->id.'.'.$ext;
                $path1 = $request->scan_npwp->storeAs('data_scan_npwp', $filename,'local_public');
                chmod(public_path().'/'.$path1, 0777);
            }
            if($path1!=null){
                $dataUsahas->scan_npwp=$path1;
                $dataUsahas->save();
            }
            if( $request->hasFile('scan_siup')) {
                $ext=File::extension($request->file('scan_siup')->getClientOriginalName());
                $filename='siup'.$dataUsahas->id.'.'.$ext;
                $path2 = $request->scan_siup->storeAs('data_scan_siup', $filename,'local_public');
                chmod(public_path().'/'.$path2, 0777);
            }
            if($path2!=null){
                $dataUsahas->scan_siup=$path2;
                $dataUsahas->save();
            }
            if( $request->hasFile('scan_situ')) {
                $ext=File::extension($request->file('scan_situ')->getClientOriginalName());
                $filename='situ'.$dataUsahas->id.'.'.$ext;
                $path3 = $request->scan_situ->storeAs('data_scan_situ', $filename,'local_public');
                chmod(public_path().'/'.$path3, 0777);
            }
            if($path3!=null){
                $dataUsahas->scan_situ=$path3;
                $dataUsahas->save();
            }

            DB::commit();

            Session::flash('flash_message', 'Biodata added!');
        }catch(Exception $e){
            DB::rollback();
        }

        return redirect(route('dataUsahas.index'));
    }

    /**
     * Remove the specified DataUsaha from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dataUsaha = $this->dataUsahaRepository->findWithoutFail($id);

        if (empty($dataUsaha)) {
            Flash::error('Data Usaha not found');

            return redirect(route('dataUsahas.index'));
        }

        $this->dataUsahaRepository->delete($id);

        Flash::success('Data Usaha deleted successfully.');

        return redirect(route('dataUsahas.index'));
    }
}
