function openNav() {
	document.getElementById("mySidebar").style.width = "250px";
	document.getElementById("header").style.marginLeft = "250px";
	document.getElementById("container").style.marginLeft = "250px";
	document.getElementById("sbar").style.display = "none";
	document.getElementById("footer").style.marginLeft = "250px";
	document.getElementById("about").style.marginLeft = "250px";
}
function closeNav() {
	document.getElementById("mySidebar").style.width = "0";
	document.getElementById("header").style.marginLeft= "0";
	document.getElementById("container").style.marginLeft = "0";
	document.getElementById("sbar").style.display = "inherit";
	document.getElementById("footer").style.marginLeft = "0";
	document.getElementById("about").style.marginLeft = "0";
} 
window.addEventListener('scroll',function(){
	var header =document.querySelector('header');
	header.classList.toggle('sticky',window.scrollY>0);
});
// $("#menu-nav li a").on("click", function (e) {
// 	e.preventDefault();
// 	const href = $(this).attr("href");
// 	$("html, body").animate({ scrollTop: $(href).offset().top }, 800);
// });