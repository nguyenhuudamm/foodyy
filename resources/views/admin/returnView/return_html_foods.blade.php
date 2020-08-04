<script>
	
		function _one_food(food){
			var html = '';
			html += '		<!-- 1 món ăn -->';
			html += '	      <div class="col-md-3">';
			html += '	        <section class="card _1_food">';
			html += '	          <div class="pro-img-box">';
			html += '	              <img src=".././image/foodys/'+food['image']+'" alt=""/>';
			html += '	          </div>';
			html += '	          <div class="img-icon">';
			html += '	            <span><img src=".././img/img_icon/icon_freeship.png" alt=""></span>';
			html += '	            <span><img src=".././img/img_icon/icon_hot.png" alt=""></span>';
			html += '	          </div>';
			html += '	          <div class="card-body text-center m-0 p-0">';
			html += '	              <h4 class="p-0 m-0"><a href="#" class="pro-title mt-1">'+food['name']+'</a></h4>';
			html += '	          </div>';
			html += '	          <div class="d-flex align-items-center mb-2">';
			html += '	            <div class="price flex-fill pl-2">'+food['price']+'</div>';
			html += '	            <div class="btn-handling flex-fill">';
			html += '	              <div id="'+food['id']+'" class="edit_food"><i class="fa fa-edit"></i></div>';
			html += '	              <div id="'+food['id']+'" class="delele_food"><i class="fa fa-trash-o"></i></div>';
			html += '	            </div>';
			html += '	          </div>';
			html += '	        </section>';
			html += '	      </div>';
			html += '	      <!-- end 1 món ăn -->';
			return html;
		}	
	
</script>