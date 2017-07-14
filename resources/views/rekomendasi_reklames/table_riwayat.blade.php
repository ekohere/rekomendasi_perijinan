<table class="table table-responsive" id="rekomendasis-table">
    <thead>
    <th>Status</th>
    <th>Update Terakhir</th>
    <th>User</th>
    <th>Keterangan</th>
    </thead>
    <tbody>
    @foreach($rekomendasiReklame->rekomReklameHasStatusRekomendasis as $status)
        <tr>
            <td>{!! $status->statusRekomendasi->nama !!}</td>
            <td>{!! \Carbon\Carbon::parse($status->created_at)->format('d/M/Y H:i:s') !!}</td>
            <td>{!! $status->user->name or ''!!}</td>
            <td>{!! $status->keterangan or ''!!}</td>
        </tr>
    @endforeach
    </tbody>
</table>