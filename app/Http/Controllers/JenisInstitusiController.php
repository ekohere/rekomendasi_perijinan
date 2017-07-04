<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJenisInstitusiRequest;
use App\Http\Requests\UpdateJenisInstitusiRequest;
use App\Repositories\JenisInstitusiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JenisInstitusiController extends AppBaseController
{
    /** @var  JenisInstitusiRepository */
    private $jenisInstitusiRepository;

    public function __construct(JenisInstitusiRepository $jenisInstitusiRepo)
    {
        $this->jenisInstitusiRepository = $jenisInstitusiRepo;
    }

    /**
     * Display a listing of the JenisInstitusi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jenisInstitusiRepository->pushCriteria(new RequestCriteria($request));
        $jenisInstitusis = $this->jenisInstitusiRepository->all();
        
        return view('jenis_institusis.index')
            ->with('jenisInstitusis', $jenisInstitusis);
    }

    /**
     * Show the form for creating a new JenisInstitusi.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenis_institusis.create');
    }

    /**
     * Store a newly created JenisInstitusi in storage.
     *
     * @param CreateJenisInstitusiRequest $request
     *
     * @return Response
     */
    public function store(CreateJenisInstitusiRequest $request)
    {
        $input = $request->all();

        $jenisInstitusi = $this->jenisInstitusiRepository->create($input);

        Flash::success('Jenis Institusi saved successfully.');

        return redirect(route('jenisInstitusis.index'));
    }

    /**
     * Display the specified JenisInstitusi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenisInstitusi = $this->jenisInstitusiRepository->findWithoutFail($id);

        if (empty($jenisInstitusi)) {
            Flash::error('Jenis Institusi not found');

            return redirect(route('jenisInstitusis.index'));
        }

        return view('jenis_institusis.show')->with('jenisInstitusi', $jenisInstitusi);
    }

    /**
     * Show the form for editing the specified JenisInstitusi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenisInstitusi = $this->jenisInstitusiRepository->findWithoutFail($id);

        if (empty($jenisInstitusi)) {
            Flash::error('Jenis Institusi not found');

            return redirect(route('jenisInstitusis.index'));
        }

        return view('jenis_institusis.edit')->with('jenisInstitusi', $jenisInstitusi);
    }

    /**
     * Update the specified JenisInstitusi in storage.
     *
     * @param  int              $id
     * @param UpdateJenisInstitusiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenisInstitusiRequest $request)
    {
        $jenisInstitusi = $this->jenisInstitusiRepository->findWithoutFail($id);

        if (empty($jenisInstitusi)) {
            Flash::error('Jenis Institusi not found');

            return redirect(route('jenisInstitusis.index'));
        }

        $jenisInstitusi = $this->jenisInstitusiRepository->update($request->all(), $id);

        Flash::success('Jenis Institusi updated successfully.');

        return redirect(route('jenisInstitusis.index'));
    }

    /**
     * Remove the specified JenisInstitusi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenisInstitusi = $this->jenisInstitusiRepository->findWithoutFail($id);

        if (empty($jenisInstitusi)) {
            Flash::error('Jenis Institusi not found');

            return redirect(route('jenisInstitusis.index'));
        }

        $this->jenisInstitusiRepository->delete($id);

        Flash::success('Jenis Institusi deleted successfully.');

        return redirect(route('jenisInstitusis.index'));
    }
}
