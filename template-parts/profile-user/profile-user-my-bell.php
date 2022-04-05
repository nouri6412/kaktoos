<?php
$user_id = get_current_user_id();

$notifi=[];
$str = get_the_author_meta('notifi', $user_id);
if (strlen($str) > 0) {
    $notifi = json_decode($str, true);
}

?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="row">
        <div class="col-sm-12">
            <a href="#"> اطلاعیه ها</a>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-sm-12">
            <div class="notifications-content">
                <ul class="list-unstyled">
                    <?php $index = 65;
                    foreach ($notifi as $item) {
                    ?>
                        <li class="full-width clearfix">
                            <div class="visible-table full-width">
                                <div class="notification-title visible-table-cell">
                                    <div><?php echo $item["text"]; ?></div>
                                    <div class="tc-9 pt- fa-0-8em"><?php echo  human_time_diff($item["date"], current_time('timestamp')) . ' ' . 'پیش'  ?></div>
                                </div>
                            </div>
                        </li>
                    <?php $index = 0;
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</div>