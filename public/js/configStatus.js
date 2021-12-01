var startStatus = JSON.parse($('#statusJson').val());
var newStatus = JSON.parse($('#statusJson').val());

function updateStatus(element){
    let id = element.id;
    let property = element.name;
    let value = element.value;
    id = (id.split("-").pop());
    newStatus.forEach(nsArray => {
        if(nsArray.id == id){
            let index = newStatus.indexOf(nsArray);
            newStatus[index][property] = value;
        }
    });
}

$("input").change(function(){
    updateStatus(this);
});

$( "#save" ).on( "click", function() {
    $("#statusJson").val(JSON.stringify(newStatus));
});

$(document).ready(function () {
    console.log(newStatus);
});


