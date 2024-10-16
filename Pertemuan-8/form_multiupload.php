<!DOCTYPE html>
<html>

<head>
    <title>Multiupload Dokumen</title>
</head>

<body>
    <h2>Unggah Dokumen</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx">
        <input type="submit" name="Unggah">
    </form>
</body>

</html>