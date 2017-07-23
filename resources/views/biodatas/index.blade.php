@extends('layouts.app')

@section('content')
    <script type="text/javascript">

        $( function() {
            $( "#tanggal_lahir" ).datepicker({
                format: "yyyy-mm-dd",
                autoclose: true
            });
        } );
    </script>
    <section class="content-header">
        <h1 class="pull-left">Biodata</h1>
        <h1 class="pull-right">

        </h1>

    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                @include('biodatas.create')
            </div>
        </div>
    </div>
@endsection

