<?php
include 'exhibitionconnect.php';
?>
<div class="container-fluid">
    <div class="row slider">
        <div class="col-lg-14">			
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            </div>
        </div>
    </div>
</div>
<div class="row home_info">
    <div class="panel panel-default">
        <div class="panel-heading">Current Exhibitions</div>
        <div class="panel-body">
            <div class="container recent_product_container">
                <div class="row recent_img">
                    <div class="col-md-6"><img src="images/img2.jpg" class="img-thumbnail home_img" alt=""><div class="description"><b><?php echo $ename4; ?></b> </br> <?php echo $elocation4; ?> </br><?php echo $etype4; ?></br> <?php echo $start_date4; ?> &nbsp; to  &nbsp; <?php echo $end_date4; ?></div></div></br>
                    <div class="row recent_img_desc">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>
                    </br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row home_info">
    <div class="panel panel-default">
        <div class="panel-heading">Upcoming Exhibitions</div>
        <div class="panel-body">
            <div class="container recent_product_container">
                <div class="row recent_img">
                    <div class="col-md-6"><img src="images/img6.jpg" class="img-thumbnail home_img" alt="women"><div class="description"><b><?php echo $ename1; ?></b> </br> <?php echo $elocation1; ?> </br><?php echo $etype1; ?></br> <?php echo $start_date1; ?> &nbsp; to  &nbsp; <?php echo $end_date1; ?></div></div></br>

                    <div class="row recent_img_desc">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>
                    </br>
                    <div class="col-md-12"><img src="images/img1.jpg" class="img-thumbnail home_img" alt="women"><div class="description"><b><?php echo $ename7; ?></b> </br> <?php echo $elocation7; ?> </br><?php echo $etype7; ?></br> <?php echo $start_date7; ?> &nbsp; to  &nbsp; <?php echo $end_date7; ?></div></div>

                </div>  
            </div>
        </div>
    </div>
</div>
<div class="row home_info">
    <div class="panel panel-default">
        <div class="panel-heading">Past Exhibitions</div>
        <div class="panel-body">
            <div class="container recent_product_container">
                <div class="row recent_img">
                    <div class="col-md-6"><img src="images/img8.jpg" class="img-thumbnail home_img" alt="women"><div class="description"><b><?php echo $ename5; ?></b> </br> <?php echo $elocation5; ?> </br><?php echo $etype5; ?></br> <?php echo $start_date5; ?> &nbsp; to  &nbsp; <?php echo $end_date5; ?></div></div></br>

                    <div class="row recent_img_desc">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>
                    </br>
                    <div class="col-md-12"><img src="images/img9.jpg" class="img-thumbnail home_img" alt="women"><div class="description"><b><?php echo $ename3; ?></b> </br> <?php echo $elocation3; ?> </br><?php echo $etype3; ?></br> <?php echo $start_date3; ?> &nbsp; to  &nbsp; <?php echo $end_date3; ?></div></div>
                    <div class="row recent_img_desc">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                    </div>
                    </br>
                    <div class="col-md-12"><img src="images/img10.jpg" class="img-thumbnail home_img" alt="women"><div class="description"><b><?php echo $ename6; ?></b> </br> <?php echo $elocation6; ?> </br><?php echo $etype6; ?></br> <?php echo $start_date6; ?> &nbsp; to  &nbsp; <?php echo $end_date6; ?></div></div>

                </div>  
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
