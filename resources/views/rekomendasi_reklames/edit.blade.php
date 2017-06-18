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
                   {!! Form::model($rekomendasiReklame, ['route' => ['rekomendasiReklames.update', $rekomendasiReklame->id], 'method' => 'patch']) !!}

                        @include('rekomendasi_reklames.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection