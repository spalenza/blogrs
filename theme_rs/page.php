<?php get_header(); ?>

<div id="container">
    <div id="posts">
        <?php if (have_posts ()) : while (have_posts ()) : the_post(); ?>

                <div id="page_bar" style="border-color: <?php echo $color_category; ?>">
                    <h1 id="page_title">
                <?php the_title() ?>
            </h1>
            <br/>

            <?php the_content(__('leia mais')) ?>
        </div>
        <?php endwhile;
            else : endif; ?>
        </div>

    <?php get_sidebar(); ?>

            <div class="clear"></div>
        </div>


<?php get_footer(); ?>