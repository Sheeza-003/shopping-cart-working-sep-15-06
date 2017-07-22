<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <!------------cut start---------------------------------------------------------------------->
            <!--
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Shopping Cart</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            -->
            <!---------cut ---------------------------------------------------------------------->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        Shopping Cart</a></li>
                <li class="dropdown">
                    
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User Management <span
                                class="caret"></span></a>
                    <ul class="dropdown-menu">
                  <!--  @if(Auth::check()) -->
                            <li><a href="#
                            ">User Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../user-logout.php">Logout</a></li>
                   <!-- @else--> 
                           <li><a href="#">Signup</a></li>
                            <li><a href="../user-login.php">Signin</a></li>
                    <!--@endif-->                        

                    </ul>
                </li>
            </ul>
        </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
</nav>