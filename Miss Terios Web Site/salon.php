<?php

if (isset($_POST['name'], $_POST['mess'], $_POST['email']))	{
	$email_to = "edwin_b24@hotmail.com";
	$email_subject = "Email de cliente";
	$name = $_POST['name'];
	$mess = $_POST['mess'];
	$email = $_POST['email'];


if(empty($name) || empty($mess) || empty($email)){
	if(empty($name)){
		$nerror = 'Se requiere un nombre';	
		}
		
	if(empty($email)){
		$eerror = 'Se requiere un correo';		
		}
		
	if(empty($mess)){
		$merror = 'Se requiere un mensaje';
		}
	}
	
else{

if (strlen($name) > 25)	{
	$nerror = 'Nombre muy largo';
	}

if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
	$eerror = 'Email invalido';
	}
}
	

		
	}
?>

<html>
<head>

<!-- made by www.metatags.org -->
<meta name="description" content="Sala de Belleza, estética y café Miss Terios hubicado en Panama, Galeria Obarrio. " />
<meta name="keywords" content="Sala de Belleza, Salón Panamá, Belleza, Panamá, Boutique, Miss Terios, miss-terios, Galería Obarrio, Peluquería Panamá, unisex, Estética Panamá, Café Panamá, corte de cabello, Misterios, Missterios, Depilación, Productos para el cabello, Obarrio, Cosméticos, Estilistas
" />
<meta name="author" content="metatags generator">
<meta name="robots" content="index, follow">
<meta name="revisit-after" content="3 month">
<title>Miss Terios - Sala de Belleza, estética y café Panamá</title>
<!-- Peluqueria Panama, Miss terios, Boutique Panama   -->


	<title>Miss Terios</title>
    <!-- style sheet link -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/galleriffic-4.css" type="text/css" />
	<link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    
    <!-- Web font link -->
<link href='http://fonts.googleapis.com/css?family=Simonetta' rel='stylesheet' type='text/css'>
<link href="css/contactform.css" rel="stylesheet" type="text/css">
       
    <!-- JQuery link -->
    <!-- this JQuery link allow the function of the personalize scrolling bar-->
    <script type="text/javascript" src="jquery/jquery-1.3.2.min.js"></script>
    <!-- this JQuery link is the actual JQuery version necesary for the age to run-->
     <script src="jquery/jquery.min.js"></script>	
    <!-- Scrolling plugin link -->
    
    <script type="text/javascript" src="jquery/jquery.scrollTo-1.4.2-min.js"></script>

     <!-- gallery plugins -->
		<script type="text/javascript" src="jquery/jquery.history.js"></script>
		<script type="text/javascript" src="jquery/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="jquery/jquery.opacityrollover.js"></script>

		<!-- For the gallery:
         We only want the thunbnails to display when javascript is disabled -->
		<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>
    
    <!-- CONTAINER BACKWORK STYLE -->
	<style type="text/css">
		
		
		.covertor{overflow:hidden; min-width:360px;}
		.specialcontent{
border-radius: 10px;}
		
	</style>
