<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_status_id', 'Parent Status Id:') !!}
    {!! Form::number('parent_status_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Institusi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institusi_id', 'Institusi Id:') !!}
    {!! Form::number('institusi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('statusRekomendasis.index') !!}" class="btn btn-default">Cancel</a>
</div>
