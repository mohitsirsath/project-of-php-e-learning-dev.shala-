<?php
  // Header Include from mainInclude 
  include('./mainInclude/header.php'); 
?>

<!-- start result page banner -->


<div class="container-fluid bg-dark">
  <div class="row"></div>
      <!-- results start -->
    <img src="./image/pexels-hasan-albari-1229861.jpg" alt="results"
    style="height:80px; width:10000px; object-fit:cover;
    box-shadow:10px; ">
  </div>
</div>
</br>
</br>
</br>
<!-- end result page banner -->
 <!-- results start -->
 <div class="container">
     <h2 class="text-center my-4">results </h2>
     <form method="post" action="">
     <div class="form-group row">
        <label class="offset-sm-3 col-form-label">email ID: </label>
        <div>
          <input class="form-control mx-3" id="" tabindex="1" maxlength="20" size="20" name="" autocomplete="off" value="">
        </div>
        <div>
          <input class="btn btn-primary mx-4" value="View" type="submit"	onclick="">
          <a href="exam.php"></a>
        </div>
      </div>
     </form>
    </div>
</br>

<?php 
  // Contact Us
  include('./contact.php'); 
?> 

<?php 
  // Footer Include from mainInclude 
  include('./mainInclude/footer.php'); 
?>  
