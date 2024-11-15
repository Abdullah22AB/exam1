<?php 
if(isset($_POST["submit"])){
    $color=$_POST["colors"];
    setcookie("color",$color,time() + (60 * 60 * 24 * 30));
    header("Refresh: 0");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Dropdown Menu</title> 
    <style>
        body{
            background-color:<?php echo $_COOKIE["color"] ?? ""; ?>;
        }
    </style>
</head>
<body>

    <h2>Select a Color</h2>

    <form method="post" action="" >
        <label for="colors">Choose a color:</label>
        <?php $_COOKIE["color"] ?? ""?>
        <select id="colors" name="colors">
            <option value="<?php echo  $_COOKIE["color"] ??''?>">  <?php echo  $_COOKIE["color"]??"";?></option>
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="green">Green</option>
            <option value="yellow">Yellow</option>
            <option value="orange">Orange</option>
            <option value="purple">Purple</option>
            <option value="pink">Pink</option>
            <option value="brown">Brown</option>
            <option value="black">Black</option>
            <option value="white">White</option>
        </select>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>
