<?php
$user_id = get_current_user_id();

$search = array();

$search["relation"] = "AND"; 

$search[] =           array(
    'key' => 'request_id',
    'value' => 0,
    'compare' => '='
);


$args = array(
    'post_type' => 'job',
    'post_status' => 'publish',
    'author'  => $user_id,
    'meta_query' => $search
);
$the_query = new WP_Query($args);
$count = $the_query->post_count;
?>
<section id="tab-item-1">
    <div id="general-tables-1">
        <div class="form-inline dt-bootstrap no-footer dataTables_wrapper pb-2">
            <!-- <div class="flip pull-left width-xs-8 width-sm-10 search">
                <div class=" col-12">
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control col-12" placeholder="جستجو">
                    </div>
                </div>
            </div>
            <div class="">
                <div class="dataTables_length" id="DataTables_Table_150_length"><label><select class="form-control input-sm col-12">
                            <option value="5">نمایش 5</option>
                            <option value="10">نمایش 10</option>
                            <option value="15">نمایش 15</option>
                        </select></label></div>
            </div> -->
        </div>
        <div class="table-responsive">
            <table class="tablelist table no-footer dataTable" id="DataTables_Table_150">
                <thead class="fa-0-8em border-a border-color-4 no-border-b">
                    <tr class="no-border" role="row">
                        <th class="no-border tc-white bgc-3 sorting_disabled" rowspan="1" colspan="1">نام پروژه</th>
                        <th class="no-border tc-white bgc-3 sorting_disabled" rowspan="1" colspan="1">پیشنهادها</th>
                        <th class="no-border tc-white bgc-3 sorting_disabled" rowspan="1" colspan="1">میانگین
                            پیشنهادها
                        </th>
                        <th class="no-border tc-white bgc-3 sorting_disabled" rowspan="1" colspan="1">تاریخ پایان</th>
                        <th class="no-border tc-white bgc-3 sorting_disabled" rowspan="1" colspan="1"><i class="pf pf-other"></i></th>
                    </tr>
                </thead>
                <tbody class="border-a border-color-10">
                    <?php
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                    ?>
                        <tr>
                            <td><?php echo get_the_title() ?></td>
                            <?php
                            $args1 = array(
                                'post_type' => 'request',
                                'post_status' => 'publish',
                                'meta_key' => 'job_id',
                                'meta_value' => get_the_ID()
                            );
                            $the_query1 = new WP_Query($args1);
                            $count1 = $the_query1->post_count;
                            $avg = 0;
                            $preserve_post = get_post();
                            while ($the_query1->have_posts()) :
                                $the_query1->the_post();
                                $avg += get_post_meta(get_the_ID(), 'price', true);
                            endwhile;
                         
                            
                            $post = $preserve_post;
                            setup_postdata( $post );

                            $avg = round($avg / $count1);
                            ?>
                            <td><?php echo $count1 ?></td>
                            <td><?php echo $avg ?></td>
                            <td><?php
                                $date = date_create();
                                date_modify($date, "+" . get_post_meta(get_the_ID(), 'expire', true) . " day");

                                $d = mktime(date_format($date, "H"), date_format($date, "i"), date_format($date, "s"), date_format($date, "m"), date_format($date, "d"), date_format($date, "Y"));
                                $cur = current_time('timestamp');
                                if ($d > $cur) {
                                    echo  human_time_diff($cur, $d) . ' ' . 'دیگر';
                                } else {
                                    echo  human_time_diff($d, $cur) . ' ' . 'گذشته';
                                }
                                ?></td>
                            <td></td>
                        </tr>
                    <?php
                    endwhile;
                    ?>

                    <?php if ($count == 0) { ?>
                        <tr class="odd">
                            <td valign="top" colspan="5" class="dataTables_empty">
                                <div class="no-result">
                                    <div>پروژه ای پیدا نشد</div>
                                </div>
                            </td>
                        </tr>
                    <?php  } ?>

                </tbody>
            </table>
        </div>

    </div>
</section>