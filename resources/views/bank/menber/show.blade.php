@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <a href="{{ url('/menber') }}" title="ย้อนกลับ"><button class="btn btn-warning btn-md"><i aria-hidden="true"
                            style="font-family: 'Kanit', sans-serif; position:absolute; left:5%"></i> ย้อนกลับ</button></a>
                &nbsp;&nbsp;
                <a href="{{ url('/menber/' . $menber->id . '/edit') }}" title="แก้ไข"><button
                        class="btn btn-primary btn-md"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        แก้ไข</button></a>
                &nbsp;&nbsp;
                <form method="POST" action="{{ url('menber' . '/' . $menber->id) }}" accept-charset="UTF-8"
                    style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-md" title="ลบ"
                        onclick="return confirm(&quot;ยืนยันที่จะลบ?&quot;)"><i class="fa fa-trash-o"
                            aria-hidden="true"></i> ลบ</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>เลขไอดี</th>
                                        <td>{{ $menber->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> ชื่อ-นามสกุล </th>
                                        <td> {{ $menber->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> อายุ </th>
                                        <td> {{ $menber->age }} ปี</td>
                                    </tr>
                                    <tr>
                                        <th> เบอร์โทรศัพท์ </th>
                                        <td> {{ $menber->tel }} </td>
                                    </tr>
                                    <tr>
                                        <th> คะแนนสะสม </th>
                                        <td> {{ $menber->point }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
