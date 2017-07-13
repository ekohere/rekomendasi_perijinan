<table class="table table-responsive" id="biodatas-table">
    <thead>
        <th>User</th>
        <th>Nik</th>
        <th>Npwp Pribadi</th>
        <th>Scan Ktp</th>
        <th>Scan Npwp</th>
        <th>Jenjang Pendidikan</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Kewarganegaraan</th>
        <th>Status Perkawinan</th>
        <th>Agama</th>
        <th>Website</th>
        <th>Foto</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($biodatas as $biodata)
        <tr>
            <td>{!! $biodata->user_id !!}</td>
            <td>{!! $biodata->nik !!}</td>
            <td>{!! $biodata->npwp_pribadi !!}</td>
            <td>{!! $biodata->scan_ktp !!}</td>
            <td>{!! $biodata->scan_npwp !!}</td>
            <td>{!! $biodata->jenjang_pendidikan_id !!}</td>
            <td>{!! $biodata->tempat_lahir !!}</td>
            <td>{!! $biodata->tanggal_lahir !!}</td>
            <td>{!! $biodata->jenis_kelamin !!}</td>
            <td>{!! $biodata->kewarganegaraan !!}</td>
            <td>{!! $biodata->status_perkawinan !!}</td>
            <td>{!! $biodata->agama_id !!}</td>
            <td>{!! $biodata->website !!}</td>
            <td>{!! $biodata->foto !!}</td>
            <td>
                {!! Form::open(['route' => ['biodatas.destroy', $biodata->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('biodatas.show', [$biodata->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('biodatas.edit', [$biodata->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>