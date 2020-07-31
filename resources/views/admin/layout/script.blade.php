<!-- js placed at the end of the document so the pages load faster -->

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>

    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>

    <script src="{{asset('assets/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>

    <script src="{{asset('js/jquery.ui.touch-punch.min.js')}}"></script>
    <script src="{{asset('js/jquery.customSelect.min.js')}}" ></script>

    <script src="{{asset('js/respond.min.js')}}" ></script>
    
    <!--right slidebar-->
    <script src="{{asset('js/slidebars.min.js')}}"></script>

    <!--common script for all pages-->
    <script src="{{asset('js/common-scripts.js')}}"></script>
    
    <!--dynamic table initialization -->
    <script src="{{asset('js/dynamic_table_init.js')}}"></script>

    <!--sparkline script -->
    <script src="{{asset('js/sparkline-chart.js')}}"></script>
    <script src="{{asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
    
    <!--easy-pie-chart script -->
    <script src="{{asset('js/easy-pie-chart.js')}}"></script>
     <script src="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>

   
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
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
        autoPlay:true

          });

          $(function(){
              $('select.styled').customSelect();
          });

          $(window).on("resize",function(){
              var owl = $("#owl-demo").data("owlCarousel");
              owl.reinit();
          });
          $(function(){
              $('select').customSelect();
          });


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

      //custom select box



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
