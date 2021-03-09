@extends('layouts.home')
@section('css')
<link rel="stylesheet" href="adminlte/plugins/jquery-ui/jquery-ui.css">
<!-- Select2 -->
<link rel="stylesheet" href="adminlte/plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

@endsection
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
                    <h1 class="m-0">Offenders</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Offenders
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Offenders</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{-- <form> --}}
                                          {!! Form::open(['route' =>['offenders.store'],'method'=>'POST']) !!}
                                          {{-- hidden --}}
                                            {{-- <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Filed By</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp">

                                            </div> --}} 
                                            
                                            <div class="mb-3">
                                             
                                            {{Form::label('studentNumber','Student Number')}}
                                            {{Form::text('studentNumber', '', ['class' => 'form-control', 'placeholder' => '0000-0000-SP-0', 'aria-describedby' => 'student number'])}}
                                            {{Form::hidden('filedby', Auth::user()->name .'/'. Auth::user()->role)}}
                                            </div>
                                            <div class="mb-3">
                                              {{Form::label('studentName','Name')}}
                                              {{Form::text('studentName', '', ['class' => 'form-control', 'aria-describedby' => 'course'])}}
                                              
                                              </div>
                                            
                                            <div class="mb-3">
                                            {{Form::label('studentCourse','Course')}}
                                            
                                            <select class="form-control select2bs4" name="studentCourse" id="studentCourse" style="width: 100%;">
                                              <option>select Course...</option>
                                              <option value="BSA">Bachelor of Science in Accountancy (BSA)</option>
                                              <option value="BSBA-HRM">Bachelor of Science in Business Administration major in Human Resource Management (BSBA-HRM)</option>
                                              <option value="BSBA-MM">Bachelor of Science in Business Administration major in Marketing Management (BSBA-MM)</option>
                                              <option value="BSENTREP">Bachelor of Science in Entrepreneurship (BSENTREP)</option>
                                              <option value="BSEDEN">Bachelor of Secondary Education major in English (BSEDEN)</option>
                                              <option value="BSEDMT">Bachelor of Secondary Education major in Mathematics (BSEDMT)</option>
                                              <option value="BSIT">Bachelor of Science in Information Technology (BSIT)</option>
                                              
                                            </select>
                                            </div>
                                            <div class="mb-3">
                                              {{Form::label('email','E-mail')}}
                                              {{Form::email('studentEmail', '', ['class' => 'form-control', 'aria-describedby' => 'email'])}}
                                              
                                            </div>
                                            <div class="mb-3">
                                              {{Form::label('contactNum','Contact Number')}}
                                              {{Form::text('contactNum', '', ['class' => 'form-control', 'aria-describedby' => 'contact number'])}}
                                              
                                            </div>

                                            <div class="mb-3">
                                              <div class="form-group">
                                              {{Form::label('violationid','Violation')}}
                                                <select class="form-control select2bs4" name="violationid" id="violationid" style="width: 100%;">
                                                  <option>select Violation...</option>
                                                  @if (count($violations)>0)
                                                  @foreach ($violations as $violation)

                                                  <option value="{{$violation->id}}">{{$violation->violationTitle}}</option>
                                                  @endforeach
                                                  
                                                  @else
                                                  <option>violation list empty</option>
                                                  @endif
                                                  </select>
                                              </div>
                                            </div>
                                            
                                    </div>
                                    <div class="modal-footer">
                                      {{Form::button('Cancel',['class'=>'btn btn-default','data-dismiss'=>'modal'])}}
                                      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                                      {!! Form::close() !!}
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
                                <h3 class="card-title">Offender List</h3>

                                
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                              @if(count($offenders)>0)
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Filed By</th>
                                            <th>Student Number</th>
                                            <th>Name</th>
                                            <th>Course</th>
                                            <th>Violation Title</th>
                                            <th>Number of Offenses</th>
                                            <th>Total Offenses</th>
                                            <th>Sanctions</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($offenders as $offender)
                                          
                                      @endforeach
                                        <tr>
                                          <td> {!!$offender->filedby!!} </td>
                                          <td>{!!$offender->studentNumber!!}</td>
                                          <td>{!!$offender->name!!}</td>
                                          <td>{!!$offender->course!!}</td>
                                          <td>
                                          
                                          </td>
                                          <td>Number of Offenses</td>
                                          <td>Total Offenses</td>
                                          <td>Sanctions</td>
                                          <td>Actions</td>
                                        </tr>
                                    </tbody>
                                </table>
                              @else
                              <p> Offender list empty</p>
                              @endif
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

@section('scripts')
<!-- Select2 -->
<script src="adminlte/plugins/select2/js/select2.full.min.js"></script>
<script>
  $( function() { 
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


});
</script>
@endsection