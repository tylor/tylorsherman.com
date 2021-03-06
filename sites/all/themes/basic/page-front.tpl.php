<?php // $Id: page.tpl.php,v 1.1.4.6 2009/03/19 23:49:01 couzinhub Exp $ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language->language ?>" lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">

<head>
  <title><?php echo $head_title; ?></title>
  <?php echo $head; ?>
  <!-- Checking the source, hmm? Yes, it's Drupal ;) -->
  <?php echo $styles; ?>
  <!--[if lte IE 6]>
  <style type="text/css" media="all">
    @import "<?php echo $base_path . path_to_theme() ?>/css/ie6.css";
  </style>
  <![endif]-->
  <!--[if IE 7]>
  <style type="text/css" media="all">
    @import "<?php echo $base_path . path_to_theme() ?>/css/ie7.css";
  </style>
  <![endif]-->
  <?php echo $scripts; ?>
</head>

<body class="<?php echo $body_classes; ?>">
  <div id="skip-nav"><a href="#content">Skip to Content</a></div>  
  <div id="page">
	
	<!-- ______________________ HEADER _______________________ -->
  
	<div id="header">
		
		<?php if($search_box): ?>
			<?php echo $search_box; ?>
		<?php endif; ?>
		
	  	<div id="logo-title">
        
        <div id="logo">
							<a href="<?php print $base_path; ?>" rel="home">Home</a>
					</div>
	  	
        <div id="name-and-slogan">
          <?php if (!empty($site_name)): ?>
            <h1 id="site-name">
              <a href="<?php echo $front_page ?>" title="<?php echo t('Home'); ?>" rel="home"><span><?php echo $site_name; ?></span></a>
            </h1>
          <?php endif; ?>

          <?php if (!empty($site_slogan)): ?>
            <div id="site-slogan"><?php echo $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /name-and-slogan -->
	  	
	  	</div> <!-- /logo-title -->
	  		  		
	  		<?php if ($header): ?>
	  		  <div id="header-region">
	  		    <?php echo $header; ?>
	  		  </div>
	  		<?php endif; ?>
	  		
	  		<?php if ($mission): ?>
					<div id="mission"><?php echo $mission; ?></div>
				<?php endif; ?>
	
    	</div> <!-- /header -->
    	<div id="get-social">
    		<ul>
    			<li><a href="http://twitter.com/tylorsherman" id="twitter">Twitter</a></li>
    			<li><a href="http://flickr.com/photos/runforcover" id="flickr">Flickr</a></li>
    			<li><a href="http://drupal.org/user/143420" id="drupal">Drupal</a></li>
    			<li><a href="http://facebook.com/tylor" id="facebook">Facebook</a></li>
    			<li><a href="http://del.icio.us/SAVshermanONA" id="delicious">Delicious</a></li>
    			<li><a href="http://www.last.fm/user/SAVshermanONA" id="lastfm">Last.fm</a></li>
    			<li><a href="http://qik.com/tylor" id="qik">Qik</a></li>
    			<li><a href="http://www.vimeo.com/tylor" id="vimeo">Vimeo</a></li>

    		</ul>
    	</div>

			<!-- ______________________ MAIN _______________________ -->
  	
    	<div id="main" class="clearfix">
		
	  			<div id="content">
						<div id="content-inner" class="inner column center">
              
  	  		  	<?php if ($content_top): ?>
								<div id="content-top">
									<?php echo $content_top; ?>
								</div>
							<?php endif; ?>

		        	<?php if ($breadcrumb || $title || $mission || $messages || $help || $tabs): ?>
		        	  <div id="content-header">
			
		        	    <?php echo $breadcrumb; ?>
		
		        	    <?php if ($title): ?>
		        	      <h1 class="title"><?php echo $title; ?></h1>
		        	    <?php endif; ?>
									
		        	    <?php echo $messages; ?>
		        	    
		        	    <?php echo $help; ?> 
		
		        	    <?php if ($tabs): ?>
		        	      <div class="tabs"><?php echo $tabs; ?></div>
		        	    <?php endif; ?>
				
		        	  </div> <!-- /#content-header -->
		        	<?php endif; ?>
            	
		        	<div id="content-area"> <!-- CONTENT AREA -->
		        	  <?php echo $content; ?>
		        	</div>
		
  	  		  	<?php echo $feed_icons; ?>

  	  		  	<?php if ($content_bottom): ?>
								<div id="content-bottom">
									<?php echo $content_bottom; ?>
								</div>
							<?php endif; ?>
	
  	  			</div>
					</div> <!-- /content-inner /content -->

  	  		<?php if ($left): ?> <!-- SIDEBAR LEFT -->
  	  		  <div id="sidebar-left" class="column sidebar left">
							<div id="sidebar-left-inner" class="inner">
							  <?php echo $left; ?>
							</div>
  	  		  </div>
  	  		<?php endif; ?> <!-- /sidebar-left -->
      		
  	  		<?php if ($right): ?> <!-- SIDEBAR RIGHT -->
  	  		  <div id="sidebar-right" class="column sidebar right">
							<div id="sidebar-right-inner" class="inner">
								<?php echo $right; ?>
							</div>
  	  		  </div>
  	  		<?php endif; ?> <!-- /sidebar-right -->
	  
  	</div> <!-- /main -->
  	
		<!-- ______________________ FOOTER _______________________ -->

    <?php if(!empty($footer_message) || !empty($footer_block)): ?>
  	  <div id="footer">
	      <?php echo $footer_message; ?>
	      <?php echo $footer_block; ?>
  	  </div> <!-- /footer -->
		<?php endif; ?>
		
  	<?php echo $closure; ?>
  </div> <!-- /page -->

</body>
</html>