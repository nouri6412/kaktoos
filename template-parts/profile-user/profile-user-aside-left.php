<?php
$user_info = get_query_var('user_info');
$user_meta = get_query_var('user_meta');
$page_action = get_query_var('page_action');
?>
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
	<div class="wt-haslayout wt-dbsectionspace wt-codescansidebar">
		<div class="tg-authorcodescan wt-codescanholder">
			<figure class="tg-qrcodeimg">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/qrcode.png" alt="img description">
			</figure>
			<div class="tg-qrcodedetail">
				<span class="lnr lnr-laptop-phone"></span>
				<div class="tg-qrcodefeat">
					<h3>اسکن کنید با <span>تلفن هوشمند خود </span>برای دستیابی به آن.</h3>
				</div>
			</div>
			<div class="wt-codescanicons">
				<span> پروفایل خود را به اشتراک بگذارید</span>
				<ul class="wt-socialiconssimple">
					<li class="wt-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
					<li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
					<li class="wt-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
					<li class="wt-clone"><a href="javascript:void(0);"><i class="far fa-clone"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="wt-companyad">
			<figure class="wt-companyadimg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/add-img.jpg" alt="img description"></figure>
			<span>تبلیغات 255px X 255px</span>
		</div>
	</div>
</div>