<!-- END CONTAINER BACKWORK STYLE -->
    	<link href="jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
    
    <!-- THIS IS USED IN THE ACCORDION -->
    <style>
            /* css for this page */
          
            accfigure { display: block; width: 100%; height: 100%; margin: 0 }
            figcaption { padding: 10px 15px; position: absolute; top:80px; right: -10px; z-index: 3; color: white; text-align:center; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px }
         figcaption h4{
			 font-size: 28px; 
			 }

        </style>

        <!-- liteAccordion css -->
        <link href="css/liteaccordion.css" rel="stylesheet" />



        <!-- easing -->
        <script src="jquery/jquery.easing.1.3.js"></script>
        <!-- jQuery -->        

        <!-- liteAccordion js -->
        <script src="jquery/liteaccordion.jquery.js"></script>

        <!--[if lt IE 9]>
            <script>
                document.createElement('accfigure');
                document.createElement('figcaption');           
            </script>
        <![endif]-->  
        
    <!-- END USING IN THE ACCORDION --> 
    
    
    <script type="text/javascript">
	
    <!-- for mobile	if(window.innerWidth<800){	window.location="mobile.html"	}	var sw = false;	 -->

	
	<!-- Scrolling content -->
	$(document).ready(function() {  

	
	$('a.link').click(function () {  
			$('#wrapper').scrollTo($(this).attr('href'), 800);
			
			$('a.link').removeClass('selected');  
			$(this).addClass('selected');
			return false;  
		});  
	});
	function setPosition(check, div, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10) {
	if(check==='#box1')
		{
			$(div).scrollTo(p1, 800);
		}
	else if(check==='#box2')
		{
			$(div).scrollTo(p2, 800);
		}
	else if(check==='#box3')
		{
			$(div).scrollTo(p3, 800);
		}
	else if(check==='#box4')
		{
			$(div).scrollTo(p4, 800);
		}
	else if(check==='#box5')
		{
			$(div).scrollTo(p5, 800);
		}
	else if(check==='#box6')
		{
			$(div).scrollTo(p6, 800);
		}
	else if(check==='#box7')
		{
			$(div).scrollTo(p7, 800);
		}
	else if(check==='#box8')
		{
			$(div).scrollTo(p8, 800);
		}
	else if(check==='#box9')
		{
			$(div).scrollTo(p9, 800);
		}
	else
		{
			$(div).scrollTo(p10, 800);
		}
	};
	</script>
    
    <script type="text/javascript">
			jQuery(document).ready(function($) {
				// We only want these styles applied when javascript is enabled
				$('div.navigation').css({'width' : '300px', 'float' : 'left'});
				$('div.cont').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 0.67;
				$('#thumbs ul.thumbs li').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  1.0,
					fadeSpeed:         'fast',
					exemptionSelector: '.selected'
				});



				// Enable toggling of the caption
				var captionOpacity = 0.4;
				$('#captionToggle a').click(function(e) {
					var link = $(this);
					
					var isOff = link.hasClass('off');
					var removeClass = isOff ? 'off' : 'on';
					var addClass = isOff ? 'on' : 'off';
					var linkText = isOff ? 'Hide Caption' : 'Show Caption';
					captionOpacity = isOff ? 0.7 : 0.0;

					link.removeClass(removeClass).addClass(addClass).text(linkText).attr('title', linkText);
					$('#caption span.image-caption').fadeTo(1000, captionOpacity);
					
					e.preventDefault();
				});
				
				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:                     2500,
					numThumbs:                 9,
					preloadAhead:              10,
					enableTopPager:            false,
					enableBottomPager:         true,
					maxPagesToShow:            7,
					imageContainerSel:         '#slideshow',
					controlsContainerSel:      '#controls',
					captionContainerSel:       '#caption',
					loadingContainerSel:       '#loading',
					renderSSControls:          true,
					renderNavControls:         true,
					playLinkText:              '',
					pauseLinkText:             '',
					prevLinkText:              '&lsaquo;',
					nextLinkText:              '&rsaquo;',
					nextPageLinkText:          '&rsaquo;',
					prevPageLinkText:          '&lsaquo;',
					enableHistory:             true,
					autoStart:                 false,
					syncTransitions:           true,
					defaultTransitionDuration: 900,
					onSlideChange:             function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 1.0);
					},
					onTransitionOut:           function(slide, caption, isSync, callback) {
						slide.fadeTo(this.getDefaultTransitionDuration(isSync), 0.0, callback);
						caption.fadeTo(this.getDefaultTransitionDuration(isSync), 0.0);
					},
					onTransitionIn:            function(slide, caption, isSync) {
						var duration = this.getDefaultTransitionDuration(isSync);
						slide.fadeTo(duration, 1.0);
						
						// Position the caption at the bottom of the image and set its opacity
						var slideImage = slide.find('img');
						caption.width(slideImage.width())
							.css({
								'bottom' : Math.floor((slide.height() - slideImage.outerHeight()) / 2),
								'left' : Math.floor((slide.width() - slideImage.width()) / 2) + slideImage.outerWidth() - slideImage.width()
							})
							.fadeTo(duration, captionOpacity);
					},
					onPageTransitionOut:       function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:        function() {
						this.fadeTo('fast', 1.0);
					},
					onImageAdded:              function(imageData, $li) {
						$li.opacityrollover({
							mouseOutOpacity:   onMouseOutOpacity,
							mouseOverOpacity:  1.0,
							fadeSpeed:         'fast',
							exemptionSelector: '.selected'
						});
					}
				});

				/**** Functions to support integration of galleriffic with the jquery.history plugin ****/

				// PageLoad function
				// This function is called when:
				// 1. after calling $.historyInit();
				// 2. after calling $.historyLoad();
				// 3. after pushing "Go Back" button of a browser
				function pageload(hash) {
					// alert("pageload: " + hash);
					// hash doesn't contain the first # character.
					if(hash) {
						$.galleriffic.gotoImage(hash);
					} else {
						gallery.gotoIndex(0);
					}
				}

				// Initialize history plugin.
				// The callback is called at once by present location.hash. 
				$.historyInit(pageload, "advanced.html");

				// set onlick event for buttons using the jQuery 1.3 live method
				$("a[rel='history']").live('click', function() {
					if (e.button != 0) return true;

					var hash = this.href;
					hash = hash.replace(/^.*#/, '');

					// moves to a new page. 
					// pageload is called at once. 
					// hash don't contain "#", "?"
					$.historyLoad(hash);

					return false;
				});

				/****************************************************************************************/

				/********************** Attach click event to the Add Image Link ************************/

				$('#addImageLink').click(function(e) {
					gallery.insertImage('<li>																							\
							<a class="thumb" href="http://farm1.static.flickr.com/79/263120676_2518b40e5b.jpg" title="Dynamically Added Image">\
								<img src="http://farm1.static.flickr.com/79/263120676_2518b40e5b_s.jpg" alt="Dynamically Added Image" />\
							</a>																										\
							<div class="caption">																						\
								<div class="download">																					\
									<a href="http://farm1.static.flickr.com/79/263120676_2518b40e5b_o_d.jpg">Download Original</a>		\
								</div>																									\
								<div class="image-title">Dynamically Added Image</div>													\
								<div class="image-desc">																				\
									<img src="http://farm1.static.flickr.com/38/buddyicons/77261001@N00.jpg" alt="ringydingydo" />		\
									Photo taken by <a href="http://www.flickr.com/photos/ringydingydo/">ringydingydo</a>				\
								</div>																									\
							</div>																										\
						</li>', 5);
					
					e.preventDefault();
				});
				

			});
		</script>
    
