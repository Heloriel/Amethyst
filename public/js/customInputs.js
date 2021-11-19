let input, tagArray, container, t;
var userTags = document.getElementById("userTags");

input = document.querySelector('#hashtags');
container = document.querySelector('.tag-container');
tagArray = [];

function deleteTag(element){
    for( var i = 0; i < tagArray.length; i++){
        if ( tagArray[i] == element.prop('innerHTML')) {
            tagArray.splice(i, 1);
            userTags.value = tagArray;
        }
    }
    element.remove();
}

$("#hashtags-container").on('keydown', '#hashtags', function(e) {
  var keyCode = e.keyCode || e.which;

  if ((keyCode == 9 || keyCode == 13) && input.value.length > 0) {
    e.preventDefault();
    var text = document.createTextNode(input.value)
    var p = document.createElement('p');
    container.appendChild(p);
    tagArray.push(input.value);
    userTags.value = tagArray;
    p.appendChild(text);
    p.classList.add('tag');
    input.value = '';
  }

    $('.tag').on('click', function (){
        deleteTag($(this));
    });

});

$(document).ready(function(){

    $('#timepicker').timepicker({
        timeFormat: 'HH:mm'
    });

    $( "#datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });

    $( "#pubPicker" ).datepicker({ dateFormat: 'dd/mm/yy' });

    $('.tag').on('click', function (){
        deleteTag($(this));
    });

    $('.tag').each(function () {
        tagArray.push(this.innerHTML);
    });

    userTags.value = tagArray;
});
