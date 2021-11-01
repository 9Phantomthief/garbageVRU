@extends('layouts.app')
   
@section('content')
<div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title" style="font-family: 'Kanit', sans-serif; color:black">กราฟแสดงรายละเอียดขยะเป็นเวลา 5 เดือน</h5>

                    </div>
                    <div class="card-body ">
                        <canvas id=chartgarbage width="400" height="100"></canvas>

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                        <script>
                var ctx = document.getElementById("chartgarbage").getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                labels: ['10/2021', '11/2021', '12/2021', '01/2022', '02/2021'],
                datasets: [
                    {
                        label: "ขยะทั่วไป",
                        backgroundColor: "blue",
                        data: [3,7,4,6,8,4]
                    },
                    {
                        label: "ขยะรีไซเคิล",
                        backgroundColor: "red",
                        data: [4,3,5,6,2,8]
                    },
                    {
                        label: "ขยะย่อยสลายได้",
                        backgroundColor: "green",
                        data: [7,2,6,7,4,9]
                    },
                    {
                        label: "ขยะอันตราย",
                        backgroundColor: "purple",
                        data: [7,2,6,3,3,4]
                    },
                    {
                        label: "ขยะห้องปฏิบัติการ",
                        backgroundColor: "brown",
                        data: [7,2,6,9,8,1]
                    },
                    {
                        label: "ขยะอื่นๆ",
                        backgroundColor: "yellow",
                        data: [7,2,6,9,8,1]
                    }
                ] 
                },
                options: {
                scales: {
                yAxes: [{
                ticks: {
                beginAtZero:true
                }
                }]
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