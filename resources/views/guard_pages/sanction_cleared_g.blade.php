@extends('layouts.guard')

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
                    <h1 class="m-0">Sanction Cleared</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                                <!-- Button trigger modal -->


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
                            <h3 class="card-title">Lists of Sanction Cleared</h3>

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
                                  <th>Student Number</th>
                                  <th>Name</th>
                                  <th>Course</th>
                                  <th>Violation Title</th>
                                  <th>Number of Offenses (Per Classification)</th>
                                  <th>Number of Offenses (Over All Violation)</th>
                                  <th>Sanction Remarks</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>2017-00039-SP-0</td>
                                  <td>Joana Marie Kimpano</td>
                                  <td>BSIT 4-1</td>
                                  <td>NO ID</td>
                                  <td><span class="tag tag-success text-danger bg-white border border-warning rounded p-2" style="color:#ffc107!important;">1st offense</span></td>
                                  <td>1st</td>
                                  <td>Cleared</td>
                                </tr>
                                <tr>
                                    <td>2017-00024-SP-0</td>
                                    <td>Marlou Rillera</td>
                                    <td>BSIT 4-1</td>
                                    <td>Wearing of Inappropriate attire</td>
                                    <td><span class="tag tag-success text-danger bg-white border border-warning rounded p-2" style="color:#ffc107!important;">1st offense</span></td>
                                    <td>2nd</td>
                                    <td>Cleared</td>
                                </tr>
                                <tr>
                                    <td>2017-00028-SP-0</td>
                                    <td>Patrick Tabogon</td>
                                    <td>BSIT 4-1</td>
                                    <td>Loss of ID</td>
                                    <td><span class="tag tag-danger text-light bg-danger border border-warning rounded p-2">4th offense</span></td>
                                    <td>1st</td>
                                    <td>Cleared</td>
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


@endsection
