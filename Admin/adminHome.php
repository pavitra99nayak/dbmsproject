<!DOCTYPE html>
<?php
session_start();
include('conn.php');
if (!isset($_SESSION['id'])) {
    header('location:index.php');
}
if (isset($_POST['logout'])) {
    session_destroy();
    header('location:index.php');
}


//Update About us page
$about_msg = "";
if (isset($_POST['about_info'])) {
    $pagedata = $_POST['info'];
    $query = "update pages set page_desc='$pagedata' where page_nm='about_us'";
    mysqli_query($link, $query) or die("Error updating data." . mysqli_error($link));
    $about_msg = "Update Successfully...";
}



//Update Reach us page
$reach_us_msg = "";
if (isset($_POST['reach_info'])) {

    $query = "update reach_us set nm='" . $_POST['reach_nm'] . "', add1='" . $_POST['reach_add1'] . "', add2='" . $_POST['reach_add2'] . "', city='" . $_POST['reach_city'] . "', zipcode='" . $_POST['reach_zip'] . "', state='" . $_POST['reach_state'] . "', contact_no='" . $_POST['contact_no'] . "' where uid=1";
    mysqli_query($link, $query) or die("Error updating data." . mysqli_error($link));
    $reach_us_msg = "Update Successfully...";
}



$socia_error = "";
//Social Content Update
if (isset($_POST['social_facebook'])) {
    $query = "update social_media set facebook='" . $_POST['social_facebook'] . "' where uid=1";
    mysqli_query($link, $query) or die("Error updating data." . mysqli_error($link));
    $socia_error = "Update Successfully...";
}

$socia_fb = "";
$socia_twi = "";
$socia_lin = "";
$socia_inst = "";
//Social Content Update
if (isset($_POST['social_facebook'])) {
    $query = "update social_media set facebook='" . $_POST['social_facebook'] . "' where uid=1";
    mysqli_query($link, $query) or die("Error updating data." . mysqli_error($link));
    $socia_fb = "Update Successfully...";
}
if (isset($_POST['social_twitter'])) {
    $query = "update social_media set twitter='" . $_POST['social_twitter'] . "' where uid=1";
    mysqli_query($link, $query) or die("Error updating data." . mysqli_error($link));
    $socia_twi = "Update Successfully...";
}
if (isset($_POST['social_linked'])) {
    $query = "update social_media set linkedin='" . $_POST['social_linked'] . "' where uid=1";
    mysqli_query($link, $query) or die("Error updating data." . mysqli_error($link));
    $socia_lin = "Update Successfully...";
}
if (isset($_POST['social_insta'])) {
    $query = "update social_media set insta='" . $_POST['social_insta'] . "' where uid=1";
    mysqli_query($link, $query) or die("Error updating data." . mysqli_error($link));
    $socia_inst = "Update Successfully...";
}

$form_msg = "";
if (isset($_POST['exhibition_info'])) 
    {
    //$eid= trim($_POST['eid']);
    $location = trim($_POST['location']);
    $etype = trim($_POST['etype']);
    $start_date = trim($_POST['start_date']);
    $end_date = trim($_POST['end_date']);
    $ename = trim($_POST['ename']);

    
    if ($location == "") {
        echo $form_msg = "Please enter this field";
    } else if ($etype == "") {
        echo $form_msg = "Please enter this field";
    } else if ($start_date == "") {
        echo $form_msg = "Please enter this field";
    } else if ($end_date == "") {
        echo $form_msg = "Please enter this field";
    } else if ($ename == "") {
        echo $form_msg = "Please enter this field";
    }
     else {
        $query = "INSERT INTO exhibition (location,etype ,start_date , end_date,ename) VALUES('$location','$etype','$start_date','$end_date','$ename')";
        mysqli_query($link, $query) or die("Error inserting data." . mysqli_error($link));
        echo "success";
    }
}


