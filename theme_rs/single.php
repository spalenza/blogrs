<?php get_header(); ?>

<div id="container">
    <div id="posts">
        <?php if (have_posts ()) : while (have_posts ()) : the_post(); ?>
        <?php
                $category = get_the_category($post->ID);
                $color_category = $category[0]->description;
                $name_category = $category[0]->name;
        ?>
                <img src="<?php bloginfo('template_url') ?>/img/calendar.png" />
                <span id="time"><?php the_time('d/m/y - G:i'); ?></span>
                <span id="name_category" style="color: <?php echo $color_category; ?>"><?php echo $name_category; ?></span>
                <div id="star" style="float: right"></div>
                <div id="single_post" style="border-color: <?php echo $color_category; ?>">
                    <h2 style="color: <?php echo $color_category ?>">

                <?php the_title() ?>
            </h2>



            <!-- CITACAO -->
            <?php
                $key = "citacao";
                if (get_post_meta($post->ID, $key, true)) {
            ?>
                    <div id="quote">
                        <img id="aspas_1" src="<?php bloginfo('template_url') ?>/img/aspas_1.png" width="50px" height="50px"/>

                        <span>
                    <?php $key = "citacao";
                    echo get_post_meta($post->ID, $key, true); ?>
                </span>
                <img id="aspas_2" src="<?php bloginfo('template_url') ?>/img/aspas_2.png" width="50px" height="50px"/>
                <span id="autor">
                    <?php $key = "citacao_autor";
                    echo get_post_meta($post->ID, $key, true); ?>
                </span>
            </div>
            <?php } ?>




                <p><?php the_content(__('leia mais')) ?></p>
            </div>

        <?php
                $key = "fonte";
                $fonte = get_post_meta($post->ID, $key, true);
                if ($fonte) {
        ?>
                <p id="fonte" style="text-align: left">Fonte:
                        <a href="<?php echo $fonte ?>">
                <?php echo $fonte ?>
                </a>
            </p>

        <?php } ?>
        <?php
                $key = "github";
                $github = get_post_meta($post->ID, $key, true);
                if ($github) {
        ?>
                    <p id="fonte">Github:
                        <a href="<?php echo $github ?>">
                <?php echo $github ?>
                </a>
            </p>

        <?php } endwhile;
        else : endif; ?>
       

        <br>

        <?php comments_template(); ?>
    </div>


    <?php get_sidebar(); ?>


        <div class="clear"></div>
    </div>

    <script language="javascript">
        $(document).ready(function(){
            $('#star').raty({
                path: '<?php bloginfo('template_url') ?>/img/raty',
                showHalf:  true
            });
        });
    </script>

<?php get_footer(); ?>