@extends('admin.layoutadmin')
@section('pagetitle', 'QUẢN LÍ ADMIN ')
@section('main')
{{-- @include('sweetalert::alert') --}}

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thống kê</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thống kê</li>
            </ol>
          </div>
        </div>
      </div>    
      <!-- /.container-fluid -->
    </section>
    <!--</section>-->
    <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>
  
                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
  
                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>
  
                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>
  
                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <ul class="nav">
                    <li class="active m-2"><a data-toggle="tab" href="#home">Thống kê</a></li>
                    <li class="m-2"><a data-toggle="tab" href="#menu1">Chi tiêu</a></li>
                    <li class="m-2"><a data-toggle="tab" href="#menu2">Nhận tiền</a></li>
                    <li class="m-2"><a data-toggle="tab" href="#menu3">Vay nợ</a></li>
                  </ul>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                
              
                <div class="tab-content p-4">
                  <div id="home" class="tab-pane fade in active">
                    <h3>Thống kê</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <div id="menu1" class="tab-pane fade">
                        <!-- general form elements -->
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Thêm vào lịch sử chi tiêu</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form id="form_validation" method="POST" action="" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="card-body">
                              <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-group col-md-12">
                                          <label for="">Tên</label>
                                          <input type="text" name="ten" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="">Số tiền</label>
                                          <input type="text" name="price" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="">Ghi chú</label>
                                          <input type="text" name="ghi_chu" class="form-control" id="" placeholder="">
                                        </div>
                                        
                                        <input type="hidden" name="nhan_tien" class="form-control" id="" placeholder="">
                                        <input type="hidden" name="chi_tieu" class="form-control" id="" placeholder="">
                                        <input type="hidden" name="cho_muon_tien" class="form-control" id="" placeholder="">
                                    </div> 
                              </div>
                            </div>
                            <!-- /.card-body -->
          
                            <div class="card-footer">
                              <input type="button" name="chi_tieu" class="btn btn-info" value="Chi Tiêu">
                            </div>
                          </form>
                        </div>
                        <!-- /.card -->
                        <!-- DATA TABLESSSS -->
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Lịch sử chi tiêu</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Số tiền</th>
                                <th>Ghi chú</th>
                                <th>Thao tác</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>1</td>
                                <td>Mua nước ngọt</td>
                                <td>90.000 đ</td>
                                <td> Cola: 45000 đ, 7UP: 45000 đ</td>
                                <td>
                                  <button class="btn-sm btn-info">Edit</button>
                                  <button class="btn-sm btn-danger">Del</button>
                                </td>
                              </tr>
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Số tiền</th>
                                <th>Ghi chú</th>
                                <th>Thao tác</th>
                              </tr>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- DATA TABLESSSS -->
                  </div>
                  <div id="menu2" class="tab-pane fade">
                        <!-- general form elements -->
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Thêm vào lịch sử nhận tiền</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form id="form_validation" method="POST" action="" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="card-body">
                              <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-group col-md-12">
                                          <label for="">Tên</label>
                                          <input type="text" name="ten" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="">Số tiền</label>
                                          <input type="text" name="price" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="">Ghi chú</label>
                                          <input type="text" name="ghi_chu" class="form-control" id="" placeholder="">
                                        </div>
                                        
                                        <input type="hidden" name="nhan_tien" class="form-control" id="" placeholder="">
                                        <input type="hidden" name="chi_tieu" class="form-control" id="" placeholder="">
                                        <input type="hidden" name="cho_muon_tien" class="form-control" id="" placeholder="">
                                        
                                    </div> 
                              </div>
                            </div>
                            <!-- /.card-body -->
          
                            <div class="card-footer">
                              <input type="button" name="nhan_tien" class="btn btn-success" value="Nhận Tiền">
                            </div>
                          </form>
                        </div>
                        <!-- /.card -->
                        <!-- DATA TABLESSSS -->
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Lịch sử nhận tiền</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Số tiền</th>
                                <th>Ghi chú</th>
                                <th>Thao tác</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>1</td>
                                <td>Lương tháng</td>
                                <td>1.000.000 đ</td>
                                <td> </td>
                                <td>
                                  <button class="btn-sm btn-info">Edit</button>
                                  <button class="btn-sm btn-danger">Del</button>
                                </td>
                              </tr>
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Số tiền</th>
                                <th>Ghi chú</th>
                                <th>Thao tác</th>
                              </tr>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- DATA TABLESSSS -->
                  </div>
                  <div id="menu3" class="tab-pane fade">
                        <!-- general form elements -->
                        <div class="card card-primary">
                          <div class="card-header">
                            <h3 class="card-title">Thêm vào lịch sử cho mượn tiền</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form id="form_validation" method="POST" action="" enctype="multipart/form-data" >
                            {{csrf_field()}}
                            <div class="card-body">
                              <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="form-group col-md-12">
                                          <label for="">Tên</label>
                                          <input type="text" name="ten" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="">Số tiền</label>
                                          <input type="text" name="price" class="form-control" id="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12">
                                          <label for="">Ghi chú</label>
                                          <input type="text" name="ghi_chu" class="form-control" id="" placeholder="">
                                        </div>
                                        
                                        <input type="hidden" name="nhan_tien" class="form-control" id="" placeholder="">
                                        <input type="hidden" name="chi_tieu" class="form-control" id="" placeholder="">
                                        <input type="hidden" name="cho_muon_tien" class="form-control" id="" placeholder="">

                                    </div> 
                              </div>
                            </div>
                            <!-- /.card-body -->
          
                            <div class="card-footer">
                              <input type="button" name="cho_muon" class="btn btn-danger" value="Cho Mượn">
                            </div>
                          </form>
                        </div>
                        <!-- /.card -->
                        <!-- DATA TABLESSSS -->
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Lịch sử cho mượn tiền</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Số tiền</th>
                                <th>Ghi chú</th>
                                <th>Thao tác</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>1</td>
                                <td>Nhơn mượn</td>
                                <td>200.000 đ</td>
                                <td> 1 đống </td>
                                <td>
                                  <button class="btn-sm btn-info">Edit</button>
                                  <button class="btn-sm btn-danger">Del</button>
                                </td>
                              </tr>
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Số tiền</th>
                                <th>Ghi chú</th>
                                <th>Thao tác</th>
                              </tr>
                              </tfoot>
                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                        <!-- DATA TABLESSSS -->
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
  </div>
  <!-- /.content-wrapper -->
@endsection