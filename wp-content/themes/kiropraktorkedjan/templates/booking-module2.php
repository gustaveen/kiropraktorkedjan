
<div class="kriopraktorer-boka" id="gbg">
<?php

$front_page = 2;
// check if the repeater field has rows of data
if( have_rows('booking', $front_page) ):

  // loop through the rows of data
    while ( have_rows('booking', $front_page) ) : the_row();
 
        // display a sub field value
        $name = get_sub_field('name');
        $title = get_sub_field('title');
        $tel = get_sub_field('tel');
        $email = get_sub_field('email');
        $bookinginfo = get_sub_field('bookinginfo');


        ?>
        
        <?php if( in_array( 'gbg', get_sub_field('city') ) )
          { ?>
            
          
                  <div class="kiropraktor <?php print strtolower($name); ?>">
                    <div class="container">
                      <div class="info">
                        <h2 class="name"><?php print $name; ?></h4>
                        <p class="title"><?php print $title; ?></p>
                        <p class="info-boka"><?php print $bookinginfo; ?></p>
                        <div>
                          <p class="phone"><i class="flaticon-phone72"></i><?php print $tel; ?></p>
                          <p class="email"><i class="flaticon-mail22"></i><a data-email="<?php print $email; ?>" href="mailto:<?php print $email; ?>"><?php print $email; ?></a></p>
                          <p class="location"><i class="flaticon-location15"></i>Göteborg</p>
                        </div>
            
                     
                        <?php if( have_rows('clinics', $front_page) ): ?>
                        <?php while( have_rows('clinics', $front_page ) ): the_row(); ?>
                            <div class="booking-btns">
                              <a href="<?php the_sub_field('booking_url'); ?>" class="btn booking-btn"><?php the_sub_field('label_btn'); ?></a>
                              <p><?php the_sub_field('available_days'); ?></p>
                            </div>
                        <?php endwhile; 
                          endif;
                        ?>

                      </div>

                    </div>
                  </div>
            
    <?php }
       

    endwhile;
 
else :
 
    // no rows found
 
endif;
?>

</div>

<!-- <div class="test">
          <ul class="city-nav">
          <li><a href="#gbg" class="btn btn-city">Göteborg</a></li>
          <li><a href="#sthlm" class="btn btn-city aktiv">Stockholm</a></li>
        </ul>
</div> -->

<!-- Stockholm -->

<div class="kriopraktorer-boka" id="sthlm">
<?php

$front_page = 2;
// check if the repeater field has rows of data
if( have_rows('booking',$front_page) ):

  // loop through the rows of data
    while ( have_rows('booking', $front_page) ) : the_row();
 
        // display a sub field value
        $name = get_sub_field('name');
        $title = get_sub_field('title');
        $tel = get_sub_field('tel');
        $email = get_sub_field('email');
        $bookinginfo = get_sub_field('bookinginfo');
        //$clinic = 
        //$baraboka_url = get_sub_field('booking_url');

        ?>
        
        <?php if( in_array( 'sthlm', get_sub_field('city') ) )
          { ?>
            
          
                  <div class="kiropraktor <?php print strtolower($name); ?>">
                    <div class="container">
                      <div class="info">
                        <h2 class="name"><?php print $name; ?></h4>
                        <p class="title"><?php print $title; ?></p>
                        <p class="info-boka"><?php print $bookinginfo; ?></p>
                        <div>
                        <p class="phone"><i class="flaticon-phone72"></i><?php print $tel; ?></p>
                        <p class="email"><i class="flaticon-mail22"></i><a href="mailto:<?php print $email; ?>"><?php print $email; ?></a></p>
                        <p class="location"><i class="flaticon-location15"></i>Stockholm</p>
                        </div>
                        
                     
                        <?php if( have_rows('clinics', $front_page) ): ?>
                        <div class="booking-btns">
                        <?php while( have_rows('clinics', $front_page ) ): the_row(); ?>
                            
                              <a href="<?php the_sub_field('booking_url'); ?>" class="btn booking-btn"><?php the_sub_field('label_btn'); ?></a>
                              <p><?php the_sub_field('available_days'); ?></p>
                            
                        <?php endwhile; 
                          print "</div>";
                          endif;
                        ?>

                      </div>

                    </div>
                  </div>
            
    <?php }
       

    endwhile;
 
else :
 
    // no rows found
 
endif;
?>

</div>