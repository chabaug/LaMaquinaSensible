$(document).ready(main);

var contador = 1;
	
function main() {
	$('nav li').click(function(){
		if (contador == 1) {
			$('ul').animate({
				position: "absolute",
				display: "block"
			});
			contador = 0;
		} else {
			contador = 1;
			$('ul').animate({
				position: "absolute",
				display: "none"
			});
		}
	}
}