<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>
<div class="order__wrapper">
  
  <form action="/sendorder.php" method='post'>

    <div class="order__h1">
      <div></div>
      <h1>оформление заказа</h1>
      <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/giraffe.php");?>
    </div>
    <div class="order__data order__block">    
        <h2>Ваши данные</h2>
        <label for="order__data__lastname" >Фамилия</label>
        <input type="text" name='order__data__lastname' class='required'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        <p class='error__sign'>заполните это поле, пожалуйста</p>
        
        <label for="order__data__name">Имя</label>
        <input type="text" name='order__data__name' class='required'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        <p class='error__sign'>заполните это поле, пожалуйста</p>

        <label for="order__data__phone">Телефон</label>
        <input type="text" name='order__data__phone' class='required' id='lk__phone'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        <p class='error__sign'>заполните это поле, пожалуйста</p>

        <label for="order__data__email">Email</label>
        <input type="text" name='order__data__email' class='required'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        <p class='error__sign'>заполните это поле, пожалуйста</p>
  </div>



  <div class="delivery__type order__block">
  <h2> Доставка </h2>
    <div class="order__type__h2">
    <p class='active delivery__type__p'>Доставка</p> 
    <input class='delivery__type' name='delivery__type' value='delivery__delivery' type='radio' hidden></hidden>
      <div class='delivery__type__choosing'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrow.php");?> 
        <h3>Способ доставки</h3>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrow.php");?> 
      </div>
    <p class='active delivery__type__p'>Самовывоз</p> 
    <input class='delivery__type' name='delivery__type' value='delivery__takeout' type='radio' hidden></hidden>
    </div>        

    <div class="delivery__data">
      <div class="delivery__delivery order__block delivery__type__data">
        <label for="order__data__city">Город</label>
        <input type="text" name='order__data__city' class='required'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        <p class='error__sign'>заполните это поле, пожалуйста</p>

        <label for="order__data__street">Улица</label>
        <input type="text" name='order__data__street' class='required'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        <p class='error__sign'>заполните это поле, пожалуйста</p>

        <label for="order__data__index">Индекс</label>
        <input type="text" name='order__data__index' class='required'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        <p class='error__sign'>заполните это поле, пожалуйста</p>

        <label for="order__data__house">Дом</label>
        <input type="text" name='order__data__house' class='required'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        <p class='error__sign'>заполните это поле, пожалуйста</p>

        <label for="order__data__app">Квартира/офис</label>
        <input type="text" name='order__data__app' class='required'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        <p class='error__sign'>заполните это поле, пожалуйста</p>
        
        <label for="order__data__comment">Комментарий</label>
        <input type="text" name='order__data__comment'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
      </div>
      <div class="delivery__pickup order__block delivery__type__data">
        <p class='order__block__bold'>
          вы можете примерить и купить
          понравившиеся вам вещи в магазине:
        </p>
        <a href="">
          <p>Ikra владивосток</p>
          <p>светланская 5,</p>
          <p>11.00 -  20.00</p>
          <p>8 (908) 997-19-03</p>
        </a>
      </div>
    </div>
  </div>
    <div class="payment__type order__block">
        <h2>способ оплаты</h2>
        <div class="order__type__h2">
          <p class='active payment__type__p' id='pay__online'>на сайте</p>
          <input class='payment__type' name='payment__type' value='site__payment' type='radio' hidden></hidden>
            <div class='delivery__type__choosing'>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrow.php");?> 
              <h3>способ оплаты</h3>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrow.php");?> 
            </div>
          <p class='payment__type__p' id='pay__in__shop'>в магазине</p>
          <input class='payment__type' name='payment__type' value='shop__payment' type='radio' hidden></hidden>
    </div> 
</div>
<div id="payment__attention">
  <p>"у вас есть 1 сутки чтобы забрать заказ в магазине. Через сутки он будет отменён."</p>
</div>
    <div class="checking__order__block">
       <div class='checking__order__block__sign'>
       <div>
          <h2>Проверяем заказ</h2>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?> 
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?> 
       </div>
       <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/lamb.php");?> 
       </div>
       
        
        <div class="checking__order">
          <div class="order__item">
                <img src="/images/catalog/justborn_vl_1604882149_1.jpg">
                
                <p class='order__item__name'>Название товара номер один</p>
                
                <div class='order__item__size'>
                  <span>Размер:</span>
                  <span class='num'>56 см</span>
                </div>
                
                <div class='order__item__quantity'>
                  <span>Кол-во:</span>
                  <span class='num'>3</span>
                
                </div>
                <span class='order__price num'>1530Р</span>
          </div>  

          <div class="order__item">
                <img src="/images/catalog/justborn_vl_1604882149_1.jpg">
                
                <p class='order__item__name'>Название товара номер один</p>
                
                <div class='order__item__size'>
                  <span>Размер:</span>
                  <span class='num'>56 см</span>
                </div>
                
                <div class='order__item__quantity'>
                  <span>Кол-во:</span>
                  <span class='num'>3</span>
                
                </div>
                <span class='order__price num'>1530Р</span>
          </div>  

          <div class="order__item">
                <img src="/images/catalog/justborn_vl_1604882149_1.jpg">
                
                <p class='order__item__name'>Название товара номер один</p>
                
                <div class='order__item__size'>
                  <span>Размер:</span>
                  <span class='num'>56 см</span>
                </div>
                
                <div class='order__item__quantity'>
                  <span>Кол-во:</span>
                  <span class='num'>3</span>
                
                </div>
                <span class='order__price num'>1530Р</span>
          </div>  

          <div class="order__item">
                <img src="/images/catalog/justborn_vl_1604882149_1.jpg">
                
                <p class='order__item__name'>Название товара номер один</p>
                
                <div class='order__item__size'>
                  <span>Размер:</span>
                  <span class='num'>56 см</span>
                </div>
                
                <div class='order__item__quantity'>
                  <span>Кол-во:</span>
                  <span class='num'>3</span>
                
                </div>
                <span class='order__price num'>1530Р</span>
          </div>  

          <div class="order__item">
                <img src="/images/catalog/justborn_vl_1604882149_1.jpg">
                
                <p class='order__item__name'>Название товара номер один</p>
                
                <div class='order__item__size'>
                  <span>Размер:</span>
                  <span class='num'>56 см</span>
                </div>
                
                <div class='order__item__quantity'>
                  <span>Кол-во:</span>
                  <span class='num'>3</span>
                
                </div>
                <span class='order__price num'>1530Р</span>
          </div>  

          <div class="order__item">
                <img src="/images/catalog/justborn_vl_1604882149_1.jpg">
                
                <p class='order__item__name'>Название товара номер один</p>
                
                <div class='order__item__size'>
                  <span>Размер:</span>
                  <span class='num'>56 см</span>
                </div>
                
                <div class='order__item__quantity'>
                  <span>Кол-во:</span>
                  <span class='num'>3</span>
                
                </div>
                <span class='order__price num'>1530Р</span>
          </div>        
        </div>
    </div>

        <div class="basket__btn__div">
              <button id='to__basket' class='order__btn'>Оформить заказ</button>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/basketbtnborder.php")?>
        </div>
  </form>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>