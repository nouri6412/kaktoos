function ajax_submit_mbm_post_data_resume(data, element_error) {

    var error = '';
    element_error.html('');

    if (error.length > 0) {
        element_error.html(error);
        return;
    }

    custom_theme_mbm_base_ajax(data, function (result) {

        if (result.state == 0) {
            element_error.html('<p>' + result.message + '</p>');
        }
        else {
           // console.log(result.html);
            document.location.href=custom_theme_mbm_object.siteurl+"/profile";
        }
    });
}

function ajax_submit_mbm_post_data_resume_save_form(data_in, element_load, element_error) {
    var data = [];
    var forms = $("#" + element_load + '');

    var data_form = {};
    var inputs = $('input.input-profile', forms);
    inputs.each(function (j, input) {
        data_form[$(input).attr("data-id")] = $(input).val();
    });

    var inputs = $('select.input-profile', forms);
    inputs.each(function (j, input) {
        data_form[$(input).attr("data-id")] = $(input).val();
    });

    var inputs = $('textarea.input-profile', forms);
    inputs.each(function (j, input) {
        data_form[$(input).attr("data-id")] = $(input).val();
    });

    data = data_form;
    var exp_data = JSON.stringify(data);
    data_in["profile"]=data;
    ajax_submit_mbm_post_data_resume(data_in, element_error)
}


function ajax_submit_mbm_post_data_resume_get_form(data, element_load) {


    custom_theme_mbm_base_ajax(data, function (result) {

        jQuery('#'+element_load).append(result.html);

    });
}

function ajax_submit_mbm_post_data_resume_get_form_delete(element) {
    jQuery('#'+element).parent().remove();
}

