function formReset(id) {
    document.getElementById(id).reset();
}

$(document).ready(function () {
    var current_year = new Date().getFullYear();
    $("#currentYear").text(current_year);

    feather.replace();

    window.setTimeout(function() {
        $(".global-alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 4000);

    var current_progress = 0;
    var interval = setInterval(function() {
        current_progress += 1;
        $(".global-alert .progress-bar").css("width", current_progress + "%");
        if (current_progress >= 100)
            clearInterval(interval);
    }, 35);

});
