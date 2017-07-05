<table class="table table-responsive" id="rekomendasiReklames-table">
    <thead>
        <th>Jenis Reklame</th>
        <th>Teks Reklame</th>
        <th>Ukuran Reklame</th>
        <th>Lama Pemasangan Dari</th>
        <th>Lama Pemasangan Sampai</th>
        <th>Lokasi Pemasangan</th>
        <th>Scan Desain Reklame</th>
        <th>Rekomendasi</th>
        <th>Data Usaha</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($rekomendasiReklames as $rekomendasiReklame)
        <tr>
            <td>{!! $rekomendasiReklame->jenis_reklame !!}</td>
            <td>{!! $rekomendasiReklame->teks_reklame !!}</td>
            <td>{!! $rekomendasiReklame->ukuran_reklame !!}</td>
            <td>{!! $rekomendasiReklame->lama_pemasangan_from !!}</td>
            <td>{!! $rekomendasiReklame->lama_pemasangan_to !!}</td>
            <td>{!! $rekomendasiReklame->lokasi_pemasangan !!}</td>
            <td>{!! $rekomendasiReklame->scan_desain_reklame !!}</td>
            <td>{!! $rekomendasiReklame->rekomendasi->nama !!}</td>
            <td>{!! $rekomendasiReklame->dataUsaha->nama !!}</td>
            <td>
                {!! Form::open(['route' => ['rekomendasiReklames.destroy', $rekomendasiReklame->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rekomendasiReklames.show', [$rekomendasiReklame->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rekomendasiReklames.edit', [$rekomendasiReklame->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>