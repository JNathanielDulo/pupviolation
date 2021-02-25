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
                    <h1 class="m-0">Sanction Cleared</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                                <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
           Sanction Cleared
           </button>

           <!-- Modal -->
           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Sanction Cleared</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <form>
                        <div class="form-group">
                            <label for="filed_by-content">Filed By</label>
                            <select name="filed_byID" class="form-control">
                               <option>Guard</option>
                               <option>Campus Director</option>
                               <option>Admin</option>
                            </select>
                        </div>
                         <div class="mb-3">
                           <label for="exampleInputstudent_number" class="form-label">Student Number</label>
                           <input type="student_number" class="form-control" id="exampleInputstudent_number">
                         </div>

                         <div class="mb-3">
                             <label for="exampleInputname" class="form-label">Name</label>
                             <input type="name" class="form-control" id="exampleInputname">

                           </div>
                           <div class="mb-3">
                             <label for="exampleInputcourse" class="form-label">Course</label>
                             <input type="course" class="form-control" id="exampleInputcourse">
                           </div>

                           <div class="mb-3">
                             <label for="exampleInputviolation_title" class="form-label">Violation Title</label>
                             <input type="violation_title" class="form-control" id="exampleInputviolation_title">
                           </div>

                           <div class="mb-3">
                            <label for="exampleInputper_classification" class="form-label">Number of Offenses (Per Classifications)</label>
                            <input type="per_classification" class="form-control" id="exampleInputper_classification">

                          </div>
                          <div class="mb-3">
                            <label for="exampleInputover_all_violation" class="form-label">Number of Offenses (Over All Violations)</label>
                            <input type="over_all_violation" class="form-control" id="exampleInputover_all_violation">
                          </div>

                          <div class="mb-3">
                            <label for="exampleInputsanction_remarks" class="form-label">Sanctions Remarks</label>
                            <input type="sanction_remarks" class="form-control" id="exampleInputsanction_remarks">
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
                                  <th>Filed by</th>
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
                                  <td>Guard</td>
                                  <td>2017-00039-SP-0</td>
                                  <td>Joana Marie Kimpano</td>
                                  <td>BSIT 4-1</td>
                                  <td>NO ID</td>
                                  <td><span class="tag tag-success text-danger bg-white border border-warning rounded p-2" style="color:#ffc107!important;">1st offense</span></td>
                                  <td>1st</td>
                                  <td>Cleared</td>
                                </tr>
                                <tr>
                                    <td>Guard</td>
                                    <td>2017-00024-SP-0</td>
                                    <td>Marlou Rillera</td>
                                    <td>BSIT 4-1</td>
                                    <td>Wearing of Inappropriate attire</td>
                                    <td><span class="tag tag-success text-danger bg-white border border-warning rounded p-2" style="color:#ffc107!important;">1st offense</span></td>
                                    <td>2nd</td>
                                    <td>Cleared</td>
                                </tr>
                                <tr>
                                    <td>Campus Director</td>
                                    <td>2017-00021-SP-0</td>
                                    <td>Cerilo Verdejo</td>
                                    <td>BSIT 4-1</td>
                                    <td>Scandalous Display of Affection</td>
                                    <td><span class="tag tag-success text-danger bg-white border border-warning rounded p-2" style="color:#ffc107!important;">1st offense</span></td>
                                    <td>1st</td>
                                    <td>Cleared</td>
                                </tr>
                                <tr>
                                    <td>Guard</td>
                                    <td>2017-00028-SP-0</td>
                                    <td>Patrick Tabogon</td>
                                    <td>BSIT 4-1</td>
                                    <td>Loss of ID</td>
                                    <td><span class="tag tag-success text-danger bg-white border border-warning rounded p-2" style="color:#ffc107!important;">1st offense</span></td>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
@endsection
