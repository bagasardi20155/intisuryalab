<!DOCTYPE html>
<html class="light-style layout-menu-fixed">

<head>
	@include('partials.header')

	@stack('style')
</head>

<body>
	@include('sweetalert::alert')
	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->
			@include('partials.sidebar')
			<!-- / Menu -->

			<!-- Layout container -->
			<div class="layout-page">
				<!-- Navbar -->
				@include('partials.navbar')
				<!-- / Navbar -->

				<!-- Content wrapper -->
				<div class="content-wrapper">
					<!-- Content -->

					<div class="container-xxl flex-grow-1 container-p-y">
						@yield('content')
					</div>
					<!-- / Content -->


					<div class="content-backdrop fade"></div>
				</div>
				<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>

		<!-- Overlay -->
		{{-- <div class="layout-overlay layout-menu-toggle"></div> --}}
	</div>
	<!-- / Layout wrapper -->

	<!-- Core JS -->
	@include('partials.footer')
	@stack('script')

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>