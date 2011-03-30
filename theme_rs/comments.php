<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die('Please do not load this page directly. Thanks!');

if (post_password_required ()) {
?>
    <p class="nocomments">Conteúdo restrito.</p>
<?php
    return;
}
?>

<!-- You can start editing here. -->

<?php if (have_comments ()) : ?>
    <div id="comentarios">
        <div id="comentarios_title" class="sidebar_title">
            <h2>Comentários</h2>
        </div>

        <ul class="commentlist">
        <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
    </ul>
</div>
<?php if (comments_open ()) : ?>
            <!-- If comments are open, but there are no comments. -->

<?php else : // comments are closed ?>
                <!-- If comments are closed. -->
                <p class="comentarios_trancados">Comentários trancados</p>

<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>
    <div id="responder">
        <div id="responder_title" class="sidebar_title">
            <h2>Responder</h2>
        </div>
    
        <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
            <p>Você está <a href="<?php echo wp_login_url(get_permalink()); ?>">logado em</a> comentário do post</p>
        <?php else : ?>

        <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

        <?php if (is_user_logged_in ()) : ?>

            <p id="nome_logado">
                    <label for="author">
                        <small>
                            nome
                        </small>
                    </label>
                <input readonly="readonly" type="text" name="author" id="author" value="<?php echo $user_identity; ?>" size="22" tabindex="1" <?php if ($req)
                    echo "aria-required='true'"; ?> />
            </p>

                <a style="float: right" href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">
                    <div id="logout">logout</div>
                </a>

        <?php else : ?>
                <p>
                    <label for="author">
                        <small>
                            nome
                        </small>
                    </label>
                    <input type="text" name="author" id="author" value="" size="22" tabindex="1" <?php if ($req)
                        echo "aria-required='true'"; ?> maxlength="20"/>
                </p>

                <p>
                    <label for="email">
                        <small>
                            email
                        </small>
                    </label>
                    <input type="text" name="email" id="email" value="" size="22" tabindex="2" <?php if ($req)
                    echo "aria-required='true'"; ?> maxlength="50"/>

                </p>

                <p>
                    <label for="url">
                        <small>
                            site
                        </small>
                    </label>
                        <input type="text" name="url" id="url" value="" size="22" tabindex="3" />
                </p>

<?php endif; ?>

            <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

                <p>
                    <textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
                </p>

                <p>
                    <input name="submit" type="submit" id="comment_submit" tabindex="5" value="enviar" />
                    <?php comment_id_fields(); ?>
                </p>
                    <?php do_action('comment_form', $post->ID); ?>

                </form>

<?php endif; // If registration required and not logged in ?>
                </div>

<?php endif; // if you delete this the sky will fall on your head  ?>



