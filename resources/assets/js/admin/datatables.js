import 'bootstrap/dist/js/bootstrap.min.js';
import 'admin-lte/dist/js/app.min.js';
require('../../../../public/vendor/laravel-filemanager/js/lfm.js');

import './components/custom.js';

import 'datatables/media/js/jquery.dataTables.min.js';
import 'datatables-bootstrap3-plugin/media/js/datatables-bootstrap3.js';

$(function () {
    $("#list").DataTable({
        "language": {
            "url": '/datatables_russian.json'
        },
        "columnDefs": [{
                "targets": ['no-sort'],
                "orderable": false
            }],
        "aaSorting": []
    });
});