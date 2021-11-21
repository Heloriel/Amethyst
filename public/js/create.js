var isBudget = false;

$("#isBudget").click( function () {
    if(!isBudget){
        $('#timepicker').attr('disabled', true);
        $('#timepicker').val('');
        $('#floatingInputUASG').attr('disabled', true);
        $('#floatingInputUASG').val('');
        $('#inputGroupSelect01').attr('disabled', true);
        $('#inputGroupSelect02').attr('disabled', true);
        $('#inputGroupSelect03').attr('disabled', true);
        $('#inputGroupSelect01').val(0);
        $('#inputGroupSelect02').val(0);
        $('#inputGroupSelect03').val(0);
        $('#datePickerLabel').html('Data do Recebimento');
        isBudget = true;
    }else{
        $('#timepicker').attr('disabled', false);
        $('#floatingInputUASG').attr('disabled', false);
        $('#inputGroupSelect01').attr('disabled', false);
        $('#inputGroupSelect02').attr('disabled', false);
        $('#inputGroupSelect03').attr('disabled', false);
        $('#inputGroupSelect01').val(1);
        $('#inputGroupSelect02').val(1);
        $('#inputGroupSelect03').val(1);
        isBudget = false;
    }
});

