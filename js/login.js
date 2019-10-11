$(document).ready(function () {
    $('#login_form').submit(function() {
        var url = "login_submit.php";
        var data = $('#login_form').serialize();
        $.ajax(url, {
            data: data,
            success: login_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
    $('#feedback_form').submit(function() {
        var url = "feedback_submit.php";
        var data = $('#feedback_form').serialize();
        $.ajax(url, {
            data: data,
            success: feedback_success,
            error: on_error,
            type: "POST"
        });
        return false;
    });
});

var login_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        alert(data.message);
        window.location.href = "#";
    } else {
        alert(data.message);
    }
};

var feedback_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        alert(data.message);
        window.location.href = "#";
    } else {
        alert(data.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};