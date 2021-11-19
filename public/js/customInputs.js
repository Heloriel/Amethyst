let input, hashtagArray, container, t;

input = document.querySelector('#hashtags');
container = document.querySelector('.tag-container');
hashtagArray = [];
hashtags = {}


$("#hashtags-container").on('keydown', '#hashtags', function(e) {
  var keyCode = e.keyCode || e.which;

  if ((keyCode == 9 || keyCode == 13) && input.value.length > 0) {
    e.preventDefault();
    var text = document.createTextNode(input.value)
    var p = document.createElement('p');
    container.appendChild(p);
    hashtagArray.push(input.value);
    var userTags = document.getElementById("userTags");
    userTags.value = hashtagArray;
    p.appendChild(text);
    p.classList.add('tag');
    input.value = '';

    let deleteTags = document.querySelectorAll('.tag');

    for(let i = 0; i < deleteTags.length; i++) {
      deleteTags[i].addEventListener('click', () => {
        container.removeChild(deleteTags[i]);
      });
    }
  }
});

$(document).ready(function(){
  $('#timepicker').timepicker({
    timeFormat: 'HH:mm'
  });

  $( "#datepicker" ).datepicker({ dateFormat: 'dd/mm/yy' });

  $( "#pubPicker" ).datepicker({ dateFormat: 'dd/mm/yy' });
});
