var date = new Date();
var currentYear = date.getFullYear();



angular.module('pgv', []).controller('pgvCtrl', function($scope, $http) {

$scope.date = date;
$scope.currentYear = currentYear;														 


//Loading json data
//$http.get("http://www.w3schools.com/angular/customers.php")

/*$http.get("../assets/content/dsource/records.json")
.success(function(response) {$scope.titles = response.records; })
*/
	
});//end angular app

