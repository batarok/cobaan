<?php get_header(); ?>
<div class="container">
    <div class="content">
        <div class="single">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
       <h3 class="title">
       <?php the_title(); ?>
       </h3>
        <div class="date">
        <?php echo get_the_date(); ?>
        </div>
        <div class="impost">
        <?php the_post_thumbnail() ?>
        </div>
        <?php the_content(); ?>

        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</div>
<div class="sidebars">
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>