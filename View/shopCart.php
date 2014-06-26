<html>
    <head>
        <?php include TMPL . 'shopHead.php'; ?>
    </head>
    <body>
        <?php include TMPL . 'shopHeader.php'; ?>
        <div class="container">

            <div class="row">

                 <div class="itemCart col-md-9">
                    <div class="col-md-4"><img src="http://placehold.it/250x180s" alt="..." class="img-thumbnail"></div>
                    <div class="col-md-2"><p> 
                            <h3 id="Name">Nom du produit</h3><br>            
                            <h4>Disponibilité</h4><br>
                    </div>
                    <div class="col-md-2"><p>    
                        <br><br><br>
                        <h4>Quantité</h4> 
                            <FORM>
                                <SELECT name="nom" size="1">
                                    <OPTION>1
                                    <OPTION>2
                                    <OPTION>3
                                    <OPTION>4
                                    <OPTION>5
                                </SELECT>
                            </FORM>
                    </div>
                    <div class="col-md-2"><p>    
                        <br><br><br>
                        <h4>Prix</h4> <br>
                    </div>
                    <div class="col-md-2"><p>    
                        <br><br><br>
                        <button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-remove"></span> </button>
                    </div>
                </div>
                
                <div class="itemCart col-md-9">
                    <div class="col-md-4"><img src="http://placehold.it/250x180s" alt="..." class="img-thumbnail"></div>
                    <div class="col-md-2"><p> 
                            <h3 id="Name">Nom du produit</h3><br>            
                            <h4>Disponibilité</h4><br>
                    </div>
                    <div class="col-md-2"><p>    
                        <br><br><br>
                        <h4>Quantité</h4> 
                            <FORM>
                                <SELECT name="nom" size="1">
                                    <OPTION>1
                                    <OPTION>2
                                    <OPTION>3
                                    <OPTION>4
                                    <OPTION>5
                                </SELECT>
                            </FORM>
                    </div>
                    <div class="col-md-2"><p>    
                        <br><br><br>
                        <h4>Prix</h4> <br>
                    </div>
                    <div class="col-md-2"><p>    
                        <br><br><br>
                        <button type="button" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-remove"></span> </button>
                    </div>
                </div>
                
                <div class="itemCart col-md-9">
                    <div class="col-md-8"><</div>
                    <div class="col-md-2"><p>    
                        <br><br><br>
                        <h5>HT</h5>
                        <h5>TTC</h5> <br>
                        <button type="button" class="btn btn-default btn-sm">Recalculer</button>  <br><br>
                        <button type="button" class="btn btn-default btn-sm">Valider la commande</button>  
                    </div>

                </div>
                
            </div>
        </div>
        <?php include TMPL . 'shopFooter.php'; ?>
    </body>
    <?php include TMPL . 'shopScripts.php'; ?>
</html>