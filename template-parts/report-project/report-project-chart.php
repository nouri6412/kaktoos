<?php
$type_chart = get_query_var('type_chart');
$chart_id="chart-".$type_chart;
?>
        <div class="tab__content">
            <div class="row pv+++">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div id="stats" style="width: 100%; height: 300px;">
                                    <div style="position: relative;">
                                        <div dir="ltr" style="position: relative; width: 100%; height: 300px;">
                                            <div aria-label="A chart." style="position: absolute; left: 0px; top: 0px; width: 100%; height: 100%;">
                                                <div class="chart-box">
                                                    <canvas id="<?php echo $chart_id ?>" style="width:100%;padding: 5px; "></canvas>
                                                </div>

                                                <script>
                                                    setTimeout(function() {
                                                        custom_theme_mbm_chart_coin('<?php echo $type_chart ?>','<?php echo $chart_id ?>', '', true, true);
                                                    }, 500 * <?php echo $type_chart ?>);
                                                </script>
                                                <div aria-label="A tabular representation of the data in the chart." style="position: absolute; left: -10000px; top: auto; width: 1px; height: 1px; overflow: hidden;">
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>Month</th>
                                                                <th>بازدید از پروفایل</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>بهمن</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <td>اسفند</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <td>فروردین</td>
                                                                <td>0</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div aria-hidden="true" style="display: none; position: absolute; top: 310px; left: 790px; white-space: nowrap; font-family: Arial; font-size: 13px;">
                                            ...</div>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 height-50px"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 height-50px"></div>
                    </div>
                    <div class="col-sm-12 visible-xs visible-sm">
                        <div class="row">
                            <div class="col-sm-12 fa-1-5em">
                                <span>دریافت شده تا به امروز</span>
                            </div>
                            <div class="col-sm-12 pv+">
                                <div class="list-group list-group-horizontal text-center visible-table full-width min-h-80">
                                    <a href="#" class="list-group-item width-xs-4 visible-table-cell middle-v-a active">
                                        7<br>
                                        <span class="fa-0-8em">بازدید از پروفایل
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item width-xs-4 visible-table-cell middle-v-a">
                                        0<br>
                                        <span class="fa-0-8em">بازدید از نمونه کار
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item width-xs-4 visible-table-cell middle-v-a">
                                        0<br>
                                        <span class="fa-0-8em">نمونه کار پسندیده شد
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-12 pb+">
                                <div class="list-group list-group-horizontal visible-table full-width min-h-80">
                                    <a href="#" class="list-group-item width-xs-12 border-left border-color-10 visible-table-cell middle-v-a border-rad-md">
                                        0<br>
                                        <span class="fa-0-8em">درآمد کسب شده

                                            <div class="flip pull-right btn-group p-btn-group pt" data-toggle="buttons">
                                                <label class="btn btn-alternative ph+++">ریال
                                                </label>
                                            </div>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-12 pb+">
                                <div class="list-group list-group-horizontal visible-table full-width min-h-80">
                                    <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                        0<br>
                                        <span class="fa-0-8em">بازدید از پروژه های شما
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                        0<br>
                                        <span class="fa-0-8em">پیشنهاد روی پروژه های شما
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-12 pb+">
                                <div class="list-group list-group-horizontal visible-table full-width min-h-80">
                                    <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                        0<br>
                                        <span class="fa-0-8em">امتیاز کل دریافت شده
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-sm-12 fa-1-5em pv++">
                                <span>انجام شده تا به امروز</span>
                            </div>
                            <div class="col-sm-12 pb+">
                                <div class="list-group list-group-horizontal visible-table full-width min-h-80">
                                    <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                        0<br>
                                        <span class="fa-0-8em">نمونه کار ایجاد کردید
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                        0<br>
                                        <span class="fa-0-8em">نمونه کار را پسندیدید
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 pb+">
                                <div class="list-group list-group-horizontal visible-table full-width min-h-80">
                                    <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                        4<br>
                                        <span class="fa-0-8em">پیشنهاد ارسال کردید
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                        0<br>
                                        <span class="fa-0-8em">پروژه ایجاد کردید
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 height-50px"></div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-sm-12 height-100px"></div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6 mb+++">
                            <div class="row">
                                <div class="col-sm-12 fa-1-5em">کاربرانی که از پروفایل شمابازدید
                                    کردند
                                </div>
                                <div class="col-sm-12 mt+ avatars">
                                    <div class="clearfix mb++">
                                        <div class="flip pull-left">
                                            <div class="relative avatar flip pull-right">
                                                <a href="">
                                                    <img class="img-circle profile-50" alt="clickstack" title="clickstack" src="<?php echo get_template_directory_uri(); ?>/assets/images/s/sidebar/img-02.jpg">
                                                    <span class="profile-labels position-50 offline" user_id="526118"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flip pull-left pt ph+">
                                            <div>
                                                <a href="" username="clickstack" limit="20">clickstack</a>
                                            </div>
                                            <div class="fa-12px">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix mb++">
                                        <div class="flip pull-left">
                                            <div class="relative avatar flip pull-right">
                                                <a href="">
                                                    <img class="img-circle profile-50" alt="keivan88" title="keivan88" src="<?php echo get_template_directory_uri(); ?>/assets/images/s/sidebar/img-02.jpg">
                                                    <span class="profile-labels position-50 offline" user_id="610213"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flip pull-left pt ph+">
                                            <div>
                                                <a href="" username="keivan88" limit="20">keivan88</a>
                                            </div>
                                            <div class="fa-12px">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix mb++">
                                        <div class="flip pull-left">
                                            <div class="relative avatar flip pull-right">
                                                <a href="">
                                                    <img class="img-circle profile-50" alt="alizamani16" title="alizamani16" src="<?php echo get_template_directory_uri(); ?>/assets/images/s/sidebar/img-02.jpg">
                                                    <span class="profile-labels position-50 offline" user_id="154898"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flip pull-left pt ph+">
                                            <div>
                                                <a href="" username="alizamani16" limit="20">alizamani16</a>
                                            </div>
                                            <div class="fa-12px">
                                                <span class="rate">
                                                    <i class="pf pf-star on"></i><i class="pf pf-star on"></i><i class="pf pf-star on"></i><i class="pf pf-star on"></i><i class="pf pf-star on"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix mb++">
                                        <div class="flip pull-left">
                                            <div class="relative avatar flip pull-right">
                                                <a href="">
                                                    <img class="img-circle profile-50" alt="royallyhome" title="royallyhome" src="<?php echo get_template_directory_uri(); ?>/assets/images/s/sidebar/img-02.jpg">
                                                    <span class="profile-labels position-50 offline" user_id="185504"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flip pull-left pt ph+">
                                            <div>
                                                <a href="" username="royallyhome" limit="20">royallyhome</a>
                                            </div>
                                            <div class="fa-12px">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix mb++">
                                        <div class="flip pull-left">
                                            <div class="relative avatar flip pull-right">
                                                <a href="">
                                                    <img class="img-circle profile-50" alt="alirezaet" title="alirezaet" src="<?php echo get_template_directory_uri(); ?>/assets/images/s/sidebar/img-02.jpg">
                                                    <span class="profile-labels position-50 offline" user_id="222099"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flip pull-left pt ph+">
                                            <div>
                                                <a href="" username="alirezaet" limit="20">alirezaet</a>
                                            </div>
                                            <div class="fa-12px">
                                                <span class="rate">
                                                    <i class="pf pf-star on"></i><i class="pf pf-star on"></i><i class="pf pf-star on"></i><i class="pf pf-star on"></i><i class="pf pf-star on"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix mb++">
                                        <div class="flip pull-left">
                                            <div class="relative avatar flip pull-right">
                                                <a href="">
                                                    <img class="img-circle profile-50" alt="mohsenonline" title="mohsenonline" src="<?php echo get_template_directory_uri(); ?>/assets/images/s/sidebar/img-02.jpg">
                                                    <span class="profile-labels position-50 offline" user_id="561848"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flip pull-left pt ph+">
                                            <div>
                                                <a href="" username="mohsenonline" limit="20">mohsenonline</a>
                                            </div>
                                            <div class="fa-12px">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-12 fa-1-5em">
                                    کاربرانی که شما از پروفایل آنها بازدید کردید
                                </div>
                                <div class="col-sm-12 mt+ avatars">
                                    <div class="clearfix mb++">
                                        <div class="flip pull-left">
                                            <div class="relative avatar flip pull-right">
                                                <a href="">
                                                    <img class="img-circle profile-50" alt="javadrahati" title="javadrahati" src="<?php echo get_template_directory_uri(); ?>/assets/images/s/sidebar/img-02.jpg">
                                                    <span class="profile-labels position-50 offline" user_id="136773"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flip pull-left pt ph+">
                                            <div>
                                                <a href="" username="javadrahati" limit="20">javadrahati</a>
                                            </div>
                                            <div class="fa-12px">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix mb++">
                                        <div class="flip pull-left">
                                            <div class="relative avatar flip pull-right">
                                                <a href="">
                                                    <img class="img-circle profile-50" alt="keivan88" title="keivan88" src="<?php echo get_template_directory_uri(); ?>/assets/images/s/sidebar/img-02.jpg">
                                                    <span class="profile-labels position-50 offline" user_id="610213"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flip pull-left pt ph+">
                                            <div>
                                                <a href="" username="keivan88" limit="20">keivan88</a>
                                            </div>
                                            <div class="fa-12px">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix mb++">
                                        <div class="flip pull-left">
                                            <div class="relative avatar flip pull-right">
                                                <a href="">
                                                    <img class="img-circle profile-50" alt="mehdibeygipoor" title="mehdibeygipoor" src="<?php echo get_template_directory_uri(); ?>/assets/images/s/sidebar/img-02.jpg">
                                                    <span class="profile-labels position-50 offline" user_id="362257"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flip pull-left pt ph+">
                                            <div>
                                                <a href="" username="mehdibeygipoor" limit="20">mehdibeygipoor</a>
                                            </div>
                                            <div class="fa-12px">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix mb++">
                                        <div class="flip pull-left">
                                            <div class="relative avatar flip pull-right">
                                                <a href="">
                                                    <img class="img-circle profile-50" alt="clickstack" title="clickstack" src="<?php echo get_template_directory_uri(); ?>/assets/images/s/sidebar/img-02.jpg">
                                                    <span class="profile-labels position-50 offline" user_id="526118"></span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="flip pull-left pt ph+">
                                            <div>
                                                <a href="" username="clickstack" limit="20">clickstack</a>
                                            </div>
                                            <div class="fa-12px">
                                                <span class="rate">
                                                    <i class="fa fa-star"></i><i class="fa fa-star"></i>
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-xs hidden-xxs hidden-sm">
                    <div class="row">
                        <div class="col-sm-12 fa-1-5em">
                            <span>دریافت شده در سه ماه گذشته</span>

                        </div>
                        <div class="col-sm-12 pv+">
                            <div class="list-group list-group-horizontal text-center visible-table full-width min-h-80">
                                <a href="#" class="list-group-item width-xs-4 visible-table-cell middle-v-a active">
                                    0<br>
                                    <span class="fa-0-8em">
                                        بازدید از پروفایل
                                    </span>
                                </a>
                                <a href="#" class="list-group-item width-xs-4 visible-table-cell middle-v-a">
                                    0<br>
                                    <span class="fa-0-8em">
                                        بازدید از نمونه کار
                                    </span>
                                </a>
                                <a href="#" class="list-group-item width-xs-4 visible-table-cell middle-v-a">
                                    0<br>
                                    <span class="fa-0-8em">
                                        نمونه کار پسندیده شد
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-12 pb+">
                            <div class="list-group list-group-horizontal visible-table full-width min-h-80">
                                <a href="#" class="list-group-item width-xs-12 border-left border-color-10 visible-table-cell middle-v-a">
                                    <div class="flip pull-left">
                                        0<br>
                                        <span class="fa-0-8em">
                                            درآمد کسب شده
                                        </span>
                                    </div>
                                    <div class="flip pull-right btn-group p-btn-group" data-toggle="buttons">
                                        <label class="btn btn-alternative ph+++">
                                            ریال
                                        </label>
                                    </div>

                                </a>
                            </div>
                        </div>

                        <div class="col-sm-12 pb+">
                            <div class="list-group list-group-horizontal visible-table full-width min-h-80">
                                <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                    0<br>
                                    <span class="fa-0-8em">
                                        بازدید از پروژه های شما
                                    </span>
                                </a>
                                <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                    0<br>
                                    <span class="fa-0-8em">
                                        پیشنهاد روی پروژه های شما
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-12 pb+">
                            <div class="list-group list-group-horizontal visible-table full-width min-h-80">
                                <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                    0<br>
                                    <span class="fa-0-8em">
                                        امتیاز کل دریافت شده
                                    </span>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-12 fa-1-5em pv++">
                            <span>انجام شده در سه ماه گذشته</span>
                        </div>
                        <div class="col-sm-12 pb+">
                            <div class="list-group list-group-horizontal visible-table full-width min-h-80">
                                <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                    0<br>
                                    <span class="fa-0-8em">
                                        نمونه کار ایجاد کردید
                                    </span>
                                </a>
                                <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                    0<br>
                                    <span class="fa-0-8em">
                                        نمونه کار را پسندیدید
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 pb+">
                            <div class="list-group list-group-horizontal visible-table full-width min-h-80">
                                <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                    0<br>
                                    <span class="fa-0-8em">
                                        پیشنهاد ارسال کردید
                                    </span>
                                </a>
                                <a href="#" class="list-group-item width-xs-6 visible-table-cell middle-v-a">
                                    0<br>
                                    <span class="fa-0-8em">
                                        پروژه ایجاد کردید
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>