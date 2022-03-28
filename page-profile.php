<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Kaktos
 * @since 1.0.0
 * Template Name: پروفایل من
 */



get_header('db');

$user_id = get_current_user_id();


$user_info = get_userdata($user_id);
$user_meta = get_user_meta($user_id);

$action = "profile";
if (isset($_GET["action"])) {
    $action = $_GET["action"];
}

set_query_var('page_action', $action);
set_query_var('user_info', $user_info);
set_query_var('user_meta', $user_meta);

?>
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout">
    <!--Sidebar Start-->
    <?php
    if ($user_id > 0) {
        get_template_part('template-parts/profile-user/profile-user', 'aside');
    }
    ?>
    <!--Sidebar Start-->
    <!--Register Form Start-->
    <section class="wt-haslayout">
        <div class="row">
            <?php
            if ($user_id > 0) {
                $user_type = "user";
                set_query_var('back_action', get_the_author_meta('page_action', $user_id));
                update_user_meta($user_id, "page_action", $action);
                get_template_part('template-parts/profile-' . $user_type . '/profile-' . $user_type, $action);
                get_template_part('template-parts/profile-user/profile-user', 'aside-left');
            } else {
            ?>
                <a href="#"><i class="fa fa-lock"></i> لطفا وارد سایت شوید </a>
            <?php
            }
            ?>
        </div>
    </section>
    <!--Register Form End-->
</main>
<!--Main End-->
<?php
get_footer('db');
