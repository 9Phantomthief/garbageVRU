<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px; ">ชื่อขยะ</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($typere->name) ? $typere->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px; ">ราคา(บาท)/ต่อ 1 กิโลกรัม</label>
    <input class="form-control" name="price" type="float" id="price" value="{{ isset($typere->price) ? $typere->price : ''}}" >
    {!! $errors->first('price', '<p class="help-block"></p>:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px; " type="submit" value="ยืนยัน">
</div>
