<html>
    <head>
        <?php include TMPL . 'shopHead.php'; ?>
    </head>
    <body>
        <?php include TMPL . 'shopHeader.php'; ?>
        <div class="container">

            <div class="row">
                <div class="col-md-9">
                    <div class="col-sm-4">
                        
                    </div>

                        <div class="signUpForm col-sm-6">
                            <form class="form-horizontal" role="form">
                              <div class="form-group">
                                 <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Firstname</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="adresse1" placeholder="ex :Dupond">
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Numero de carte</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" id="adresse2" >
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Expire le :</label>
                                <div class="col-sm-6 dateExpirationCarte" >
                              <FORM>
                                <SELECT name="nom" size="1">
                                    <OPTION>01
                                    <OPTION>02
                                    <OPTION>03
                                    <OPTION>04
                                    <OPTION>05
                                    <OPTION>06
                                    <OPTION>07
                                    <OPTION>08
                                    <OPTION>09
                                    <OPTION>10
                                    <OPTION>11
                                    <OPTION>12
                                </SELECT>
                            
                                <SELECT name="nom" size="1">
                                    <OPTION>2013
                                    <OPTION>2014
                                    <OPTION>2015
                                    <OPTION>2016
                                    <OPTION>2017
                                    <OPTION>2018
                                    <OPTION>2019
                                    <OPTION>2020
                                </SELECT>
                            </FORM>
                                </div>
                              </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">Crytogramme</label>
                                <div class="col-sm-2">
                                  <input type="text" class="form-control" id="zipCode" placeholder="">
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