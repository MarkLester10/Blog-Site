@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Role</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tag</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10 mx-auto">

          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Add roles now to modify user's access level</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{route('role.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="row">
                <div class="col-lg-6 mx-auto">
                  <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" name="role" class="form-control @if($errors->has('role')) is-invalid @endif" id="role" placeholder="Enter Role" value="{{old('role')}}">
                    @error('role')
                      <div class="invalid-feedback">
                        {{$message}}
                      </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="roleTug">Role Tug</label>
                    <input type="text" class="form-control @if($errors->has('role')) is-invalid @endif" id="roleTug" name="roleTug" placeholder="Role Tug"  value="{{old('roleTug')}}">
                    @error('roleTug')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('role.index')}}" class="btn btn-default">Cancel</a>
                  </div>
                </div>
              </div>
            </div>
              <!-- /.card-body -->

            </form>
          </div>
          <!-- /.card -->



        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footerSection')

<script>
   $('#name').change(function(e) {
    $.get('{{ route('posts.check_slug') }}',
      { 'title': $(this).val() },
      function( data ) {
        $('#slug').val(data.slug);
      }
    );
  });
</script>
@endsection
