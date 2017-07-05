<table class="table table-responsive" id="rekomendasis-table">
    <thead>
        <th>Nama</th>
        <th>Institusi</th>
        <th>Url</th>
        <th>Users</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rekomendasis as $rekomendasi)
        <tr>
            <td>{!! $rekomendasi->nama !!}</td>
            <td>{!! $rekomendasi->institusi->nama !!}</td>
            <td>{!! $rekomendasi->url !!}</td>
            <td>{!! $rekomendasi->user->name !!}</td>
            <td>
                {!! Form::open(['route' => ['rekomendasis.destroy', $rekomendasi->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rekomendasis.show', [$rekomendasi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rekomendasis.edit', [$rekomendasi->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>