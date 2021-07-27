 <?php 
            if(isset($_GET['reg_err'])){
                $err = htmlspecialchars($_GET['reg_err']);
                
                switch ($err){
                case 'success':
                    ?>
                    <div>Inscription réussie</div>
                <?php 
                break;    
                 
                case 'password':
                    ?>
                    <div>Mot de passe incorrect</div>
                <?php 
                break;    
                 
                case 'email':
                    ?>
                    <div>email non valide</div>
                <?php 
                break;   
                
                case 'email_length':
                    ?>
                    <div>email trop long</div>
                <?php 
                break;   
                
                case 'already':
                    ?>
                    <div>Compte déjà existant</div>
                <?php
                }
            }
        
        ?>


<form action="inscription_traitement.php" method="post" name="inscription">
            <div><input class="inputDesign" type="text"  name="name" onfocus="this.value =''" value="Nom"></div>
            <div><input class="inputDesign" type="text"  name="firstname" onfocus="this.value =''" value="Prénom"></div>
            <div><input class="inputDesign" type="tel"  name="phone" onfocus="this.value =''" value="Téléphone"></div>
            <div><input class="inputDesign" type="email"  name="mail" onfocus="this.value =''" value="Mail"></div>
            <div><input class="inputDesign" type="date"  name="birthday" onfocus="this.value =''" value="2018-07-22"></div>
            <div><input class="inputDesign" type="number"  name="weight" onfocus="this.value =''" value="80"></div>
            <div><input class="inputDesign" type="text"  name="sex" onfocus="this.value =''" value="sexe"></div>
            <div><input class="inputDesign" type="text"  name="address" onfocus="this.value =''" value="Adresse postale"></div>
            <div><input class="inputDesign" type="number"  name="postalcode" onfocus="this.value =''" value="13390"></div>
            <div><input class="inputDesign" type="text"  name="town" onfocus="this.value =''" value="Ville"></div>
            <div><input class="inputDesign" type="password"  name="password" onfocus="this.value =''" value="Mot de passe"></div>
            <div><input type="submit" value="s'inscrire"></div>
            <p><a href="#">se connecter</a></p>
            <p><a href="#">se connecter en tant que admin</a></p>
        </form>


