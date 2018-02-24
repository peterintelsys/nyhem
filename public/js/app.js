/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction(obj) {

    var xdrop = obj.getAttribute('data-target');
    document.getElementById(xdrop).classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}



function showDrop(obj){

        var xdrop = obj.getAttribute('data-target');

        var x = document.getElementById(xdrop).classList.toggle("show");

        

        /*if (x.style.display === 'none') {
        x.style.display = 'block';
        
        }

     else {
        
        x.style.display = 'none';
        
    }*/

}

function showModal(obj){

        var xdrop = obj.getAttribute('data-target');

        var x = document.getElementById(xdrop);
        if (x.style.display === 'block') {
        x.style.display = 'none';
        
    }

     else {
        
        x.style.display = 'block';
        
    }

}


function closeDrop(obj){
    var ydrop = obj.getAttribute('data-target');
        var y = document.getElementById(ydrop);
        y.style.display = 'none';
}

