var productoActual= [];

(function ($) {

    setNumerics();
    setDatapickers();
    setAutocompletes();
    $('[name=ordentablajeria_folio]').on("blur", function ()
    {
        var folio = $(this).val();
        var $this = $(this);
        $this.removeClass('valid');
        $.ajax({
            url: "/procesos/tablajeria/validatefolio",
            dataType: "json",
            data: {folio: folio},
            success: function (exist) {
                console.log(exist);
                if (exist) {
                    //alert('El folio "'+folio+'" ya fue utilizado en los últimos 2 meses');
                    $this.addClass('invalid');
                    $("label[for=ordentablajeria_folio]").addClass("invalid");
                    $("label[for=ordentablajeria_folio]").text("Este folio ya fue utilizado");
                } else {
                    $this.addClass('valid');
                    $this.removeClass('invalid');
                    $("label[for=ordentablajeria_folio]").removeClass("invalid");
                    $("label[for=ordentablajeria_folio]").text("Folio *");
                }

            },
        });
    });

    $('input[name=idproducto_autocomplete]').on("blur", function ()
    {
        //alert('se selecciono otro producto');
    });
    
    $('[name=ordentablajeria_preciokilo]').on("blur",function()
    {
        /*
        //Si tenemos kg seleccionados
        if($("label[for=ordentablajeria_pesobruto]").text() == "Peso bruto")
        {
            //var aux = parseFloat($('[name=ordentablajeria_preciokilo]').val()) * parseFloat($('[name=ordentablajeria_pesobruto]').val());
            //$('[name=ordentablajeria_precioneto]').val(aux);
        }
        else
        {
            //var aux = parseFloat($('[name=ordentablajeria_preciokilo]').val()) * parseFloat($('[name=ordentablajeria_pesobruto]').val()) * parseFloat($('[name=ordentablajeria_numeroporciones]').val());
            //$('[name=ordentablajeria_precioneto]').val(aux);
        }
         */
    });
    
    $("#TablajeriaForm input").on("blur", function()
    {
        if($("label[for=ordentablajeria_pesobruto]").text() == "Peso bruto")
            calculate(true);
        else
            calculate(false);
    });
    
    $('[name=ordentablajeria_pesobruto]').on("blur",function()
    {

    });

})(jQuery);

function calculate(isKg)
{
    if(isKg)
    {
        
        
        var aux = parseFloat($('[name=ordentablajeria_preciokilo]').val()) * parseFloat($('[name=ordentablajeria_pesobruto]').val());
        if (!isNaN(aux))
            $('[name=ordentablajeria_precioneto]').val(aux);
        
        $('[name=ordentablajeria_numeroporciones]').val($('[name=ordentablajeria_pesobruto]').val());
    }
    else
    {
        var aux = parseFloat(productoActual['ProductoRendimiento']) * parseFloat($('[name=ordentablajeria_pesobruto]').val());
        $('[name=ordentablajeria_numeroporciones]').val(aux);
    }
}
function setProduct()
{
    var idprod = $("#idproducto").val();
    $.ajax({
        type: "GET",
        url: "/catalogo/producto/getprod/" + idprod,
        dataType: "json",
        success: function (data) {
            productoActual = data;
            if (data.length != 0)
            {
                if (data['Idunidadmedida'] == "3")
                {
                    $("[name=ordentablajeria_numeroporciones]").attr('disabled', true);
                    $("[name=ordentablajeria_numeroporciones]").val('');
                    $("label[for=ordentablajeria_pesobruto]").text("Peso bruto");
                } 
                else
                {
                    $("[name=ordentablajeria_numeroporciones]").attr('disabled', false);
                    $("[name=ordentablajeria_numeroporciones]").val('');
                    $("label[for=ordentablajeria_pesobruto]").text("Porciones");
                }
            } 
        },
    });
}
function setDatapickers()
{
    var anio = parseInt($("#anio").val());
    var mes = parseInt($("#mes").val());
    var minDate = new Date(anio + '/' + mes + '/' + '01');
    var maxDate = new Date(new Date(minDate).setMonth(minDate.getMonth() + 1));
    maxDate = new Date(new Date(maxDate).setDate(maxDate.getDate() - 1));
    $('[name=ordentablajeria_fecha]').datepicker({
        startDate: minDate,
        endDate: maxDate,
        format: 'dd/mm/yyyy',
    });
}
function setAutocompletes()
{
    var data = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            url: '/autocomplete/getproductos?q=%QUERY',
            wildcard: '%QUERY'
        }
    });

    //Autocomplete para el campo producto de detalles
    $('input[name=idproducto_autocomplete]').typeahead(null, {
        name: 'best-pictures',
        display: 'value',
        hint: true,
        highlight: true,
        source: data,
        limit: 5,
    });
    $('input[name=idproducto_autocomplete]').bind('typeahead:select', function (ev, suggestion) {
        $('input#idproducto').val(suggestion.id);
        setProduct();

    });

    //Autocomplete para la tabla de abajo
    $('input[name=producto_autocompleteTabla]').typeahead(null, {
        name: 'best-pictures',
        display: 'value',
        hint: true,
        highlight: true,
        source: data,
        limit: 5,
    });

    $('input[name=producto_autocompleteTabla]').bind('typeahead:select', function (ev, suggestion) {
        $('#producto_add').attr('disabled', false);
        $('input#idproductoTabla').val(suggestion.id);
        $('input#producto_iva').val(suggestion.producto_iva);

    });

}
function setNumerics()
{
    $("[name=ordentablajeria_preciokilo]").numeric();
    $("[name=ordentablajeria_inyeccion]").numeric();
}


