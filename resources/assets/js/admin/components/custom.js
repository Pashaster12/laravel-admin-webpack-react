$(document).ready(function() {
    
    //For preventing 500-error in ajax
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    
    //Highlight the active menu item
    $(function () {
        var location = window.location.href;
        
        //Desctop
        $('.sidebar-menu li').each(function () {
            var link = $(this).find('a').attr('href');
            if(location.indexOf(link) != -1 && link != '/admin') $(this).addClass('active');
        });
    });
    
});