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
          <form method="POST" class="form-horizontal form-add-food" id="default">
              <fieldset title="Thông tin món ăn" class="step" id="default-step-0">
                  <legend></legend>
                  <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <div class="btn btn-check btn-info">check</div>
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
                            	@foreach($tab_childs as $value)
                            	<label class="label_check c_on mr-3" for="">
	                          		<input name="tabs_food[]" id="" value="{{$value->id}}" type="checkbox" checked="">{{$value->name}}</label>
								@endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Món ăn có vào:</label>
                            <div class="checkboxes d-flex flex-column">
                            	@foreach($active_shop as $value)
                            		<?php 
                            			if($value->session == 1){ $session = 'Buổi sáng';}
                            			elseif($value->session == 2){ $session = 'Buổi trưa';}
                            			elseif($value->session == 3){ $session = 'Buổi chiều';}
                            			elseif($value->session == 4){ $session = 'Buổi tối';}
                            		?>
	                          		<label class="label_check c_off mr-3 d-flex align-items-center w-100" for="">
	                                  <span class="w-25"><input name="session_food[]" id="" checked value="1" type="checkbox">{{$session}}</span>
	                                  <span class="flex-grows-1 d-flex justify-content-start">
	                                  <span class=""><input type="time" class="rounded" min="{{$value->time_open}}" max="{{$value->time_close}}" name="start_time[]" onblur=""  value="{{$value->time_open}}"> &nbsp - &nbsp &nbsp</span>
	                                  <span class=""><input type="time" class="rounded" min="{{$value->time_open}}" max="{{$value->time_close}}" name="end_time" onblur=""  value="{{$value->time_close}}"></span>
	                                  </span>
	                                </label> 
								@endforeach
                            </div>
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
	                		<li id="$value->id">{{$value->name}}</li>
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
                    <textarea name="detail_food" class="summernote">Hello Summernote</textarea>
                  </div>
              </fieldset>
              <input type="submit" class="finish btn btn-danger" value="Thêm"/>
          </form>
      </div>
  </section>