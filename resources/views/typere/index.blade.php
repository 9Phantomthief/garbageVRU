@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md">
                <div class="row">
                    <a href="{{ url('/menber') }}" class="btn btn-warning btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" title="[ย้อนกลับ]">ย้อนกลับ</a>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 style=" font-family: 'Kanit', sans-serif"><b>ประเภทขยะทั้งหมด</b></h5>
                        <a href=" {{ url('/typere/create') }} " class="btn btn-info btn-sm" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px; " title="เพิ่มข้อมูลประเภทขยะ">เพิ่มข้อมูลประเภทขยะ</a>
                    </div>
                    
                    <div class="card-body">

                        <form method="GET" action="{{ url('/typere') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px;">ลำดับ</th>
                                        <th style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px;">ชื่อ</th></th>
                                        <th style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px;">ราคา</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($typere as $item)
                                    <tr>
                                        <td style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px;">{{ $loop->iteration }}</td>
                                        <td style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px;">{{ $item->name }}</td>
                                        <td style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px;">{{ $item->price }}</td>
                                        <td style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px;">
                                            <a href="{{ url('/typere/' . $item->id . '/edit') }}" title="แก้ไข"><button class="btn btn-primary btn-sm" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px;">แก้ไข</button></a>

                                            <form method="POST" action="{{ url('/typere' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="ลบ" style="text-align: center; font-family: 'Kanit', sans-serif; font-size: 16px;" onclick="return confirm(&quot;ยืนยันที่จะลบ?&quot;)">ลบ</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $typere->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
