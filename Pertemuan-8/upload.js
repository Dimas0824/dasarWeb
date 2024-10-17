$(document).ready(function () {
    $("#file").change(function (e) {
        if (this.files.length > 0) {
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    $('#upload-form').submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: 'upload_ajax.php',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#status').html(response);
            },
            error: function () {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});