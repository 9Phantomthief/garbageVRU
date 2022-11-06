@extends('layouts.app2')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-warning btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" href="{{ url('/menber') }}" class="btn btn-warning btn-sm" title="ย้อนกลับ">ย้อนกลับ</a>
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title" style="font-family: 'Kanit', sans-serif; color:black; margin-left: 30px;"><u>ข้อมูลรายงานขยะโดยรวม หน่วย : กิโลกรัม</u>
                        <button type="button" style="font-family: 'Kanit', sans-serif; text-align: center; margin-right: 30px;" class="btn btn btn-sm pull-right">
                            <i class="fas fa-file-export" aria-hidden="true"></i>PDF
                        </button>
                    </h5>
                </div>
                <hr>

                <div class="card-body">
                    <div class="container">
                        <h5 class="card-title" style="font-family: 'Kanit', sans-serif; color:black; margin-left: 10px"><u>จำนวนขยะแต่ละอาคารต่อเดือน</u><a style="float: right;">หน่วย : กิโลกรัม</a></h5>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ชื่ออาคาร</th>
                                        <th scope="col">วันที่</th>
                                        <th scope="col">ขยะทั่วไป</th>
                                        <th scope="col">ขยะรีไซเคิล</th>
                                        <th scope="col">ขยะย่อยสลายได้</th>
                                        <th scope="col">ขยะอันตราย</th>
                                        <th scope="col">ขยะห้องปฏิบัติการ</th>
                                        <th scope="col">ขยะอื่นๆ</th>
                                        <th scope="col">หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" rowspan="5" style="text-align: center;">1</th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" rowspan="5" style="text-align: center;">2</th>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection