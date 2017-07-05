<table class="table table-responsive" id="pegawais-table">
    <thead>
        <th>Nip</th>
        <th>OPD</th>
        <th>User</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pegawais as $pegawai)
        <tr>
            <td>{!! $pegawai->nip !!}</td>
            <td>{!! $pegawai->institusi->nama !!}</td>
            <td>{!! $pegawai->user->name !!}</td>
            <td>
                {!! Form::open(['route' => ['pegawais.destroy', $pegawai->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pegawais.show', [$pegawai->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pegawais.edit', [$pegawai->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>