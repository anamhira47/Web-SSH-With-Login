<!DOCTYPE html>
<?php    
$image = "/img/terminal.ico";
?>
<html >
    
  <head>
    <meta charset="UTF-8">
    <title>Wrong Credentials</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">
 
    
    
    
  </head>

  <body>

    <!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link rel="import" href="https://www.polymer-project.org/0.5/components/paper-ripple/paper-ripple.html">

<div class="container hoverable">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile">
     <img src="<?php echo $image ?>" alt="Avatar" /> 
    </button>
    <div class="profile__form">
     <form method="get" action="terminal.php">
        <div class="profile__fields">
        <div class="field">
            
          <input name="username" type="text" id="fieldUser" class="input" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input name="password" type="password" id="fieldPassword" class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
         <button class="button raised blue"  type="submit">
             <div class="center" fit>Connect</div>
            <paper-ripple fit></paper-ripple>
               
             </button>
        
        </div>
    
     </div>
        
        </form>
  </div>
</div>
    
        <script src="js/index.js"></script>

     <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

    
    
  </body>
</html>
