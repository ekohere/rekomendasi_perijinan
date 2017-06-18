@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Status Rekomendasi
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($statusRekomendasi, ['route' => ['statusRekomendasis.update', $statusRekomendasi->id], 'method' => 'patch']) !!}

                        @include('status_rekomendasis.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection