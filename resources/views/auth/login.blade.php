@extends('layouts.app')

@section('content')

<div class="row no-gutters my-md-5 py-md-5">
    {{-- small screen mobile --}}
    <div class="d-block col-12 mx-auto d-md-none pupbg" style="height: 100vh;">

        <div class="card card-dark text-light text-center pupbg rounded-0 w-100" style="height: 100%">
            
            <div class="card-body">
                <div class="col-5 col-md-2 d-block my-2 mx-auto">
                    <img src="{{asset('adminlte/dist/img/pup logo.png')}}" alt="" class="img-fluid d-block mx-auto">
                </div>
                <div class="container">
                    <div class="col-lg-12 d-block mx-auto">
                        <h3 class="text-center d-block d-sm-none"> <b>PUPSPC</b><br> Student Violation Record Management</h3>
                        <h2 class="text-center d-none d-sm-block "> <b>PUPSPC</b><br> Student Violation Record Management</h2>
                        
                    </div>

                    <p class="login-box-msg">Sign in to start your session</p>
                    <div class="col-12 col-sm-6 col-md-12 col-lg-10 mx-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group mb-3">
                                {{-- <input type="email" class="form-control" placeholder="Email"> --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope pupcolor"></span>
                                    </div>
                                </div>
                                @error('email')
                                <span class="invalid-feedback text-light" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                {{-- <input type="password" class="form-control" placeholder="Password"> --}}
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    name="password" required autocomplete="current-password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock pupcolor"></span>
                                    </div>
                                </div>
                                @error('password')
                                <span class="invalid-feedback text-light" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-6 text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-default btn-block pupcolor text-bold">Sign
                                        In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="row justify-content-center">
                                <p class="">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link text-light" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif

                                </p>

                            </div>
                        </form>



                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>




    <!-- /tablet size display -->
    <div class="d-none col-lg-6 col-xl-4 mx-auto my-0 my-lg-5 d-md-block">

        <div class="card card-dark text-light text-center pupbg w-100 py-3">
            <div class="col-5 col-md-2 d-block mx-auto">
                <img src="{{asset('adminlte/dist/img/pup logo.png')}}" alt="" class="img-fluid my-sm-2 d-block mx-auto">
            </div>
            <div class="card-body p-1">
                <div class="container">
                    <div class="col-lg-12 d-block mx-auto">
                        
                        <h1 class="text-center d-none d-md-block"> <b>PUPSPC</b><br> Student Violation Record Management
                        </h1>
                    </div>

                    <p class="login-box-msg">Sign in to start your session</p>
                    <div class="col-12 col-sm-6 col-md-12 col-lg-10 mx-auto">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group mb-3">
                                {{-- <input type="email" class="form-control" placeholder="Email"> --}}
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" placeholder="Email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope pupcolor"></span>
                                    </div>
                                </div>
                                @error('email')
                                <span class="invalid-feedback text-light" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                {{-- <input type="password" class="form-control" placeholder="Password"> --}}
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    name="password" required autocomplete="current-password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock pupcolor"></span>
                                    </div>
                                </div>
                                @error('password')
                                <span class="invalid-feedback text-light" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-md-6 text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">

                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-default btn-block pupcolor text-bold">Sign
                                        In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                            <div class="row justify-content-center">
                                <p class="">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link text-light" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif

                                </p>

                            </div>
                        </form>



                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    {{-- tablet size display --}}
</div>

@endsection
