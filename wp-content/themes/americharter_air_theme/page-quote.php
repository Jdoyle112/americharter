<?php get_header();?>
<style>

.section-quote { background-color: #252a2e !important; }
</style>
<header class="header-page quote">
<img src="<?php bloginfo('template_url');?>/img/temp/vip-service.jpg" height="438" width="1919" data-parallax='{"y": 230}' >
  <div class="box-opacity">
    <div class="container">
      <h1><?php the_title();?></h1>
    </div>
  </div>
</header>

<section class="section-quote clearfix">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
      <?php the_content();?>
    </article>
    <?php endwhile; endif; wp_reset_query(); ?>  
  </div>
</section>

<?php get_footer();?>