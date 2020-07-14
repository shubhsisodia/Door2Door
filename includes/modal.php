<link href="../css/style.css" rel="stylesheet">
<!-- Modal -->
<div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="color" style="text-align: left;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
            </div>
            <div class="modal-body" style="height: 260px;">
                <form role="form" action="login_submit.php" method="POST">
                    <div class="form-group">
                        <label class="form-group">Don't have an account?<a href="./signup.php">&nbsp;Register</a></label><br>
                        <input type="email" class="form-control"  name="e-mail" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <?php if (isset($_GET["error"])) {
                        echo $_GET['error'];
                    } ?><br>

                    <button type="submit" class="btn btn-primary">Login</button><br><br>
                    <p class="pull-left"><a href="#">Forgot Password?</a></p>
                </form>
            </div>
        </div>
    </div>
</div> 
