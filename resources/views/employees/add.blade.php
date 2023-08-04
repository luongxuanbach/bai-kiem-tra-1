@extends('layout.app')
@section('content')
    <div class="container">
        <div class="form">
            <form method="POST" action="{{route('save')}}">
                @csrf
                <h2 class="text-primary" align="center">Add new Employee</h2>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control {{$errors->has('name') ? 'input-error' : ''}}" name="name" value="{{old('name')}}">
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control {{$errors->has('address') ? 'input-error' : ''}}" name="address" value="{{old('address')}}">
                    @error('address')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="text" class="form-control {{$errors->has('salary') ? 'input-error' : ''}}" name="salary" value="{{old('salary')}}">
                    @error('salary')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group float-sm-right">
                    <input type="submit" value="Save" class="btn btn-primary">
                    <a class="btn btn-danger" href="{{route('index')}}">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
