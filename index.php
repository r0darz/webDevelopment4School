<!DOCTYPE html>
<html>

<head>
    <title>Main Page of WEB Development For Education</title>
    <link rel="stylesheet" type="text/css" href="styles/Navigation.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
    
<div style="margin: 0% 40% 3% 40%"><?php echo file_get_contents('Navigation.html'); ?></div>
<section id="loadable-content"><?php echo file_get_contents('main.html'); ?></section>
</div>
<script>
    function reloadPage(id){
    if (id == "home-id"){
        $("#loadable-content").load('main.html');
    }
    else if (id == "links-id"){
        $("#loadable-content").load('links.php');
    }
    else if (id == "message-id"){
        $("#loadable-content").load('message.php');
    }
    else if (id == "photos-id"){
        $("#loadable-content").load('photos.html');
    }
    else if (id == "socials-id"){
        $("#loadable-content").load('socials.php');
    }
    }
</script>
</body>

</html>