<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Door2Door</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet">

    </head>
    <body style="padding-top: 50px;">
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        include 'includes/modal.php';
        ?>
        <div class="text-center">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail panel panel-default paddingZero">
                            <div class="panel-heading text-left">
                                <?php if (!isset($_SESSION['email'])) 
                                                   { echo '<h5>Mobile 1</h5>';}
                                                   else {
                                                   echo '<h5>#1</h5>';
                                                   } ?>
                                                      
                            </div>
                            <img src="./img/iphonex.png" alt="iphone x">
                            <div class="caption">
                                <p>5.3-inch Super Retina Display, 4GB RAM, 64GB Internal memory,Rs 69,999/-</p>
                                 <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                            } else {
                                           if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail panel panel-default paddingZero">
                            <div class="panel-heading text-left">
                                <?php if (!isset($_SESSION['email'])) 
                                                   { echo '<h5>Mobile 2</h5>';}
                                                   else {
                                                   echo '<h5>#2</h5>';
                                                   } ?>
                            </div>
                            <img src="./img/samsungs8.png" alt="samsung s8 plus">
                            <div class="caption">
                                <p>6.2-inch Super AMOLED screen, 6GB RAM, 128GB Internal memory,Rs 65,990/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                            } else {
                                           if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail panel panel-default paddingZero">
                            <div class="panel-heading text-left">
                                <?php if (!isset($_SESSION['email'])) 
                                                   { echo '<h5>Mobile 3</h5>';}
                                                   else {
                                                   echo '<h5>#3</h5>';
                                                   } ?>
                            </div>
                            <img src="./img/op5t.png" alt="oneplus 5t">
                            <div class="caption">
                                <p>6.01-inch Screen, Snapdragon 835 processor, 6GB RAM, 64GB Internal memory,Rs 37,999/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                            } else {
                                           if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail panel panel-default paddingZero">
                            <div class="panel-heading text-left">
                                <?php if (!isset($_SESSION['email'])) 
                                                   { echo '<h5>Mobile 4</h5>';}
                                                   else {
                                                   echo '<h5>#4</h5>';
                                                   } ?>
                            </div>
                            <img src="./img/mimix2.png" alt="mi mix 2">
                            <div class="caption">
                                <p>5.99' IPS LCD Screen, Snapdragon 835 processor, 6GB RAM, 64GB Internal memory,Rs 29,999/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                            } else {
                                           if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail panel panel-default paddingZero">
                            <div class="panel-heading text-left">
                                <?php if (!isset($_SESSION['email'])) 
                                                   { echo '<h5>Mobile 5</h5>';}
                                                   else {
                                                   echo '<h5>#5</h5>';
                                                   } ?>
                            </div>
                            <img src="./img/op3.png" alt="oneplus 3">
                            <div class="caption">
                                <p>5.5-inch Optic Amoled Display, Android 6.0.1 Marshmallow , 6GB RAM, 64GB Internal memory,Rs 26,999/-</p>
                               <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                            } else {
                                           if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail panel panel-default paddingZero">
                            <div class="panel-heading text-left">
                                <?php if (!isset($_SESSION['email'])) 
                                                   { echo '<h5>Mobile 6</h5>';}
                                                   else {
                                                   echo '<h5>#6</h5>';
                                                   } ?>
                            </div>
                            <img src="./img/iphone7.png" alt="iphone 7">
                            <div class="caption">
                                <p>4.7-inch Screen, snap-dragon processor, 2GB RAM, 32GB Internal memory,Rs 21,499/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                            } else {
                                           if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail panel panel-default paddingZero">
                            <div class="panel-heading text-left">
                               <?php if (!isset($_SESSION['email'])) 
                                                   { echo '<h5>Mobile 7</h5>';}
                                                   else {
                                                   echo '<h5>#7</h5>';
                                                   } ?>
                            </div>
                            <img src="./img/samsungs8.png" alt="Samsung galaxy S9" >
                            <div class="caption">
                                <p>6.2-inch Super AMOLED screen, 6GB RAM, 128GB Internal memory,Rs 60,999/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                            } else {
                                           if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail panel panel-default paddingZero">
                            <div class="panel-heading text-left">
                                <?php if (!isset($_SESSION['email'])) 
                                                   { echo '<h5>Mobile 8</h5>';}
                                                   else {
                                                   echo '<h5>#8</h5>';
                                                   } ?>
                            </div>
                            <img src="./img/samsungs7edge.png" alt="galaxy s7 edge">
                            <div class="caption">
                                <p>5.5' Screen,Octa-core Android 6.0, 4GB RAM, 64GB Internal memory,Rs 27,999/-</p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                            } else {
                                           if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail panel panel-default paddingZero">
                            <div class="panel-heading text-left">
                               <?php if (!isset($_SESSION['email'])) 
                                                   { echo '<h5>Mobile 9</h5>';}
                                                   else {
                                                   echo '<h5>#9</h5>';
                                                   } ?>
                            </div>
                            <img src="./img/op3t.png" alt="oneplus 3t">
                            <div class="caption">
                                <p>5.5' Optic AMOLED Screen, Snapdragon 821 processor, 6GB RAM, 64GB Internal memory,Rs 24,999/-</p>
                               <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href= "#" data-toggle="modal" data-target="#loginmodal"   class="btn btn-primary btn-block">Order Now!</a></p>
                                <?php
                                            } else {
                                           if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                           } else {
                                            ?>
                                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                            <?php
                                                }
                                            }
                                        ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php
        include 'includes/footer.php';
        ?>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>  
</html>