// functions

function searchButton() {

  let searchValue = $(".header__input").val();
  $(".header__button").attr("data-search", searchValue);
  $(".header__input").val("");

  if (searchValue == "") {
    searchValue = "all";
  }
  cdApi(searchValue);
}

// function that display in the html the data from "data" parameter
function displayData(data) {

  $(".cards").html("");

  if (data.length == 0) {

    let searchValue = $(".header__button").attr("data-search");
    let errorMessage = "La ricerca \"" + searchValue + "\" non ha prodotto nessun risultato!";
    $(".cards").append("<h2 class=\"error_message\">" + errorMessage + "<h2>");


  } else {

    let source = $("#cd-template").html();
    let template = Handlebars.compile(source);

    for (let i = 0; i < data.length; i++) {

      let html = template(data[i]);
      $(".cards").append(html);

    }
  }
}

// function that make an ajax request to get the cd info
function cdApi(filter) {
  $.ajax({
    "url": "http://localhost:8888/php-ajax-dischi/api/cd",
    "method": "GET",
    "data": {
      "author": filter,
    },
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

  $(".header__input").val("");

  cdApi("all");

  $(".header__button").click(function() {
    searchButton();
  });

  $(".header__input").keyup(function(e) {
    if (e.which == 13) {
      searchButton();
    }
  });

});
