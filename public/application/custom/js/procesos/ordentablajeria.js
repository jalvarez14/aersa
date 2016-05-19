var productoActual= [];
var productoAuxiliar = [];
var count = 0;
var almacenes = [];

(function ($) 
{    
    setAlmacenes();
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
    
    $("#TablajeriaForm input").on("blur", function()
    {
        if(this.name == 'idproducto_autocomplete')
        {
            var tablajeria = getTablajeria($("#idproducto").val()) ;
            if(tablajeria != false)
            {
                deleteProducts();
                for(i=0;i<tablajeria.length;i++)
                {
                    //console.log(tablajeria[i]);
                    prod = getProducto(tablajeria[i]['Idproducto']);
                    //console.log(prod);
                    addProducto(prod,almacenes);   
                }
                $('[name=producto_autocompleteTabla]').attr('disabled', true);
            }
            else
            {
                deleteProducts();
                $('[name=producto_autocompleteTabla]').attr('disabled', false);
            }
        }   
        else
        {
            if($("label[for=ordentablajeria_pesobruto]").text() == "Peso bruto")
                calculate(true);
            else
                calculate(false);
        }
        
    });
    
    
    
    
    $('#producto_add').on('click',function()
    {  
        var almacenes = ['Almacen general'];
        var prod = $('#idproductoTabla').val();
        
        prod = getProducto(prod);
        addProducto(prod,almacenes);

    });
            

})(jQuery);

var revisadaControl = function () 
{
    $('select[name=ordentablajeria_revisada]').on('change', function () {

        var selected = $('select[name=ordentablajeria_revisada] option:selected').val();

        if (selected == 1) {
            console.log( $('#productos_table tbody input[type=checkbox]'));
            $('#productos_table tbody input[type=checkbox]').prop('checked', true);
        } else {
            $('#productos_table tbody input[type=checkbox]').prop('checked', false);
        }
    });

    $('#productos_table tbody input[type=checkbox]').on('change', function () {

        var all_checked = true;
        $('#productos_table tbody input[type=checkbox]').filter(function(){
            if(!$(this).prop('checked')){
                all_checked = false;
            }
        });
       if(!all_checked){
            $('select[name=ordentablajeria_revisada]').val(0);
       }else{
            $('select[name=ordentablajeria_revisada]').val(1);
       }


    });

}
        
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
            url: '/autocomplete/getproductossimples?q=%QUERY',
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
function setAlmacenes()
{
    $("[name=idalmacendestino] option").each(function()
    {
        almacenes.push($(this).text());
    });
}

function getProducto(idprod)
{
    var prod;
    prod =  $.ajax({
        type: "GET",
        url: "/catalogo/producto/getprod/" + idprod,
        dataType: "json",
        async: false,
    });
    return jQuery.parseJSON(prod.responseText);
}
function getTablajeria(id)
{   var tablajeria;
    tablajeria = $.ajax({
        type: "GET",
        url: "/procesos/tablajeria/gettablajeria/" + id,
        dataType: "json",
        async: false,
    });
    console.log(tablajeria.responseText);
    if(tablajeria.responseText != false)
        return jQuery.parseJSON(tablajeria.responseText);
    else 
        return false;
}


function deleteProducts()
{
    $('#productos_table tbody').html('');
}

function addProducto(prod,almacenes)
{
    //CREAMOS NUESTRO SELECT PARA CADA PRODUCTO
    var almacenen_select = $('<td><select class="form-control" name=productos['+count+'][almacen]></td>');
    $.each(almacenes,function(index){
        var option = $('<option value="'+index+'">'+this+'</option>');
        almacenen_select.find('select').append(option);
    });
    console.log(prod);
    var tr = $('<tr>');
    tr.append('<td><input name=productos['+count+'][subtotal] type=hidden><input name=productos['+count+'][costo_unitario] type=hidden><input type="hidden"  name=productos['+count+'][producto_iva] value="'+$('input#producto_iva').val()+'"><input type="hidden"  name=productos['+count+'][idproducto] value="'+$('input#idproducto').val()+'">'+prod['ProductoNombre']+'</td>');
    tr.append('<td><input type="text" name=productos['+count+'][cantidad] value="1"></td>');
    tr.append('<td><input type="text" name=productos['+count+'][unidadmedida] value="'+prod['Idunidadmedida']+'"></td>');
    tr.append('<td class="costo_unitario">'+accounting.formatMoney(0)+'</td>');
    tr.append('<td><input type="text" name=productos['+count+'][descuento] value="0"></td>');
    tr.append('<td><input type="text" name=productos['+count+'][ieps] value="0"></td>');
    tr.append('<td class="subtotal">'+accounting.formatMoney(0)+'</td>');
    tr.append('<td><input type="checkbox" name=productos['+count+'][revisada]></td>');
    tr.append(almacenen_select);
    tr.append('<td ><a href="javascript:;"><i style="color:red" class="fa fa-trash"></i></a></td>');

    //AQUI HACEMOS HACEMOS NUMERICOS TODOS NUESTRO CAMPOS INPUTS
    tr.find('input').numeric();

    //ADJUNTAMOS EL EVENTO CALCULATOR PARA CALCULAR SUBTOTAL,TOTAL,IEPS, ETC
    tr.find('input').on('blur',function(){
        var $tr = $(this).closest(tr);
        calculator($tr);
    });

    var revisada = $('select[name=ordentablajeria_revisada] option:selected').val();
    if(revisada==1){
        tr.find('input[type=checkbox]').prop('checked',true);
    }

    //INSERTAMOS EN LA TABLA
    $('#productos_table tbody').append(tr);

    //LIMPIAMOS EL AUTOCOMPLETE
    $('input[name=producto_autocompleteTabla]').typeahead('val', '');
    $('input#idproductoTabla').val('');
    $('input#producto_iva').val('');
    $('#producto_add').attr('disabled', true);


    count++;

    $('.fa-trash').on('click', function () {
        var tr = $(this).closest('tr');
        tr.remove();
    });
    //De igual manera, si la entidad se pone como revisada, todos los items se ponen como revisados. 
    revisadaControl();
    
}

