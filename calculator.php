<?php
 session_start();
   $num = "";
   $result = "";
   $dis="";

   if(isset($_POST["display"])){
      $num =$_POST["display"];
    }else{
        $num = "";
    }
    
    if(isset($_POST["submit"])){
        $num = $_POST["display"] . $_POST["submit"];
       
    }else{
     $num="";
    }
 
 if(isset($_POST['option'])){
   $dis = $_POST['display'];
   $_SESSION['data'] = $dis;
 
   $_SESSION['op'] = $_POST['option'];
 
   $num="";
 }

 

   if(isset($_POST["equals"])){
    
    $nu= $_POST['display'];
   
       switch($_SESSION['op']){
           case"+":
            $result = $_SESSION['data'] + $nu;
            break;
           case "/":
            $result = $_SESSION['data'] / $nu;
            break;
            case "-":
                $result = $_SESSION['data'] - $nu;   
            break;
            case "*":
                $result = $_SESSION['data'] * $nu;
            break;
            default:
                # code...
             break;
       }
       $num=$_SESSION['data'].$_SESSION['op'].$nu."=".$result;
       
    }
    if (isset($_POST['clear'])) {
        $num="";
           session_unset();
        }  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <style>
   body{
    background-color:"black";
    color: black;
  }
  .block{
    margin-top: 100px;
   
  }
  
  table {
    border: 1px solid black;
    margin-top:100px;
    margin-left:500px;
    height:200px;
    width:30px;
    background-color: lightblue;
  }
  input[type='submit']{
  width: 37px;
  }
  
  td{
    border: 1px solid black;
    height:20px;
    width:10px;
  }
  
 
    </style>
</head>
<body>
<div class = "block">
 <form action ="<?php echo $_SERVER['PHP_SELF']; ?>" method ="POST">
  <table >
        <tr>
            <td colspan="4">
              <input type="text"  name="display" value = <?php echo $num; ?> >
            </td>

        <tr>
            <td><input type="submit" name="submit" value="7"></td>
            <td><input type="submit" name="submit" value="8"></td>
            <td><input type="submit" name="submit" value="9"></td>
            <td><input type="submit" name="option" value="/"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="4"></td>
            <td><input type="submit" name="submit" value="5"></td>
            <td><input type="submit" name="submit" value="6"></td>
            <td><input type="submit" name="option" value="+"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="1"></td>
            <td><input type="submit" name="submit" value="2"></td>
            <td><input type="submit" name="submit" value="3"></td>
            <td><input type="submit" name="option" value="-"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="0"></td>
            <td><input type="submit" name="clear" value="c"></td>
            <td><input type="submit" name="equals" value="="></td>
            <td><input type="submit" name="option" value="*"></td>
        </tr>
    </tr>
    </table>
  </form>
</div>
</body>
</html>
