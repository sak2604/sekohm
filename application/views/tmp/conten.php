


        <div class="col-lg-9">
<br>
<br>

<br>
<br>
         
             <div class="canter">
<br>
            
           <div class="canter"  style="max-width:auto">
  <img class="mySlides"  src="<?php echo base_url(); ?>1.jpg" style="width:100%">
  <img class="mySlides"  src="<?php echo base_url(); ?>2.jpg" style="width:100%">
  <img class="mySlides"  src="<?php echo base_url(); ?>3.jpg" style="width:100%">
    <img class="mySlides"  src="<?php echo base_url(); ?>4.jpg" style="width:100%">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
         

          

               
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

