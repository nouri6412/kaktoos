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
    var cloned = jQuery('#' + item).clone();
    cloned.css('display', 'block');
    cloned.attr('id', id);
    jQuery('#' + parent).append(cloned);
}

function repoert_change_project(obj) {
    console.log(obj.attr('user-type'));
    var user_type = obj.attr('user-type');
    if (user_type == "user") {
        user_type = "com";
    }
    else {
        user_type = "user";
    }
    obj.attr('user-type', user_type);
    document.location.href = custom_theme_mbm_object.siteurl + "/profile?action=my-activity&user_type=" + user_type;
}

function custom_theme_mbm_chart_coin(type, element, header, x_label = true, y_label = true) {
    custom_theme_mbm_base_ajax({
        'action': 'mbm_chart_project',
        'element': element,
        'type': type
    }, function (result) {
        console.log(result);


        var color = "#f7e7ab";



        jQuery('#' + element).parent().children('iframe').remove();

        canvas = document.getElementById(element);
        const context = canvas.getContext('2d');
        context.clearRect(0, 0, canvas.width, canvas.height);

        new Chart(element, {
            type: "line",
            data: {
                labels: result.result.x,
                datasets: [{
                    fill: true,
                    pointRadius: 2,
                    borderColor: color,
                    backgroundColor: color,
                    data: result.result.y
                }]
            },
            options: {
                legend: { display: false },
                title: {
                    display: true,
                    text: header,
                    fontSize: 16
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            display: x_label
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            display: y_label
                        }
                    }]
                }
            }
        });
    });
}