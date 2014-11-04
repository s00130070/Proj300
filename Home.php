<! doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Proj300/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Proj300/css/bootstrap.css">
  <script type="text/javascript" src="Proj300/js/jquery-1.11.1.min.js" charset="UTF-8"></script>
  <script type="text/javascript" src="Proj300/js/bootstrap.js" charset="UTF-8"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
  <script src="https://checkout.stripe.com/checkout.js"></script>


	<title></title>
   <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      restaurant: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
      },
      bar: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
      }
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(47.6145, -122.3418),
        zoom: 13,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
      downloadUrl("phpsqlajax_genxml.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>

  </script>
</form>
</head>
<body onload="load()">
  <div id="container">
	<!-- bootswatch edited navbar-->
<div class="navbar navbar-default">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Tickets 4 you<small> Current Balance:{0}</small></a>
  </div>
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">User<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Account</a></li>
          <li><a href="#">Settings</a></li>
          <li class="divider"></li>
          <li><a href="#">Log out</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div><!-- end of bootswatch edited navbar-->
<div><!-- Map stuff-->
  <label>Map showing Rough Car locations Using this service</label>
  <div id="map" style="width: 500px; height: 300px"></div>
</div>
<div class="btn-group">
  <a href="#" class="btn btn-primary">Number of Hours</a>
  <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
  <ul class="dropdown-menu">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li class="divider"></li>
    <li><a href="#">4</a></li>
  </ul>
</div>
<div>
  <input type="date" Name="date">

</div>
<div>
  <label>Amount Due:{0}</label>
</div>
<div> 
     

<button id="customButton">Purchase</button>

 <!--strip-->
 <script>
  var handler = StripeCheckout.configure({
    key: 'pk_test_6pRNASCoBOKtIshFeQd4XMUh',
    image: '/square-image.png',
    token: function(token) {
      // Use the token to create the charge with a server-side script.
      // You can access the token ID with `token.id`
    }
  });

  document.getElementById('customButton').addEventListener('click', function(e) {
    // Open Checkout with further options
    handler.open({
      name: 'Tickets For You',
      description: '2 widgets ($20.00)',
      amount: 2000
    });
    e.preventDefault();
  });
</script>

  <!--  <button type="button" class="order-form-paypal-payment-button js-payment-button" data-processor="PayPal">
        Check out with Pay Pal />
      </button>-->
    
</div>
</div>


  
</body>
</html>