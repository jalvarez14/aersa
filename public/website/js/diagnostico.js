
$(document).ready(function()
{
  $( "#formDiagnostico" ).submit(function( event ) {
    event.preventDefault();
    var giro            = "";
    var administracion  = [];
    var almacen         = [];
    var almacenText     = [];
    var sistemas        = [];
    var finanzas        = [];
    var finanzasText    = [];
    var compras         = [];
    var comprasText     = [];
    var administracionText = [];

    giro            = $("#giro") .val();
    administracion  = getInputData("#administracion input");
    administracionText  = getTextareaData("#administracion textarea");
    almacen         = getInputData("#almacen input");
    almacenText     = getTextareaData("#almacen textarea");
    sistemas        = getInputData("#sistemas input");
    finanzas        = getInputData("#finanzas input");
    finanzasText    = getTextareaData("#compras textarea");
    compras         = getInputData("#compras input");
    comprasText     = getTextareaData("#compras textarea");
    console.log() 
    $("#imgLoading").removeClass('hidden');
    $.ajax({
        url:'sendCotizacion',
        dataType:'json',
        method: 'post',
        data:
        {
          'giro'            : giro,
          'administracion'  : administracion,
          'administracionText'  : administracionText,
          'almacen'         : almacen,
          'almacenText'     : almacenText,
          'sistemas'        : sistemas,
          'finanzas'        : finanzas,
          'finanzasText'    : finanzasText,
          'compras'         : compras,
          'comprasText'     : comprasText,
        },
        success:function(data){
          $("#imgLoading").addClass('hidden');
          if(data == 'good')
          {
            $( ".form-horizontal" ).fadeOut( "slow", function() {
              $( ".success-mail" ).fadeIn( "slow", function() {

              });
            });
          }
        },
    });

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

  $("#btnSendData").on("click",function()
  {

  });


});

function getInputData(component)
{
  var partial = [];
  var counter = 0;

  $(component).each(function()
  {
    if($(this).is(":checked"))
    {
      partial[counter] = $(this).val();
      counter +=1;
    }
  });
  return partial;
}
function getTextareaData(component)
{
  var partial = [];
  var counter = 0;

  $(component).each(function()
  {
      partial[counter] = "<b>" + $(this).attr('name') + "</b><br>" + $(this).val();
      counter +=1;
  });
  return partial;
}
