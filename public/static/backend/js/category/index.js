(function ($) {
    $(document).ready(function () {
        $('.act-add').on('click', function (e) {
            e.preventDefault();
            $('#modal-add').modal('show');
            $('#modal-add .modal-content').html('Hello');
        });
    });
}(jQuery));