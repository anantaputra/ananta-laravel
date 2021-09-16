@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration">
            <form action="/register" method="post">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
          
              <div class="form-floating mt-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{old('name')}}">
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="form-floating mt-3">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" required value="{{old('username')}}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="form-floating mt-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" required value="{{old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="form-floating mt-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
        
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="register">Register </button>

            </form>

            <small class="d-block text-center mt-3">Already registered? <a href="/login">Register Now!</a></small>
        </main>
    </div>
</div>


@endsection