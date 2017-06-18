<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJenjangPendidikanRequest;
use App\Http\Requests\UpdateJenjangPendidikanRequest;
use App\Repositories\JenjangPendidikanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class JenjangPendidikanController extends AppBaseController
{
    /** @var  JenjangPendidikanRepository */
    private $jenjangPendidikanRepository;

    public function __construct(JenjangPendidikanRepository $jenjangPendidikanRepo)
    {
        $this->jenjangPendidikanRepository = $jenjangPendidikanRepo;
    }

    /**
     * Display a listing of the JenjangPendidikan.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->jenjangPendidikanRepository->pushCriteria(new RequestCriteria($request));
        $jenjangPendidikans = $this->jenjangPendidikanRepository->all();

        return view('jenjang_pendidikans.index')
            ->with('jenjangPendidikans', $jenjangPendidikans);
    }

    /**
     * Show the form for creating a new JenjangPendidikan.
     *
     * @return Response
     */
    public function create()
    {
        return view('jenjang_pendidikans.create');
    }

    /**
     * Store a newly created JenjangPendidikan in storage.
     *
     * @param CreateJenjangPendidikanRequest $request
     *
     * @return Response
     */
    public function store(CreateJenjangPendidikanRequest $request)
    {
        $input = $request->all();

        $jenjangPendidikan = $this->jenjangPendidikanRepository->create($input);

        Flash::success('Jenjang Pendidikan saved successfully.');

        return redirect(route('jenjangPendidikans.index'));
    }

    /**
     * Display the specified JenjangPendidikan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $jenjangPendidikan = $this->jenjangPendidikanRepository->findWithoutFail($id);

        if (empty($jenjangPendidikan)) {
            Flash::error('Jenjang Pendidikan not found');

            return redirect(route('jenjangPendidikans.index'));
        }

        return view('jenjang_pendidikans.show')->with('jenjangPendidikan', $jenjangPendidikan);
    }

    /**
     * Show the form for editing the specified JenjangPendidikan.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $jenjangPendidikan = $this->jenjangPendidikanRepository->findWithoutFail($id);

        if (empty($jenjangPendidikan)) {
            Flash::error('Jenjang Pendidikan not found');

            return redirect(route('jenjangPendidikans.index'));
        }

        return view('jenjang_pendidikans.edit')->with('jenjangPendidikan', $jenjangPendidikan);
    }

    /**
     * Update the specified JenjangPendidikan in storage.
     *
     * @param  int              $id
     * @param UpdateJenjangPendidikanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateJenjangPendidikanRequest $request)
    {
        $jenjangPendidikan = $this->jenjangPendidikanRepository->findWithoutFail($id);

        if (empty($jenjangPendidikan)) {
            Flash::error('Jenjang Pendidikan not found');

            return redirect(route('jenjangPendidikans.index'));
        }

        $jenjangPendidikan = $this->jenjangPendidikanRepository->update($request->all(), $id);

        Flash::success('Jenjang Pendidikan updated successfully.');

        return redirect(route('jenjangPendidikans.index'));
    }

    /**
     * Remove the specified JenjangPendidikan from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $jenjangPendidikan = $this->jenjangPendidikanRepository->findWithoutFail($id);

        if (empty($jenjangPendidikan)) {
            Flash::error('Jenjang Pendidikan not found');

            return redirect(route('jenjangPendidikans.index'));
        }

        $this->jenjangPendidikanRepository->delete($id);

        Flash::success('Jenjang Pendidikan deleted successfully.');

        return redirect(route('jenjangPendidikans.index'));
    }
}
