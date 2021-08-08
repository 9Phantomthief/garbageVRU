<div class="form-group {{ $errors->has('Room') ? 'has-error' : ''}}">
    <label for="Room" class="control-label">{{ 'ห้อง' }}</label>
    <input class="form-control" name="Room" type="text" id="Room" value="{{ isset($room->Room) ? $room->Room : ''}}" >
    {!! $errors->first('Room', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'ประเภทห้อง' }}</label>
    <select name="type" class="form-control" id="type" >
    @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($room->type) && $room->type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Other') ? 'has-error' : ''}}">
    <label for="Other" class="control-label">{{ 'รายละเอียด' }}</label>
    <input class="form-control" name="Other" type="text" id="Other" value="{{ isset($room->Other) ? $room->Other : ''}}" >
    {!! $errors->first('Other', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'รูปภาพ' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($room->image) ? $room->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'สถานะ' }}</label>
    <input class="form-control" name="status" type="text" id="status" value="{{ isset($room->status) ? $room->status : ''}}" >
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
