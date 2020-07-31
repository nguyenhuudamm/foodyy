<script>
$(document).ready(function(){
    $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });

    // xóa danh mục con
    $(document).on('click', '.delete_category', function(event){
        event.preventDefault();
        var id =$(this).attr('id');
        var tab_tr = $(this).parents('tr');
     
        $.ajax({
            url:'{{route("admin.delete_category")}}',
            data:{id:id},
            method:'POST',
            dataType:'',
            success:function(data){
                if(data == 1){
                    alert('xoa thanh cong');
                    tab_tr.hide('slow');
                }else{
                    alert('co loi');
                }
               
            }
        })
    })
    // them danh muc con
    // $(document).on('click', '.add_category', function(event){
    //     event.preventDefault();
    //     var id_shop= $('input[name="name_category"]').val();
    //     alert(id_shop);
    // })

    //sua danh muc con

})


</script>