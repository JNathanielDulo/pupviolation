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
                    <h1 class="m-0">Violations</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">



                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#validation_add">
                            Violations
                        </button>



                        <!-- Modal -->
                        <div class="modal fade" id="validation_add" tabindex="-1" aria-labelledby="validation_add"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="validation_add">Add Violations</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <form>
                                    <div class="modal-body">
                                        
                                            <div class="mb-3">
                                                <label for="violationTitle" class="form-label">Violation Title</label>
                                                <input type="text" class="form-control" id="violationTitle"
                                                    aria-describedby="Violation Title">

                                            </div>
                                            <div class="mb-3">
                                                <label for="violationDetails" class="form-label">Sanction Details</label>
                                                <textarea class="form-control" style="resize: none;" rows="4"
                                                    id="violationDetails"></textarea>
                                            </div>





                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
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
                                <h3 class="card-title">Violation List</h3>

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
                            <div class="card-body">
                              <div class="table-responsive">

                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>Violation Title</th>
                                            <th>Disciplinary Sanctions</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                          <td>Failure to bring validated I.D</td>
                                          <td>
                                            <p>
                                              1st Offense – The student shall secure a Student’s Entry Slip from the Office of the Director of the student services.<br>

                                            2nd Offense – The student shall be given a warning slip by the Student Affairs Section.<br>
                                            
                                            3rd Offense – one (1) or (2) days suspension, depending on the reason for not bringing the I.D.<br>
                                            
                                            More than three (3) Offenses – minimum of (3) days suspension<br>
                                          </p>
                                          </td>
                                          <td>
                                            <button class="btn btn-xs btn-default"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-xs btn-default"><i class="fas fa-ban text-danger"></i></button>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Failure to bring validated I.D</td>
                                          <td>
                                            <p>
                                              1st Offense – The student shall secure a Student’s Entry Slip from the Office of the Director of the student services.<br>

                                            2nd Offense – The student shall be given a warning slip by the Student Affairs Section.<br>
                                            
                                            3rd Offense – one (1) or (2) days suspension, depending on the reason for not bringing the I.D.<br>
                                            
                                            More than three (3) Offenses – minimum of (3) days suspension<br>
                                          </p>
                                          </td>
                                          <td>
                                            <button class="btn btn-xs btn-default"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-xs btn-default"><i class="fas fa-ban text-danger"></i></button>
                                          </td>
                                        </tr>
                                        <tr>
                                          <td>Failure to bring validated I.D</td>
                                          <td>
                                            <p>
                                              1st Offense – The student shall secure a Student’s Entry Slip from the Office of the Director of the student services.<br>

                                            2nd Offense – The student shall be given a warning slip by the Student Affairs Section.<br>
                                            
                                            3rd Offense – one (1) or (2) days suspension, depending on the reason for not bringing the I.D.<br>
                                            
                                            More than three (3) Offenses – minimum of (3) days suspension<br>
                                          </p>
                                          </td>
                                          <td>
                                            <button class="btn btn-xs btn-default"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-xs btn-default"><i class="fas fa-ban text-danger"></i></button>
                                          </td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
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
