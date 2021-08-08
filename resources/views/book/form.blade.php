<div class="form-group {{ $errors->has('IDroom') ? 'has-error' : ''}}">
    <label for="IDroom" class="control-label">{{ 'Idroom' }}</label>
    <input class="form-control" name="IDroom" type="text" id="IDroom" value="{{ isset($book->IDroom) ? $book->IDroom : ''}}" >
    {!! $errors->first('IDroom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('IDBook') ? 'has-error' : ''}}">
    <label for="IDBook" class="control-label">{{ 'Idbook' }}</label>
    <input class="form-control" name="IDBook" type="text" id="IDBook" value="{{ isset($book->IDBook) ? $book->IDBook : ''}}" >
    {!! $errors->first('IDBook', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('book') ? 'has-error' : ''}}">
    <label for="book" class="control-label">{{ 'Book' }}</label>
    <input class="form-control" name="book" type="datetime-local" id="book" value="{{ isset($book->book) ? $book->book : ''}}" >
    {!! $errors->first('book', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('IDreturn') ? 'has-error' : ''}}">
    <label for="IDreturn" class="control-label">{{ 'Idreturn' }}</label>
    <input class="form-control" name="IDreturn" type="text" id="IDreturn" value="{{ isset($book->IDreturn) ? $book->IDreturn : ''}}" >
    {!! $errors->first('IDreturn', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('return') ? 'has-error' : ''}}">
    <label for="return" class="control-label">{{ 'Return' }}</label>
    <input class="form-control" name="return" type="datetime-local" id="return" value="{{ isset($book->return) ? $book->return : ''}}" >
    {!! $errors->first('return', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
