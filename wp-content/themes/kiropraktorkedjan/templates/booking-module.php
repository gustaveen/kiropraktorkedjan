<div class="feature-gallery city is_active" id="gbg">
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
        $image = get_sub_field('img');
        $baraboka_url = get_sub_field('booking_url');

        ?>
        
        <?php if( in_array( 'gbg', get_sub_field('city') ) )
          { ?>
            
              <ul>
                <li>
                  <div class="feature-gallery--item">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <h4 class="name"><?php print $name ?></h4>
                    <p class="title"><?php print $title ?></p>
                    <p class="phone"><i class="flaticon-phone72"></i><?php print $tel ?></p>
                    <p class="location"><i class="flaticon-location15"></i>Göteborg</p>
                    <p class="email"><i class="flaticon-mail22"></i><a href="mailto:<?php print $email; ?>"><?php print $email; ?></a></p>
                    <p class="cal"><i class="flaticon-simple18"></i>Mån - Fre</p>
                    <a href="<?php print $baraboka_url ?>" class="btn booking-btn">Boka behandling</a>
                  </div>
                </li>
              </ul>
            
    <?php }
       

    endwhile;
 
else :
 
    // no rows found
 
endif;
?>
</div>
  

<div class="feature-gallery city" id="sthlm">
<?php
// check if the repeater field has rows of data
$front_page = 2;
// check if the repeater field has rows of data
if( have_rows('booking', $front_page) ):

  // loop through the rows of data
    while ( have_rows('booking', $front_page) ) : the_row(); 
 
      // display a sub field value
      $name = get_sub_field('name');
      $title = get_sub_field('title');
      $email = get_sub_field('email');
      $tel = get_sub_field('tel');
      $image = get_sub_field('img');
      $baraboka_url = get_sub_field('booking_url');

      ?>
      
      <?php if( in_array( 'sthlm', get_sub_field('city') ) )
        { ?>
          
            <ul>
              <li>
                <div class="feature-gallery--item">
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                  <h4 class="name"><?php print $name ?></h4>
                  <p class="title"><?php print $title ?></p>
                  <p class="phone"><i class="flaticon-phone72"></i><?php print $tel ?></p>
                  <p class="location"><i class="flaticon-location15"></i>Stockholm</p>
                  <p class="email"><i class="flaticon-mail22"></i><a href="mailto:<?php print $email; ?>"><?php print $email; ?></a></p>
                  <p class="cal"><i class="flaticon-simple18"></i>Mån - Sön</p>
                  <a href="<?php print $baraboka_url ?>" class="btn booking-btn">Boka behandling</a>
                </div>
              </li>
            </ul>
          
  <?php }

  endwhile;
 
else :
 
    // no rows found
endif;
?>
</div>