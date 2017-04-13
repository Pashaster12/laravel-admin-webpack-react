import 'bootstrap/dist/js/bootstrap.min.js';
import 'admin-lte/dist/js/app.min.js';
import 'icheck/icheck.min.js';

$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});