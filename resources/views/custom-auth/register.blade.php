@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 m-auto">
                <div class="card border rounded">
                    <h4 class="card-title p-3">Registration Form</h4>
                    <div class="card-body">
                        <form action="{{ route('register.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-lavel">Name</label>
                                <input type="text" class="form-control" name="name" id="">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-lavel">Email</label>
                                <input type="text" class="form-control" name="email" id="">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-lavel">Phone</label>
                                <input type="text" class="form-control" name="phone" id="">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-lavel">Password</label>
                                <input type="text" class="form-control" name="password" id="">
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-lavel">Confirm Password</label>
                                <input type="text" class="form-control" name="password_confirmation" id="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-info">Register</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
