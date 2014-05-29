function register () {
    var username  = $('#username').val();
    var password1 = $('#password1').val();
    var password2 = $('#password2').val();
    var password  = password1;

    if (!username || !password1 || !password2) {
        return false;
    }

    if (password1 !== password2) {
        show_msg('两次输入的密码不一致', 'warning');
        return false;
    }

    var url = $('#register_form').attr('action');
    ajax(url, username, password);
}


function login () {
    var username = $('#username').val();
    var password = $('#password').val();

    if (!username || !password) {
        return false;
    }

    var url = $('#login_form').attr('action');
    ajax(url, username, password);
}


function ajax (url, username, password) {
    $.ajax({
        url: url,
        type: 'post',
        dataType: 'json',
        data: { username: username, password: password },
        success: function (data) {
            if (data.status) {
                show_msg(data.msg, 'success');
                var code = 'window.location.href="'+data.url+'"';
                window.setTimeout(code, 1000);
            } else {
                show_msg(data.msg, 'danger');
            }
        },
        error: function () {
            show_msg('请求出错', 'danger');
        }
    });
}


function show_msg (msg, type, time) {
    if (!type) {
        type = 'info';
    }
    var class_name = 'alert-'+type;

    var alert = $('#alert');

    alert.removeClass();
    alert.addClass('alert');
    alert.addClass(class_name);
    alert.html(msg);
    alert.fadeIn();
    if (time) {
        alert.fadeOut(time);
    }
}
