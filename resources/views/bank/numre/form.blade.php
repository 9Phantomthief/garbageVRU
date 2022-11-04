<div class="form-group {{ $errors->has('id_member') ? 'has-error' : ''}}">
    <label for="id_member" class="control-label">{{ 'Id Member' }}</label>
    {{-- <h1>{{ $menber->id }}</h1> --}}
    {{-- <input class="form-control" name="id_member" type="number" id="id_member" value="{{ isset($numre->id_member) ? $numre->id_member : ''}}" >
    {!! $errors->first('id_member', '<p class="help-block">:message</p>') !!} --}}

</div>
<div class="form-group {{ $errors->has('num_re') ? 'has-error' : ''}}">
    <label for="num_re" class="control-label">{{ 'Num Re' }}</label>
    <input class="form-control" name="num_re" type="number" id="num_re" value="{{ isset($numre->num_re) ? $numre->num_re : ''}}" >
    {!! $errors->first('num_re', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
