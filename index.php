<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $input = $_POST['number'];
   if($input === ''){
     echo "Pleae enter your number!";
   } else if (!is_numeric($input)){
     echo "{$input} is not an number";
   }else {
     for($i = 1; $i <= $input; $i++){
       echo "<br>";
       if(($i % 3 === 0) & ($i % 5 === 0)){
         echo "Ping Pong";
       }else if($i % 3 === 0){
         echo "Ping";
       }else if($i % 5 === 0){
         echo "Pong";
       }else {
         echo $i;
       }
     }
   }
}

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Please Enter Your Number</title>
   </head>
   <body>
     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
       <label>Please Enter Your Number:</label>
       <input type="text" name="number"/>
       <button type="submit" name="action">Submit</button>
        <button onclick="vone()">Reload</button>
        <script>
          function vone(){
            location:reload();
          }
        </script>
     </form>
   </body>
 </html>
