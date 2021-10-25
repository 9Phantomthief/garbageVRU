
<style>
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #0000 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #0000 solid;
    }
    
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>



<div class="book">

    <div class="page">
        <div class="subpage">

        <div class="card-body ">
                        <canvas id=chartgarbage width="400" height="200"></canvas>

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
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated - minutes ago
                        </div>
                    </div>

        </div>    
    </div>

</div>
