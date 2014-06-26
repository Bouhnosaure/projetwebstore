<html>
    <head>
        <?php include TMPL . 'shopHead.php'; ?>
    </head>
    <body>
        <?php include TMPL . 'shopHeader.php'; ?>
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                        <div class="signInForm col-sm-4">
                            <form class="form-horizontal" role="form">
                              <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Adresse</label>
                                <div class="col-sm-8">
                                    <p type="text" id="adresse1" placeholder="Adresse">n°36 rue jean-charles</p>
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label"></label>
                                <div class="col-sm-8">
                                  <p type="text" id="adresse1" placeholder="Adresse">24eme étage</p>
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">City</label>
                                <div class="col-sm-8">
                                  <p type="text" id="adresse1" placeholder="Adresse">Moncucq</p>
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Zip Code</label>
                                <div class="col-sm-8">
                                  <p type="text" id="adresse1" placeholder="Adresse">69690</p>
                                </div>
                              </div>
                                <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default">Select</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    <div class="textForm col-sm-2">Or </div>
                   

                        <div class="signUpForm col-sm-4">
                            <form class="form-horizontal" role="form">
                              <div class="form-group">
                                 <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Adresse</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="adresse1" placeholder="Adresse">
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label"></label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="adresse2" placeholder="Adresse">
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">City</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="city" placeholder="City">
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Zip Code</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="zipCode" placeholder="Zip Code">
                                </div>
                              </div>
                                  <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default">Select</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    
                </div>
            </div>
        </div>
        <?php include TMPL . 'shopFooter.php'; ?>
    </body>
    <?php include TMPL . 'shopScripts.php'; ?>
</html>