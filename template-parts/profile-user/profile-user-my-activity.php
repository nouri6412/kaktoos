<?php
$user_type = "user";
if (isset($_GET["user_type"])) {
    $user_type = $_GET["user_type"];
}
?>

<?php if ($user_type != "user") { ?>

    <style>
        .switch label::after {
            right: 0;
        }
    </style>
<?php } ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
    <div class="row text-center d-flex justify-content-center">
        <div class="d-flex justify-content-center">
            <span class="">کارفرما</span>
            <div class="switch">
                <input user-type="<?php echo $user_type; ?>" onchange="repoert_change_project(jQuery(this))" type="checkbox" id="toggleAll" />
                <label for="toggleAll"></label>
            </div>
            <span class="">فریلنسر</span>
        </div>
    </div>
    <!--  -->
    <div>
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <h3>پروژه ها</h3>
                </div>
                <div class="col-12">
                    <div class="tabs effect-1">
                        <?php if ($user_type != "user") { ?>
                            <!-- tab-title -->
                            <input type="radio" id="tab-1" name="tab-effect-1" checked="checked">
                            <span>باز</span>
                            <input type="radio" id="tab-2" name="tab-effect-1">
                            <span>در حال انجام کار</span>
                            <input type="radio" id="tab-3" name="tab-effect-1">
                            <span>گذشته</span>

                            <!-- tab-content -->
                            <div class="tab-content">
                                <?php
                                get_template_part('template-parts/report-project/report-project', $user_type . '-1');
                                get_template_part('template-parts/report-project/report-project', $user_type . '-2');
                                get_template_part('template-parts/report-project/report-project', $user_type . '-3');
                                ?>
                            </div>
                        <?php } else { ?>
                            <!-- tab-title -->
                            <input type="radio" id="tab-1" name="tab-effect-1" checked="checked">
                            <span>در حال انجام کار</span>
                            <input type="radio" id="tab-2" name="tab-effect-1">
                            <span>گذشته</span>

                            <!-- tab-content -->
                            <div class="tab-content">
                                <?php
                                get_template_part('template-parts/report-project/report-project', $user_type . '-1');
                                get_template_part('template-parts/report-project/report-project', $user_type . '-2');
                                ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  -->

</div>