<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Strump</title>
  
        <link rel="stylesheet" href="/styles/css/bootstrap.min.css">

        <style>
        	body {
        	   background-color: #83AF9B;
        	}
          .jumbotron{
            margin-top: 7%;
          }

          .btn-user
          {
            background-color : #FC9D9A;
            color: #fff;
          }

          .btn-artist
          {
            background-color : #C8C8A9;
            color: #fff;
          }

          .side-ways{
            float : left; 
            margin : 0 0 0 10px;
          }
          
          .little-niche{
            margin-top: 5%;
          }

          .red
          {
            color : #c0392b;
          }
        </style>

    </head>
  
    <body>

  		<div class="container">
  			<div class="jumbotron">
  			  <p><img style="position:relative; float:left;"img src="/images/logo-color.png"><h1 style="margin-left: 80px;">Strum</h1></p>
  			  <p>This is a simple music website, that allows you to browser music and do other doope shit!</p>

          <div style="margin-top: 10%;" class="container">
  			    <p><a href="/login" style="float: left; padding-left : 20%; padding-right : 20%;" class="btn btn-user btn-lg side-ways">USER</a></p>
            <p class="side-ways">OR</p>
            <p><a href="/register" style="padding-left : 20%; padding-right : 20%;" class="btn btn-artist btn-lg side-ways">ARTIST</a></p>
          </div>
  			</div>
  		</div>
      
        <div class="footer little-niche">
          <div class="container text-center">
             <p style="font-size:23px;font-weight:200;"><span class="glyphicon glyphicon-heart red"></span> <span style="color: ##2c3e50">from <a href="http://twitter.com/imcrc">@imcrc</a></span></p>
          </div>
        </div>

      
        
  
        <div ng-view></div>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
        <script src="https://code.angularjs.org/1.2.8/angular-route.js"></script>
        <script src="/styles/bootstrap/js/bootstrap.min.js">

        <script src="/js/main.js"></script>
    </body>
</html>
