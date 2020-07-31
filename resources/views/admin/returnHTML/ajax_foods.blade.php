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
					$('._image_food_1').html(html);
				}
			})			
		});

		// upload file image
	 	$(document).on('change', '#files', function(event) {
			event.preventDefault();
			console.log('eee');
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
						console.log(array_img[i]);
						html += '<div class="_1_img"><img class="rounded img-fluid w-100 h-100" src="../image/foodys/'+array_img[i]+'" alt=""></div>';
					};
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
		});
		// click btn [Thêm]
		$(document).on('submit', '.form_add', function(event) {
			event.preventDefault();
			alert('heeelo');
		});
	})
</script>