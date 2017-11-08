@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>dorms CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('dorms.create') }}"> Create New Dorm</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Location</th>
            <th>Building Amount</th>
            <th>Room Amount</th>
            <th>elec_unit_cost</th>
            <th>water_unit_cost</th>
            <th>Description</th>
            <th>Rule</th>
            <th>Picture</th>
            <th width="280px">Operation</th>
        </tr>
    @foreach ($dorms as $dorm)
    <tr>
        <td>{{ $dorm->id}}</td>
        <td>{{ $dorm->namet}}</td>
        <td>{{ $dorm->location}}</td>
        <td>{{ $dorm->building_amt}}</td>
        <td>{{ $dorm->room_amt}}</td>
        <td>{{ $dorm->elec_unit_cost}}</td>
        <td>{{ $dorm->water_unit_cost}}</td>
        <td>{{ $dorm->description}}</td>
        <td>{{ $dorm->rule}}</td>
        <td>{{ $dorm->pic_dest}}</td>


        <td>
            <a class="btn btn-info" href="{{ route('dorms.show',$dorm->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('dorms.edit',$dorm->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['dorms.destroy', $dorm->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
    {!! $dorms->render() !!}
@endsection