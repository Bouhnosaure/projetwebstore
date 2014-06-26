<html>
    <head>
        <?php include TMPL . 'intranetHead.php'; ?>
    </head>
    <body>
        <?php include TMPL . 'intranetHeader.php'; ?>
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                        <div class="textForm col-sm-3"> </div>

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
                   

                       
                    
                </div>
            </div>
        </div>
        <?php include TMPL . 'intranetFooter.php'; ?>
    </body>
    <?php include TMPL . 'intranetScripts.php'; ?>
</html>