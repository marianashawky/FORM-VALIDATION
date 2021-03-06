

    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>FORM</title>
</head>
<body>


<form class="m-4"  action ="<?php $_SERVER['PHP_SELF']?>" method="post">

<center>
            <h1> form </h1>
        </center>

  <div class="form-group " >
  

    <label for="exampleFormControlInput1">Name</label>
    <br>

  
    <input type="text" class="form-control"  value="<?php echo isset($_POST["Name"])?$_POST["Name"]:'' ?>"name="Name" id="exampleFormControlInput1" placeholder="enter your name">



  </div>
<br>
  <div class="form-group">
  
  
 
    <label for="exampleFormControlInput1">Email address</label>

    <br>

   
    <input type="email" class="form-control"value="<?php echo isset($_POST["Email"])?$_POST["Email"]:'' ?>" name="Email" id="exampleFormControlInput1" placeholder="name@example.com">


  </div>
  <br>

  <div class="form-group">
  

    <label for="exampleFormControlInput1">Phone</label>

    <br>

    <input type="number" class="form-control" value="<?php echo isset($_POST["Phone"])?$_POST["Phone"]:'' ?>"name="Phone" id="exampleFormControlInput1" placeholder="enter your Phone">



  </div>

  <br>

  <div class="form-group">
  

    <label for="exampleFormControlInput1">Facebook URL </label>

    <br>

    <input type="text" class="form-control" name="Facebook" value="<?php echo isset($_POST["Facebook"])?$_POST["Facebook"]:'' ?>" id="exampleFormControlInput1" placeholder="enter your facebook">
  </div>

  <br>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">About you</label>
    <br>

    <textarea class="form-control" name="About" value="<?php echo isset($_POST["About"])?$_POST["About"]:'' ?>" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <br>

  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="male" <?php if (isset($_POST["gridRadios"]) && $_POST["gridRadios"]=="male") echo "checked";?>>
          <label class="form-check-label" for="gridRadios1">
           male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="fmale" <?php if (isset($_POST["gridRadios"]) && $_POST["gridRadios"]=="fmale") echo "checked";?>>
          <label class="form-check-label" for="gridRadios2">
            female
          </label>
        </div>
      
      </div>
    </div>
  </fieldset>
  <br>

  <button type="submit" class="btn btn-primary">Submit</button>


</form>

<?php 

echo "<br/><table  class='table table-dark table-hover'>";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name=$_POST["Name"];
    $Email=$_POST["Email"];
    $Phone=$_POST["Phone"];
    $Facebook=$_POST["Facebook"];
    $About=$_POST["About"];
    $Gender=$_POST["gridRadios"];



  //--------------------------------------------------------------------------------   

    echo "<tr><th>Name </th>";

    if(empty($name)){
        echo "<td colspan='4'>empty Name</td></tr>";
        ;}

       else{
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            echo "<td colspan='4'>wrong</td></tr>";    


        }
        else{

  
        
            echo "<td colspan='4'>$name</td></tr>";
 
  
         }

        
        }
  //--------------------------------------------------------------------------------   





 echo "<tr><th>Email </th>";

    if(empty($Email)){
        echo "<td colspan='4'>empty email</td></tr>";
        ;
      }else{
  
      
         if( filter_var(filter_var($Email,FILTER_SANITIZE_EMAIL),FILTER_VALIDATE_EMAIL)){
            echo "<td colspan='4'>$Email</td></tr>";}


  
        else{
            echo "<td colspan='4'>invalid email</td></tr>";

  
         }
        }
  //--------------------------------------------------------------------------------   


  $INT = 15;

  /* min value */
  $min = 0;
  /* max value */
  $max = 11;


  echo "<tr><th>Phone </th>";

  if(empty($Phone)){
      echo "<td colspan='4'>empty number</td></tr>";
      ;
    }else{
      $Tphone="/^01[0125][0-9]{8}$/";
      if((preg_match($Tphone,$Phone))==1){
        echo "<td colspan='4'>$Phone</td></tr>";

   



       }else{

          echo "<td colspan='4'>invalid number</td></tr>";


       }
      }
//--------------------------------------------------------------------------------   






echo "<tr><th> Facebook URL</th>";

  if(empty($Facebook)){
      echo "<td colspan='4'>empty URL</td></tr>";
      ;
    }else{


       if( filter_var(filter_var($Facebook,FILTER_SANITIZE_URL),FILTER_VALIDATE_URL)){
          echo "<td colspan='4'>$Facebook</td></tr>";


       }else{
          echo "<td colspan='4'>invalid URL</td></tr>";


       }
      }
//--------------------------------------------------------------------------------   


echo "<tr><th>About </th>";

if(empty($About)){
    echo "<td colspan='4'>empty comment</td></tr>";
    ;
  }
     else{
        echo "<td colspan='4'>$About</td></tr>";


     }
   ;
//--------------------------------------------------------------------------------   

echo "<tr><th>Gander </th>";

if(empty($Gender)){
    echo "<td colspan='4'>empty Gander</td></tr>";
    ;
  }
     else{
        echo "<td colspan='4'>$Gender</td></tr>";


     }
   ;
//--------------------------------------------------------------------------------   




};


?>


</body>

</html>

