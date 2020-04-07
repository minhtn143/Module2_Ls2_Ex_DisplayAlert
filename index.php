<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Exercise</title>
</head>
<body>
<h2>Hiển thị thông báo nếu người dùng nhập vào chỉ số không hợp lệ</h2>
<?php
$array = [];
for ($i = 0; $i < 100; $i++) {
    array_push($array, rand(0, 99));
}
foreach ($array as $value) {
    echo $value . " ";
}

?>
<form action="" method="get" name="createMatrix">
    Enter position (from 0 to 100):
    <input type="number" name="key">
    <br>
    <button type="submit">Find</button>
</form>
<?php
function check($number)
{
    if ($number < 0 || $number >= 100) {
        throw new Exception("Not valid position!");
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $key = $_REQUEST['key'];
    try {
        check($key);
        echo "Number at position " . $key . " is: ";
            echo $array[$key];
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
}

?>
<br>

</body>
</html>


