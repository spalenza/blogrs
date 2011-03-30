<?php get_header(); ?>

<div id="container">
    <div id="posts">
        <?php /*query_posts('showposts=5');*/ ?>
        <?php if (have_posts ()) : while (have_posts ()) : the_post(); ?>
        <?php
                $category = get_the_category($post->ID);
                $color_category = $category[0]->description;
                $name_category = $category[0]->name;
        ?>
                <img src="<?php bloginfo('template_url') ?>/img/calendar.png" />
                <span id="time"><?php the_time('d/m/y - G:i'); ?></span>
                <span id="name_category" style="color: <?php echo $color_category; ?>"><?php  echo $name_category; ?></span>
                <div id="single_post" style="border-color: <?php echo $color_category; ?>">
                    <h2>
                        <a style="color: <?php echo $color_category ?>" href="<?php the_Permalink(); ?>">
<?php the_title() ?>
                        </a>
                    </h2>


                    <div class="post_short">

                        <?php
                            $key = "imagem";
                            $url_img = get_post_meta($post->ID, $key, true);
                            if ($url_img) {
                        ?>
                        <a class="link_img_post" href="<?php the_Permalink(); ?>">
                            <img class="img_post"
                                 align="left" src="<?php echo get_option('home') . '/' . get_post_meta($post->ID, $key, true); ?>"/>
                        </a>
                        <?php } ?>


                        <?php
                            if(function_exists('the_excerpt_rereloaded'))
                            {
                                the_excerpt_rereloaded('50','','all');

                            } else {
                                    the_excerpt();
                            }?>
                        <div class="clear"></div>
                    </div>



        </div>
<?php endwhile;
            else : endif; ?>

        </div>



<?php get_sidebar(); ?>

        <div class="clear"></div>
         <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    </div>


<?php get_footer(); ?>
