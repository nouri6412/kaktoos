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
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'job',
    'post_status' => 'publish',
    'author'  => $user_id,
    'paged' => $paged,
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
                                <div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
                                    <span class="wt-featuredtag wt-featuredtagcolor3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                    <div class="wt-userlistingcontent">
                                        <div class="wt-contenthead">
                                            <div class="wt-title">
                                                <h2> <?php echo get_the_title(); ?></h2>
                                            </div>
                                            <ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
                                                <li><span><i class="fa fa-dollar-sign wt-viewjobdollar"></i><?php echo ' ' . get_post_meta(get_the_ID(), 'min_price', true) . ' - ' . get_post_meta(get_the_ID(), 'max_price', true); ?></span></li>
                                                <li><span><?php echo get_the_author_meta('user_country'); ?></span></li>
                                                <li><span><i class="far fa-folder wt-viewjobfolder"></i> <?php $cat = get_post(get_post_meta(get_the_ID(), 'cat_id', true));
                                                                                                            echo $cat->post_title; ?></span></li>
                                                <li><span><i class="far fa-clock wt-viewjobclock"></i><?php echo 'زمان' . ' : ' . get_post_meta(get_the_ID(), 'time', true) . ' ' . 'روز'; ?></span></li>
                                                <li><span><i class="far fa-clock "></i><?php echo  get_the_date(); ?></span></li>
                                            </ul>
                                        </div>
                                        <div class="wt-rightarea">
                                            <div class="wt-btnarea">
                                                <a target="_Blank" href="<?php echo get_the_permalink(); ?>" class="wt-btn">مشاهده پروژه</a>
                                            </div>
                                            <div style="margin-right: 10px;" class="wt-btnarea">
                                                <a href="<?php echo home_url('profile?action=create-project&job_id=' . get_the_ID()); ?>" class="wt-btn">ویرایش پروژه</a>
                                            </div>
                                            <div style="margin-right: 10px;" class="wt-btnarea">
                                                <a href="<?php echo home_url('profile?action=request-project&job_id=' . get_the_ID()); ?>" class="wt-btn">پیشنهادات </a>
                                            </div>
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
