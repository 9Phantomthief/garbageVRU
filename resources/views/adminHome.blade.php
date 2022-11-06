@extends('layouts.app')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

<div class="container">
    <div class="justify-content-center">
        <div class="col-lg-12">
            <div class="row">
                <a href="{{ url('/garbage') }}" class="btn btn-info btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" title="บันทึกรายการขยะ">บันทึกรายการขยะ</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ url('/report') }}" class="btn btn-warning btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" title="รายงาน">รายงาน</a>
                <a href="{{ url('/menber') }}" class="btn btn-success btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px; position:absolute; right:0%" title="">ธนาคารขยะ</a>
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
                                <p class="card-title" style="font-family: 'Kanit', sans-serif">
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
                                <p class="card-category" style="font-family: 'Kanit', sans-serif; color:black">ขยะรีไซเคิล</p>
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

    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header ">
                    <h5 class="card-title" style="font-family: 'Kanit', sans-serif; color:black">กราฟแสดงรายละเอียดขยะเป็นเวลา 5 เดือน
                    <a style="float: right;">หน่วย : กิโลกรัม</a>
                </h5>

                </div>
                <div class="card-body ">
                    <canvas id=chartgarbage width="400" height="100"></canvas>

                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <script>
                        var ctx = document.getElementById("chartgarbage").getContext('2d');
                        var m_nameThai = ["","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤษจิกายน","ธันวาคม"];
                        var gA = @json($gA).reverse();
                        var x = gA.map(function(item) {
                            return m_nameThai[item.month] + " " + (item.year+543)
                        });
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
                            type: 'bar',
                            data: {
                                labels: x,
                                datasets: [{
                                        label: "ขยะทั่วไป",
                                        backgroundColor: '#003EFF',
                                        data: yA
                                    },
                                    {
                                        label: "ขยะรีไซเคิล",
                                        backgroundColor: '#D6313B',
                                        data: yB
                                    },
                                    {
                                        label: "ขยะย่อยสลายได้",
                                        backgroundColor: '#B3D236',
                                        data: yC
                                    },
                                    {
                                        label: "ขยะอันตราย",
                                        backgroundColor: '#D089DC',
                                        data: yD
                                    },
                                    {
                                        label: "ขยะห้องปฏิบัติการ",
                                        backgroundColor: '#463327',
                                        data: yX
                                    },
                                    {
                                        label: "ขยะอื่นๆ",
                                        backgroundColor: '#FBC700',
                                        data: yO
                                    }
                                ]
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

            </div>
        </div>
    </div>


    @endsection