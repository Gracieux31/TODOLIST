<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

<div id="login" class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Identifiez-vous !!! </font></font></h1>
        <p class="col-lg-10 fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Ou Inscrivez-vous pour acceder au support TODOLIST .</font></font></p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form id="login-form" action="" method="post" class="form p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="username">
            <label for="username"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Username:</font></font></label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="password" name="password">
            <label for="password"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Password:</font></font></label>
          </div>
          <button name="LoginSubmit" class="w-100 btn btn-lg btn-primary" type="submit" value="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Se connecter</font></font></button>
          <div id="reg_link" class="text-right">
            <a href="?register=true"class="text-info">Registers</a>
          </div>
          <hr class="my-4">
          <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">En cliquant sur S'inscrire, vous acceptez les conditions d'utilisation.</font></font></small>
        </form>
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>



<!-- <body>
        <div id="login">
            <h3 class="text-center texte-white pt-5">Login</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-centr align-items-center">
                    <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" methode="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label> <br>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label> <br>
                                <input type="text" name="password" id="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-group">
                            <input type="submit" name="LoginSubmit" class="btn btn-info btn-md" value="submit"/>
                            </div>
                            <div id="reg_link" class="text-right">
                                <a href="?register=true"class="text-info">Registers</a>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    
</body> -->
</html>