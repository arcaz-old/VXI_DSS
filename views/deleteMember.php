<?php 

session_start();
if( !isset($_SESSION['username']) && !isset($_SESSION['password'])){
    header("location: index.php");
    
}
?>
<?php include "../controllers/membersFunction.php";
 ?>
        
<!DOCTYPE html>
<html
    xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title></title>
        <!-- BOOTSTRAP STYLES-->
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css"  />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
        <!--CUSTOM BASIC STYLES-->
        <link href="assets/css/basic.css" rel="stylesheet" />
        <!--CUSTOM MAIN STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link rel="stylesheet" href="assets/css/w3.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <body>     
<center>

                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <center><i class="fa fa-user fa-fw"></i><h3>Are you sure you want to delete this?</h3></center>
                            </div>

                            <div class="panel-body">
                                
<center>
    <form action="<?php $_PHP_SELF ?>" method="POST">
    <table class="table table-striped table-bordered table-hover">
        <?php error_reporting(E_ERROR | E_PARSE); foreach ($getMember as $index => $value): ?>
        <tr>
            <th>ID Number</th>
            <td>
                <input type="hidden" name="mID" value="<?php echo $value['mID'] ?>">
                <?php echo $value['mID'] ?>
            </td>
        </tr>
        <tr>
            <th>First Name</th>
            <td>
                <input type="hidden" name="fName" value="<?php echo $value['fName'] ?>"> <!-- for notifification -->
                <?php echo $value['fName'] ?>
            </td>
        </tr>
        <tr>
            <th>Middle Name</th>
            <td>
                <?php echo $value['mName'] ?>
            </td>
        </tr>
        <tr>
            <th>Surname</th>
            <td>
                <input type="hidden" name="lName" value="<?php echo $value['lName'] ?>"> <!-- for notifification -->
                <?php echo $value['lName'] ?>
            </td>
        </tr>
        <tr>
            <th>Address</th>
            <td>
                <?php echo $value['address'] ?>
            </td>
        </tr>
        <tr>
            <th>Contact Number</th>
            <td>
               <?php echo $value['cNum'] ?>d
            </td>
        </tr>
        <tr>
            <th>Age</th>
            <td>
                <?php echo $value['age'] ?>
            </td>
        </tr>
        <tr>
            <th>Sex</th>
            <td>
                <?php echo $value['sex'] ?>
            </td>
        </tr>
        <tr>
            <th>Lay Number</th>
            <td>
                <?php echo $value['lay_num'] ?>
            </td>
        </tr>
        <tr>
            <th>Trainer Number</th>
            <td>
                <?php echo $value['train_num'] ?>
            </td>
        </tr>
            <th style="color: white; background-color: #ffc518">Diocese</th>
            <td style="color: white; background-color: #ffc518">
                <?php echo $value['d_name']?>
            </td>
        </tr>
            <th style="color: white; background-color: #ffc518">Parish</th>
            <td style="color: white; background-color: #ffc518">
                <?php echo $value['par_name']?>
            </td>
        </tr>
            <th style="color: white; background-color: #ffc518">GKK</th>
            <td style="color: white; background-color: #ffc518">
                <?php echo $value['g_name']?>
            </td>
        </tr>
        <tr>
            <th style="color: white; background-color: #5bc0de">Guardian</th>
            <td style="color: white; background-color: #5bc0de">
                <?php echo $value['gName']?>
            </td>
        </tr>
        <tr>
            <th style="color: white; background-color: #5bc0de">Guardian Contact No.</th>
            <td style="color: white; background-color: #5bc0de"><?php echo $value['gCnum'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
     <tr><input class="btn btn-info" value="YES" type="submit" name="submit"></tr>
    </form>
    <br>
     <a href="" onclick="window.close();" type="button" class="btn btn-warning">cancel</a>
</center> 
    </div>

      </div><!-- /.modal-content -->


 </center>  


             

        

    </body>
</html>



        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>
        <script src="tabs.js"></script>
          