<?php include("send_contact.php"); ?>

<!-- Two JavaScripts necessary for the gooogle map-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="jquery/myjquerymap.js"></script>

</head>
<!-- THE ONLOAD ITS NECESARY TO LOAD MAP-->
<body onLoad="initialize()">

<div id="header"> 
<a href="#box1" class="link">
<img src="images/Logo.png" width="242" height="129" alt="Miss-terios">
</a> 
</div><!-- end header -->

<div id="navigation">
<div id="bar">
    	<ul id="menu">
        	<li><a href="#box9" class="link">CONÓCENOS</a></li>
            <li><a href="#box6" class="link">PELUQUERÍA</a></li>
            <li><a href="#box5" class="link">ESTÉTICA</a></li>
            <li><a href="#box8" class="link">CAFETERÍA </a></li>
            <li><a href="#box4" class="link">PRODUCTOS</a></li>
            <li><a href="#box7" class="link">PERSONAL</a></li>
            <li><a href="#box3" class="link">CONTÁCTANOS</a></li>
            <li><a href="#box2" class="link">FOTOS</a></li>  
      </ul>
</div>
</div>
 <!--end navigation -->

	<div id="wrapper">
    	<ul id="mask">
        
        	<li id="box1" class="box">
            	<a name="box1"></a>
                <div class="content">
                
                  <div class="inner">
        
                  <div id="insidebox1">
                  <p>En nombre de MISS TERIOS queremos darle la más cordial bienvenida a nuestra página web, creada para que nos conozcas, en esta te ofrecemos información de servicios, productos, personal, nuestra historia y mucho más.</p>
                  <p>Queremos que seas testigos de nuestro crecimiento, de más de 23 años, pero no sin antes agradecer a la persona por la cual esto dio inicio Enrique Correa (q.e.p.d.), ya que gracias a su iniciativa y cariño por el arte de la belleza nos motivó a incursionar en esta especial profesión.<whitetext><a href="#box9" class="link"> Conoce más acerca de nosotros...</a></whitetext></p>
                  <p>Esperamos que esta página sea de tu agrado y sirva para darte un vistazo de lo que hacemos con tanto orgullo. </p>
                      Tel. 214-3686/85. Local #7,  Galerías Obarrio a lado de EPago y MOVICELL, Panamá. <whitetext><a href="#box10" class="link">Ver nuestra hubicación</a></whitetext><br>
                      <a href="mailto:info@notchstudio.com">missterios@gmail.com</a> 
    <a href="http://www.facebook.com/missteriosbelleza?ref=ts" target="_blank"><img src="images/facebookicon.png" alt="Facebook"></a>
    <a href="https://twitter.com/SalonMissterios" target="_blank"><img src="images/twittericon.png" alt="Twitter"></a>
                  <!-- Credits -->
                  <div id="locate">
                 Diseño por edwin_b24<br>Email:<whitetext> <a href="mailto:info@notchstudio.com">edwin_b24@hotmail.com</a></whitetext>
               </div>  
               
               </div>
                 
                           
                   </div></div>
            </li><!-- end box1 -->
            
            <li id="box2" class="box">
            	<a name="box2"></a>
<div class="content"><div class="inner"> 
<div id="container">

