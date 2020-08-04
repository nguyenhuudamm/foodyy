<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Mosaddek">
<meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<link rel="shortcut icon" href="img/favicon.html">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
<!--external css-->
<link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link href="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css">
<link href="{{asset('assets/jquery-ui/jquery-ui-1.10.1.custom.min.css')}}" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-datepicker/css/datepicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-colorpicker/css/colorpicker.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-daterangepicker/daterangepicker.css')}}" />
 <link rel="stylesheet" type="text/css" href="{{asset('assets/jquery-multi-select/css/multi-select.css')}}" />

<!--bootstrap switcher-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap-switch/static/stylesheets/bootstrap-switch.css')}}" />

<!-- switchery-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/switchery/switchery.css')}}" />

<!--select 2-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/select2/css/select2.min.css')}}"/>

<!--right slidebar-->
<link href="{{asset('css/slidebars.css')}}" rel="stylesheet">
 <!--  summernote -->
<link href="{{asset('assets/summernote/summernote-bs4.css')}}" rel="stylesheet">
<!--toastr-->
<link href="{{asset('assets/toastr-master/toastr.css')}}" rel="stylesheet" type="text/css" />

<!-- Custom styles for this template -->

<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />

<style>
	.adv-table .span6:nth-child(1){
		display: inline-block;
		width: 50%;
		float: left;
	}
	.adv-table .span6:nth-child(1) .dataTables_length{
		float: left;	
	}
	.adv-table .span6:nth-child(2){
		display: inline-block;
		width: 50%;
	}
	.adv-table .span6:nth-child(2) label{
		white-space: nowrap;
	}
	.adv-table .span6:nth-child(2) .dataTables_filter{
		width: 100%;
	}
	.table-category-sys  .badge {
	    cursor: pointer !important;
	    padding: 8px !important;
	}
	.table-category-sys td, th{
		text-align: center !important;
	}
	.button-modal a{
		font-size: 30px !important;
	} 
	.alert-edit{
		font-size: 13px;
	}
	._foods .col-md-3{
		padding-right: 0px;
   		 padding-left: 8px;
	}
	._foods .col-md-3:nth-child(1n){
   		 padding-left: 16px;
	}
	._foods .col-md-3:nth-child(4n){
   		 padding-right: 0px;
	}
	._1_food a.pro-title {
	    font-size: 16px;
	    margin-bottom: 10px;
	}
	._1_food .pro-img-box img{
		object-fit:cover;
		width: 100%;
		height: 200px;
	}

	._1_food .price {
	    font-size: 13px;
	    text-align: left;
	}

	._1_food .btn-handling {
	    font-size: 20px;
	}
	._1_food .btn-handling div{
	    float: right;
	    cursor: pointer;
	    margin-right: 8px;
	}
	._1_food .img-icon {
	    position: absolute;
	    top: 0px;
	    right: 0px;
	}
	._1_food .img-icon {
	    text-align: center;
	    width: 34px;
	    margin-right: 3px;
	    margin-top: 3px;
	}

	.img-icon span {background: white;height: 34px;width: 34px;display: inline-block;border-radius: 50%;line-height: 31px;text-align: center;margin-bottom: 3px;}

	span {}

	.img-icon span img {width: 30px;}

	.btn-handling.flex-fill {}

	._1_food .btn-handling .btn {
	    font-size: 10px;
	    padding: 1px 7px;
	}
	._image_food{
		margin-top: 5px;
	}
	._image_food ._1_img{
		width: 80px;
		height: 80px;
		margin-right: 5px;
	}
	._image_food ._1_img:last-child{
		margin-right: 0px;
	}
	._image_food ._1_img img{
		object-fit: cover;
	}
	.modal-edit .stepy-tab {
	    text-align: left;
	}.stepy-tab {}

	.modal-edit .stepy-tab ul li div {
	    text-align: center !important;
	    border-radius: 3px;
	    width: max-content;
	    padding: 6px 15px;
	    line-height: unset;
	    height: unset;
	}
	.modal-edit .stepy-tab ul li span {
	    display: none;
	}
	.modal-edit .note-editor{
		width: 100%;
	}
	/*input search*/
	div.filter-tp-food {
	    border: 0px;
	    margin-bottom: 5px;
	    cursor: pointer;
	    font-size:16px;
	}

	div.filter-tp-food i.fa.fa-filter {
	    margin-right: 5px;
	    color: #28a745;
	}


	#myInput {
		box-sizing: border-box;
		background-image: url('searchicon.png');
		background-position: 14px 12px;
		background-repeat: no-repeat;
		border: none;
		border-bottom: 1px solid #ddd;
		padding: 8px 16px;
		width: 100%;
		font-size: 13px;
	}

	#myInput:focus {outline: 3px solid #ddd;}

	.dropdown {
	  position: relative;
	  display: inline-block;
	}

	.dropdown-content {
	  display: none;
	  position: absolute;
	  background-color: #f6f6f6;
	  min-width: 230px;
	  overflow: auto;
	  border: 1px solid #ddd;
	  z-index: 1;
	}

	.dropdown-content li {
		color: black;
	    padding: 5px 16px;
	    text-decoration: none;
	    display: block;
	    font-size: 12px;
	}

	.dropdown li:hover {background-color: #ddd;}

	.show {display: block;}
	.dropdown-content .list_search {
	    min-height: 100px;
	    overflow-y: scroll;
	    background: white;
	    max-height: 200px;
	}
	.list_search::-webkit-scrollbar {
	  width: 4px;
	  border-radius: 1px
	}
	.list_search::-webkit-scrollbar-track {
	  background: white;
	}
	.list_search::-webkit-scrollbar-thumb {
	  background: #343a401a;
	  border-radius: 3px
	}
	.list_search::-webkit-scrollbar-thumb:hover {
	  background: #343a405e;
	}
	.input-search-icon {
	    height: 50px;
	    border-bottom: 1px solid #8a838326;
	    background: white;
	}
	.input-search-icon input#myInput{
		margin-left: 10px;
	    border-radius: 4px;
	    padding: 5px;
	    border: 2px solid #14606f;
	}
	.input-search-icon i{
		font-size: 20px;
	}
	.dropdown span.one-tp-food {
	    padding: 2px 7px;
	    margin-right: 4px;
	    background: #808080c9;
	    color: white;
	    font-size: 14px;
	    border-radius: 3px;
	    margin-bottom: 4px;
	}

	.dropdown span.one-tp-food i {
	    margin-left: 5px;
	    cursor: pointer;
	}
	.list-input-g-tp {
	    width: 100%;
	}

	._one-input-g-tp {
	    width: 100%;
	    border: 1px solid #5d545463;
	    margin-bottom: 5px;
	    border-radius: 3px;
	}
	._one-input-g-tp:first-child {
	    margin-top: 10px;
	}

	._one-input-g-tp span.name-tp.text-muted {
	    width: 50%;
	    padding-left: 20px;
	    background: #eeeeee;
	    height: 38px;
	    line-height: 38px;
	}


	._one-input-g-tp span.input-tp input {
	    border: 0px;
	    font-size: 12px;
	    padding-left: 13px;
	    text-align: center;
	}

	._one-input-g-tp span.don-vi {height: 38px;line-height: 38px;padding: 0px 25px;border-left: 1px solid #5d545463;font-weight: bold;color: black;}
</style>