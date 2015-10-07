<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <title>Display</title>
</head>
<body>
<body>
<div class="container">
    <h2>Users Information</h2>
    <?php
    foreach($users as $user) {
        echo "<article>";
        echo "<h2>".$user->emp_name."</h2>";
        echo "<h4>".$user->email."</h4>";
        echo "<h4>".$user->phone."</h4>";
    echo "</article>";
    }
?>
</div>
</body>

</body>
</html>