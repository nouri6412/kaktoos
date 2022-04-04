<?php

/** 
 * The template for displaying job single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Kaktos
 * @since Kaktos 1.0
 */

get_header();

if (isset($_GET["viewed_by"])) {

    $user_id = get_current_user_id();
    if ($user_id > 0) {
        $search["relation"] = "AND";
        $search[] =           array(
            'key' => 'job_id',
            'value' => get_the_ID(),
            'compare' => '='
        );

        $args = array(
            'post_type' => 'view-project',
            'post_author'  => $user_id,
            'title'        => $title,
            'meta_query' => $search
        );
        $the_query = new WP_Query($args);

        $count = $the_query->post_count;
        wp_reset_query();

        if ($count == 0) {
            $args_post = array(
                'post_title'   => $user_id,
                'post_type'    => 'view-project',
                'post_author'  => $user_id,
                'post_status'  => 'publish',
                'meta_input'   => array(
                    'job_id' => get_the_ID()
                )
            );
            $id = wp_insert_post($args_post);
        }
    }
}

$liked=0;
if (isset($_GET["liked_by"])) {

    $user_id = get_current_user_id();
    if ($user_id > 0) {
        $search["relation"] = "AND";
        $search[] =           array(
            'key' => 'job_id',
            'value' => get_the_ID(),
            'compare' => '='
        );

        $args = array(
            'post_type' => 'like-project',
            'post_author'  => $user_id,
            'title'        => $title,
            'meta_query' => $search
        );
        $the_query = new WP_Query($args);

        $count = $the_query->post_count;
        wp_reset_query();

        if ($count == 0) {
            $args_post = array(
                'post_title'   => $user_id,
                'post_type'    => 'like-project',
                'post_author'  => $user_id,
                'post_status'  => 'publish',
                'meta_input'   => array(
                    'job_id' => get_the_ID()
                )
            );
            $id = wp_insert_post($args_post);
        }
        else
        {
            $liked=1;
        }
    }
}


