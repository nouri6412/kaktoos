<?php
$user_id = get_current_user_id();
$job_id = 0;
$title = "ایجاد پروژه";
if (isset($_GET["job_id"])) {
    $job_id = $_GET["job_id"];
    $title = "ویرایش پروژه";

    $job = get_post($job_id);

    $author = $job->post_author;

    if ($user_id != $author && $job_id > 0) {
        die();
    }
}

?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="wt-dashboardbox wt-dashboardtabsholder">
            <div class="wt-dashboardboxtitle">
                <?php if (isset($_GET["created"]) && $_GET["created"] == 1) { ?>
                    <div class="alert alert-success">پروژه با موفقیت ذخیره شد</div>
                <?php  } ?>
                <h2><?php echo $title; ?> </h2>
            </div>
            <div id="form-profile" class="my-form">
                <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                    <div class="wt-yourdetails wt-tabsinfo">
                        <div class="wt-formtheme wt-userform">
                            <fieldset>
                                <div class="form-group">

                                    <label>دسته بندی پروژه</label>
                                    <span class="wt-select">
                                        <select data-id="cat_id" class="input-profile">
                                            <option value="">انتخاب دسته بندی</option>
                                            <?php
                                            $args = array(
                                                'post_type' => 'job-cat'
                                            );
                                            $the_query1 = new WP_Query($args);
                                            ?>
                                            <?php
                                            while ($the_query1->have_posts()) :
                                                $the_query1->the_post();
                                                $selected = "";
                                                $cat_id = get_post_meta($job_id, 'cat_id', true);

                                                if ($cat_id == get_the_ID()) {
                                                    $selected = "selected";
                                                }
                                            ?>
                                                <option <?php echo $selected ?> value="<?php echo get_the_ID(); ?>"><?php echo get_the_title(); ?></option>
                                            <?php
                                            endwhile;
                                            wp_reset_query();
                                            ?>
                                        </select>
                                    </span>
                                </div>
                                <div class="form-group">

                                    <label for="title">عنوان پروژه</label>
                                    <input value="<?php echo get_post_meta($job_id, 'title', true); ?>" type="text" name="title" data-id="title" class="form-control input-profile" placeholder="عنوان پروژه">
                                </div>

                                <div class="form-group form-group-half">
                                    <label>حداقل بودجه (دلار)</label>
                                    <input value="<?php echo get_post_meta($job_id, 'min_price', true); ?>" type="number" name="rate" class="form-control input-profile" data-id="min_price" placeholder="حداقل بودجه (دلار)">
                                </div>
                                <div class="form-group form-group-half">
                                    <label>حداکثر بودجه (دلار)</label>
                                    <input value="<?php echo get_post_meta($job_id, 'max_price', true); ?>" type="number" name="rate" class="form-control input-profile" data-id="max_price" placeholder="حداکثر بودجه (دلار)">
                                </div>
                                <div class="form-group">
                                    <label>پروژه خود را توضیح دهید</label>
                                    <textarea data-id="desc" name="message" class="form-control input-profile" placeholder="پروژه خود را توضیح دهید"><?php echo get_post_meta($job_id, 'desc', true); ?></textarea>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <!-- <div class="wt-bannerphoto wt-tabsinfo">
                        <div class="wt-tabscontenttitle">
                            <h2>عکس بنر</h2>
                        </div>
                        <div class="wt-profilephotocontent">
                            <div class="wt-description">
                            </div>
                            <form class="wt-formtheme wt-formprojectinfo wt-formcategory">
                                <fieldset>
                                    <div class="form-group form-group-label">
                                        <div class="wt-labelgroup">
                                            <label for="filew">
                                                <span class="wt-btn">انتخاب فایل </span>
                                                <input onchange="ajax_mbm_upload_image($(this),'profile-avatar-bg','avatar_bg')" type="file" name="file" id="filew">
                                            </label>
                                            <span> فایل را برای بارگذاری اینجا رها کنید </span>
                                            <em class="wt-fileuploading">بارگذاری<i class="fa fa-spinner fa-spin"></i></em>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <ul class="wt-attachfile wt-attachfilevtwo">
                                            <li class="wt-uploadingholder">
                                                <div class="wt-uploadingbox">
                                                    <div class="wt-designimg">
                                                        <input id="demoq" type="radio" name="employees" value="company" checked="">
                                                        <label for="demoq">
                                                            <?php
                                                            $avatar = get_template_directory_uri() . "/assets/images/company/img-10.jpg";
                                                            if (isset($job_meta['avatar_bg'])) {
                                                                $avatar = $job_meta['avatar_bg'][0];
                                                            }
                                                            ?>
                                                            <img id="profile-avatar-bg" src="<?php echo $avatar; ?>">
                                                            <i class="fa fa-check"></i></label>
                                                    </div>
                                                    <div class="wt-uploadingbar">
                                                        <span class="uploadprogressbar"></span>
                                                        <span>Banner Photo.jpg</span>
                                                        <em>سایز فایل : 300 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div> -->
                    <div class="wt-skills">
                        <div class="wt-tabscontenttitle">
                            <h2>مهارت های موردنیاز</h2>
                        </div>
                        <div class="wt-skillscontent-holder">
                            <form class="wt-formtheme wt-skillsform">
                                <fieldset>
                                    <div style="padding-left: 0;" class="form-group">
                                        <div class="form-group-holder">
                                            <span class="wt-select">
                                                <select id="skill-select">
                                                    <option value=""> انتخاب مهارت </option>
                                                    <?php
                                                    $args = array(
                                                        'post_type' => 'skill'
                                                    );
                                                    $the_query1 = new WP_Query($args);
                                                    ?>
                                                    <?php
                                                    while ($the_query1->have_posts()) :
                                                        $the_query1->the_post();
                                                    ?>
                                                        <option value="<?php echo get_the_ID(); ?>"><?php echo get_the_title(); ?></option>
                                                    <?php
                                                    endwhile;
                                                    wp_reset_query();
                                                    ?>
                                                </select>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group wt-btnarea">
                                        <a onclick="ajax_submit_mbm_post_data_resume_get_form(
            {
                'action': 'mbm_profile_user_get_form',
                'meta_action':'skill-form-project',
                'skill':jQuery('#skill-select').val()
            }
            ,'items-skill'
        )" href="javascript:void(0);" class="wt-btn"> افزودن مهارت ها</a>
                                    </div>
                                </fieldset>
                            </form>
                            <div class="wt-myskills">
                                <ul data-id="skills" id="items-skill" class="sortable list loop-input-profile">
                                    <?php
                                    $json = json_decode(get_post_meta($job_id, 'skills', true), true);
                                    if (is_array($json)) {
                                        foreach ($json as $item) {
                                            $skill = $item["skill"];
                                            $post = get_post($skill);
                                    ?>
                                            <li class="loop-input-profile-item">
                                                <div class="wt-dragdroptool">
                                                    <a href="javascript:void(0)" class="lnr lnr-menu"></a>
                                                </div>
                                                <span class="skill-dynamic-html"><?php echo $post->post_title; ?></span>
                                                <span class="skill-dynamic-field">
                                                    <input data-id="skill" type="hidden" value="<?php echo $skill; ?>" />
                                                </span>
                                                <div id="item-skills-btn" class="wt-rightarea">
                                                    <a onclick="my_skill_btn_delete(jQuery(this))" href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                                </div>
                                            </li>
                                    <?php
                                        }
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <br>
                    <div class="wt-addprojectsholder wt-tabsinfo">
                        <div style="padding-top: 40px;" class="wt-tabscontenttitle wt-addnew">
                            <h2>فایل های پروژه را اضافه کنید</h2>
                            <a onclick="ajax_submit_mbm_post_data_resume_get_form(
            {
                'action': 'mbm_profile_user_get_form',
                'meta_action':'pro-form-file'
            }
            ,'items-file'
        )" href="javascript:void(0);">افزودن جدید</a>
                        </div>
                        <ul data-id="files" id="items-file" class="wt-experienceaccordion accordion loop-input-profile">
                            <?php
                            $json = json_decode(get_post_meta($job_id, 'files', true), true);
                            if (is_array($json)) {

                                foreach ($json as $item) {
                            ?>
                                    <?php
                                    $rand = rand();
                                    ?>
                                    <li class="loop-input-profile-item">
                                        <div class="wt-accordioninnertitle">
                                            <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitleaone<?php echo $rand; ?>">
                                                <figure>
                                                    <img id="pro-img-<?php echo $rand; ?>" src="<?php echo (strlen($item["img"]) > 0) ? $item["img"] : get_template_directory_uri() . '/assets/img/NoImage.jpg'; ?>" alt="img description">
                                                </figure>
                                                <h3><?php echo $item["title"] ?></span></h3>
                                            </div>
                                            <div class="wt-rightarea">
                                                <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitleaone<?php echo $rand; ?>"><i class="lnr lnr-pencil"></i></a>
                                                <a onclick="my_skill_btn_delete(jQuery(this))" href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                            </div>
                                        </div>
                                        <div class="wt-collapseexp collapse" id="innertitleaone<?php echo $rand; ?>" aria-labelledby="accordioninnertitle" data-parent="#accordion">
                                            <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input id="pro-imput-<?php echo $rand; ?>" value="<?php echo $item["img"] ?>" data-id="img" type="hidden">

                                                        <input value="<?php echo $item["title"] ?>" data-id="title" type="text" name="Project Title" class="form-control" placeholder="عنوان فایل">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea data-id="desc" name="message" class="form-control" placeholder="شرح فایل"><?php echo $item["desc"] ?></textarea>
                                                    </div>
                                                    <div class="form-group form-group-label wt-infouploading">
                                                        <div class="wt-labelgroup">
                                                            <label for="filen-<?php echo $rand; ?>">
                                                                <span class="wt-btn">انتخاب تصویر فایل </span>
                                                                <input onchange="ajax_mbm_upload_image($(this),'pro-img-<?php echo $rand; ?>','temp_pro_img','pro-imput-<?php echo $rand; ?>')" type="file" name="file-<?php echo $rand; ?>" id="filen-<?php echo $rand; ?>">
                                                            </label>
                                                            <span> فایل را برای بارگذاری اینجا رها کنید </span>
                                                            <em class="wt-fileuploading">بارگذاری<i class="fa fa-spinner fa-spin"></i></em>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wt-updatall">
        <i class="ti-announcement"></i>
        <span>برای اعمال تغییرات گزینه ذخیره پروژه را بزنید</span>
        <button onclick="ajax_submit_mbm_post_data_resume_save_form(
            {
                'action': 'mbm_profile_user_save_project',
                'job_id':<?php echo $job_id ?>,
                'meta_key':'profile',
                'meta_action':'profile',
            }
            ,'form-profile'
            ,$('#dzFormMsg-error-profile'),
            1
        )" type="button" class="wt-btn">ذخیره پروژه</button>
        <div class="box-loading">
            <div class="loading-ajax"></div>
        </div>
        <div id="dzFormMsg-error-profile" class="dzFormMsg error"></div>
    </div>
</div>