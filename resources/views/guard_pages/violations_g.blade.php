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
                    <h1 class="m-0">Violations</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">


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
                            <h3 class="card-title">Lists of Violations</h3>

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
                                  <th>ID</th>
                                  <th>Violation Title</th>
                                  <th>Number of Offenses (Per Classification)</th>
                                  <th>Sanctions</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>NO ID</td>
                                  <td><span class="tag tag-success text-danger bg-white border border-warning rounded p-2" style="color:#ffc107!important;">1st offense</span></td>
                                  <td>Community Service</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Loss of ID</td>
                                    <td><span class="tag tag-danger text-light bg-danger border border-warning rounded p-2">4th offense</span></td>
                                    <td>Community Service</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wearing of Inappropriate Attire</td>
                                    <td><span class="tag tag-success text-danger bg-white border border-warning rounded p-2" style="color:#ffc107!important;">1st offense</span></td>
                                    <td>Community Service</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Failure to bring Validated ID</td>
                                    <td><span class="tag tag-success text-danger bg-white border border-warning rounded p-2" style="color:#ffc107!important;">1st offense</span></td>
                                    <td>Community Service</td>
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
