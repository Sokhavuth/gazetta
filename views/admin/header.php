<!--views/admin/header.php-->
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
        <link href="public/styles/admin/header.css" rel="stylesheet"></link>
    </head>
    <body>
    <div class='site'>

    <div class="Header">
        <div class='wrapper region'>
            <div class='logo'>
                <?php echo $pageTitle ?>
            </div>
            <form class='search'>
                <select name='category'>
                    <option>ការផ្សាយ</option>
                </select>
                <input type='text' />
                <input type='submit' value='ស្វែង​រក' />
            </form>
            <div class='logout'>
                <a href='./'>ទំព័រ​មុខ<a> | <a href='./admin_logout'>ចេញ​ក្រៅ</a>
            </div>
        </div>
    </div>