$form_msg = "";
if (isset($_POST['exhibition_info'])) 
    {
    //$eid= trim($_POST['eid']);
    $location = trim($_POST['location']);
    $etype = trim($_POST['etype']);
    $start_date = trim($_POST['start_date']);
    $end_date = trim($_POST['end_date']);
    $ename = trim($_POST['ename']);

    if ($location == "") {
        echo $form_msg = "Please enter this field";
    } else if ($etype == "") {
        echo $form_msg = "Please enter this field";
    } else if ($start_date == "") {
        echo $form_msg = "Please enter this field";
    } else if ($end_date == "") {
        echo $form_msg = "Please enter this field";
    } else if ($ename == "") {
        echo $form_msg = "Please enter this field";
    }
     else {
        $query = "INSERT INTO exhibition (location,etype ,start_date , end_date,ename) VALUES('$location','$etype','$start_date','$end_date','$ename')";
        mysqli_query($link, $query) or die("Error inserting data." . mysqli_error($link));
        echo "success";
    }
}

$form_msg = "";
if (isset($_POST['exhibition_info'])) 
    {
    //$eid= trim($_POST['eid']);
    $location = trim($_POST['location']);
    $etype = trim($_POST['etype']);
    $start_date = trim($_POST['start_date']);
    $end_date = trim($_POST['end_date']);
    $ename = trim($_POST['ename']);

    if ($location == "") {
        echo $form_msg = "Please enter this field";
    } else if ($etype == "") {
        echo $form_msg = "Please enter this field";
    } else if ($start_date == "") {
        echo $form_msg = "Please enter this field";
    } else if ($end_date == "") {
        echo $form_msg = "Please enter this field";
    } else if ($ename == "") {
        echo $form_msg = "Please enter this field";
    }
     else {
        $query = "INSERT INTO exhibition (location,etype ,start_date , end_date,ename) VALUES('$location','$etype','$start_date','$end_date','$ename')";
        mysqli_query($link, $query) or die("Error inserting data." . mysqli_error($link));
    }
}


$fmsg = "";
if (isset($_POST['arts_info'])) 
    {
    //$eid= trim($_POST['eid']);
    $aname = trim($_POST['aname']);
    $aid = trim($_POST['aid']);
    $ptype = trim($_POST['ptype']);
    $cost = trim($_POST['cost']);
    $gid = trim($_POST['gid']);
    $pname=trim($_POST['pname']);

    if ($aname == "") {
        echo $fmsg = "Please enter this field";
    } else if ($aid == "") {
        echo $fmsg = "Please enter this field";
    } else if ($ptype == "") {
        echo $fmsg = "Please enter this field";
    } else if ($cost == "") {
        echo $fmsg = "Please enter this field";
    } else if ($gid == "") {
        echo $fmsg = "Please enter this field";
    }
    else if($pname==""){
        echo $fmsg="Please enter the field";
    }
     else {
        $query = "INSERT INTO arts (pname, aid, ptype, cost, gid, aname) VALUES('$pname','$aid','$ptype','$cost','$gid', '$aname')";
        mysqli_query($link, $query) or die("Error inserting data." . mysqli_error($link));
    }
}

$fmsg = "";
if (isset($_POST['artist_info'])) 
    {
    //$eid= trim($_POST['eid']);
    $aname = trim($_POST['aname']);
    if ($aname == "") {
        echo $fmsg = "Please enter this field";
    }
     else {
        $query = "INSERT INTO artist (aname) VALUES('$aname')";
        mysqli_query($link, $query) or die("Error inserting data." . mysqli_error($link));
    }
}
?>


