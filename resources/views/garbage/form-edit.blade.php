<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal">
    แก้ไข
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">แก้ไขข้อมูล</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        
             <form method="POST" action="{{ url('/garbage' .'/' . $item->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
            
                        <div class="card-body border">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                            <h5 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 20px ">{{ 'ชื่อ' }}</h5>
                                            
                                            <input class="form-control" name="name" type="text" id="name" value="{{ isset($item->name) ? $item->name : ''}}" >
                                            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            
                                            
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                            <h5 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 20px ">{{ 'ชื่อตึก' }}</h5>
                                            
                                            <a>{{ Auth::user()->name }} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body border">
                                    <div class="form-group {{ $errors->has('garbageA') ? 'has-error' : ''}}">
                                            <h5 for="garbageA" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 20px ">{{ 'ขยะทั่วไป' }}</h5>
                                            
                                            <div class="col-md-3" style="padding:0px">
                                                <input class="form-control" name="garbageA" type="float" id="garbageA" value="{{ isset($item->garbageA) ? $item->garbageA : ''}}" >
                                            </div>
                                            {!! $errors->first('garbageA', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <h3 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px ">{{ 'กิโลกรัม' }}</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body border">
                                    <div class="form-group {{ $errors->has('garbageB') ? 'has-error' : ''}}">
                                            <h5 for="garbageB" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 20px ">{{ 'ขยะย่อยสลายได้' }}</h5>
                                            
                                            <div class="col-md-3" style="padding:0px">
                                                <input class="form-control" name="garbageB" type="float" id="garbageB" value="{{ isset($item->garbageB) ? $item->garbageB : ''}}" >
                                            </div>
                                            {!! $errors->first('garbageB', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <h3 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px ">{{ 'กิโลกรัม' }}</h3>
                                </div><br>
                            </div>
                        </div>
            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body border">
                                    <div class="form-group {{ $errors->has('garbageC') ? 'has-error' : ''}}">
                                            <h5 for="garbageC" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 20px ">{{ 'ขยะรีไซเคิล' }}</h5>
                                            
                                            <div class="col-md-3" style="padding:0px">
                                                <input class="form-control" name="garbageC" type="float" id="garbageC" value="{{ isset($item->garbageC) ? $item->garbageC : ''}}" >
                                            </div>
                                            {!! $errors->first('garbageC', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <h3 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px ">{{ 'กิโลกรัม' }}</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body border">
                                    <div class="form-group {{ $errors->has('garbageD') ? 'has-error' : ''}}">
                                            <h5 for="garbageD" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 20px ">{{ 'ขยะอันตราย' }}</h5>
                                            
                                            <div class="col-md-3" style="padding:0px">
                                                <input class="form-control" name="garbageD" type="float" id="garbageD" value="{{ isset($item->garbageD) ? $item->garbageD : ''}}" >
                                            </div>
                                            {!! $errors->first('garbageD', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <h3 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px ">{{ 'กิโลกรัม' }}</h3>
                                </div><br>
                            </div>
                        </div>
            
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-body border">
                                    <div class="form-group {{ $errors->has('garbageX') ? 'has-error' : ''}}">
                                            <h5 for="garbageX" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 20px ">{{ 'ขยะห้องปฏิบัติการ' }}</h5>
                                            
                                            <div class="col-md-3" style="padding:0px">
                                                <input class="form-control" name="garbageX" type="float" id="garbageX" value="{{ isset($item->garbageX) ? $item->garbageX : ''}}" >
                                            </div>
                                            {!! $errors->first('garbageX', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <h3 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px ">{{ 'กิโลกรัม' }}</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body border">
                                    <div class="form-group {{ $errors->has('Note') ? 'has-error' : ''}}">
                                            <h5 for="Note" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 20px ">{{ 'หมายเหตุ' }}</h5>
                                            
                                            <div class="col-md-12" style="padding:0px">
                                                <input class="form-control" name="Note" type="float" id="Note" value="{{ isset($item->Note) ? $item->Note : ''}}" >
                                            </div>
                                            {!! $errors->first('Note', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div><br>
                            </div>
                        </div>
            
            
                        <div class="card-body border">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('other') ? 'has-error' : ''}}">
                                            <h5 for="other" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 20px ">{{ 'อื่นๆ' }}</h5>
                                            
                                            <input class="form-control" name="other" type="text" id="other" value="{{ isset($item->other) ? $item->other : ''}}" >
                                            {!! $errors->first('other', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('valueOther') ? 'has-error' : ''}}">
            
                                        <h5 for="valueOther" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 20px ">{{ 'จำนวน' }}</h5>
                                            <div class="col-md-3" style="padding:0px">
                                                <input class="form-control" name="valueOther" type="float" id="valueOther" value="{{ isset($item->valueOther) ? $item->valueOther : ''}}" >
                                            </div>
                                        {!! $errors->first('valueOther', '<p class="help-block">:message</p>') !!}
                                    </div>
                                    <h3 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px ">{{ 'กิโลกรัม' }}</h3>
                                </div>
                            </div>
                        </div>
                        <br>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="btn btn-primary btn-md" type="submit" value="ยืนยัน" style="float:right; font-family: 'Kanit', sans-serif; font-size: 18px">
                                </div>
                            </div>
            
                    </form>
        </div>
      </div>
    </div>
  </div>