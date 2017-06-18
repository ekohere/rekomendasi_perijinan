@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Institusi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($institusi, ['route' => ['institusis.update', $institusi->id], 'method' => 'patch']) !!}

                        @include('institusis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection