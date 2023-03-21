<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once ('php/connection.php');
require_once ('php/Product.php');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Styles CSS-->
    <link rel="stylesheet" href="Styles/style.css">
  </head>

  <body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/">Products List</a>
    </nav>

    <form action="index" method="post">
        <div class="container">
            <div class="cards" id="cards">
                <?php 
                    $sql = "SELECT * FROM product";
                    if($result = $conn->query($sql)){
                        foreach($result as $row) : { ?>
                            <div class="card" style="width: 15rem;" id="<?=$row['idproduct'];?>"> 
                                <label class="form-check-label" for="<?=$row['idproduct']. 'a'?>"> 
                                    <div class="card-body text-center">
                                        <div class="form-check" style="margin-right: 80%;">
                                            <input name="delete_record[]" class="form-check-input" type="checkbox" id="<?=$row['idproduct']. 'a';?>" value="<?=$row['idproduct'];?>">
                                        </div>
                                        <h6 class="card-subtitle mb-2 text-muted\"><?=$row['sku']?></h6>
                                        <h6 class="card-subtitle mb-2 text-muted\"><?=$row['name']?></h6>
                                        <h6 class="card-subtitle mb-2 text-muted\"><?=$row['price']?></h6>
                                        <h6 class="card-subtitle mb-2 text-muted\">
                                        <?php
                                            if (isset($row['size'])){
                                                echo "Size: " . $row['size'] . " MB";
                                            }
                                            else if (isset($row['height'])){
                                                echo "Dismension: " . $row['height'] ."x". $row['width'] ."x". $row['height'];
                                            }
                                            else if (isset($row['weight'])){
                                                echo "Weight: " . $row['weight'] . " KG";
                                            }
                                        ?>
                                        </h6>
                                    </div>
                                </label>
                            </div>
                        <?php
                        } endforeach;
                    $result->free();
                    } 
                else{
                echo "Error: " . $conn->error;
                }
                $conn->close();
                ?>

            </div>
        </div>

        <div class="buttons">
            <a href="addproduct" class="badge badge-light" style="font-size: 17px; margin-right: 8px;">Add</a>
            <button type="button" onclick="deleteAjax()" name="btn_delete" id="btn_delete" class="badge badge-light" style="font-size: 17px; cursor: pointer;">Mass Delete</button>
        </div>
    </form>
    
    
    <footer>
        <p style="font-size: 18px;"> Scandiweb Test assignment </p>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script/custom.js" type="text/javascript"> </script>
    <script src="script/delete_ajax.js" type="text/javascript"> </script>
  </body>
</html>