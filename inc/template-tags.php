<?php

    if (!function_exists('kotha_child_posted_on')) {
        function kotha_child_posted_on()
        {
            ?>
            <ul class="list-inline">
            <?php if (!get_theme_mod('kotha_post_author_name')): ?>
                <li>
                    <span class="glyphicon glyphicon-user"></span>
                    <span class="author vcard">
                        <?php //_e('By ', 'kotha');
                            printf('<a class="url fn n" href="%1$s">%2$s</a>',
                                esc_url(get_author_posts_url(get_the_author_meta('ID'))),
                                esc_html(get_the_author())
                            ) ?>
                    </span>
                </li>

                <li>/</li>
            <?php endif; ?>

            <?php if (!get_theme_mod('kotha_post_date')): ?>
                <li>
                    <span class="glyphicon glyphicon-calendar"></span>
                    <span class="posted-on"><?php the_time('j. F Y') ?></span>
                </li>

                <li>/</li>
            <?php endif; ?>

            <?php if (!get_theme_mod('kotha_post_cat')): ?>
                <?php if (get_the_category_list()): ?>
                    <li>
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="posted-in">
                            <?php echo get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'kotha'));
                            ?>
                        </span>
                    </li>

                    <li>/</li>
                <?php endif; ?>
            <?php endif; ?>

            <?php if ( comments_open() ) : ?>
                <li>
                    <span class="glyphicon glyphicon-comment"></span>
                    <?php comments_popup_link( '<span class="comment">' . __( 'No comments yet', 'kotha' ) . '</span>', __( '1 Comment', 'kotha' ), __( '% Comments', 'kotha' ) ); ?>
                </li>
            <?php endif; ?>

            </ul>
        <?php
        }
    }