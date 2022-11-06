<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <title>gjfhavgfsvajvsfjasbfj</title>

    <style>
        body {
            font-family: "THSarabunNew";
            width: 100%;
            height: 100%;
            margin: 20px;
            padding: 10px;
            background-color: #FAFAFA;
            font: 12pt "Tahoma";
        }

        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid;
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
            padding: 15px;
        }

        @media print {

            html,
            body {
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

            @font-face {
                font-family: 'THSarabunNew';
                font-style: normal;
                font-weight: normal;
                src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
            }

            @font-face {
                font-family: 'THSarabunNew';
                font-style: normal;
                font-weight: bold;
                src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
            }

            @font-face {
                font-family: 'THSarabunNew';
                font-style: italic;
                font-weight: normal;
                src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
            }

            @font-face {
                font-family: 'THSarabunNew';
                font-style: italic;
                font-weight: bold;
                src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
            }
        }
    </style>
</head>

<body>

    <h1>TABLE REPORT</h1>

                <table class="table">
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
                            @foreach ($count1 as $item)
                            <th scope="row" rowspan="{{$item->count+1}}" style="text-align: center;">อาคาร 100 ปี</th>
                            @endforeach

                            @foreach ($building1 as $item)
                        <tr>
                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->created_at }}</td>
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
                            @foreach ($count2 as $item)
                            <th scope="row" rowspan="{{$item->count+1}}" style="text-align: center;">อาคาร 75 ปี</th>
                            @endforeach

                            @foreach ($building2 as $item)
                        <tr>
                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->created_at }}
                            </td>
                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageA }}
                            </td>
                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageB }}
                            </td>
                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageC }}
                            </td>
                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageD }}
                            </td>
                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageX }}
                            </td>
                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->valueOther }}
                            </td>
                            <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->Note }}</td>
                        </tr>
                        @endforeach
                        </tr>

                    </tbody>
                </table>

</body>

</html>
