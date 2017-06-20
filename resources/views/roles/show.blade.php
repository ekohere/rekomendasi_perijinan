@extends('layouts.app')

@section('content')
    <section class="panel panel-warning">
        <header class="panel-heading">
            <h2 class="panel-title">{{isset($title)?$title:''}}</h2>
        </header>
        <div class="panel-body">

                        <a href="{{ url('roles/' . $role->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit role"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['roles', $role->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete role',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr><th class="text-right"> Name </th><td> {{ $role->name }} </td></tr><tr><th class="text-right"> Display Name </th><td> {{ $role->display_name }} </td></tr><tr><th class="text-right"> Description </th><td> {{ $role->description }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
    </section>
@endsection