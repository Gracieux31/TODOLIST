<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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
    
</body>
</html>