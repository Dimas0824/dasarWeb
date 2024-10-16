<!DOCTYPE html>
<html>

<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi</h1>

    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br><br>

        <input type="submit" value="Submit"><br><br>
    </form>

    <div id="response-message"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah form agar tidak submit secara default

                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Validasi form
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (valid) {
                    // Jika validasi berhasil, lakukan request AJAX
                    $.ajax({
                        url: "proses_validasi.php", // Ganti dengan URL pemrosesan server
                        type: "POST",
                        data: {
                            nama: nama,
                            email: email
                        },
                        success: function(response) {
                            // Cetak hasil dari respon server di halaman
                            $("#response-message").html(response + "</strong>");
                        },
                        error: function() {
                            $("#response-message").html("<strong>Terjadi kesalahan saat mengirim data.</strong>");
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>