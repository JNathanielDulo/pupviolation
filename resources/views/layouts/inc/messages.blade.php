@if(count($errors)>0)
    @foreach ($errors->all() as $error)
      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> {{$error}}</h5>
        
      </div>
    @endforeach
@endif

@if(session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i> {{session('success')}}</h5>
    
  </div>
@endif

{{-- @if(session('error'))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
    {{$errors}}
  </div>
@endif --}}
{{-- @if(session('message'))
<div class="alert alert-default alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-exclamation-triangle"></i> Message</h5>
    {{$message}}
  </div>
@endif --}}