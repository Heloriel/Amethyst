var startPortals = JSON.parse($('#portalJson').val());
var newPortals = JSON.parse($('#portalJson').val());

function updatePortals(element){
    let id = element.id;
    let property = element.name;
    let value = element.value;
    id = (id.split("-").pop());
    newPortals.forEach(npArray => {
        if(npArray.id == id){
            let index = newPortals.indexOf(npArray);
            newPortals[index][property] = value;
        }
    });
}

$("input").change(function(){
    updatePortals(this);
});

$( "#save" ).on( "click", function() {
    $("#portalJson").val(JSON.stringify(newPortals));
});
