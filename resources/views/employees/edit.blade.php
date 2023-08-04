@extends('layout.app')
@section('content')
    <div class="container">
        <div class="form">
            <form method="POST" action="{{route('save', $employee->id)}}">
                @csrf
                <h2 class="text-primary" align="center">Edit EMployee</h2>
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" class="form-control {{$errors->has('name') ? 'input-error' : ''}}" name="name" value="{{old('name') ? old('name') : $employee->name}}">
                    @error('name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control {{$errors->has('address') ? 'input-error' : ''}}" name="address" value="{{old('address') ? old('address') : $employee->address}}">
                    @error('make')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="salary">Salary:</label>
                    <input type="int" class="form-control {{$errors->has('salary') ? 'input-error' : ''}}" name="salary" value="{{old('salary') ? old('salary') : $employee->salary}}">
                    @error('model')
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
