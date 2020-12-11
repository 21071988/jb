<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>
<div class="item__wrapper">
<div class='breadcrumbs'>
  <a href="/catalog">каталог</a>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/smallbear.php");?>
  <a href="">распашонки</a>

</div>
  <div class="item">
    <div class="item__imgs" id='item__imgs'>
    <a data-fancybox="gallery" href="/images/catalog/2.jpg"><img src="/images/catalog/justborn_vl_1604483192_1.jpg"></a>
    <!-- <a data-fancybox="gallery" href="/images/catalog/3.jpg"><img src="/images/catalog/justborn_vl_1604882149_1.jpg"></a>
    <a data-fancybox="gallery" href="/images/catalog/1.jpg"><img src="/images/catalog/justborn_vl_1603850319_1.jpg.jpg"></a>
    <a data-fancybox="gallery" href="/images/catalog/2.jpg"><img src="/images/catalog/justborn_vl_1604483192_1.jpg"></a>
    <a data-fancybox="gallery" href="/images/catalog/3.jpg"><img src="/images/catalog/justborn_vl_1604882149_1.jpg"></a>
    <a data-fancybox="gallery" href="/images/catalog/1.jpg"><img src="/images/catalog/justborn_vl_1603850319_1.jpg.jpg"></a>
    <a data-fancybox="gallery" href="/images/catalog/2.jpg"><img src="/images/catalog/justborn_vl_1604483192_1.jpg"></a>
    <a data-fancybox="gallery" href="/images/catalog/3.jpg"><img src="/images/catalog/justborn_vl_1604882149_1.jpg"></a> -->
        
    </div>
    <div class="item__props">
        <h1 class="item__name" >
        Baboo прорезыватель для зубов с охлаждающим наполнителем ягоды
        </h1>
        <div class="articul__and__like">
          <p>
            <span class='item__art'>артикул</span><span class='grey num item__articule'>12387</span>
          </p>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/catalogitemheart.php");?>
          </div>
        <span class="item__price num">5&nbsp;500Р</span>
        <form action="index.php" method='GET'>
        <div class="flex size__choosing__wrapper">
            <span href="" class='choose__size__link'>Выбрать размер:</span>       
            <div class="size__choosing__div">
              <label class='size__choosing__label size__choosing__label__first active' for="xs">
                <input type="radio" id="xs" name='size' value='xs' checked> 56 см / 1 месяц</input>
              </label>
              <svg xmlns="http://www.w3.org/2000/svg" class='item__size__div__back' viewBox="0 0 263.35 79.81"><defs><style>.cls-1{fill:#66c3d0;}</style></defs><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path class="cls-1" d="M2.15,31.13c-4.67,13.45-1.32,29.24,6,38,11.19,13.35,29.85,8.17,73,7,9.6-.26,44.06,1,113,3,40.76,1.2,55.95,2.08,64-9,7.68-10.56,6.44-28.62-1-41-5.62-9.37-14-14.11-20-17-24.65-11.83-44.74-9.48-88-10-26.88-.32-24.29-1.44-61-2-39.53-.6-58,.46-73,13C6,20.8,3,28.76,2.15,31.13Z"/></g></g></svg>
           </div>
        </div>

           <div class="size__choosing__hidden__block">
            <label class='size__choosing__label' for="s">
              <input type="radio" id="s" name='size' value='s'> 60 см / 2 месяц
            </label>
                    
            <label class='size__choosing__label' for="m">
              <input type="radio" id="m" name='size' value='m'> 66 см / 3 месяц
            </label>
          </div>

            <div class="item__quantity">
              <span class='thefont lh'>Кол-во:</span>
                <div class="item__quantity__div">
                  <svg class='item__quantity__div__back' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78.29 64.25"><defs><style>.cls-1{fill:#66c3d0;}</style></defs><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path class="cls-1" d="M30.84.94a43.48,43.48,0,0,1,18,0,35.41,35.41,0,0,1,16,7,34.56,34.56,0,0,1,11,17c1.25,3.94,5.33,16.82-1,27-8.64,13.88-30.27,12.54-39,12-9.4-.58-19.33-1.2-27-9-9.62-9.78-11.55-26.68-5-37,2.91-4.59,7.26-7.5,11-10A44.62,44.62,0,0,1,30.84.94Z"/></g></g></svg>
                  <div class="rel">
                    <span id='minus'>-</span>
                    <span id='item__quantity'>1</span>
                    <input id='item__quantity__input' name='itemQuantity' value='1' hidden></hidden>
                    <span id='plus'>+</span>
                </div>
              </div>
            </div>
            <div id='which__size'>
              <p>Подобрать размер</p>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/ruler.php");?>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/giraffe.php");?>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?>
            </div>

            <div class="item__color">
              <span>Цвет:</span>
              <span id='item__color'>Фиолетовый</span>
            </div>

            <div class="item__material">
              <span>Материал:</span>
              <span>Полиэстр</span>
            </div>

            <div class="item__description">
              эту панаму можно носить
              в дождливую погоду
              отлично сочетается с плащами
              и туманным владивостоком
            </div>
            
            <p class='read__about'>
              <a href="#" class='read__about'>Почитать про условия доставки и оплаты </a>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?>
            </p>
            <div class="basket__btn__div">
              <button id='to__basket'>В корзину</button>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/basketbtnborder.php")?>
            </div>

          </form>

        

       

        


        <!-- <h3 class='other__colors'>Другие цвета</h3>
        <div class="item__brother">
          <div  class='color__trigger' data-color='red'>
          
            <img src="/images/catalog/1.jpg" alt="">
            <span class='color__trigger'>Коричневый</span>
     
          </div>
          <div  class='color__trigger' data-color='green'>
          
            <img src="/images/catalog/2.jpg" alt="">
            <span'>зеленый</span>
        
          </div>
        </div> -->

        <!-- <div class="info">
          <div class="info__header">
              <a class="nav-link active">Оплата</a>
              <a class="nav-link">Доставка</a>
              <a class="nav-link">Возврат</a>
              <a class="nav-link">Возврат</a>
              </div>

          <div class="info__text">
            <p id="text1">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod vero repudiandae animi quibusdam dicta blanditiis nobis laborum quos, soluta doloribus pariatur debitis placeat repellendus ipsam voluptatum officia sint asperiores iure obcaecati nostrum rem eos architecto? Eligendi explicabo cum quisquam ducimus.</p>
            <p id="text2">
            Второооооой consectetur adipisicing elit. Quod vero repudiandae animi quibusdam dicta blanditiis nobis laborum quos, soluta doloribus pariatur debitis placeat repellendus ipsam voluptatum officia sint asperiores iure obcaecati nostrum rem eos architecto? Eligendi explicabo cum quisquam ducimus.</p>
            <p id="text3">
            Это третий текст в списке.</p>
          </div>
        </div> 
            </div>-->
  </div>

  <!-- <h2 class='interesting'>с этим товаром смотрят</h2>
