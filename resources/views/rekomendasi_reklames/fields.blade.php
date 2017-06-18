<!-- Jenis Reklame Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_reklame', 'Jenis Reklame:') !!}
    {!! Form::text('jenis_reklame', null, ['class' => 'form-control']) !!}
</div>

<!-- Teks Reklame Field -->
<div class="form-group col-sm-6">
    {!! Form::label('teks_reklame', 'Teks Reklame:') !!}
    {!! Form::text('teks_reklame', null, ['class' => 'form-control']) !!}
</div>

<!-- Ukuran Reklame Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ukuran_reklame', 'Ukuran Reklame:') !!}
    {!! Form::text('ukuran_reklame', null, ['class' => 'form-control']) !!}
</div>

<!-- Lama Pemasangan From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lama_pemasangan_from', 'Lama Pemasangan From:') !!}
    {!! Form::date('lama_pemasangan_from', null, ['class' => 'form-control']) !!}
</div>

<!-- Lama Pemasangan To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lama_pemasangan_to', 'Lama Pemasangan To:') !!}
    {!! Form::date('lama_pemasangan_to', null, ['class' => 'form-control']) !!}
</div>

<!-- Lokasi Pemasangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lokasi_pemasangan', 'Lokasi Pemasangan:') !!}
    {!! Form::text('lokasi_pemasangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Scan Desain Reklame Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scan_desain_reklame', 'Scan Desain Reklame:') !!}
    {!! Form::text('scan_desain_reklame', null, ['class' => 'form-control']) !!}
</div>

<!-- Rekomendasi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rekomendasi_id', 'Rekomendasi Id:') !!}
    {!! Form::number('rekomendasi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Usaha Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_usaha_id', 'Data Usaha Id:') !!}
    {!! Form::number('data_usaha_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('rekomendasiReklames.index') !!}" class="btn btn-default">Cancel</a>
</div>
