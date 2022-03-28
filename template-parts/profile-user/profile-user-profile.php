<?php
$user_info = get_query_var('user_info');
$user_meta = get_query_var('user_meta');
?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
    <div class="wt-haslayout wt-dbsectionspace">
        <div class="wt-dashboardbox wt-dashboardtabsholder">
            <div class="wt-dashboardboxtitle">
                <h2>پروفایل من </h2>
            </div>
            <div class="wt-dashboardtabs">
                <ul class="wt-tabstitle nav navbar-nav">
                    <li class="nav-item">
                        <a class="active" data-toggle="tab" href="#wt-skills">اطلاعات شخصی و مهارت ها </a>
                    </li>
                    <li class="nav-item"><a data-toggle="tab" href="#wt-education">تجربه و آموزش </a></li>
                    <li class="nav-item"><a data-toggle="tab" href="#wt-awards">پروژه و دستاوردها</a></li>
                </ul>
            </div>
            <div class="wt-tabscontent tab-content">
                <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                    <div class="wt-yourdetails wt-tabsinfo">
                        <div class="wt-tabscontenttitle">
                            <h2>اطلاعات شما </h2>
                        </div>
                        <form class="wt-formtheme wt-userform">
                            <fieldset>
                                <div class="form-group form-group-half">
                                    <span class="wt-select">
                                        <select>
                                            <option value="" disabled="">جنسیت را انتخاب کنید</option>
                                            <option value="">مرد</option>
                                            <option value="">زن</option>
                                        </select>
                                    </span>
                                </div>
                                <div class="form-group form-group-half">
                                    <input type="text" name="first name" class="form-control" placeholder="نام">
                                </div>
                                <div class="form-group form-group-half">
                                    <input type="email" name="last name" class="form-control" placeholder="نام خانوادگی">
                                </div>
                                <div class="form-group form-group-half">
                                    <input type="number" name="rate" class="form-control" placeholder="نرخ ساعتی خدمات شما (تومان)">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="tagline" class="form-control" placeholder="نشان خود را اینجا اضافه کنید">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="توضیحات"></textarea>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="wt-profilephoto wt-tabsinfo">
                        <div class="wt-tabscontenttitle">
                            <h2>عکس پروفایل</h2>
                        </div>
                        <div class="wt-profilephotocontent">
                            <div class="wt-description">
                                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
                                    صفحه‌آرایی و طراحی
                                    گرافیک گفته می شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه
                                    اولیه شکل
                                    ظاهری و کلی طرح سفارش گرفته شده استفاده اردیبهشت نماید.</p>
                            </div>
                            <form class="wt-formtheme wt-formprojectinfo wt-formcategory">
                                <fieldset>
                                    <div class="form-group form-group-label">
                                        <div class="wt-labelgroup">
                                            <label for="filep">
                                                <span class="wt-btn">انتخاب فایلها </span>
                                                <input type="file" name="file" id="filep">
                                            </label>
                                            <span> فایلها را برای بارگذاری اینجا رها کنید </span>
                                            <em class="wt-fileuploading">بارگذاری<i class="fa fa-spinner fa-spin"></i></em>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <ul class="wt-attachfile wt-attachfilevtwo">
                                            <li class="wt-uploadingholder wt-companyimg-uploading">
                                                <div class="wt-uploadingbox">
                                                    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/img-07.jpg" alt="img description"></figure>
                                                    <div class="wt-uploadingbar wt-uploading">
                                                        <span class="uploadprogressbar"></span>
                                                        <span>Profile Photo.jpg</span>
                                                        <em>سایز فایل : 300 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="wt-uploadingholder wt-companyimg-user">
                                                <div class="wt-uploadingbox">
                                                    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/img-08.jpg" alt="img description"></figure>
                                                    <div class="wt-uploadingbar wt-uploading">
                                                        <span class="uploadprogressbar"></span>
                                                        <span>Profile Photo.jpg</span>
                                                        <em>سایز فایل : 300 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="wt-uploadingholder">
                                                <div class="wt-uploadingbox">
                                                    <div class="wt-designimg">
                                                        <input id="demoz" type="radio" name="employees" value="company" checked="">
                                                        <label for="demoz"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/img-09.jpg" alt="img description"><i class="fa fa-check"></i></label>
                                                    </div>
                                                    <div class="wt-uploadingbar wt-uploading">
                                                        <span class="uploadprogressbar"></span>
                                                        <span>Profile Photo.jpg</span>
                                                        <em>سایز فایل : 300 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="wt-bannerphoto wt-tabsinfo">
                        <div class="wt-tabscontenttitle">
                            <h2>عکس بنر</h2>
                        </div>
                        <div class="wt-profilephotocontent">
                            <div class="wt-description">
                                <p>لورم ایپسوم یا طرح‌نما به متنی آزمایشی و بی‌معنی در صنعت چاپ،
                                    صفحه‌آرایی و طراحی
                                    گرافیک گفته می شود. طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه
                                    اولیه شکل
                                    ظاهری و کلی طرح سفارش گرفته شده استفاده اردیبهشت نماید.</p>
                            </div>
                            <form class="wt-formtheme wt-formprojectinfo wt-formcategory">
                                <fieldset>
                                    <div class="form-group form-group-label">
                                        <div class="wt-labelgroup">
                                            <label for="filew">
                                                <span class="wt-btn">انتخاب فایلها </span>
                                                <input type="file" name="file" id="filew">
                                            </label>
                                            <span> فایلها را برای بارگذاری اینجا رها کنید </span>
                                            <em class="wt-fileuploading">بارگذاری<i class="fa fa-spinner fa-spin"></i></em>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <ul class="wt-attachfile wt-attachfilevtwo">
                                            <li class="wt-uploadingholder">
                                                <div class="wt-uploadingbox">
                                                    <div class="wt-designimg">
                                                        <input id="demoq" type="radio" name="employees" value="company" checked="">
                                                        <label for="demoq"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/company/img-10.jpg" alt="img description"><i class="fa fa-check"></i></label>
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
                    </div>
                    <div class="wt-location wt-tabsinfo">
                        <div class="wt-tabscontenttitle">
                            <h2> مکان شما</h2>
                        </div>
                        <form class="wt-formtheme wt-userform">
                            <fieldset>
                                <div class="form-group form-group-half">
                                    <span class="wt-select">
                                        <select>
                                            <option value="">ایران</option>
                                            <option value="">چین</option>
                                            <option value="">هند</option>
                                        </select>
                                    </span>
                                </div>
                                <div class="form-group form-group-half">
                                    <input type="text" name="address" class="form-control" placeholder="مکان شما">
                                </div>
                                <div class="form-group wt-formmap">
                                    <div id="wt-locationmap" class="wt-locationmap"></div>
                                </div>
                                <div class="form-group form-group-half">
                                    <input type="text" name="text" class="form-control" placeholder="طول جغرافیایی وارد کنید (اختیاری)">
                                </div>
                                <div class="form-group form-group-half">
                                    <input type="text" name="text" class="form-control" placeholder=" عرض جغرافیایی وارد کنید (اختیاری)">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    <div class="wt-tabcompanyinfo wt-tabsinfo">
                        <div class="wt-tabscontenttitle">
                            <h2>اطلاعات شرکت</h2>
                        </div>
                        <div class="wt-accordiondetails">
                            <div class="wt-radioboxholder">
                                <div class="wt-title">
                                    <h4>تعداد کارمندانی که دارید </h4>
                                </div>
                                <span class="wt-radio">
                                    <input id="wt-just" type="radio" name="employees" value="company" checked>
                                    <label for="wt-just">فقط خودم هستم </label>
                                </span>
                                <span class="wt-radio">
                                    <input id="wt-employees" type="radio" name="employees" value="company">
                                    <label for="wt-employees">2 - 9 کارمند</label>
                                </span>
                                <span class="wt-radio">
                                    <input id="wt-employees1" type="radio" name="employees" value="company">
                                    <label for="wt-employees1">10 - 99 کارمند </label>
                                </span>
                                <span class="wt-radio">
                                    <input id="wt-employees2" type="radio" name="employees" value="company">
                                    <label for="wt-employees2">100 - 499 کارمند </label>
                                </span>
                                <span class="wt-radio">
                                    <input id="wt-employees3" type="radio" name="employees" value="company">
                                    <label for="wt-employees3">500 - 1000 کارمند </label>
                                </span>
                                <span class="wt-radio">
                                    <input id="wt-employees4" type="radio" name="employees" value="company">
                                    <label for="wt-employees4">بیشتر از 1000 کارمند</label>
                                </span>
                            </div>
                            <div class="wt-radioboxholder">
                                <div class="wt-title">
                                    <h4>بخش شما؟</h4>
                                </div>
                                <span class="wt-radio">
                                    <input id="wt-department" type="radio" name="department" value="department" checked>
                                    <label for="wt-department">خدمات یا عملیات مشتری </label>
                                </span>
                                <span class="wt-radio">
                                    <input id="wt-department1" type="radio" name="department" value="department">
                                    <label for="wt-department1"> مالی یا حقوقی </label>
                                </span>
                                <span class="wt-radio">
                                    <input id="wt-department2" type="radio" name="department" value="department">
                                    <label for="wt-department2">مهندسی یا مدیریت محصول</label>
                                </span>
                                <span class="wt-radio">
                                    <input id="wt-department3" type="radio" name="department" value="department">
                                    <label for="wt-department3">بازاریابی یا فروش</label>
                                </span>
                                <span class="wt-radio">
                                    <input id="wt-department4" type="radio" name="department" value="department">
                                    <label for="wt-department4">منابع انسانی </label>
                                </span>
                                <span class="wt-radio">
                                    <input id="wt-department5" type="radio" name="department" value="department">
                                    <label for="wt-department5">دیگر</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="wt-skills">
                        <div class="wt-tabscontenttitle">
                            <h2>مهارت های من</h2>
                        </div>
                        <div class="wt-skillscontent-holder">
                            <form class="wt-formtheme wt-skillsform">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="form-group-holder">
                                            <span class="wt-select">
                                                <select>
                                                    <option value=""> انتخاب مهارت </option>
                                                    <option value="">اچ‌تی‌ام‌ال</option>
                                                    <option value="">پی‌اچ‌پی</option>
                                                    <option value="">جی‌کوئری</option>
                                                </select>
                                            </span>
                                            <input type="number" name="rate" class="form-control" placeholder="مهارت خود را ارزیابی کنید (0٪ تا 100٪)">
                                        </div>
                                    </div>
                                    <div class="form-group wt-btnarea">
                                        <a href="javascript:void(0);" class="wt-btn"> افزودن مهارت ها</a>
                                    </div>
                                </fieldset>
                            </form>
                            <div class="wt-myskills">
                                <ul class="sortable list">
                                    <li>
                                        <div class="wt-dragdroptool">
                                            <a href="javascript:void(0)" class="lnr lnr-menu"></a>
                                        </div>
                                        <span class="skill-dynamic-html">پی‌اچ‌پی (<em class="skill-val">90</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-dragdroptool"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                        <span class="skill-dynamic-html">طراحی سایت (<em class="skill-val">55</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                        <span class="skill-dynamic-html">اچ‌تی‌ام‌ال 5 (<em class="skill-val">90</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                        <span class="skill-dynamic-html">طراحی گرافیک (<em class="skill-val">80</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                        <span class="skill-dynamic-html">مهارت خود راارزیابی کنید (<em class="skill-val">10</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                        <span class="skill-dynamic-html">سئو (<em class="skill-val">35</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                        <span class="skill-dynamic-html">ما‌ی‌اسکیوال(<em class="skill-val">40</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                        <span class="skill-dynamic-html">نوشتن محتوا (<em class="skill-val">80</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                        <span class="skill-dynamic-html">سی‌اس‌اس(<em class="skill-val">80</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                        <span class="skill-dynamic-html">جی‌کوئری(<em class="skill-val">75</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wt-dragdroptool handle"><a href="javascript:void(0)" class="lnr lnr-menu"></a></div>
                                        <span class="skill-dynamic-html">بوت استرپ (<em class="skill-val">96</em>%)</span>
                                        <span class="skill-dynamic-field">
                                            <input type="text" name="skills[1][percentage]" value="90">
                                        </span>
                                        <div class="wt-rightarea">
                                            <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                                            <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wt-educationholder tab-pane fade" id="wt-education">
                    <div class="wt-userexperience wt-tabsinfo">
                        <div class="wt-tabscontenttitle wt-addnew">
                            <h2>تجربه خود را اضافه کنید </h2>
                            <a href="javascript:void(0);"> افزودن جدید</a>
                        </div>
                        <ul class="wt-experienceaccordion accordion">
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <span id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle">مدیر پروژه وب و برنامه ها<em>(خرداد 1396 - تیر 1397)</em></span>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle" data-toggle="collapse" data-target="#innertitle" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse show" id="innertitle" aria-labelledby="accordioninnertitle" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Company Title" class="form-control" placeholder="عنوان شرکت">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Starting Date" class="form-control" placeholder="تاریخ شروع">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="email" name="Ending Date" class="form-control" placeholder="تاریخ پایان *">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="number" name="Job Title" class="form-control" placeholder="عنوان شغل شما">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="شرح شغل شما"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <span>* اگر پایان کار شغل فعلی شماست ، تاریخ خالی بگذارید </span>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <span id="accordioninnertitlea" data-toggle="collapse" data-target="#innertitlea">برنامه نویس پی‌اچ‌پی و لاراول <em>( خرداد 1396- تیر 1397 )</em></span>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitlea" data-toggle="collapse" data-target="#innertitlea" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse hide" id="innertitlea" aria-labelledby="accordioninnertitleaa" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Company Title" class="form-control" placeholder="عنوان شرکت">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Starting Date" class="form-control" placeholder="تاریخ شروع">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="email" name="Ending Date" class="form-control" placeholder="تاریخ پایان *">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="number" name="Job Title" class="form-control" placeholder="عنوان شغل شما">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="شرح شغل شما"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <span>* اگر پایان کار شغل فعلی شماست ، تاریخ خالی بگذارید </span>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <span id="accordioninnertitleb" data-toggle="collapse" data-target="#innertitleb">برنامه نویس پی‌اچ‌پی و لاراول <em>(فروردين 1395- تير 1396)</em></span>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitleb" data-toggle="collapse" data-target="#innertitleb" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse hide" id="innertitleb" aria-labelledby="accordioninnertitleb" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Company Title" class="form-control" placeholder="عنوان شرکت">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Starting Date" class="form-control" placeholder="تاریخ شروع">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="email" name="Ending Date" class="form-control" placeholder="تاریخ پایان *">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="number" name="Job Title" class="form-control" placeholder="عنوان شغل شما">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="شرح شغل شما"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <span>* اگر پایان کار شغل فعلی شماست ، تاریخ خالی بگذارید </span>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="wt-userexperience">
                        <div class="wt-tabscontenttitle wt-addnew">
                            <h2>تحصیلات خود را اضافه کنید </h2>
                            <a href="javascript:void(0);">افزودن جدید</a>
                        </div>
                        <ul class="wt-experienceaccordion accordion">
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <span id="accordioninnertitle1" data-toggle="collapse" data-target="#innertitle1">مدیر پروژه وب و برنامه <em>(خرداد 1396 - تیر 1397 )</em></span>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitle1" data-toggle="collapse" data-target="#innertitle1" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse show" id="innertitle1" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Company Title" class="form-control" placeholder="عنوان شرکت">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Starting Date" class="form-control" placeholder="تاریخ شروع">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="email" name="Ending Date" class="form-control" placeholder="تاریخ پایان *">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="number" name="Job Title" class="form-control" placeholder="عنوان شغل شما">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="شرح شغل شما"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <span>* اگر پایان کار شغل فعلی شماست ، تاریخ خالی بگذارید </span>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <span id="accordioninnertitlea2" data-toggle="collapse" data-target="#innertitlea2">برنامه نویس پی‌اچ‌پی و لاراول <em>(خرداد 1396 - تیر 1397 )</em></span>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitlea2" data-toggle="collapse" data-target="#innertitlea2" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse hide" id="innertitlea2" aria-labelledby="accordioninnertitleaa" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Company Title" class="form-control" placeholder="عنوان شرکت">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Starting Date" class="form-control" placeholder="تاریخ شروع">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="email" name="Ending Date" class="form-control" placeholder="تاریخ پایان *">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="number" name="Job Title" class="form-control" placeholder="عنوان شغل شما">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="شرح شغل شما"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <span>* اگر پایان کار شغل فعلی شماست ، تاریخ خالی بگذارید </span>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <span id="accordioninnertitleb3" data-toggle="collapse" data-target="#innertitleb3">برنامه نویس پی‌اچ‌پی و لاراول <em>(فروردين 1395- تير 1396)</em></span>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninnertitleb" data-toggle="collapse" data-target="#innertitleb" aria-expanded="true"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse hide" id="innertitleb3" aria-labelledby="accordioninnertitleb3" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Company Title" class="form-control" placeholder="عنوان شرکت">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Starting Date" class="form-control" placeholder="تاریخ شروع">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="email" name="Ending Date" class="form-control" placeholder="تاریخ پایان *">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="number" name="Job Title" class="form-control" placeholder="عنوان شغل شما">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" placeholder="شرح شغل شما"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <span>* اگر پایان کار شغل فعلی شماست ، تاریخ خالی بگذارید </span>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="wt-awardsholder tab-pane fade" id="wt-awards">
                    <div class="wt-addprojectsholder wt-tabsinfo">
                        <div class="wt-tabscontenttitle wt-addnew">
                            <h2>پروژه های خود را اضافه کنید</h2>
                            <a href="javascript:void(0);">افزودن جدید</a>
                        </div>
                        <ul class="wt-experienceaccordion accordion">
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitleaone">
                                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/img-11.jpg" alt="img description"></figure>
                                        <h3>عنوان پروژه در اینجا <span>www.themeforest.net</span></h3>
                                    </div>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitleaone"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse" id="innertitleaone" aria-labelledby="accordioninnertitle" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Project Title" class="form-control" placeholder="عنوان پروژه">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Project URL" class="form-control" placeholder="آدرس پروژه">
                                            </div>
                                            <div class="form-group form-group-label wt-infouploading">
                                                <div class="wt-labelgroup">
                                                    <label for="filen">
                                                        <span class="wt-btn">انتخاب فایلها </span>
                                                        <input type="file" name="file" id="filen">
                                                    </label>
                                                    <span> فایلها را برای بارگذاری اینجا رها کنید </span>
                                                    <em class="wt-fileuploading">بارگذاری<i class="fa fa-spinner fa-spin"></i></em>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <ul class="wt-attachfile">
                                                    <li class="wt-uploading">
                                                        <span>Logo.jpg</span>
                                                        <em>سایز فایل : 300 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Wireframe Document.doc</span>
                                                        <em>سایز فایل : 512 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Requirments.pdf</span>
                                                        <em>سایز فایل : 110 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>company Intro.docx</span>
                                                        <em>سایز فایل : 224 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group wt-btnarea">
                                                <a href="javascript:void(0);" class="wt-btn">ذخیره</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlebone">
                                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/img-12.jpg" alt="img description"></figure>
                                        <h3>عنوان پروژه در اینجا <span>www.themeforest.net</span></h3>
                                    </div>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlebone"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse show" id="innertitlebone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Project Title" class="form-control" placeholder="عنوان پروژه">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Project URL" class="form-control" placeholder="آدرس پروژه">
                                            </div>
                                            <div class="form-group form-group-label wt-infouploading">
                                                <div class="wt-labelgroup">
                                                    <label for="filet">
                                                        <span class="wt-btn">انتخاب فایلها </span>
                                                        <input type="file" name="file" id="filet">
                                                    </label>
                                                    <span> فایلها را برای بارگذاری اینجا رها کنید </span>
                                                    <em class="wt-fileuploading">بارگذاری<i class="fa fa-spinner fa-spin"></i></em>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <ul class="wt-attachfile">
                                                    <li class="wt-uploading">
                                                        <span>Logo.jpg</span>
                                                        <em>سایز فایل : 300 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Wireframe Document.doc</span>
                                                        <em>سایز فایل : 512 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Requirments.pdf</span>
                                                        <em>سایز فایل : 110 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>company Intro.docx</span>
                                                        <em>سایز فایل : 224 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group wt-btnarea">
                                                <a href="javascript:void(0);" class="wt-btn">ذخیره</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlecone">
                                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/img-13.jpg" alt="img description"></figure>
                                        <h3>عنوان پروژه در اینجا <span>www.themeforest.net</span></h3>
                                    </div>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlecone"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse" id="innertitlecone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Project Title" class="form-control" placeholder="عنوان پروژه">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Project URL" class="form-control" placeholder="آدرس پروژه">
                                            </div>
                                            <div class="form-group form-group-label wt-infouploading">
                                                <div class="wt-labelgroup">
                                                    <label for="fileb">
                                                        <span class="wt-btn">انتخاب فایلها </span>
                                                        <input type="file" name="file" id="fileb">
                                                    </label>
                                                    <span> فایلها را برای بارگذاری اینجا رها کنید </span>
                                                    <em class="wt-fileuploading">بارگذاری<i class="fa fa-spinner fa-spin"></i></em>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <ul class="wt-attachfile">
                                                    <li class="wt-uploading">
                                                        <span>Logo.jpg</span>
                                                        <em>سایز فایل : 300 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Wireframe Document.doc</span>
                                                        <em>سایز فایل : 512 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Requirments.pdf</span>
                                                        <em>سایز فایل : 110 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>company Intro.docx</span>
                                                        <em>سایز فایل : 224 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group wt-btnarea">
                                                <a href="javascript:void(0);" class="wt-btn">ذخیره</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="wt-addprojectsholder">
                        <div class="wt-tabscontenttitle wt-addnew">
                            <h2>جوایز خود را اضافه کنید </h2>
                            <a href="javascript:void(0);">افزودن جدید</a>
                        </div>
                        <ul class="wt-experienceaccordion accordion">
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitleawone">
                                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/img-08.jpg" alt="img description"></figure>
                                        <h3>عنوان جایزه در اینجا <samp> 8 ارديبهشت 1395</samp></h3>
                                    </div>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitleawone"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse" id="innertitleawone" aria-labelledby="accordioninnertitle" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Awards" class="form-control" placeholder="عنوان جایزه">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="awards" class="form-control" placeholder="تاریخ جایزه">
                                            </div>
                                            <div class="form-group form-group-label wt-infouploading">
                                                <div class="wt-labelgroup">
                                                    <label for="file">
                                                        <span class="wt-btn">انتخاب فایلها </span>
                                                        <input type="file" name="file" id="file">
                                                    </label>
                                                    <span> فایلها را برای بارگذاری اینجا رها کنید </span>
                                                    <em class="wt-fileuploading">بارگذاری<i class="fa fa-spinner fa-spin"></i></em>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <ul class="wt-attachfile">
                                                    <li class="wt-uploading">
                                                        <span>Logo.jpg</span>
                                                        <em>سایز فایل : 300 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Wireframe Document.doc</span>
                                                        <em>سایز فایل : 512 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Requirments.pdf</span>
                                                        <em>سایز فایل : 110 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>company Intro.docx</span>
                                                        <em>سایز فایل : 224 کیلوبایت <a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group wt-btnarea">
                                                <a href="javascript:void(0);" class="wt-btn">ذخیره</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlebwone">
                                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/img-08.jpg" alt="img description"></figure>
                                        <h3>عنوان جایزه در اینجا <samp> 8 ارديبهشت 1395</samp></h3>
                                    </div>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlebwone"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse show" id="innertitlebwone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Award Title" class="form-control" placeholder="عنوان جایزه">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Award Date" class="form-control" placeholder="تاریخ جایزه">
                                            </div>
                                            <div class="form-group form-group-label wt-infouploading">
                                                <div class="wt-labelgroup">
                                                    <label for="filea">
                                                        <span class="wt-btn">انتخاب فایلها </span>
                                                        <input type="file" name="file" id="filea">
                                                    </label>
                                                    <span> فایلها را برای بارگذاری اینجا رها کنید </span>
                                                    <em class="wt-fileuploading">بارگذاری<i class="fa fa-spinner fa-spin"></i></em>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <ul class="wt-attachfile">
                                                    <li class="wt-uploading">
                                                        <span>Logo.jpg</span>
                                                        <em>سایز فایل : 300 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Wireframe Document.doc</span>
                                                        <em>سایز فایل : 512 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Requirments.pdf</span>
                                                        <em>سایز فایل : 110 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>company Intro.docx</span>
                                                        <em>سایز فایل : 224 کیلوبایت <a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group wt-btnarea">
                                                <a href="javascript:void(0);" class="wt-btn">ذخیره</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="wt-accordioninnertitle">
                                    <div class="wt-projecttitle collapsed" data-toggle="collapse" data-target="#innertitlecwone">
                                        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/img-09.jpg" alt="img description"></figure>
                                        <h3>عنوان جایزه در اینجا <samp> 8 ارديبهشت 1395</samp></h3>
                                    </div>
                                    <div class="wt-rightarea">
                                        <a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-toggle="collapse" data-target="#innertitlecwone"><i class="lnr lnr-pencil"></i></a>
                                        <a href="javascript:void(0);" class="wt-deleteinfo"><i class="lnr lnr-trash"></i></a>
                                    </div>
                                </div>
                                <div class="wt-collapseexp collapse" id="innertitlecwone" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
                                    <form class="wt-formtheme wt-userform wt-formprojectinfo">
                                        <fieldset>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Award Title" class="form-control" placeholder="عنوان جایزه">
                                            </div>
                                            <div class="form-group form-group-half">
                                                <input type="text" name="Award Date" class="form-control" placeholder="تاریخ جایزه">
                                            </div>
                                            <div class="form-group form-group-label wt-infouploading">
                                                <div class="wt-labelgroup">
                                                    <label for="filec">
                                                        <span class="wt-btn">انتخاب فایلها </span>
                                                        <input type="file" name="file" id="filec">
                                                    </label>
                                                    <span> فایلها را برای بارگذاری اینجا رها کنید </span>
                                                    <em class="wt-fileuploading">بارگذاری<i class="fa fa-spinner fa-spin"></i></em>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <ul class="wt-attachfile">
                                                    <li class="wt-uploading">
                                                        <span>Logo.jpg</span>
                                                        <em>سایز فایل : 300 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Wireframe Document.doc</span>
                                                        <em>سایز فایل : 512 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>Requirments.pdf</span>
                                                        <em>سایز فایل : 110 کیلوبایت<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                    <li>
                                                        <span>company Intro.docx</span>
                                                        <em>سایز فایل : 224 کیلوبایت <a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group wt-btnarea">
                                                <a href="javascript:void(0);" class="wt-btn">ذخیره</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wt-updatall">
        <i class="ti-announcement"></i>
        <span>تنها با کلیک روی دکمه "ذخیره و ادامه" ، آخرین تغییرات ایجاد شده توسط خود را به روز کنید.</span>
        <a class="wt-btn" href="javascript:void(0);">ذخیره و به روز رسانی</a>
    </div>
</div>