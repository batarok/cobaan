<?php
/* index */
get_header(); //memanggil konten header.php ?>

<!-- content web -->
<div class="container">
    <div class="content">
        <div class="looposting">
            <?php if (have_posts()){
                //tampilkan daftar posting
                while(have_posts()){
                    the_post(); ?>
                    <div class="loop-post">
                        <div class="clear">
                            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="date"><span>Posting:</span> <?php echo get_the_date(); ?> </div>
                            <div class="clear"><?php echo the_category(''); ?></div>
                            <?php if (has_post_thumbnail()){
                            echo '<div class="post-thumb">';
                            the_post_thumbnail();
                            echo '</div>';
                            echo the_excerpt('');
                            } ?>
                        </div>
                    </div>
                <?php }
                //pagination post
                ?>
                <div class="pagination">
                    <div class="nav-prev"><?php previous_posts_link ( 'Newer posts' ); ?></div>
                    <div class="nav-next"><?php next_posts_link( 'Older posts' ); ?></div>
                </div>
                <?php
                }else {
                    echo 'Tidak menemukan posting';
            } ?>
        </div>
    </div>
    <div class="sidebars">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php
get_footer(); //memanggil footer.php
?>