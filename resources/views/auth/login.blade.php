
    @extends('auth.auth-layouts.app')

    @section('content')
    <div class="card mb-3">
        

        <div class="card-body">

            

          <div class="pt-4 pb-2">
            @include('message.message')
            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
            <p class="text-center small">Enter your email & password to login</p>
          </div>

          <form  action="{{ url('login')}}" method="post" class="row g-3 needs-validation"  novalidate>

            {{ csrf_field() }}

            <div class="col-12">
              
              <div class="col-12">
                <label for="yourEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="yourEmail" required>
                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
              </div>
            </div>

            <div class="col-12">
              <label for="yourPassword" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="yourPassword" required>
              <div class="invalid-feedback">Please enter your password!</div>
            </div>

            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-primary w-100" type="submit">Login</button>
            </div>
            <div class="col-12">
              {{-- <p class="small mb-0">Don't have account? <a href="{{ url('register')}}">Create an account</a></p> --}}
              <p class="small mb-0">Don't have account? <a href="#">Create an account</a></p>
            </div>

            <div class="col-12">
                {{-- <p class="small mb-0"><a href="{{ url('forgot')}}">Forgot Password</a></p> --}}
                <p class="small mb-0"><a href="#">Forgot Password</a></p>
              </div>
          </form>

        </div>
      </div>
    @endsection