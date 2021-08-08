@extends('layouts.app')

@section('content')

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">เพิ่มข้อมูล</div>

                        <div class="card-body">
                            <div class="col-md-12">

                            <form method="POST" action="{{ url('admin/create') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                            
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <strong>ชื่อผู้ใช้งาน</strong>
                                        <input type="text" name="title" class="form-controller" placeholder="">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                            
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <strong>ขยะทั่วไป</strong>
                                        <input type="text" name="title" class="form-controller" placeholder="">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">    
                                        <strong>ขยะย่อยสลาย</strong>
                                        <input type="text" name="title" class="form-controller" placeholder="">
                                
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                            
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <strong>ขยะรีไซเคิล</strong>
                                        <input type="text" name="title" class="form-controller" placeholder="">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">    
                                        <strong>ขยะอันตราย</strong>
                                        <input type="text" name="title" class="form-controller" placeholder="">
                                
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                            
                                <div class="col-6 ">
                                    <div class="form-group">
                                        <strong>อื่นๆ</strong>
                                        <input type="text" name="title" class="form-controller" placeholder="">
                                    </div>
                                </div>


                            </div>
                                


                                <div class="col">
                                    <button type="submit" class="btn btn-success" my-3>บันทึก</button>
                                </div>
                            </form>
                            </div>

                        </div>
                        </div>
                            
                    </div>
                </div>
            </div>  
        </div>  

@endsection