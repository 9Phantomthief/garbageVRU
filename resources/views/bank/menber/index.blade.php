@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <a href="{{ url('/garbage') }}" class="btn btn-info btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" title="บันทึกรายการขยะ">บันทึกรายการขยะ</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="{{ url('/report') }}" class="btn btn-warning btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" title="รายงาน">รายงาน</a>
                    <a href="{{ url('/admin/home') }}" class="btn btn-success btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px; position:absolute; right:0%" title="">ระบบจัดการขยะ</a>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header" style="font-family: 'Kanit', sans-serif; position:absolute; left:5%"><h4>ตารางรายชื่อ</h4></div>
                    <div class="card-body">
                        {{-- <a href="{{ url('/menber/create') }}" class="btn btn-success btn-sm" title="Add New menber">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> --}}

                        <form method="GET" action="{{ url('/menber') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="ค้นหา" value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive-md">
                            <table class="table">
                                <thead class="table table-hover">
                                    <tr>
                                        <th style="text-align: center; font-family: 'Kanit', sans-serif">ลำดับ</th>
                                        <th style="text-align: center; font-family: 'Kanit', sans-serif">ชื่อ</th>
                                        <th style="text-align: center; font-family: 'Kanit', sans-serif">อายุ</th>
                                        <th style="text-align: center; font-family: 'Kanit', sans-serif">เบอร์โทรศัพท์</th>
                                        <th style="text-align: center; font-family: 'Kanit', sans-serif">คะแนนสะสม</th>
                                        <th style="text-align: center; font-family: 'Kanit', sans-serif">-</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($menber as $item)
                                    <tr>
                                        <td style="text-align: center; font-family: 'Kanit', sans-serif">{{ $loop->iteration }}</td>
                                        <td style="text-align: center; font-family: 'Kanit', sans-serif">{{ $item->name }}</td><td>{{ $item->age }}</td><td>{{ $item->tel }}</td><td>{{ $item->point }}</td>
                                        <td style="text-align: center; font-family: 'Kanit', sans-serif">
                                            <a href="{{ url('/menber/' . $item->id) }}" title="View menber"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/menber/' . $item->id . '/edit') }}" title="Edit menber"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/menber' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete menber" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $menber->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
