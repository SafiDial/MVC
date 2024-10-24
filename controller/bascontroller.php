<?php
class Views{
 
    static function root() {

    

 #code d'appel GET
   
   
 if(isset($_GET['page'])){

    print "numero de page : " .$_GET['page'];

    #condi

    $views = $_GET['page'];
    if($views == 1){
        include_once './views/formation.html';
    }


   
    if($views == 2){
        include_once './views/formation.html';
    }


 
    if($views == 3){
        include_once './views/about.html';
    }

   
    else if($views >= 3 || $views <= 0 ){
        print"<p> Erreur </p>";
    }

    
   }
   
else {

    include_once "./views/formations.html";
}

}
}

Views::root();