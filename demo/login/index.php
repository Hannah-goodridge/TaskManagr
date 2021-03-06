<?php
    require($_SERVER['DOCUMENT_ROOT'] . '/includes/config.php');

    $loc = '/';
    if (!empty($_GET['referrer'])) $loc = $_GET['referrer'];

    if (!empty($_COOKIE['taskManagr'])) {
        session_start();
        $cookie = json_decode(stripslashes($_COOKIE['taskManagr']));
        $_SESSION['users_email'] = $cookie->email;
        $_SESSION['users_password'] = $cookie->password;
        header("Location: " . $loc);
    };
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | Task Managr Demo</title>
</head>
<body>
<form role="form" action="login.php?loc=<?php echo $loc; ?>" method="POST">
                <div class="form-group">
                    <label for="user_email">Email</label>
                    <input required type="text" name="user_email" id="user_email" placeholder="Email">
                  </div>
                  <div class="form-group">
                      <label for="user_password">Password</label>
                          <input required type="password" id="user_password" name="user_password" placeholder="Password">
                  </div>
                  <div class="form-group">
                      <div class="checkbox">
                          <label>
                              <input type="checkbox" name="remember"> Remember me
                          </label>
                  </div>
              </div>
              <div class="form-group">
                      <button type="submit" class="btn btn-primary">Sign in</button>
              </div>
          </form>
</body>
</html>