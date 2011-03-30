<?php

function mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
        <div id="comment-<?php comment_ID(); ?>">

            <div class="comment-author vcard">
                <?php echo get_avatar($comment, $size = '48', $default = '<path_to_url>'); ?>
            </div>
            
        <?php if ($comment->comment_approved == '0') : ?>
                <em><?php _e('Your comment is awaiting moderation.') ?></em>
                <br />
        <?php endif; ?>

                <div class="comment-meta commentmetadata">
                    <p class="comment_autor">
                        <?php printf(__('%s'), get_comment_author_link()) ?>
                    </p>
                    <p class="comment_date">
                        <?php printf(__('%1$s - %2$s'), get_comment_date('M j, Y'), get_comment_time()) ?>
                    </p>
                </div>
                
                <div class="comment_contet">
                    <?php comment_text() ?>

                       <?php edit_comment_link('editar', '<div class="editar reply">', '</div>'); ?>
                </div>

                 
        </div>
    </li>
    <?php
            }
    ?>




