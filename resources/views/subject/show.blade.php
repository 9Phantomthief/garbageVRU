@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Subject {{ $subject->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/subject') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/subject/' . $subject->id . '/edit') }}" title="Edit Subject"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('subject' . '/' . $subject->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Subject" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $subject->id }}</td>
                                    </tr>
                                    <tr><th> CodeSubject </th><td> {{ $subject->CodeSubject }} </td></tr><tr><th> NameSubject </th><td> {{ $subject->NameSubject }} </td></tr><tr><th> Sect </th><td> {{ $subject->sect }} </td></tr><tr><th> Lecturer </th><td> {{ $subject->lecturer }} </td></tr><tr><th> Room </th><td> {{ $subject->room }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
