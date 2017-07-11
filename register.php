<?php 
$title = 'Register';
require_once('include/header.php'); 
 
?>


    <h1>Register</h1>
    <?php 
    if(isset($_GET['status']))
    {
        switch($_GET['status'])
        {
            case 'success':
                echo '<p>User Registered!</p>';
                break;
            case 'failed':
                echo '<p>Failed to Register User.</p>';
                break;
        }
    }
    ?>
    <form action="php/register.php" method="POST">
        <label>Name:</label>
        <input name="name" type="text" /> <br />
        <label>Email:</label>
        <input name="email" type="email" /> <br />

        <label>Password:</label>
        <input name="password" type="pasword" /> <br />
        <label>Re-type Password:</label>
        <input name="password_confirm" type="pasword" /> <br />

        <input type="submit" value="Register Me!" /> <br />
    </form>
    

<?php
require_once('include/footer.php'); 


