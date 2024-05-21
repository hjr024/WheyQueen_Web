<?php

function component_logoutpreworkout(
    $pName,
    $pPrice,
    $pImg,
    $pID
){
    $element = "
    <div class=\"col-md-4 mt-2\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-img-actions\"> <img src=\"image/$pImg\" class=\"card-img img-fluid\" width=\"96\" height=\"350\" alt=\"\"> </div>
        </div>
        <div class=\"card-body bg-light text-center\">
            <div class=\"mb-2\">
                <h6 class=\"font-weight-semibold mb-2\"> <a href=\"#\" class=\"text-default mb-2\" data-abc=\"true\"><b>$pName</b></a> </h6> <a href=\"#\" class=\"text-muted\" data-abc=\"true\"></a>
            </div>
            <h3 class=\"mb-0 font-weight-semibold, red\">$pPrice</h3>
            <div> <i class=\"fa fa-star star\"></i> <i class=\"fa fa-star star\"></i> <i class=\"fa fa-star star\"></i> <i class=\"fa fa-star star\"></i> </div>
            <p><b>Quantity:</b>

                       
                              <input class=\"productQuantity\" id=\"milkteainput\" type=\"number\" value=\"0\" min=\"1\" max=\"10\" name='quan' id='quan'>
                              <input type=\"hidden\" name=\"pID\" id=\"pID\" value=\"$pID\">
            <div class=\"text-muted mb-3\">34 reviews</div> <button type=\"submit\" onclick=\"showAlert();return false;\" class=\"btn bg-cart\"><i class=\"fa fa-cart-plus mr-2\"></i> Add to cart</button>
        </div>
    </div>
</div>

    
    ";
    echo $element;
}


function component_loginpreworkout(
    $pName,
    $pPrice,
    $pImg,
    $pID
){
    $element = "
    <div class=\"col-md-4 mt-2\">
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"card-img-actions\"> <img src=\"image/$pImg\" class=\"card-img img-fluid\" width=\"96\" height=\"350\" alt=\"\"> </div>
        </div>
        <div class=\"card-body bg-light text-center\">
            <div class=\"mb-2\">
                <h6 class=\"font-weight-semibold mb-2\"> <a href=\"#\" class=\"text-default mb-2\" data-abc=\"true\"><b>$pName</b></a> </h6> <a href=\"#\" class=\"text-muted\" data-abc=\"true\"></a>
            </div>
            <h3 class=\"mb-0 font-weight-semibold, red\">$pPrice</h3>
            <div> <i class=\"fa fa-star star\"></i> <i class=\"fa fa-star star\"></i> <i class=\"fa fa-star star\"></i> <i class=\"fa fa-star star\"></i> </div>
            <p><b>Quantity:</b>

                  
            <form action=\"{$_SERVER['PHP_SELF']}\">
                                <input class=\"productQuantity\" id=\"milkteainput\" type=\"number\" value=\"0\" min=\"1\" max=\"10\" name='quan' id='quan'>
                                <input type=\"hidden\" name=\"pID\" id=\"pID\" value=\"$pID\">
                                <div class=\"text-muted mb-3\">34 reviews</div>
			                    <button type=\"submit\" class=\"btn bg-cart\" name=\"add\"><i class=\"fa fa-cart-plus mr-2\"></i>Add To Cart</button>
                        </form>
        </div>
    </div>
</div>

    
    ";
    echo $element;
}

function cartElement($pImg, $pName, $pPrice, $pSub, $pVal, $pKey){
    $element = "
    
    <!-- ITEMS ROW -->
    
    <tr style=\"border-bottom: 1px solid #faebd3;\">
        <th scope=\"row\" class=\"border-0\">
            <div class=\"p-2\">
                <img src=\"$pImg\" alt=\"\" width=\"120\" class=\"img-fluid rounded shadow-sm\">
                <div class=\"ml-3 d-inline-block align-middle\">
                    <h5 class=\"mb-0\"> <a href=\"#\" class=\"text-dark d-inline-block align-middle\">$pName</a></h5><span class=\"text-muted font-weight-normal font-italic d-block\">Seller: Whey Queen</span>
                </div>
            </div>
        </th>
        <td style=\"text-align: center;\"class=\"border-0 align-middle\"><strong>₱$pPrice.00</strong></td>
        <td style=\"text-align: center;\" class=\"border-0 align-middle\">
            <form style=\"text-align: center;\" action=\"cart.php\" method='GET'>
                <input class='w-25 p-0'type=\"number\" value='$pVal' min='0' max=\"20\" name='quan'>
                <input type='hidden' value='$pKey' name='pID'>
                <button type=\"submit\" style=\"background:none;padding:0px !important;border:none;outline:none;\">
                <i class=\"fas fa-plus-circle\"style=\"font-size: 20px;\"></i>
                </button>
            </form>
        </td>
        <td style=\"text-align: center;\"class=\"border-0 align-middle\"><strong>₱$pSub.00</strong></td>
        <td style=\"text-align: center;\" class=\"border-0 align-middle\">
        <form action=\"cart.php\" method='GET'>
            <input type=\"hidden\" value='0' min='0' max=\"0\" name='quan'>
            <button value='$pKey'style=\"background:none;padding:0px !important;border:none;outline:none;\"class=\"text-dark mx-4\" type=\"submit\" name=\"pID\">
                <i class=\"fa fa-trash\" style=\"font-size: 20px;\" ></i>
            </button>
        </form>
        </td>
        
    </tr>
    
    <!-- ENFD ITEMS ROW -->
    
    ";
    echo  $element;
  }

  function orderElement($pName,$pSub,$pVal){
    $element = "
    
    <div class=\"d-flex justify-content-between\"> <span class=\"font-weight-bold text-dark\">$pName(Qty: $pVal)</span> <span class=\"text-muted\">₱ $pSub.00</span> </div>
    <hr style=\"border-width:0; color: #f7b193;\">

    
    ";
    echo  $element;
  }