<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

<title>UI KIT - Marketplace and Ecommerce html template</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- jQuery -->
<script src="/js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="/css/bootstrap.css?v=1.0" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

<!-- plugin: fancybox  -->
<script src="/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
<link href="/plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

<!-- plugin: owl carousel  -->
<link href="/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
<script src="/plugins/owlcarousel/owl.carousel.min.js"></script>

<!-- custom style -->
<link href="/css/ui.css?v=1.0" rel="stylesheet" type="text/css"/>
<link href="/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="/js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
<body>

@section('header')
	@show

<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm">
<div class="container">

<div class="row-sm">
	<div class="col-md-8">


<!-- ================= main slide ================= -->
@yield('cuerpo')
<!-- ============== main slidesow .end // ============= -->

	</div> <!-- col.// -->
	<aside class="col-md-4">

<div class="card mb-3">
<figure class="itemside">
	<div class="aside"><div class="img-wrap p-2 border-right"><img class="img-sm" src="/images/items/1.jpg"></div></div>
	<figcaption class="text-wrap align-self-center">
		<h6 class="title">Group of products is here </h6>
		<a href="#">More items</a>
	</figcaption>
</figure>
</div> <!-- card.// -->

<div class="card mb-3">
<figure class="itemside">
	<div class="aside"><div class="img-wrap p-2 border-right"><img class="img-sm" src="/images/items/2.jpg"></div></div>
	<figcaption class="text-wrap align-self-center">
		<h6 class="title">Group of products  is here </h6>
		<a href="#">More items</a>
	</figcaption>
</figure>
</div> <!-- card.// -->

<div class="card">
<figure class="itemside">
	<div class="aside"><div class="img-wrap p-2 border-right"><img class="img-sm" src="/images/items/3.jpg"></div></div>
	<figcaption class="text-wrap align-self-center">
		<h6 class="title">Group of products is here </h6>
		<a href="#">More items</a>
	</figcaption>
</figure>
</div> <!-- card.// -->

	</aside>
</div>
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->

<section class="section-content padding-y bg">
<div class="container">

<div class="card">
	<div class="card-body">

<header class="section-heading">
<h3 class="title-section">Main section is here</h3>
</header>

<article>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


</article>
	</div>
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg2">
	<div class="container">
		<section class="footer-bottom row">
			<div class="col-sm-6"> 
				<p> Made with <3 <br>  by Vosidiy M.</p>
			</div>
			<div class="col-sm-6">
				<p class="text-sm-right">
Copyright &copy 2018 <br>
<a href="http://bootstrap-ecommerce.com">Bootstrap-ecommerce UI kit</a>
				</p>
			</div>
		</section> <!-- //footer-top -->
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->


</body>
</html>