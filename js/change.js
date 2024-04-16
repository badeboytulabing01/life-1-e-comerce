// get the file name
let currentLocation = window.location.pathname;
// split it after /
let page = currentLocation.split("/").pop();
if (page == "about") {
 document.querySelector(".title-single").innerHTML = "About Us";
}else if (page == "property"){
document.querySelector(".title-single").innerHTML = "Property";
}else if(page == "gallery"){
	document.querySelector(".title-single").innerHTML = "Gallery";
}else if(page == "contact"){
	document.querySelector(".title-single").innerHTML = "Contact Us";
}
else if(page == "testify"){
	document.querySelector(".title-single").innerHTML = "Testimonials";
}
