// functions

// function that display in the html the data from "data" parameter
function displayData(data) {

  $(".cards").html("");

  if (data.length == 0) {

    console.log("array vuoto");

  } else {

    var source = $("#cd-template").html();
    var template = Handlebars.compile(source);

    for (let i = 0; i < data.length; i++) {

      let html = template(data[i]);
      $(".cards").append(html);

    }
  }
}

// function that make an ajax request to get the cd info
function cdApi() {
  $.ajax({
    "url": "http://localhost:8888/php-ajax-dischi/api/cd",
    "success": function (result) {
      displayData(result);
    },
    "error": function (error) {
      console.log("error!!");
    },
  });
}


// script
$(document).ready(function () {
  cdApi();
});
