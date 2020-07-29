<!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}" ></script>
    <script src="{{asset('js/jquery.customSelect.min.js')}}" ></script>
    <script src="{{asset('js/respond.min.js')}}" ></script>

    <!--right slidebar-->
    <script src="{{asset('js/slidebars.min.js')}}"></script>

    <!--common script for all pages-->
    <script src="{{asset('js/common-scripts.js')}}"></script>
    s
     <!--dynamic table initialization -->
    <script src="{{asset('js/dynamic_table_init.js')}}"></script>

    <!--script for this page-->
    <script src="{{asset('js/sparkline-chart.js')}}"></script>
    <script src="{{asset('js/easy-pie-chart.js')}}"></script>
    <script src="{{asset('js/count.js')}}"></script>


    <script src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
   
    <script type="text/javascript" language="javascript" src="{{asset('assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/data-tables/DT_bootstrap.js')}}"></script>
    

   

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
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>