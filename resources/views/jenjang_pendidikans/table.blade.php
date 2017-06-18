<table class="table table-responsive" id="jenjangPendidikans-table">
    <thead>
        <th>Nama</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($jenjangPendidikans as $jenjangPendidikan)
        <tr>
            <td>{!! $jenjangPendidikan->nama !!}</td>
            <td>
                {!! Form::open(['route' => ['jenjangPendidikans.destroy', $jenjangPendidikan->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jenjangPendidikans.show', [$jenjangPendidikan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jenjangPendidikans.edit', [$jenjangPendidikan->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>