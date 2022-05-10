<?php
require_once 'inscription.php';
class Inscription 
{
	
   public static function NewInscription($username,$password,$email,$nom,$prenom) 
   {
       try 
       {
        $sql="INSERT INTO user(id,username,password,email,nom,prenom) VALUES (NULL,'$username', '$password','$email','$nom','$prenom')";
        $result=ModelPdo::$pdo->query($sql);
    } catch (PDOException $e) 
    
    {
        echo $e->getMessage();
        die("Erreur dans la BDD ");
    }
}

   


}

?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</head>
<body>

    <br />
    <section class="form-elegant">

        <!-- Grid row -->
        <div class="row">

        <!-- Grid column -->
        <div class="col-4 offset-4">

            <!--Form without header-->
            <div class="card">

            <div class="card-body mx-4">

                <!--Header-->
            <!-- zone de connexion -->
            
            <form action='index.php?controller=offre&action=newOffre' method="POST">
            
            <div class="text-center">    
            <h3 class="dark-grey-text mb-5"><strong>S'inscrire ici !</strong></h3>
            </div>   

            <!-- login-->
            <div class="md-form">
               
                <input type="text" placeholder="Nom d'utilisateur" name="username" required class="form-control">
            </div>
            
            <br/>
             <!-- login-->
             <div class="md-form">
               
               <input type="password" placeholder="Mot de passe" name="password" required class="form-control">
           </div>
           
           <br/>
            <!-- login-->
            <div class="md-form">
               
                <input type="email" placeholder="Votre email" name="email" required class="form-control">
            </div>
            
            <br/>
            <div class="md-form">
               
                <input type="text" placeholder="Votre nom" name="nom" required class="form-control">
            </div>
            
            <br/>
            <div class="md-form">
               
                <input type="text" placeholder="Votre prénom" name="prenom" required class="form-control">
            </div>
            
            <br/>

            <!-- mot de passe-->


            <div class="text-center col-10 offset-1">
                <input type="submit" name ="form_insert" class="btn btn-outline-info"required >
            </div>    
                
            </form>
                </div>
            

            </div>
    
            
    
            </div>
            <!--/Form without header-->
    
        </div>
        <!-- Grid column -->
    
        </div>
        <!-- Grid row -->
    
    </section>
</body>

</html>

