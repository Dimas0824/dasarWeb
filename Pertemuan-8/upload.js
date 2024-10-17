$(document).ready(function () {
    $("#upload-form").submit(function (e) {
        e.preventDefault(); // Mencegah form dikirim secara normal

        var formData = new FormData(this); // Mengumpulkan data form, termasuk file

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#status').html(response); // Tampilkan respons dari server
            },
            error: function () {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});