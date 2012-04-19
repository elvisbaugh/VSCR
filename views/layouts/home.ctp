<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Integrated Sales &amp; Rental Ltd:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');

		//echo $scripts_for_layout;
	?>
</head>




<body>

  <div id="wrapper"> <!-- container -->
  
           <h1><?php echo $html->link($html->image('logo.gif', array('width' => 122, 'height' => 44, 'alt' => 'ISR Ltd')), '/', array('escape' => false)); ?></h1> <!--The Logo At The Top -->
          
              <!-- <div id="login"></div> -->
               
          <div id="topnav"> <!-- Controls The Home and Contact Hyperlink Styling -->
            <?php echo $html->link($html->image('header_nav_1.gif', array('width' => 50, 'height' => 44)), '/', array('escape' => false)); ?>	 <!--Direct To Home page -->
            <?php echo $html->link($html->image('header_nav_2.gif', array('width' => 53, 'height' => 44)), '/pages/contact', array('escape' => false)); ?>	<!--Direct To Contact page -->
          </div><!-- end topnav -->
           
          <?php echo $this->Html->image('big_photo.jpg', array('width' => 325, 'height' => 216, 'id' => 'bigphoto')); ?>			<!--Big Car Photo On Home Page -->
          
          
          <ul id="nav"> <!-- Controls The Menu Options-->
              <li><?php echo $html->link($html->image('car_menu.gif', array('width' => 162, 'height' => 22, 'alt' => 'car')), '/', array('escape' => false)); ?></li>		<!--Car Menu -->
              <li><?php echo $html->link($html->image('bike_menu.gif', array('width' => 162, 'height' => 22, 'alt' => 'bike')), '/', array('escape' => false)); ?></li>	<!--Bike Menu -->
              <li><?php echo $html->link($html->image('truck_menu.gif', array('width' => 162, 'height' => 22, 'alt' => 'truck')), '/', array('escape' => false)); ?></li>	<!--Truck Menu -->
              <li><?php echo $html->link($html->image('suv_menu.gif', array('width' => 162, 'height' => 22, 'alt' => 'suv')), '/', array('escape' => false)); ?></a></li>		<!--SUV Menu -->
              <li><?php echo $html->link($html->image('rental_menu.gif', array('width' => 162, 'height' => 22, 'alt' => 'rental')), '/', array('escape' => false)); ?></li><!--Rental Menu -->
              <li><?php echo $html->link($html->image('policies_menu.gif', array('width' => 162, 'height' => 22, 'alt' => 'policies')), '/', array('escape' => false)); ?></li><!--Policies Menu -->
          </ul>
          
         <h2><?php echo $this->Html->image('title_search.gif', array('width' => 325, 'height' => 24, 'alt' => 'search for your dream ride', 'id' => 'vehiclesearchtitle')); ?></h2> 
         <!-- Search Criteria-->
          
          <div id="leftcol">
              <div id="searchbox">
               		<?php echo $this->element('search_form'); ?>
                  
                  <div id="dbs">
                  <?php echo $this->Html->link('Check Inventory', '/customers', array('class' => 'buttonv-link')); ?>
                 </div>
                  
              </div><!-- end searchbox -->
              
              <div id="special">
                  <h2 class="topped"><?php echo $this->Html->image('title_special.gif', array('width' => 144, 'height' => 24, 'alt' => 'special offer: 30% off')); ?></h2>
                  
                  <?php echo $this->Html->image('cherry_qq.PNG', array('width' => 85, 'height' => 64, 'alt' => 'cherry qq', 'class' => 'left')); ?>
                  <p>This is a demo text. It will be replaced by the original. 
                     This is a demo text. It will be replaced by the original. This a demo text.</p>
                  <p class="readmore"><a href="http://hyperlink">Read More</a></p>
              </div><!-- end special -->
              
          </div><!-- end leftcol -->
          
          <h2>><?php echo $this->Html->image('title_latest_news_and_event.gif', array('width' => 212, 'height' => 22, 'alt' => 'latest news and events', 'id' => 'titlelatest')); ?></h2>
          
          <div id="news">
              <h3>January 11, 2012</h3>
              <p>This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original.</p>
              <p class="readmore"><a href="http://hyperlink">Read More</a></p>

              <h3>January 12, 2012</h3>
              <p>This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original.</p>
              
              <?php echo $this->Html->image('buyer.PNG', array('width' => 178, 'height' => 100, 'alt' => 'buyer')); ?>
              <p>This is a demo text. It will be replaced by the original. This is a demo text. </p>
              <p class="readmore"><a href="http://hyperlink">Read More</a></p>
              
              <h3>January 11, 2012</h3>
              <p>This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original. This is a demo text. It will be replaced by the original.</p>
              <p class="readmore"><a href="http://hyperlink">Read More</a></p>
              
          </div><!-- end news -->
          
          <div id="vehicles">
          
              <div style="background-image: url(images/title_vehicle_1.gif)"> <!-- Showing Sample view of a SUV-->
              <?php echo $html->link($html->image('red_crv.PNG', array('width' => 122, 'height' => 82, 'alt' => 'red crv')), '/', array('escape' => false)); ?>
                <p class="gallery"><a href="http://hyperlink">Showroom</a></p> <!-- Takes the user to the showroom-->
                  <p class="buy"><a href="http://hyperlink">Buy Now</a></p> <!-- Take The user to the shopping cart-->
              </div><!-- end vehicles -->

              <div style="background-image: url(images/title_vehicle_2.gif)" class="topped"> <!-- Showing Sample view of a Bike-->
              <?php echo $html->link($html->image('red_bike.PNG', array('width' => 122, 'height' => 62, 'alt' => 'red bike')), '/', array('escape' => false)); ?>    
              <p class="gallery"><a href="http://hyperlink">Showroom</a></p> <!-- Takes the user to the showroom-->
                  <p class="buy"><a href="http://hyperlink">Buy Now</a></p>
              </div><!-- end vehicles -->

              <div style="background-image: url(images/title_vehicle_3.gif)" class="topped"> <!-- Showing Sample view of a Truck-->
              <?php echo $html->link($html->image('black_chev.PNG', array('width' => 122, 'height' => 82, 'alt' => 'black chev')), '/', array('escape' => false)); ?>   
              <p class="gallery"><a href="http://hyperlink">Showroom</a></p> <!-- Takes the user to the showroom-->
                  <p class="buy"><a href="http://hyperlink">Buy Now</a></p> <!-- Take The user to the shopping cart-->
              </div><!-- end vehicles -->

          </div><!-- end vehicles -->
          
          <div class="clear" id="footer">
              <p align="center">Powered by <a href="http://hyperlink">Elvis Baugh and Group </a></p>
          </div>
          
  </div><!-- end Container -->
</body>
</html>

