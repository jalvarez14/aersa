$(document).ready(function()
{
  $( "#formDiagnostico" ).submit(function( event ) {
    event.preventDefault();
  });

  $(".btn-panel").click(function()
  {
    if($(this).find('i').hasClass('fa-angle-down'))
    {
      $(this).find('i').addClass('fa-angle-up');
      $(this).find('i').removeClass('fa-angle-down');
    }
    else
    {
      $(this).find('i').addClass('fa-angle-down');
      $(this).find('i').removeClass('fa-angle-up');
    }
  });
});
