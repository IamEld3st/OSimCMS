<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>OSimCMS - Database Setup</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h1>Database<b>Setup</b></h1>
    </div>
    <div style="background-color: #BDBDBD; display: block; height: 3px"></div>
    <div class="container">  

      <form class="form-signin pull-right" style="max-width: 540px">
        <label for="inputUrl" class="sr-only">Url</label>
        <input type="text" id="inputUrl" class="form-control" placeholder="Url" style="margin: 5px" required autofocus>
        <label for="inputDb" class="sr-only">DB Name</label>
        <input type="text" id="inputDb" class="form-control" placeholder="DB Name" style="margin: 5px" required>
        <label for="inputUser" class="sr-only">Username</label>
        <input type="text" id="inputUser" class="form-control" placeholder="Username" style="margin: 5px" required>
        <label for="inputPass" class="sr-only">Password</label>
        <input type="password" id="inputPass" class="form-control" placeholder="Password" style="margin: 5px" required>
        <button class="btn btn-lg btn-block" type="submit" style="margin: 5px">Setup</button>
      </form>

    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>