@extends('admin.index')

@section('title')
  <?php echo 'Danh mục'; ?>
@endsection


@section('content')
<!-- page start-->
<div class="row">
  <div class="col-md-3">
    <section class="card">
      <div class="card-body">
        <input type="text" placeholder="Keyword Search" class="form-control">
      </div>
    </section>
    <section class="card">
      <header class="card-header">
        <a class="text-success" data-toggle="modal" href="#myModal">
              <i class="fa fa-plus mr-3 "></i> Thêm sản phẩm
        </a>
      </header>
    </section>
    <section class="card">
      <header class="card-header">
        Danh mục
      </header>
      <div class="card-body">
        <ul class="nav flex-column prod-cat">
          <li class="nav-item"><a href="#" class="nav-link"><i class=" fa fa-angle-right"></i> Tất cả</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class=" fa fa-angle-right"></i> Nước mía</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class=" fa fa-angle-right"></i> Ăn vặt</a></li>
          <li class="nav-item"><a href="#" class="nav-link"><i class=" fa fa-angle-right"></i> Tráng miệng</a></li>
        </ul>
      </div>
    </section>
    <section class="card">
      <header class="card-header">
        Giá
      </header>
      <div class="card-body sliders">
        <div id="slider-range" class="slider"></div>
        <div class="slider-info">
            <span id="slider-range-amount"></span>
        </div>
      </div>
    </section>
    <section class="card">
      <header class="card-header">
          Tìm kiếm theo
      </header>
      <div class="card-body">
        <form role="form product-form">
          <div class="form-group">
            <label>Nhãn</label>
            <select class="form-control">
                <option>Wallmart</option>
                <option>Catseye</option>
                <option>Moonsoon</option>
                <option>Textmart</option>
            </select>
          </div>
          <div class="form-group">
            <label>Màu sắc</label>
            <select class="form-control">
              <option>White</option>
              <option>Black</option>
              <option>Red</option>
              <option>Green</option>
            </select>
          </div>
          <div class="form-group">
            <label>Kiểu</label>
            <select class="form-control">
              <option>Small</option>
              <option>Medium</option>
              <option>Large</option>
              <option>Extra Large</option>
            </select>
          </div>
          <button class="btn btn-primary" type="submit">Filter</button>
        </form>
      </div>
    </section> 
  </div>
  <div class="col-md-9">
    <section class="card">
      <div class="card-body">
        <div class="pro-sort">
          <label class="pro-lab">Sắp xếp</label>
          <select class="" >
              <option>Mặc định</option>
              <option>Giá</option>
              <option>ID</option>
          </select>
        </div>
        <div class="pro-sort">
          <label class="pro-lab">Hiển thị</label>
          <select class="" >
              <option>10 sản phẩm</option>
              <option>20 sản phẩm</option>
              <option>30 sản phẩm</option>
              <option>40 sản phẩm</option>
              <option>50 sản phẩm</option>
          </select>
        </div>
        <div class="float-right">
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-sm mb-0">
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </section>

    <div class="row product-list _foods">
      <!-- 1 món ăn -->
      <div class="col-md-3">
        <section class="card _1_food">
          <div class="pro-img-box">
              <img src="{{asset('img/product-list/pro-1.jpg')}}" alt=""/>
          </div>
          <div class="img-icon">
            <span><img src="{{asset('img/img_icon/icon_freeship.png')}}" alt=""></span>
            <span><img src="{{asset('img/img_icon/icon_hot.png')}}" alt=""></span>
          </div>
          <div class="card-body text-center m-0 p-0">
              <h4 class="p-0 m-0"><a href="#" class="pro-title mt-1">Leopard Shirt Dress</a></h4>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div class="price flex-fill pl-2">300.000</div>
            <div class="btn-handling flex-fill">
              <div class=""><i class="fa fa-edit"></i></div>
               <div class=" "><i class="fa fa-trash-o"></i></div>
            </div>
          </div>
        </section>
      </div>
      <!-- end 1 món ăn -->
    </div>
  </div>
</div>
<!-- page end-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModal2">Thêm món ăn</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="">Tên món ăn</label>
                          <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Tên danh mục">
                          <small id="emailHelp" class="form-text text-danger">Tên món ăn không được để trống</small>
                      </div>
                      <div class="form-group">
                          <label for="">Ảnh đại diện món ăn</label>
                          <input type="file" class="form-control" id="" aria-describedby="emailHelp" placeholder="Tên danh mục">
                          <small id="emailHelp" class="form-text text-danger">Ảnh đại diện không được để trống</small>
                      </div>
                      <div class="form-group">
                          <label for="">Ảnh chi tiết món ăn</label>
                          <input type="file" class="form-control" id="" aria-describedby="emailHelp" placeholder="Tên danh mục">
                      </div>
                      <div class="form-group">
                        <label class="pro-lab">Thuộc quán ăn</label>
                        <select class="form-control form-control-sm mb-2">
                            <option>1</option>
                            <option>2</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="pro-lab">Thuộc danh mục</label>
                        <select class="form-control form-control-sm mb-2">
                            <option>Nước uống</option>
                            <option>Thức ăn</option>
                        </select>
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" checked id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ẩn/Hiện</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="">Giá</label>
                          <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Giá món ăn">
                          <small id="emailHelp" class="form-text text-danger">Giá món ăn không được để trống</small>
                      </div>
                      <div class="form-group">
                          <label for="">Giá</label>
                          <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="0.000">
                      </div>
                      <div class="form-group">
                          <label for="">Thêm danh mục để món ăn được tìm kiếm dễ dàng</label>
                          <div class="checkboxes d-flex flex-wrap">
                              <label class="label_check c_on mr-3" for="">
                                <input name="" id="" value="1" type="checkbox" checked="">món lẩu</label>
                              <label class="label_check c_off mr-3" for="">
                                <input name="" id="" value="1" type="checkbox">món nướng</label>
                              <label class="label_check c_off mr-3" for="">
                                <input name="" id="" value="1" type="checkbox">món chay</label>
                              <label class="label_check c_off mr-3" for="">
                                <input name="" id="" value="1" type="checkbox">cơm</label>
                              <label class="label_check c_off mr-3" for="">
                                <input name="" id="" value="1" type="checkbox">nước uống</label>
                          </div>
                       
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
@endsection