<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Art Gallery | Admin</title>
        <link href="../images/img1.jpg" rel="icon">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row header">
                <div class="col-md-9"><h3>Art Gallery</h3></div>
                <div class="col-md-3">
                    <ul class="user-nav">
                        <li class="dropdown user-icon">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <span>Hi <?php echo $_SESSION['uname']; ?> </span> <span class="glyphicon glyphicon-user"></span>  <span class="glyphicon glyphicon-triangle-bottom"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#"><span class=""></span> User Profile</a></li>
                                <li><a href="#"><span class=""></span> Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li class="logout-li"><form method="post"><span class="glyphicon glyphicon-log-out"></span><button type="submit" name="logout" class="btn btn-default logout"> Logout</button></form></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row center-container">
                <div class="col-md-2 left-nav">
                    <ul class="nav nav-stacked left-menu">
                        <li role="presentation"><a href="#dashboard" class="active">Dashboard</a></li>
                        <li role="presentation"><a href="#about">About</a></li>
                        <!--<li role="presentation"><a href="exhibition.php">Exhibition</a></li>-->
                        <li role="presentation"><a href="#reach_us">Reach us</a></li>
                    </ul>

                </div>
                <div class="col-md-10">
                    <div class="pages center-container">
                        
                        
                        <div id="dashboard" class="switchgroup dashboard">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>Dashboard</h3>
                                </div>
                                <div class="panel-body">

                                    <!-- Social Links  -->
                                    <div class="panel panel-default social-links">
                                        <div class="panel-heading">
                                            <h4>Social Links</h4>
                                        </div>
                                        <div class="panel-body">
                                            <?php
                                            $sql = "select * from social_media where uid=1";
                                            $result = mysqli_query($link, $sql) or die("Error fetching data." . mysqli_error($link));
                                            $socialcontent = mysqli_fetch_assoc($result);
                                            mysqli_free_result($result);
                                            ?>
                                            <form class="form-inline" method="post">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Facebook</div>
                                                        <input type="text" name="social_facebook" class="form-control" value="<?php echo $socialcontent['facebook']; ?>">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success">Update</button>
                                                <span class="text-success" style="padding-left:10px"><?php echo $socia_error; ?></span>
                                            </form>
                                            <form class="form-inline" method="post">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Twitter</div>
                                                        <input type="text" name="social_twitter" class="form-control" value="<?php echo $socialcontent['twitter']; ?>">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </form>
                                            <form class="form-inline" method="post">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">LinkedIn</div>
                                                        <input type="text" name="social_linked" class="form-control" value="<?php echo $socialcontent['linkedin']; ?>">
                                                    </div>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </form>
                                            <form class="form-inline" method="post">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Instagram</div>
                                                        <input type="text" name="social_insta" class="form-control" value="<?php echo $socialcontent['insta']; ?>">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- ---------------About page--------------->
                        <div id="about" class="switchgroup dashboard">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>About us</h3>
                                </div>
                                <div class="panel-body">
                                    <!-- About us content  -->
                                    <div class="panel panel-default social-links">
                                        <div class="panel-heading">
                                            <h4>About us Content</h4>
                                        </div>
                                        <div class="panel-body">
<?php
$sql = "select * from pages where page_nm='about_us'";
$result = mysqli_query($link, $sql) or die("Error fetching data." . mysqli_error($link));
$aboutcontent = mysqli_fetch_assoc($result);
mysqli_free_result($result);
?>
                                            <form class="form-inline" method="post">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="10" cols="100" name="info" id="myInfo"><?php
