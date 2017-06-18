@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Jenjang Pendidikan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jenjangPendidikan, ['route' => ['jenjangPendidikans.update', $jenjangPendidikan->id], 'method' => 'patch']) !!}

                        @include('jenjang_pendidikans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection