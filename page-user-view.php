<?php

/**
 * The template for displaying job single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Kaktos
 * @since Kaktos 1.0
 *  * Template Name: مشاهده کاربر
 */

get_header();
$user_id = 0;
if (isset($_GET["id"])) {
    $user_id = $_GET["id"];
}

if ($user_id == 0) {
    get_footer();
    return;
}
?>

<!--Inner Home Banner Start-->
<div style="background-image: url(<?php echo (strlen(get_the_author_meta('avatar_bg', $user_id)) > 0) ? get_the_author_meta('avatar_bg', $user_id) : get_template_directory_uri() . '/assets/images/bannerimg/img-02.jpg' ?>);" class="wt-haslayout wt-innerbannerholder wt-innerbannerholdervtwo">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
            </div>
        </div>
    </div>
</div>
<!--Inner Home End-->
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
    <!-- User Profile Start-->
    <div class="wt-main-section wt-paddingtopnull wt-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 float-left">
                    <div class="wt-userprofileholder">
                        <span class="wt-featuredtag"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 float-right">
                            <div class="row">
                                <div class="wt-userprofile">
                                    <figure>
                                        <img src="<?php echo (strlen(get_the_author_meta('avatar', $user_id)) > 0) ? get_the_author_meta('avatar', $user_id) : get_template_directory_uri() . '/assets/img/NoImage.jpg' ?>" alt="img description">
                                        <div class="wt-userdropdown wt-online">
                                        </div>
                                    </figure>
                                    <div class="wt-title">
                                        <h3><i class="fa fa-check-circle"></i> <?php echo get_the_author_meta('user_name', $user_id)  ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 float-left">
                            <div class="row">
                                <div class="wt-proposalhead wt-userdetails">
                                    <h2> <?php echo get_the_author_meta('job_title', $user_id)  ?></h2>
                                    <ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
                                        <li><span><i class="far fa-money-bill-alt"></i> <?php echo get_the_author_meta('user_nerx', $user_id)  ?> / ساعتی</span></li>
                                        <li><span> <?php echo get_the_author_meta('user_country', $user_id)  ?> </span></li>
                                        <li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> ذخیره</a></li>
                                    </ul>
                                    <div class="wt-description">
                                        <?php echo get_the_author_meta('user_desc', $user_id)  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- User Profile End-->
        <!-- User Listing Start-->
        <div class="container">
            <div class="row">
                <div id="wt-twocolumns" class="wt-twocolumns wt-haslayout">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
                        <div class="wt-usersingle">
                            <div class="wt-craftedprojects">
                                <div class="wt-usertitle">
                                    <h2>نمونه کارها</h2>
                                </div>
                                <div class="wt-projects">
                                    <?php
                                    $json = json_decode(get_the_author_meta('user_pro', $user_id), true);
                                    if (is_array($json)) {
                                        foreach ($json as $item) {
                                    ?>
                                            <div class="wt-project">
                                                <figure>
                                                    <img src="<?php echo (strlen($item["img"]) > 0) ? $item["img"] : get_template_directory_uri() . '/assets/img/NoImage.jpg'; ?>" alt="img description">
                                                </figure>
                                                <div class="wt-projectcontent">
                                                    <h3><?php echo $item["title"] ?></h3>
                                                    <a href="javascript:void(0);"><?php echo $item["address"] ?></a>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="wt-experience">
                                <div class="wt-usertitle">
                                    <h2>تجربه</h2>
                                </div>
                                <div class="wt-experiencelisting-hold">
                                    <?php
                                    $json = json_decode(get_the_author_meta('user_exp', $user_id), true);
                                    if (is_array($json)) {
                                        foreach ($json as $item) {
                                    ?>
                                            <div class="wt-experiencelisting wt-bgcolor">
                                                <div class="wt-title">
                                                    <h3><?php echo $item["job_title"] ?></h3>
                                                </div>
                                                <div class="wt-experiencecontent">
                                                    <ul class="wt-userlisting-breadcrumb">
                                                        <li><span><i class="far fa-building"></i> <?php echo $item["company_title"] ?></span></li>
                                                        <li><span><i class="far fa-calendar"></i> <?php echo $item["start"] . ' - ' . $item["end"] ?></span></li>
                                                    </ul>
                                                    <div class="wt-description">
                                                        <p><?php echo $item["job_desc"] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <div class="divheight"></div>
                                </div>
                            </div>
                            <div class="wt-experience wt-education">
                                <div class="wt-usertitle">
                                    <h2>آموزش</h2>
                                </div>
                                <div class="wt-experiencelisting-hold">
                                    <?php
                                    $json = json_decode(get_the_author_meta('user_edu', $user_id), true);
                                    if (is_array($json)) {
                                        foreach ($json as $item) {
                                    ?>
                                            <div class="wt-experiencelisting wt-bgcolor">
                                                <div class="wt-title">
                                                    <h3><?php echo $item["major_title"] ?></h3>
                                                </div>
                                                <div class="wt-experiencecontent">
                                                    <ul class="wt-userlisting-breadcrumb">
                                                        <li><span><i class="far fa-building"></i> <?php echo $item["uni_title"] ?></span></li>
                                                        <li><span><i class="far fa-calendar"></i> <?php echo $item["start"] . ' - ' . $item["end"] ?></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                    <div class="divheight"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
                        <aside id="wt-sidebar" class="wt-sidebar">
                            <div id="wt-ourskill" class="wt-widget">
                                <div class="wt-widgettitle">
                                    <h2>مهارت های من</h2>
                                </div>
                                <div class="wt-widgetcontent wt-skillscontent">
                                <?php
                                    $json = json_decode(get_the_author_meta('user_skills', $user_id), true);
                                    if (is_array($json)) {
                                        foreach ($json as $item) {
                                            $skill = $item["user_skill"];
                                            $persent = $item["user_skill_persent"];
                                            $post = get_post($skill);
                                    ?>
                                    <div class="wt-skillholder" data-percent="<?php echo $persent ?>%">
                                        <span><?php echo $post->post_title ?> <em style="margin-left: 10px;"><?php echo $persent ?>%</em></span>
                                        <div class="wt-skillbarholder">
                                            <div class="wt-skillbar"></div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="wt-widget wt-sharejob">
                                <div class="wt-widgettitle">
                                    <h2>اشتراک گذاری این کاربر</h2>
                                </div>
                                <div class="wt-widgetcontent">
                                    <ul class="wt-socialiconssimple">
                                        <li class="wt-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i>اشتراک گذاری در فیسبوک</a></li>
                                        <li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i>اشتراک گذاری در توئیتر</a></li>
                                        <li class="wt-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i>اشتراک گذاری در لینکدین</a></li>
                                        <li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i>اشتراک گذاری در گوگل پلاس</a></li>
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
get_footer();