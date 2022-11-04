@extends('layouts.app')

@section('content')

<div class="container">

    <div class="justify-content-center">
        <div class="col-lg-6">
            <div class="row">
                <a class="btn btn-warning btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" href="{{ url('/admin/home') }}" title="ย้อนกลับ">ย้อนกลับ</a>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <form method="POST" action="{{ url('/garbage') }}">
                    {{ csrf_field() }}
                    @include ('garbage.form', ['formMode' => 'create'])
                </form>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h5 style="font-family: 'Kanit', sans-serif; color:black; margin-left: 30px;">รายการขยะ<a style="float: right;">หน่วย : กิโลกรัม</a>
                    </h5>
                </div>
                <div class="table-responsive-md">
                    <table class="table">
                        <thead class="table table-hover">
                            <tr>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">ลำดับ</td>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">ชื่อ</td>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">ขยะทั่วไป</td>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">ขยะรีไซเคิล</td>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">ขยะย่อยสลายได้</td>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">ขยะอันตราย</td>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">ขยะห้องปฏิบัติการ</td>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">ขยะประเภทอื่นๆ</td>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">หมายเหตุ</td>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">ตึก</td>
                                <td style="text-align: center; font-family: 'Kanit', sans-serif">เวลาสร้าง</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($garbage as $item)
                            <tr>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $garbage->firstItem()+$loop->index }}</td>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->name }}</td>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageA }}</td>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageB }}</td>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageC }}</td>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageD }}</td>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->garbageX }}</td>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->valueOther }}</td>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->Note }}</td>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->building}}</td>
                                <td style="text-align: center;  font-family: 'Kanit', sans-serif">{{ $item->created_at }}</td>
                                <td><a href="{{ url('/garbage/' . $item->id . '/edit') }}" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                                    <form method="POST" action="{{ url('/garbage' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm('ยืนยันการลบข้อมูล?')"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$garbage->links()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection