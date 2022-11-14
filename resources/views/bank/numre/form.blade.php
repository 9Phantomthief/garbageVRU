<div class="form-group {{ $errors->has('id_member') ? 'has-error' : ''}}">
    
    <h5 style="font-family: 'Kanit', sans-serif; font-size: 16px;">ชื่อ {{ $user->name }} </h5> 
    <a href="{{ url('/typere') }}" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px; float: right; " class="btn btn-warning btn-sm" title="ประเภทขยะทั้งหมด" >ประเภทขยะทั้งหมด</a>
    <a href=" {{ url('/typere/create') }} " class="btn btn-info btn-sm" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px; float: right; " title="เพิ่มข้อมูลประเภทขยะ">เพิ่มข้อมูลประเภทขยะ</a>

    <label for="id_member" class="control-label" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px; ">เลขไอดี</label>
    <input class="form-control" name="id_member" type="number" id="id_member" value="{{ $id_member}}" readonly="true">
    {!! $errors->first('id_member', '<p class="help-block">:message</p>') !!}

</div>
<div class="form-group {{ $errors->has('num_re') ? 'has-error' : ''}}">
    <label for="num_re" class="control-label" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px; ">จำนวนขยะ : กิโลกรัม</label>
    <input class="form-control" name="num_re" type="number" id="num_re" value="{{ isset($numre->num_re) ? $numre->num_re : ''}}" >
    {!! $errors->first('num_re', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px; " type="submit" value="ยืนยัน">
</div>
