<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRekomendasiReklameRequest;
use App\Http\Requests\UpdateRekomendasiReklameRequest;
use App\Models\DataUsaha;
use App\Models\Rekomendasi;
use App\Models\RekomReklameHasStatusRekomendasi;
use App\Repositories\RekomendasiReklameRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RekomendasiReklameController extends AppBaseController
{
    /** @var  RekomendasiReklameRepository */
    private $rekomendasiReklameRepository;

    public function __construct(RekomendasiReklameRepository $rekomendasiReklameRepo)
    {
        $this->rekomendasiReklameRepository = $rekomendasiReklameRepo;
    }

    /**
     * Display a listing of the RekomendasiReklame.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->rekomendasiReklameRepository->pushCriteria(new RequestCriteria($request));
        $rekomendasiReklames = $this->rekomendasiReklameRepository->paginate(10);

        return view('rekomendasi_reklames.index')
            ->with('rekomendasiReklames', $rekomendasiReklames);
    }

    /**
     * Show the form for creating a new RekomendasiReklame.
     *
     * @return Response
     */
    public function create()
    {
        $rekomendasi = Rekomendasi::pluck('nama','id');
        $data_usaha = DataUsaha::pluck('nama','id');

        return view('rekomendasi_reklames.create', compact('rekomendasi', 'data_usaha'));
    }

    /**
     * Store a newly created RekomendasiReklame in storage.
     *
     * @param CreateRekomendasiReklameRequest $request
     *
     * @return Response
     */
    public function store(CreateRekomendasiReklameRequest $request)
    {
        $input = $request->all();

        try{
            DB::beginTransaction();
            $rekomendasiReklame = $this->rekomendasiReklameRepository->create($input);
            RekomReklameHasStatusRekomendasi::create([
                'rekomendasi_reklame_id'=>$rekomendasiReklame->id,
                'status_rekomendasi_id'=>'1',
                'users_id'=>Auth::id()]);
            DB::commit();
            Flash::success('Rekomendasi Reklame saved successfully.');
        }catch (Exception $e){
            DB::rollback();

            Flash::error('Rekomendasi Reklame Gagal '.$e->getMessage());
        }
        return redirect(route('rekomendasiReklames.index'));
    }

    /**
     * Display the specified RekomendasiReklame.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $rekomendasiReklame = $this->rekomendasiReklameRepository->findWithoutFail($id);

        if (empty($rekomendasiReklame)) {
            Flash::error('Rekomendasi Reklame not found');

            return redirect(route('rekomendasiReklames.index'));
        }

        return view('rekomendasi_reklames.show')->with('rekomendasiReklame', $rekomendasiReklame);
    }

    /**
     * Show the form for editing the specified RekomendasiReklame.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $rekomendasi = Rekomendasi::pluck('nama','id');
        $data_usaha = DataUsaha::pluck('nama','id');

        $rekomendasiReklame = $this->rekomendasiReklameRepository->findWithoutFail($id);

        if (empty($rekomendasiReklame)) {
            Flash::error('Rekomendasi Reklame not found');

            return redirect(route('rekomendasiReklames.index'));
        }

        return view('rekomendasi_reklames.edit', compact('rekomendasiReklame', 'rekomendasi', 'data_usaha'));
    }

    /**
     * Update the specified RekomendasiReklame in storage.
     *
     * @param  int              $id
     * @param UpdateRekomendasiReklameRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRekomendasiReklameRequest $request)
    {
        $rekomendasiReklame = $this->rekomendasiReklameRepository->findWithoutFail($id);

        if (empty($rekomendasiReklame)) {
            Flash::error('Rekomendasi Reklame not found');

            return redirect(route('rekomendasiReklames.index'));
        }

        $rekomendasiReklame = $this->rekomendasiReklameRepository->update($request->all(), $id);

        Flash::success('Rekomendasi Reklame updated successfully.');

        return redirect(route('rekomendasiReklames.index'));
    }

    /**
     * Remove the specified RekomendasiReklame from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $rekomendasiReklame = $this->rekomendasiReklameRepository->findWithoutFail($id);

        if (empty($rekomendasiReklame)) {
            Flash::error('Rekomendasi Reklame not found');

            return redirect(route('rekomendasiReklames.index'));
        }

        $this->rekomendasiReklameRepository->delete($id);

        Flash::success('Rekomendasi Reklame deleted successfully.');

        return redirect(route('rekomendasiReklames.index'));
    }
}
