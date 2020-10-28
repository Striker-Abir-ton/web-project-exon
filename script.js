/*show password*/
function showpass() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

/* bar menu closable*/

function opennav() {
  document.getElementById("barmenu").style.width = "200px";
}

function closenav() {
  document.getElementById("barmenu").style.width = "0%";
}