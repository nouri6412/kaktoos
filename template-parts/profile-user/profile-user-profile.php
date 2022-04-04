<?php
$user_id = get_current_user_id();
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9 dashboard">
<a class="collapse-heading no-link-inherit"><span
                                        class="pointer tc-hover-3 noselect active"><i class="pf pf-minus-o"></i>
                                        فعالیت‌های فریلنسینگ</span></a>
    <div class="row">
        <div class="col-md-4 p0">
            <div class="dashboard-block fadeInFromNone border-rad-sm mv+ mh+ p+">
                <div class="pb clearfix">
                    <?php
                    $json = [];
                    $str = get_the_author_meta('user_skills', $user_id);
                    if (strlen($str) > 0) {
                        $json = json_decode($str, true);
                    }
                    $skill_id = 0;
                    $search = array();
                    $search["relation"] = "OR";
                    $index = 0;
                    foreach ($json as $item) {
                        $skill = $item["user_skill"];
                        if ($index == 0) {
                            $skill_id = $skill;
                        }

                        $index = 1;
                        $search[] =           array(
                            'key' => 'skills',
                            'value' => '"skill":"' . $skill . '"',
                            'compare' => 'LIKE'
                        );
                    }

                    $args = array(
                        'post_type' => 'job',
                        'post_status' => 'publish',
                        'meta_key' => 'active',
                        'meta_value' => '1',
                        'meta_query' => $search
                    );
                    $the_query = new WP_Query($args);
                    $count = $the_query->post_count;
                    wp_reset_query();
                    ?>
                    <div class="number fa-2-5em"><?php echo $count; ?></div>
                    <span class="text visible-block fa-13px tc-9">پروژه با مهارت شما</span>

                    <i class="fa fa-files-o tc-3 fa-3x pull-left dashboard-icon"></i>

                </div>

                <div class="actions pv+">
                    <span class="desc tc-9 mr"></span>
                    <a class="tc-4 mr" title="" href="<?php echo home_url('search-job?skill_id=' . $skill_id) ?>">مشاهده پروژه ها با مهارت شما</a>
                    <a class="tc-4" title=""></a>
                </div>
            </div>
        </div>
        <div class="col-md-4 p0">
            <div class="dashboard-block fadeInFromNone border-rad-sm mv+ mh+ p+">
                <div class="pb clearfix">
                    <?php
                    $args = array(
                        'post_type' => 'request',
                        'post_status' => 'publish',
                        'author'  => $user_id,
                    );
                    $the_query = new WP_Query($args);
                    $count = $the_query->post_count;
                    wp_reset_query();
                    ?>
                    <div class="number fa-2-5em"><?php echo $count; ?></div>
                    <span class="text visible-block fa-13px tc-9">پیشنهاد</span>

                    <i class="fa fa-paper-plane-o tc-3 fa-3x pull-left dashboard-icon"></i>

                </div>

                <div class="actions pv+">
                    <span class="desc tc-9 mr"><?php echo 'شما تا کنون' . ' ' . $count . ' ' . 'پیشنهاد ارسال کرده اید' ?></span>
                </div>
            </div>
        </div>

        <div class="col-md-4 p0">
            <div class="dashboard-block fadeInFromNone border-rad-sm mv+ mh+ p+">
                <div class="pb clearfix">
                    <?php
                    $args = array(
                        'post_type' => 'job',
                        'post_status' => 'publish',
                        'meta_key' => 'request_id',
                        'meta_value' => $user_id
                    );
                    $the_query = new WP_Query($args);
                    $count = $the_query->post_count;
                    wp_reset_query();
                    ?>
                    <div class="number fa-2-5em"><?php echo $count; ?></div>
                    <span class="text visible-block fa-13px tc-9">پروژه در دست اقدام</span>

                    <i class="fa fa-tasks tc-3 fa-3x pull-left dashboard-icon"></i>

                </div>

                <div class="actions pv+">
                    <a class="tc-4 mr" title="" href="<?php echo home_url('my-activity') ?>">مشاهده فعالیت های من</a>
                    <a class="tc-4" title=""></a>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
</div>