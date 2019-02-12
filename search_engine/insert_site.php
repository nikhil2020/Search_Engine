<!DOCTYPE html>

<html>

	<head>
		<title>Search Engine </title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
        body{
            
            background-color: #F0FFFF;
        }
        
        
    </style>    
    </head>
    

 	<body>
 		
 		<div class="container">
            <br>
            <br>
            <center><h2 style="background-color:#7CE1FF; padding:10px; width:100%"><b>Insert Website</b></h2></center>
            <br>
            <br>
            <br>
            <form action ="insert_site.php" method="post" enctype="multipart/form-data">
<!--Site Title -->
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-2" for="stitle"><b> Site Title</b></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stitle" name="s_title" placeholder="Enter Site Title">       
                        </div>
                    </div>
                
                 </div>
 <!--Site Link -->
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-2" for="slink"><b>Site Link</b> </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="slink" name="s_link" placeholder="Enter Site Link">       
                        </div>
                    </div>
                
                 </div>
 <!--Site Keyword -->
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-2" for="sKey"><b> Site Keywords</b></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="skey" name="s_key" placeholder="Enter Site Keywords">       
                        </div>
                    </div>
                
                 </div>
<!--Site Description -->
                
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-2" for="sdes"><b> Site Description</b></label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="sdes" name="s_des" placeholder="Enter Site Description"></textarea>       
                        </div>
                    </div>
                
                 </div>
<!-- Site Image-->                 
                
                <div class="form-group">
                    <div class="row">
                        <label class="col-sm-2" for="simg"><b> Site Image</b></label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="simg" name="simg">      
                        </div>
                    </div>
                
                 </div>
 <!-- Add Website Button & Cancel Button -->               
                
                <div class="form-group">
                    <div class="row">
                        <center>
                            <input type="submit" class="btn btn-outline-success" name="submit" value="Add Website">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="reset" class="btn btn-outline-danger" name="cancel" value="Cancel"> 
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="search.php"><input type="text" class="btn btn-outline-primary" name="submit" value="Back"></a>
                        </center>
                    </div>
                </div>
                
            </form>
            
 		</div>	
 		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 	</body>

</html>

<?php

   $con=mysqli_connect("localhost","root","");
   mysqli_select_db($con,"search");
       
   if(isset($_POST["submit"]))
   {
         $s_title = addslashes($_POST["s_title"]);
         $s_link = addslashes($_POST["s_link"]);
         $s_key = addslashes($_POST["s_key"]);
         $s_des = addslashes($_POST["s_des"]);
         $simg = addslashes($_FILES["simg"]["name"]);
         
         if(move_uploaded_file($_FILES["simg"] ["tmp_name"],"img/". $_FILES["simg"] ["name"]))
             {
                $sql = "insert into website(site_title,site_link,site_key,site_des,site_img) values('$s_title','$s_link','$s_key','$s_des','$simg')";
                
                $rs = mysqli_query($con,$sql);
                
                if($rs)
                {
                    echo "<script> alert('Site uploaded successfully')</script>";
                
                }
                else
                {
                    echo "<script> alert('Uploading failed,please try again')</script>";
                
                }
             
             }
         
         
   }
       

?>