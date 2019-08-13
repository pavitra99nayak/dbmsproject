<?php
 include( 'artconnect.php');
 ?>
<style>
    .description
    {
        font-size: 20px;
        text-align: center;
    }
    </style>
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
        <div class="panel-heading">Our Paintings</div>
        <div class="panel-body">
            <div class="container recent_product_container">
                <div class="row recent_img">
                    <div class="col-md-4"><img src="images/nature1.jpg " class="img-thumbnail home_img" alt="nature"><div class="description"><?php echo $pname1;?></br><?php echo $ptype1;?></br><?php echo $aname1;?></br>₹<?php echo $cost1;?></div></div>
                    <div class="col-md-4"><img src="images/nature2.jpg" class="img-thumbnail home_img" alt="nature"><div class="description"><?php echo $pname2;?></br><?php echo $ptype2;?></br><?php echo $aname2;?></br>₹<?php echo $cost2;?></div></div>
                    <div class="col-md-4"><img src="images/nature3.jpg" class="img-thumbnail home_img" alt="nature"><div class="description"><?php echo $pname3;?></br><?php echo $ptype3;?></br><?php echo $aname3;?></br>₹<?php echo $cost3;?></div></div>
                </div>
                <div class="row recent_img_desc">
                    <div class="col-md-4">
                       <button type="button" class="btn-add-cart">Purchase</button></a>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn-add-cart" href="cart.php">Purchase</button></div>
                    <div class="col-md-4">
                        <button type="button" class="btn-add-cart" href="cart.">Purchase</button></div>
                </div>
                
                </br>

                <div class="row recent_img">
                    <div class="col-md-4"><img src="images/kathakali1.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><div class="description"><?php echo $pname4;?></br><?php echo $ptype4;?></br><?php echo $aname4;?></br>₹<?php echo $cost4;?></div></div>
                    <div class="col-md-4"><img src="images/kathakali2.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><div class="description"><?php echo $pname5;?></br><?php echo $ptype5;?></br><?php echo $aname5;?></br>₹<?php echo $cost5;?></div></div>
                    <div class="col-md-4"><img src="images/kathakali3.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><div class="description"><?php echo $pname6;?></br><?php echo $ptype6;?></br><?php echo $aname6;?></br>₹<?php echo $cost6;?></div></div>
                </div>

                <div class="row recent_img_desc">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row recent_img_desc">
                    <div class="col-md-4"><button type="button" class="btn-add-cart">Purchase</button></div>
                    <div class="col-md-4"><button type="button" class="btn-add-cart">Purchase</button></div>
                    <div class="col-md-4"><button type="button" class="btn-add-cart">Purchase</button></div>
                </div>
                
                </br>
                
                <div class="row recent_img">
                    <div class="col-md-4"><img src="images/contemporary1.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><div class="description"><?php echo $pname7;?></br><?php echo $ptype7;?></br><?php echo $aname7;?></br>₹<?php echo $cost7;?></div></div>
                    <div class="col-md-4"><img src="images/contemporary2.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><div class="description"><?php echo $pname8;?></br><?php echo $ptype8;?></br><?php echo $aname8;?></br>₹<?php echo $cost8;?></div></div>
                    <div class="col-md-4"><img src="images/contemporary3.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><div class="description"><?php echo $pname9;?></br><?php echo $ptype9;?></br><?php echo $aname9;?></br>₹<?php echo $cost9;?></div></div>
                </div>

                <div class="row recent_img_desc">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row recent_img_desc">
                    <div class="col-md-4"><button type="button" class="btn-add-cart">Purchase</button></div>
                    <div class="col-md-4"><button type="button" class="btn-add-cart">Purchase</button></div>
                    <div class="col-md-4"><button type="button" class="btn-add-cart">Purchase</button></div>
                </div>
                
                </br>
                
                <div class="row recent_img">
                    <div class="col-md-4"><img src="images/village1.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><div class="description"><?php echo $pname10;?></br><?php echo $ptype10;?></br><?php echo $aname10;?></br>₹<?php echo $cost10;?></div></div>
                    <div class="col-md-4"><img src="images/village2.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><div class="description"><?php echo $pname11;?></br><?php echo $ptype11;?></br><?php echo $aname11;?></br>₹<?php echo $cost11;?></div></div>
                    <div class="col-md-4"><img src="images/village3.jpg" class="img-thumbnail home_img" alt="Cinque Terre"><div class="description"><?php echo $pname12;?></br><?php echo $ptype12;?></br><?php echo $aname12;?></br>₹<?php echo $cost12;?></div></div>
                </div>

                <div class="row recent_img_desc">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row recent_img_desc">
                    <div class="col-md-4"><button type="button" class="btn-add-cart">Purchase</button></div>
                    <div class="col-md-4"><button type="button" class="btn-add-cart">Purchase</button></div>
                    <div class="col-md-4"><button type="button" class="btn-add-cart">Purchase</button></div>
                </div>
                
                </br>
                
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 my_cart">
</div>	
<?php
require('footer.php');
