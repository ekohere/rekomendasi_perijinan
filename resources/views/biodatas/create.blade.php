@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Biodata
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
       
                    {!! Form::open(['route' => 'biodatas.store','class' => 'form-horizontal', 'files' => true]) !!}

                        @include('biodatas.fields')

                    {!! Form::close() !!}
               
    </div>
@endsection
