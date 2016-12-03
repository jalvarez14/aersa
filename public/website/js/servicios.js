$( document ).ready(function() 
{

  //Codigo para mandar la entrada de la transición de detalle
  $(function() 
  {
    // run the currently selected effect
    function runEffect(component, dir) 
    {
        var selectedEffect = "drop"; 
        if(isOpen()=="" || isOpen() == component)
        {
            
            options = { direction: dir };
            $( "#"+ component).toggle( selectedEffect, options, 400 );
            $( "#"+ component).toggleClass('active');
            if($( "#"+ component).hasClass('active'))
            {
                $('html,body').animate({
                    scrollTop: $("#"+component).offset().top - 100
                }, 1000);
            }
        }
        else
        {
            var opened = isOpen();
            $( "#"+ opened).toggle( selectedEffect, options, 400 );
            $( "#"+ opened).toggleClass('active');
            
            $( "#"+ component).toggle( selectedEffect, options, 400 );
            $( "#"+ component).toggleClass('active');
            if($( "#"+ component).hasClass('active'))
            {
                $('html,body').animate({
                    scrollTop: $("#"+component).offset().top - 100
                }, 1000);
            }
        }

    }
    function isOpen()
    {
        if($( "#detalleMaritimo").hasClass('active'))
        {
            return "detalleMaritimo";
        }
        if($( "#detalleAereo").hasClass('active'))
            return "detalleAereo";
        if($( "#detalleTerrestre").hasClass('active'))
            return "detalleTerrestre";
        if($( "#detalleAduana").hasClass('active'))
            return "detalleAduana";
        if($( "#detalleSeguro").hasClass('active'))
            return "detalleSeguro";
        if($( "#detalleLogistica").hasClass('active'))
            return "detalleLogistica";

        return "";
    }
    
    
    //Efecto maritimo
    $( "#btnMaritimo" ).click(function() {
        
      closeAll();
      runEffect("detalleMaritimo","left");
    });
    $( "#maritimoClose" ).click(function() {
      $( "#btnMaritimo" ).click();
    });

    //Efecto Aereo
    $( "#btnAereo" ).click(function() {
      $("#detalleAereo").toggleClass("opened");
      runEffect("detalleAereo","up");
    });
    $( "#aereoClose" ).click(function() {
      $( "#btnAereo" ).click();
    });

    //Efecto Terrestre
    $( "#btnTerrestre" ).click(function() {
      closeAll();
      runEffect("detalleTerrestre","right");
    });
    $( "#terrestreClose" ).click(function() {
      $( "#btnTerrestre" ).click();
    });

    //Efecto aduana
    $( "#btnAduana" ).click(function() {
      closeAll();
      runEffect("detalleAduana","left");
    });
    $( "#aduanaClose" ).click(function() {
      $( "#btnAduana" ).click();
    });

    //Efecto logística
    $( "#btnLogistica" ).click(function() {
      closeAll();
      runEffect("detalleLogistica","right");
    });
    $( "#logisticaClose" ).click(function() {
      $( "#btnLogistica" ).click();
    });
    //Efecto Seguro
    $( "#btnSeguro" ).click(function() {
      $("#detalleSeguro").toggleClass("opened");
      runEffect("detalleSeguro","up");
    });
    $( "#seguroClose" ).click(function() {
      $( "#btnSeguro" ).click();
    });

    //Efecto maritimo movil
    $( "#btnMaritimoM" ).click(function() {

      runEffect("detalleMaritimoM","up");
    });
    $( "#maritimoMClose" ).click(function() {
      $( "#btnMaritimoM" ).click();
    });

    //Efecto aereo movil
    $( "#btnAereoM" ).click(function() {
      runEffect("detalleAereoM","up");
    });
    $( "#aereoMClose" ).click(function() {
      $( "#btnAereoM" ).click();
    });

    //Efecto terrestre movil
    $( "#btnTerrestreM" ).click(function() {
      runEffect("detalleTerrestreM","up");
    });
    $( "#terrestreMClose" ).click(function() {
      $( "#btnTerrestreM" ).click();
    });

    //Efecto aduana movil
    $( "#btnAduanaM" ).click(function() {
      runEffect("detalleAduanaM","up");
    });
    $( "#aduanaMClose" ).click(function() {
      $( "#btnAduanaM" ).click();
    });

    //Efecto seguro movil
    $( "#btnSeguroM" ).click(function() {
      runEffect("detalleSeguroM","up");
    });
    $( "#seguroMClose" ).click(function() {
      $( "#btnSeguroM" ).click();
    });

    //Efecto logistica movil
    $( "#btnLogisticaM" ).click(function() {
      runEffect("detalleLogisticaM","up");
    });
    $( "#logsticaMClose" ).click(function() {
      $( "#btnLogisticaM" ).click();
    });


  });


  //Codigo para setear la posición de cuadro de detalle
  var width = $("#imgTransportes").width();
  var height = $("#imgTransportes").height();

  //Asignacion de estilos para el detalle
    $("#detalleMaritimo").css("display","none"); 
    $("#detalleMaritimo").css("position","absolute");
    $("#detalleMaritimo").css("background-color","rgba(0,0,0,.8)");
    $("#detalleMaritimo").css("color","white");
    $("#detalleMaritimo").css("opacity","1");

    $("#detalleMaritimo").css("bottom",height);
    $("#detalleMaritimo").css("left",(width/3)+1);

    $("#detalleMaritimo").css("height",height);
    $("#detalleMaritimo").css("margin-bottom",-height);
    $("#detalleMaritimo").css("width", (width/3)*2  );


    $("#detalleTerrestre").css("display","none"); 
    $("#detalleTerrestre").css("position","absolute");
    $("#detalleTerrestre").css("background-color","rgba(0,0,0,.8)");
    $("#detalleTerrestre").css("color","white");
    $("#detalleTerrestre").css("opacity","1");

    $("#detalleTerrestre").css("bottom",height);
    $("#detalleTerrestre").css("margin-bottom",-height);
    

    $("#detalleTerrestre").css("height",height);
    $("#detalleTerrestre").css("width", ((width/3)*2)+2  );


    $("#detalleAduana").css("display","none"); 
    $("#detalleAduana").css("position","absolute");
    $("#detalleAduana").css("background-color","rgba(0,0,0,.8)");
    $("#detalleAduana").css("color","white");
    $("#detalleAduana").css("opacity","1");

    $("#detalleAduana").css("bottom",height);
    $("#detalleAduana").css("margin-bottom",-height);
    $("#detalleAduana").css("left",(width/3)+1);

    $("#detalleAduana").css("height",height);
    $("#detalleAduana").css("width", (width/3)*2  );


    $("#detalleLogistica").css("display","none"); 
    $("#detalleLogistica").css("position","absolute");
    $("#detalleLogistica").css("background-color","rgba(0,0,0,.8)");
    $("#detalleLogistica").css("color","white");
    $("#detalleLogistica").css("opacity","1");

    $("#detalleLogistica").css("bottom",height);
    $("#detalleLogistica").css("margin-bottom",-height);

    $("#detalleLogistica").css("height",height);
    $("#detalleLogistica").css("width", ((width/3)*2)+2  );

    $("#detalleAereo").css("display","none"); 
    $("#detalleAereo").css("position","relative");
    $("#detalleAereo").css("background-color","rgba(0,0,0,.9)");
    $("#detalleAereo").css("color","white");
    $("#detalleAereo").css("opacity","1");

    //$("#detalleAereo").css("bottom",height);
    //$("#detalleAereo").css("margin-bottom",-height);

    $("#detalleAereo").css("height",height/1.5);
    $("#detalleAereo").css("width", width );

    //Imagen seguro
    $("#detalleSeguro").css("display","none"); 
    $("#detalleSeguro").css("position","relative");
    $("#detalleSeguro").css("background-color","rgba(0,0,0,.9)");
    $("#detalleSeguro").css("color","white");
    $("#detalleSeguro").css("opacity","1");

    //$("#detalleAereo").css("bottom",height);
    //$("#detalleAereo").css("margin-bottom",-height);

    $("#detalleSeguro").css("height",height/1.5);
    $("#detalleSeguro").css("width", width );

    //Seccion movil
    var widthM  = $("#imgMaritimoM").width();
    var heightM = $("#imgMaritimoM").height();


    $("#detalleMaritimoM").css("display","none"); 
    $("#detalleMaritimoM").css("position","relative");
    $("#detalleMaritimoM").css("background-color","rgba(0,0,0,.8)");
    $("#detalleMaritimoM").css("color","white");
    $("#detalleMaritimoM").css("opacity","1");
    //$("#detalleMaritimoM").css("bottom",heightM);
    //$("#detalleMaritimoM").css("margin-bottom",-heightM);
    //$("#detalleMaritimoM").css("height",heightM);
    $("#detalleMaritimoM").css("font-size", "16px"  );

    heightM = $("#imgAereoM").height();
    $("#detalleAereoM").css("display","none"); 
    $("#detalleAereoM").css("position","relative");
    $("#detalleAereoM").css("background-color","rgba(0,0,0,.8)");
    $("#detalleAereoM").css("color","white");
    $("#detalleAereoM").css("opacity","1");
    //$("#detalleAereoM").css("bottom",heightM);
    //$("#detalleAereoM").css("margin-bottom",-heightM);
    //$("#detalleAereoM").css("height",heightM/1.5);

    $("#detalleAereoM").css("font-size", "16px"  );

    heightM = $("#imgTerrestreM").height();
    $("#detalleTerrestreM").css("display","none"); 
    $("#detalleTerrestreM").css("position","relative");
    $("#detalleTerrestreM").css("background-color","rgba(0,0,0,.8)");
    $("#detalleTerrestreM").css("color","white");
    $("#detalleTerrestreM").css("opacity","1");
    //$("#detalleTerrestreM").css("bottom",heightM);
    //$("#detalleTerrestreM").css("margin-bottom",-heightM);
    //$("#detalleTerrestreM").css("height",heightM);
    $("#detalleTerrestreM").css("font-size", "16px"  );

    //heightM = $("#imgAduanaM").height();
    $("#detalleAduanaM").css("display","none"); 
    $("#detalleAduanaM").css("position","relative");
    $("#detalleAduanaM").css("background-color","rgba(0,0,0,.8)");
    $("#detalleAduanaM").css("color","white");
    $("#detalleAduanaM").css("opacity","1");
    //$("#detalleAduanaM").css("bottom",heightM);
    //$("#detalleAduanaM").css("margin-bottom",-heightM);
    //$("#detalleAduanaM").css("height",heightM);
    $("#detalleAduanaM").css("font-size", "16px"  );

    heightM = $("#imgSeguroM").height();
    $("#detalleSeguroM").css("display","none"); 
    $("#detalleSeguroM").css("position","relative");
    $("#detalleSeguroM").css("background-color","rgba(0,0,0,.8)");
    $("#detalleSeguroM").css("color","white");
    $("#detalleSeguroM").css("opacity","1");
    //$("#detalleSeguroM").css("bottom",heightM);
    //$("#detalleSeguroM").css("margin-bottom",-heightM);
    //$("#detalleSeguroM").css("height",heightM/1.2);
    $("#detalleSeguroM").css("font-size", "16px"  );

    heightM = $("#imgLogisticaM").height();
    $("#detalleLogisticaM").css("display","none"); 
    $("#detalleLogisticaM").css("position","relative");
    $("#detalleLogisticaM").css("background-color","rgba(0,0,0,.8)");
    $("#detalleLogisticaM").css("color","white");
    $("#detalleLogisticaM").css("opacity","1");
    //$("#detalleLogisticaM").css("bottom",heightM);
    //$("#detalleLogisticaM").css("margin-bottom",-heightM);
    //$("#detalleLogisticaM").css("height",heightM);
    $("#detalleLogisticaM").css("font-size", "16px"  );
  //Termina asignación de estilos detalle



});


function closeAll()
{
  if($("#detalleAereo").hasClass("opened"))
    $("#btnAereo").click();
  if($("#detalleSeguro").hasClass("opened"))
    $("#btnSeguro").click();
}