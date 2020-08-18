<?php
include("header.php");
?>

<section>
<div class="container">
<div class="row">

<input type="hidden" name="country" id="countryId" value="IN"/>
<select name="state" class="states order-alpha" id="stateId">
    <option value="">Select State</option>
</select>&nbsp;&nbsp;&nbsp;&nbsp;
<select name="city" class="cities order-alpha" id="cityId">
    <option value="">Select City</option>
</select>
</div>
</div>
</section>

<br>
<section>
<div class="container">
<div class="row">
<input type="text" class="form-control bg-light border-2 small col-md-6" placeholder="Category" aria-label="Category" aria-describedby="basic-addon2"><br>
<input type="text" class="form-control bg-light border-2 small col-md-6" placeholder="Subcategory" aria-label="Subcategory" aria-describedby="basic-addon2"><br>
<input type="text" class="form-control bg-light border-2 small" placeholder="Enter Title" aria-label="Search" aria-describedby="basic-addon2"><br>
<textarea class="form-control bg-light border-2 small col-md-12"> </textarea><br><br><br><br>
<form action="#">
  <label for="files">Select files:</label>
  <input type="file" id="files" name="files" multiple><br><br>
  <input type="submit" class="btn btn-facebook btn-block fas fa-angle-double-right">
</form>
</div>
</div>
</section>
<br>



<section>
<div class="container">
<div class="row">

</div>
</div>
</section>


 <?php
include("footer.php");
?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//geodata.solutions/includes/statecity.js"></script>


<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>