
function myFunction() {
 var comment = document.getElementById("comment");
 var btn = document.getElementById("HideShow");
 if (comment.style.display === "none") {
     HideShow.innerHTML = 'Hide comments'
     comment.style.display = "block";
 } else {
     HideShow.innerHTML = 'Show comments'
     comment.style.display = "none";
 }
}

function promptMe(){
    var userAdjective = prompt("Do you really want to delete this post?");
    alert (userAdjective);
}