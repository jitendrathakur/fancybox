$(document).ready(function() {
    $('#potentries').dataTable( {
        //"bPaginate": false,    
        "bLengthChange": true,
        "bFilter": true,    
        "bInfo": true,
        "bAutoWidth": true,
        "iDisplayLength" : 3,
        "sEmptyTable"  :  "No messages found",
        "sPaginationType": "full_numbers",
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",  
    });    

    $('#transentries').dataTable( {
        //"bPaginate": false,    
        "bLengthChange": true,
        "bFilter": true,    
        "bInfo": true,
        "bAutoWidth": true,
        "iDisplayLength" : 3,
        "sEmptyTable"  :  "No messages found",
        "sPaginationType": "full_numbers",
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",  
    });

});