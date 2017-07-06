@extends('layouts.app')

@section('content')
<div class="content">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Rekomendasi Reklame</h3>
        </div>
        <div class="box-body">
            <table class="table table-responsive" id="rekomendasis-table">
                <thead>
                <th>Nama</th>
                <th>Institusi</th>
                <th>Status</th>
                <th>Update Terakhir</th>
                <th>User</th>
                </thead>
                <tbody>
                @foreach($rekomendasi_reklames as $rekomendasi_reklame)
                    <tr>
                        <td>{!! $rekomendasi_reklame->rekomendasi->nama !!}</td>
                        <td>{!! $rekomendasi_reklame->rekomendasi->institusi->nama !!}</td>
                        <td>{!! $rekomendasi_reklame->lastStatusRekomendasi()->statusRekomendasi->nama or ''!!}</td>
                        <td>{!! \Carbon\Carbon::parse($rekomendasi_reklame->lastStatusRekomendasi()['created_at'])->format('d/M/Y H:i:s') !!}</td>
                        <td>{!! $rekomendasi_reklame->lastStatusRekomendasi()->user->name or ''!!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
