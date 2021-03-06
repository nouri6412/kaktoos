function ajax_submit_mbm_post_data_resume(data, element_error, type_fun = 0) {

    var error = '';
    element_error.html('');


    if(type_fun==1)
    {
        if (data['profile']["title"].length == 0) {
            error += '<br>' +'نام پروژه نباید خالی بماند';
        }
        if (data['profile']["cat_id"].length == 0) {
            error += '<br>' +'دسته بندی پروژه نباید خالی بماند';
        }
        if (data['profile']["desc"].length == 0) {
            error += '<br>' +'توضیحات پروژه نباید خالی بماند';
        }
        if (data['profile']["time"].length == 0) {
            error += '<br>' +'زمان  پروژه نباید خالی بماند';
        }
        if (data['profile']["skills"].length == 0) {
            error += '<br>' +'مهارت های موردنیاز پروژه نباید خالی بماند';
        }
        if (data['profile']["min_price"].length == 0) {
            error += '<br>' +'  حداقل بودجه پروژه نباید خالی بماند';
        }
        if (data['profile']["max_price"].length == 0) {
            error += '<br>' +'  حداکثر بودجه پروژه نباید خالی بماند';
        }
    }

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
            if (type_fun == 0) {
                document.location.href = custom_theme_mbm_object.siteurl + "/profile?action=edit-profile";
            }
            else if (type_fun == 1) {
                document.location.href = custom_theme_mbm_object.siteurl + "/profile?action=create-project&job_id=" + result.job_id + '&created=1';
            }
            else if (type_fun == 2) {
                document.location.href = custom_theme_mbm_object.siteurl + "/request?id=" + result.job_id + '&created=1';
            }
        }
    });
}

function ajax_submit_mbm_post_data_resume_save_form(data_in, element_load, element_error, type_fun = 0) {
    var data = [];
    var forms = $("#" + element_load + '');
    var i = 0;
    var j = 0;

    var data_form = {};
    var inputs = $('input.input-profile', forms);
    inputs.each(function (j, input) {
        data_form[$(input).attr("data-id")] = $(input).val();
    });

    var inputs = $('input.input-profile-check', forms);
    inputs.each(function (j, input) {

        if ($(input).prop('checked') == false) {
            data_form[$(input).attr("data-id")] = 0;
        }
        else
        {
            data_form[$(input).attr("data-id")] = 1;
        }
       
    });

    var inputs = $('select.input-profile', forms);
    inputs.each(function (j, input) {
        data_form[$(input).attr("data-id")] = $(input).val();
    });

    var inputs = $('textarea.input-profile', forms);
    inputs.each(function (j, input) {
        data_form[$(input).attr("data-id")] = $(input).val();
    });

    var divs = $('.loop-input-profile', forms);

    divs.each(function (i, div_loop) {
        var data_loop = [];
        var div_forms = $('.loop-input-profile-item', div_loop);
        var t = 0;

        div_forms.each(function (t, form) {

            var data_form_1 = {};
            var inputs = $('input', form);
            inputs.each(function (j, input) {
                data_form_1[$(input).attr("data-id")] = $(input).val();
            });

            var inputs = $('select', form);
            inputs.each(function (j, input) {
                data_form_1[$(input).attr("data-id")] = $(input).val();
            });

            var inputs = $('textarea', form);
            inputs.each(function (j, input) {
                data_form_1[$(input).attr("data-id")] = $(input).val();
            });

            data_loop[t] = data_form_1;
        });
        data_form[$(div_loop).attr('data-id')] = data_loop;
    });
    console.log(data_form);

    data = data_form;
    var exp_data = JSON.stringify(data);
    data_in["profile"] = data;

    ajax_submit_mbm_post_data_resume(data_in, element_error, type_fun)
}


function ajax_submit_mbm_post_data_resume_get_form(data, element_load) {


    custom_theme_mbm_base_ajax(data, function (result) {

        jQuery('#' + element_load).append(result.html);

    });
}

function ajax_submit_mbm_post_data_resume_get_form_delete(element) {
    jQuery('#' + element).parent().remove();
}

