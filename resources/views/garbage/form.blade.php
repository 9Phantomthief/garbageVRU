<!-- ปุ่มโมดอล Create -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#CreateProject" style="font-family: 'Kanit', sans-serif; font-size: 18px" >
    เพิ่มข้อมูล
</button>


<div class="modal fade " id="CreateProject" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
    style="color:black; font-weight: bold;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-success" style="color:white;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" name="form_create" action="{{ url('/garbage') }}" accept-charset="UTF-8"
                class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}


<div class="card-body border">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                    <h5 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 24px ">{{ 'ชื่อ' }}</h5>
                    
                    <input class="form-control" name="name" type="text" id="name" value="{{ isset($garbage->name) ? $garbage->name : ''}}" >
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}

                    
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                    <h5 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 24px ">{{ 'ชื่อตึก' }}</h5>
                    
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
                    <h5 for="garbageA" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 24px ">{{ 'ขยะทั่วไป' }}</h5>
                    
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="garbageA" type="float" id="garbageA" value="{{ isset($garbage->garbageA) ? $garbage->garbageA : ''}}" >
                    </div>
                    {!! $errors->first('garbageA', '<p class="help-block">:message</p>') !!}
            </div>
            <h3 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px ">{{ 'กิโลกรัม' }}</h3>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card-body border">
            <div class="form-group {{ $errors->has('garbageB') ? 'has-error' : ''}}">
                    <h5 for="garbageB" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 24px ">{{ 'ขยะย่อยสลายได้' }}</h5>
                    
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="garbageB" type="float" id="garbageB" value="{{ isset($garbage->garbageB) ? $garbage->garbageB : ''}}" >
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
                    <h5 for="garbageC" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 24px ">{{ 'ขยะรีไซเคิล' }}</h5>
                    
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="garbageC" type="float" id="garbageC" value="{{ isset($garbage->garbageC) ? $garbage->garbageC : ''}}" >
                    </div>
                    {!! $errors->first('garbageC', '<p class="help-block">:message</p>') !!}
            </div>
            <h3 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px ">{{ 'กิโลกรัม' }}</h3>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card-body border">
            <div class="form-group {{ $errors->has('garbageD') ? 'has-error' : ''}}">
                    <h5 for="garbageD" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 24px ">{{ 'ขยะอันตราย' }}</h5>
                    
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="garbageD" type="float" id="garbageD" value="{{ isset($garbage->garbageD) ? $garbage->garbageD : ''}}" >
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
                    <h5 for="garbageX" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 24px ">{{ 'ขยะห้องปฏิบัติการ' }}</h5>
                    
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="garbageX" type="float" id="garbageX" value="{{ isset($garbage->garbageX) ? $garbage->garbageX : ''}}" >
                    </div>
                    {!! $errors->first('garbageX', '<p class="help-block">:message</p>') !!}
            </div>
            <h3 for="name" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px ">{{ 'กิโลกรัม' }}</h3>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card-body border">
            <div class="form-group {{ $errors->has('Note') ? 'has-error' : ''}}">
                    <h5 for="Note" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 24px ">{{ 'หมายเหตุ' }}</h5>
                    
                    <div class="col-md-12" style="padding:0px">
                        <input class="form-control" name="Note" type="float" id="Note" value="{{ isset($garbage->Note) ? $garbage->Note : ''}}" >
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
                    <h5 for="other" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 24px ">{{ 'อื่นๆ' }}</h5>
                    
                    <input class="form-control" name="other" type="text" id="other" value="{{ isset($garbage->other) ? $garbage->other : ''}}" >
                    {!! $errors->first('other', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('valueOther') ? 'has-error' : ''}}">

                <h5 for="valueOther" class="control-label" style="font-family: 'Kanit', sans-serif; color:black; font-size: 24px ">{{ 'จำนวน' }}</h5>
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="valueOther" type="float" id="valueOther" value="{{ isset($garbage->valueOther) ? $garbage->valueOther : ''}}" >
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
            <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'ยืนยัน' }}" style="float:right; font-family: 'Kanit', sans-serif; font-size: 18px">
        </div>
    </div>

</form>
        </div>
    </div>
</div>
