<!DOCTYPE html>

<html>
    <head>
    
            <title>Our Search Engine</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                    <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
        

    
   
    
      
	  
        
	
           
        <script>
            function Id()
            {
                
                document.search_box.search.focus();
            }
        
        
        </script>
        
        <style>
              
           

            body
            {
                
                margin: 7%;
                background-color: #F0FFF0;
               
            }
             
            
            h1
            {
                
                color: #2F4F4F;
                letter-spacing: 8px;
                border-color: green;
                color:black;
            }
            
            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background-color:#008080;
              position: fixed;
              top: 0;
              width: 85%; 
               
            }

            li {
              float: left;
            }

            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 14px 16px;
              text-decoration: none;
            }

            li a:hover {
              background-color: cyan;
            }
            li a:hover:not(.active) {
              background-color: cyan;
            }

            .active {
              background-color:brown;
            }
           
            
        </style>
        </head> 
    
    
        <body onload="Id()">
          <ul>
              <li><a  href="search.php"><b>Home</b></a></li>
              <li><a href="insert_site.php".php><b>Insert Site</b></a></li>
              
              <li><a href="contact.html"><b>Contact</b></a></li>
              <li style="float:right"><a class="active" href="About.html"><b>About</b></a></li>
          </ul>
        
      
        
        
        <form name="search_box" action="result.php" method="get">
             
            
            <center>
                
            <img src="img/search.jpg" class="img-responsive" alt="Search" width="500" height="300" style="width:40%; margin-top:20px"><h1><b>SuperSonic</b></h1>
                
            </center>
            
            <center>
            <input type="text" class="form-control" name="search" placeholder="Looking for Something"  style="width:60%; margin-top:10px opacity:0.2" >
             
                <input type="submit" class="btn btn-outline-success" value="Smart Search" name="search_button" style="width:15%; margin-top:20px; color: black">   
            </center>
        </form>
        
        
        
        
        
        
        
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        
    
    
    
    
    </body>

</html>