@extends('admin.index')

@section('title')
  <?php echo 'Danh mục'; ?>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
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
      <table class="table-category-sys table  table-advance table-hover">
        <thead>
          <tr>
            <th><i class="fa fa-bullhorn"></i> ID</th>
            <th class="hidden-phone"><i class="fa fa-question-circle"></i> Tên Danh Mục</th>
            <th><i class=" fa fa-edit"></i> Trạng thái</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          @foreach($tabs as $value)
          <tr>
            <td><a href="#">{{$value->id}}</a></td>
            <td class="hidden-phone">{{$value->name}}</td>
            @if($value->status == 1)
            <td class="pl-4"><button id="{{$value->id}}" type="button" class="btn btn-danger btn-sm click_change">Tắt</button></td>
            @else
            <td class="pl-4"><button id="{{$value->id}}" type="button" class="btn btn-success btn-sm click_change">Bật</button></td>
            @endif
            <td>
              <button id="{{$value->id}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
              <button id="{{$value->id}}" class="btn btn-primary btn-sm editTab"><i class="fa fa-pencil"></i></button>
              <button id="{{$value->id}}" class="btn btn-danger btn-sm deleteTab"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
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
              <form method="POST" id="form_tabs">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Tên danh mục</label>
                      <input type="hidden" class="form-control" value="" id="idTab" name="idTab">
                      <input type="text" class="form-control" id="nameTab" name="nameTab" aria-describedby="emailHelp" placeholder="Tên danh mục">
                      <small id="emailHelp" class="form-text text-danger">Tên danh mục không được để trống</small>
                  </div>
                  
                  <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" name="statusTab" checked value="1" id="statusTab">
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
