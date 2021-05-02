<?php
include("header.php");
require("conn.php");

session_start();
$product_ids=array();
session_destroy();
// check if add_To_cart button has been submitted
if(filter_input(INPUT_POST,'add_to_cart'))
 {
    if(isset($_SESSION['shopping_cart ']))
    {
        // keep track of the products in the shopping cart
        $count=count($_SESSION['Shopping_cart']);
        //create sequential array for matching arrays keys to product id's
        $product_ids = array_column($_SESSION['shopping_cart '],'id');
//        pre_r($product_ids);

        if (!in_array(filter_input(INPUT_GET,'id'),$product_ids))
        {

            $_SESSION['shopping_cart '][$count] = array(
                'id' =>filter_input(INPUT_GET,'id'),
                'name' =>filter_input(INPUT_POST,'name'),
                'price' =>filter_input(INPUT_POST,'price'),
                'quantity'=>filter_input(INPUT_POST,'quantity')
            );


        }
     else{
            // product already exists  increase quantity
            //match array key to id of the product being added to the cart
            for ($i=0;$i< count($product_ids);$i++)
            {
                if ($product_ids[$i]==filter_input(INPUT_GET,'id')){
                    //add item quantity to the existing product in the array
                    $_SESSION['shopping_cart '][$i]['quantity'] +=filter_input(INPUT_POST,'quantity');

                }

            }


        }

      }else
          { //if the shopping cart doesnt exist,create first product with array key 0
            //create array using submitted form data,start from key 0 and fill it with d ata
             $_SESSION['shopping_cart '][0] = array(
                'id' =>filter_input(INPUT_GET,'id'),
                 'name' =>filter_input(INPUT_POST,'name'),
                 'price' =>filter_input(INPUT_POST,'price'),
                 'quantity'=>filter_input(INPUT_POST,'quantity')
        );
             }




 }
//pre_r($_SESSION);
function pre_r($array){
    echo'<pre>';
    print_r($array);
    echo '</pre>';

}







$sql="select * from items LEFT  JOIN category ON i_category = c_id";
$query=mysqli_query($conn,$sql);
$results_per_page = 9;

$number_of_results=mysqli_num_rows($query);
// defining number of pages
$number_of_pages = ceil($number_of_results / $results_per_page);
// determine which page number the visitor is currently on
if (!isset($_GET['page'])) {
    $page = 1;
} else {

    $page = $_GET['page'];
}
//sql limit of the starting  number for the results on the display image

$this_page_first_result = ($page - 1) * $results_per_page;


$sql="select * from items LEFT  JOIN category ON i_category = c_id  LIMIT " .$this_page_first_result . ',' . $results_per_page;
$query=mysqli_query($conn,$sql)
?>


<div class="body">
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One -->
                <div class="carousel-item active" style="background-image: url('img/bg1.jpeg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Cheap Furniture Stores </h3>
                        <p>where we combine the quality of name brand furniture with the pricing of discount warehouse shopping.</p>
                    </div>
                </div>
                <!-- Slide Two -->
                <div class="carousel-item" style="background-image: url('img/bg2.jpeg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Best Sellers</h3>
                        <p>This is a best website by Furniture online.</p>
                    </div>
                </div>
                <!-- Slide Three -->
                <div class="carousel-item" style="background-image: url('img/bg3.jpeg')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Save Money</h3>
                        <p>we have the best discount.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Prduct -->
        <h1 class="my-4">Welcome.</h1>


        <p><?=$number_of_results?> Products</p>
        <!-- start Product Iteam -->
        <div class="row">
            <!-- iteam 1-->

            <?php
            while($result=mysqli_fetch_array($query))
            {?>
                <link rel="stylesheet" href="css/modern-business.css">
                <div class='col-lg-4 col-sm-6 portfolio-item'>

                    <form method="post" action="index.php?action =add&id=<?=$result['i_id']?>">
                        <div class='card h-80'> <img class='card-img-top' src='img/<?=$result['i_img'] ?>' alt=''></a>
                            <div class='card-body'>
                                <h5 class='card-title'>
                                </h5>
                                <p class='card-text' >Name : <span class='card-Category'><?=$result['i_name']?></span> </p>
                                <p class='card-text' >Category : <span class='card-Category'><?=$result['i_category']?></span> </p>
                                <p class='card-text'>Price : <span class='card-price'><?= number_format($result['i_price'],2);?></span> </p>

                                <input type="hidden" name="price" value="<?=$result['i_price']?> ">
                                <input type="hidden" name="name" value="<?=$result['i_name']?> ">

                                <input type="number" name="quantity" value="1" >
                                <input type="submit" name="add_to_cart" style="margin-top: 5px" class="btn btn-lg btn-success btn-block" value="BookItem">
                            </div>
                        </div>
                    </form>
                </div>
                <?php
            }
            // displaying the links to the pages
            for ($page = 1; $page <= $number_of_pages; $page++) {

                echo '
<div>
</div>
<ul  class="pagination"><li><a  href="index.php?page=' . $page . '">' . $page . '</a></li></ul>';


            }

            ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
<div>
    <h4 align="center">order details:</h4>
    <table class="tbl-cart" cellpadding="10" cellspacing="1">
        <tbody>
        <tr>
            <th style="text-align:left;">Name</th>
            <th style="text-align:right;" width="5%">Quantity</th>
            <th style="text-align:right;" width="10%">Price<br>( in $)</th>
            <th style="text-align:right;" width="10%">Total<br>( in $)</th>

        </tr>
        <?php
        if (!empty($_SESSION['shopping_cart '])):
            $total=0;
            $sub_total=0;
            foreach ($_SESSION['shopping_cart '] as $key =>$product):
        ?>
        <tr>

            <td><?=$product['name']?></td>
            <td><?=$product['quantity']?></td>
            <td style="text-align:right;"><?= $product['price'];?></td>
            <?php
            error_reporting(0);

            $sub_total= $sub_total+$product['price']*$product['quantity'];
            ?>

            <td style="text-align:right;"><?=$sub_total;?></td>
        </tr>
        <?php
                error_reporting(0);

                $total=$total +($product['quantity'] )*($product['price']);
        endforeach;
        ?>

        <tr>
            <td colspan="2" align="right">Total:</td>
            <td align="right">1</td>
            <td align="right" colspan="2"><strong><?= number_format($total,2);?></strong></td>
            <td></td>
        </tr>


        </tbody>

        <?php
        endif;
        ?>
    </table>
<p align="right">
    <a  href="payment.php"> <button class="btn btn-success"> pay </button></a>

</p>





</div>
<?php
include("footer.php");
?>

