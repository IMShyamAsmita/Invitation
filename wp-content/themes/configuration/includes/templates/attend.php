
<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Layero | Theme: Graha RealEstate-Wordpress</title>		
	<!-- <link  href="http://fonts.googleapis.com/css?family=Kreon:300,400,700" rel="stylesheet" type="text/css" >  -->       
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href="selector/styles.css" rel="stylesheet" media="all" />        
<!--[if IE]>			
	<style type="text/css">			
		li.purchase a {
			padding-top: 5px;
			background-position: 0px -4px;
		}				
		li.remove_frame a {
			padding-top: 5px;
			background-position: 0px -3px;
		}				
		#theme_select {
			padding: 8px 8px;
		}				
		#theme_list {
			margin-top: 2px;
		}			
	</style>			
	<![endif]-->

	<style type="text/css">

		
	</style>

	<script type="text/javascript" src="selector/jquery-1.4.2.min.js"></script>

	<script type="text/javascript">

		var theme_list_open = false;

		$(document).ready(function () {

			function fixHeight () {

				var headerHeight = $("#switcher").height();


				$(".iframe-wrapper").css("height", ($(window).height() - headerHeight) + 'px');
				if($('#layout-switcher').find('a.desktop').hasClass('active')){
					$("#iframe").attr("height", ($(window).height() - headerHeight) + 'px');
				}
			}

			$(window).resize(function () {

				fixHeight();

			}).resize();

			$("#theme_select").click( function () {

				if (theme_list_open == true) {

					$("#theme_list ul").hide();

					theme_list_open = false;

				} else {

					$("#theme_list ul").show();         		

					theme_list_open = true;

				}

				return false;

			});

			$("#theme_list ul li a").click(function () {

				var theme_data = $(this).attr("rel").split(",");

				$("li.purchase a").attr("href", theme_data[1]);
				$("li.remove_frame a").attr("href", theme_data[0]);
				$("#iframe").attr("src", theme_data[0]);

				$("#theme_list a#theme_select").text($(this).text());

				$("#theme_list ul").hide();

				theme_list_open = false;

				return false;

			});

		});

	</script>


<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-45248739-1', 'layero.com');
	ga('send', 'pageview');


	$(document).ready(function(){
		$('#layout-switcher').find('a').click(function(){
			var width = $(this).attr('data-wd');
			var height = $(this).attr('data-hg');
			var headerHeight = $("#switcher").height();
			$('#layout-switcher').find('a').removeClass('active');
			$(this).addClass('active');
			if($(this).hasClass('desktop')){
				$('#iframe').attr("width", width);
				$("#iframe").attr("height", (($(window).height() - 10) - headerHeight) + 'px');
			}
			else {
				$('#iframe').attr("width", width);
				$('#iframe').attr("height", height);
			}
		});
	});


</script>
</head>

<body>

	<div id="switcher">

		<div class="center">

			<ul>

				

				<li id="theme_list"><a id="theme_select" href="#">Select A Theme...</a>

					<ul>

						<li><a href="#" rel="http://themes.layero.com/grahaneo,http://layero.com/real-estate-wordpress-theme/">Graha RealEstate-Wordpress</a></li><li><a href="#" rel="http://themes.layero.com/graha-html/,http://layero.com/graha-responsive-real-estate-html-template/">Graha Real Estate-HTML</a></li><li><a href="#" rel="http://themes.layero.com/weddingwp,http://layero.com/wedding-wordpress-theme/">Wedding Wordpress</a></li><li><a href="#" rel="http://themes.layero.com/wedding-html/,http://layero.com/wedding-website-html-template/">Wedding HTML</a></li><li><a href="#" rel="http://themes.layero.com/yatra/,http://layero.com/tour-booking-wordpress-theme/">Yatra-Travel WordPress</a></li><li><a href="#" rel="http://themes.layero.com/atulya-landing/,http://layero.com/atulya-multi-purpose-wordpress-theme/">Atulya Multipurpose WP</a></li><li><a href="#" rel="http://themes.layero.com/atulya-html/index.html,http://layero.com/atulya-parallax-html-template/">Atulya Parallax-HTML</a></li><li><a href="#" rel="http://themes.layero.com/activa/index.html,http://layero.com/activa-creative-business-html-template/">Activa Creative-HTML</a></li><li><a href="#" rel="http://themes.layero.com/activawp,http://layero.com/download/activa-wordpress-business-theme/">Activa Business-WP</a></li>
					</ul>

				</li>	
				<li id="layout-switcher">
					<ul>
						<li><a href="#" class="desktop active" title="Desktop Version" data-wd="100%" data-hg="100%"></a></li>
						<li><a href="#" class="tabletlandscape" title="Tablet Landscape (1024x768)" data-wd="1024" data-hg="768"></a></li>
						<li><a href="#" class="tabletportrait" title="Tablet Portrait (768x1024)" data-wd="768" data-hg="1024"></a>
                    	<li><a href="#" class="mobilelandscape" title="Mobile Landscape (480x320)" data-wd="480" data-hg="320"></a></li>
                    	<li><a href="#" class="mobileportrait" title="Mobile Portrait (320x480)" data-wd="320" data-hg="480"></a></li>
					</ul>
				</li>

				<li class="right">
					<a class="purchase" href="http://layero.com/real-estate-wordpress-theme/" rel="http://layero.com/real-estate-wordpress-theme/">Purchase</a>		
					<a class="remove_frame" href="http://themes.layero.com/grahaneo" rel="http://themes.layero.com/grahaneo">Remove Frame</a>
				</li>
			<span class="clearfix"></span>
			</ul>
			<span class="clearfix"></span>
		</div>

	</div>
	<div class="iframe-wrapper">
		<iframe id="iframe" src="http://themes.layero.com/grahaneo" frameborder="0" width="100%"></iframe>
	</div>

</body>

</html>

