<?php

if (isset($_POST['name'], $_POST['mess'], $_POST['email']))	{
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
	<title>Miss Terios</title>
    <!-- style sheet link -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/galleriffic-4.css" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    
    <!-- Web font link -->
<link href='http://fonts.googleapis.com/css?family=Simonetta' rel='stylesheet' type='text/css'>
<link href="css/contactform.css" rel="stylesheet" type="text/css">
    
    <!-- JQuery link -->
    <script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
    
    <!-- Scrolling plugin link -->
    
    <script type="text/javascript" src="http://flesler-plugins.googlecode.com/files/jquery.scrollTo-1.4.2-min.js"></script>
    

     <!-- gallery plugins -->
		<script type="text/javascript" src="jquery/jquery.history.js"></script>
		<script type="text/javascript" src="jquery/jquery.galleriffic.js"></script>
		<script type="text/javascript" src="jquery/jquery.opacityrollover.js"></script>
    
    
		<!-- For the gallery:
         We only want the thunbnails to display when javascript is disabled -->
		<script type="text/javascript">
			document.write('<style>.noscript { display: none; }</style>');
		</script>
    
    
    <script type="text/javascript">
	
    <!-- for mobile devices -->
	if(window.innerWidth<800)
{
	window.location="mobile.html"
	}
	
	
	<!-- Scrolling content -->
	$(document).ready(function() {  
		$('a.link').click(function () {  
			$('#wrapper').scrollTo($(this).attr('href'), 800);
			
			$('a.link').removeClass('selected');  
			$(this).addClass('selected');
			return false;  
		});  
	});
	function setPosition(check, div, p1, p2, p3, p4) {
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
	else
		{
			$(div).scrollTo(p4, 800);
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
				var captionOpacity = 0.0;
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
					numThumbs:                 12,
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
					playLinkText:              'Reproducir',
					pauseLinkText:             'Pausar    ',
					prevLinkText:              '&lsaquo; Anterior',
					nextLinkText:              'Siguiente &rsaquo;',
					nextPageLinkText:          'Siguiente &rsaquo;',
					prevPageLinkText:          '&lsaquo; Anterior',
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

</head>

<body>

<div id="header">
</div><!-- end header -->

<div id="navigation">
<div id="bar">
    	<ul id="menu">
       	  <li><a href="#box1" class="link">HOME</a></li>
            <li><a href="#box2" class="link">BOX 2</a></li>
            <li><a href="#box3" class="link">BOX 3</a></li>
            <li><a href="#box4" class="link">B0X 4</a></li>
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
                  <div id="insidebox1"><p>Nuestra Página se encuentra en construcción... Por favor regrese luego.</p>
                  <p>Tel. 214-3686/85</p>
                  <p>correo: salonmissterios@gmail.com</p>
                  <p>Galerias Obarrio local #7 a lado de EPago y MOVICELL, Panamá</p>
                  <p>&nbsp;</p>
                  <a href="http://www.facebook.com/missteriosbelleza?ref=ts" target="_blank"><img src="images/facebookicon.png" width="60" height="60" alt="visite nuestra pagina de facebook"></a>
                  </div>
                   </div></div>
            </li><!-- end box1 -->
            
            <li id="box2" class="box">
            	<a name="box2"></a>
<div class="content"><div class="inner"> 
<div id="container">

<div id="gallerytit" class="tit">
Gallery
</div>
<div id="galleryunder" class="under">
</div>

				<!-- Start Advanced Gallery Html Containers -->
				<div id="gallery" class="cont">			
					<div class="slideshow-container">
						<div id="loading" class="loader"></div>
						<div id="slideshow" class="slideshow"></div>
					<!--	<div id="caption" class="caption-container"></div>   -->
					</div>    
                      					
                    <div id="controls" class="controls"></div>	
                    
					<!-- <div id="captionToggle">
						<a href="#toggleCaption" class="off" title="Show Caption">Monstrar Descripción</a>
					</div>   -->
				</div>
				<div id="thumbs" class="navigation">
					<ul class="thumbs noscript">
						<li>
							<a class="thumb" name="pic1" href="images/photos/pic1.jpg" title="Title #1">
								<img src="images/thumbs/pic1thumb.png" alt="Title #0" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #0</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" name="pic2" href="images/photos/pic2.jpg" title="Title #2">
								<img src="http://farm3.static.flickr.com/2404/2538171134_2f77bc00d9_s.jpg" alt="Title #1" />
							</a>
							<div class="caption">
								Any html can be placed here ...
							</div>
						</li>

						<li>
							<a class="thumb" name="pic3" href="images/photos/pic3.jpg" title="Title #3">
								<img src="http://farm3.static.flickr.com/2093/2538168854_f75e408156_s.jpg" alt="Title #2" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2093/2538168854_f75e408156_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #3</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" name="pic4" href="images/photos/pic4.jpg" title="Title #4">
								<img src="http://farm4.static.flickr.com/3153/2538167690_c812461b7b_s.jpg" alt="Title #3" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm4.static.flickr.com/3153/2538167690_c812461b7b_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #4</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" name="pic5" href="images/photos/pic5.jpg" title="Title #5">
								<img src="http://farm4.static.flickr.com/3150/2538167224_0a6075dd18_s.jpg" alt="Title #4" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm4.static.flickr.com/3150/2538167224_0a6075dd18_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #5</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic6.jpg" title="Title #6">
								<img src="http://farm4.static.flickr.com/3204/2537348699_bfd38bd9fd_s.jpg" alt="Title #5" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm4.static.flickr.com/3204/2537348699_bfd38bd9fd_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #6</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic6.jpg" title="Title #6">
								<img src="http://farm4.static.flickr.com/3124/2538164582_b9d18f9d1b_s.jpg" alt="Title #6" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm4.static.flickr.com/3124/2538164582_b9d18f9d1b_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #6</div>
								<div class="image-desc">Description</div>
							</div>
                            
						</li>

						<li>
							<a class="thumb" href="images/photos/pic7.jpg" title="Title #7">
								<img src="http://farm4.static.flickr.com/3205/2538164270_4369bbdd23_s.jpg" alt="Title #7" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm4.static.flickr.com/3205/2538164270_c7d1646ecf_o.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #7</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic8.jpg" title="Title #8">
								<img src="http://farm4.static.flickr.com/3211/2538163540_c2026243d2_s.jpg" alt="Title #8" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm4.static.flickr.com/3211/2538163540_c2026243d2_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #8</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic9.jpg" title="Title #9">
								<img src="http://farm3.static.flickr.com/2315/2537343449_f933be8036_s.jpg" alt="Title #9" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2315/2537343449_f933be8036_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #9</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic10.jpg" title="Title #10">
								<img src="http://farm3.static.flickr.com/2167/2082738157_436d1eb280_s.jpg" alt="Title #10" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2167/2082738157_436d1eb280_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #10</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic11.jpg" title="Title #11">
								<img src="http://farm3.static.flickr.com/2342/2083508720_fa906f685e_s.jpg" alt="Title #11" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2342/2083508720_fa906f685e_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #11</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic12.jpg" title="Title #12">
								<img src="http://farm3.static.flickr.com/2132/2082721339_4b06f6abba_s.jpg" alt="Title #12" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2132/2082721339_4b06f6abba_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #12</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic13.jpg" title="Title #13">
								<img src="http://farm3.static.flickr.com/2139/2083503622_5b17f16a60_s.jpg" alt="Title #13" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2139/2083503622_5b17f16a60_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #13</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic14.jpg" title="Title #14">
								<img src="http://farm3.static.flickr.com/2041/2083498578_114e117aab_s.jpg" alt="Title #14" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2041/2083498578_114e117aab_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #14</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic15.jpg" title="Title #15">
								<img src="http://farm3.static.flickr.com/2149/2082705341_afcdda0663_s.jpg" alt="Title #15" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2149/2082705341_afcdda0663_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #15</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic16.jpg" title="Title #16">
								<img src="http://farm3.static.flickr.com/2014/2083478274_26775114dc_s.jpg" alt="Title #16" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2014/2083478274_26775114dc_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #16</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic17.jpg" title="Title #17">
								<img src="http://farm3.static.flickr.com/2194/2083464534_122e849241_s.jpg" alt="Title #17" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2194/2083464534_122e849241_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #17</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic18.jpg" title="Title #18">
								<img src="http://farm4.static.flickr.com/3127/2538173236_b704e7622e_s.jpg" alt="Title #18" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm4.static.flickr.com/3127/2538173236_b704e7622e_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #18</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic19.jpg" title="Title #19">
								<img src="http://farm3.static.flickr.com/2375/2538172432_3343a47341_s.jpg" alt="Title #19" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2375/2538172432_3343a47341_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #19</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic20.jpg" title="Title #20">
								<img src="http://farm3.static.flickr.com/2353/2083476642_d00372b96f_s.jpg" alt="Title #20" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm3.static.flickr.com/2353/2083476642_d00372b96f_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #20</div>
								<div class="image-desc">Description</div>
							</div>
						</li>

						<li>
							<a class="thumb" href="images/photos/pic21.jpg" title="Title #21">
								<img src="http://farm3.static.flickr.com/2201/1502907190_7b4a2a0e34_s.jpg" alt="Title #21" />
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
							<a class="thumb" href="images/photos/pic22.jpg" title="Title #22">
								<img src="http://farm2.static.flickr.com/1116/1380178473_fc640e097a_s.jpg" alt="Title #22" />
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
							<a class="thumb" href="images/photos/pic23.jpg" title="Title #23">
								<img src="http://farm2.static.flickr.com/1260/930424599_e75865c0d6_s.jpg" alt="Title #23" />
							</a>
							<div class="caption">
								<div class="download">
									<a href="http://farm2.static.flickr.com/1260/930424599_e75865c0d6_b.jpg">Download Original</a>
								</div>
								<div class="image-title">Title #23</div>
								<div class="image-desc">Description</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- End Advanced Gallery Html Containers -->

				<!-- Add image link -->				


				<div style="clear: both;"></div>
			</div></div>
            
            </div>
            </li><!-- end box2 -->
            
            <li id="box3" class="box">
            	<a name="box3"></a>
                <div class="content"><div class="inner">      
                <div id="insidebox3">
                <div id="contacttit" class="tit">
Gallery
</div>
<div id="contactunder" class="under">
</div>
             <div id="formwrap">
             <div id="form">
             

<form action="salon.php#box3" method="POST">
    	
         <?php
	if (isset($_POST['name'], $_POST['mess'], $_POST['email']))	{
	  if(empty($nerror) && empty($eerror) && empty($merror)) {
		echo 'Su mensaje a sido enviado!';
		}
    }
  ?>
  <br />
      <div class="row">  Por favor introdusca su información: </div>
             <div class="row">    
             <div class="label">
			Nombre:
    		 </div> <!-- end label -->
    		<div class= "input">
    		<input id="fullname" type="text" name="name" class="detail" />
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
                <div class="content"><div class="inner">Box 4</div></div>
            </li><!-- end box4 -->
        </ul><!-- end mask -->
    </div><!-- end wrapper -->
</body>
</html>
