<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBiodataRequest;
use App\Http\Requests\UpdateBiodataRequest;
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
        $this->biodataRepository->pushCriteria(new RequestCriteria($request));
        $biodatas = $this->biodataRepository->all();

        return view('biodatas.index')
            ->with('biodatas', $biodatas);
    }

    /**
     * Show the form for creating a new Biodata.
     *
     * @return Response
     */
    public function create()
    {
        return view('biodatas.create');
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
        $input = $request->all();

        $biodata = $this->biodataRepository->create($input);

        $requestData = $request->all();

       try{
            DB::beginTransaction();

            $biodatum=Biodata::create($requestData);

            $path=null;

            if( $request->hasFile('foto')) {
                $ext=File::extension($request->file('foto')->getClientOriginalName());
                $path = $request->foto->storeAs('images', $biodatum->id.'.'.$ext,'local_public');
            }
            if($path!=null){
                $biodatum->foto=$path;
                $biodatum->save();
            }


            DB::commit();

            Session::flash('flash_message', 'Buku added!');
            }catch(Exception $e){
            DB::rollback();
        }

        Flash::success('Biodata saved successfully.');

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
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        try{
            DB::beginTransaction();

           $biodata = Buku::where('id',$id)->firstOrFail();
            $biodata->update($requestData);

            $path=null;

            if( $request->hasFile('foto')) {
                $ext=File::extension($request->file('foto')->getClientOriginalName());
                $path = $request->foto->storeAs('scan_buku', $biodata->id.'.'.$ext,'local_public');
            }
            if($path!=null){
                $biodata->foto=$path;
                $biodata->save();
            }


            DB::commit();

            Session::flash('flash_message', 'Buku added!');
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