<!-- Modals -->
			<div id="openModal1" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic1.jpg" alt="Foto 1">
             </div>
			</div>

				<div id="openModal2" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic2.jpg" alt="Foto 1">
             </div>
			</div>
            
           <div id="openModal3" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic3.jpg" alt="Foto 1">
             </div>
			</div>

			<div id="openModal4" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic4.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal5" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic5.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal6" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic6.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal7" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic7.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal8" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic8.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal9" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic9.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal10" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic10.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal11" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic11.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal12" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic12.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal13" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic13.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal14" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic14.jpg"  alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal15" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic15.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal16" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic16.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal17" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic17.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal18" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic18.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal19" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic19.jpg"  alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal20" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic20.jpg" alt="Foto 1">
             </div>
			</div>
            
            <div id="openModal21" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/bigphotos/bigpic21.jpg" alt="Foto 1">
             </div>
			</div>
            
            <!-- HERE IS FOR THE CAFETERIA PAGE, THIS IS THE MENU :)-->
            <div id="openModal22" class="modalDialog">
			 <div class="modalimag">
				<a href="#close" title="Close" class="close">X</a>
			<img src="images/menu.jpg" alt="Foto 1">
             </div>
			</div>
            
            <!-- END OF THE WEIRD MENU REPARATION TECHNIQUE-->
            
<div id="gallerytit" class="tit">
Fotos
</div>
<div id="galleryunder" class="under">
</div>

				<!-- Start Advanced Gallery Html Containers -->
				<div id="gallery" class="cont">			
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
						<div id="caption" class="caption-container"></div>  
					</div>    
                      					
                   <div id="controls" class="controls"></div>	
                     <!--
					 <br>
					<div id="captionToggle">
						<a href="#toggleCaption" class="on" title="Show Caption">Monstrar Descripción</a>
					</div>   <br>
					-->
				</div>
				<div id="thumbs" class="navigation">
					<ul class="thumbs noscript">
						<li>
							<a class="thumb" name="pic1" href="images/photos/pic1.jpg" title="">
								<img src="images/thumbs/pic1thumb.png" alt="Title #0" />
							</a>
														<div class="caption">
                                                        
        <a href="#openModal1"><img src="images/imag/fullscreen.png"></a>
			
                                                        
							</div>
						</li>

						<li>
							<a class="thumb" name="pic2" href="images/photos/pic2.jpg" title="">
								<img src="images/thumbs/pic2thumb.png" alt="foto #1" />
							</a>
							<div class="caption"><a href="#openModal2"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" name="pic3" href="images/photos/pic3.jpg" title="">
								<img src="images/thumbs/pic3thumb.png" alt="foto #2" />
							</a>
							<div class="caption"><a href="#openModal3"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" name="pic4" href="images/photos/pic4.jpg" title="">
								<img src="images/thumbs/pic4thumb.png" alt="foto #3" />
							</a>
							<div class="caption"><a href="#openModal4"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" name="pic5" href="images/photos/pic5.jpg" title="">
								<img src="images/thumbs/pic5thumb.png" alt="foto #4" />
							</a>
							<div class="caption"><a href="#openModal5"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic6.jpg" title="">
								<img src="images/thumbs/pic6thumb.png" alt="foto #5" />
							</a>
							<div class="caption"><a href="#openModal6"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic7.jpg" title="">
								<img src="images/thumbs/pic7thumb.png" alt="foto #6" />
							</a>
							<div class="caption"><a href="#openModal7"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic8.jpg" title="">
								<img src="images/thumbs/pic8thumb.png" alt="foto #7" />
							</a>
							<div class="caption"><a href="#openModal8"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic9.jpg" title="">
								<img src="images/thumbs/pic9thumb.png" alt="foto #8" />
							</a>
							<div class="caption"><a href="#openModal9"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic10.jpg" title="">
								<img src="images/thumbs/pic10thumb.png" alt="foto #9" />
							</a>
							<div class="caption"><a href="#openModal10"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic11.jpg" title="">
								<img src="images/thumbs/pic11thumb.png" alt="foto #10" />
							</a>
							<div class="caption"><a href="#openModal11"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic12.jpg" title="">
								<img src="images/thumbs/pic12thumb.png" alt="foto #11" />
							</a>
							<div class="caption"><a href="#openModal12"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic13.jpg" title="">
								<img src="images/thumbs/pic13thumb.png" alt="foto #12" />
							</a>
							<div class="caption"><a href="#openModal13"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic14.jpg" title="">
								<img src="images/thumbs/pic14thumb.png" alt="foto #13" />
							</a>
							<div class="caption"><a href="#openModal14"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic15.jpg" title="">
								<img src="images/thumbs/pic15thumb.png" alt="foto #14" />
							</a>
							<div class="caption"><a href="#openModal15"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic16.jpg" title="">
								<img src="images/thumbs/pic16thumb.png" alt="foto #15" />
							</a>
							<div class="caption"><a href="#openModal16"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic17.jpg" title="">
								<img src="images/thumbs/pic17thumb.png" alt="foto #16" />
							</a>
						<div class="caption"><a href="#openModal17"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic18.jpg" title="">
								<img src="images/thumbs/pic18thumb.png" alt="foto #17" />
							</a>
					<div class="caption"><a href="#openModal18"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic19.jpg" title="">
								<img src="images/thumbs/pic19thumb.png" alt="foto #18" />
							</a>
						<div class="caption"><a href="#openModal19"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic20.jpg" title="">
								<img src="images/thumbs/pic20thumb.png" alt="foto #19" />
							</a>
						<div class="caption"><a href="#openModal20"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic21.jpg" title="">
								<img src="images/thumbs/pic21thumb.png" alt="foto #20" />
							</a>
						<div class="caption"><a href="#openModal21"><img src="images/imag/fullscreen.png"></a>
							</div>
						</li>


						
						
                        
						<!--<li>
							<a class="thumb" href="images/photos/pic22.jpg" title="Title #22">
								<img src="images/thumbs/pic22thumb.png" alt="Title #21" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2201/1502907190_7b4a2a0e34_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #21</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic23.jpg" title="Title #23">
								<img src="images/thumbs/pic23thumb.png" alt="Title #22" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm2.static.flickr.com/1116/1380178473_fc640e097a_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #22</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic24.jpg" title="Title #24">
								<img src="images/thumbs/pic24thumb.png" alt="Title #23" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm2.static.flickr.com/1260/930424599_e75865c0d6_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #23</div>
								<div class="image-desc">Description</div>
							</div>
						</li>
                        -->
                        
					</ul>
				</div>
				<!-- End Advanced Gallery Html Containers -->

				<!-- Add image link -->				


				<div style="clear: both;"></div>
                <div id="facelink" class="tit">
