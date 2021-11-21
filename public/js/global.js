function formReset(id) {
    document.getElementById(id).reset();
}

$(document).ready(function () {
    var current_year = new Date().getFullYear();
    $("#currentYear").text(current_year);

    feather.replace();
});
