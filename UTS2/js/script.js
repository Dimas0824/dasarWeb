$(document).ready(function () {
    $('#profileForm').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: 'profileUpdate.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                $('#status').html('<p style="color:green;">' + response + '</p>');
            },
            error: function () {
                $('#status').html('<p style="color:red;">Terjadi kesalahan dalam proses.</p>');
            }
        });
    });
});
