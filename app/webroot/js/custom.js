$(document).ready(function() {
      $('#tags').dataTable( {
        //"bPaginate": false,    
        "bLengthChange": true,
        "bFilter": true,    
        "bInfo": true,
        "bAutoWidth": true,
        "iDisplayLength" : 10,
        "sEmptyTable"  :  "No messages found",
        "sPaginationType": "full_numbers",
        "sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",  
      });


    $(".btn-info").click(function() {    
        url = $(this).attr('href');
        $.fancybox.open({
            'href' : url,
            'type' : 'iframe',
            'padding' : 5,
            'closeBtn'  : true,       
            autoDimensions: false,
        });
        return false;
    });

});