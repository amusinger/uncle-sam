<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\url;

$this->title = 'Menu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-menu">
  <h1><?= Html::encode($this->title) ?></h1>

     <div id="main-content" class="container">
    <h2 id="menu-categories-title" class="text-center">Menu Categories</h2>
    <div class="text-center">
      Best hamburgers in the city. Starting from $3. We have special discounts for students.
    </div>

    <section class="row">
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">

        <a href="">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="">
          <div class="category-tile">
            <img width="200" height="200" src="images/drink.jpg" alt="Drink">
            <span>Drinks</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="">
          <div class="category-tile">
            <img width="200" height="200" src="images/dinner.jpg" alt="Dinner">
            <span>Dinner</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="">
          <div class="category-tile">
            <img width="200" height="200" src="images/soup.jpg" alt="Soups">
            <span>Soups</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="">
          <div class="category-tile">
            <img width="200" height="200" src="images/pizza.jpg" alt="Pizza">
            <span>Pizza</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="">
          <div class="category-tile">
            <img width="200" height="200" src="images/dessert.jpg" alt="Dessert">
            <span>Dessert</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="">
          <div class="category-tile">
            <img width="200" height="200" src="images/menu.jpg" alt="Lunch">
            <span>Lunch</span>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6 col-xxs-12">
        <a href="single.php">
          <div class="category-tile">
            <img width="200" height="200" src="images/discount.png" alt="Discount">
            <span>Discount</span>
          </div>
        </a>
      </div>
      
    </section>

  </div><!-- End of #main-content -->

<!-- 
    <code><?= __FILE__ ?></code> -->
</div>
