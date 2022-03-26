function ajax_submit_mbm_register(user_f_name, user_l_name, user_email, user_pass, user_re_pass, user_sex, user_termsconditions, element_error, element_done) {

    var error = '';
    element_error.html('');
    element_done.html('');



    if (user_f_name.length == 0) {
        error = 'نام کاربری نباید خالی بماند';
    }

    if (user_email.length == 0) {
        error += '<br>' + 'ایمیل نباید خالی بماند';
    }


    if (user_pass.length == 0) {
        error += '<br>' + 'رمز عبور نباید خالی بماند';
    }

    if (user_pass != user_re_pass) {
        error += '<br>' + 'تکرار رمز عبور صحیح نمی باشد';
    }

    var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");

    if (!strongRegex.test(user_pass)) {
        error += '<br>' + 'رمز عبور شما حداقل باید 8 کاراکتر باشد و شامل حداقل یک حرف بزرگ و کوچک انگلیسی و حروف خاص مانند @,$ باشد';
    }
    if (user_termsconditions.prop('checked') == false) {
        error = 'برای ثبت نام باید شرایط و ضوابط را بپذیرید';
    }

    if (error.length > 0) {

        element_error.html(error);
        return;
    }

    custom_theme_mbm_base_ajax({
        'action': 'mbm_set_session',
        'user_pass': user_pass,
        'user_sex': user_sex,
        'user_name': user_f_name + ' ' + user_l_name
    }, function (result) {
        jQuery.ajax({
            url: custom_theme_mbm_object.siteurl + '/wp-login.php?action=register',
            data: {
                'user_login': user_email,
                'user_email': user_email
            },
            type: 'POST',
            success: function (result) {
                //  console.log(result);
                var found = $(result).find("#login_error");
                if (found.length > 0) {
                    element_error.html(found.html());
                }
                else {
                    $('#step-1').removeClass('wt-active');
                    $('#step-1').addClass('wt-done-next');                   
                    $('#step-2').addClass('wt-active');
                    $('#page-step-1').css('display', 'none');
                    $('#page-step-2').css('display', 'block');
                }
            },
            beforeSend: function () {
                jQuery('.loading-ajax').show();
            },
            complete: function () {
                jQuery('.loading-ajax').hide();
            }
        });
    });


}


function ajax_submit_mbm_register_confirm(user_confirm, element_error, element_done) {

    var error = '';
    element_error.html('');
    element_done.html('');

    custom_theme_mbm_base_ajax({
        'action': 'mbm_set_session_confirm',
        'code': user_confirm
    }, function (result) {
        if (result.state == 0) {
            element_error.html(result.message);
        }
        else {
            $('#step-2').removeClass('wt-active');
            $('#step-2').addClass('wt-done-next');  
            $('#step-3').addClass('wt-done-next');  
          //  $('#step-3').addClass('wt-active');
            $('#page-step-2').css('display', 'none');
            $('#page-step-3').css('display', 'block');
        }
    });
}

function ajax_submit_mbm_login(username, pass, element_error, element_done) {
    var error = '';
    element_error.html('');
    element_done.html('');

    jQuery.ajax({
        url: custom_theme_mbm_object.siteurl + '/wp-login.php',
        data: {
            'log': username,
            'pwd': pass
        },
        type: 'POST',
        success: function (result) {
            //   console.log(result);
            var found = $(result).find("#login_error");
            if (found.length > 0) {
                element_error.html('نام کاربری یا رمز عبور اشتباه است');
            }
            else {
                window.location.href = custom_theme_mbm_object.siteurl + '/profile';
            }
        },
        beforeSend: function () {
            jQuery('.loading-ajax').show();
        },
        complete: function () {
            jQuery('.loading-ajax').hide();
        }
    });
}