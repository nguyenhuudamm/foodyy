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

<!--right slidebar-->
<link href="{{asset('css/slidebars.css')}}" rel="stylesheet">

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
</style>