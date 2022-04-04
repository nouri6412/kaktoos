function custom_theme_mbm_base_ajax(data, callback) {
    // console.log(bital_object);
    console.log(data);
    jQuery.ajax({
        url: custom_theme_mbm_object.ajaxurl,
        data: data,
        dataType: 'json',
        type: 'POST',
        success: callback,
        beforeSend: function () {
            jQuery('.loading-ajax').show();
        },
        complete: function () {
            jQuery('.loading-ajax').hide();
        }
    });
}

function ajax_submit_mbm_contact_form(name, email, message, element_error, element_done, button) {

    var error = '';
    element_error.html('');
    element_done.html('');
    if (name.length == 0) {
        error = 'نام نباید خالی بماند';
    }

    if (email.length == 0) {
        error += '<br>' + 'ایمیل نباید خالی بماند';
    }

    if (message.length == 0) {
        error += '<br>' + 'پیام نباید خالی بماند';
    }

    if (error.length > 0) {
        element_error.html(error);
        return;
    }

    custom_theme_mbm_base_ajax({
        'action': 'mbm_contact_form',
        'name': name,
        'email': email,
        'message': message
    }, function (result) {
        console.log(result);
        if (result.result.state == 1) {
            element_done.html(result.result.message);
            button.remove();

        }
        else {
            element_error.html(result.result.message);
        }

    });
}

function ajax_submit_mbm_clone_element(item, parent, id = '') {
    var cloned = jQuery('#'+item).clone();
    cloned.css('display', 'block');
    cloned.attr('id', id);
    jQuery('#'+parent).append(cloned);
}

function repoert_change_project(obj)
{
console.log(obj.attr('user-type'));
var user_type=obj.attr('user-type');
if(user_type=="user")
{
    user_type="com";
}
else
{
    user_type="user";
}
obj.attr('user-type',user_type);
}