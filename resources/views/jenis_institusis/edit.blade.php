@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jenis Institusi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jenisInstitusi, ['route' => ['jenisInstitusis.update', $jenisInstitusi->id], 'method' => 'patch']) !!}

                        @include('jenis_institusis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection