<!-- Id Field -->
{{--<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $rekomendasiReklame->id !!}</p>
</div>--}}


<div class="row">
    <div class="col-md-6">
        <!-- Jenis Reklame Field -->
        <div class="form-group">
            {!! Form::label('jenis_reklame', 'Jenis Reklame:') !!}
            <p>{!! $rekomendasiReklame->jenis_reklame !!}</p>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Teks Reklame Field -->
        <div class="form-group">
            {!! Form::label('teks_reklame', 'Teks Reklame:') !!}
            <p>{!! $rekomendasiReklame->teks_reklame !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <!-- Ukuran Reklame Field -->
        <div class="form-group">
            {!! Form::label('ukuran_reklame', 'Ukuran Reklame:') !!}
            <p>{!! $rekomendasiReklame->ukuran_reklame !!}</p>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Lama Pemasangan From Field -->
        <div class="form-group">
            {!! Form::label('lama_pemasangan_from', 'Lama Pemasangan Dari:') !!}
            <p>{!! $rekomendasiReklame->lama_pemasangan_from !!}</p>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <!-- Lama Pemasangan To Field -->
        <div class="form-group">
            {!! Form::label('lama_pemasangan_to', 'Lama Pemasangan Sampai:') !!}
            <p>{!! $rekomendasiReklame->lama_pemasangan_to !!}</p>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Lokasi Pemasangan Field -->
        <div class="form-group">
            {!! Form::label('lokasi_pemasangan', 'Lokasi Pemasangan:') !!}
            <p>{!! $rekomendasiReklame->lokasi_pemasangan !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <!-- Scan Desain Reklame Field -->
        <div class="form-group">
            {!! Form::label('scan_desain_reklame', 'Scan Desain Reklame:') !!}
            <p>{!! $rekomendasiReklame->scan_desain_reklame !!}</p>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Rekomendasi Id Field -->
        <div class="form-group">
            {!! Form::label('rekomendasi_id', 'Rekomendasi Id:') !!}
            <p>{!! $rekomendasiReklame->rekomendasi->nama !!}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <!-- Data Usaha Id Field -->
        <div class="form-group">
            {!! Form::label('data_usaha_id', 'Data Usaha Id:') !!}
            <p>{!! $rekomendasiReklame->dataUsaha->nama !!}</p>
        </div>
    </div>
    <div class="col-md-6">

    </div>
</div>