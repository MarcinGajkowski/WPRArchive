<?php
include 'DB_portal.php';
include 'DB_admin.php'; // ???
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="x-iso-8859-11">
    <title>Samochody</title>
</head>
<body>
<?php
    $que = $db->prepare("SELECT * FROM samochody WHERE id = " . $_GET['id']);
    $query2 = $db->query($que);
    $result = $query2->fetch(PDO::FETCH_OBJ);
    echo '<a href="DB_portal.php">Powrót do galerii</a>';
?>
</body>
</html>