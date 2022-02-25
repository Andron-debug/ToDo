<?php require("Header.php");?>
<?php require("Nav.html");?>
<main>
        <form action="Login.php" method="post" class="login_form">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required pattern="[0-9a-zA-Z!@#$%^&*]+">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <?php
                if(isset($_POST['email'])&&isset($_POST['password']))
                {
                  if($db -> IsEmailInBase($_POST['email']))
                  {
                    if($db -> IsPasswordOk($_POST['email'],$_POST['password']))
                    {
                      echo "<script>alert('You successfully login')</script>";
                      $_SESSION['email'] = $_POST['email'];
                      $_SESSION['password'] = $_POST['password'];
                      header("Location: Index.php");
                    }
                      else
                      {
                        echo "<script>alert('Invalid password')</script>";
                      }
                  }
                  else
                  {
                    require("WillReg.php");
                  }
                }
        ?>
    </main>
    <?php require("Footer.html");?>
