<h2>التسجيل</h2>
<div class="spaceTable">

<center>
 <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">الرجاء إختيار نوع العضوية</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="registerclients.php">عميل</a>
    <a href="registerstore.php">صاحب متجر</a>
  </div>
</div> 


</center>

</div>



<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
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
</script>
