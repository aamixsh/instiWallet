$(function(){
$(".search").keyup(function() 
{ 
var inputSearch = $(this).val();
var dataString = 'searchword='+ inputSearch;
if(inputSearch!='')
{
      $.ajax({
      type: "POST",
      url: "templates/searchbar.php",
      data: dataString,
      cache: false,
      success: function(html)
      {
      $("#searchResult").html(html).show();
      }
      });
}return false;    
});

jQuery("#searchResult").on("click",function(e){ 
      var $clicked = $(e.target);
      var $name = $clicked.find('.name').html();
      var decoded = $("<div/>").html($name).text();
      $('#inputSearch').val(decoded);
});
jQuery(document).on("click", function(e) { 
      var $clicked = $(e.target);
      if (! $clicked.hasClass("search")){
      jQuery("#searchResult").fadeOut(); 
      }
});
$('#inputSearch').click(function(){
      jQuery("#searchResult").fadeIn();
});
});