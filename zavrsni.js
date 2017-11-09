
function myFunction() {
    var x = document.getElementById("hiden");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
/*
function showHide(hiden) {
	if (document.getElementById(hiden)) {
		if (document.getElementById(hiden+'-show').style.display != 'none') {
			document.getElementById(hiden+'-show').style.display = 'none';
			document.getElementById(hiden).style.display = 'block';
		}
		else {
			document.getElementById(hiden+'-show').style.display = 'inline';
			document.getElementById(hiden).style.display = 'none';
		}
	}
}*/