<div class="interesting__slider__full">

  <svg class='mpl mpli' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.09 49.41"><defs><style>.cls-1{fill:none;stroke:#13100d;stroke-miterlimit:10;stroke-width:3px;}</style></defs><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><polyline class="cls-1" points="0.95 1.16 30.67 25.45 0.95 48.22"/></g></g></svg>

  <div class="interesting__slider">
  <a href="/catalog/item.php">
      <div class="catalog__item">
        <div class='img__wrap'>
          <img src="/images/catalog/1.jpg" alt="">
        </div>
        <p>Название товара номер один</p>
        <span class='sale__price'>9&nbsp;185Р</span>
      </div>
      </a>

      <a href="/catalog/item.php">
      <div class="catalog__item">
        <div class='img__wrap'>
          <img src="/images/catalog/1.jpg" alt="">
        </div>
        <p>Название товара номер один</p>
        <span class='sale__price'>9&nbsp;185Р</span>
      </div>
      </a>

      <a href="/catalog/item.php">
      <div class="catalog__item">
        <div class='img__wrap'>
          <img src="/images/catalog/1.jpg" alt="">
        </div>
        <p>Название товара номер один</p>
        <span class='sale__price'>9&nbsp;185Р</span>
      </div>
      </a>

      <a href="/catalog/item.php">
      <div class="catalog__item">
        <div class='img__wrap'>
          <img src="/images/catalog/1.jpg" alt="">
        </div>
        <p>Название товара номер один</p>
        <span class='sale__price'>9&nbsp;185Р</span>
      </div>
      </a>

      <a href="/catalog/item.php">
      <div class="catalog__item">
        <div class='img__wrap'>
          <img src="/images/catalog/1.jpg" alt="">
        </div>
        <p>Название товара номер один</p>
        <span class='sale__price'>9&nbsp;185Р</span>
      </div>
      </a>    
    </div>
        
    <svg class='mpr mpri' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.09 49.41"><defs><style>.cls-1{fill:none;stroke:#13100d;stroke-miterlimit:10;stroke-width:3px;}</style></defs><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><polyline class="cls-1" points="0.95 1.16 30.67 25.45 0.95 48.22"/></g></g></svg>
</div>

<h2 class='checked__earlier__sign'>вы смотрели ранее</h2>
<div class="earlier__slider__full">

<svg class='mpl mple' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.09 49.41"><defs><style>.cls-1{fill:none;stroke:#13100d;stroke-miterlimit:10;stroke-width:3px;}</style></defs><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><polyline class="cls-1" points="0.95 1.16 30.67 25.45 0.95 48.22"/></g></g></svg>

<div class="earlier__slider">
<a href="/catalog/item.php">
      <div class="catalog__item">
        <div class='img__wrap'>
          <img src="/images/catalog/1.jpg" alt="">
        </div>
        <p>Название товара номер один</p>
        <span class='sale__price'>9&nbsp;185Р</span>
      </div>
      </a>

      <a href="/catalog/item.php">
      <div class="catalog__item">
        <div class='img__wrap'>
          <img src="/images/catalog/1.jpg" alt="">
        </div>
        <p>Название товара номер один</p>
        <span class='sale__price'>9&nbsp;185Р</span>
      </div>
      </a>

      <a href="/catalog/item.php">
      <div class="catalog__item">
        <div class='img__wrap'>
          <img src="/images/catalog/1.jpg" alt="">
        </div>
        <p>Название товара номер один</p>
        <span class='sale__price'>9&nbsp;185Р</span>
      </div>
      </a>

      <a href="/catalog/item.php">
      <div class="catalog__item">
        <div class='img__wrap'>
          <img src="/images/catalog/1.jpg" alt="">
        </div>
        <p>Название товара номер один</p>
        <span class='sale__price'>9&nbsp;185Р</span>
      </div>
      </a>

      <a href="/catalog/item.php">
      <div class="catalog__item">
        <div class='img__wrap'>
          <img src="/images/catalog/1.jpg" alt="">
        </div>
        <p>Название товара номер один</p>
        <span class='sale__price'>9&nbsp;185Р</span>
      </div>
      </a>
  </div>
      
  <svg class='mpr mpre' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.09 49.41"><defs><style>.cls-1{fill:none;stroke:#13100d;stroke-miterlimit:10;stroke-width:3px;}</style></defs><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><polyline class="cls-1" points="0.95 1.16 30.67 25.45 0.95 48.22"/></g></g></svg>
</div> -->

</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>








