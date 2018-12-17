	function showPass() {
    var x = document.getElementById("i-password");
    if (x.type === "password") {
        x.type = "text";
    } else {
	      x.type = "password";
    }
}
