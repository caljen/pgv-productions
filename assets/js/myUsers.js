angular.module('pgv', []).controller('userCtrl', function($scope, $http) {
$scope.fName = '';
$scope.lName = '';
$scope.passw1 = '';
$scope.passw2 = '';
$scope.users = [
{id:1, fName:'Hege',lName:"Pege" },
{id:2, fName:'Kim',lName:"Pim" },
{id:3, fName:'Sal',lName:"Smith" },
{id:4, fName:'Jack',lName:"Jones" },
{id:5, fName:'John',lName:"Doe" },
{id:6, fName:'Peter',lName:"Pan" }
];
$scope.edit = true;
$scope.error = false;
$scope.incomplete = false; 
$scope.editUser = function(id) {
  if (id == 'new') {
    $scope.edit = true;
    $scope.incomplete = true;
    $scope.fName = '';
    $scope.lName = '';
    } else {
    $scope.edit = false;
    $scope.fName = $scope.users[id-1].fName;
    $scope.lName = $scope.users[id-1].lName; 
  }
};

$scope.$watch('passw1',function() {$scope.test();});
$scope.$watch('passw2',function() {$scope.test();});
$scope.$watch('fName',function() {$scope.test();});
$scope.$watch('lName',function() {$scope.test();});

$scope.test = function() {
  if ($scope.passw1 !== $scope.passw2) {
    $scope.error = true;
    } else {
    $scope.error = false;
  }
  $scope.incomplete = false;
  if ($scope.edit && (!$scope.fName.length ||
    !$scope.lName.length ||
    !$scope.passw1.length || !$scope.passw2.length)) {
    $scope.incomplete = true;
  }
};


//Loading jason data
//$http.get("http://www.w3schools.com/angular/customers.php")
$http.get("../assets/content/dsource/customers.php")
.success(function(response) {$scope.names = response.records;
				  
				 /*function(xml) {
            jQuery(xml).find('Running_Club').each(function(){
                jQuery('.loading-message').hide();
                                                                var clubName = jQuery(this).attr('Running_Club');
                                                var memberCount = jQuery(this).attr('Count');                                                 
                                                                jQuery('#all-part-list-created dl').append('<span class="participant"><dt>'+clubName+'</dt><dd>'+memberCount+'</dd></span>');
            });
                                               
        }*/
		
		
				  })

	
});