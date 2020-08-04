
<script>
	$(document).ready(function(){
		$.ajaxSetup({
		  headers: {
		    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		  }
		});
	
		// $.ajax({
		// 	url:'{{route("foods.test")}}',
		// 	data:{},
		// 	method:'POST',
		// 	dataType:'',
		// 	success:function(data){
		// 		alert(data);
		// 	}
		// })


		// upload file image
	 	$(document).on('change', '#file', function(event) {
			event.preventDefault();
			var n = 100;
			var form_data = new FormData();
			
			for (var i = 0; i < 10 ; i++) {
				var property = document.getElementById('file').files[i];
				if(property == undefined)
					break;
				form_data.append("files[]",property);
			};
			
			$.ajax({
				url:'{{route("foods.uploadFile")}}',
				data:form_data,
				method:'POST',
				dataType:'json',
				contentType:false,
				cache:false,
				processData:false,
				success:function(data){
					var html = '';
					var array_img = (data);
					for (var i = 0; i < array_img.length; i++) {
						html += '<div class="_1_img"><img class="rounded img-fluid w-100 h-100" src="../image/foodys/'+array_img[i]+'" alt=""></div>';
					};
					$('input#img_food').val(array_img);
					$('._image_food_1').html(html);
				}
			})			
		});

		// upload file image
	 	$(document).on('change', '#files', function(event) {
			event.preventDefault();
			var n = 100;
			var form_data = new FormData();
			
			for (var i = 0; i < 10 ; i++) {
				var property = document.getElementById('files').files[i];
				if(property == undefined)
					break;
				form_data.append("files[]",property);
			};
			
			$.ajax({
				url:'{{route("foods.uploadFile")}}',
				data:form_data,
				method:'POST',
				dataType:'json',
				contentType:false,
				cache:false,
				processData:false,
				success:function(data){
					var html = '';
					var array_img = (data);
					for (var i = 0; i < array_img.length; i++) {
						html += '<div class="_1_img"><img class="rounded img-fluid w-100 h-100" src="../image/foodys/'+array_img[i]+'" alt=""></div>';
					};
					$('input#imgs_food').val(array_img);
					$('._image_food_2').html(html);
				}
			})
						
		});
		;

		// click btn [Thêm]
		$(document).on('submit', '.form-add-food', function(event) {
			event.preventDefault();
			$(this).attr('disabled','disabled');
			var button = $('.finish');
			if(button.hasClass('update')){
				var modal = $('#myModal');
				var food_edit = $('.active-edit').parents('._1_food'),
					name_food_new = modal.find('input[name="name_food"]').val(),
					price_food_new = modal.find('input[name="price_food"]').val(),
					thumb_food_new = modal.find('input[name="img_food"]').val();

				$.ajax({
	                url: "{{route('foods.updateFood')}}",
	                method: 'POST',
	                dataType:'',
	                data: $(this).serialize(),
	                success:function(data){
	                    if(data == 1){
	                    	$('#myModal').modal('hide');
	                    	var notice = 'thanh_cong',
	                    		content = 'Cập nhật thành công.';
	                    	notice_action(notice, content);
	                    	// cập nhật
	                    	food_edit.find('.pro-title').html(name_food_new);
	                    	food_edit.find('.price').html(price_food_new);
	                    	food_edit.find('.pro-img-box img').attr('src', '.././image/foodys/'+thumb_food_new);

	                    }else{
	                    	var notice = 'error',
	                    		content = 'Cập nhật thất bại.';
	                    	notice_action(notice, content);
	                    }
	                }
	            }); 
			}else if(button.hasClass('add')){
				$.ajax({
	                url: "{{route('foods.addFood')}}",
	                method: 'POST',
	                dataType:'json',
	                data: $(this).serialize(),
	                success:function(data){
	                    if(data.success){
	                    	$('#myModal').modal('hide');
	                    	var notice = 'thanh_cong',
	                    		content = 'Thêm thành công.';
	                    	notice_action(notice, content);
	                    	$('.product-list').append(_one_food(data.food));
	                    }else{
	                    	var notice = 'error',
	                    		content = 'Thêm thất bại.';
	                    	notice_action(notice, content);
	                    }
	                }
	            }); 
			}
		});


		// click thêm
		$(document).on('click', '.click-add', function(event) {
			event.preventDefault();
			modal = $('#myModal');
			modal.find('form')[0].reset();
			modal.find('.card-header:first-child').html('Thêm món ăn');
			modal.find('.error').css('display','none');
			modal.find('._image_food').html('');
			modal.find('.finish.btn.btn-danger').val('Thêm');
			modal.find('.finish.btn.btn-danger').addClass('add');
			modal.find('.finish.btn.btn-danger').removeClass('update');
			modal.find('.list-input-g-tp').html('');
			modal.find('.list-tp-food').html('');
			
		});

		$(document).on('click', '#myDropdown ul.list_search li', function(event) {
			event.preventDefault();
			var name = $(this).html(),
				id = $(this).attr('id'),
				html = '';
			html += '<span id="'+id+'" class="one-tp-food">'+name+' <i class="fa fa-minus-square"></i></span>';
			$('.dropdown .list-tp-food').append(html);
			$(this).remove();
			// bảng thêm [g] khối lượng thành phần
			html = '';
			html += '<div id="'+id+'" class="_one-input-g-tp d-flex align-items-center">';
            html += '   <span class="name-tp text-muted">'+name+'</span>';
            html += '   <input type="hidden" name="tp_food[]" value="'+id+'">';
            html += '   <span class="input-tp"><input min="0" max="1000" type="text" name="gfood[]"></span>';
            html += '   <span class="don-vi">g</span>';
            html += '</div>';
            $('.dropdown .list-input-g-tp').append(html);
		});

		//xóa thành phần [ - ]
		$(document).on('click', '.one-tp-food i', function(event) {
			event.preventDefault();
			var id = $(this).parent().attr('id');
			var parents = $(this).parent();
			var html = '<li id="'+parents.attr('id')+'" style="">'+parents.html().replace('<i class="fa fa-minus-square"></i>','')+'</li>';
			$('#myDropdown ul.list_search').prepend(html);
			$(this).parent().remove();
			// bảng thêm [g] khối lượng thành phần
			$('.dropdown .list-input-g-tp').find('div#'+id).remove();
		});

		$(document).on('change', '._one-input-g-tp .input-tp input', function(event) {
			event.preventDefault();
			var val = $(this).val();
			if(parseInt(val) > 1000){
				$(this).val('1000');
			}else if(parseInt(val) < 0){
				$(this).val('0');
			}
		});

		// thay đổi thời gian trong thêm món ăn
		$(document).on('change', '.time_foods', function(event) {
			event.preventDefault();
			var time_edit = $(this).val(),
				hour_edit = time_edit.substr(0, time_edit.indexOf(':'));
			var min = $(this).attr('min'),
				max = $(this).attr('max'),
				hour_min = min.substr(0, min.indexOf(':'));
				hour_max = max.substr(0, max.indexOf(':'));
			if(hour_edit<hour_min){
				$(this).val(min);
			}else if(hour_edit>hour_max){
				$(this).val(max);
			}
		});

		// xóa món ăn
		$(document).on('click', '.delele_food', function(event) {
			event.preventDefault();
			var id = $(this).attr('id');
			console.log('delete'+id);
			var parents = $(this).parents('.col-md-3');
			if(confirm('Bạn có chắc muốn xóa??')){
				$.ajax({
	                url: "{{route('foods.deleteFood')}}",
	                method: 'POST',
	                dataType:'',
	                data: {id:id},
	                success:function(data){
	                    if(data == 1){
	                    	var notice = 'thanh_cong',
	                    		content = 'Xóa thành công.';
	                    	notice_action(notice, content);
	                    	parents.hide('slow');
	                    }else{
	                    	var notice = 'error',
	                    		content = 'Xóa thất bại.';
	                    	notice_action(notice, content);
	                    }
	                }
	            });
	        } 
		});

		// chỉnh sửa món ăn
		$(document).on('click', '.edit_food', function(event) {
			event.preventDefault();
			$('.edit_food').removeClass('active-edit');
			$(this).addClass('active-edit');
			var id = $(this).attr('id'),
				parents = $(this).parents('.col-md-3'),
				modal = $('#myModal');
				modal.find('form')[0].reset();
				modal.find('.card-header:first-child').html('Cập nhật món ăn');
				modal.find('.error').css('display','none');
				modal.find('._image_food').html('');
				modal.find('.finish.btn.btn-danger').val('Cập nhật');
				modal.find('.finish.btn.btn-danger').addClass('update');
				modal.find('.finish.btn.btn-danger').removeClass('add');
				modal.find('.list-input-g-tp').html('');
				modal.find('.list-tp-food').html('');
				// tab food
				input_tabs_food = modal.find('input[name="tabs_food[]"]');
				input_tabs_food.map(function(value2,index2){
					index2.classList.remove("done");
              	})
              	// time has food
				input_time_food = modal.find('input[name="session_food[]"]');
				input_start_time = modal.find('input[name="start_time[]"]');
				input_end_time = modal.find('input[name="end_time[]"]');
				$.ajax({
	                url: "{{route('foods.editFood')}}",
	                method: 'POST',
	                dataType:'json',
	                data: {id:id},
	                success:function(data){
	                	// xử lí food data['food']['name']
	                	modal.find('form').find('input[name="id_food"]').val(data['food']['id']);
	                	modal.find('input[name="name_food"]').val(data['food']['name']);
	                	modal.find('input[name="price_food"]').val(data['food']['price']);
	                	// xử lí menu
	                	var select_opt = modal.find('select[name="menu_food"] option');
	                	for (var i = 0; i < select_opt.length; i++) {
	                		if(select_opt[i].value == data['food']['menu_food_id']){
	                			select_opt[i].selected = true;
	                		}
	                  	};
	                  	//xử lí chi tiết món ăn
	                  	modal.find('textarea').val(data['food']['description']);
	                	// xử lí ảnh
						var html = '<div class="_1_img"><img class="rounded img-fluid w-100 h-100" src="../image/foodys/'+data['food']['image']+'" alt=""></div>';
						modal.find('input#img_food').val(data['food']['image']);
						$('._image_food_1').html(html);
						if(data['food']['image_details'] != null){
							array_img = data['food']['image_details'].split(',');
							html = '';
							for (var i = 0; i < array_img.length; i++) {
								html += '<div class="_1_img"><img class="rounded img-fluid w-100 h-100" src="../image/foodys/'+array_img[i]+'" alt=""></div>';
							};
							$('input#imgs_food').val(data['food']['image_details']);
							$('._image_food_2').html(html);
							
						}
						
	                    // xử lí tabs_food
	                    data['tabs_food'].map(function(value,index){ // value -> đối tượng rows trả về
              				input_tabs_food.map(function(value2,index2){
              					if(!index2.classList.contains('done')){
              						if(index2.value == value['tab_id']){ // index2 -> đối tượng input
										index2.checked = true;
										index2.classList.add("done");
									}else{
										index2.checked = false;
									}
              					}
							});
						});
						// xử lí time có món ăn
						data['time_food'].map(function(value,index){ // value -> đối tượng rows trả về
							var start_time = value['start_time'],
								end_time   = value['end_time'],
								hour_start = parseInt(start_time.substr(0, start_time.indexOf(':'))),
								hour_end   = parseInt(end_time.substr(0, end_time.indexOf(':')));
								// thời gian bắt bắt
              					input_start_time.map(function(value,index){  // index là đối tượng input , value là 0 ,1 ,2
									var parents = index.closest("label");
									if(!parents.querySelector('input[name="session_food[]"]').classList.contains('done')){
										parents.querySelector('input[name="session_food[]"]').checked = false;
										var min_time_start = index.min,
											max_time_start = index.max,
											hour_min = parseInt(min_time_start.substr(0, min_time_start.indexOf(':'))),
											hour_max = parseInt(max_time_start.substr(0, max_time_start.indexOf(':')));
											if(hour_min <= hour_start && hour_start <= hour_max){
												parents.querySelector('input[name="session_food[]"]').checked = true;
												parents.querySelector('input[name="session_food[]"]').classList.add("done");
											}
									}
								})
								// thời gian kết thuc
								input_end_time.map(function(value,index){ 
									var min_time_end = index.min,
										max_time_end = index.max;
								})
						});
						
						// xử lí thành phần 
	                    data['ingredient'].map(function(value,index){ // value -> đối tượng rows trả về
              				var html = '<span id="'+value['quantitative_id']+'" class="one-tp-food">'+value['name']+' <i class="fa fa-minus-square"></i></span>';
              				modal.find('.list-tp-food').append(html);

              				var html2 = '<div id="'+value['quantitative_id']+'" class="_one-input-g-tp d-flex align-items-center">';  
				              	html2 +='		<span class="name-tp text-muted">'+value['name']+'</span>';   
				              	html2 +='			<input type="hidden" name="tp_food[]" value="'+value['quantitative_id']+'"> '; 
				              	html2 +='			<span class="input-tp"><input value="'+value['weight']+'" min="0" max="1000" type="text" name="gfood[]"></span>';  
				              	html2 +='		<span class="don-vi">g</span>';
              					html2 +='	</div>';
              				modal.find('.list-input-g-tp').append(html2);

              				modal.find('#myDropdown ul.list_search li#'+value['quantitative_id']).remove();
              				//console.log(modal.find('#myDropdown ul.list_search li#'+value['quantitative_id']));
						});
						modal.modal('show');
	                }
	            });
	        
		});

		function notice_action(notice, content){
			var className = 'warning';
			if(notice == 'thanh_cong'){
				className = 'success';
			}else if(notice == 'that_bai'){
				className = 'error';
			}
			var html =  '<div id="toast-container" style="display:none" class="toast-top-right" aria-live="polite" role="alert">';
				html += '	<div class="toast toast-'+className+'" style="">';
				html += '		<button type="button" class="toast-close-button" role="button"></button>';
				html += '		<div class="toast-title">Thông báo</div>';
				html += '		<div class="toast-message">'+content+'</div>';
				html += '	</div>';
				html += '</div>';
			$('body').append(html);
			$('#toast-container').show(500);
			setTimeout(function(){
		        $('#toast-container').hide('slow');
		    },3000)
		    setTimeout(function(){
		        $('#toast-container').remove();
		    },3000)
		}
		
	})
</script>
@include('admin.returnView.return_html_foods');