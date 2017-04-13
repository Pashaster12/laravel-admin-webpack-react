$(document).ready(function() {
    
    //For preventing 500-error in ajax
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });   
    
});