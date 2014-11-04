<! doctype html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="Proj300/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Proj300/css/bootstrap.css">
  <script type="text/javascript" src="Proj300/js/jquery-1.11.1.min.js" charset="UTF-8"></script>
   <script type="text/javascript" src="Proj300/js/bootstrap.js" charset="UTF-8"></script>
   <link href="Proj300/css/full-slider.css" rel="stylesheet">

	<title></title>

</head>
<body>
	<div id="container" class="span12 centered-text col-xs-3 col-md-6 col-xs-3">
		<div >
		<h1 class="text-center">Tickets For You</h1>
		<div >
      <img src="Proj300/img/ticket1.jpg" alt="Tickets 4 you" style="width:304px;height:228px" class="center-block">
		<!--	<h1>h1. Bootstrap heading <small>Secondary text</small></h1>
			Name:<input id="txtName" type="text" name="name" class="">
			<span class="error"><?php print $NamErr;?></span>
			Email:<input id="txtEmail" type="text" name="email">
			<span class="error"><?php print $EmaileErr;?></span>
			Address:<input id="txtAddr" type="text" name="address">
			<span class="error"><?php print $Addresserr;?></span>
			Car Registration Pate:<input id="txtReg" type="text" name="Reg">
			<span class="error"><?php print $RegPlateErr;?></span>-->	
      <form>
                <fieldset>
                  <div class="form-group">
                    <label for="txtEmail" class="col-xs-2 control-label">Email</label>
                    <div class="col-xs-10">
                      <input type="text" class="form-control" id="txtEmail" placeholder="Email">
                    <!--  <span class="error"><?php print $EmaileErr;?></span>-->
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="txtPassword" class="col-xs-2 control-label">Password</label>
                    <div class="col-xs-10">
                      <input type="password" class="form-control" id="txtPassword" placeholder="Password">
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
                    <div class="col-xs-10 col-xs-offset-2">
                      <button class="btn btn-default" onClick="<?php  header( 'Location: http://localhost/registration.php' ) ;  ?>">Register</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    





                     <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Tickets For You 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>



                  </div>
                </fieldset>
              </form>
		</div>
	</div>
</body>
</html>