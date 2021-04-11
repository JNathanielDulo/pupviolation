@extends('layouts.home')
@section('css')
<link rel="stylesheet" href="{{asset('adminlte/plugins/jquery-ui/jquery-ui.css')}}">
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

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
            @include('layouts.inc.messages')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Violations</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">





                        <!-- Button trigger modal -->

                        <button type="button" class="btn btn btn-success mb-1 mr-1" data-toggle="modal"
                            data-target="#newViolation">
                            new Violation
                        </button>
                        <a href="{{route('offenders.index')}}" class="btn btn btn-primary mb-1 mr-1">
                            Back
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="newViolation" tabindex="-1" aria-labelledby="newViolationTitle"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="newViolationTitle">Add Offenders</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            {{-- <form> --}}
                                            {!! Form::open(['route'
                                            =>['offenderview.store'],'method'=>'POST','class'=>'row p-2']) !!}
                                            {{Form::hidden('offender_id', $offender->id)}}

                                            <div class="col-md-6">
                                                {{Form::label('studentNumber','student Number')}}
                                                :
                                                {{Form::label('studentNumber',$offender->studentNumber)}}
                                                {{Form::hidden('studentNumber', $offender->studentNumber, ['class' => 'form-control', 'placeholder' => '0000-0000-SP-0', 'aria-describedby' => 'student number'])}}
                                                {{Form::hidden('filedby', Auth::user()->name .'/'. Auth::user()->role)}}
                                            </div>
                                            <div class="col-md-6">
                                                {{Form::label('',"Complete Name")}}
                                                :
                                                {{Form::label('studentName',$offender->name)}}
                                                {{Form::hidden('studentName', $offender->name, ['class' => 'form-control', 'aria-describedby' => 'course'])}}

                                            </div>

                                            <div class="col-md-6">
                                                {{Form::label('studentCourse','Course :')}}
                                                {{Form::label('studentCourse',$offender->course)}}

                                                <select class="form-control" name="studentCourse" id="studentCourse"
                                                    style="width: 100%;" hidden>
                                                    <option value="{{$offender->course}}" selected option>
                                                        {{$offender->course}}</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                {{Form::label('email','E-mail :')}}
                                                {{Form::label('email',$offender->email)}}
                                                {{Form::hidden('studentEmail', $offender->email,['class' => 'form-control', 'aria-describedby' => 'email'])}}

                                            </div>
                                            <div class="col-md-6 ml-md-auto">
                                                {{Form::label('contactNum','Contact Number :')}}
                                                {{Form::label('contactNum',$offender->contactnum)}}
                                                {{Form::hidden('contactNum', $offender->contactnum, ['class' => 'form-control', 'aria-describedby' => 'contact number'])}}

                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    {{Form::label('violationid','Violation')}}
                                                    <select class="form-control select2bs4 select2" name="violationid"
                                                        id="violationid" style="width: 100%;">
                                                        <option>select Violation...</option>
                                                        @if (count($violations)>0)
                                                        @foreach ($violations as $violation)

                                                        <option value="{{$violation->id}}">
                                                            {{$violation->violationTitle}}</option>
                                                        @endforeach

                                                        @else
                                                        <option>violation list empty</option>
                                                        @endif
                                                    </select>
                                                </div>
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
                                <h3 class="card-title">{!!$offender->studentNumber." ".$offender->name!!} Violation List
                                </h3>


                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if(count($offender->violations)>0)


                                <div class="col-12 table-responsive" style="height: 70vh;">

                                    <table class="table table-hover table-head-fixed table-striped">
                                        <thead>
                                            <tr>

                                                <th class="w-25">Violation Title</th>
                                                <th>number of offense</th>
                                                <th class="text-center">violation details</th>
                                                <th>status</th>
                                                @if(Auth::user()->role=="admin"||Auth::user()->role=="campusdirector")
                                                <th>Actions</th>
                                                @endif

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($offender->violationsPending->groupBy('violationTitle') as $violation)
                                            <?php
                                            $res = $violations->where('id','=',$violation[0]->id)->first();
                                            
                                            ?>
                                            <tr>

                                                <td>
                                                    
                                                    {{$violation[0]->violationTitle}}
                                                </td>
                                                <td>
                                                    @if(count($violation)==1)
                                                    <p class="text-danger bg-white border border-warning rounded p-2 m-0 text-center"
                                                        style="color:#ffc107!important;">
                                                        {{count($violation)}}st offense
                                                    </p>
                                                    @elseif(count($violation)==2)
                                                    <p class="text-danger bg-white border rounded p-2 m-0 text-center"
                                                        style="color:#ff7504!important;border-color:#ff7504!important">
                                                        {{count($violation)}}nd offense
                                                    </p>
                                                    @elseif(count($violation)==3)
                                                    <p class="text-danger bg-white border rounded p-2 m-0 text-center"
                                                        style="color:#ff0404!important;border-color:#ff0404!important">
                                                        {{count($violation)}}rd offense
                                                    </p>
                                                    @elseif(count($violation)>3&&count($violation)<21) <p
                                                        class="bg-danger border rounded p-2 m-0 text-center"
                                                        style="color:#fff!important;border-color:#fffb04!important;">
                                                        {{count($violation)}}th offense
                                                        </p>
                                                        @endif

                                                </td>
                                                <td>

                                                    @foreach ($res->violationSanctions as $sanctions)
                                                    
                                                        @if ($sanctions->offense == count($violation))
                                                            @if($sanctions->offense==1)
                                                            <p class="text-danger p-2 m-0 text-center text-bold"
                                                                style="color:#ffc107!important;">
                                                                {{$sanctions->offense}}st offense
                                                            </p>
                                                            <p class="mb-2 text-bold text-center">{{$sanctions->details}}</p>
                                                            @elseif($sanctions->offense==2)
                                                            <p class="text-danger p-2 m-0 text-center text-bold"
                                                                style="color:#ff7504!important;">
                                                                {{$sanctions->offense}}nd offense
                                                            </p>
                                                            <p class="mb-2 text-bold text-center">{{$sanctions->details}}</p>
                                                            @elseif($sanctions->offense==3)
                                                            <p class="text-danger p-2 m-0 text-center text-bold"
                                                                style="color:#ff0404!important;">
                                                                {{$sanctions->offense}}rd offense
                                                            </p>
                                                            <p class="mb-2 text-bold text-center">{{$sanctions->details}}</p>
                                                            @elseif($sanctions->offense>3&&$sanctions->offense<21) <p
                                                                class=" p-2 m-0 text-center text-bold"
                                                                style="color:#fff!important;">
                                                                {{$sanctions->offense}}th offense
                                                                </p>
                                                                <p class="mb-2 text-bold text-center">{{$sanctions->details}}</p>
                                                                @endif
                                                        
                                                        
                                                        
                                                        @elseif($sanctions->offense < count($violation))
                                                        
                                                            @if($sanctions->offense==1)
                                                            <p class="text-danger p-2 m-0 text-center text-bold"
                                                                style="color:#ffc107!important;">
                                                                {{$sanctions->offense}}st offense
                                                            </p>
                                                            <p class="mb-2 text-bold text-center">{{$sanctions->details}}</p>
                                                            @elseif($sanctions->offense==2)
                                                            <p class="text-danger p-2 m-0 text-center text-bold"
                                                                style="color:#ff7504!important;">
                                                                {{$sanctions->offense}}nd offense
                                                            </p>
                                                            <p class="mb-2 text-bold text-center">{{$sanctions->details}}</p>
                                                            @elseif($sanctions->offense==3)
                                                            <p class="text-danger  p-2 m-0 text-center text-bold"
                                                                style="color:#ff0404!important;">
                                                                {{$sanctions->offense}}rd offense
                                                            </p>
                                                            <p class="mb-2 text-bold text-center">{{$sanctions->details}}</p>
                                                            @elseif($sanctions->offense>3&&$sanctions->offense<21)
                                                            <p class="bg-danger p-2 m-0 text-center text-bold"
                                                                style="color:#fff!important;">
                                                                {{$sanctions->offense}}th offense
                                                                </p>
                                                                <p class="mb-2 text-bold text-center">{{$sanctions->details}}</p>
                                                                @endif
                                                            
                                                        @endif
                                                        
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <?php
                                                        foreach ($violation as $item) {
                                                            if ($item->pivot->status>0) {
                                                                $pending = false;
                                                            }else {
                                                                $pending = true;
                                                            }
                                                        }
                                                        
                                                        ?>
                                                    
                                                    @if ($pending == false)
                                                    <p class="text-danger text-center bg-white border border-success rounded p-2 mb-1">
                                                        cleared 
                                                    </p>
                                                    
                                                    @else
                                                    <p class="text-danger text-center bg-white border border-danger rounded p-2 mb-1"
                                                        style="color:#ec6e06!important;">
                                                        pending
                                                    </p>
                                                    @endif
                                                </td>
                                                <td>
                                                @if(Auth::user()->role=="admin"||Auth::user()->role=="campusdirector")
                                                    @if ($pending == false)
                                                    <button type="button" class="btn btn-danger mx-1"
                                                        data-toggle="modal"
                                                        data-target="#revertnotice{{$violation[0]->id}}">
                                                        <i class="fas fa-times fa-fw"></i></button>
                                                    <div class="modal fade" id="revertnotice{{$violation[0]->id}}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="revertmodalTitle{{$violation[0]->id}}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                    <h5 class="modal-title" id="revertmodalTitle">
                                                                        {{$violation[0]->violationTitle}}
                                                                    </h5>
                                                                    <button class="close" type="button"
                                                                        data-dismiss="modal" aria-label="close">
                                                                        <span aria-hidden="true"
                                                                            class="text-light">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                    <p>
                                                                        Are you sure you want to revert this
                                                                        violation:
                                                                    </p>
                                                                    <p>
                                                                        <b> {{$violation[0]->violationTitle}}</b>
                                                                    </p>
                                                                    <p>
                                                                        for:
                                                                        <b> {!!$offender->studentNumber."
                                                                            ".$offender->name!!}</b>
                                                                    </p>
                                                                    <p>
                                                                        to <span class="border rounded p-1"
                                                                            style="border-color:#ec6e06!important">pending</span>
                                                                        ?
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer" style="justify-content: center!important;">
                                                                    {!!Form::open(['route'=>['SanctionCleared.update',$offender->id],'method'
                                                                            => 'POST']) !!}
                                                                            {{Form::hidden('action','revert')}}
                                                                            {{Form::hidden('violation_id',$violation[0]->id)}}
                                                                            {{Form::hidden('offender_id',$offender->id)}}
                                                                            {{Form::button('yes', ['type' => 'submit','class'=>'btn btn-danger ml-auto'])}}
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">no</button>
                                                                            {{Form::hidden('_method','PUT')}}

                                                                    {!! Form::close() !!}
                                                                    

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <button class="btn btn-success mx-1" type="button"
                                                        data-toggle="modal"
                                                        data-target="#clearnotice{{$violation[0]->id}}">
                                                        Clear</button>
                                                    <div class="modal fade" id="clearnotice{{$violation[0]->id}}"
                                                        tabindex="-1" role="dialog" aria-labelledby="clearModalTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-success">
                                                                    <h5 class="modal-title" id="clearModalTitle">
                                                                        {{$violation[0]->violationTitle}}</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true"
                                                                            class="text-light">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-center">
                                                                    <p>
                                                                        Are you sure you want to clear this
                                                                        violation:
                                                                    </p>
                                                                    <p>
                                                                        <b> {{$violation[0]->violationTitle}}</b>
                                                                    </p>
                                                                    <p>
                                                                        for:
                                                                        <b> {!!$offender->studentNumber."
                                                                            ".$offender->name!!}</b>
                                                                    </p>
                                                                </div>
                                                                
                                                                    <div class="modal-footer" style="justify-content: center!important;">
                                                                        
                                                                            {!!Form::open(['route'=>['SanctionCleared.update',$offender->id],'method'
                                                                            => 'POST']) !!}
                                                                            {{Form::hidden('action','clear')}}
                                                                            {{Form::hidden('violation_id',$violation[0]->id)}}
                                                                            {{Form::hidden('offender_id',$offender->id)}}
                                                                            {{Form::button('yes', ['type' => 'submit','class'=>'btn btn-success'])}}
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">no</button>
                                                                            {{Form::hidden('_method','PUT')}}

                                                                            {!! Form::close() !!}

                                                                            
                                                                        
                                                                    </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>


                                        {{-- <tbody>
                                            @foreach ($violationlist as $violation)
                                            <tr>


                                                <td class="text-left">{{$violation->violationTitle}}</td>
                                        <td>

                                            @if($violation->occurances==1)
                                            <span
                                                class="tag tag-success text-danger bg-white border border-warning rounded p-2"
                                                style="color:#ffc107!important;">
                                                {{$violation->occurances}}st offense
                                            </span>
                                            @elseif($violation->occurances==2)
                                            <span class="tag tag-success text-danger bg-white border rounded p-2"
                                                style="color:#ff7504!important;border-color:#ff7504!important">
                                                {{$violation->occurances}}nd offense
                                            </span>
                                            @elseif($violation->occurances==3)
                                            <span class="tag tag-success text-danger bg-white border rounded p-2"
                                                style="color:#ff0404!important;border-color:#ff0404!important">
                                                {{$violation->occurances}}rd offense
                                            </span>
                                            @elseif($violation->occurances>3&&$violation->occurances<21) <span
                                                class="tag tag-success bg-danger  border rounded p-2"
                                                style="color:#fff!important;border-color:#fffb04!important;">
                                                {{$violation->occurances}}th offense
                                                </span>
                                                @endif



                                        </td>


                                        <td class='row'>
                                            <a href="#" class="btn btn-default mb-1 mr-1"><i
                                                    class="fa fa-eye text-primary"></i></a>

                                        </td>
                                        </tr>
                                        @endforeach


                                        </tbody> --}}
                                    </table>
                                </div>


                                @else
                                <p> Violation list empty</p>
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
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
</script> --}}
<!-- Toastr -->
<script src="{{asset('adminlte/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
{{-- <script>
    CKEDITOR.replace('violationbody-ckeditor');
</script> --}}

<script>
    $(function () {
        // CKEDITOR.replaceClass = 'ckeditor';
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        $('#swaldanger').on("click", function () {

            Toast.fire({
                icon: 'question',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            });

        });



    });

</script>
@endsection
