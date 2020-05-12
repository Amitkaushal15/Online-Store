<?php

function component($productname,$productprice,$productimg)
{
    $element =
    '<div class="col-md-3 col-sm-6">
             <form action="product.php" method="get">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#">
                            <img class="pic-1" src=$productimg>
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                            <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                        <span class="product-new-label">Sale</span>
                        <span class="product-discount-label">50%</span>
                    </div>
                    <ul class="rating">
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>  
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                    <div class="product-content">
                        <h3 class="title"><a href="#">$productname</a></h3>
                        <div class="price">$5.00
                            <span>$$productprice</span>
                        </div>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary add-to-cart">+ Add to Cart </a>
                    </div>
                </div>
                </form>
            </div>';

    echo $element;
}
