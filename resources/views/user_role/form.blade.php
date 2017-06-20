<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    {!! Form::hidden('id', null, ['class' => 'form-control']) !!}
    {!! Form::label('name', 'Nama Pengguna', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::label('name', $user_role->name, ['class' => 'control-label']) !!}
        {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

@foreach($roles as $role)
    <div class="form-group">
        {!! Form::label('permissions', $role->display_name, ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            <div class="col-md-6 switch switch-sm switch-primary ">
                <input type="checkbox" name="roles[]" value="{{$role->id}}" data-plugin-ios-switch class="form-control"  {{isset($user_role->roles) && $user_role->roles->count()>0?(in_array($role->id,$arrayRole)?'checked':''):''}}/>
            </div>
        </div>
    </div>
@endforeach

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>