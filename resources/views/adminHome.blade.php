@extends('layouts.app')

@section('content')

<div class="container">



    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">รายการที่บันทึกไว้</div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">

                        <div class="container">
                            <div class="col-md-8">
                            <a class="btn btn-primary my-3" href="{{ route('create') }}">เพิ่มข้อมูล</a>
                            </div>
                        </div>

                    
                        <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">ประเภทขยะ1</th>
                            <th scope="col">ประเภทขยะ2</th>
                            <th scope="col">ประเภทขยะ3</th>
                            <th scope="col">ประเภทขยะ4</th>
                            <th scope="col">ประเภทขยะอื่นๆ</th>
                            <th scope="col">เข้าสู่ระบบ</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                        @foreach($Alldata as $row)
                            <tr>
                            <td>{{ $loop->iteration  }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->garbageA }}</td>
                            <td>{{ $row->garbageB }}</td>
                            <td>{{ $row->garbageC }}</td>
                            <td>{{ $row->garbageD }}</td>
                            <td>{{ $row->other }}</td>
                            <td>{{ Carbon\Carbon::parse($row->created_at) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
@endsection
