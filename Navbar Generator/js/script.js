$(document).ready(function () {

  var $list = $('.items'); //first list var

  //add draggable item function
  $('#btn-add').on('click', function (e) {
    e.preventDefault();

    if ($('#input-title').val() && $('#input-url').val() ) {  //check if input is empty
      $('.fill-alert').addClass('d-none');
    } else $('.fill-alert').removeClass('d-none');

    var title = $('#input-title').val(); //title var
    var url = $('#input-url').val(); //url var

    //if input is > 0 add draggable item
    if ($('#input-title').val().length > 0 || $('#input-url').val().length > 0) {
      $list.append('<li class="list-group-item">' + '<p class="element-title">' + title + '</p>' + "<br>" + '<p class="element-url">' + url + '</p>' +
        '<button type="button" class="btn btn-danger btn-removeitem">Remove</button>' + '<ol>' + '</ol>' + '</li>');
       
    };

    //makes items sortable
    $(function  () {
      $("#sortable").sortable();
    });

    //set item limit
    var newitemslimit = 10;
    if  ($('#sortable').children().length > newitemslimit) {
    $('#btn-add').prop( "disabled", true );
    }

    else if ($('#sortable').children().length < newitemslimit) {
    $('#btn-add').prop( "disabled", false );
    };

  });

  //remove item
  $list.on('click', '.btn-removeitem', function () {
    $(this).closest("li").remove();
  });

  //navbar functions
  $('.container').on('click', '#add-itemstonav', function () {

    if ($("#sortable").children().length > 0) { //checks if there are items
      $('.btn-itemsremove').removeClass('d-none');
      $('.add-alert').addClass('d-none');

      $('#item-space').find(".list-group-item").each(function () { //adds items to navbar
        var title = $(this).children(".element-title").text();
        var url = $(this).children(".element-url").text();
        var navitem = `<a class="nav-link" href="${url}">${title}</a>`;
        $('.navbar-nav').append(navitem);
        $('#btn-itemsremove').removeClass('d-none');
      });
    } else $('.add-alert').removeClass('d-none');

    var newitemslimit = 10;
    if  ($('.navbar-nav').children().length > newitemslimit) { //set items limit to 10
    $('#add-itemstonav').prop( "disabled", true );
    }
    else if ($('.navbar-nav').children().length < newitemslimit)
    $('#add-itemstonav').prop( "disabled", false );
  });

  $('#btn-itemsremove').on('click', function () { //clear navbar items
    $('.navbar-nav').children().remove();
    $('#btn-itemsremove').addClass('d-none');
  });

  $("#bg").change(function() { //change bg color
    $(".navbar").css("background-color", $("#bg").val());
  });

  $("#btn-brand").click(function() { //change brand text
    var inputbrand = $('#brand-input').val();
    $('#Brand').text(inputbrand);
  });

var counter=0;
$("#btn-searchbar").click(function () {
    if(counter <= 0){
        $('.navbar').append('<form class="d-flex searchbar"> <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> <button class="btn btn-light" type="submit">Search</button> </form>');  
        counter++;
        $('#btn-searchbar-remove').removeClass('d-none');
    }

}); 

  $('#btn-searchbar-remove').on('click', function(){  //remove search bar
    $('.searchbar').remove();
    counter--;
    $('#btn-searchbar-remove').addClass('d-none');
  });

  $('#btn-text-light').on('click', function(){  //change text color to light
    $('nav').addClass('navbar-dark');
    $('nav').removeClass('navbar-light');
  });

  $('#btn-text-dark').on('click', function(){ //change text color to dark
    $('nav').addClass('navbar-light');
    $('nav').removeClass('navbar-dark');
  });

});