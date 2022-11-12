<div class="form-group {{ $errors->has('id_member') ? 'has-error' : ''}}">
    <h5>ชื่อ {{ $user->name }}</h5>
    <label for="id_member" class="control-label">เลขไอดี</label>
    <input class="form-control" name="id_member" type="number" id="id_member" value="{{ $id_member}}" readonly="true">
    {!! $errors->first('id_member', '<p class="help-block">:message</p>') !!}

</div>
<div class="form-group {{ $errors->has('num_re') ? 'has-error' : ''}}">
    <label for="num_re" class="control-label">จำนวนขยะ : กิโลกรัม</label>
    <input class="form-control" name="num_re" type="number" id="num_re" value="{{ isset($numre->num_re) ? $numre->num_re : ''}}" >
    {!! $errors->first('num_re', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="ยืนยัน">
</div>
