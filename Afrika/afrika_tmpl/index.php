﻿<?php /* no direct access */ defined( '_JEXEC' ) or die( 'Restricted access' ); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>"><head>    <jdoc:include type="head" /> <link rel="stylesheet" href="/templates/system/css/system.css" type="text/css" /> <link rel="stylesheet" href="/templates/system/css/general.css" type="text/css" />    <link href="templates/<?php echo $this->template ?>/css/template_css.css" rel="stylesheet" type="text/css" />	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>	<script type="text/javascript" src="jquery.js"></script>		<script type="text/javascript" src="jquery.pikachoose.4.0.2.js"></script>		<script type="text/javascript" src="jquery.jcarousel.min.js"></script>   <script  type="text/javascript">   $(document).ready(function(){ 	$('div.black_phone').mouseover(function(){		$(this).removeClass('black_phone');		$(this).addClass('color_phone');			});	$('div.black_phone').mouseout(function(){		$(this).removeClass('color_phone');		$(this).addClass('black_phone');			});});</script><script language="javascript">			<!--			$(document).ready(				function (){					$("#pikame").PikaChoose();					$("#pikame").jcarousel({scroll:4,											initCallback: function(carousel) 						{					        $(carousel.list).find('img').click(function() {					        	//console.log($(this).parents('.jcarousel-item').attr('jcarouselindex'));					            carousel.scroll(parseInt($(this).parents('.jcarousel-item').attr('jcarouselindex')));					        });					    }				    });				});							-->		</script>   </head><body>  <div class="body">		<div id="header">			<div id="logo"><img src="templates/<?php echo $this->template ?>images/logo.png"></div>			<div id="right">				<div class="black_phone">				<span style=" font-size: 30px;">					(473) 278-36-92				  </span>				</div>				<div id="about"><a href="1.html">ЕЩЕ КОНТАКТЫ</a></div>			</div>	    </div>		<div id="content">			<div id="list">				<jdoc:include type="modules" name="top1" />			</div>						<div id="top_pic">				<jdoc:include type="modules" name="top2" />			</div>			<div id="s_line"></div>			<div id="gallery">				<div class="pikachoose" style="margin: 28px auto; width:500px;">					<jdoc:include type="message" />      <jdoc:include type="component" />				</div>    </div>  </div>											</div>		<div id="fotter">			<div id="right_fot"><p>&copy; 2011  ООО "Африка-принт" <a   href="http://www.foursite.ru"/> Создание сайта</a></p></div>		</div>	</div>	<jdoc:include type="modules" name="debug" />	  </body></html> 