@extends('layouts.app')

@section('content')
    <section class="panel panel-warning">
        <header class="panel-heading">
            <h2 class="panel-title">{{isset($title)?$title:''}}</h2>
        </header>
        <div class="panel-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <strong>Data Belum Lengkap Atau Sesuai. </strong> Lengkapi data yang diminta
                </div>
            @endif

                        {!! Form::model($user_role, [
                            'method' => 'PATCH',
                            'url' => ['/user_role', $user_role->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('user_role.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}
        </div>
    </section>
@endsection

@section('specific_page_vendor_top')
    <link rel="stylesheet" href="{{asset('assets/vendor/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/select2-bootstrap-theme/select2-bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/dropzone/basic.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/dropzone/dropzone.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/summernote/summernote.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/codemirror/lib/codemirror.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendor/codemirror/theme/monokai.min.css')}}" />
@endsection


@section('specific_page_vendor_bottom')
    <script src="{{asset('assets/vendor/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.min.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery-maskedinput/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('assets/vendor/fuelux/js/spinner.min.js')}}"></script>
    <script src="{{asset('assets/vendor/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-markdown/js/markdown.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-markdown/js/to-markdown.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-markdown/js/bootstrap-markdown.min.js')}}"></script>
    <script src="{{asset('assets/vendor/codemirror/lib/codemirror.min.js')}}"></script>
    <script src="{{asset('assets/vendor/codemirror/addon/selection/active-line.min.js')}}"></script>
    <script src="{{asset('assets/vendor/codemirror/addon/edit/matchbrackets.min.js')}}"></script>
    <script src="{{asset('assets/vendor/codemirror/mode/javascript/javascript.min.js')}}"></script>
    <script src="{{asset('assets/vendor/codemirror/mode/xml/xml.min.js')}}"></script>
    <script src="{{asset('assets/vendor/codemirror/mode/htmlmixed/htmlmixed.min.js')}}"></script>
    <script src="{{asset('assets/vendor/codemirror/mode/css/css.min.js')}}"></script>
    <script src="{{asset('assets/vendor/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
    <script src="{{asset('assets/vendor/ios7-switch/ios7-switch.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-confirmation/bootstrap-confirmation.min.js')}}"></script>
@endsection