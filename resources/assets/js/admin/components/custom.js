$(document).ready(function() {
    //For preventing 500-error in ajax
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
    
    //Highlight the active menu item
    $(function () {
        var location = window.location.href;
        
        //Desktop
        $('.sidebar-menu li').each(function () {
            var link = $(this).find('a').attr('href');
            if(link == location) $(this).addClass('active');
        });
    });
    
    
    $('#password-block').on('shown.bs.collapse', function () {
        $('button[href="#password-block"]').text('Отмена');
    });
    
    $('#password-block').on('hidden.bs.collapse', function () {
        $('button[href="#password-block"]').text('Сменить пароль');
    });
    
    //Deleting different types of objects in admin panel
    $('body').on('click', '.obj_delete_btn', function(){
        var object_id = $(this).data('object-id');
        var object_alias = $(this).data('object-alias');
        
        if (confirm('Вы действительно хотите удалить этот объект?'))
        {
            $.ajax({
                method: 'POST',
                url: '/admin/' + object_alias + '/' + object_id + '/delete',
                data: 'object_id=' + object_id + '&object_alias=' + object_alias,
                success: setTimeout(function(){
                    location.reload();
                }, 500)
            });
        }
    });
    
    //Initialize UniSharp laravel filemanager
    $('#lfm').filemanager('image');
});