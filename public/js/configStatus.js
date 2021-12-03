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

function addNewStatusField() {
  const statusContainer = $('#status-container');

  let inputGroup = `
    <div class="input-group mb-2 d-flex align-items-center" id="statusContainer">
        <input type="text" name="name" id="" value="" aria-label="Nome" placeholder="NOME" class="form-control">
        <input type="color" name="color" id="" value="#000000" title="Escolha a Cor" style="max-width: 40px" class="form-control form-control-color">
    </div>
  `;

  statusContainer.append(inputGroup);
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


