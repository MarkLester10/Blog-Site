@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show  w-75 mt-2 mx-auto" role="alert">
  <strong>{{$message}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if ($message = Session::get('message'))
<div class="alert alert-danger alert-dismissible fade show  w-75 mt-2 mx-auto" role="alert">
  <strong>{{$message}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
