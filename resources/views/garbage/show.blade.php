@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">garbage {{ $garbage->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/garbage') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/garbage/' . $garbage->id . '/edit') }}" title="Edit garbage"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('garbage' . '/' . $garbage->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete garbage" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $garbage->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $garbage->name }} </td></tr><tr><th> GarbageA </th><td> {{ $garbage->garbageA }} </td></tr><tr><th> GarbageB </th><td> {{ $garbage->garbageB }} </td></tr><tr><th> GarbageC </th><td> {{ $garbage->garbageC }} </td></tr><tr><th> GarbageD </th><td> {{ $garbage->garbageD }} </td></tr><tr><th> Other </th><td> {{ $garbage->other }} </td></tr><tr><th> ValueOther </th><td> {{ $garbage->valueOther }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
