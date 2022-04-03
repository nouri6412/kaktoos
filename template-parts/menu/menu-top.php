<li class="wt-active">
    <a href="<?php echo home_url('profile') ?>">
        <i class="fa fa-user"></i>
        <span>پروفایل من</span>
    </a>
</li>
<li>
    <a target="_Blank" href="<?php echo home_url('user-view?id=' . $user_info->ID) ?>">
        <i class="fa fa-eye"></i>
        <span>پیش نمایش پروفایل</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=my-request&state=0') ?>">
        <i class="fa fa-paper-plane"></i>
        <span>پیشنهادات من</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=my-request&state=1') ?>">
        <i class="fa fa-check"></i>
        <span>پیشنهادات قبول شده</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=create-project') ?>">
        <i class="fa fa-plus"></i>
        <span>ایجاد پروژه</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=my-jobs') ?>">
        <i class="fa fa-tasks"></i>
        <span>مدیریت پروژه ها</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=my-activity') ?>">
        <i class="fa fa-tasks"></i>
        <span>فعالیت های من</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=message') ?>">
        <i class="fa fa-envelope"></i>
        <span>پیام ها</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=change-pass') ?>">
        <i class="fa fa-key"></i>
        <span>تغییر رمز عبور</span>
    </a>
</li>

<li>
    <a href="<?php echo wp_logout_url(site_url()); ?>">
        <i class="ti-shift-right"></i>
        <span> خروج از سیستم</span>
    </a>
</li>