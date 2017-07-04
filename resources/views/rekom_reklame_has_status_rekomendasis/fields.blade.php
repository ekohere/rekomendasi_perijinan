<!-- Rekomendasi Reklame Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rekomendasi_reklame_id', 'Rekomendasi Reklame:') !!}
    {!! Form::number('rekomendasi_reklame_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Rekomendasi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_rekomendasi_id', 'Status Rekomendasi:') !!}
    {!! Form::number('status_rekomendasi_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users:') !!}
    {!! Form::number('users_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('rekomReklameHasStatusRekomendasis.index') !!}" class="btn btn-default">Cancel</a>
</div>
