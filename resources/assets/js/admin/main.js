import 'bootstrap/dist/js/bootstrap.min.js';
import 'admin-lte/dist/js/app.min.js';
require('../../../../public/vendor/laravel-filemanager/js/lfm.js');

import './components/custom.js';

import 'icheck/icheck.min.js';

$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});