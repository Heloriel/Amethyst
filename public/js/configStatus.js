var startStatus = JSON.parse($('#statusJson').val());
var newStatus = JSON.parse($('#statusJson').val());

function updateStatus(element){
    let id = element.id;
    let property = element.name;
    let value = element.value;
    id = id.split("-").pop();
    newStatus[id - 1][property] = value;
}

$("input").change(function(){
    updateStatus(this);
});

$( "#save" ).on( "click", function() {
    $("#statusJson").val(JSON.stringify(newStatus));
});
