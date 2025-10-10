<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $filename = basename($_FILES['file']['name']);
    $target = "uploads/" . $filename;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
        echo "File uploaded successfully: $filename";
    } else {
        echo "File upload failed.";
    }
}
?>
<form method="post" enctype="multipart/form-data">
    Select file: <input type="file" name="file" required>
    <input type="submit" value="Upload">
</form>
