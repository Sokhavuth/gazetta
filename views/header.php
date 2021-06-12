<!--views/header.php-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title><?php echo $blogTitle.' - '.$pageTitle ?></title>
        <script src="public/scripts/jQuery.js"></script>
        <link href="public/fonts/setup.css" rel="stylesheet" ></link>
        <link href="public/images/site_logo.png" rel="icon" ></link>
        <link href="public/styles/global.css" rel="stylesheet"></link>
        <link href="public/styles/header.css" rel="stylesheet"></link>
    </head>
    <body>
    <div class='site region'>

    <div class="Header ">
        <div class='wrapper '>
            <div class='datetime'>
                <div class='date'><?php echo $date ?></div>
                <div class='time' id='kh-clock'>Time</div>
            </div>
            <div class='title'>
                <?php echo $blogTitle ?>
                <div class='description'><?php echo $description ?></div>
            </div>
            <form class='search'>
                <input type='text' />
                <input type='submit' value='ស្វែង​រក' />
            </form>
        </div>
    </div>

    <script src='public/scripts/header.js'></script>
    <?php require('views/menu.php') ?>