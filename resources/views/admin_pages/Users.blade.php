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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
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
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Users
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="exampleInputdate" class="form-label">Date Filed</label>
                  <input type="date" class="form-control" id="exampleInputdate">

                </div>
                <div class="form-group">
                    <label for="role-content">Role</label>
                    <select name="roleID" class="form-control">
                       <option>Guard</option>
                       <option>Campus Director</option>
                       <option>Admin</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputlast_name" class="form-label">Last Name</label>
                    <input type="last_name" class="form-control" id="exampleInputlast_name">

                  </div>
                  <div class="mb-3">
                    <label for="exampleInputfirst_name" class="form-label">First Name</label>
                    <input type="first_name" class="form-control" id="exampleInputfirst_name">
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputcontact_number" class="form-label">Contact Number</label>
                    <input type="contact_number" class="form-control" id="exampleInputcontact_number">
                  </div>

                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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
                            <h3 class="card-title">Lists of Users</h3>

                            <div class="card-tools">
                              <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

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
                                  <th>Date Filed</th>
                                  <th>Role</th>
                                  <th>Last Name</th>
                                  <th>First Name</th>
                                  <th>Contact Number</th>
                                  <th>Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>11/12/2020</td>
                                    <td>Guard</td>
                                    <td>Magtangob</td>
                                    <td>Charmaine Joy</td>
                                    <td>0912345678</td>
                                    <th><i class="far fa-edit"></i></th>
                                </tr>
                                <tr>
                                    <td>9/29/2020</td>
                                    <td>Guard</td>
                                    <td>Culubong</td>
                                    <td>Renate Rose</td>
                                    <td>0912345678</td>
                                    <th><i class="far fa-edit"></i></th>
                                </tr>
                                <tr>
                                    <td>9/29/2020</td>
                                    <td>Campus Director</td>
                                    <td>Aguilar</td>
                                    <td>Joan</td>
                                    <td>0912345678</td>
                                    <th><i class="far fa-edit"></i></th>
                                </tr>
                                <tr>
                                    <td>7/21/2020</td>
                                    <td>Guard</td>
                                    <td>Enguerra</td>
                                    <td>Mary Joy</td>
                                    <td>0912345678</td>
                                    <th><i class="far fa-edit"></i></th>
                                </tr>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
@endsection
