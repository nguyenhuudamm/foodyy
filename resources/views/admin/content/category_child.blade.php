@extends('admin.index')

@section('title')
  <?php echo 'Danh mục con'; ?>
@endsection

@section('content')
<!-- page start-->
<div class="row">
<div class="col-sm-12">
    <section class="card">
        <header class="card-header">
            <div class="_name_table float-left pt-2"> Danh mục</div>
            <div class="button-modal float-right">
              <a class="text-success" data-toggle="modal" href="#myModal">
                  <i class="fa fa-plus"></i>
              </a>
            </div>
            <div class="alert-edit alert alert-success w-100 d-inline-block p-2 pl-4 my-3" role="alert">
              Thêm dữ liệu thành công !
            </div>

        </header>
        <div class="card-body">
            <div class="adv-table">
               <div class="btn-group">
                    <div class="dropdown">
                      <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Chọn danh mục cha
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -116px, 0px);">
                          <a class="dropdown-item" href="#">Tất cả</a>
                          <a class="dropdown-item" href="#">Đồ ăn</a>
                          <a class="dropdown-item" href="#">Thực phẩm</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                </div>
               
                <div class="d-inline-block "><i class="fa fa-check-circle text-primary ml-3 mr-1"></i><span class="name-category">Tất cả</span></div>
                   
            <table  class="table-category-sys display table  " id="dynamic-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên Danh Mục</th>
                    <th>Trạng Thái</th>
                    <th class="hidden-phone">Hành động</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td><a href="#">{{$category->id}}</a></td>
                        <td class="hidden-phone">{{$category->ten_danhmuc}}</td>
                        @if ($category->trang_thai)
                        <td class="pl-4"><button type="button" class="btn btn-success btn-sm">Bật</button></td>
                        @else
                        <td class="pl-4"><button type="button" class="btn btn-danger btn-sm">Tắt</button></td>
                        @endif
                        <td>
                            <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
                            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <th>ID</th>
                    <th>Tên Danh Mục</th>
                    <th>Trạng Thái</th>
                    <th class="hidden-phone">Hành động</th>
                </tfoot>
                </table>
            </div>
        </div>
    </section>
    </div>
</div>
 <!-- Modal -->
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModal">Thêm danh mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Tên danh mục</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục">
                      <small id="emailHelp" class="form-text text-danger">Tên danh mục không được để trống</small>
                  </div>
                   <div class="form-group">
                      <label for="exampleInputEmail1">Danh mục cha</label>
                      <select class="custom-select custom-select-sm mb-3">
                          <option selected="">Zero</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                      </select>
                  </div>
                  
                  <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" checked id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Ẩn/Hiện</label>
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
@endsection
