<li class="wt-active">
    <a href="<?php echo home_url('profile') ?>">
        <i class="ti-briefcase"></i>
        <span>پروفایل من</span>
    </a>
</li>
<li>
    <a target="_Blank" href="<?php echo home_url('user-view?id=' . $user_info->ID) ?>">
        <i class="ti-briefcase"></i>
        <span>پیش نمایش پروفایل</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=my-request&state=0') ?>">
        <i class="ti-briefcase"></i>
        <span>پیشنهادات من</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=my-request&state=1') ?>">
        <i class="ti-briefcase"></i>
        <span>پیشنهادات قبول شده</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=create-project') ?>">
        <i class="ti-briefcase"></i>
        <span>ایجاد پروژه</span>
    </a>
</li>

<li>
    <a href="<?php echo home_url('profile?action=my-jobs') ?>">
        <i class="ti-briefcase"></i>
        <span>مدیریت پروژه ها</span>
    </a>
</li>

<li>
    <a href="<?php echo wp_logout_url(site_url()); ?>">
        <i class="ti-shift-right"></i>
        <span> خروج از سیستم</span>
    </a>
</li>