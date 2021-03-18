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
           @include('layouts.inc.messages')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Violations</h1>
                </div><!-- /.col -->

                @if (Auth::user()->role=="admin")
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">



                        <button type="button" class="btn btn-success mb-1 mr-1" data-toggle="modal" data-target="#validation_add">
                            New Violation
                        </button>
                        <a href="violations/archive" class="btn btn-warning mb-1 mr-1 text-light">
                            Violation Archive
                        </a>



                        <!-- Modal -->
                        <div class="modal fade" id="validation_add" tabindex="-1" aria-labelledby="validation_add"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="validation_add">Add Violations</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>

                                    {!! Form::open(['route' => ['violations.store'],'method'=> 'POST']) !!}
                                    <div class="modal-body">

                                        <div class="mb-3">
                                            {{Form::label('violationTitle','Violation Title')}}
                                            {{Form::text('violationTitle', '', ['class' => 'form-control', 'placeholder' => 'Title', 'aria-describedby' => 'Violation Title'])}}
                                            

                                        </div>
                                        <div class="mb-3">
                                            {{Form::label('violationDetails','Disciplinary Sanctions',['class' => 'form-label'])}}
                                            {{Form::textarea('violationDetails','',['class'=>'form-control ckeditor','style' =>'resize:none'])}}
                                            
                                        </div>





                                    </div>
                                    <div class="modal-footer">
                                        {{Form::button('Cancel',['class'=>'btn btn-default','data-dismiss'=>'modal'])}}
                                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </ol>


                </div>
                @endif
                
                <!-- /.col -->
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
                                @if(count($violations)>0)
                                <div class="col-12 table-responsive" style="height: 70vh;">

                                    <table class="table table-sm table-hover table-head-fixed">
                                        <thead>
                                            <tr>

                                                <th class="w-25 text-center">Violation Title</th>
                                                <th class="w-50">Disciplinary Sanctions</th>
                                                <th class="w-auto">last updated</th>
                                                @if (Auth::user()->role=="admin")
                                                <th class="w-auto">Actions</th>
                                                @endif

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($violations as $violation)
                                            <tr>


                                                <td class="text-center">{{$violation->violationTitle}}</td>
                                                <td>
                                                    {!!$violation->disciplinarySanctions!!}
                                                </td>
                                                <td>{{$violation->updated_at}}</td>

                                                @if (Auth::user()->role=="admin")
                                                <td class='row'>
                                                    {{-- <a href="violationEdit/{{$violation->id}}"
                                                    class="btn btn-xs btn-default"><i class="fas fa-edit"></i></a> --}}
                                                    <button type="button" class="btn btn-sm ml-1 mb-1 btn-default"
                                                        data-toggle="modal"
                                                        data-target="#validation_edit{{$violation->id}}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="validation_edit{{$violation->id}}"
                                                        tabindex="-1"
                                                        aria-labelledby="validation_edit{{$violation->id}}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="validation_add">Edit
                                                                        Violations</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                {!! Form::open(['route' => ['violations.update',$violation->id],'method'=> 'POST']) !!}
                                                                    <div class="modal-body">

                                                                        <div class="mb-3">
                                                                            {{Form::label('violationTitle','Violation Title')}}
                                                                            {{Form::text('violationTitle', $violation->violationTitle, ['class' => 'form-control', 'placeholder' => 'Title', 'aria-describedby' => 'Violation Title'])}}
                                                                            

                                                                        </div>
                                                                        <div class="mb-3">
                                                                            {{Form::label('violationDetails','Disciplinary Sanctions',['class' => 'form-label'])}}
                                                                            {{Form::textarea('violationDetails',$violation->disciplinarySanctions,['class'=>'form-control ckeditor','style' =>'resize:none'])}}
                                                                            
                                                                        </div>





                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        {{Form::button('Cancel',['class'=>'btn btn-default','data-dismiss'=>'modal'])}}
                                                                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                                                                    </div>
                                                                    {{Form::hidden('_method','PUT')}}
                                                                    {!! Form::close() !!}
                                                               
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {!!Form::open(['route'=>['violations.destroy',$violation->id],'method' => 'POST']) !!}
                                                    {{Form::button('<i class="fa fa-ban"></i>', ['type' => 'submit','class'=>'btn btn-sm btn-default ml-1 mb-1'])}}
                                                    {{Form::hidden('_method','DELETE')}}
                                                    
                                                    {!! Form::close() !!}



                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach


                                        </tbody>
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
<script>
    CKEDITOR.replace('violationbody-ckeditor');
</script>

<script>
    $(function () {
        CKEDITOR.replaceClass = 'ckeditor';

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
