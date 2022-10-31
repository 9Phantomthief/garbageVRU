@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-warning btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" href="{{ url('/admin/home') }}" class="btn btn-warning btn-sm" title="ย้อนกลับ">ย้อนกลับ</a>
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
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-9">
                                        <canvas id=chartgarbage width="400" height="100"></canvas>
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                        <script>
                                            var ctx = document.getElementById("chartgarbage").getContext('2d');
                                            var gA = @json($gA).reverse();
                                            var yA = gA.map(function(item) {
                                                return Math.round(item.total_gA)
                                            });
                                            var gB = @json($gB).reverse();
                                            var yB = gB.map(function(item) {
                                                return Math.round(item.total_gB)
                                            });
                                            var gC = @json($gC).reverse();
                                            var yC = gC.map(function(item) {
                                                return Math.round(item.total_gC)
                                            });
                                            var gD = @json($gD).reverse();
                                            var yD = gD.map(function(item) {
                                                return Math.round(item.total_gD)
                                            });
                                            var gX = @json($gX).reverse();
                                            var yX = gX.map(function(item) {
                                                return Math.round(item.total_gX)
                                            });
                                            var gO = @json($gO).reverse();
                                            var yO = gO.map(function(item) {
                                                return Math.round(item.total_gO)
                                            });
                                            var myChart = new Chart(ctx, {
                                                type: 'pie',
                                                data: {
                                                    labels: ["ขยะทั่วไป","ขยะรีไซเคิล","ขยะย่อยสลายได้","ขยะอันตราย","ขยะห้องปฏิบัติการ","ขยะอื่นๆ"],
                                                    datasets: [{
                                                        label: ["ขยะทั่วไป","ขยะรีไซเคิล","ขยะย่อยสลายได้","ขยะอันตราย","ขยะห้องปฏิบัติการ","ขยะอื่นๆ"],
                                                        backgroundColor: ['#003EFF', '#D6313B', '#B3D236', '#D089DC', '#463327', '#FBC700'],
                                                        data:   yA,
                                                                yB,
                                                                yC,
                                                                yD,
                                                                yX,
                                                                yO
                                                    }],
                                                },
                                                options: {
                                                    scales: {
                                                        yAxes: [{
                                                            ticks: {
                                                                beginAtZero: true
                                                            }
                                                        }]
                                                    }
                                                }
                                            });
                                        </script>
                                    </div>
                                    <div class="col-3" style="font-family: 'Kanit', sans-serif; color:black;">
                                        

                                    </div>
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="form-group" style="width: 300px; margin: auto;">
                                    <h4 class="text-box-title" style="font-family: 'Kanit', sans-serif; color:black; text-align: center;">ปี/เดือน</h4>
                                    <hr>
                                    <br>
                                    <form action="" method="">
                                        <select class="form-control" name="" style="font-family: 'Kanit', sans-serif; color:black;">
                                            <option value="2566">2566</option>
                                            <option value="2565">2565</option>
                                            <option value="2564">2564</option>
                                            <option value="2563">2563</option>
                                            <option value="2562">2562</option>
                                            <option value="2561">2561</option>
                                            <option value="2560">2560</option>
                                            <option value="2559">2559</option>
                                            <option value="2558">2558</option>
                                            <option value="2557">2557</option>
                                            <option value="2556">2556</option>
                                        </select>
                                    </form>
                                </div><br>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" form="from" value="Submit" class="button2" style="font-family: 'Kanit', sans-serif; font-size: 18px; margin: auto;">search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><hr>
                <div class="card-body">
                    <div class="container">
                        
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="card-title" style="font-family: 'Kanit', sans-serif; color:black; margin-left: 10px"><u>จำนวนขยะแต่ละประเภทต่อเดือน</u></h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px; margin-left: 30px;">ขยะทั่วไป : {{$garbageA}} กิโลกรัม</p>
                                            <p style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px; margin-left: 30px;">ขยะรีไซเคิล  : {{$garbageB}} กิโลกรัม</p>
                                            <p style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px; margin-left: 30px;">ขยะย่อยสลายได้ : {{$garbageC}} กิโลกรัม</p>
                                        </div>
                                        <div class="col-6">
                                            <p style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px; margin-left: 30px;">ขยะอันตราย : {{$garbageD}} กิโลกรัม</p>
                                            <p style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px; margin-left: 30px;">ขยะห้องปฏิบัติการ : {{$garbageX}} กิโลกรัม</p>
                                            <p style="font-family: 'Kanit', sans-serif; color:black; font-size: 16px; margin-left: 30px;">ขยะอื่นๆ : {{$Other}} กิโลกรัม</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">

                                </div>
                            </div>
                        
                    </div>
                </div><hr>

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