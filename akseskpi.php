<?php
$passwordBenar = "12345";

if (!isset($_POST['password'])) {
?>
<form method="POST">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Masuk</button>
</form>
<?php
} else {
    if ($_POST['password'] == $passwordBenar) {
        header("Location: https://app.powerbi.com/view?r=eyJrIjoiMDY4MzZkYzQtMzkxYy00OTMyLTk3ODAtYzA0OGNhZTkzMTRhIiwidCI6IjVlZGViNzljLWFmZTktNDQzMS1hMGQ1LTdhZDBjMTQ5YTQwMiIsImMiOjEwfQ%3D%3D");
        exit;
    } else {
        echo "Password salah";
    }
}
?>