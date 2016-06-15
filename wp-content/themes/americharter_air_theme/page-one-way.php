<?php get_header();?>

<header class="header-page one-way">
  <img src="<?php bloginfo('template_url');?>/img/temp/bg-header-one-way.jpg" height="438" width="1919"  data-parallax='{"y": 230}' >
  <div class="box-opacity">
    <div class="container">
      <h1><?php the_title();?></h1>
    </div>
  </div>
</header>

<section class="section-one-way clearfix">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <?php the_content();?>
    </article>
    <?php endwhile; endif; wp_reset_query(); ?>  
  </div>
</section>

<footer class="footer-one-way"></footer>

<?php get_footer();?>