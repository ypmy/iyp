<!-- Header -->
<?php
include('_includes/header.php');
?>

<!-- search -->
<div class="container">
	<div id="content" class="row">
		<div id="popular-categories" class="col-md-3 visible-lg visible-md">
		

		<ul class="dropbar nopadding pull-right" role="menu" aria-labelledby="dropdownMenu2">
		  <li class="dropbar-header">Popular Categories</li>
		  <li ><a href="#">Construction & Contractors</a></li>
	      <li><a href="#">Professional Services</a></li>
	      <li><a href="#">Computers & Electronics</a></li>
	      <li><a href="#">Industry & Agriculture</a></li>
	      <li><a href="#">Legal & Financial</a></li>
	      <li><a href="#">Office Supplies</a></li>
	      <li><a href="#">Security Services</a></li>
	      <div class="divider nopadding"></div>
	      <li><a href="#">View All Categories</a></li>
		</ul>
		</div>

<!--Popular Categories-->
    <div class="col-xs-6 col-sm-3 visible-lg visible-md" id="sidebar" role="navigation">
         <div class="dropdown dropup pull-left">          
          <ul class="dropdown-menu bg-light pos-stc inline" role="menu" aria-labelledby="dropdownMenu">
            <li class="panel-heading"><b>Popular Categories</b></li>
            <li><a tabindex="-1" href="#">Construction & Contractors</a></li>
            <li><a tabindex="-1" href="#">Professional Services</a></li>
            <li><a tabindex="-1" href="#">Computers & Electronics</a></li>
            <li><a tabindex="-1" href="#">Industry & Agriculture</a></li>
            <li><a tabindex="-1" href="#">Legal & Financial</a></li>
            <li><a tabindex="-1" href="#">Office Supplies</a></li>
            <li><a tabindex="-1" href="#">Security Services</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="#">View All Categories</a></li>
          </ul>
        </div>
   </div>


<!-- Popular Categories Size 468px and Below -->
<div id="searchkecik" class="row visible-xs visible-sm">
  <div class="container">
    <div id="button-personaliness" style=" padding-top:40px; position: relative; top: -0.8em;"><center>
      <div class="btn-group ">
          <button type="button" class="btn btn-warning active">Business</button>
         <button type="button" class="btn btn-default">Personal</button>
      </div></center>
    </div><br>

    <div style="height: 1px; background-color:#b7b7b7; text-align: center; font-size:20px; font-family:'Times New Roman', Times, serif">
      <span style="background-color: white; position: relative; top: -0.8em;">
      <em>or</em>
      </span>
    </div><br>

      <div class="row col-sm-12 col-xs-12">
        <div class="col-sm-12 col-xs-12">
        Browse by Popular Categories:<br>
          <select class="form-control" type="text" >
              <option>Construction & Contractors</option>
              <option>Professional Services</option>
              <option>Computers & Electronics</option>
              <option>Industry & Agriculture</option>
              <option>Legal & Financial</option>
              <option>Office Supplies</option>
              <option>Security Services</option>
          </select>
        </div>
      </div>
  </div>
</div>
 




		
		<div id="banner-slide" class="col-md-9 nopadding">
			
			
			<div class="item wide "><img src="assets/images/slideshow/banner-pos.jpg"></div>
  			<div class="item"><img src="assets/images/slideshow/banner-dm.jpg"></div>
  			<div class="item"><img src="assets/images/slideshow/banner-kayu.jpg"></div>
  			<div class="item wide"><img src="assets/images/slideshow/banner-mh370.jpg"></div>
			

		</div>
	</div>
</div>




<!-- Footer -->
<?php
include('_includes/footer.php');
?>

 <script>
  $(function(){
  $('#banner-slide').masonry({
    // options
    itemSelector : '.item',
    columnWidth : 491,
    isAnimated: true
  });
});
    </script>

<!-- JS -->
<script src="retina.js"></script>
<script src="retina.min.js"></script>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
    

</body>

	</html>
