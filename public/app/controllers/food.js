/// <reference path ="angular.min.js/>"

app.controller('foodcont', function ($scope, $http){
   $http({
      method: 'GET',
      url:'http://localhost:8000/display'
   }).then(function (response){
$scope.query = response;
   })
});
