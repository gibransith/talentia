<?php
$titulo = (isset($titulo))?$titulo:"";
$shape = (isset($shape))?$shape:true;
$showBreadCrumb = (isset($showBreadCrumb))?$showBreadCrumb:false;
$breadCrumb = (isset($breadCrumb))?$breadCrumb:[];
?>
<!-- Start home -->
<section class="page-title-box">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="text-center text-white">
					<h3 class="mb-4">{{ $titulo }}</h3>
					@if($showBreadCrumb)
						<div class="page-next">
							<nav class="d-inline-block" aria-label="breadcrumb text-center">
								<ol class="breadcrumb justify-content-center">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page"> Job Grid </li>
								</ol>
							</nav>
						</div>
					@endif
				</div>
			</div>
			<!--end col-->
		</div>
		<!--end row-->
	</div>
	<!--end container-->
</section>
<!-- end home -->

<!-- START SHAPE -->
@if($shape)
	<div class="position-relative" style="z-index: 1">
		<div class="shape">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
				<path fill="" fill-opacity="1"
				d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
			</svg>
		</div>
	</div>
@endif
<!-- END SHAPE -->