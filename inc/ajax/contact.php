<?php
class Kaktos_Contact_Ajax
{
    function submit()
    {
        global $wpdb;

        $name = "";
        $email = "";
        $message = "week";

        if (isset($_POST["name"])) {
            $name = sanitize_text_field($_POST["name"]);
        }

        if (isset($_POST["email"])) {
            $email = sanitize_text_field($_POST["email"]);
        }

        if (isset($_POST["message"])) {
            $message = sanitize_text_field($_POST["message"]);
        }

        $sql = "";

        $items       = $wpdb->get_results($sql, ARRAY_A);

        $args = array(
            'post_title'    => $name,
            'post_content'  => $message,
            'post_status'   => 'publish',
            'post_author'   => 1,
            'post_type'     => 'contact_form',
            'meta_input'    => array(
                'email'         => $email
            ),
        );

        $result = [];

        $post_id = wp_insert_post($args);
        if (!is_wp_error($post_id)) {
            $result["state"] = 1;
            $result["message"] = 'با موفقیت ثبت شد';
        } else {

            $result["state"] = 0;
            $result["message"] = $post_id->get_error_message();
        }



        echo json_encode([
            'success'       => true,
            'result'          => $result,
            'sql'          => "",
            'max_num_pages' => 1
        ]);
        die();
    }

    function register_action($user_id)
    {

        if (isset($_SESSION["user_pass"])) {
            wp_set_password($_SESSION["user_pass"], $user_id);
        }

        if (isset($_SESSION["user_name"])) {
            update_user_meta($user_id, 'user_name', $_SESSION["user_name"]);
            wp_update_user(array('ID' => $user_id, 'display_name' =>  $_SESSION["user_name"]));
        }

        if (isset($_SESSION["user_sex"])) {
            update_user_meta($user_id, 'user_sex', $_SESSION["user_sex"]);
        }

        update_user_meta($user_id, 'active_state', '0');
    }

    function session()
    {

        if (isset($_POST["user_pass"])) {
            $_SESSION['user_pass'] = $_POST["user_pass"];
        }

        if (isset($_POST["user_sex"])) {
            $_SESSION['user_sex'] = $_POST["user_sex"];
        }

        if (isset($_POST["user_name"])) {
            $_SESSION['user_name'] = $_POST["user_name"];
        }
    }

    function confirm()
    {
        $code = "";
        $state = 0;
        $message = "کد وارد شده صحیح نمی باشد ";
        if (isset($_POST["code"])) {
            $code = $_POST["code"];
            if ($code == 123456) {
                $state = 1;
            }
        }

        echo json_encode([
            'state'       => $state,
            'message'          => $message,
            'sql'          => "",
            'max_num_pages' => 1
        ]);
        die();
    }
}
$Kaktos_Contact_Ajax = new Kaktos_Contact_Ajax;
add_action('wp_ajax_mbm_contact_form', array($Kaktos_Contact_Ajax, 'submit'));
add_action('wp_ajax_nopriv_mbm_contact_form', array($Kaktos_Contact_Ajax, 'submit'));

add_action('wp_ajax_mbm_set_session', array($Kaktos_Contact_Ajax, 'session'));
add_action('wp_ajax_nopriv_mbm_set_session', array($Kaktos_Contact_Ajax, 'session'));

add_action('wp_ajax_mbm_set_session_confirm', array($Kaktos_Contact_Ajax, 'confirm'));
add_action('wp_ajax_nopriv_mbm_set_session_confirm', array($Kaktos_Contact_Ajax, 'confirm'));

add_action('user_register', array($Kaktos_Contact_Ajax, 'register_action'));
