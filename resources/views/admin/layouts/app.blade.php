<!doctype html>
    @include('admin.layouts.head')

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
        @include('admin.layouts.sidebar')
		<!--end sidebar wrapper -->
		<!--start header -->
        @include('admin.layouts.tophead')
		<!--end header -->
		<!--start page wrapper -->
		@section('body')

        @show
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
        @include('admin.layouts.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
    @include('admin.layouts.switcher')
	<!--end switcher-->
	<!-- Bootstrap JS -->
	@include('admin.layouts.script')
</body>

</html>
