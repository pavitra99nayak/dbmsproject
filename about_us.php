
<?php
		$page="aboutus";
		$title="About us";
		require_once('header.php');
		include('Admin/conn.php');
		$query="select * from pages where page_nm='about_us'";
		$result=mysqli_query($link,$query)  or die("Error fetching data.".mysqli_error($link));
		$row=mysqli_fetch_assoc($result);
		$desc=$row['page_desc'];
		
?>
<?php
		$pag="aboutus";
		$titl="About us";
		require_once('header.php');
		include('Admin/conn.php');
		$q="select * from pages where page_nm='about_us_dp'";
		$r=mysqli_query($link,$q)  or die("Error fetching data.".mysqli_error($link));
		$ro=mysqli_fetch_assoc($r);
		$des=$ro['page_desc'];
		
?>
<?php
		$pa="aboutus";
		$tit="About us";
		require_once('header.php');
		include('Admin/conn.php');
		$qu="select * from pages where page_nm='about_us_dp1'";
		$re=mysqli_query($link,$qu)  or die("Error fetching data.".mysqli_error($link));
		$rows=mysqli_fetch_assoc($re);
		$descr=$rows['page_desc'];
		
?>
<div class="row about_container">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">About us</div>
            <div class="panel-body">
                <p class="about_us_info">
                    <?php echo $desc; ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row about_container1">


    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">Director Profile</div>
            <p style="padding-left:0.5cm; font-size:22px;">Namitha D'souza</p>
            <p style="padding-left:0.5cm ; font-size:22px;" >Director Sunshine Crafts Pvt. Ltd.</p>
            <div class="panel-body">
                <p class="about_us_info">
                    <?php echo $des; ?>
                </p>
            </div>
        </div>
    </div>
    </div>
<hr>
<div class="row about_container1">

    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">Director Profile</div>
            <p style="padding-left:0.5cm; font-size:22px;">Pavitra Nayak</p>
            <p style="padding-left:0.5cm ; font-size:22px;" >Director Sunshine Crafts Pvt. Ltd.</p>
            <div class="panel-body">
                <p class="about_us_info">
                    <?php echo $descr; ?>
                </p>
            </div>
        </div>
    </div>
    </div>


          
<?php
	require('footer.php');
?>