Para más fotos visite nuestra página de facebook <a href="http://www.facebook.com/missteriosbelleza?ref=ts" target="_blank"><img src="images/facebookicon.png" alt="visite nuestra pagina de facebook"></a>
</div>
			</div></div>
            
            </div>
            </li><!-- end box2 -->
            
            <li id="box3" class="box">
            	<a name="box3"></a>
                <div class="content"><div class="inner">      
                <div id="insidebox3">
                <div class="tit">
Contactanos
</div>
<div id="contactunder" class="under">
</div>
             <div id="formwrap">
             <div id="form">
             

<form action="salon.php#box3" method="POST">
    	
         <?php
	if (isset($_POST['name'], $_POST['mess'], $_POST['email']))	{
	  if(empty($nerror) && empty($eerror) && empty($merror)) {
		echo '         Su mensaje ha sido enviado!';
		
		$email_message = "Form details below.\n\n";
		
		function clean_string($string) {
	$bad = array("content-type","bcc:","to:","cc:","href");
	return str_replace($bad,"",$string);
	}
		
		$email_message .="Nombre de Cliente: ".clean_string($name)."\n";
		$email_message .="Email de Cliente: ".clean_string($email)."\n";
		$email_message .="Mensaje: ".clean_string($mess)."\n";
		
		$headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
		@mail($email_to,$email_subject,$email_message,$headers); ;
		}
    }
  ?>
      <div class="row">  Por favor introduzca su información personal: </div>
             <div class="row">    
             <div class="label">
			Nombre:
    		 </div> <!-- end label -->
    		<div class= "input">
    		<input id="fullname" type="text" name="name" class="detail"/>
    		</div> <!-- end input-->
            <div class= "context">
    		e.g. John Smith
    		</div> <!-- end context-->

<div class="error">
    <?php
	if (isset($_POST['name'], $_POST['mess'], $_POST['email']))	{
		if(!empty($nerror)){
echo($nerror);}
	}
  ?>
</div>
  </div> <!-- End of row-->
  
  			<div class="row">    
 			<div class="label">
    		Email: 
			</div> <!-- End label-->
			<div class="input">
  			<input id="email" type="text" name= "email" class="detail" />	
			</div><!-- end input -->
    		<div class="context">
    		e.g. nombre@dominio.com
    		</div><!-- end context-->

<div class="error">
       <?php
	if (isset($_POST['name'], $_POST['mess'], $_POST['email']))	{
		if(!empty($eerror)){
echo($eerror);}
	}
  ?>
</div>

  </div><!-- end row-->
  
	   	 	<div class="row"> 
            <div class="label">
    		Mensaje:     
			</div><!--end label--> 
			<div class="input">
  			<textarea name="mess" id="comment" class="mess"/></textarea>
			</div>
  
<div id="err">
  <?php
	if (isset($_POST['name'], $_POST['mess'], $_POST['email']))	{
		if(!empty($merror)){
echo "$merror";}
	}
  ?>
</div>
  
  </div><!--end row -->
  <div class= "submit">
    <p><input type="submit" value="Enviar" id="submit"/></p>
  </div><!-- End submit -->
</form>
</div> <!-- End of Form-->
</div> <!-- End of FormWrap-->
               </div><!-- End of InsideBox3-->
                
                </div><!-- End of Content-->
                </div><!-- End of Inner-->
            </li><!-- end box3 -->
            <li id="box4" class="box">
            	<a name="box4"></a>
                <div class="content"><div class="inner">
                 <div class="tit" id="producttitle">
					Productos
				 </div>
                <div id="productunder" class="under">
				</div>
                <!-- TESTING! -->
                
                <div id="insideinboxcono5" class="whitetext">
                   <div id="content_5" class="contenido">
