<?php
$allowedExts = array (
    "gif",
    "jpeg",
    "jpg",
    "png"
);
$temp = explode ( ".", $_FILES ["file"] ["name"] );
$extension = end ( $temp );
if ((($_FILES ["file"] ["type"] == "image/gif") ||
        ($_FILES ["file"] ["type"] == "image/jpeg") ||
        ($_FILES ["file"] ["type"] == "image/jpg") ||
        ($_FILES ["file"] ["type"] == "image/pjpeg") ||
        ($_FILES ["file"] ["type"] == "image/x-png") ||
        ($_FILES ["file"] ["type"] == "image/png")) &&
    in_array ( $extension, $allowedExts ))
{
    if ($_FILES ["file"] ["error"] > 0)
    {
        echo "Return Code: " . $_FILES ["file"] ["error"] . "<br>";
    }
    else
    {
        echo "Upload: " . $_FILES ["file"] ["name"] . "<br>";
        echo "Type: " . $_FILES ["file"] ["type"] . "<br>";
        echo "Size: " . ($_FILES ["file"] ["size"] / 1024) . " kB<br>";
        echo "Temp file: " . $_FILES ["file"] ["tmp_name"] . "<br>";

        if (file_exists ( "../upload/" . $_FILES ["file"] ["name"] ))
        {
            echo $_FILES ["file"] ["name"] . " already exists. ";
        }
        else
        {
            // zorg ervoor dat de dir 'upload' aangemaakt is.
            // werk je op windows dan staan de rechten (schrijf rechten) goed.
            // werk je op linux dan moet je de schrijfrechten "aanzetten"
            move_uploaded_file ( $_FILES ["file"] ["tmp_name"], "../upload/" . $_FILES ["file"] ["name"] );
            echo "Stored in: " . "resources/assets/Images" . $_FILES ["file"] ["name"];
        }
    }
}
else
{
    echo "Invalid file";
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>File Upload Handler</title>
</head>

<body>

<div></div>

</body>
</html>