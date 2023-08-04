@extends('layout.app')
@section('content')
    <h1 class="text-primary" align="center">Motorcycle List</h1>
    <a href="{{route('add')}}" class="btn btn-primary">Add new motorcycle</a>
    @if(session()->has('message'))
        <p class="text-success">{{session('message')}}</p>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Address</th>
                <th>Salary</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employeesList as $employee)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->address}}</td>
                    <td>{{$employee->salary}}</td>
                    <td>
                        <form method="POST" action="{{route('delete', $employee->id)}}">
                            @csrf
                            <a href="{{route('edit', $employee->id)}}" class="btn btn-primary">Edit</a>
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display: flex; justify-content: center;">
        {{$employeesList->links('pagination::bootstrap-4')}}
    </div>
@endsection
