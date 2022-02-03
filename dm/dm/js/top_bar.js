// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
 
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
 
// When the user clicks the button, open the modal 
btn.onclick = function() {
 modal.style.display = "block";
}
 
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
 modal.style.display = "none";
}
 
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
        modal.style.display = "none";
}
if (event.target == postham) {
        postham.style.display = "";
}
}
 



//top bar search
let src_icn = document.querySelector('.search_icon')
let src = document.querySelector('.search_clk')

src_icn.onclick = function() {
    src.style.display = "block";
}


/* Mobile */
function openNav(){
    
document.getElementById('mobileham_cont').style.visibility = "visible";
        document.getElementById('mobileham_cont').style.width = "45%";
    }
    
    function closeNav(){
        document.getElementById('mobileham_cont').style.width = "0%";
        document.getElementById('mobileham_cont').style.visibility = "hidden";
    }

