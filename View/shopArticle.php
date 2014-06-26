<html>
    <head>
        <?php include TMPL . 'shopHead.php'; ?>
    </head>
    <body>
        <?php include TMPL . 'shopHeader.php'; ?>
        <div class="container">

            <div class="row">
                <?php include TMPL . 'shopSidebarCatalog.php'; ?>

                <div class="itemSolo col-md-9">
                    <div class="col-md-7"><img src="http://placehold.it/400x250s" alt="..." class="img-thumbnail"></div>
                 

                    <div class="col-md-3"><p> 
                        <h3 id="Name">Nom du produit</h3><br>
                        <h5>Prix</h5> <br>
                        <h4>Disponibilité</h4><br>
                       
                         <a class="navbar-brand" href="#AjouteArticlePanier"><button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-shopping-cart"></span> Add to cart
</button></a>
                    </div>
                    <div class="col-md-2"><p>    
                        <br><br><br>
                        <p>Realisateur</p>
                        <p>Producteur</p>                        
                    </div>
                   
                </div>
            </div>
             <div class="synopsis col-md-6"><p>   
                     <br><br>
                 <h3>Synopsis</h3><br>
                        <p>Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.</p>
                    <br><br><br>
             </div>
            
        </div>
        <?php include TMPL . 'shopFooter.php'; ?>
    </body>
    <?php include TMPL . 'shopScripts.php'; ?>
</html>