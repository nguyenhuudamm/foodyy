<script>
$(document).ready(function(){
    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

    // xóa danh mục con
    // $(document).on('click', '.delete_category', function(event){
    //     event.preventDefault();
    //     var id =$(this).attr('id');
    //     var tab_tr = $(this).parents('tr');
     
    //     $.ajax({
    //         url:'{{route("admin.deleteMenuFoods")}}',
    //         data:{id:id},
    //         method:'POST',
    //         dataType:'',
    //         success:function(data){
    //             if(data == 1){
    //                 alert('xoa thanh cong');
    //                 tab_tr.hide('slow');
    //             }else{
    //                 alert('co loi');
    //             }
               
    //         }
    //     })
    // })
    // them danh muc con
    // $(document).on('click', '.add_category', function(event){
    //     event.preventDefault();
    //     var id_shop= $('input[name="name_category"]').val();
    //     alert(id_shop);
    // })

    //sua danh muc con

        // bat dialog them
        $(document).on('click', '.button-modal',function(e) {
            e.preventDefault();
            var modal = $('#menuFoodsModal');
            modal.find('.modal-title').html('Thêm danh mục');
            modal.find('.btn.btn-primary').html('Thêm');
            modal.find('.btn.btn-primary').removeClass('updateMenuFoods');
            document.getElementById("formMenuFoods").reset();
        })

        $('#formMenuFoods').on('submit', function(e) {
            e.preventDefault();
            var html = '';
            var modal = $('#menuFoodsModal');
            var btn_submit = modal.find('.btn.btn-primary');
            var tab_tr = $('.is-active').parents('tr');
            if(btn_submit.hasClass('updateMenuFoods')){
                // thực hiện update
                $.ajax({
                    url: "{{route('admin.updateMenuFoods')}}",
                    method: 'POST',
                    dataType:'',
                    data: $(this).serialize(),
                    success:function(data){
                        if(data == 1){
                            html += ''
                            $('#menuFoodsModal').modal('hide');
                            tab_tr.find('td:nth-child(2)').html(modal.find('#name_menu_foods').val());
                            document.getElementById("formMenuFoods").reset();
                        }else{
                            alert('sửa thất bại');
                        }
                    }
                }); 
            }else{
                $.ajax({
                url: "{{route('admin.addMenuFoods')}}",
                method: 'POST',
                dataType:'',
                data: $(this).serialize(),
                success:function(data){
                    if(data != -1){
                        $('#menuFoodsModal').modal('hide');
                        //
                        const name = $('#menuFoodsModal').find('#name_menu_foods').val();
                        html += '<tr>';
                        html +=        '<td><a href="#">'+ data +'</td>';
                        html +=        '<td class="hidden-phone">'+ name +'</td>';
                        html +=        '<td class="pl-4"><button id="'+data+'" type="button" class="btn btn-danger btn-sm click_change_menu_foods">Tắt</button></td>';
                        html +=        '<td>';
                        html +=        '<button id="'+data+'" class="btn btn-primary mr-1 btn-sm editMenuFoods"><i class="fa fa-pencil"></i></button>';
                        html +=        '<button id="'+data+'" class="btn btn-danger btn-sm deleteMenuFoods"><i class="fa fa-trash-o "></i></button>';
                        html +=        '</td>';
                        html +=    '</tr>';
                        $('table tbody').prepend(html);
                        //
                        document.getElementById("formMenuFoods").reset();
                    }else{
                        alert('thêm thất bại');
                    }
                }
            }); 
            }
        });

        $(document).on('click', '.click_change_menu_foods', function(event){
            event.preventDefault();
            var id = $(this).attr('id');
            var button = $(this);
            $.ajax({
                    url:'{{route("admin.menuFoodsChangStatus")}}',
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
//xoa
        $(document).on('click', '.deleteMenuFoods', function(event){
            event.preventDefault();
            var id = $(this).attr('id');
           var tab_tr = $(this).parents('tr');
            $.ajax({
                url:'{{route("admin.deleteMenuFoods")}}',
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

        $(document).on('click', '.editMenuFoods', function(event){
            event.preventDefault();
            var id = $(this).attr('id');
            //
            $('.editMenuFoods').removeClass('is-active');
            $(this).addClass('is-active');
            //  
            document.getElementById("formMenuFoods").reset();
            var modal = $('#menuFoodsModal');
            modal.modal('show');
            modal.find('.modal-title').html('Cập nhật');
            modal.find('.btn.btn-primary').html('Cập nhật');
            modal.find('.btn.btn-primary').addClass('updateMenuFoods');
            $.ajax({
                url:'{{route("admin.editMenuFoods")}}',
                data:{id:id},
                method:'POST',
                dataType:'json',
                success:function(data){
                    console.log(data);
                    modal.find('#name_menu_foods').val(data['name']);
                    modal.find('#idMenuFoods').val(data['id']);
                    modal.find('#MF_id_shop').val(data['shop_id'])
                    if(data['status'] == 1){
                        modal.find('#statusMenuFoods').attr('checked','checked');
                        modal.find('#statusMenuFoods').val(1);
                    }else{
                        modal.find('#statusMenuFoods').attr('checked', false);
                        modal.find('#statusMenuFoods').val(0);
                    }
                }
            }) 
        })
})


</script>