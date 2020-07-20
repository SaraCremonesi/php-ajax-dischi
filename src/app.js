var $ = require('jquery');
var Handlebars = require('handlebars');

$(document).ready(function() {
  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',
      success: function(dataResponse) {
        printCd(dataResponse);
      },
      error: function() {
        alert('Si è verificato un errore');
      }
    }
  )
});

function printCd(array) {
  var source = $('#entry-template').html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < array.length; i++) {
    var singleCd = array[i];

    var context = singleCd;
    var html = template(context);

    $('.container-cd').append(html);
  }
};
