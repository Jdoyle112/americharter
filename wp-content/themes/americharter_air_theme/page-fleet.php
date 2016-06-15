<?php get_header();?>

<header class="header-page fleet">
  <img src="<?php bloginfo('template_url');?>/img/temp/bg-header-fleet.jpg" height="438" width="1919"  data-parallax='{"y": 230}' >
  <div class="box-opacity">
    <div class="container">
      <h1><?php the_title();?></h1>
    </div>
  </div>
</header>

<section class="section-fleet clearfix">
  <div class="container">
    
    <!-- <ul class="nav-list-flets">
      <li class="active"> Airliners </li>
      <li> Heavy Jets </li>
      <li> Helicopters </li>
      <li> Light Jets </li>
      <li> Medium Jets </li>
      <li> Turbo Props </li>                                                    
    </ul> -->

    <ul class="nav-list-flets">
      <li class="active"> Heavy Jets </li>
      <li> Medium Jets </li>
      <li> Light Jets </li>
      <li> Turbo Props </li> 
      <li> Helicopters </li>     
      <li> Airliners </li>                                              
    </ul>

    <ul class="content-list-fleets clearfix">

<li class="fleets">
        <ul class="list-fleet">
          <?php query_posts('post_type=fleet&cat=3&showposts=-1&order=ASC'); if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="single-fleet">
            <div class="widget-imgs">
              <figure>
                <?php 
                  $value = get_field( "picture_large_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_01');?>" width="600" height="425">
                <? }; ?>
                
                <?php 
                  $value = get_field( "picture_large_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_02');?>" width="600" height="425">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_large_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_03');?>" width="600" height="425">
                <? }; ?>

              </figure>
              <div class="thumbs">
                <?php 
                  $value = get_field( "picture_thumb_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_01');?>" width="190" height="135">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_thumb_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_02');?>" width="190" height="135">
                <? }; ?>
                <?php 
                  $value = get_field( "picture_thumb_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_03');?>" width="190" height="135">
                <? }; ?>
              </div>
            </div>
            
            <div class="info-fleets">
              <h2><?php the_title();?> </h2>
              <?php the_content();?>
            </div>

          </li>
          <?php endwhile; endif; wp_reset_query();?>

        </ul>
      </li>

<li class="fleets">
        <ul class="list-fleet">
          
          <?php query_posts('post_type=fleet&cat=6&showposts=-1&order=ASC'); if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="single-fleet">
            <div class="widget-imgs">
              <figure>
                <?php 
                  $value = get_field( "picture_large_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_01');?>" width="600" height="425">
                <? }; ?>
                
                <?php 
                  $value = get_field( "picture_large_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_02');?>" width="600" height="425">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_large_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_03');?>" width="600" height="425">
                <? }; ?>

              </figure>
              <div class="thumbs">
                <?php 
                  $value = get_field( "picture_thumb_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_01');?>" width="190" height="135">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_thumb_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_02');?>" width="190" height="135">
                <? }; ?>
                <?php 
                  $value = get_field( "picture_thumb_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_03');?>" width="190" height="135">
                <? }; ?>
              </div>
            </div>
            
            <div class="info-fleets">
              <h2><?php the_title();?> </h2>
              <?php the_content();?>
            </div>

          </li>
          <?php endwhile; endif; wp_reset_query();?>

        </ul>
      </li>

<li class="fleets">
        <ul class="list-fleet">
          
          <?php query_posts('post_type=fleet&cat=5&showposts=-1&order=ASC'); if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="single-fleet">
            <div class="widget-imgs">
              <figure>
                <?php 
                  $value = get_field( "picture_large_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_01');?>" width="600" height="425">
                <? }; ?>
                
                <?php 
                  $value = get_field( "picture_large_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_02');?>" width="600" height="425">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_large_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_03');?>" width="600" height="425">
                <? }; ?>

              </figure>
              <div class="thumbs">
                <?php 
                  $value = get_field( "picture_thumb_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_01');?>" width="190" height="135">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_thumb_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_02');?>" width="190" height="135">
                <? }; ?>
                <?php 
                  $value = get_field( "picture_thumb_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_03');?>" width="190" height="135">
                <? }; ?>
              </div>
            </div>
            
            <div class="info-fleets">
              <h2><?php the_title();?> </h2>
              <?php the_content();?>
            </div>

          </li>
          <?php endwhile; endif; wp_reset_query();?>

        </ul>
      </li>
        