<h4>Vendemos las mejores marcas de  productos del mercado como:</h4>
<ul class="stufflist">		
<li>Wella</li>
<li>Sebastian</li>
<li>Keratina-O</li>
<li>Tec Italy  </li>
<li>Tiggi</li>
<li>Macadami</li>
<li>Bed Head</li>
<li>Rigenol</li>
<li id="specialstuff">Bosley (productos de caída de cabello)</li>
<li id="specialstuff">Tratamientos Capilar (Prismax-Botox)</li>
</ul>


                    </div>
                 </div>
                 
                 
                 <!-- END TESTING -->
                
                </div></div>
            </li><!-- end box4 -->
            
              <li id="box5" class="box">
            	<a name="box5"></a>
                <div class="content"><div class="inner">
                <div class="tit" id="estetit">
					Estetica
				</div>
                <div id="esteunder" class="under">
				</div>
                <div class="inbox">
                    <div class="insideinbox2">
                    <img src="images/imag/este1.jpg" alt="estetica" id="estepic"> 
                    </div>
                    <div class="insideinbox1">
                   <div id="content_1" class="contenido">
                   <p><h4>Estética: </h4>
				Contamos con dos cabinas en donde le ofrecemos los siguientes servicios: faciales,  masajes reductor y relajante y toda clase de tratamiento  y depilación facial y corporal.
</p><br>
<p><h4>Cabina de depilación:</h4>
Contamos con una cabina especial para depilación facial y corporal.
</p>
                    </div>
                    </div>
                 </div>
               
                 </div></div>
            </li><!-- end box5 -->
            
              <li id="box6" class="box">
            	<a name="box6"></a>
                <div class="content"><div class="inner">
               
               
               
<!---CONTAINER 1---->





	<div class="covertor">
		
 		<div class="specialcontent" id="pelu">
			<div id="conounder" class="under" ></div><p>En nuestra peluquería contamos con las siguientes áreas:</p>
<br>
<p>
<h4>Área exclusiva para niños:</h4>
Esta área esta acondicionada especialmente para niños, Y  con personal capacitado con experiencia  y paciencia para su atención. Contamos con juguetes y televisor  para su entretenimiento y un premio sorpresa. Les damos los siguientes servicios. Cortes, peinados, champú, tratamientos, manicure y pedicure.</p>
<br>
<p>
<h4>Área de caballero: </h4>
Contamos con barberos y peluqueros  especialista en atención de caballeros: tenemos los siguientes servicios: cortes, tintes, texturizados, tratamientos relajantes para el cabello, arreglo de barba, manicure, pedicure, masajes relajantes y reductores y faciales.</p>
<br>
<p>
<h4>Área de damas: </h4>
				Estilistas y esteticista con capacidad para realzar la belleza de toda mujer: ofrecemos todo tipo de servicios para  su cabello y cuerpo.</p>

		</div>
        </div>
        
        <!---END OF CONTAINER 1---->
               
               
                 </div></div>
            </li><!-- end box6 -->
            
              <li id="box7" class="box">
            	<a name="box7"></a>
                <div class="content"><div class="inner">
                  <div class="tit">
					Personal
				 </div>
                <div id="persounder" class="under">
				</div>
                
                <!-- ALERT: TESTING AREA-->
                
                <div id="oneacc">
            <ol>
                <li>
                    <h2><span>Jorge Villalta</span></h2>
                    <div>
                        <accfigure>
                            <img src="img-demo/1.jpg" alt="image" />
                            <figcaption id="perso1"><h4> Jorge Villalta: </h4><br>
<p>
Profesional de la belleza nacional e internacional con experiencia de hace 20 años, siempre a la vanguardia.
</p></figcaption>
                        </accfigure>
                    </div>
                </li>
                <li>
                    <h2><span>Doris Cedeño</span></h2>
                    <div>
                        <accfigure>
                            <img src="img-demo/2.jpg" alt="image" />
                            <figcaption id="perso2"><h4> Doris Cedeño </h4><br>
<p>
A partir del 2005 empecé a laborar en Miss Terios, soy graduanda del <em>Cristine Valmy</em>, obteniendo el título de cosmetóloga y esteticista.
</p></figcaption>
                        </accfigure>
                    </div>
                </li>
                <li>
                    <h2><span>Amparo Serna Velásquez</span></h2>
                    <div>
                        <accfigure>
                            <img src="img-demo/3.jpg" alt="image" />
                            <figcaption id="perso3"><h4> Amparo Serna Velásquez </h4><br>
