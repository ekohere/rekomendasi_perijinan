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


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
    $( "#lama_pemasangan_from" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>
  <script>
  $( function() {
    $( "#lama_pemasangan_to" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>


<!-- Lama Pemasangan From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lama_pemasangan_from', 'Tanggal Mulai Pemasangan:') !!}
    {!! Form::text('lama_pemasangan_from', null, ['class' => 'form-control','placeholder'=>'Bulan/Tanggal/Tahun']) !!}
</div>

<!-- Lama Pemasangan To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lama_pemasangan_to', 'Tanggal Akhir Pemasangan:') !!}
    {!! Form::text('lama_pemasangan_to', null, ['class' => 'form-control','placeholder'=>'Bulan/Tanggal/Tahun']) !!}
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
{{--<div class="form-group col-sm-6">
    {!! Form::label('rekomendasi_id', 'Rekomendasi:') !!}--}}
    {!! Form::hidden('rekomendasi_id', $rekomendasi, null, ['class' => 'form-control']) !!}
{{--</div>--}}

<!-- Data Usaha Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_usaha_id', 'Data Usaha:') !!}
    {!! Form::select('data_usaha_id', $data_usaha, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('rekomendasiReklames.index') !!}" class="btn btn-default">Cancel</a>
</div>
