@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                   <h5 style="font-family: 'Kanit', sans-serif; color:black">&nbsp;&nbsp;&nbsp;&nbsp;เพิ่มข้อมูล
                    <a style="float:right; font-family: 'Kanit', sans-serif" href="{{ url('/garbage') }}" class="btn btn-warning btn-sm" title="ย้อนกลับ">ย้อนกลับ</a> 
                    </h5>    
                </div>

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>\
                        @endif

                        <form method="POST" action="{{ url('/garbage') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('garbage.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
