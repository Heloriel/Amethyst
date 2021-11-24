let input, tagArray, container, t;
var userTags = document.getElementById("userTags");

input = document.querySelector("#hashtags");
container = document.querySelector(".tag-container");
tagArray = [];

function deleteTag(element) {
    for (var i = 0; i < tagArray.length; i++) {
        if (tagArray[i] == element.prop("innerHTML")) {
            tagArray.splice(i, 1);
            userTags.value = tagArray;
        }
    }
    element.remove();
}

$("#hashtags-container").on("keydown", "#hashtags", function (e) {
    var keyCode = e.keyCode || e.which;

    if ((keyCode == 9 || keyCode == 13) && input.value.length > 0) {
        e.preventDefault();
        var text = document.createTextNode(input.value);
        var p = document.createElement("p");
        container.appendChild(p);
        tagArray.push(input.value);
        userTags.value = tagArray;
        p.appendChild(text);
        p.classList.add("tag");
        input.value = "";
    }

    $(".tag").on("click", function () {
        deleteTag($(this));
    });
});

$(document).ready(function () {
    $("#timepicker").timepicker({
        timeFormat: "HH:mm",
        startTime: "08:00",
        interval: "60",
    });

    $("#datepicker").datepicker({
        dateFormat: "dd/mm/yy",
        closeText: "Fechar",
        prevText: "&#x3C;Anterior",
        nextText: "Próximo&#x3E;",
        currentText: "Hoje",
        monthNames: [
            "Janeiro",
            "Fevereiro",
            "Março",
            "Abril",
            "Maio",
            "Junho",
            "Julho",
            "Agosto",
            "Setembro",
            "Outubro",
            "Novembro",
            "Dezembro",
        ],
        monthNamesShort: [
            "Jan",
            "Fev",
            "Mar",
            "Abr",
            "Mai",
            "Jun",
            "Jul",
            "Ago",
            "Set",
            "Out",
            "Nov",
            "Dez",
        ],
        dayNames: [
            "Domingo",
            "Segunda-feira",
            "Terça-feira",
            "Quarta-feira",
            "Quinta-feira",
            "Sexta-feira",
            "Sábado",
        ],
        dayNamesShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
        dayNamesMin: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
        weekHeader: "Sm",
        firstDay: 0,
    });

    $("#pubPicker").datepicker({
        dateFormat: "dd/mm/yy",
        closeText: "Fechar",
        prevText: "&#x3C;Anterior",
        nextText: "Próximo&#x3E;",
        currentText: "Hoje",
        monthNames: [
            "Janeiro",
            "Fevereiro",
            "Março",
            "Abril",
            "Maio",
            "Junho",
            "Julho",
            "Agosto",
            "Setembro",
            "Outubro",
            "Novembro",
            "Dezembro",
        ],
        monthNamesShort: [
            "Jan",
            "Fev",
            "Mar",
            "Abr",
            "Mai",
            "Jun",
            "Jul",
            "Ago",
            "Set",
            "Out",
            "Nov",
            "Dez",
        ],
        dayNames: [
            "Domingo",
            "Segunda-feira",
            "Terça-feira",
            "Quarta-feira",
            "Quinta-feira",
            "Sexta-feira",
            "Sábado",
        ],
        dayNamesShort: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
        dayNamesMin: ["Dom", "Seg", "Ter", "Qua", "Qui", "Sex", "Sáb"],
        weekHeader: "Sm",
        firstDay: 0,
    });

    $(".tag").on("click", function () {
        deleteTag($(this));
    });

    $(".tag").each(function () {
        tagArray.push(this.innerHTML);
    });

    userTags.value = tagArray;
});
