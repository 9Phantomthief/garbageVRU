@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                   <h5>รายการ 
                    <a style="float:right" href="{{ url('/garbage/create') }}" class="btn btn-success btn-md" title="เพิ่มข้อมูล">เพิ่มข้อมูล</a>
                    <a style="float:right" href="{{ url('/admin/home') }}" title="Back"><button class="btn btn-warning btn-md"></i>ย้อนกลับ</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
                   </h5> 
                
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <td style="text-align: center;">ลำดับ</td>
                                <td style="text-align: center;">ชื่อ</td>
                                <td style="text-align: center;">ขยะทั่วไป</td>
                                <td style="text-align: center;">ขยะรีไซเคิล</td>
                                <td style="text-align: center;">ขยะย่อยสลายได้</td>
                                <td style="text-align: center;">ขยะอันตราย</td>
                                <td style="text-align: center;">ขยะห้องปฏิบัติการ</td>
                                <td style="text-align: center;">ขยะประเภทอื่นๆ</td>
                                <td style="text-align: center;">เวลาสร้าง</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($garbage as $item)
                            <tr>
                                <td style="text-align: center;">{{ $garbage->firstItem()+$loop->index }}</td>
                                <td style="text-align: center;">{{ $item->name }}</td>
                                <td style="text-align: center;">{{ $item->garbageA }}</td>
                                <td style="text-align: center;">{{ $item->garbageB }}</td>
                                <td style="text-align: center;">{{ $item->garbageC }}</td>
                                <td style="text-align: center;">{{ $item->garbageD }}</td>  
                                <td style="text-align: center;">{{ $item->garbageX }}</td>
                                <td style="text-align: center;">{{ $item->valueOther }}</td>
                                <td style="text-align: center;">{{ $item->created_at }}</td>
                                <td><a href="{{ url('/garbage/' . $item->id . '/edit') }}" title="Edit Crud"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                                <form method="POST" action="{{ url('/garbage' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm('ต้องการลบใช่หรือไม่ ?')"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                                </form></td>
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