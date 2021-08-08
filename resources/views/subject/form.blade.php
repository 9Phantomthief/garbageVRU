<div class="form-group {{ $errors->has('CodeSubject') ? 'has-error' : ''}}">
    <label for="CodeSubject" class="control-label">{{ 'Codesubject' }}</label>
    <input class="form-control" name="CodeSubject" type="text" id="CodeSubject" value="{{ isset($subject->CodeSubject) ? $subject->CodeSubject : ''}}" >
    {!! $errors->first('CodeSubject', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('NameSubject') ? 'has-error' : ''}}">
    <label for="NameSubject" class="control-label">{{ 'Namesubject' }}</label>
    <input class="form-control" name="NameSubject" type="text" id="NameSubject" value="{{ isset($subject->NameSubject) ? $subject->NameSubject : ''}}" >
    {!! $errors->first('NameSubject', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sect') ? 'has-error' : ''}}">
    <label for="sect" class="control-label">{{ 'Sect' }}</label>
    <input class="form-control" name="sect" type="text" id="sect" value="{{ isset($subject->sect) ? $subject->sect : ''}}" >
    {!! $errors->first('sect', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lecturer') ? 'has-error' : ''}}">
    <label for="lecturer" class="control-label">{{ 'Lecturer' }}</label>
    <input class="form-control" name="lecturer" type="text" id="lecturer" value="{{ isset($subject->lecturer) ? $subject->lecturer : ''}}" >
    {!! $errors->first('lecturer', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('room') ? 'has-error' : ''}}">
    <label for="room" class="control-label">{{ 'Room' }}</label>
    <input class="form-control" name="room" type="text" id="room" value="{{ isset($subject->room) ? $subject->room : ''}}" >
    {!! $errors->first('room', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
