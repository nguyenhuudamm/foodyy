<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	@include('admin.layout.head')
</head>
<body class="dark-sidebar-nav">
	<section id="container">
		<!-- start header -->
		@include('admin.layout.navbar_top')
		<!-- end header -->

		<!-- navbar_left start-->
		@include('admin.layout.navbar_left')
		<!--navbar_left end-->

		<!-- content start -->
		<section id="main-content">
    		<section class="wrapper">		
						@include('admin.content.category_shop')
			</section>
		</section>
		<!-- content end -->
		
		<!-- footer start -->
		@include('admin.layout.footer')
		<!-- footer end -->
	</section>
</body>
</html>

@include('admin.layout.script')