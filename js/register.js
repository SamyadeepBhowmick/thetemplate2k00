$(document).ready(function () {
    $('#register_form').submit(function() {
        var url = "register_submit.php";
        var data = $('#register_form').serialize();
        $.ajax(url, {
            data: data,
            success: registration_success,
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
        window.location.href = "welcome.php";
    } else {
        alert(data.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};