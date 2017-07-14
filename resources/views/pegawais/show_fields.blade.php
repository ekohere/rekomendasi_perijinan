<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pegawai->id !!}</p>
</div>

<!-- Nip Field -->
<div class="form-group">
    {!! Form::label('nip', 'Nip:') !!}
    <p>{!! $pegawai->nip !!}</p>
</div>

<!-- Institusi Id Field -->
<div class="form-group">
    {!! Form::label('institusi_id', 'Institusi:') !!}
    <p>{!! $pegawai->institusi->nama !!}</p>
</div>

<!-- Users Id Field -->
<div class="form-group">
    {!! Form::label('users_id', 'Users:') !!}
    <p>{!! $pegawai->user->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pegawai->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pegawai->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $pegawai->deleted_at !!}</p>
</div>



