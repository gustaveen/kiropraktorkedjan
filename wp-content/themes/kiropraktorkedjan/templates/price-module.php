

        <section class="price-table">

          <h3>Välj stad för att se aktuella priser</h3>
          
        <ul class="city-nav">
          <li><button class="btn btn-city btn-price aktiv" data-city="#gbg">Göteborg</button></li>
          <li><button class="btn btn-city btn-price" data-city="#sthlm">Stockholm</button></li>
        </ul>
        
        <div class="prices-wrap">  

        <div class="prices is_active" id="gbg">
        
        <?php


        // check if the repeater field has rows of data
        if( have_rows('price_category_gbg') ):

          // loop through the rows of data
            while ( have_rows('price_category_gbg') ) : the_row();
         
                // display a sub field value
                $title = get_sub_field('price_title');
                $price = get_sub_field('sek');
                $btn_text = get_sub_field('button_text');
                $info = array();
                 if( have_rows('info') ):

                  // loop through the rows of data
                    while ( have_rows('info') ) : the_row();
                    $info[]= get_sub_field('infofalt');

                    endwhile;
                    endif;
                    
                ?>




          <div class="price">
            <div class="wrap">
              <h4><?php print $title; ?><span class="pris"><?php print $price; ?><span class="kr">kr</span></span></h4>
              <ul>
                <?php
                  for ($i=0; $i <= 2; $i++) { 
                    print "<li>";
                      if(isset($info[$i])){
                        print $info[$i];
                      }
                    print "</li>";
                  }
                  ?>
                <li><a href="/boka-behandling/#gbg" class="btn booking-btn"><?php print $btn_text; ?></a></li>
              </ul>
            </div>
          </div>

          <?php 
          endwhile;
          else :
              // no rows found
          endif;
          ?>

        </div>


        <!-- </div> -->
    <!-- </div> -->
    <!-- END treatment-price -->

 
          

        <div class="prices" id="sthlm">

                <?php


        // check if the repeater field has rows of data
        if( have_rows('price_category_sthlm') ):

          // loop through the rows of data
            while ( have_rows('price_category_sthlm') ) : the_row();
         
                // display a sub field value
                $title = get_sub_field('price_title');
                $price = get_sub_field('sek');
                $btn_text = get_sub_field('button_text');
                $info = array();
                 if( have_rows('info') ):

                  // loop through the rows of data
                    while ( have_rows('info') ) : the_row();
                    $info[]= get_sub_field('infofalt');

                    endwhile;
                    endif;
                    
                ?>




          <div class="price">
            <div class="wrap">
              <h4><?php print $title; ?><span class="pris"><?php print $price; ?><span class="kr">kr</span></span></h4>
              <ul>
                <?php
                  for ($i=0; $i <= 1; $i++) { 
                    print "<li>";
                      if(isset($info[$i])){
                        print $info[$i];
                      }
                    print "</li>";
                  }
                  ?>
                <li><a href="/boka-behandling/#sthlm" class="btn booking-btn"><?php print $btn_text; ?></a></li>
              </ul>
            </div>
          </div>

          <?php 
          endwhile;
          else :
              // no rows found
          endif;
          ?>

        </div>

        

<!--           <div class="price">
            <div class="wrap">
              <h4>Rabatterad Behandling<span class="pris">450<span class="kr">kr</span></span></h4>
              <ul>
                <li>Pensionärer</li>
                <li></li>
                
                <li><a href="/#booking" class="btn booking-btn">Boka behandling</a></li>
              </ul>
            </div>
          </div>

          <div class="price popular">
            <div class="wrap">
              <h4>Ordinarie Behandling<span class="pris">550<span class="kr">kr</span></span></h4>
              <ul>
                <li><span>45 </span>minuter behandling</li>
                <li>Måndag - fredag</li>
                
                <li><a href="/#booking" class="btn booking-btn">Boka behandling</a></li>
              </ul>
            </div>
          </div>
          
          <div class="price">
            <div class="wrap">
              <h4>Behandling Helg<span class="pris">900<span class="kr">kr</span></span></h4>
              <ul>
                <li>Helger</li>
                <li>10.00 - 14.00</li>

                <li><a href="/#booking" class="btn booking-btn">Ring för jourtid</a></li>
              </ul>
            </div>
          </div> -->

        </div>

        </div>



        </section>

    <!-- END treatment-price -->