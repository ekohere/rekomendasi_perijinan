@extends('layouts.app')

@section('content')

    <section class="panel panel-warning">
        <header class="panel-heading ">
            <div class="panel-actions">
                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
            </div>
            <h2 class="panel-title">{{isset($title)?$title:''}}</h2>
        </header>
        <div class="panel-body">
            <a href="{{ url('/permissions/create') }}" class="mb-xs mt-xs mr-xs btn btn-primary" ><i class="fa fa-plus"></i> Tambah</a>

            <form id="form_filter" >
            <div class="row form-inline form-horizontal">
                <div class="col-sm-12 col-md-6">
                    <div class="col-md-2">
                        {!! Form::select('pagination', ['10'=>'10','25'=>'25','50'=>'50','100'=>'100'], isset($_GET['pagination'])?$_GET['pagination']:25, ["onchange"=>"this.form.submit();",'class' => 'form-control mb-md']) !!}
                    </div>
                    <div class="col-md-4">
                        <label class="control-label"> data per halaman</label>
                    </div>

                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="datatable-default_filter" class="dataTables_filter">
                        <label><input class="form-control" value="{{isset($_GET['search'])?$_GET['search']:''}}" name="search" placeholder="Search" aria-controls="datatable-default">
                        </label></div>
                </div>
            </div>
            </form>
                            <table class="table table-no-more table-bordered table-striped mb-none">
                                <thead>
                                    <tr>
                                        <th>ID</th><th> Name </th><th> Display Name </th><th> Description </th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($permissions as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td><td>{{ $item->display_name }}</td><td>{{ $item->description }}</td>
                                        <td>
                                            <a href="{{ url('/permissions/' . $item->id) }}" class="btn btn-success btn-xs" title="View permission"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                            <a href="{{ url('/permissions/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit permission"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/permissions', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete permission" />', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete permission',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $permissions->render() !!} </div>
        </div>
    </section>
@endsection