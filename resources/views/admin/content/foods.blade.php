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
        <a class="text-success click-add" data-toggle="modal" href="#myModal">
              <i class="fa fa-plus mr-3 "></i> Thêm món ăn
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
          <select class="styled" >
              <option>Mặc định</option>
              <option>Giá</option>
              <option>ID</option>
          </select>
        </div>
        <div class="pro-sort">
          <label class="pro-lab">Hiển thị</label>
          <select class="styled" >
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
      @foreach($list_food as $value)
      <!-- 1 món ăn -->
      <div class="col-md-3">
        <section class="card _1_food">
          <div class="pro-img-box">
              <img src=".././image/foodys/{{$value->image}}" alt=""/>
          </div>
          <div class="img-icon">
            <span><img src="{{asset('img/img_icon/icon_freeship.png')}}" alt=""></span>
            <span><img src="{{asset('img/img_icon/icon_hot.png')}}" alt=""></span>
          </div>
          <div class="card-body text-center m-0 p-0">
              <h4 class="p-0 m-0"><a href="#" class="pro-title mt-1">{{$value->name}}</a></h4>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div class="price flex-fill pl-2">{{$value->price}}</div>
            <div class="btn-handling flex-fill">
              <div id="{{$value->id}}" class="edit_food"><i class="fa fa-edit"></i></div>
              <div id="{{$value->id}}" class="delele_food"><i class="fa fa-trash-o"></i></div>
            </div>
          </div>
        </section>
      </div>
      <!-- end 1 món ăn -->
      @endforeach
    </div>
    
  </div>
</div>
<!-- page end-->

<!-- Modal -->
<div class="modal fade modal-edit" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <section class="card">
              <header class="card-header">
                  Thêm món ăn
              </header>
              <div class="card-body">
                  <div class="stepy-tab">
                      <ul id="default-titles" class="stepy-titles clearfix">
                          <li id="default-title-0" class="current-step"></li>
                          <li id="default-title-1" class=""></li>
                          <li id="default-title-2" class=""></li>
                      </ul>
                  </div>
                  <form method="POST" class="form-horizontal form-add-food" id="default" autocomplete="off">
                      <fieldset title="Thông tin món ăn" class="step" id="default-step-0">
                          <legend></legend>
                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tên món ăn</label>
                                    <input type="text" class="form-control" name="name_food" aria-describedby="emailHelp" placeholder="Tên món ăn">
                                    <small id="emailHelp" class="error error_name form-text text-danger">Tên món ăn không được để trống</small>
                                </div>
                                <div class="form-group">
                                  <label class="pro-lab">Menu</label>
                                  <select class="form-control" name="menu_food">
                                      @foreach($menu_shop as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                      @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Giá - VNĐ 999,999</label>
                                    <input type="text" placeholder="" value="10,000" name="price_food" data-mask="999,999" class="form-control">
                                    <small id="emailHelp" class="error form-text text-danger">Giá món ăn không được để trống</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Ảnh đại diện món ăn</label>
                                    <input type="file" class="form-control" name="" id="file" aria-describedby="emailHelp">
                                    <input type="hidden" class="form-control" id="img_food" name="img_food" value="">
                                    <small id="emailHelp" class="error form-text text-danger">Ảnh đại diện không được để trống</small>
                                    <div class="_image_food _image_food_1 d-flex">
                                      
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Ảnh chi tiết món ăn</label>
                                    <input type="file" class="form-control" name="imgs_food" id="files" aria-describedby="emailHelp" multiple>
                                    <input type="hidden" class="form-control" id="imgs_food" name="imgs_food" value="">
                                    <div class="_image_food _image_food_2 d-flex">
                                      
                                    </div>
                                </div>
                                <div class="form-group form-check">
                                  <input type="checkbox" class="form-check-input" name="status_food" checked id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Ẩn/Hiện</label>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Thêm danh mục để món ăn được tìm thấy dễ dàng</label>
                                    <div class="checkboxes d-flex flex-wrap">
                                      <?php $i = 1; ?>
                                      @foreach($tab_childs as $value)
                                        <?php 
                                          $i == 1 ? $check = 'checked' : $check = ''; 
                                          $i++;
                                        ?>
                                        <label class="label_check c_on mr-3" for="">
                                        <input name="tabs_food[]" id="" value="{{$value->id}}" type="checkbox" <?php echo $check; ?>>{{$value->name}}</label>
                                      @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Món ăn có vào:</label>
                                    <?php $i = 1; ?>
                                    @foreach($active_shop as $value)
                                    <?php 
                                      if($value->session == 1){ $session = 'Buổi sáng';}
                                      elseif($value->session == 2){ $session = 'Buổi trưa';}
                                      elseif($value->session == 3){ $session = 'Buổi chiều';}
                                      elseif($value->session == 4){ $session = 'Buổi tối';}
                                      if($i == 1){ $check = 'checked';}else{ $check = '';}
                                      $i++;
                                    ?>
                                    <label class="label_check c_off mr-3 d-flex align-items-center w-100" for="">
                                        <span class="w-25"><input name="session_food[]" id="" <?php echo $check; ?> value="{{$value->id}}" type="checkbox">{{$session}}</span>
                                        <span class="flex-grows-1 d-flex justify-content-start">
                                        <span class=""><input type="time" class="rounded time_foods" min="{{$value->time_open}}" max="{{$value->time_close}}" name="start_time[]" onblur=""  value="{{$value->time_open}}"> &nbsp - &nbsp &nbsp</span>
                                        <span class=""><input type="time" class="rounded time_foods" min="{{$value->time_open}}" max="{{$value->time_close}}" name="end_time[]" onblur=""  value="{{$value->time_close}}"></span>
                                        </span>
                                      </label> 
                                     @endforeach
                                </div>
                              </div>
                            </div>
                      </fieldset>
                      <fieldset title="Thành phần món ăn" class="step" id="default-step-1" >
                        <legend></legend>
                        <div class="row px-3 mb-4 pb-5">
                          <div class="dropdown">
                            <div onclick="myFunction()"  class="filter-tp-food"><i class="fa fa-filter"></i> Click để chọn thực phẩm và tính năng lượng, các chất</div>
                            <div class="d-flex flex-wrap list-tp-food"></div>
                            <div id="myDropdown" class="dropdown-content">
                              <div class="input-search-icon d-flex align-items-center justify-content-center w-100">
                                <div class="flex-grows-1"><input type="text" placeholder="Tìm kiếm" id="myInput" autocomplete="off" onkeyup="filterFunction()"></div>
                                <div class="w-25 text-center"><i class="fa fa-search "></i></div>
                              </div>
                              <ul class="list_search">
                                @foreach($quantitative as $value)
                                  <li id="{{$value->id}}">{{$value->name}}</li>
                                 @endforeach
                              </ul>
                            </div>
                             <div class="list-input-g-tp d-flex flex-column">
                                
                              </div>
                          </div>
                        </div>
                      </fieldset>
                      <fieldset title="Chi tiết món ăn" class="step" id="default-step-2" >
                          <legend></legend>
                          <div class="row px-3 mb-4">
                            <textarea name="detail_food" class="summernote"></textarea>
                          </div>
                      </fieldset>
                      <input type="hidden" name="id_food" value="">
                      <input type="submit" class="finish btn btn-danger" value="Thêm"/>
                  </form>
              </div>
          </section>
        </div>
    </div>
</div>
<!-- modal -->
@endsection


