<?php get_header();?>

<section class="slide-home">
  <ul class="bxslider">
  <?php query_posts('post_type=slide&showposts=4'); if (have_posts()) : ?>
  <?php $numero =0 ?>
  <?php while (have_posts()) : the_post(); ?>
  <?php $numero++ ;?>
    <li class="slide<?php echo $numero; ?> bgParallax" data-speed="1" style="background: url(<?php the_field('background_slide');?>) top center rgba(0, 0, 0, 0.5);"> 
      <div class="container">
        <h1><?php the_title();?></h1>
        <?php the_content();?>
      </div>
    </li>
  <?php endwhile; endif; wp_reset_query();?>
  </ul>

  <div id="bx-pager" class="bx-pager">
    <a data-slide-index="0" href=""><img src="<?php bloginfo('template_url');?>/img/svg/ico-slider-1.svg" /></a>
    <span> •••••••• </span>
    <a data-slide-index="1" href=""><img src="<?php bloginfo('template_url');?>/img/svg/ico-slider-2.svg" /></a>
    <span> •••••••• </span>
    <a data-slide-index="2" href=""><img src="<?php bloginfo('template_url');?>/img/svg/ico-slider-3.svg" /></a>
    <span> •••••••• </span>
    <a data-slide-index="3" href=""><img src="<?php bloginfo('template_url');?>/img/svg/ico-slider-4.svg" /></a>
  </div>
</section>

<section class="text-home">
  <div class="container">
  <?php query_posts('page_id=50'); if (have_posts()) : while(have_posts()) : the_post();?>
    <?php the_content();?>
  <?php endwhile; endif; wp_reset_query();?>
  </div>
</section>

<?php get_footer();?>