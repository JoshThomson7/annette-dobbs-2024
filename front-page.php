<?php
/**
 * Front page
 */

get_header();

AVB::avb_banners(); ?>

<?php global $post;

FC_Helpers::flexible_content();

get_footer(); ?>