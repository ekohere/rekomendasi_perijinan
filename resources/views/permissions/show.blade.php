@extends('layouts.app')

@section('content')
    <section class="panel panel-warning">
        <header class="panel-heading">
            <h2 class="panel-title">{{isset($title)?$title:''}}</h2>
        </header>
        <div class="panel-body">

                        <a href="{{ url('permissions/' . $permission->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit permission"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['permissions', $permission->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete permission',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th class="text-right"> Name </th><td> {{ $permission->name }} </td></tr><tr><th class="text-right"> Display Name </th><td> {{ $permission->display_name }} </td></tr><tr><th class="text-right"> Description </th><td> {{ $permission->description }} </td></tr>
                                </tbody>
                            </table>
                        </div>

        </div>
    </section>
@endsection