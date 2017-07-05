<table class="table table-responsive" id="institusis-table">
    <thead>
        <th>Kode</th>
        <th>Nama</th>
        <th>Kontak</th>
        <th>Email</th>
        <th>Jenis OPD</th>
        <th>OPD Induk</th>
        <th>Pimpinan OPD</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($institusis as $institusi)
        <tr>
            <td>{!! $institusi->kode !!}</td>
            <td>{!! $institusi->nama !!}</td>
            <td>{!! $institusi->kontak !!}</td>
            <td>{!! $institusi->email !!}</td>
            <td>{!! $institusi->jenisInstitusi->nama !!}</td>
            <td>{!! $institusi->parent_institusi_id !!}</td>
            <td>{!! $institusi->pimpinan_institusi_id !!}</td>
            <td>
                {!! Form::open(['route' => ['institusis.destroy', $institusi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('institusis.show', [$institusi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('institusis.edit', [$institusi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>