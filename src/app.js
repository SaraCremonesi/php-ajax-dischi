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
  );

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


//PER FILTRI
$('.author-select-php').change(function() {
  
  // Reset
  $('.cds-container.ajax-call').html('');


  var author = $('.author-select-php').val();

  if (author === 'default') {
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
  } else {
    // Stampo il cd con il valore author selezionato
    $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/serverApi.php',
      method: 'GET',
      success: function(dataResponse) {
        printCd(dataResponse);
      },
      error: function() {
        alert('Si è verificato un errore');
      }
    }
  )
  }
});
