@extends('layouts.app')
   
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

<div class="container">
    <div class="justify-content-center">
        <div class="col-lg-6">
            <div class="row">
                    <a  href="{{ url('/garbage') }}" class="btn btn-info btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" title="บันทึกรายการขยะ">บันทึกรายการขยะ</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a  href="{{ url('/report') }}" class="btn btn-warning btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" title="รายงาน">รายงาน</a>
            </div>
        </div>    
    </div>
</br>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                <i class="fas fa-trash-alt"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category" style="font-family: 'Kanit', sans-serif; color:black">ขยะทั่วไป</p>
                                    <p class="card-title" style="font-family: 'Kanit', sans-serif"  >
                                        {{$garbageA}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats" style="text-align: right;">
                            <i class="fa fa-refresh" style="font-family: 'Kanit', sans-serif">กิโลกรัม</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fas fa-recycle"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category"  style="font-family: 'Kanit', sans-serif; color:black">ขยะรีไซเคิล</p>
                                    <p class="card-title" style="font-family: 'Kanit', sans-serif">
                                    {{$garbageB}}
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats" style="text-align: right;">
                        <i class="fa fa-refresh" style="font-family: 'Kanit', sans-serif">กิโลกรัม</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fas fa-leaf"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category" style="font-family: 'Kanit', sans-serif; color:black">ขยะย่อยสลายได้</p>
                                    <p class="card-title" style="font-family: 'Kanit', sans-serif">
                                        {{$garbageC}}
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats" style="text-align: right;">
                        <i class="fa fa-refresh" style="font-family: 'Kanit', sans-serif">กิโลกรัม</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fas fa-radiation-alt"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category" style="font-family: 'Kanit', sans-serif; color:black">ขยะอันตราย</p>
                                    <p class="card-title" style="font-family: 'Kanit', sans-serif">
                                        {{$garbageD}}
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats" style="text-align: right;">
                        <i class="fa fa-refresh" style="font-family: 'Kanit', sans-serif">กิโลกรัม</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fas fa-biohazard"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category" style="font-family: 'Kanit', sans-serif; color:black">ขยะห้องปฏิบัติการ</p>
                                    <p class="card-title" style="font-family: 'Kanit', sans-serif">
                                    {{$garbageX}}
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats" style="text-align: right;">
                        <i class="fa fa-refresh" style="font-family: 'Kanit', sans-serif">กิโลกรัม</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fas fa-dumpster"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category" style="font-family: 'Kanit', sans-serif; color:black">ขยะอื่นๆ</p>
                                    <p class="card-title" style="font-family: 'Kanit', sans-serif">
                                        {{$Other}}
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats" style="text-align: right;">
                        <i class="fa fa-refresh" style="font-family: 'Kanit', sans-serif">กิโลกรัม</i>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <!-- {{$gA}} -->
        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title" style="font-family: 'Kanit', sans-serif; color:black">กราฟแสดงรายละเอียดขยะเป็นเวลา 5 เดือน</h5>
{{$gA}}
                    </div>
                    <div class="card-body ">
                        <canvas id=chartgarbage width="400" height="100"></canvas>

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            var ctx = document.getElementById('chartgarbage').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['a'], //แกน Y
                                    datasets: [{
                                        label: 'ขยะทั่วไป',
                                        data: [12, 19, 3, 5, 2, 3], //แกน X
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)'
                                        ],
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'ขยะรีไซเคิล',
                                        data: [12, 19, 3, 5, 2, 3], //แกน X
                                        backgroundColor: [
                                            'rgba(54, 162, 235, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(54, 162, 235, 1)',
                                        ],
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'ขยะย่อยสลายได้',
                                        data: [12, 19, 3, 5, 2, 3], //แกน X
                                        backgroundColor: [
                                            'rgba(255, 206, 86, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 206, 86, 1)'
                                        ],
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'ขยะอันตราย',
                                        data: [12, 19, 3, 5, 2, 3], //แกน X
                                        backgroundColor: [
                                            'rgba(75, 192, 192, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(75, 192, 192, 1)'
                                        ],
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'ขยะอื่นๆ',
                                        data: [12, 19, 3, 5, 2, 3], //แกน X
                                        backgroundColor: [
                                            'rgba(153, 102, 255, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(153, 102, 255, 1)'
                                        ],
                                        borderWidth: 1
                                    },
                                    {
                                        label: 'ขยะห้องปฏิบัติการ',
                                        data: [12, 19, 3, 5, 2, 3], //แกน X
                                        backgroundColor: [
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 1
                                    }
                                    
                                ],
                                    
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>

                    </div>

                    <div class="card-footer ">
                        <hr>
                        <div class="stats"  style="font-family: 'Kanit', sans-serif; color:black">
                            <i class="fa fa-history"></i> Updated - minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

@endsection