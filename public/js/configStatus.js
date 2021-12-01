var startStatus = JSON.parse($('#statusJson').val());
var newStatus = JSON.parse($('#statusJson').val());

function updateStatus(element){
    let id = element.id;
    let property = element.name;
    let value = element.value;
    id = (id.split("-").pop()) - 1;
    newStatus[id][property] = value;
}

function deleteStatus(element) {
    let elementDiv = element.parentElement;
    elementDiv.classList.remove('d-flex');
    elementDiv.classList.add('d-none');

    let id = element.id;
    id = (id.split("-").pop()) - 1;

    newStatus.splice(index, 1);
    console.log(newStatus);
}

$("input").change(function(){
    updateStatus(this);
});

$( "#save" ).on( "click", function() {
    $("#statusJson").val(JSON.stringify(newStatus));
});
