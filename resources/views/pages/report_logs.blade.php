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
                    <h1 class="m-0">Report Logs</h1>
                </div><!-- /.col -->
                {{-- <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Generate Reports
                        </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Generate Reports</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <form>
                                          <div class="mb-3">
                                         

                                          </div>
                                          <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Search</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                          </div>

                                         <div class="form-group">
                                         <label for="month-content">Select Month</label>
                                         <select name="monthID" class="form-control">
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                            <option>April</option>
                                            <option>May</option>
                                            <option>June</option>
                                            <option>July</option>
                                            <option>August</option>
                                            <option>September</option>
                                            <option>October</option>
                                            <option>November</option>
                                            <option>December</option>
                                         </select>

                                            </div>
                                            <div class="mb-3">
                                              <label for="exampleInputPassword1" class="form-label">Select Year</label>
                                              <input type="password" class="form-control" id="exampleInputPassword1">
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
                </div><!-- /.col --> --}}
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <section class="content">
             
                  
              
               
            
                <div class="row">
                  @foreach ($violations as $violation)
                    <div class="col-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">{{$violation->violationTitle}}</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                              <thead>
                                <tr>
                                    
                                    <th>Student info</th>
                                    <th>Course</th>
                                    <th>Number of Offenses</th>
                                    <th>Status</th>
                                </tr>
                              </thead>
                              <tbody>
                               
                                @foreach($violation->offendersPending->groupBy('name') as $offenderPending)
                                <tr>
                                  
                                <td>{{$offenderPending[0]->studentNumber}} | {{$offenderPending[0]->name}}</td>
                                <td>{{$offenderPending[0]->course}}</td>
                                  <td>
                                    <?php 
                                    $count = 0;
                                    foreach($violation->offendersPending as $entrycount){
                                      if($entrycount->name == $offenderPending[0]->name)
                                      $count++;
                                    }
                                    echo $count;
                                    // $violation->offendersPending->count($offenderPending[0]->name)
                                  ?>
                                  </td>
                                <td>
                                  <p class="text-danger text-center bg-white border border-danger rounded p-0 mb-1" style="color:#ec6e06!important;">
                                  pending
                                  </p>
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
                    @endforeach
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
