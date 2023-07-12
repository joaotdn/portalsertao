<?php
get_header();
$category = get_the_category();
$meta = get_post_meta($post->ID);
$relateds = get_posts(array(
    'posts_per_page' => 3,
    'cat' => $category[0]->term_id,
    'post__not_in' => array($post->ID)
));
?>

<?php
get_footer();
?>