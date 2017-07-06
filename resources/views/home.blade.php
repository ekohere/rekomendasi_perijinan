@extends('layouts.app')

@section('content')
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')
    <br>
    <div class="row">
        <div class="col-md-2">
            <div class="thumbnail">
                <a href="{{route('rekomendasiReklames.create')}}">
                    <img src="/assets/images/150.jpg" alt="Lights" style="width:100%">
                    <div class="caption">
                        <p align="center">Pengajuan Rekomendasi Reklame</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Rekomendasi Yang Telah Diajukan</h3>
        </div>
        <div class="box-body">
            <table class="table table-responsive" id="rekomendasis-table">
                <thead>
                <th>Nama</th>
                <th>Institusi</th>
                <th>Status</th>
                <th>Update Terakhir</th>
                <th>User</th>
                <th>Detail</th>
                </thead>
                <tbody>
                @foreach($rekomendasi_reklames as $rekomendasi_reklame)
                        <tr>
                            <td>{!! $rekomendasi_reklame->rekomendasi->nama !!}</td>
                            <td>{!! $rekomendasi_reklame->rekomendasi->institusi->nama !!}</td>
                            <td>{!! $rekomendasi_reklame->lastStatusRekomendasi()->statusRekomendasi->nama or ''!!}</td>
                            <td>{!! \Carbon\Carbon::parse($rekomendasi_reklame->lastStatusRekomendasi()['created_at'])->format('d/M/Y H:i:s') !!}</td>
                            <td>{!! $rekomendasi_reklame->lastStatusRekomendasi()->user->name or ''!!}</td>
                            <td><a href="{!! route('rekomendasiReklames.show', [$rekomendasi_reklame->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a></td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
