<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInstitusiRequest;
use App\Http\Requests\UpdateInstitusiRequest;
use App\Repositories\InstitusiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class InstitusiController extends AppBaseController
{
    /** @var  InstitusiRepository */
    private $institusiRepository;

    public function __construct(InstitusiRepository $institusiRepo)
    {
        $this->institusiRepository = $institusiRepo;
    }

    /**
     * Display a listing of the Institusi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->institusiRepository->pushCriteria(new RequestCriteria($request));
        $institusis = $this->institusiRepository->all();

        return view('institusis.index')
            ->with('institusis', $institusis);
    }

    /**
     * Show the form for creating a new Institusi.
     *
     * @return Response
     */
    public function create()
    {
        return view('institusis.create');
    }

    /**
     * Store a newly created Institusi in storage.
     *
     * @param CreateInstitusiRequest $request
     *
     * @return Response
     */
    public function store(CreateInstitusiRequest $request)
    {
        $input = $request->all();

        $institusi = $this->institusiRepository->create($input);

        Flash::success('Institusi saved successfully.');

        return redirect(route('institusis.index'));
    }

    /**
     * Display the specified Institusi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $institusi = $this->institusiRepository->findWithoutFail($id);

        if (empty($institusi)) {
            Flash::error('Institusi not found');

            return redirect(route('institusis.index'));
        }

        return view('institusis.show')->with('institusi', $institusi);
    }

    /**
     * Show the form for editing the specified Institusi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $institusi = $this->institusiRepository->findWithoutFail($id);

        if (empty($institusi)) {
            Flash::error('Institusi not found');

            return redirect(route('institusis.index'));
        }

        return view('institusis.edit')->with('institusi', $institusi);
    }

    /**
     * Update the specified Institusi in storage.
     *
     * @param  int              $id
     * @param UpdateInstitusiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstitusiRequest $request)
    {
        $institusi = $this->institusiRepository->findWithoutFail($id);

        if (empty($institusi)) {
            Flash::error('Institusi not found');

            return redirect(route('institusis.index'));
        }

        $institusi = $this->institusiRepository->update($request->all(), $id);

        Flash::success('Institusi updated successfully.');

        return redirect(route('institusis.index'));
    }

    /**
     * Remove the specified Institusi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $institusi = $this->institusiRepository->findWithoutFail($id);

        if (empty($institusi)) {
            Flash::error('Institusi not found');

            return redirect(route('institusis.index'));
        }

        $this->institusiRepository->delete($id);

        Flash::success('Institusi deleted successfully.');

        return redirect(route('institusis.index'));
    }
}
