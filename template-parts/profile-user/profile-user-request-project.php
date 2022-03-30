<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Kaktos
 * @since 1.0.0
 */

$user_id = get_current_user_id();
$job_id = 0;
if (isset($_GET["job_id"])) {
    $job_id = $_GET["job_id"];
}

if ($job_id == 0) {
    return;
}

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'request',
    'post_status' => 'publish',
    'meta_key' => 'job_id',
    'paged' => $paged,
    'meta_value' => $job_id,
    'posts_per_page' => 10
);
$the_query = new WP_Query($args);
$count = $the_query->post_count;
?>

<section class="wt-haslayout wt-dbsectionspace">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
            <div class="wt-dashboardbox">
                <div class="wt-dashboardboxtitle">
                    <h2> مدیریت پروژه ها </h2>
                </div>
                <div class="wt-dashboardboxcontent wt-jobdetailsholder">
                    <div class="wt-freelancerholder">
                        <div class="wt-tabscontenttitle">
                            <h2>پروژه های من</h2>
                        </div>
                        <div class="wt-managejobcontent wt-verticalscrollbar mCustomScrollbar _mCS_1">
                            <?php
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                            ?>
                                <div class="wt-userlistinghold wt-featured wt-proposalitem">
                                    <span class="wt-featuredtag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span>
                                    <figure class="wt-userlistingimg">
                                        <img src="<?php echo get_the_author_meta('avatar') ?>" alt="image description" class="mCS_img_loaded">
                                    </figure>
                                    <div class="wt-proposaldetails">
                                        <div class="wt-contenthead">
                                            <div class="wt-title">
                                                <a href="usersingle.html"><?php echo get_the_author_meta('user_name'); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-rightarea">
                                        <div class="wt-btnarea">
                                            <a href="javascript:void(0);" class="wt-btn"> اکنون استخدام کنید</a>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            <h5><?php echo get_post_meta(get_the_ID(), 'price', true) . ' ' . 'دلار' ?></h5>
                                            <span><?php echo get_post_meta(get_the_ID(), 'time', true) . ' ' . 'روز' ?></span>
                                        </div>
                                        <div class="wt-hireduserstatus">
                                            <p><?php echo get_post_meta(get_the_ID(), 'desc', true) ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="pagination">
                    <?php
                    echo paginate_links(array(
                        'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                        'total'        => $the_query->max_num_pages,
                        'current'      => max(1, get_query_var('paged')),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => true,
                        'prev_text'    => sprintf('<i></i> %1$s', __('بعدی', 'text-domain')),
                        'next_text'    => sprintf('%1$s <i></i>', __('قبلی', 'text-domain')),
                        'add_args'     => false,
                        'add_fragment' => '',
                    ));
                    ?>
                </div>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>