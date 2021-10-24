<div class="card-body border">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                    <h5 for="name" class="control-label">{{ 'ชื่อ' }}</h5>
                    
                    <input class="form-control" name="name" type="text" id="name" value="{{ isset($garbage->name) ? $garbage->name : ''}}" >
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
</div>
<br>

<div class="row">
    <div class="col-md-6">
        <div class="card-body border">
            <div class="form-group {{ $errors->has('garbageA') ? 'has-error' : ''}}">
                    <h5 for="garbageA" class="control-label">{{ 'ขยะทั่วไป' }}</h5>
                    
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="garbageA" type="float" id="garbageA" value="{{ isset($garbage->garbageA) ? $garbage->garbageA : ''}}" >
                    </div>
                    {!! $errors->first('garbageA', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card-body border">
            <div class="form-group {{ $errors->has('garbageB') ? 'has-error' : ''}}">
                    <h5 for="garbageB" class="control-label">{{ 'ขยะย่อยสลายได้' }}</h5>
                    
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="garbageB" type="float" id="garbageB" value="{{ isset($garbage->garbageB) ? $garbage->garbageB : ''}}" >
                    </div>
                    {!! $errors->first('garbageB', '<p class="help-block">:message</p>') !!}
            </div>
        </div><br>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card-body border">
            <div class="form-group {{ $errors->has('garbageC') ? 'has-error' : ''}}">
                    <h5 for="garbageC" class="control-label">{{ 'ขยะรีไซเคิล' }}</h5>
                    
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="garbageC" type="float" id="garbageC" value="{{ isset($garbage->garbageC) ? $garbage->garbageC : ''}}" >
                    </div>
                    {!! $errors->first('garbageC', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card-body border">
            <div class="form-group {{ $errors->has('garbageD') ? 'has-error' : ''}}">
                    <h5 for="garbageD" class="control-label">{{ 'ขยะอันตราย' }}</h5>
                    
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="garbageD" type="float" id="garbageD" value="{{ isset($garbage->garbageD) ? $garbage->garbageD : ''}}" >
                    </div>
                    {!! $errors->first('garbageD', '<p class="help-block">:message</p>') !!}
            </div>
        </div><br>
    </div>
</div>

<div class="row">
    <div class="col-md">
        <div class="card-body border">
            <div class="form-group {{ $errors->has('garbageX') ? 'has-error' : ''}}">
                    <h5 for="garbageX" class="control-label">{{ 'ขยะห้องปฏิบัติการ' }}</h5>
                    
                    <div class="col-md-3" style="padding:0px">
                        <input class="form-control" name="garbageX" type="float" id="garbageX" value="{{ isset($garbage->garbageX) ? $garbage->garbageX : ''}}" >
                    </div>
                    {!! $errors->first('garbageX', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
</div>


<div class="card-body border">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('other') ? 'has-error' : ''}}">
                    <h5 for="other" class="control-label">{{ 'อื่นๆ' }}</h5>
                    
                    <input class="form-control" name="other" type="text" id="other" value="{{ isset($garbage->other) ? $garbage->other : ''}}" >
                    {!! $errors->first('other', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group {{ $errors->has('valueOther') ? 'has-error' : ''}}">

                <h5 for="valueOther" class="control-label">{{ 'จำนวน' }}</h5>
                
                    <input class="form-control" name="valueOther" type="float" id="valueOther" value="{{ isset($garbage->valueOther) ? $garbage->valueOther : ''}}" >
                
                {!! $errors->first('valueOther', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
</div>
<br>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}" style="float: right;">
</div>
