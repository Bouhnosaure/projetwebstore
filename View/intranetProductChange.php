<html>
    <head>
        <?php include TMPL . 'intranetHead.php'; ?>
    </head>
    <body>
        <?php include TMPL . 'intranetHeader.php'; ?>
        <div class="container">

            <div class="row">
                <?php include TMPL . 'intranetSidebar.php'; ?>
                <div class="col-md-9">
                         <div class="col-sm-4">
                            <form class="form-horizontal" role="form">
                              <div class="form-group">
                                <label for="inputEmail" class="col-sm-6 control-label">Item categorie</label>
                                <div class="col-sm-6">
                                    <SELECT name="nom" size="1">
                                        <OPTION>CD
                                        <OPTION>DVD
                                     </SELECT>
                            
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-5 control-label">Title</label>
                                <div class="col-sm-7">
                                    <SELECT name="nom" size="1">
                                        <OPTION>trolo
                                        <OPTION>LOLOLO
                                     </SELECT>
                                </div>
                              </div>
                            </form>
                        </div>
                    <div class="textForm col-sm-1"></div>
                   

                        <div class=" col-sm-4">
                            <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Prix</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="adresse1" placeholder="Prix">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Stock</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="adresse1" placeholder="Stock">
                                    </div>
                                </div>
                            </div>
                                  <br><br>
                                  </form>
                                     
                            
                        </div>

                </div>
                                             <div class="col-sm-4">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                  <p>
                                        <label for="ameliorer">Information supplementaire</label><br />
                                        <textarea name="ameliorer" id="ameliorer"></textarea>
                                    </p>
                                    </div>
                                <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default">Modification</button>
                                </div>
                              </div>
                                <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default">Delete</button>
                                </div>
                              </div>
                            </form>
                        </div>
            </div>
        </div>
        <?php include TMPL . 'intranetFooter.php'; ?>
    </body>
    <?php include TMPL . 'intranetScripts.php'; ?>
</html>

                                  