$(document).ready(function () {
    // Fungsi untuk menangani pengiriman form menggunakan AJAX
    $('#profileForm').on('submit', function (e) {
        e.preventDefault(); // Mencegah form melakukan submit normal

        // Buat objek FormData untuk menampung data form termasuk file
        var formData = new FormData(this);

        $.ajax({
            url: 'profileUpdate.php',  // Arahkan ke file PHP untuk menangani upload
            type: 'POST',
            data: formData,
            contentType: false,        // Jangan set jenis konten apa pun
            processData: false,        // Jangan proses data menjadi string
            success: function (response) {
                // Parse JSON yang dikirim dari PHP
                var result = JSON.parse(response);

                if (result.status === 'success') {
                    // Update gambar profil di halaman tanpa reload
                    $('#profilePicture img').attr('src', 'uploads/' + result.profile_picture);

                    // Tampilkan pesan sukses
                    $('#status').html('<p style="color:green;">' + result.message + '</p>');
                } else {
                    // Tampilkan pesan error
                    $('#status').html('<p style="color:red;">' + result.message + '</p>');
                }
            },
            error: function () {
                $('#status').html('<p style="color:red;">Terjadi kesalahan dalam proses.</p>');
            }
        });
    });
});
