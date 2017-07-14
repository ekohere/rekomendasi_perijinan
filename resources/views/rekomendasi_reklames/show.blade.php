@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Rekomendasi Reklame
        </h1>
    </section>

    <div class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <a href="{!! route('home') !!}" class="btn btn-default">Kembali</a>

                @role(('tim_teknis_opd'))
                @if($rekomendasiReklame->lastStatusRekomendasi()->statusRekomendasi->id===1)
                <a href="{!! url('rekomendasi/verifikasi',$rekomendasiReklame->id) !!}" class="btn btn-primary" onclick="return confirm('Apakah Rekomendasi Ini Akan Diverifikasi?')">Proses Verifikasi</a>
                    @endif
                    @endrole

                @role(('tim_teknis_opd'))
                @if($rekomendasiReklame->lastStatusRekomendasi()->statusRekomendasi->id===2)
                <a href="{!! url('rekomendasi/verifikasi_valid',$rekomendasiReklame->id) !!}" class="btn btn-primary" onclick="return confirm('Apakah Rekomendasi Ini Valid?')">Verifikasi Valid</a>
                    @endif
                    @endrole

                @role(('pimpinan_opd'))
                <a href="{!! url('rekomendasi/disetujui',$rekomendasiReklame->id) !!}" class="btn btn-primary" onclick="return confirm('Apakah Rekomendasi Ini Disetujui?')">Disetujui</a>
                @endrole

                @role(('tim_teknis_opd'))
                <a href="{!! url('rekomendasi/tolak',$rekomendasiReklame->id) !!}" class="btn btn-danger" onclick="return confirm('Apakah Rekomendasi Ini Akan Diverifikasi?')">Ditolak</a>
                @endrole

                </div>
            <div class="box-body">

                <div class="row" style="padding-left: 20px">
                    @include('rekomendasi_reklames.show_fields')
                    <a href="{!! route('rekomendasiReklames.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Riwayat Status Rekomendasi</h3>
            </div>
            <div class="box-body">
                @include('rekomendasi_reklames.table_riwayat')
            </div>
        </div>
    </div>
@endsection
