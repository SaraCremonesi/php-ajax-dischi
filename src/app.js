var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {
  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',
      success: function() {
        var source = $('.container-cd').html();
        var template = Handlebars.compile(source);
        printCd();
      },
      error: function(request, state, error) {
        alert('Si è verificato un errore');
      }
    }
  )
});

function printCd() {
  for (var i = 0; i < array.length; i++) {
    var singleCd = array[i];

    var context = singleCd;
    var html = template(context);

    $('.container-cd').append(html);
  }
};
