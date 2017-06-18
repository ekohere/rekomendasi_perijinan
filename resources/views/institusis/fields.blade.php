<!-- Kode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode', 'Kode:') !!}
    {!! Form::text('kode', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Kontak Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kontak', 'Kontak:') !!}
    {!! Form::text('kontak', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Institusi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_institusi_id', 'Jenis Institusi Id:') !!}
    {!! Form::number('jenis_institusi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Institusi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_institusi_id', 'Parent Institusi Id:') !!}
    {!! Form::number('parent_institusi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pimpinan Institusi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pimpinan_institusi_id', 'Pimpinan Institusi Id:') !!}
    {!! Form::number('pimpinan_institusi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('institusis.index') !!}" class="btn btn-default">Cancel</a>
</div>
