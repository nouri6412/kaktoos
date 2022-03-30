<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Kaktos
 * @since 1.0.0
 * Template Name: صفحه اصلی
 */

get_header();

?>
			<!--Home Banner Start-->
			<div class="wt-haslayout wt-bannerholder">
				<div class="container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-5">
							<div class="wt-bannerimages">
								<figure class="wt-bannermanimg" data-tilt>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bannerimg/img-01.png" alt="img description">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bannerimg/img-02.png" class="wt-bannermanimgone" alt="img description">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bannerimg/img-03.png" class="wt-bannermanimgtwo" alt="img description">
								</figure>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
							<div class="wt-bannercontent">
								<div class="wt-bannerhead">
									<div class="wt-title">
										<h1><span>استخدام متخصص فریلنسر </span>برای هر شغلی ، به صورت آنلاین </h1>
									</div>
									<div class="wt-description">
										<p>لورم ایپسوم یا طرح‌نما  به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته می شود.</p>
									</div>
								</div>
								<form class="wt-formtheme wt-formbanner" action="<?php echo home_url('search-job'); ?>" method="get">
									<fieldset>
										<div class="form-group">
											<input type="text" id="search_word" name="search_word" class="form-control" placeholder="من دنبال ... می گردم.">
											<div class="wt-formoptions">
												<button type="submit" class="wt-searchbtn"><i class="lnr lnr-magnifier"></i></button>
											</div>
										</div>
									</fieldset>
								</form>
								<div class="wt-videoholder">
									<div class="wt-videoshow">
										<a data-rel="prettyPhoto[video]" href="https://www.w3schools.com/html/mov_bbb.mp4"><i class="fa fa-play"></i></a>
									</div>
									<div class="wt-videocontent">
										<span> خودتان ببینید!<em> چگونه کار می کند و نهایت لذت را تجربه می کنید. </em></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--Home Banner End-->
			<!--Main Start-->
			<main id="wt-main" class="wt-main wt-haslayout">
				<!--Categories Start-->
				<section class="wt-haslayout wt-main-section">
					<div class="container">
						<div class="row justify-content-md-center">
							<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
								<div class="wt-sectionhead wt-textcenter">
									<div class="wt-sectiontitle">
										<h2> کاوش در دسته بندی ها </h2>
										<span>حرفه ای بر اساس دسته بندی</span>
									</div>
								</div>
							</div>
							<div class="wt-categoryexpl">
								<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-right">
									<div class="wt-categorycontent">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories/img-01.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">موبایل </a></h3>
										</div>
										<div class="wt-categoryslidup">
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته میشود.</p>
											<a href="javascript:void(0);">جست و جو <i class="fa fa-arrow-left"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-right">
									<div class="wt-categorycontent">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories/img-08.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">بازاریابی دیجیتال</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته میشود.</p>
											<a href="javascript:void(0);">جست و جو <i class="fa fa-arrow-left"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-right">
									<div class="wt-categorycontent">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories/img-02.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);"> نوشتن و ترجمه </a></h3>
										</div>
										<div class="wt-categoryslidup">
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته میشود.</p>
											<a href="javascript:void(0);">جست و جو <i class="fa fa-arrow-left"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-right">
									<div class="wt-categorycontent">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories/img-03.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">ویدئو و انیمیشن </a></h3>
										</div>
										<div class="wt-categoryslidup">
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته میشود.</p>
											<a href="javascript:void(0);">جست و جو <i class="fa fa-arrow-left"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-right">
									<div class="wt-categorycontent">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories/img-04.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);"> صدا و آهنگ</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته میشود.</p>
											<a href="javascript:void(0);">جست و جو <i class="fa fa-arrow-left"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-right">
									<div class="wt-categorycontent">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories/img-05.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">برنامه نویسی و  فناوری </a></h3>
										</div>
										<div class="wt-categoryslidup">
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته میشود.</p>
											<a href="javascript:void(0);">جست و جو <i class="fa fa-arrow-left"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-right">
									<div class="wt-categorycontent">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories/img-06.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">تجارت</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته میشود.</p>
											<a href="javascript:void(0);">جست و جو <i class="fa fa-arrow-left"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 float-right">
									<div class="wt-categorycontent">
										<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories/img-07.png" alt="image description"></figure>
										<div class="wt-cattitle">
											<h3><a href="javascrip:void(0);">سرگرمی و شیوه زندگی</a></h3>
										</div>
										<div class="wt-categoryslidup">
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته میشود.</p>
											<a href="javascript:void(0);">جست و جو <i class="fa fa-arrow-left"></i></a>
										</div>
									</div>
								</div>
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 float-right">
									<div class="wt-btnarea">
										<a href="javascript:void(0)" class="wt-btn">مشاهده همه </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Categories End-->
				<!--Join Company Info Start-->
				<section class="wt-haslayout wt-main-section wt-paddingnull wt-companyinfohold">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-12 col-lg-12">
								<div class="wt-companydetails">
									<div class="wt-companycontent">
										<div class="wt-companyinfotitle">
											<h2>شروع به عنوان شرکت </h2>
										</div>
										<div class="wt-description">
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته می شود.برای پر کردن صفحه و ارایه
            اولیه شکل
             ظاهری و کلی طرح سفارش گرفته شده استفاده اردیبهشت نماید.</p>
										</div>
										<div class="wt-btnarea">
											<a href="javascript:void(0);" class="wt-btn"> اکنون بپیوندید</a>
										</div>
									</div>
									<div class="wt-companycontent">
										<div class="wt-companyinfotitle">
											<h2>شروع به عنوان فریلنسر </h2>
										</div>
										<div class="wt-description">
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته می شود.برای پر کردن صفحه و ارایه
            اولیه شکل
             ظاهری و کلی طرح سفارش گرفته شده استفاده اردیبهشت نماید.</p>
										</div>
										<div class="wt-btnarea">
											<a href="javascript:void(0);" class="wt-btn"> اکنون بپیوندید</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Join Company Info End-->
				<!--Limitless Experience Start-->
				<section class="wt-haslayout wt-main-section">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
								<figure class="wt-mobileimg">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/mobile-img.png" alt="img description">
								</figure>
							</div>
							<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
								<div class="wt-experienceholder">
									<div class="wt-sectionhead">
										<div class="wt-sectiontitle">
											<h2>تجربه نامحدود </h2>
											<span>با کسب و کار خود گردش کنید</span>
										</div>
										<div class="wt-description">
											<p>لورم ایپسوم یا طرح‌نما  به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته می شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه
            اولیه شکل
             ظاهری و کلی طرح سفارش گرفته شده استفاده اردیبهشت نماید..</p>
											<p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
            صفحه‌آرایی و طراحی
            گرافیک گفته می شود</p>
										</div>
										<ul class="wt-appicon">
											<li>
												<a href="javascript:void(0)">
													<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-icon/img-01.png" alt="img description"></figure>
												</a>
											</li>
											<li>
												<a href="javascript:void(0)">
													<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-icon/img-02.png" alt="img description"></figure>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Limitless Experience End-->
				<!--Skills Start-->
				<section class="wt-haslayaout wt-main-section wt-footeraboutus">
					<div class="container">
						<div class="row">
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-widgetskills">
									<div class="wt-fwidgettitle">
										<h3>بر اساس مهارت </h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">مهندس نرم افزار </a></li>
										<li><a href="javascript:void(0);"> نویسنده فنی r</a></li>
										<li><a href="javascript:void(0);">طراح رابط کاربری </a></li>
										<li><a href="javascript:void(0);">طراح </a></li>
										<li><a href="javascript:void(0);">دستیار مجازی </a></li>
										<li><a href="javascript:void(0);">طراح وب</a></li>
										<li><a href="javascript:void(0);"> برنامه نویس وردپرس</a></li>
										<li><a href="javascript:void(0);">نویسنده محتوا </a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ مشاهده همه</a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-widgetskill">
									<div class="wt-fwidgettitle">
										<h3>مهارت ها در ایران </h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">برنامه نویسان HTML در ایران</a></li>
										<li><a href="javascript:void(0);">برنامه نویسان HTML5 در ایران </a></li>
										<li><a href="javascript:void(0);">برنامه نویسان جاوااسکریپت در ایران</a></li>
										<li><a href="javascript:void(0);">کارشناسان مایکروسافت در ایران </a></li>
										<li><a href="javascript:void(0);">کارشناسان پاورپوینت در ایران </a></li>
										<li><a href="javascript:void(0);">بازاریاب  شبکه های اجتماعی در ایران</a></li>
										<li><a href="javascript:void(0);">برنامه نویسان وردپرس در ایران </a></li>
										<li><a href="javascript:void(0);">نویسندگان در ایران</a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ مشاهده همه</a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-footercol wt-widgetcategories">
									<div class="wt-fwidgettitle">
										<h3>بر اساس دسته بندی ها</h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">گرافیست و طراح </a></li>
										<li><a href="javascript:void(0);">بازاریابی دیجیتال</a></li>
										<li><a href="javascript:void(0);"> نوشتن و ترجمه </a></li>
										<li><a href="javascript:void(0);">ویدئو و انیمیشن </a></li>
										<li><a href="javascript:void(0);"> صدا و آهنگ</a></li>
										<li><a href="javascript:void(0);">برنامه نویسی و  فناوری </a></li>
										<li><a href="javascript:void(0);">کسب و کار</a></li>
										<li><a href="javascript:void(0);">سرگرمی و شیوه زندگی</a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ مشاهده همه</a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md-3 col-lg-3">
								<div class="wt-widgetbylocation">
									<div class="wt-fwidgettitle">
										<h3>بر اساس مکان</h3>
									</div>
									<ul class="wt-fwidgetcontent">
										<li><a href="javascript:void(0);">ایران </a></li>
										<li><a href="javascript:void(0);">آمریکا </a></li>
										<li><a href="javascript:void(0);">هلند </a></li>
										<li><a href="javascript:void(0);">انگلیس </a></li>
										<li><a href="javascript:void(0);">عراق </a></li>
										<li><a href="javascript:void(0);">مالزی </a></li>
										<li><a href="javascript:void(0);">چین </a></li>
										<li><a href="javascript:void(0);">کره جنوبی </a></li>
										<li class="wt-viewmore"><a href="javascript:void(0);">+ مشاهده همه</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--Skills Start End-->
			</main>
			<!--Main End-->
<?php

get_footer();
