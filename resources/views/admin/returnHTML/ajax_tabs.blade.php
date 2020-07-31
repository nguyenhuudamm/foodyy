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
        $(document).on('click', '.click_change', function(event){
            event.preventDefault();
            var id = $(this).attr('id');
            var button = $(this);
            $.ajax({
                    url:'{{route("tabs.changStatus")}}',
                    data:{id:id},
                    method:'POST',
                    dataType:'',
                    success:function(data){
                    if(data == 1){
                            button.addClass('btn-danger');
                            button.removeClass('btn-success');
                            button.html('Tắt');
                    }else{
                            button.removeClass('btn-danger');
                            button.addClass('btn-success');
                            button.html('Bật');
                    }
                    }
                }) 
        })
//___________________________________________________________
        $(document).on('click', '.button-modal',function(e) {
            e.preventDefault();
            var modal = $('#myModal');
            modal.find('.modal-title').html('Thêm danh mục');
            modal.find('.btn.btn-primary').html('Thêm');
            modal.find('.btn.btn-primary').removeClass('updateTab');
            document.getElementById("form_tabs").reset();
        })
        $('#form_tabs').on('submit', function(e) {
            e.preventDefault();
            var html = '';
            var modal = $('#myModal');
            var btn_submit = modal.find('.btn.btn-primary');
            var tab_tr = $('.is-active').parents('tr');
            if(btn_submit.hasClass('updateTab')){
                // thực hiện update
                $.ajax({
                    url: "{{route('tabs.updateTab')}}",
                    method: 'POST',
                    dataType:'',
                    data: $(this).serialize(),
                    success:function(data){
                        if(data == 1){
                            html += ''
                            $('#myModal').modal('hide');
                            tab_tr.find('td:nth-child(2)').html(modal.find('#nameTab').val());
                            document.getElementById("form_tabs").reset();
                        }else{
                            alert('thêm thất bại');
                        }
                    }
                }); 
            }else{
                //thực hiện thêm
                $.ajax({
                url: "{{route('tabs.addTab')}}",
                method: 'POST',
                dataType:'',
                data: $(this).serialize(),
                success:function(data){
                    if(data != -1){
                        $('#myModal').modal('hide');
                        //
                        var nameTag = $('#myModal').find('#nameTab').val();
                        html += '<tr>';
                        html +=        '<td><a href="#">2</a></td>';
                        html +=        '<td class="hidden-phone">'+nameTag+'</td>';
                        html +=        '<td class="pl-4"><button id="'+data+'" type="button" class="btn btn-danger btn-sm click_change">Tắt</button></td>';
                        html +=        '<td>';
                        html +=        '<button id="'+data+'" class="btn btn-success btn-sm"><i class="fa fa-check"></i></button>';
                        html +=        '<button id="'+data+'" class="btn btn-primary btn-sm editTab"><i class="fa fa-pencil"></i></button>';
                        html +=        '<button id="'+data+'" class="btn btn-danger btn-sm"><i class="fa fa-trash-o "></i></button>';
                        html +=        '</td>';
                        html +=    '</tr>';
                        $('table tbody').prepend(html);
                        //
                        document.getElementById("form_tabs").reset();
                    }else{
                        alert('thêm thất bại');
                    }
                }
            }); 
            }
        });
//___________________________________________________________
        $(document).on('click', '.editTab', function(event){
            event.preventDefault();
            var id = $(this).attr('id');
            //
            $('.editTab').removeClass('is-active');
            $(this).addClass('is-active');
            //  
            document.getElementById("form_tabs").reset();
            var modal = $('#myModal');
            modal.modal('show');
            modal.find('.modal-title').html('Cập nhật');
            modal.find('.btn.btn-primary').html('Cập nhật');
            modal.find('.btn.btn-primary').addClass('updateTab');
            $.ajax({
                url:'{{route("tabs.editTab")}}',
                data:{id:id},
                method:'POST',
                dataType:'json',
                success:function(data){
                    modal.find('#nameTab').val(data['name']);
                    modal.find('#idTab').val(data['id']);
                    if(data['status'] == 1){
                        modal.find('#statusTab').attr('checked','checked');
                        modal.find('#statusTab').val(1);
                    }else{
                        modal.find('#statusTab').attr('checked', false);
                        modal.find('#statusTab').val(0);
                    }
                }
            }) 
        })
        //___________________________________________________________
        $(document).on('click', '.deleteTab', function(event){
            event.preventDefault();
            var id = $(this).attr('id');
           var tab_tr = $(this).parents('tr');
            $.ajax({
                url:'{{route("tabs.deleteTab")}}',
                data:{id:id},
                method:'POST',
                dataType:'',
                success:function(data){
                   // alert(data);
                    if(data == 1){
                        tab_tr.hide();
                    }else{
                        alert('Có lỗi nha');
                    }
                }
            }) 
        })

})
</script>