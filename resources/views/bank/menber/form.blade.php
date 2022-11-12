<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">ชื่อ</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($menber->name) ? $menber->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
    <label for="age" class="control-label">อายุ</label>
    <input class="form-control" name="age" type="number" id="age" value="{{ isset($menber->age) ? $menber->age : ''}}" >
    {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label">เบอร์โทรศัพท์</label>
    <input class="form-control" name="tel" type="text" id="tel" value="{{ isset($menber->tel) ? $menber->tel : ''}}" >
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
    <input class="btn btn-primary" type="submit" value="ยืนยัน">
</div>
