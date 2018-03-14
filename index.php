
<!DOCTYPE html>
<html lang="en">
<head>
        <?php
          include ('particles/head.php');
        ?>
</head>
<body style="background-color: #032965;">
    <?php
    include ('particles/menu.php');
    ?>   
        <!--contenidoslidefacebook-->
<div  align="center">
  <br>


      <?php
      include("db.php");
      $result=mysqli_query($conexion, "SELECT * FROM home");
      while($test = mysqli_fetch_array($result))
      {
        $id = $test['id'];  

        ?>

          <div class="owl-carousel owl-theme">
              <div class="item">
                    <img src="img/img-vertical.png" class="responisve-img materialboxed" style=" width: 360px; height: 683px;">
                    <div class="row">
                      <p class="white-text" style="margin-right: 25%; margin-left: 25%;"><?php echo $test['textprin']?></p>
                    </div>    
              </div>
                 <?php
                  }
                  mysqli_close($conexion);
                  ?>
          </div>
 

    

</div>

    <?php
    include ('particles/footer.php');
    include ('particles/scritp.php');
    ?>    
  </body>
</html>
