<main >
      
      <div id="getFixed"  class=" logobar container-fluid  ">
        <div class="row logo-bijoux">
            <div class="col"><a href="#"><img src="../images/f1.png" alt="collier" width="50" height="50"></br>Collier </a></div>
            <div class="col"><a href="#"> <img src="../images/f2.png" alt="b.d'oreille"width="50" height="50"></br>B.d'oreille</a></div>
            <div class="col"> <a href="#"> <img src="../images/f3.png" alt="braslets" width="50" height="50"></br>Bracelet</a></div>
            <div class="col"><a href="#"><img src="../images/f4.png" alt="bage"width="50" height="50"></br>Bague</a></div>
            <div class="col"> <a href="#"><img src="../images/f5.png" alt="b cheville"  width="50"  height="50"></br> B.cheville</a></div>
            <div class="col"><a href="#"><img src="../images/Montere.png" alt="b cheville"  width="50"  height="50"></br>Montre</a></div>
      </div>
     </div>
     <p class="gratuite">Livraison gratuite pour les commandes supérieures à 50 €</p>
     <div class=" container-flid texte-center divvideo ">
      <div class="row align-items-center">
        <div class="col-mx-12 col-ms-12 col-md-4 col-lg-4 ">
       <p class="coeur">FAITES-VOUS PLAISIR  </p> 
         <p  id ="coeur"  class="coeur">Nos sélections coup de coeur </p>
       </div>
       <div class=" col-mx-12 col-ms-12 col-md-4 col-lg-4">
      <video
         controls
        
         src="../images/WhatsApp Video 2022-10-30 at 10.49.26.mp4"
         autoplay
         loop
         muted
         >
      </video>
     
    </div>
     </div>
    </div>
      
       <div class=" divfieldset container-fluid">
          <div id="app"  class="row justify-content-center  ">

        <?php
                    $db = new PDO('mysql:host=localhost;dbname=bijoux','root','');

                    $sql = 'SELECT * FROM `article`';
                    //$sql = 'SELECT auteur, titre, contenu FROM news';
                    // $sql = 'SELECT id, auteur, titre, contenu, dateAjout, dateModif FROM news ORDER BY id DESC';
                    $requete = $db->query($sql);

                    $news = $requete->fetch();
                    
                   
                    ?>
                            
            <fieldset  class=" acol-ms-12 col-md-5 col-lg-3 " >
             <article class="f1 ">
             
              <a href="#"><img id="photo1" src="<?php  echo $news['image'];?>" alt="bijoux" height=""> </a>
              
             </article >
                <button v-if="product.quantity>0"     @click=" product.quantity -=1 ; product.count++ "     class=" ajouter" href="#"   ><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-plus-fill" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zM8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5V8z"/>
             </svg> </button>

              <article class="non">
                
                <a href="#">  <?php echo $news['description_Article'];?>
                     Q:<?php echo $news['Quantité'];?>
                    
                      </br>
                  <span class="prix"> Prix:<?php  echo $news['prix'];?>€ </span><br>
                    
                  
                </span>
                   <button id="voirplus" type="button"  class="btn btn-secondary ">Voir Plus</button>
                </a>
            
               </article>
              
            </fieldset>
            
            
         </div>
        </div> 
    
        <div class=" container">
          <div class="livraison row">
          <span class="col">
            <img src="../images/icons8-livraison-de-nourriture-100 (2).png" alt="Livraison" >
            <p class="livrai">Livraison partout en France</p>
          </span>

          <span class="col">
             <img src="../images/icons8-sécurité-de-la-carte-100 (3).png" alt="Paiment">
             <p class="paiement"> Paiement sécurisé 100%</p>
          </span>
          <span class="col">
            <img src="../images/icons8-synchroniser-100 (1).png" alt="Echanges">
            <p class="Échanges">Échanges et remboursements</p>
         </span>
        </div>

        </div>   
    </main>
   