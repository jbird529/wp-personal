<?php

/**
 * @package favepersonal
 *
 * This file is part of the Personal Theme for WordPress
 * http://github.com/alexkingorg/wp-personal
 * (Forked from http://crowdfavorite.com/favepersonal/)
 *
 * Copyright (c) 2008-2013 Crowd Favorite, Ltd. All rights reserved.
 * http://crowdfavorite.com
 *
 * Copyright (c) 2015 Alex King.
 *
 * **********************************************************************
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
 * **********************************************************************
 */

/* Using as an include since it's used in many places */

?>
<div class="entry-meta">
<?php

do_action('favepersonal_excerpt_sidebar_before');

if (post_type_supports($post->post_type, 'comments')) {
?>
	<p class="entry-meta-replies h5"><?php comments_popup_link(__('No Replies', 'favepersonal'), __('1 Reply', 'favepersonal'), __('% Replies', 'favepersonal')); ?></p>
<?php
}

edit_post_link('edit', '<span class="edit-link">', '</span>');
do_action('favepersonal_excerpt_sidebar_after');

?>
</div>
