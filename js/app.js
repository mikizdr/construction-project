var app = angular.module('myApp', []);

app.controller('EmailController', function() {

     this.warning = false;

     this.handleFormSubmit = function() {

        /*----
        Un comment the following lines to enable action.php script
        ----*/
        // $http.post('sendmail.php', booking).success(function (data, status) {
        //     if (data.success) {
        //         $window.alert("Thank you! Your message has been sent.");
        //         $scope.booking = {};

        //         // display success message
        //         $scope.$parent.message = true;
        //     }			
        // }).error(function (data, status) {
        //     $window.alert("Sorry, there was a problem!");
        // });

        /*----
			Remove the following 2 lines of code if you are enabling action.php script
			----*/
        this.warning = true;


      };

});