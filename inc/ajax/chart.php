<?php
class Kaktos_Chart_Ajax
{
    function chart()
    {
        global $wpdb;

        $result = [];
        $result["color"] = "#d53838";
        $result["data"] = [];
        $result["x"] = [];
        $result["y"] = [];


        for ($x = 1; $x < 10; $x++) {
            $result["x"][] = $x;
            $result["y"][] = $x * 5;
        }



        echo json_encode([
            'success'       => true,
            'result'          => $result,
            'sql'          => "",
            'max_num_pages' => 1
        ]);
        die();
    }
}
$Kaktos_Chart_Ajax = new Kaktos_Chart_Ajax;
add_action('wp_ajax_mbm_chart_project', array($Kaktos_Chart_Ajax, 'chart'));
add_action('wp_ajax_nopriv_mbm_chart_project', array($Kaktos_Chart_Ajax, 'chart'));
