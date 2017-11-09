<?php
/**
 * Created by PhpStorm.
 * User: tobymao
 * Date: 09/11/2017
 * Time: 11:54 PM
 */
?>

<?php require_once ('../includes/functions.php'); ?>

<?php require_once ('../includes/header_a.php'); ?>

<?php addtitle("Sign In"); ?>

<?php require_once ('../includes/header_b.php'); ?>
    <!--Customer CSS -->
<?php loadcss("style.css") ?>
<?php require_once ('../includes/header_c.php'); ?>
    <!-- Body -->



    <div class="container">

        <form class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

    </div>


<?php require_once ('../includes/footer.php'); ?>