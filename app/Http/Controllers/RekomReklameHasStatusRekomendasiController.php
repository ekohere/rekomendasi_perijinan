<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRekomReklameHasStatusRekomendasiRequest;
use App\Http\Requests\UpdateRekomReklameHasStatusRekomendasiRequest;
use App\Repositories\RekomReklameHasStatusRekomendasiRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RekomReklameHasStatusRekomendasiController extends AppBaseController
{
    /** @var  RekomReklameHasStatusRekomendasiRepository */
    private $rekomReklameHasStatusRekomendasiRepository;

    public function __construct(RekomReklameHasStatusRekomendasiRepository $rekomReklameHasStatusRekomendasiRepo)
    {
        $this->rekomReklameHasStatusRekomendasiRepository = $rekomReklameHasStatusRekomendasiRepo;
    }

    /**
     * Display a listing of the RekomReklameHasStatusRekomendasi.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rekomReklameHasStatusRekomendasiRepository->pushCriteria(new RequestCriteria($request));
        $rekomReklameHasStatusRekomendasis = $this->rekomReklameHasStatusRekomendasiRepository->paginate(10);

        return view('rekom_reklame_has_status_rekomendasis.index')
            ->with('rekomReklameHasStatusRekomendasis', $rekomReklameHasStatusRekomendasis);
    }

    /**
     * Show the form for creating a new RekomReklameHasStatusRekomendasi.
     *
     * @return Response
     */
    public function create()
    {
        return view('rekom_reklame_has_status_rekomendasis.create');
    }

    /**
     * Store a newly created RekomReklameHasStatusRekomendasi in storage.
     *
     * @param CreateRekomReklameHasStatusRekomendasiRequest $request
     *
     * @return Response
     */
    public function store(CreateRekomReklameHasStatusRekomendasiRequest $request)
    {
        $input = $request->all();

        $rekomReklameHasStatusRekomendasi = $this->rekomReklameHasStatusRekomendasiRepository->create($input);

        Flash::success('Rekom Reklame Has Status Rekomendasi saved successfully.');

        return redirect(route('rekomReklameHasStatusRekomendasis.index'));
    }

    /**
     * Display the specified RekomReklameHasStatusRekomendasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rekomReklameHasStatusRekomendasi = $this->rekomReklameHasStatusRekomendasiRepository->findWithoutFail($id);

        if (empty($rekomReklameHasStatusRekomendasi)) {
            Flash::error('Rekom Reklame Has Status Rekomendasi not found');

            return redirect(route('rekomReklameHasStatusRekomendasis.index'));
        }

        return view('rekom_reklame_has_status_rekomendasis.show')->with('rekomReklameHasStatusRekomendasi', $rekomReklameHasStatusRekomendasi);
    }

    /**
     * Show the form for editing the specified RekomReklameHasStatusRekomendasi.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rekomReklameHasStatusRekomendasi = $this->rekomReklameHasStatusRekomendasiRepository->findWithoutFail($id);

        if (empty($rekomReklameHasStatusRekomendasi)) {
            Flash::error('Rekom Reklame Has Status Rekomendasi not found');

            return redirect(route('rekomReklameHasStatusRekomendasis.index'));
        }

        return view('rekom_reklame_has_status_rekomendasis.edit')->with('rekomReklameHasStatusRekomendasi', $rekomReklameHasStatusRekomendasi);
    }

    /**
     * Update the specified RekomReklameHasStatusRekomendasi in storage.
     *
     * @param  int              $id
     * @param UpdateRekomReklameHasStatusRekomendasiRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRekomReklameHasStatusRekomendasiRequest $request)
    {
        $rekomReklameHasStatusRekomendasi = $this->rekomReklameHasStatusRekomendasiRepository->findWithoutFail($id);

        if (empty($rekomReklameHasStatusRekomendasi)) {
            Flash::error('Rekom Reklame Has Status Rekomendasi not found');

            return redirect(route('rekomReklameHasStatusRekomendasis.index'));
        }

        $rekomReklameHasStatusRekomendasi = $this->rekomReklameHasStatusRekomendasiRepository->update($request->all(), $id);

        Flash::success('Rekom Reklame Has Status Rekomendasi updated successfully.');

        return redirect(route('rekomReklameHasStatusRekomendasis.index'));
    }

    /**
     * Remove the specified RekomReklameHasStatusRekomendasi from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rekomReklameHasStatusRekomendasi = $this->rekomReklameHasStatusRekomendasiRepository->findWithoutFail($id);

        if (empty($rekomReklameHasStatusRekomendasi)) {
            Flash::error('Rekom Reklame Has Status Rekomendasi not found');

            return redirect(route('rekomReklameHasStatusRekomendasis.index'));
        }

        $this->rekomReklameHasStatusRekomendasiRepository->delete($id);

        Flash::success('Rekom Reklame Has Status Rekomendasi deleted successfully.');

        return redirect(route('rekomReklameHasStatusRekomendasis.index'));
    }
}
