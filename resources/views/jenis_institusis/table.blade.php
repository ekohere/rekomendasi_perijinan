<table class="table table-responsive" id="jenisInstitusis-table">
    <thead>
        <th>Nama</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($jenisInstitusis as $jenisInstitusi)
        <tr>
            <td>{!! $jenisInstitusi->nama !!}</td>
            <td>{!! $jenisInstitusi->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['jenisInstitusis.destroy', $jenisInstitusi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jenisInstitusis.show', [$jenisInstitusi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jenisInstitusis.edit', [$jenisInstitusi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>