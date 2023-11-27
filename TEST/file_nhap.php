<form action="file_nhap.php" method="POST">
    <input type="checkbox" value="so1" name="so1">
    <input type="checkbox" value="so2" name="so2">
    <input type="submit" name="submit">
</form>
<?php
if (isset($_POST['submit'])) {
    print_r($_POST['so1']);
    print_r($_POST['so2']);
    echo "có";
} else {
    echo "chưa có";
}
?>