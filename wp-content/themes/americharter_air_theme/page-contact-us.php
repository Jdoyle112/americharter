<?php get_header();?>

<header class="header-page contact-us">
  <img src="<?php bloginfo('template_url');?>/img/temp/bg-header-contact-us.jpg" height="438" width="1919"  data-parallax='{"y": 230}' >
  <div class="box-opacity">
    <div class="container">
      <h1><?php the_title();?></h1>
    </div>
  </div>
</header>

<section class="section-contact-us clearfix">

  <div class="container">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <?php the_content();?>
      <?php echo do_shortcode( '[contact-form-7 id="24" title="Contact form 1"]' ); ?>
    </article>
    <?php endwhile; endif; wp_reset_query(); ?>  

  </div>
</section>

<?php get_footer();?>