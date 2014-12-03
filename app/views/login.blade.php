<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title>Strump</title>
  
        <link rel="stylesheet" href="/styles/bootstrap.min.css">
        <style>
        	body {
        	   background-color: #83AF9B;
        	}
          .jumbotron{
            margin-top: 7%;
          }
        </style>

    </head>
  
    <body>

  		<div class="container">
  			login!
  		</div>
        
  
        <div ng-view></div>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
        <script src="https://code.angularjs.org/1.2.8/angular-route.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
