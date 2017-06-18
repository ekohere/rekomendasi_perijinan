@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Rekom Reklame Has Status Rekomendasi
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'rekomReklameHasStatusRekomendasis.store']) !!}

                        @include('rekom_reklame_has_status_rekomendasis.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
