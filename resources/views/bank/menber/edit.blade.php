@extends('layouts.app2')

@section('content')
    <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <a href="{{ url('/menber') }}" title="ย้อนกลับ"><button class="btn btn-warning btn-md"><i aria-hidden="true"></i> ย้อนกลับ</button></a>
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

                        <form method="POST" action="{{ url('/menber/' . $menber->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('bank.menber.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
    </div>
@endsection
