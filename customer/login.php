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
    <!-- Body -->
    <h1>heading1!</h1>





    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" value="<?php
                                    if(!session_id()){ session_start();}
                                    if(isset($_POST['email'])){echo htmlentities($_POST['email']);}
                                    elseif(isset($_SESSION['register_user'])){echo $_SESSION['register_user'];}//$_SESSION['register_user'] ="";
                                    ?>" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" minlength="8" maxlength="32" value="" required>
                                </div>
                                <!--                            <div class="checkbox">-->
                                <!--                                <label>-->
                                <!--                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me-->
                                <!--                                </label>-->
                                <!--                            </div>-->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <a href="../admin/admin_login.php" class="btn btn-default">Admin?</a>

                <a href="reset_password.php" class="btn btn-default">Forget Password?</a>

                <a href="register.php" class="btn btn-default">Join Us</a>

            </div>
        </div>

    </div>


<?php require_once ('../includes/footer.php'); ?>