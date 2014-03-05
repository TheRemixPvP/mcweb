<html>
<head>
    <link href="/assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    
    <link href="/assets/css/master.css" rel="stylesheet">
    
    <script src="/assets/js/jquery.js"></script>
</head>
<body>
    <div id="mainnav" class="navbar navbar-inverse" ng-controller="NavCntl">
  			<div class="container">
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  					<a class="navbar-brand" href="/"><img src="/images/bar.png" /></a>
  				</div>
  				<div class="collapse navbar-collapse">
  					<ul class="nav navbar-nav">
  						<li ><a href="/servers"><span class="glyphicon glyphicon-hdd"></span> Servers</a></li>
  						<li ><a href="/forum"><span class="glyphicon glyphicon-bullhorn"></span> Forums</a></li>
  						<li ><a href="/stats"><span class="glyphicon glyphicon-book"></span> Stats</a></li>
                            <li ><a href="/store"><span class="glyphicon glyphicon-shopping-cart"></span> Store</a></li>
  						<!-- <li><a href="#">Account</a></li> -->
  					</ul>
  					<!--
  					<div class="navbar-form">
						<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
	    					Large button <span class="caret"></span>
	  					</button>
  					</div>
  				-->

                      				<ul class="nav navbar-nav navbar-right">
  					<li class="dropdown">
  						<a id="userdrop" href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-user"></span> TheRemixPvP <b class="caret"></b>
              </a>
  						<ul class="dropdown-menu" role="menu" aria-labledby="userdrop">
                <li><a href="/user/TheRemixPvP">View My Profile</a></li>
                <li><a href="/tickets">My Support Tickets</a></li>
                
  							<li><a href="/logout">Logout</a></li>
  						</ul>
  					</li>
  				</ul>
            				<form class="hidden-sm navbar-form navbar-right" role="search" id="usersearchform">
  					<div class="form-group">
  						<input ng-model="searchtext" type="text" id="usersearch" class="form-control" placeholder="find profile"></input>
  					</div>
  				</form>

  			</div><!--/.nav-collapse -->
  		</div>
  	</div>


    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>