<li class="fleets">
        <ul class="list-fleet">
          
          <?php query_posts('post_type=fleet&cat=7&showposts=-1&order=ASC'); if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="single-fleet">
            <div class="widget-imgs">
              <figure>
                <?php 
                  $value = get_field( "picture_large_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_01');?>" width="600" height="425">
                <? }; ?>
                
                <?php 
                  $value = get_field( "picture_large_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_02');?>" width="600" height="425">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_large_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_03');?>" width="600" height="425">
                <? }; ?>

              </figure>
              <div class="thumbs">
                <?php 
                  $value = get_field( "picture_thumb_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_01');?>" width="190" height="135">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_thumb_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_02');?>" width="190" height="135">
                <? }; ?>
                <?php 
                  $value = get_field( "picture_thumb_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_03');?>" width="190" height="135">
                <? }; ?>
              </div>
            </div>
            
            <div class="info-fleets">
              <h2><?php the_title();?> </h2>
              <?php the_content();?>
            </div>

          </li>
          <?php endwhile; endif; wp_reset_query();?>

        </ul>
      </li>

      
    
      <li class="fleets">
        <ul class="list-fleet">
          
          <?php query_posts('post_type=fleet&cat=4&showposts=-1&order=ASC'); if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="single-fleet">
            <div class="widget-imgs">
              <figure>
                <?php 
                  $value = get_field( "picture_large_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_01');?>" width="600" height="425">
                <? }; ?>
                
                <?php 
                  $value = get_field( "picture_large_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_02');?>" width="600" height="425">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_large_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_03');?>" width="600" height="425">
                <? }; ?>

              </figure>
              <div class="thumbs">
                <?php 
                  $value = get_field( "picture_thumb_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_01');?>" width="190" height="135">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_thumb_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_02');?>" width="190" height="135">
                <? }; ?>
                <?php 
                  $value = get_field( "picture_thumb_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_03');?>" width="190" height="135">
                <? }; ?>
              </div>
            </div>
            
            <div class="info-fleets">
              <h2><?php the_title();?> </h2>
              <?php the_content();?>
            </div>

          </li>
          <?php endwhile; endif; wp_reset_query();?>

        </ul>
      </li>
      
      <li class="fleets">
        <ul class="list-fleet">
          
          <?php query_posts('post_type=fleet&cat=2&showposts=-1&order=ASC'); if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="single-fleet">
            <div class="widget-imgs clearfix">
              <figure class="clearfix">
                <?php 
                  $value = get_field( "picture_large_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_01');?>" width="600" height="425">
                <? }; ?>
                
                <?php 
                  $value = get_field( "picture_large_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_02');?>" width="600" height="425">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_large_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_large_03');?>" width="600" height="425">
                <? }; ?>
                <div class="clear"></div>
              </figure>
              <div class="thumbs">
                <?php 
                  $value = get_field( "picture_thumb_01" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_01');?>" width="190" height="135">
                <? }; ?>

                <?php 
                  $value = get_field( "picture_thumb_02" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_02');?>" width="190" height="135">
                <? }; ?>
                <?php 
                  $value = get_field( "picture_thumb_03" );
                  if( $value ) { ?>
                    <img src="<?php the_field('picture_thumb_03');?>" width="190" height="135">
                <? }; ?>
              </div>
            </div>
            
            <div class="info-fleets">
              <h2><?php the_title();?> </h2>
              <?php the_content();?>
            </div>
          </li>
          <?php endwhile; endif; wp_reset_query();?>

        </ul>

      </li>
      
    </ul>
  </div>
<div class="contact-form clearfix">
<?php echo do_shortcode( '[contact-form-7 id="24" title="Contact form 1"]' ); ?>
</div>
</section>

<?php get_footer();?>
