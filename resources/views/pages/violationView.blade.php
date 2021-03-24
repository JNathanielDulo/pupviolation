@extends('layouts.home')

@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            @include('layouts.inc.messages')
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Violation : {{$violation->violationTitle}}</h1>
                </div><!-- /.col -->

                @if (Auth::user()->role=="admin")
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">



                        <button type="button" class="btn btn-success mb-1 mr-1" data-toggle="modal"
                            data-target="#sanction_add">
                            New Sanction
                        </button>
                        <a href="/violationSanction/archive/{{$violation->id}}" class="btn btn-warning mb-1 mr-1 text-light">
                            Archive
                        </a>



                        <!-- Modal -->
                        <div class="modal fade" id="sanction_add" tabindex="-1" aria-labelledby="add new sanction"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="sanction_add">Add Sanction</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>

                                    {!! Form::open(['route' => ['violationSanction.store'],'method'=> 'POST']) !!}
                                    <div class="modal-body">
                                        {{Form::hidden('violation_id', $violation->id, ['class' => 'form-control', 'placeholder' => 'nth number', 'aria-describedby' => 'Validation_id'])}}

                                        <div class="mb-3">
                                            {{Form::label('OrdinalOffensenumber','Ordinal Offense number')}}
                                            {{Form::number('OrdinalOffensenumber', '', ['class' => 'form-control', 'placeholder' => 'nth number', 'aria-describedby' => 'Ordinal Offense number'])}}


                                        </div>
                                        <div class="mb-3">
                                            {{Form::label('details','Details',['class' => 'form-label'])}}
                                            {{Form::text('details', '', ['class' => 'form-control', 'placeholder' => 'Details', 'aria-describedby' => 'Details'])}}


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
                                <h3 class="card-title">Sanction List</h3>

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
                                @if(count($violation->violationSanctions)>0)
                                <div class="col-12 table-responsive" style="height: 70vh;">

                                    <table class="table table-md table-hover table-head-fixed">
                                        <thead>
                                            <tr>

                                                {{-- <th>#</th> --}}
                                                <th>Ordinal number</th>
                                                <th class="w-50">Details</th>
                                                <th>last updated</th>
                                                <th class="w-auto">Actions</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($violation->violationSanctions as $sanction)
                                            <tr>
                                                {{-- <td>{{$loop->iteration}}</td> --}}
                                                <td>
                                                    @if($sanction->offense==1)
                                                    <span class="tag tag-success text-danger bg-white border border-warning rounded p-2" style="color:#ffc107!important;">
                                                        {{$sanction->offense}}st offense
                                                    </span>
                                                    @elseif($sanction->offense==2)
                                                    <span class="tag tag-success text-danger bg-white border rounded p-2" style="color:#ff7504!important;border-color:#ff7504!important">
                                                        {{$sanction->offense}}nd offense
                                                    </span>
                                                    @elseif($sanction->offense==3)
                                                    <span class="tag tag-success text-danger bg-white border rounded p-2" style="color:#ff0404!important;border-color:#ff0404!important">
                                                        {{$sanction->offense}}rd offense
                                                    </span>
                                                    @elseif($sanction->offense>3&&$sanction->offense<21)
                                                    <span class="tag tag-success bg-danger  border rounded p-2" style="color:#fff!important;border-color:#fffb04!important;">
                                                        {{$sanction->offense}}th offense
                                                    </span>
                                                    @endif</td>
                                                <td>{{$sanction->details}}</td>
                                                <td>{{$sanction->updated_at}}</td>
                                                <td class="row">

                                                    <button type="button" class="btn btn-sm ml-1 mb-1 btn-default"
                                                        data-toggle="modal"
                                                        data-target="#sanction_edit{{$sanction->id}}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="sanction_edit{{$sanction->id}}"
                                                        tabindex="-1" aria-labelledby="sanction_edit{{$sanction->id}}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="validation_add">Edit
                                                                        Offense</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                {!! Form::open(['route' =>
                                                                ['violationSanction.update',$sanction->id],'method'=>
                                                                'POST']) !!}
                                                                {{Form::hidden('violation_id', $violation->id, ['class' => 'form-control'])}}

                                                                <div class="modal-body">

                                                                    <div class="mb-3">
                                                                        {{Form::label('editOrdinalOffensenumber','Ordinal Offense number')}}
                                                                        {{Form::text('editOrdinalOffensenumber', $sanction->offense, ['class' => 'form-control', 'placeholder' => 'nth number', 'aria-describedby' => 'Ordinal Offense number'])}}


                                                                    </div>
                                                                    <div class="mb-3">
                                                                        {{Form::label('editdetails','Details',['class' => 'form-label'])}}
                                                                        {{Form::text('editdetails', $sanction->details, ['class' => 'form-control', 'placeholder' => 'Details', 'aria-describedby' => 'Details'])}}


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

                                                    {!!Form::open(['route'=>['violationSanction.destroy',$sanction->id],'method'
                                                    => 'POST']) !!}
        
                                                    {{Form::button('<i class="fa fa-ban"></i>', ['type' => 'submit','class'=>'btn btn-sm btn-default ml-1 mb-1'])}}
                                                    {{Form::hidden('_method','DELETE')}}

                                                    {!! Form::close() !!}




                                                </td>
                                            </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>


                                @else
                                <p> Sanction list empty</p>
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
