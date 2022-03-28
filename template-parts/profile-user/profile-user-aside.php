<?php
$user_info = get_query_var('user_info');
$user_meta = get_query_var('user_meta');
$page_action = get_query_var('page_action');
?>
<div id="wt-sidebarwrapper" class="wt-sidebarwrapper">
	<div id="wt-btnmenutoggle" class="wt-btnmenutoggle">
		<span class="menu-icon">
			<em></em>
			<em></em>
			<em></em>
		</span>
	</div>
	<div id="wt-verticalscrollbar" class="wt-verticalscrollbar">
		<div class="wt-companysdetails wt-usersidebar">
			<figure class="wt-companysimg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar/img-01.jpg" alt="img description">
			</figure>
			<div class="wt-companysinfo">
				<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar/img-02.jpg" alt="img description"></figure>
				<div class="wt-title">
					<h2><a href="javascript:void(0);"><?php  isset($user_meta['user_name']) ? $user_meta['user_name'][0] :'' ?></a></h2>
					<span><?php  isset($user_meta['user_name']) ? $user_meta['user_name'][0] :'' ?></span>
				</div>
				<!-- <div class="wt-btnarea"><a href="dashboard-postjob.html" class="wt-btn">ارسال کار </a></div> -->
			</div>
		</div>
		<nav id="wt-navdashboard" class="wt-navdashboard">
			<ul>
				<li class="menu-item-has-children">
					<a href="<?php echo home_url('profile?action=favorite') ?>">
						<i class="ti-dashboard"></i>
						<span>بینش </span>
					</a>
					<ul class="sub-menu">
						<li>
							<hr><a href="dashboard-insights.html">بینش </a>
						</li>
						<li>
							<hr><a href="dashboard-insightsuser.html">بینش کاربر</a>
						</li>
					</ul>
				</li>
				<li class="wt-active">
					<a href="dashboard-profile.html">
						<i class="ti-briefcase"></i>
						<span>پروفایل من</span>
					</a>
				</li>
				<li class="menu-item-has-children">
					<a href="javascript:void(0);">
						<i class="ti-package"></i>
						<span>همه مشاغل</span>
					</a>
					<ul class="sub-menu">
						<li>
							<hr><a href="dashboard-completejobs.html">مشاغل تکمیل شده </a>
						</li>
						<li>
							<hr><a href="dashboard-canceljobs.html"> مشاغل لغو شده </a>
						</li>
						<li>
							<hr><a href="dashboard-ongoingjob.html">مشاغل مداوم</a>
						</li>
						<li>
							<hr><a href="dashboard-ongoingsingle.html">مجرد مداوم</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="dashboard-managejobs.html">
						<i class="ti-announcement"></i>
						<span>مدیریت مشاغل</span>
					</a>
				</li>
				<li class="wt-notificationicon menu-item-has-children">
					<a href="javascript:void(0);">
						<i class="ti-pencil-alt"></i>
						<span>پیام ها</span>
					</a>
					<ul class="sub-menu">
						<li>
							<hr><a href="dashboard-messages.html">پیام ها</a>
						</li>
						<li>
							<hr><a href="dashboard-messages2.html">پیام ها 2</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="dashboard-saveitems.html">
						<i class="ti-heart"></i>
						<span> موارد ذخیره شده من </span>
					</a>
				</li>
				<li>
					<a href="dashboard-invocies.html">
						<i class="ti-file"></i>
						<span>فاکتورها </span>
					</a>
				</li>
				<li>
					<a href="dashboard-category.html">
						<i class="ti-layers"></i>
						<span>دسته بندی</span>
					</a>
				</li>
				<li>
					<a href="dashboard-packages.html">
						<i class="ti-money"></i>
						<span>بسته ها</span>
					</a>
				</li>
				<li>
					<a href="dashboard-proposals.html">
						<i class="ti-bookmark-alt"></i>
						<span>پیشنهادات</span>
					</a>
				</li>
				<li>
					<a href="dashboard-accountsettings.html">
						<i class="ti-anchor"></i>
						<span>تنظیمات حساب</span>
					</a>
				</li>
				<li>
					<a href="dashboard-helpsupport.html">
						<i class="ti-tag"></i>
						<span>راهنما و پشتیبانی</span>
					</a>
				</li>
				<li>
					<a href="<?php echo wp_logout_url(site_url()); ?>">
						<i class="ti-shift-right"></i>
						<span> خروج از سیستم</span>
					</a>
				</li>
			</ul>
		</nav>
		<div class="wt-navdashboard-footer">
			<span>ورکترن. © 1398کلیه حقوق محفوظ است.</span>
		</div>
	</div>
</div>