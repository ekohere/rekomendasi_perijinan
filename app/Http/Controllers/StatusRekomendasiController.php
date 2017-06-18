<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStatusRekomendasiRequest;
use App\Http\Requests\UpdateStatusRekomendasiRequest;
use App\Repositories\StatusRekomendasiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class StatusRekomendasiController extends AppBaseController
{
    /** @var  StatusRekomendasiRepository */
    private $statusRekomendasiRepository;

    public function __construct(StatusRekomendasiRepository $statusRekomendasiRepo)
    {
        $this->statusRekomendasiRepository = $statusRekomendasiRepo;
    }

    /**
     * Display a listing of the StatusRekomendasi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->statusRekomendasiRepository->pushCriteria(new RequestCriteria($request));
        $statusRekomendasis = $this->statusRekomendasiRepository->all();

        return view('status_rekomendasis.index')
            ->with('statusRekomendasis', $statusRekomendasis);
    }

    /**
     * Show the form for creating a new StatusRekomendasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('status_rekomendasis.create');
    }

    /**
     * Store a newly created StatusRekomendasi in storage.
     *
     * @param CreateStatusRekomendasiRequest $request
     *
     * @return Response
     */
    public function store(CreateStatusRekomendasiRequest $request)
    {
        $input = $request->all();

        $statusRekomendasi = $this->statusRekomendasiRepository->create($input);

        Flash::success('Status Rekomendasi saved successfully.');

        return redirect(route('statusRekomendasis.index'));
    }

    /**
     * Display the specified StatusRekomendasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $statusRekomendasi = $this->statusRekomendasiRepository->findWithoutFail($id);

        if (empty($statusRekomendasi)) {
            Flash::error('Status Rekomendasi not found');

            return redirect(route('statusRekomendasis.index'));
        }

        return view('status_rekomendasis.show')->with('statusRekomendasi', $statusRekomendasi);
    }

    /**
     * Show the form for editing the specified StatusRekomendasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $statusRekomendasi = $this->statusRekomendasiRepository->findWithoutFail($id);

        if (empty($statusRekomendasi)) {
            Flash::error('Status Rekomendasi not found');

            return redirect(route('statusRekomendasis.index'));
        }

        return view('status_rekomendasis.edit')->with('statusRekomendasi', $statusRekomendasi);
    }

    /**
     * Update the specified StatusRekomendasi in storage.
     *
     * @param  int              $id
     * @param UpdateStatusRekomendasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStatusRekomendasiRequest $request)
    {
        $statusRekomendasi = $this->statusRekomendasiRepository->findWithoutFail($id);

        if (empty($statusRekomendasi)) {
            Flash::error('Status Rekomendasi not found');

            return redirect(route('statusRekomendasis.index'));
        }

        $statusRekomendasi = $this->statusRekomendasiRepository->update($request->all(), $id);

        Flash::success('Status Rekomendasi updated successfully.');

        return redirect(route('statusRekomendasis.index'));
    }

    /**
     * Remove the specified StatusRekomendasi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $statusRekomendasi = $this->statusRekomendasiRepository->findWithoutFail($id);

        if (empty($statusRekomendasi)) {
            Flash::error('Status Rekomendasi not found');

            return redirect(route('statusRekomendasis.index'));
        }

        $this->statusRekomendasiRepository->delete($id);

        Flash::success('Status Rekomendasi deleted successfully.');

        return redirect(route('statusRekomendasis.index'));
    }
}
