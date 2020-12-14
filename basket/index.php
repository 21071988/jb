<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>
<div class="basket__wrapper">

    <div class="bakset__h1">
      <h1>Корзина</h1>
      <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/basketbasket.php");?>
    </div>
    <div class="basket__items">
      <div>
        <div class="bakset__items__names">
          <div class="half">
            <span>Что берем</span>
          </div>
          <div class="half second__half">
            <div>
              <span>Кол-во</span>
            </div>
            <div class="big__half"> 
              <span>Всего</span>
            </div>
            <div>
              <span>Удалить</span>
            </div>
          </div>
        </div>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
      </div>

      <div class="bakset__items__check">
      <div class="basket__item">
          <div class="half">
            <span class="basket__item__name">Распашонка на мальчика c очень длинным названием</span>
            <img src="/images/catalog/justborn_vl_1604483192_1.jpg" alt="">
          </div>
          <div class="half second__half">
                <div class="item__quantity__div">
                        <span class='minus'>-</span>
                        <span class='item__quantity' class='num'>1</span>
                        <input class='item__quantity__input' name='itemQuantity' value='1' hidden></hidden>
                        <span class='plus'>+</span>
                </div>
                <div class='big__half'>
                  <span class="num item__sum" data-price='1530'>1530Р</span>
                </div>
                <div>
                  <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/basketdeletebtn.php");?>
                </div>
          </div>
        </div>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>

        <div class="basket__item">
          <div class="half">
            <span class="basket__item__name">Распашонка на мальчика c очень длинным названием</span>
            <img src="/images/catalog/justborn_vl_1604483192_1.jpg" alt="">
          </div>
          <div class="half second__half">
                <div class="item__quantity__div">
                        <span class='minus'>-</span>
                        <span class='item__quantity' class='num'>1</span>
                        <input class='item__quantity__input' name='itemQuantity' value='1' hidden></hidden>
                        <span class='plus'>+</span>
                </div>
                <div class='big__half'>
                  <span class="num item__sum" data-price='1530'>1530Р</span>
                </div>
                <div>
                  <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/basketdeletebtn.php");?>
                </div>
          </div>
        </div>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>

        <div class="basket__item">
          <div class="half">
            <span class="basket__item__name">Распашонка на мальчика c очень длинным названием</span>
            <img src="/images/catalog/justborn_vl_1604483192_1.jpg" alt="">
          </div>
          <div class="half second__half">
                <div class="item__quantity__div">
                        <span class='minus'>-</span>
                        <span class='item__quantity' class='num'>1</span>
                        <input class='item__quantity__input' name='itemQuantity' value='1' hidden></hidden>
                        <span class='plus'>+</span>
                </div>
                <div class='big__half'>
                  <span class="num item__sum" data-price='1530'>1530Р</span>
                </div>
                <div>
                  <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/basketdeletebtn.php");?>
                </div>
          </div>
        </div>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
    </div>

    </div>
        
    
    <div class="basket__total">
    <form action="">
        <div class='promo__div'>
            <input type="text" name='promocodeValue' id='promocodeValue' placeholder='Введите промокод'>
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?>
            <button id='insert__promocode' type='submit'>
            ввести промокод
          </button>
        </div>
      </form>
      <div class="total__div">
        <div class="total">
          <span>Итого:&nbsp;</span>
          <span data-currentsum= '1000' id='currentSum' class='num'>1000Р</span> 
        </div>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?>
      </div> 
    </div> 
    

    


    

  
</div>




<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>