echo $aboutcontent['page_desc'];
?></textarea>
                                                </div>
                                                <br/>
                                                <span class="text-success" style="padding-left:10px"><?php echo $about_msg; ?></span>
                                                <br/>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-success" name="about_info">Update</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ------------------End About page--------------->

                        <!-- ---------------Reach us page------------- -->
                        <div id="reach_us" class="switchgroup dashboard">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>Reach us</h3>
                                </div>
                                <div class="panel-body">
                                    <!-- Reach us content--> 
                                    <div class="panel panel-default social-links">
                                        <div class="panel-heading">
                                            <h4>Address</h4>
                                        </div>
                                        <div class="panel-body">
                                            <?php
                                            $query = "select * from reach_us where uid=1";
                                            $result = mysqli_query($link, $query) or die("Error fetching data." . mysqli_error($link));
                                            $contactetails = mysqli_fetch_assoc($result);
                                            mysqli_free_result($result);
                                            ?>
                                            <form class="form-inline" method="post">
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Name</div>
                                                        <input type="text" name="reach_nm" class="form-control" value="<?php echo $contactetails['nm']; ?>">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Address-1</div>
                                                        <input type="text" name="reach_add1" class="form-control" value="<?php echo $contactetails['add1']; ?>">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Address-2</div>
                                                        <input type="text" name="reach_add2" class="form-control" value="<?php echo $contactetails['add2']; ?>">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">City</div>
                                                        <input type="text" name="reach_city" class="form-control" value="<?php echo $contactetails['city']; ?>">
                                                    </div>
                                                </div>
                                                <br/>

                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Zipcode</div>
                                                        <input type="text" name="reach_zip" class="form-control" value="<?php echo $contactetails['zipcode']; ?>">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">State</div>
                                                        <input type="text" name="reach_state" class="form-control" value="<?php echo $contactetails['state']; ?>">
                                                    </div>
                                                </div>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Contact No.</div>
                                                        <input type="text" name="contact_no" class="form-control" value="<?php echo $contactetails['contact_no']; ?>">
                                                    </div>
                                                </div>
                                                <br/>
                                                <br/>
                                                <button type="submit" name="reach_info" class="btn btn-success">Update</button>
                                                <span class="text-success" style="padding-left:10px"><?php echo $reach_us_msg; ?></span>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ------------------End Reach us page--------------->

                        <div id="exhibiton" class="switchgroup dashboard">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>Exhibition</h3>
                                </div>
                                <div class="panel-body">
                                    <!-- Reach us content--> 
                                    <div class="panel panel-default social-links">
                                        <div class="panel-heading">
                                            <h4>INSERT RECORDS</h4>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-inline" method="post">
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Location</div>
                                                        <input type="text" class="form-control" name="location" placeholder="Enter Location">												</div>
                                                </div>
                                                <br/>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Exhibition Type</div>
                                                        <input type="text" class="form-control" name="etype" placeholder="Enter Exhibition Type">
                                                    </div>
                                                </div>
                                                <br/>
                                                </br>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Start Date</div>
                                                        <input type="text" class="form-control" name="start_date" placeholder="Enter Start Date">
                                                    </div>
                                                </div>
                                                <br/>
                                                </br>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">End Date</div>
                                                        <input type="text" class="form-control" name="end_date" placeholder="Enter End Date">
                                                    </div>
                                                </div>
                                                <br/>
                                                </br>
                                                
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Exhibition Name</div>
                                                        <input type="text" class="form-control" name="ename" placeholder="Enter Exibition Name">
                                                    </div>
                                                </div>
                                                </br>
                                                </br>
                                                <button type="submit" name="exhibition_info" class="btn btn-success">Insert</button>
                          
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        
                         <div id="exhibiton" class="switchgroup dashboard">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>ARTS</h3>
                                </div>
                                <div class="panel-body">
                                    <!-- Reach us content--> 
                                    <div class="panel panel-default social-links">
                                        <div class="panel-heading">
                                            <h4>INSERT RECORDS</h4>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-inline" method="post">
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Painting Name</div>
                                                        <input type="text" class="form-control" name="pname" placeholder="Enter the Painting Name">												</div>
                                                </div>
                                                <br/>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Artist Id</div>
                                                        <input type="text" class="form-control" name="aid" placeholder="Enter Artist Id">
                                                    </div>
                                                </div>
                                                <br/>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Painting Type </div>
                                                        <input type="text" class="form-control" name="ptype" placeholder="Enter Painting Type">
                                                    </div>
                                                </div>
                                                <br/>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Painting Cost</div>
                                                        <input type="text" class="form-control" name="cost" placeholder="Enter The Cost">
                                                    </div>
                                                </div>
                                                <br/>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Gallery Id</div>
                                                        <input type="text" class="form-control" name="gid" placeholder="Enter The Gallery Id ">
                                                    </div>
                                                </div>
                                                </br>
                                                <br/>
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">Artist Name</div>
                                                        <input type="text" class="form-control" name="aname" placeholder="Enter The Artist Name ">
                                                    </div>
                                                </div>
                                                </br>
                                                </br>
                                                <button type="submit" name="arts_info" class="btn btn-success">Insert</button>
                          
                                            </form>
                                        </div>
                                    </div>               
                      <div id="exhibiton" class="switchgroup dashboard">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3>ARTIST</h3>
                                </div>
                                <div class="panel-body">
                                    <!-- Reach us content--> 
                                    <div class="panel panel-default social-links">
                                        <div class="panel-heading">
                                            <h4>INSERT RECORDS</h4>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-inline" method="post">
                                                <div class="form-group reach_data">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"> Artist Name</div>
                                                        <input type="text" class="form-control" name="aname" placeholder="Enter the Artist Name">												</div>
                                                </div>
                                                </br>
                                                </br>
                                                <button type="submit" name="artist_info" class="btn btn-success">Insert</button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
<?php
require_once('dbconclose.php');
?>

        <script src="../js/jquery.js"></script>
        <script src="../js/script.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>