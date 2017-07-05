<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePegawaiRequest;
use App\Http\Requests\UpdatePegawaiRequest;
use App\Models\Institusi;
use App\Repositories\PegawaiRepository;
use App\Http\Controllers\AppBaseController;
use App\User;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PegawaiController extends AppBaseController
{
    /** @var  PegawaiRepository */
    private $pegawaiRepository;

    public function __construct(PegawaiRepository $pegawaiRepo)
    {
        $this->pegawaiRepository = $pegawaiRepo;
    }

    /**
     * Display a listing of the Pegawai.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->pegawaiRepository->pushCriteria(new RequestCriteria($request));
        $pegawais = $this->pegawaiRepository->paginate(10);

        return view('pegawais.index')
            ->with('pegawais', $pegawais);
    }

    /**
     * Show the form for creating a new Pegawai.
     *
     * @return Response
     */
    public function create()
    {
        $institusis=Institusi::pluck('nama','id');
        $users=User::pluck('name','id');
        return view('pegawais.create',compact('institusis','users'));
    }

    /**
     * Store a newly created Pegawai in storage.
     *
     * @param CreatePegawaiRequest $request
     *
     * @return Response
     */
    public function store(CreatePegawaiRequest $request)
    {
        $input = $request->all();

        $pegawai = $this->pegawaiRepository->create($input);

        Flash::success('Pegawai saved successfully.');

        return redirect(route('pegawais.index'));
    }

    /**
     * Display the specified Pegawai.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pegawai = $this->pegawaiRepository->findWithoutFail($id);

        if (empty($pegawai)) {
            Flash::error('Pegawai not found');

            return redirect(route('pegawais.index'));
        }

        return view('pegawais.show')->with('pegawai', $pegawai);
    }

    /**
     * Show the form for editing the specified Pegawai.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pegawai = $this->pegawaiRepository->findWithoutFail($id);

        if (empty($pegawai)) {
            Flash::error('Pegawai not found');

            return redirect(route('pegawais.index'));
        }
        $institusis=Institusi::pluck('nama','id');
        $users=User::pluck('name','id');
        return view('pegawais.edit',compact('institusis','users'))->with('pegawai', $pegawai);
    }

    /**
     * Update the specified Pegawai in storage.
     *
     * @param  int              $id
     * @param UpdatePegawaiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePegawaiRequest $request)
    {
        $pegawai = $this->pegawaiRepository->findWithoutFail($id);

        if (empty($pegawai)) {
            Flash::error('Pegawai not found');

            return redirect(route('pegawais.index'));
        }

        $pegawai = $this->pegawaiRepository->update($request->all(), $id);

        Flash::success('Pegawai updated successfully.');

        return redirect(route('pegawais.index'));
    }

    /**
     * Remove the specified Pegawai from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pegawai = $this->pegawaiRepository->findWithoutFail($id);

        if (empty($pegawai)) {
            Flash::error('Pegawai not found');

            return redirect(route('pegawais.index'));
        }

        $this->pegawaiRepository->delete($id);

        Flash::success('Pegawai deleted successfully.');

        return redirect(route('pegawais.index'));
    }
}
