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
          <tr>
            <td><a href="#">1</a></td>
            <td class="hidden-phone">Đồ ăn</td>
            <td class="pl-4"><span class="badge badge-danger badge-xl label-mini">Tắt</span></td>
            <td>
            <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          <tr>
            <td><a href="#">2</a></td>
            <td class="hidden-phone">Đặt bàn</td>
            <td class="pl-4"><span class="badge badge-danger badge-xl label-mini">Tắt</span></td>
            <td>
            <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          <tr>
            <td><a href="#">3</a></td>
            <td class="hidden-phone">Thực phẩm</td>
            <td class="pl-4"><span class="badge badge-danger badge-xl label-mini">Tắt</span></td>
            <td>
            <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
          <tr>
            <td><a href="#">4</a></td>
            <td class="hidden-phone">Rượu bia</td>
            <td class="pl-4"><span class="badge badge-danger badge-xl label-mini">Tắt</span></td>
            <td>
            <button class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>
            <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>
            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>
            </td>
          </tr>
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
                <h5 class="modal-title" id="myModal">Thêm sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <form>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Tên danh mục</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tên danh mục">
                      <small id="emailHelp" class="form-text text-danger">Danh mục không được để trống</small>
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
