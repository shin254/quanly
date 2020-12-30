{{-- @extends('admin.layoutadmin')
@section('pagetitle', "ADD PRODUCT GROUP")
@section('main')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>PRODUCT GROUPS</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active"><a href="{{route('product-groups.index')}}">Product Groups</a></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add product group</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="form_validation" method="POST" action="{{route('product-groups.store')}}" enctype="multipart/form-data" >
              {{csrf_field()}}
              <div class="card-body">
                <div class="form-group row">
                      <div class="col-md-12">
                          <div class="form-group col-md-12">
                            <label for="">Group Name</label>
                            <input type="text" name="group_name" class="form-control" id="" placeholder="Group Name">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="">Group Image</label>
                            <input type="file" name="group_img" class="form-control" value="">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="">Display</label>
                            <select class="form-control" name="display" id="">
                              <option value="0">Hidden</option>
                              <option value="1">Show</option>
                            </select>
                          </div>
                      </div> 
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection

 --}}
