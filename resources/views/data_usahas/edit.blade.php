@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Data Usaha
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($dataUsaha, ['route' => ['dataUsahas.update','class' => 'form-horizontal', $dataUsaha->id], 'method' => 'patch', 'files'=>true]) !!}

                        @include('data_usahas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection