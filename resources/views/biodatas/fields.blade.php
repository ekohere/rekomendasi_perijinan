<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nik', 'Nik:') !!}
    {!! Form::text('nik', null, ['class' => 'form-control']) !!}
</div>

<!-- Npwp Pribadi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('npwp_pribadi', 'Npwp Pribadi:') !!}
    {!! Form::text('npwp_pribadi', null, ['class' => 'form-control']) !!}
</div>

<!-- Scan Ktp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scan_ktp', 'Scan Ktp:') !!}
    {!! Form::text('scan_ktp', null, ['class' => 'form-control']) !!}
</div>

<!-- Scan Npwp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('scan_npwp', 'Scan Npwp:') !!}
    {!! Form::text('scan_npwp', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenjang Pendidikan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenjang_pendidikan_id', 'Jenjang Pendidikan Id:') !!}
    {!! Form::number('jenjang_pendidikan_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tempat Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
    {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    {!! Form::date('tanggal_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    {!! Form::text('jenis_kelamin', null, ['class' => 'form-control']) !!}
</div>

<!-- Kewarganegaraan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kewarganegaraan', 'Kewarganegaraan:') !!}
    {!! Form::text('kewarganegaraan', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Perkawinan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_perkawinan', 'Status Perkawinan:') !!}
    {!! Form::text('status_perkawinan', null, ['class' => 'form-control']) !!}
</div>

<!-- Agama Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agama_id', 'Agama Id:') !!}
    {!! Form::number('agama_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::text('foto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('biodatas.index') !!}" class="btn btn-default">Cancel</a>
</div>
