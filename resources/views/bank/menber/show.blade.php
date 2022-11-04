@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <div class="row">
                <a href="{{ url('/menber') }}" title="Back"><button class="btn btn-warning btn-md"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                <a href="{{ url('/menber/' . $menber->id . '/edit') }}" title="Edit menber"><button class="btn btn-primary btn-md"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                <form method="POST" action="{{ url('menber' . '/' . $menber->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-md" title="Delete menber" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
                                        <th>ID</th><td>{{ $menber->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $menber->name }} </td></tr><tr><th> Age </th><td> {{ $menber->age }} </td></tr><tr><th> Tel </th><td> {{ $menber->tel }} </td></tr><tr><th> Point </th><td> {{ $menber->point }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
