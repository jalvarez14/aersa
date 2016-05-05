 
$( document ).ready(function() {
    
    $('#selectall').change( function(){
        
        if(this.checked) 
            checkAll();
        else
            uncheckAll();
    });
    
    

});

function checkAll()
{
    var numRows = parseInt($("#numRows").val());
    for(var i=0; i<= numRows; i++)
    {
        var actual = "#"+(i+2).toString();
        if(!$(actual).is(':checked') )
            $(actual).click();
    }
}


function uncheckAll()
{
    var numRows = parseInt($("#numRows").val());
    for(var i=0; i<= numRows; i++)
    {
        var actual = "#"+(i+2).toString();
        if($(actual).is(':checked') )
            $(actual).click();
    }
}



 
