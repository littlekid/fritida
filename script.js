console.log('hejhej');


$(document).ready(function(){
        $.ajax({url: "http://fritida.se/api/activities/", success: function(result){
          console.log(result);
          $.each(result, function( index, activity ) {

            $("#activities").append('<div class="grid-item">' + '<b>' + activity.title + '</b>' + '<br>'  + activity.description + '</div>' );
          });
        }});
        var $container = jQuery('#activities');
        // initialize
        $container.masonry({
          columnWidth: 200,
          itemSelector: '.grid-item'
        });
});





//--------Menu stuff----------
var $select = $("<select></select>");
  $("#menu").append($select);

  //Cycle over menu links
  $("#menu a").each(function(){
    var $anchor = $(this);
    //Create an option
    var $option = $("<option></option>");

    if($anchor.parent().hasClass("selected")){
        $option.prop("selected", true);
    };
      //Option's value is the href value of the links
      $option.val($anchor.attr("href"));
      //option's text is the text of links
      $option.text($anchor.text());
      //append option to select
      $select.append($option);
  });

    //Bind click to button
    $select.change(function(){
      // go to select's location
    window.location = $select.val();
    });
