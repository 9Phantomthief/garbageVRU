<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($menber->name) ? $menber->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
    <label for="age" class="control-label">{{ 'Age' }}</label>
    <input class="form-control" name="age" type="number" id="age" value="{{ isset($menber->age) ? $menber->age : ''}}" >
    {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">{{ 'Tel' }}</label>
    <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($menber->tel) ? $menber->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('point') ? 'has-error' : ''}}">
    <label for="point" class="control-label">{{ 'Point' }}</label>
    <input class="form-control" name="point" type="number" id="point" value="{{ isset($menber->point) ? $menber->point : ''}}" >
    {!! $errors->first('point', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
