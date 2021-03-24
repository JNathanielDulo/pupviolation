@extends('layouts.home')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div> --}}


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_user">
                            Users
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="create_user" tabindex="-1" aria-labelledby="create_user_label"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="create_user_label">Add Users</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12">
                                              
                                                    


                                                    <form method="POST" action="{{ route('register') }}"
                                                        enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="form-group row">
                                                            <label for="name"
                                                                class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="name" type="text"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    name="name" value="{{ old('name') }}" required
                                                                    autocomplete="name" placeholder="full name"
                                                                    autofocus>

                                                                @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="email"
                                                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="email"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    name="email" value="{{ old('email') }}" required
                                                                    autocomplete="email"
                                                                    placeholder="Your Email Address">

                                                                @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password"
                                                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password" type="password"
                                                                    placeholder="User Password"
                                                                    class="form-control @error('password') is-invalid @enderror"
                                                                    name="password" required
                                                                    autocomplete="new-password">

                                                                @error('password')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password-confirm"
                                                                class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password-confirm" type="password"
                                                                    placeholder="Confirm your password"
                                                                    class="form-control" name="password_confirmation"
                                                                    required autocomplete="new-password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="role"
                                                                class="col-md-4 col-form-label text-md-right">role
                                                                select</label>

                                                            <div class="col-md-6">
                                                                <select
                                                                    class="form-control @error('role') is-invalid @enderror"
                                                                    name="role" required id="role">
                                                                    <option>please select role</option>
                                                                    <option value="admin">Admin</option>
                                                                    <option value="campusdirector">Campus Director
                                                                    </option>
                                                                    <option value="Guard">Guard</option>
                                                                </select>
                                                                @error('role')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                                @enderror
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <label for="profile_image"
                                                                class="col-md-4 col-form-label text-md-right">Profile
                                                                image</label>
                                                            <div class="col-md-6">
                                                                <input type="file" id="profileImage" class=""
                                                                    name="profile_image">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-0">
                                                          <div class="col-md-6 offset-md-4">
                                                              <button type="submit" class="btn btn-primary">
                                                                  {{ __('Register') }}
                                                              </button>
                                                          </div>
                                                      </div>
                                                      </form>




                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <section class="content">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User List</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class='w-auto'>Image</th>
                                            <th class='w-25'>Role</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)


                                        <tr>
                                            <td>
                                                <div class="col-4">
                                                    <img src="{{asset($user->profile_image)}}"
                                                        class="img-fluid img-rounded">
                                                </div>
                                            </td>

                                            <td>{{$user->role}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                <a href="{{route('users.show',$user->id)}}"
                                                    class="btn btn-default btn-sm">
                                                    <i class="fa fa-eye text-primary mb-1 mr-1"></i>
                                                </a>
                                                <button class="btn btn-default btn-sm mb-1 mr-1">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </section>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
</script>
@endsection