<p>
Cuenta con más de 23 años de experiencia, estilista profesional, graduada el Cali, Colombia.
</p></figcaption>
                        </accfigure>
                    </div>
                </li>
                <li>
                    <h2><span>Juan Carlos</span></h2>
                    <div>
                        <accfigure>
                            <img src="img-demo/4.jpg" alt="image" />
                            <figcaption id="perso4"><h4> Juan Carlos </h4><br>
<p>
Cuenta con más de 15 años de experiencia. Especialista en corte de cabello de caballero  y niños. 
</p></figcaption>
                        </accfigure>
                    </div>
                </li>
                <li>
                    <h2><span>Freddy García</span></h2>
                    <div>
                        <accfigure>
                            <img src="img-demo/5.jpg" alt="image" />
                            <figcaption id="perso5"><h4> Freddy García </h4><br>
<p>Cuenta con más de 8 años de experiencia como estilista y especialista en maquillaje estudio en la academia PIAF de costa rica.
</p></figcaption>
                        </accfigure>
                    </div>
                </li>
                 <li>
                    <h2><span>Lisy</span></h2>
                    <div>
                        <accfigure>
                            <img src="img-demo/6.jpg" alt="image" />
                            <figcaption id="perso6"><h4> Lisy </h4><br>
<p>
Cuenta con 20 años de trayectoria profesional, disfruta mucho de lo que hace y se esfuerza por brindarles a sus clientes un servicio de calidad y su mejor sonrisa.
</p></figcaption>
                        </accfigure>
                    </div>
                </li>
                 <li>
                    <h2><span>Félix Escobar</span></h2>
                    <div>
                        <accfigure>
                            <img src="img-demo/7.jpg" alt="image" />
                            <figcaption id="perso7"><h4> Félix Escobar </h4><br>
<p>
Cuenta con más de 25 años de experiencia. A partir del 2004 inicio en el salón de belleza Miss Terios como peluquero en general con especialización en corte de caballero. 
</p></figcaption>
                        </accfigure>
                    </div>
                </li>
                 <li>
                    <h2><span>Assan</span></h2>
                    <div>
                        <accfigure>
                            <img src="img-demo/8.jpg" alt="image" />
                            <figcaption id="perso8"><h4>Assan</h4><br>
<p>
Cuenta con más de 20 años de experiencia, trabajo en varias peluquerías reconocidas en panamá, a partir del 2006, a partir del 2006 inicio con nosotros, desempeñándose como peluquero especialista en caballero.

</p></figcaption>
                        </accfigure>
                    </div>
                </li>
                 <li >
                    <h2><span>Clarissa Jiménez</span></h2>
                    <div>
                        <accfigure>
                            <img src="img-demo/9.jpg" alt="image" />
                            <figcaption id="perso9">
 <h4>Clarissa Jiménez</h4><br>
<p>
 Empezó a laborar con nosotros 2007, como peluquera su especialidad son los recogidos. A tomado una serie de seminario para perfeccionar su estilo.</p>
</figcaption>
                        </accfigure>
                    </div>
                </li>
            </ol>
          
        </div>

       

       
        <!-- liteAccordion demos, social & analytics -->
        <script>
            (function($, d) {
                // please don't copy and paste this page
                // it breaks my analytics!
                
                // demos
                $('#oneacc').liteAccordion({
                        onTriggerSlide : function() {
                            this.find('figcaption').fadeOut();
                        },
                        onSlideAnimComplete : function() {    
                            this.find('figcaption').fadeIn();
                        },
                        autoPlay : false,
                        pauseOnHover : false,
                        theme : 'stitch',
                        rounded : true,
                        enumerateSlides : false                  
                }).find('figcaption:first').show();
              
                // social links
                var js, id = 'facebook-jssdk'; 

                if (d.getElementById(id)) return;

                js = d.createElement('script'); 
                js.id = id; 
                js.async = true;
                js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                d.getElementsByTagName('head')[0].appendChild(js);

                // Load Plus One Button
                jQuery.getScript('https://apis.google.com/js/plusone.js');
                // Load Tweet Button Script
                jQuery.getScript('https://platform.twitter.com/widgets.js');
                // Load LinkedIn button
                jQuery.getScript('https://platform.linkedin.com/in.js?v=2');                
            })(jQuery, document);

            // analytics
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-17442910-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
                
                <!-- END TESTING AREA -->
                 </div></div>
            </li><!-- end box7 -->
            
              <li id="box8" class="box">
            	<a name="box8"></a>
                <div class="content"><div class="inner">
       			 <div class="tit">
					Cafetería 
				 </div>            
                <div id="cafeunder" class="under">
				</div>
                <!-- TESTING -->
                  <div id="insideinboxcono3" class="whitetext">
                   <div id="content_3" class="contenido">
                   
          	
            
                 
