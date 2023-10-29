<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" typre="text/css" href="style.css">
</head>
<body>
    <?php
$dayofweek = date("w");
switch($dayofweek){
    case 0:
        $dayofweek = "<p> Sunday 🫣 </p>";
        break;
    case 1:
        $dayofweek = "<p> Monday 😫 </p>";
        break;
    case 2:
        $dayofweek = " <p> Tuesday 🍗 🎥 <p>";
        break;
    case 3:
        $dayofweek = " <p> Wednesday 🎀 </p> ";
        break;
    case 4:
        $dayofweek = " <p> Thursday 💣 </p>";
        break;
    case 5:
        $dayofweek = "<p> Friday 🥳 </p>";
        break;
    case 6:
        $dayofweek = "<p> Saturday 🥰 </p>";
        break;
}
?>
</body>
</html>