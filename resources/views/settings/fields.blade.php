<!-- Key Field -->
<div class="form-group col-sm-6">
    {!! Form::label('key', 'Key:') !!}
    {!! Form::text('key', null, ['class' => 'form-control']) !!}
</div>

<!-- Display Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('display_name', 'Display Name:') !!}
    {!! Form::text('display_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-6">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::text('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', ['text' => 'text', 'textarea' => 'textarea', 'select' => 'select', 'choice' => 'choice', 'checkbox' => 'checkbox', 'radio' => 'radio', 'password' => 'password', 'hidden' => 'hidden', 'file' => 'file', 'static' => 'static', 'date' => 'date', 'datetime-local' => 'datetime-local', 'month' => 'month', 'time' => 'time', 'week' => 'week', 'color' => 'color', 'search' => 'search', 'image' => 'image', 'email' => 'email', 'url' => 'url', 'tel' => 'tel', 'number' => 'number', 'range' => 'range', 'entity' => 'entity'], null, ['class' => 'form-control']) !!}
</div>

<!-- Group Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group', 'Group:') !!}
    {!! Form::select('group', ['admin' => 'admin', 'site' => 'site', 'api' => 'api'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('settings.index') !!}" class="btn btn-default">Cancel</a>
</div>
