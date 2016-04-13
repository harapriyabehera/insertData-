var app=angular.module("myApp",[]);
app.controller("myCtrl",function($scope,$http){
	$scope.insertdata=function(){
		$http.post("insert.php",{'empno':$scope.empno,'fname':$scope.fname,'lname':$scope.lname,'dept':$scope.dept})
		.success(function(data,status,headers,config){
			console.log("Data inserted successfully");
		});
	}

});