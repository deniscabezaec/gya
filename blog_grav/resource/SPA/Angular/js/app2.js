
var app = angular.module('universidadApp',[ ]);


app.controller('profesorCtrl', function($scope){
		
	$scope.profesor = profesorData;
	$scope.editando = {};


	$scope.editarProfesor = function(){

		angular.copy( $scope.profesor, $scope.editando );

	}

	$scope.guardarProfesor = function() {
		angular.copy($scope.editando, $scope.profesor);
	}

	$scope.cancelarFormulario = function() {
		$scope.editando = {};
	}
	
});

var profesorData = {
	nombre: "Denis Cabeza",
	bio: "Hola! Mi nombre es Denis Cabeza, encantado de conocerte"
		+"Soy estudiante de la carrera de Sistemas y Computación en la PUCE Esmeraldas.",
	edad: 22,
	foto: "img/ima.jpg"
}