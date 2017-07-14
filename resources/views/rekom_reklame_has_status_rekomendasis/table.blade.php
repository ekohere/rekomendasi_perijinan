<table class="table table-responsive" id="rekomReklameHasStatusRekomendasis-table">
    <thead>
        <th>Rekomendasi Reklame</th>
        <th>Status Rekomendasi</th>
        <th>Users</th>
        <th>Keterangan</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rekomReklameHasStatusRekomendasis as $rekomReklameHasStatusRekomendasi)
        <tr>
            <td>{!! $rekomReklameHasStatusRekomendasi->rekomendasi_reklame_id !!}</td>
            <td>{!! $rekomReklameHasStatusRekomendasi->status_rekomendasi_id !!}</td>
            <td>{!! $rekomReklameHasStatusRekomendasi->users_id !!}</td>
            <td>{!! $rekomReklameHasStatusRekomendasi->keterangan !!}</td>
            <td>
                {!! Form::open(['route' => ['rekomReklameHasStatusRekomendasis.destroy', $rekomReklameHasStatusRekomendasi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rekomReklameHasStatusRekomendasis.show', [$rekomReklameHasStatusRekomendasi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rekomReklameHasStatusRekomendasis.edit', [$rekomReklameHasStatusRekomendasi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>