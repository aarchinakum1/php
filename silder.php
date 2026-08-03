<!DOCTYPE html>
<html>
<head>
    <title>PHP Image Slider</title>

    <style>
        .slider {
            width: 500px;
            height: 300px;
            margin: 50px auto;
            border: 2px solid black;
        }

        .slider img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>

<?php
$images = array(
    "images/img1.jpg",
    "images/img2.jpg",
    "images/img3.jpg"
);
?>

<div class="slider">
    <img id="slide" src="<?php echo $images[0]; ?>">
</div>

<script>
var images = [
<?php
for($i=0; $i<count($images); $i++)
{
    echo "'" . $images[$i] . "'";
    if($i < count($images)-1)
        echo ",";
}
?>
];

var index = 0;

setInterval(function(){
    index++;
    if(index >= images.length)
    {
        index = 0;
    }
    document.getElementById("slide").src = images[index];
}, 2000);
</script>

</body>
</html>