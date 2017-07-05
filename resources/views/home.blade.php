@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-2">
            <div class="thumbnail">
                <a href="/assets/images/150.jpg">
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
                </thead>
                <tbody>
                @foreach($rekomendasis as $rekomendasi)
                    <tr>
                        <td>{!! $rekomendasi->nama !!}</td>
                        <td>{!! $rekomendasi->institusi->nama !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
