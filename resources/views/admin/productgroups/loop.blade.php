{{-- @extends('admin.layoutadmin')
@section('pagetitle', 'Product Groups')
@section('main')
@include('sweetalert::alert')


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
            <li class="breadcrumb-item"><a href="{{asset('dashboard')}}">Home</a></li>
            <li class="breadcrumb-item active">Product Group</li>
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Product Groups</h3>
               <a href="{{route('product-groups.create')}}">
                   <span class="float-right btn-sm btn-success"><i class="fas fa-plus-circle"></i> Add</span>
               </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Group Name</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($pg as $row)
                  <tr>
                    <td>{{$row->group_id}}</td>
                    <td>{{$row->group_name}}</td>
                    <td><div class='media'><img width='50px' class='img-thumbnail' src='{{asset('/images/product_groups')}}/{{$row->group_img}}'></div>
                    </td>
                    <td>
                      <form class="form-check-inline"  method="GET">
                          {{ method_field('UPDATE') }}
                          @csrf

                        <button style="border: 0"style="border: 0"  > <a href="{{route('product-groups.edit', $row->group_id)}}"  title="Sửa" class="btn-sm btn-icon btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Edit</a></button>
                      </form>
                      <form class="form-check-inline" action="{{route('product-groups.destroy', $row->group_id)}}" method="POST">
                            @csrf
                          @method('delete')
                          <button  class="btn-sm btn-icon btn-danger" style="border: 0" onclick="xoaha(event)" ><i class="fa fa-trash" aria-hidden="true"></i> Del</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Group Name</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
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


@endsection --}}