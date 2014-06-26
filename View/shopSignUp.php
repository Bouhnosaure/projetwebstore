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
                                <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-8">
                                  <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-8">
                                  <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <div class="checkbox">
                                    <label>
                                      <input type="checkbox"> Remember me
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-default">Sign in</button>
                                </div>
                              </div>
                            </form>
                        </div>
                    <div class="textForm col-sm-2"> </div>
                   

                        <div class="signUpForm col-sm-4">
                            <form class="form-horizontal" role="form">
                              <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">firstname</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="firstname" placeholder="Name">
                                </div>
                              </div>
                                
                                 <form class="form-horizontal" role="form">
                              <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">lastname</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="lastname" placeholder="Surname">
                                </div>
                              </div>
                                
                              <div class="form-group">
                                <label for="inputPassword" class="col-sm-4 control-label">Password</label>
                                <div class="col-sm-8">
                                  <input type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                              </div>
                                
                               <div class="form-group">
                                <label for="inputPassword" class="col-sm-4 control-label">Verification Password</label>
                                <div class="col-sm-8">
                                  <input type="password" class="form-control" id="password2" placeholder="Password">
                                </div>
                              </div>
                                     
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-4 control-label">E-mail</label>
                                <div class="col-sm-8">
                                  <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                              </div>
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
                                  <button type="submit" class="btn btn-default">Sign up</button>
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