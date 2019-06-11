
jQuery(document).ready(function () {

//create idea linking
jQuery('.add-idea').click(function() {
  if(jQuery('#idea').val() != ''){
    var idea = jQuery('#idea').val();
    var columnSelection = jQuery('select').val();
    createIdea(columnSelection, idea);
    setUp();
  }
  else {
    alert("hello");
  }
});

//create idea function
function createIdea(column, text){
  var markup = '<div class="portlet"><div class="portlet-content">'+text+'</div></div>';
  switch(column) {
    case "1":
    jQuery('.idealist-1').append(markup); break;
    case "2":
    jQuery('.idealist-2').append(markup); break;
    case "3":
    jQuery('.idealist-3').append(markup); break;
    default: break;
  }
}

function setUp() {
  jQuery( ".card" ).sortable({
    connectWith: ".card",
    handle: ".portlet-content",
    placeholder: "portlet-placeholder ui-corner-all"
  });

  jQuery( ".portlet" )
    .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" );
}

});