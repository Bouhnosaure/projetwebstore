<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
           
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse textNavbar">
            <ul class="nav navbar-nav">

                 <a class="navbar-brand" href="/homepage/view/shopHome.php"><img src="<?= STIC ?>/img/Exi@Store.png" height="60px"/></a>
                 <li><a href="/homepage/view/shopHome.php">Accueil</a>
                </li>
                <li><a href="#services">Destockage</a>
                </li>
                <li><a href="#about">A propos</a>
                </li>
            </ul> 
            <button type="button" class="buttonSignIn btn btn-default btn-sm col-sm-2 col-sm-push-4" onclick="self.location.href='/homepage/view/shopInscription.php'">Sign in / Sign up</button>
           
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
