<!-- js placed at the end of the document so the pages load faster -->

  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

  <script src="{{asset('js/jquery-ui.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>

  <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>

  <script src="{{asset('assets/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>

  <script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
  <script src="{{asset('js/jquery.customSelect.min.js')}}" ></script>
  
  <!--custom switch-->
  <script src="{{asset('js/bootstrap-switch.js')}}"></script>
  <!--custom tagsinput-->
  <script src="{{asset('js/jquery.tagsinput.js')}}"></script>
  <!--custom checkbox & radio-->
  <script type="{{asset('text/javascript" src="js/ga.js')}}"></script>
  
  <script type="text/javascript" src="{{asset('assets/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/bootstrap-daterangepicker/date.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
  
   <script type="text/javascript" src="{{asset('assets/jquery-multi-select/js/jquery.multi-select.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/jquery-multi-select/js/jquery.quicksearch.js')}}"></script>
  <!--select2-->
  <script type="text/javascript" src="{{asset('assets/select2/js/select2.min.js')}}"></script>
  <!--multiselect start + spinner + wysihtml5 scripts-->
  <script src="{{asset('js/advanced-form-components.js')}}"></script>

  <!--summernote-->
  <script src="{{asset('assets/summernote/summernote-bs4.min.js')}}"></script>

  <script src="{{asset('js/respond.min.js')}}" ></script>
  
  <!--right slidebar-->
  <script src="{{asset('js/slidebars.min.js')}}"></script>

  <!--common script for all pages-->
  <script src="{{asset('js/common-scripts.js')}}"></script>
  
  <!--dynamic table initialization -->
  <script src="{{asset('js/dynamic_table_init.js')}}"></script>
  <!--bootstrap-switch-->
  <script src="{{asset('assets/bootstrap-switch/static/js/bootstrap-switch.js')}}"></script>

  <!--bootstrap-switch-->
  <script src="{{asset('assets/switchery/switchery.js')}}"></script>
  <!--sparkline script -->
  <script src="{{asset('js/sparkline-chart.js')}}"></script>
  <script src="{{asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
  
  <!--easy-pie-chart script -->
  <script src="{{asset('js/easy-pie-chart.js')}}"></script>
   <script src="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
  <!--script for this page-->
    <script src="{{asset('js/jquery.stepy.js')}}"></script>
  <!--toastr-->
  <script src="{{asset('assets/toastr-master/toastr.js')}}"></script>
   
    <script type="text/javascript" language="javascript" src="{{asset('assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/data-tables/DT_bootstrap.js')}}"></script>
    
 


    <!--script for this page only-->
    <script src="{{asset('js/gritter.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/pulstate.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('js/jquery.pulsate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/gritter/js/jquery.gritter.js')}}"></script>
   

  <script>

      //owl carousel

      $(document).ready(function() {
        //step wizard

        if( $('#default').length != 0){
          $('#default').stepy({
                backLabel: 'Quay lại',
                block: true,
                nextLabel: 'Kế tiếp',
                titleClick: true,
                titleTarget: '.stepy-tab'
            });
        }
        if( $('.summernote').length != 0){
          $('.summernote').summernote({
                height: 200,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                 // set focus to editable area after initializing summernote
            });
        } 
        if($("#owl-demo").length == 1){
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
              autoPlay:true
          });
        }

          $(function(){
              $('select.styled').customSelect();
          });

          if($("#owl-demo").length == 1){
            $(window).on("resize",function(){
                var owl = $("#owl-demo").data("owlCarousel");
                owl.reinit();
            });
          }
          
          


          // range slider
          $("#slider-range").slider({
              range: true,
              min: 0,
              max: 500,
              values: [75, 300],
              slide: function (event, ui) {
                  $("#slider-range-amount").text("" + ui.values[0] + " - " + ui.values[1]);
              }
          });

          $("#slider-range-amount").text("" + $("#slider-range").slider("values", 0) + " - " + $("#slider-range").slider("values", 1));
        


      });

      //input search
      function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
      }
      

      function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("li");
        for (i = 0; i < a.length; i++) {
          txtValue = a[i].textContent || a[i].innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
          } else {
            a[i].style.display = "none";
          }
        }
      }



  </script>
  <!-- error 
    <script src="{{asset('js/count.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}" ></script>
    
     error -->
@include('admin.returnHTML.ajax_tabs')
<<<<<<< HEAD
@include('admin.returnHTML.ajax_foods')
=======
     {{-- @include('admin.returnHTML.fileajaxx') --}}
>>>>>>> master
