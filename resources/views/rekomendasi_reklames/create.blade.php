@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Rekomendasi Reklame
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'rekomendasiReklames.store','class' => 'form-horizontal','files'=>true]) !!}

                        @include('rekomendasi_reklames.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
