@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-warning btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" href="{{ url('/admin/home') }}" title="ย้อนกลับ">ย้อนกลับ</a>
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title" style="font-family: 'Kanit', sans-serif; color:black; margin-left: 30px;"><u>ข้อมูลรายงานขยะโดยรวม หน่วย : กิโลกรัม</u>
                        
                            <a style="font-family: 'Kanit', sans-serif; text-align: center; margin-right: 30px;" class="btn btn btn-sm pull-right" class="btn btn-warning btn-lg" href="{{ url('/pdf') }}" style="color: aliceblue">
                                <i class="fas fa-file-export" aria-hidden="true"></i>PDF</a>

                    </h5>
                </div>
                <hr>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-9">
                                        <canvas id=piegarbage width="400" height="100"></canvas>
                                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                        <script>
                                            
                                            var ctx = document.getElementById("piegarbage").getContext('2d');
                                            
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
                                            console.log(yA);
                                            
                                            var myChart = new Chart(ctx, {
                                                type: 'pie',
                                                data: {
                                                    labels: ["ขยะทั่วไป","ขยะรีไซเคิล","ขยะย่อยสลายได้","ขยะอันตราย","ขยะห้องปฏิบัติการ","ขยะอื่นๆ"],
                                                    datasets: 
                                                    [{
                                                        label: ["ขยะทั่วไป","ขยะรีไซเคิล","ขยะย่อยสลายได้","ขยะอันตราย","ขยะห้องปฏิบัติการ","ขยะอื่นๆ"],
                                                        backgroundColor: ['#003EFF', '#D6313B', '#B3D236', '#D089DC', '#463327', '#FBC700'],
                                                        data:   yA,
                                                               
                                                    }]
                                                //     [{
                                                //         label: "ขยะทั่วไป",
                                                //         backgroundColor: '#003EFF',
                                                //         data: yA
                                                //     },
                                                //     {
                                                //         label: "ขยะรีไซเคิล",
                                                //         backgroundColor: '#D6313B',
                                                //         data: yB
                                                //     },
                                                //     {
                                                //         label: "ขยะย่อยสลายได้",
                                                //         backgroundColor: '#B3D236',
                                                //         data: yC
                                                //     },
                                                //     {
                                                //         label: "ขยะอันตราย",
                                                //         backgroundColor: '#D089DC',
                                                //         data: yD
                                                //     },
                                                //     {
                                                //         label: "ขยะห้องปฏิบัติการ",
                                                //         backgroundColor: '#463327',
                                                //         data: yX
                                                //     },
                                                //     {
                                                //         label: "ขยะอื่นๆ",
                                                //         backgroundColor: '#FBC700',
                                                //         data: yO
                                                //     }
                                                // ]
                                                    ,
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

                                    <form method="GET" action="{{ url('/report') }}" accept-charset="UTF-8" role="search">
                                        <select class="form-control" name="search" id="search" style="font-family: 'Kanit', sans-serif; color:black;">
                                            
                                            {{-- กรณีมีการค้นหาเดือน/ปี --}}
                                            @if(!empty($years_search))
                                                <option value="{{$years_search}}/{{$month_search}}" selected>ปี {{$years_search+543}} เดือน {{$month_search}}</option>
                                            @else
                                                <option value="" selected>กรุณาเลือก...</option>
                                            @endif
                                                <option value="">____________________</option>
                                            @foreach ($ymsearch as $item)
                                                <option value="{{$item->year}}/{{$item->month}}"> ปี {{$item->year+543}} เดือน {{$item->month}}</option>
                                            @endforeach
                                            
                                        </select>
                                       
                                    <br>
                                        <div class="d-flex justify-content-between">
                                            <button type="submit" class="button2" style="font-family: 'Kanit', sans-serif; font-size: 18px; margin: auto;"
                                            >ค้นหา</button>
                                    
                                            <a href="{{ url('/report') }}" type="submit" class="button2" style="font-family: 'Kanit', sans-serif; font-size: 18px; margin: auto;"
                                            > ล้างการค้นหา </a>
                                            
                                        </div>
                                    </form>
                                    
                                    
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
                                        <th style="text-align: center;  font-family: 'Kanit', sans-serif">ชื่ออาคาร</th>
                                        <th style="text-align: center;  font-family: 'Kanit', sans-serif">วันที่</th>
                                        <th style="text-align: center;  font-family: 'Kanit', sans-serif">ขยะทั่วไป</th>
                                        <th style="text-align: center;  font-family: 'Kanit', sans-serif">ขยะรีไซเคิล</th>
                                        <th style="text-align: center;  font-family: 'Kanit', sans-serif">ขยะย่อยสลายได้</th>
                                        <th style="text-align: center;  font-family: 'Kanit', sans-serif">ขยะอันตราย</th>
                                        <th style="text-align: center;  font-family: 'Kanit', sans-serif">ขยะห้องปฏิบัติการ</th>
                                        <th style="text-align: center;  font-family: 'Kanit', sans-serif">ขยะอื่นๆ</th>
                                        <th style="text-align: center;  font-family: 'Kanit', sans-serif">หมายเหตุ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" rowspan="0" style="text-align: center;">อาคาร 100 ปี</th>

                                        @foreach($building1 as $item)
                                        <tr>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->created_at->thaidate() }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageA }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageB }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageC }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageD }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageX }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->valueOther }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->Note }}</td>
                                        </tr>
                                        @endforeach
                                    </tr>

                                </tbody>
                                <tbody>
                                    <tr>
                                        <th scope="row" rowspan="100" style="text-align: center;">อาคาร 75 ปี</th>

                                        @foreach($building2 as $item)
                                        <tr>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->created_at->thaidate() }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageA }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageB }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageC }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageD }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageX }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->valueOther }}</td>
                                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->Note }}</td>
                                        </tr>
                                        @endforeach
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