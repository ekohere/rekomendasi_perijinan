<table class="table table-responsive" id="statusRekomendasis-table">
    <thead>
        <th>Nama</th>
        <th>Keterangan</th>
        <th>Parent Status Id</th>
        <th>Institusi Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($statusRekomendasis as $statusRekomendasi)
        <tr>
            <td>{!! $statusRekomendasi->nama !!}</td>
            <td>{!! $statusRekomendasi->keterangan !!}</td>
            <td>{!! $statusRekomendasi->parent_status_id !!}</td>
            <td>{!! $statusRekomendasi->institusi_id !!}</td>
            <td>
                {!! Form::open(['route' => ['statusRekomendasis.destroy', $statusRekomendasi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('statusRekomendasis.show', [$statusRekomendasi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('statusRekomendasis.edit', [$statusRekomendasi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>