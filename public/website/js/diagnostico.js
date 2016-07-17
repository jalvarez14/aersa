
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

  $("#btnSendData").on("click",function()
  {
    var administracion  = [];
    var almacen         = [];
    var almacenText     = [];
    var sistemas        = [];
    var finanzas        = [];
    var finanzasText    = [];
    var compras         = [];
    var comprasText     = [];

    administracion  = getInputData("#administracion input");
    almacen         = getInputData("#almacen input");
    almacenText     = getTextareaData("#almacen textarea");
    sistemas        = getInputData("#sistemas input");
    finanzas        = getInputData("#finanzas input");
    finanzasText    = getTextareaData("#compras textarea");
    compras         = getInputData("#compras input");
    comprasText     = getTextareaData("#compras textarea");

    $("#imgLoading").removeClass('hidden');
    $.ajax({
        url:'sendCotizacion',
        dataType:'json',
        method: 'post',
        data:
        {
          'administracion'  : administracion,
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
          console.log(data);
        },
    });

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
      partial[counter] = $(this).attr('name') + "<br>" + $(this).val();
      counter +=1;
  });
  return partial;
}
