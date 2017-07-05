<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Institusi Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('institusi_id', 'Institusi:') !!}
    {!! Form::select('institusi_id', $institusis,null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Users Id Field -->
    {!! Form::hidden('users_id', Auth::id(), ['class' => 'form-control']) !!}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('rekomendasis.index') !!}" class="btn btn-default">Cancel</a>
</div>
