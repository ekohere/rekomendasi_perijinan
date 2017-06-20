<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('display_name') ? 'has-error' : ''}}">
    {!! Form::label('display_name', 'Display Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('display_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@foreach($permissions as $permission)
<div class="form-group {{ $errors->has('permissions') ? 'has-error' : ''}}">
    {!! Form::label('permissions', $permission->display_name, ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
            <div class="col-md-6 switch switch-sm switch-primary ">
                <input type="checkbox" name="permissions[]" value="{{$permission->id}}" data-plugin-ios-switch class="form-control"  {{isset($role)?in_array($permission->id,$arrayPermission)?'checked':'':''}}/>
            </div>
    </div>
</div>
@endforeach

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>