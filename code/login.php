<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="rock.css">
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
 <form class="shadow w-450 p-3" 
       action ="signup.php" 
       method="post">
    <h4 class="display-4  fs-1">Create account</h4><br>
    <?php if (isset($_GET['error'])){ ?>
    <div class="alert alert-danger" role="alert">
    <?php echo $_GET['error']; ?>
    </div>
     <?php  } ?>
     <?php if (isset($_GET['success'])){ ?>
    <div class="alert alert-success" role="alert">
    <?php echo $_GET['success']; ?>
    </div>
     <?php  } ?>
   <div class="mb-3">
    <label  class="form-label" >full name</label>
    <input type="text" 
           class="form-control" 
           name="fname"
           value="<?php echo (isset( $_GET['fname']))?  $_GET['fname']:""; ?>">
   </div>
   <div class="mb-3">
    <label  class="form-label">user name</label>
    <input type="text" 
           class="form-control" 
           name="uname"
           value="<?php echo (isset( $_GET['uname']))?  $_GET['uname']:""; ?>">
   </div>
   <div class="mb-3">
    <label  class="form-label">password</label>
    <input type="password" 
           class="form-control" 
           name="pass">
   </div>
  <button type="submit" class="btn btn-primary">sign up</button>
  <a href="register.php "class="link-secondary">login</a>
 </form>
</div>
</body>
</html>