<div id="conounder" class="under" ></div><p>Contamos con una acogedora área de cafetería, en donde tenemos menú diario de comida criolla para el almuerzo, adema de los servicios especiales de  una cafetería.<br>
</p>
<a href="#openModal22" class="menulink">Menú</a>
							
              </div>
                 </div>
                <!-- END TESTING -->
                 </div></div>
            </li><!-- end box8 -->
            
            <li id="box9" class="box">
            	<a name="box9"></a>
                <div class="content"><div class="inner">

                    <div id="insideinboxcono" >
                   
                   
                   
<!---CONTAINER 2---->
        <div class="covertor" style='overflow:hidden'>
		<div  id="cono" style='overflow:scroll'>
					<p class="conointi">Conócenos</p><br>

                    <img src="images/imag/fotogroup.jpg" name="conoimag" id="conoimag">
<div id="conounder" class="under"></div><p>Atendemos a bebes desde 6 meses en adelante, contamos tanto con peluqueros para las damas, como barberos para los caballeros.
Estamos en constante mejoría y crecimiento, manteniendo a nuestro personal a la vanguardia con las últimas técnicas mediante seminarios de actualización. Todo para brindarle siempre lo mejor dándoles una gama de alternativos para lograr nuestro objetivo principal que es realzar su belleza. Y así dar satisfacción a nuestra distinguida clientela que crece día a día.
Gracias por preferirnos. Nuestra misión es:
</p><br>

<blockquote>"Suministrar productos y servicios que mejoren todos los aspectos del cuerpo, desde las uñas, piel y cabello a precios competitivos y dando a los clientes un alto nivel de satisfacción."</blockquote>
<br>
<p class="conointi">Historia</p>
<p>
El salón de belleza MISS TERIOS, abrió sus puertas el 1 de julio de 2000.  Iniciamos únicamente como salón de belleza y además una boutique de ropa para mujeres en el local 17 de Galerías Obarrio. Al cabo de 3 años, decidimos hacer un cambio y nos mudamos al local 7 para tener mayor exposición a la entrada principal de la galería y vista a la Vía España.  Cambiamos de ser Sala de Belleza y Boutique a Sala de Belleza, Estética, Cafetería y decidimos innovar creando un área exclusiva para niños.
Este cambio ha sido muy favorable ya que fuimos uno de los pioneros con área de niños, la cual se ha convertido en uno de nuestros mayores atractivos.  
Además ofreciendo ahora área de cafetería para mayor comodidad de nuestros clientes.
</p>
<p>
Nuestro lema principal es “Todo para realzar una belleza integral”
Somos un equipo de trabajo de profesionales, muchos con más de 20 años de experiencia en el servicio de la belleza, que se han dedicado a proporcionar un servicio de alta calidad a nuestra exclusiva clientela, tratando siempre con productos de última tecnología y brindando un ambiente de familiaridad, en donde cada uno de nuestros clientes se sienten como en casa.
</p>
<p>
Creemos en que cada persona tiene su belleza propia y complementamos está dándole los mejores consejos para sacarle más provecho y cuidado en todos los aspectos.  La belleza fortalece la confianza, y brinda innumerables beneficios que se reflejan en todos los aspectos de nuestras vidas.
</p>

		</div>
        
        
        
        
	</div>
    
    <!---END CONTAINER 2---->

                   
           <!---CONTAINER BACKWORK---->
	<!-- <script src="jquery/jquery.min.js"></script> --> <!--Line to be repair -->
	<script>!window.jQuery && document.write(unescape('%3Cscript src="jquery/jquery-1.7.2.min.js"%3E%3C/script%3E'))</script>
	<script src="jquery/jquery-ui.min.2.js"></script>
	<script>!window.jQuery.ui && document.write(unescape('%3Cscript src="jquery/jquery-ui-1.8.21.custom.min.js"%3E%3C/script%3E'))</script>
	<!-- mousewheel plugin -->
	<script src="jquery/jquery.mousewheel.min.js"></script>
	<!-- custom scrollbars plugin -->
	<script src="jquery/jquery.mCustomScrollbar.js"></script>
	<script>
		(function($){
			$(window).load(function(){
				$(".specialcontent").mCustomScrollbar();
			});
		})(jQuery);
	</script>
    <!---END CONTAINER BACKWORK---->     
                 
                 
                 
                 </div></div>
            </li><!-- end box8 -->
    <li id="box10" class="box">
        <a name="box10"></a>
                <div class="content">
                	<div>
               <!--   
               MAP TITLE AND UNDERLINE TAKED OUT
                <div class="tit">
					Mapa
				 </div>    
                 <div id="mapaunder" class="under">
				</div> 
                   -->
                    <div id="insideinbox102">
                    <!-- Map -->
                    <div id="map_canvas"></div>
                    </div>
                	</div>
                </div>
            </li>
         
        </ul><!-- end mask -->
    </div><!-- end wrapper -->
   
    
</body>
</html>