?>
<!-- Content -->
<div class="page-content bg-white">
    <?php

    // Start the Loop.
    while (have_posts()) :
        the_post();

    ?>
        <!--Inner Home Banner Start-->
        <div class="wt-haslayout wt-innerbannerholder">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
                        <div class="wt-innerbannercontent">
                            <div class="wt-title">
                                <h2><?php the_title(); ?> </h2>
                            </div>
                            <ol class="wt-breadcrumb">
                                <li><a href="<?php echo home_url() ?>">صفحه اصلی</a></li>
                                <li><a href="<?php echo home_url("search-job") ?>"> پروژه ها </a></li>
                                <li class="wt-active">جزئیات پروژه</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Inner Home End-->
        <!--Main Start-->
        <main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
            <div class="wt-haslayout wt-main-section">
                <!-- User Listing Start-->
                <div class="container">
                    <div class="row">
                        <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
                                <div class="wt-proposalholder">
                                    <span class="wt-featuredtag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                                    <div class="wt-proposalhead">
                                        <h2><?php echo get_the_title(); ?></h2>
                                        <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                            <li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><?php echo ' ' . get_post_meta(get_the_ID(), 'min_price', true) . ' - ' . get_post_meta(get_the_ID(), 'max_price', true); ?></span></li>
                                            <li><span> <?php echo get_the_author_meta('user_country'); ?> </span></li>
                                            <li><span><i class="far fa-folder"></i>
                                                    <?php $cat = get_post(get_post_meta(get_the_ID(), 'cat_id', true));
                                                    echo $cat->post_title; ?>
                                                </span></li>
                                            <li><span><i class="far fa-clock"></i> <?php echo 'زمان' . ' : ' . get_post_meta(get_the_ID(), 'time', true) . ' ' . 'روز'; ?> </span></li>
                                        </ul>
                                    </div>
                                    <?php
                                    $request_id = get_post_meta(get_the_ID(), 'request_id', true);
                                    if ($request_id == 0 && is_user_logged_in()) {
                                    ?>
                                        <div class="wt-btnarea"><a href="<?php echo home_url('request?id=' . get_the_ID()) ?>" class="wt-btn">ارسال پیشنهاد</a></div>
                                    <?php } else if (is_user_logged_in()) {
                                    ?>
                                        <div class="wt-btnarea"><a href="#" class="wt-btn">پروژه بسته شد</a></div>

                                    <?php
                                    } ?>

                                    <?php if (get_post_meta(get_the_ID(), 'project_state', true) == 1) {
                                        $text=" می پسندم ";
                                        $color="#d5ab11";
                                        if($liked==1)
                                        {
                                            $text="   پسندیده اید";
                                            $color="green";
                                        }
                                    ?>
                                        <div class="wt-btnarea"><a style="background: <?php echo $color ?>;margin-right: 10px;margin-left: 10px;" href="<?php echo get_the_permalink() . '?liked_by=' . get_current_user_id(); ?>" class="wt-btn"><?php echo $text; ?></a></div>
                                    <?php
                                    } ?>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-right">
                                <div class="wt-projectdetail-holder">
                                    <div class="wt-projectdetail">
                                        <div class="wt-title">
                                            <h3>جزئیات پروژه</h3>
                                        </div>
                                        <div class="wt-description">
                                            <p><?php the_content() ?></p>
                                        </div>
                                    </div>
                                    <div class="wt-skillsrequired">
                                        <div class="wt-title">
                                            <h3>مهارت های مورد نیاز</h3>
                                        </div>
                                        <div class="wt-tag wt-widgettag">
                                            <?php
                                            $json = json_decode(get_post_meta(get_the_ID(), 'skills', true), true);
                                            if (is_array($json)) {
                                                foreach ($json as $item) {
                                                    $skill = $item["skill"];
                                                    $sk = get_post($skill);
                                            ?>
                                                    <a href="javascript:void(0);"> <?php echo $sk->post_title ?></a>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="wt-attachments">
                                        <div class="wt-title">
                                            <h3>پیوست ها</h3>
                                        </div>
                                        <ul class="wt-attachfile">
                                            <?php
                                            $json = json_decode(get_post_meta(get_the_ID(), 'files', true), true);
                                            if (is_array($json)) {

                                                foreach ($json as $item) {
                                            ?>
                                                    <li>
                                                        <span><?php echo $item["title"] ?></span>
                                                        <em><a target="_Blank" href="<?php echo $item["img"] ?>"><i class="lnr lnr-download"></i></a></em>
                                                    </li>
                                            <?php  }
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                                <aside id="wt-sidebar" class="wt-sidebar">
                                    <div class="wt-proposalsr">
                                        <div class="wt-proposalsrcontent">
                                            <span class="wt-proposalsicon"><i class="fa fa-angle-double-down"></i><i class="fa fa-newspaper"></i></span>
                                            <a href="<?php echo home_url('requests?id=' . get_the_ID()) ?>">
                                                <div class="wt-title">
                                                    <?php
                                                    $args = array(
                                                        'post_type' => 'request',
                                                        'post_status' => 'publish',
                                                        'meta_key' => 'job_id',
                                                        'meta_value' => get_the_ID()
                                                    );
                                                    $the_query = new WP_Query($args);
                                                    $count = $the_query->post_count;
                                                    wp_reset_query();
                                                    ?>
                                                    <h3><?php echo $count . ' ' . 'پیشنهاد' ?></h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="wt-widget wt-companysinfo-jobsingle">
                                        <div class="wt-companysdetails">
                                            <figure class="wt-companysimg">
                                                <img src="<?php echo get_the_author_meta('avatar_bg') ?>" alt="img description">
                                            </figure>
                                            <div class="wt-companysinfo">
                                                <figure><img src="<?php echo get_the_author_meta('avatar') ?>" alt="img description"></figure>
                                                <div class="wt-title">
                                                    <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> شرکت تأیید شده</a>
                                                    <h2><?php echo get_the_author_meta('company_name') ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wt-widget wt-sharejob">
                                        <div class="wt-widgettitle">
                                            <h2> اشتراک گذاری این پروژه</h2>
                                        </div>
                                        <div class="wt-widgetcontent">
                                            <ul class="wt-socialiconssimple">
                                                <li class="wt-facebook"><a class="social-share facebook" href="javascript:void(0);"><i class="fab fa-facebook-f"></i>اشتراک گذاری در فیسبوک</a></li>
                                                <li class="wt-twitter"><a class="social-share twitter" href="javascript:void(0);"><i class="fab fa-twitter"></i>اشتراک گذاری در توئیتر</a></li>
                                                <li class="wt-linkedin"><a class="social-share linkedin" href="javascript:void(0);"><i class="fab fa-linkedin-in"></i>اشتراک گذاری در لینکدین</a></li>
                                                <li class="wt-googleplus"><a class="social-share google-plus" href="javascript:void(0);"><i class="fab fa-google-plus-g"></i>اشتراک گذاری در گوگل پلاس</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Listing End-->
            </div>
        </main>
        <!--Main End-->

    <?php

    endwhile; // End the loop.
    ?>
</div>
<!-- Content END-->

<?php
get_footer();
