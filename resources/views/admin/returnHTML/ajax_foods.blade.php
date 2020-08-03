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
		// click btn [Thêm món ăn]
		$(document).on('click', '.click-add', function(event) {
			event.preventDefault();
			var modal = $('.modal');
			modal.find('form')[0].reset();
			modal.find('.modal-title').html('Thêm món ăn');
			modal.find('.error').css('display','none');
			modal.find('._image_food').html('');
			modal.find('.btn.btn-primary').html('Thêm');
			modal.find('.btn.btn-primary').addClass('add');
			modal.find('.list-input-g-tp').html('');
			modal.find('.list-tp-food"').html('');
		});

		// click btn [Thêm]
		$(document).on('submit', '.form-add-food', function(event) {
			event.preventDefault();
			//alert($('input[name="tabs_food"]').val());
			$.ajax({
                url: "{{route('foods.addFood')}}",
                method: 'POST',
                dataType:'',
                data: $(this).serialize(),
                success:function(data){
                    if(data == 1){
                    	alert('them san pham thanh cong');
                    }
                }
            }); 
		});
		// check
		$(document).on('click', '.btn-check', function(event) {
			event.preventDefault();
			$.ajax({
                url: "{{route('foods.addFood')}}",
                method: 'POST',
                dataType:'',
                data: $('.form-add-food').serialize(),
                success:function(data){
                    if(data == 1){
                    	alert('them san pham thanh cong');
                    }
                }
            }); 
		});

		$(document).on('click', '#myDropdown ul.list_search li', function(event) {
			event.preventDefault();
			var name = $(this).html(),
				id = $(this).attr('id'),
				html = '';
			html += '<span id="'+id+'" class="one-tp-food">'+name+' <i class="fa fa-minus-square"></i></span>';
			$('.dropdown .list-tp-food').append(html);
			$(this).hide();
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

		$(document).on('click', '.one-tp-food i', function(event) {
			event.preventDefault();
			var id = $(this).parent().attr('id');
			$('#myDropdown ul.list_search').find('li#'+id).show();
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
		
	})
</script>