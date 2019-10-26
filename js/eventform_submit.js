$(document).ready(function () {
    $('#register_form').submit(function() {
        var url = "eventform_submit.php";
        var data = $('#register_form').serialize();
        $.ajax(url, {
            data: data,
            success: registration_success,
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

var registration_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        alert(data.message);
        window.location.href = "email.php";
    } else {
        alert(data.message);
    }
};

var feedback_success = function (data) {
    data = JSON.parse(data);

    if (data.success) {
        alert(data.message);
        window.location.href = "welcome.php";
    } else {
        alert(data.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};