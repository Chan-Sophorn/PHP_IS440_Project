function textStyle(){
	text.style.background = "pink";
	text.style.color = "tomato";
	text.style.fontSize = "2em";
	text.style.border = "1px solid blue";

}
function erase(){
	text.style.background = "";
	text.style.color = "";
	text.style.fontSize = "";
	text.style.padding = "";
	text.style.border = "";
}
// text.onmouseover = function(){
// 	textStyle();
// }

text.addEventListener("mouseover", function(){
	textStyle();
})
text.addEventListener("mouseout",  erase);