<!--views/login.php-->

<?php require('views/header.php') ?>
        
<link href='public/styles/login.css' rel='stylesheet' />

<div class='Login'>
    <div class='title'>ចុះ​ឈ្មោះ​ចូល​ទំព័រ​គ្រប់គ្រង</div>
    <form action='./login' method='post'>
        <span>Email: </span><input type='email' name='email' required placeholder='Email' />
        <span>ពាក្យ​សំងាត់: </span><input type='password' name='password' required />
        <span></span><input type='submit' value='បញ្ជូន' />
        <span></span><div class='message'><?php echo $message ?></div>
    </form>
</div>

<?php require('footer.php') ?>