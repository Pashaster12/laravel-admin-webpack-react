$(document).ready(function() {
    
    //For preventing 500-error in ajax
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    
    //Highlight the active menu item
    function getBaseUrl() {
        var re = new RegExp(/^.*\//);
        return re.exec(window.location.href).shift();
    }
    
    $(function () {
        var location = window.location.href;
        
        //Desktop
        $('.sidebar-menu li').each(function () {
            
            var link = $(this).find('a').attr('href');
            if((location.indexOf(link) != -1 && link + '/' != getBaseUrl()) || (link == location)) $(this).addClass('active');
        });
    });
    
    
    $('#password-block').on('shown.bs.collapse', function () {
        $('button[href="#password-block"]').text('Отмена');
    });
    
    $('#password-block').on('hidden.bs.collapse', function () {
        $('button[href="#password-block"]').text('Сменить пароль');
    });
    
});