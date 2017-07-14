<!-- Nip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nip', 'Nip:') !!}
    {!! Form::text('nip', null, ['class' => 'form-control']) !!}
</div>

<!-- Institusi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institusi_id', 'Institusi:') !!}
    {!! Form::select('institusi_id', $institusis ,null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('users_id', 'Users:') !!}
    {!! Form::select('users_id',$users, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pegawais.index') !!}" class="btn btn-default">Cancel</a>
</div>
