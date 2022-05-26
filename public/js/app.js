$(function() {
    $('.input-search').on('keyup', function (e) {
        var a = $('#search-form').attr('action');
        var b = a.split('?')[0] + '?search=' + $('.input-search').val();                                                  
         $('#search-form').attr('action',b);                     
    }) 
});

