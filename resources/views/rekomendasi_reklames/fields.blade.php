<!-- Jenis Reklame Field -->
<div class="form-group {{ $errors->has('jenis_reklame') ? 'has-error' : ''}}">
    {!! Form::label('jenis_reklame', 'Jenis Reklame', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jenis_reklame',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('jenis_reklame', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Teks Reklame Field -->
<div class="form-group {{ $errors->has('teks_reklame') ? 'has-error' : ''}}">
    {!! Form::label('teks_reklame', 'Teks Reklame', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('teks_reklame',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('teks_reklame', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Ukuran Reklame Field -->
<div class="form-group {{ $errors->has('ukuran_reklame') ? 'has-error' : ''}}">
    {!! Form::label('ukuran_reklame', 'Ukuran Reklame', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('ukuran_reklame',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('ukuran_reklame', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Lama Pemasangan From Field -->
<div class="form-group {{ $errors->has('lama_pemasangan_from') ? 'has-error' : ''}}">
    {!! Form::label('lama_pemasangan_from', 'Tanggal Mulai Pemasangan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lama_pemasangan_from',isset($rekomendasiReklames->lama_pemasangan_from)?\Carbon\Carbon::parse($rekomendasiReklames->lama_pemasangan_from)->format('Y-m-d'):null, ['class' => 'form-control','required'=>'required','id'=>'datepicker','placeholder' => 'Tanggal/Bulan/Tahun']) !!}
        {!! $errors->first('lama_pemasangan_from', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Lama Pemasangan To Field -->
<div class="form-group {{ $errors->has('lama_pemasangan_to') ? 'has-error' : ''}}">
    {!! Form::label('lama_pemasangan_to', 'Tanggal Akhir Pemasangan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lama_pemasangan_to',isset($rekomendasiReklames->lama_pemasangan_to)?\Carbon\Carbon::parse($rekomendasiReklames->lama_pemasangan_to)->format('Y-m-d'):null, ['class' => 'form-control','required'=>'required','id'=>'datepicker1','placeholder' => 'Tanggal/Bulan/Tahun']) !!}
        {!! $errors->first('lama_pemasangan_to', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Lokasi Pemasangan Field -->
<div class="form-group {{ $errors->has('lokasi_pemasangan') ? 'has-error' : ''}}">
    {!! Form::label('lokasi_pemasangan', 'Lokasi Pemasangan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lokasi_pemasangan',null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('lokasi_pemasangan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Scan Desain Reklame Field -->
<div class="form-group {{ $errors->has('scan_desain_reklame') ? 'has-error' : ''}}">
    {!! Form::label('scan_desain_reklame', 'Scan Desain Reklame', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('scan_desain_reklame',null, ['class' => 'form-control','required'=>'required']) !!}
        <br \>
        <img id="cropreklame" src="{{isset($biodatas->scan_desain_reklame)?file_exists( public_path() . '/' . $biodatas->scan_desain_reklame)?asset($biodatas->scan_desain_reklame):asset('assets/images/no-image.png'):asset('assets/images/no-image.png')}}" alt="your image"  width="300" height="300"  />
        {{ Form::hidden('scan_desain_reklame', isset($biodatas->scan_desain_reklame)?file_exists( public_path() . '/' . $biodatas->scan_desain_reklame)?$biodatas->scan_desain_reklame:'':'') }}

        <script type="text/javascript">
            function readKTP(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#cropreklame').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#scan_desain_reklame").change(function(){
                readKTP(this);
            });
        </script>
        {!! $errors->first('scan_desain_reklame', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Rekomendasi Id Field -->
{{--<div class="form-group col-sm-6">
    {!! Form::label('rekomendasi_id', 'Rekomendasi:') !!}--}}
    {!! Form::hidden('rekomendasi_id', $rekomendasi, null, ['class' => 'form-control']) !!}
{{--</div>--}}

<!-- Data Usaha Id Field -->
<div class="form-group {{ $errors->has('data_usaha_id') ? 'has-error' : ''}}">
    {!! Form::label('data_usaha_id', 'Data Usaha', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('data_usaha_id',$data_usaha,null, ['class' => 'form-control','required'=>'required']) !!}
        {!! $errors->first('data_usaha_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<!-- Submit Field -->
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('rekomendasiReklames.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>
