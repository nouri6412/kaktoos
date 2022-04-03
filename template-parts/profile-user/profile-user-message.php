<?php
$user_id = get_current_user_id();


$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$search = array();

$search["relation"] = "OR";
$search[] =           array(
    'key' => 'owner_id',
    'value' => $user_id,
    'compare' => '='
);

$search[] =           array(
    'key' => 'sender_id',
    'value' => $user_id,
    'compare' => '='
);

$args = array(
    'post_type' => 'request',
    'post_status' => 'publish',
    'paged' => $paged,
    'posts_per_page' => 10,
    'meta_query' => $search
);
$the_query = new WP_Query($args);


$count = $the_query->post_count;

?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
    <div class="wt-dashboardbox wt-messages-holder">
        <div class="wt-dashboardboxtitle">
            <h2>پیام ها</h2>
        </div>
        <div class="wt-dashboardboxcontent wt-dashboardholder wt-offersmessages">
            <ul>
                <li>
                    <form class="wt-formtheme wt-formsearch">
                        <fieldset>
                            <div class="form-group">
                                <input type="text" name="Location" class="form-control" placeholder="اینجا  جستجو کنید">
                                <a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
                            </div>
                        </fieldset>
                    </form>
                    <div class="wt-verticalscrollbar wt-dashboardscrollbar">
                        <?php
                        while ($the_query->have_posts()) :
                            $the_query->the_post();
                            $job_id = get_post_meta(get_the_ID(), 'job_id', true);
                            $request_id = get_post_meta($job_id, 'request_id', true);
                            $class = " wt-dotnotification wt-active";
                            $class = "";
                        ?>
                            <div class="wt-ad <?php echo $class ?>">
                                <figure><img src="<?php echo (strlen(get_the_author_meta('avatar')) > 0) ? get_the_author_meta('avatar') : get_template_directory_uri() . '/assets/img/user.png' ?>" alt="image description"></figure>
                                <div class="wt-adcontent">
                                    <h3><?php echo get_the_author_meta('user_name')  ?></h3>
                                    <span><?php echo (strlen(get_the_author_meta('job_title')) > 0) ? get_the_author_meta('user_country') : ''   ?></span>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        ?>
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
                </li>
                <li>
                    <div class="wt-chatarea">
                        <div class="wt-messages wt-verticalscrollbar wt-dashboardscrollbar">
                            <div class="wt-offerermessage">
                                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/messages/img-12.jpg" alt="image description"></figure>
                                <div class="wt-description">
                                    <p>لورم ایپسوم یا طرح‌نما به متنی بی‌معنی در صنعت چاپ،
                                        صفحه‌آرایی و طراحی
                                        گرافیک گفته می شود.</p>
                                    <div class="clearfix"></div>
                                    <time datetime="2017-08-08">22 دی 1389</time>
                                </div>
                            </div>
                            <div class="wt-memessage wt-readmessage">
                                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/messages/img-11.jpg" alt="image description"></figure>
                                <div class="wt-description">
                                    <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
                                        صفحه‌آرایی و طراحی
                                        گرافیک گفته می شود.</p>
                                    <div class="clearfix"></div>
                                    <p><a href="https://themeforest.net/" target="_blank">https://themeforest.net</a></p>
                                    <div class="clearfix"></div>
                                    <p>خوب است؟ </p>
                                    <div class="clearfix"></div>
                                    <time datetime="2017-08-08">7 تير 1396 09:30</time>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="wt-offerermessage">
                                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/messages/img-12.jpg" alt="image description"></figure>
                                <div class="wt-description">
                                    <div class="clearfix"></div>
                                    <p>لورم ایپسوم یا طرح‌نما به متنی بی‌معنی در صنعت چاپ،
                                        صفحه‌آرایی و طراحی
                                        گرافیک گفته می شود.</p>
                                    <div class="clearfix"></div>
                                    <time datetime="2017-08-08">22 دی 1389</time>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="wt-memessage wt-readmessage">
                                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/messages/img-11.jpg" alt="image description"></figure>
                                <div class="wt-description">
                                    <div class="clearfix"></div>
                                    <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
                                        صفحه‌آرایی و طراحی
                                        گرافیک گفته می شود.</p>
                                    <div class="clearfix"></div>
                                    <p><a href="https://themeforest.net/" target="_blank">https://themeforest.net</a></p>
                                    <div class="clearfix"></div>
                                    <p>خوب است؟ </p>
                                    <div class="clearfix"></div>
                                    <time datetime="2017-08-08">7 تير 1396 09:30</time>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wt-replaybox">
                            <div class="form-group">
                                <textarea class="form-control" name="reply" placeholder="پیام را اینجا تایپ کنید"></textarea>
                            </div>
                            <div class="wt-iconbox">
                                <i class="lnr lnr-thumbs-up"></i>
                                <i class="lnr lnr-thumbs-down"></i>
                                <i class="lnr lnr-smile"></i>
                                <a href="javascript:void(0);" class="wt-btnsendmsg">ارسال</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>