@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="row">
                    <a href="{{ url('/typere') }}" class="btn btn-warning btn-lg" style="font-family: 'Kanit', sans-serif; font-size: 18px" title="[ย้อนกลับ]">ย้อนกลับ</a>
                </div>
                <div class="card">
                    <div class="card-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/typere/' . $typere->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('typere.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection