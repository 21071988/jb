<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>
<div class="item__wrapper mb">
<div class="about__delivery__popup">
<div class='info__wrapper'>
    <div class="info__menu">
          <a class="nav-link active">Оплата</a>
          <a class="nav-link">Доставка</a>
          <a class="nav-link">Возврат</a>
          <a class="nav-link">Оферта</a>
          <a class="nav-link">Уход</a>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?>
    </div>
    <div class="info__text">
      <p id="text1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod vero repudiandae animi quibusdam dicta blanditiis nobis laborum quos, soluta doloribus pariatur debitis placeat repellendus ipsam voluptatum officia sint asperiores iure obcaecati nostrum rem eos architecto? Eligendi explicabo cum quisquam ducimus lorem</p>
      <p id="text2">Второооооой consectetur adipisicing elit. Quod vero repudiandae animi quibusdam dicta blanditiis nobis laborum quos, soluta doloribus pariatur debitis placeat repellendus ipsam voluptatum officia sint asperiores iure obcaecati nostrum rem eos architecto? Eligendi explicabo cum quisquam ducimus.</p>
      <p id="text3">Это третий текст в списке.</p>
      <p id="text4">Это четвертый текст в списке.</p>
      <p id="text5">Этфывафвыао четвертый текст в списке.</p>
    </div>
  </div>
</div>


<div class='breadcrumbs'>
  <a href="/catalog">каталог</a>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/smallbear.php");?>
  <a href="">распашонки</a>

</div>
  <div class="item">
    
  <div class='block'>
  <div class='slider-for-item-card'>
        <img id='test' src="/images/catalog/IMG_5656-01.jpg">
        <img src="/images/catalog/IMG_5618-01.jpg">
        <img src="/images/catalog/IMG_5629-01.jpg">
        <img src="/images/catalog/IMG_5631-01.jpg">
        <img src="/images/catalog/IMG_5644-01.jpg">
  </div>
  <div class="item__slider__arrows also__item__slider__arrows">
     <div class="prev__item__card">
     <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrowslider.php");?>
     </div>
     <div class="next__item__card">
     <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrowslider.php");?>
     </div>
  </div>
  <div class='slider-nav-item-card'>
        <img src="/images/catalog/IMG_5656-01.jpg">
        <img src="/images/catalog/IMG_5618-01.jpg">
        <img src="/images/catalog/IMG_5629-01.jpg">
        <img src="/images/catalog/IMG_5631-01.jpg">
        <img src="/images/catalog/IMG_5644-01.jpg">
  </div>
  <div class="item__slider__arrows">
     <div class="prev__item__card">
     <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrowslider.php");?>
     </div>
     <div class="next__item__card">
     <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrowslider.php");?>
     </div>
  </div>
</div>
    <div class="item__props">
        <h1 class="item__name" >
        Baboo прорезыватель для зубов с охлаждающим наполнителем ягоды
        </h1>
        <div class="articul__and__like">
          <p>
            <span class='item__art'>артикул</span><span class='grey num item__articule'>12387</span>
          </p>
          <div class="rel show__heart">
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/heart.php");?>
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/dreambox.php");?>
          </div>
          </div>
        <span class="item__price num">5&nbsp;500Р</span>
        <form action="index.php" method='POST' class='js-add2cart'>
        <div class="flex size__choosing__wrapper">
            <span href="" class='choose__size__link'>Выбрать размер:</span>       
            <div class="size__choosing__div">
              <div class="current__size">
                <p class='current__size__text'>56см / 1 месяц</p>
                <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/ad.php");?>
                <svg xmlns="http://www.w3.org/2000/svg" class='item__size__div__back' viewBox="0 0 263.35 79.81"><defs></defs><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path class="cls-1" d="M2.15,31.13c-4.67,13.45-1.32,29.24,6,38,11.19,13.35,29.85,8.17,73,7,9.6-.26,44.06,1,113,3,40.76,1.2,55.95,2.08,64-9,7.68-10.56,6.44-28.62-1-41-5.62-9.37-14-14.11-20-17-24.65-11.83-44.74-9.48-88-10-26.88-.32-24.29-1.44-61-2-39.53-.6-58,.46-73,13C6,20.8,3,28.76,2.15,31.13Z"/></g></g></svg>
              </div>
              <div class="other__sizes">
              <label class='size__choosing__label active' for="xs">
                  <input type="radio" id="xs" name='size' value='56 см / 1 месяц' checked> 56 см / 1 месяц</input>
                </label>
              <label class='size__choosing__label' for="m">
                <input type="radio" id="m" name='size' value='57 см / 1 месяц' checked> 57 см / 1 месяц</input>
              </label>
              <label class='size__choosing__label' for="l">
                <input type="radio" id="l" name='size' value='58 см / 1 месяц' checked> 58 см / 1 месяц</input>
              </label>
              </div>
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
                  <svg class='item__quantity__div__back' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 78.29 64.25"><defs></defs><g id="Слой_2" data-name="Слой 2"><g id="Слой_1-2" data-name="Слой 1"><path class="cls-1" d="M30.84.94a43.48,43.48,0,0,1,18,0,35.41,35.41,0,0,1,16,7,34.56,34.56,0,0,1,11,17c1.25,3.94,5.33,16.82-1,27-8.64,13.88-30.27,12.54-39,12-9.4-.58-19.33-1.2-27-9-9.62-9.78-11.55-26.68-5-37,2.91-4.59,7.26-7.5,11-10A44.62,44.62,0,0,1,30.84.94Z"/></g></g></svg>
                  <div class="rel flex">
                    <span class='minus'>-</span>
                    <span class='item__quantity'>1</span>
                    <input id='item__quantity__input' name='itemQuantity' value='1' hidden></hidden>
                    <span class='plus'>+</span>
                </div>
              </div>
            </div>
            <a id='which__size' href="#what__size__should">
              <p>Подобрать размер</p>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/ruler.php");?>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/giraffe.php");?>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?>
            </a>

            <div class="item__color">
              <span class='item__color__n'>Цвет:</span>
              <span id='item__color'>Фиолетовый</span>
            </div>

            <div class="item__material">
              <span class='item__color__n'>Материал:</span>
              <span>Полиэстр</span>
            </div>

            <div class="item__description">
              эту панаму можно носить
              в дождливую погоду
              отлично сочетается с плащами
              и туманным владивостоком
            </div>
            
            <div class="about__block flex">
              <p class='read__about'>
                Почитать про условия доставки и оплаты
                <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?>
              </p>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/whale.php");?>
              </div>
            <div class="basket__btn__div item__basket__btn">
              <button id='to__basket'>В корзину</button>
              <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/basketbtnborder.php")?>
            </div>

          </form>
        </div>
      </div>

<div id="what__size__should">
<h2>Размерный ряд</h2>
  <div class="all__sizes">
    <div class="all__sizes__tabs">
      <p>Боди, коконы</p>
      <p>Комбинезоны</p>
      <p>Майки, футболки,<br> распашонки</p>
      <p>Штаны, леггинсы,<br> ползунки</p>
    </div>
    <div class="all__sizes__blocks">
      <div class="all__sizes__1">
        <div class='some__size'>
          <div class="two__parts">
            <img src="/images/sizes/боди длинный рукав.svg" alt="">
          </div>
          <div class="three__parts">
          <h3>Боди с длинным рукавом</h3>
          <table>
          <tr>
            <td>Размер (см)</td>
            <td>56-62</td>
            <td>62-68</td>
            <td>68-74</td>
            <td>74-80</td>
            <td>68-74</td>
            <td>74-80</td>
          </tr>
          <tr>
            <td>Возраст</td>
            <td>1-3</td>
            <td>3-6</td>
            <td>6-9</td>
            <td>9-12</td>
            <td>12-15</td>
            <td>15-18</td>
          </tr>
          <tr>
            <td>A</td>
            <td>32</td>
            <td>32</td>
            <td>98</td>
            <td>23</td>
            <td>48</td>
            <td>82</td>
          </tr>
          <tr>
            <td>B</td>
            <td>32</td>
            <td>32</td>
            <td>98</td>
            <td>23</td>
            <td>48</td>
            <td>82</td>
          </tr>
          <tr>
            <td>C</td>
            <td>32</td>
            <td>32</td>
            <td>98</td>
            <td>23</td>
            <td>48</td>
            <td>82</td>
          </tr>
          <tr>
            <td>D</td>
            <td>32</td>
            <td>32</td>
            <td>98</td>
            <td>23</td>
            <td>48</td>
            <td>82</td>
          </tr>
          </table>
        </div>
      </div>

      <div class='some__size'>
          <div class="two__parts">
            <img src="/images/sizes/боди длинный рукав.svg" alt="">
          </div>
          <div class="three__parts">
          <h3>Боди с длинным рукавом</h3>
          <table>
          <tr>
            <td>Размер (см)</td>
            <td>56-62</td>
            <td>62-68</td>
            <td>68-74</td>
            <td>74-80</td>
            <td>68-74</td>
            <td>74-80</td>
          </tr>
          <tr>
            <td>Возраст</td>
            <td>1-3</td>
            <td>3-6</td>
            <td>6-9</td>
            <td>9-12</td>
            <td>12-15</td>
            <td>15-18</td>
          </tr>
          <tr>
            <td>A</td>
            <td>32</td>
            <td>32</td>
            <td>98</td>
            <td>23</td>
            <td>48</td>
            <td>82</td>
          </tr>
          <tr>
            <td>B</td>
            <td>32</td>
            <td>32</td>
            <td>98</td>
            <td>23</td>
            <td>48</td>
            <td>82</td>
          </tr>
          <tr>
            <td>C</td>
            <td>32</td>
            <td>32</td>
            <td>98</td>
            <td>23</td>
            <td>48</td>
            <td>82</td>
          </tr>
          <tr>
            <td>D</td>
            <td>32</td>
            <td>32</td>
            <td>98</td>
            <td>23</td>
            <td>48</td>
            <td>82</td>
          </tr>
          </table>
        </div>
      </div>
    </div>

      
      <div class="all__sizes__1">
        Блок 2
      </div>
      <div class="all__sizes__1">
        Блок 3
      </div>
      <div class="all__sizes__1">
        Блок 4
      </div>
    </div>
  </div>
</div>


<div class="interesting__sign">
  <h2 class='interesting'>С ЭТИМ ТОВАРОМ МОЖЕТ ПОДОЙТИ:</h2>
  <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/giraffe.php")?>

</div>
<div class="interesting__slider__full">
    <div class="interesting__arrow__left ia">
      <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrowslider.php")?>
    </div>
    <div class="interesting__arrow__right ia">
      <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrowslider.php")?>
    </div>
  <div class="interesting__slider">

  <a href="/catalog/item.php" class='c1'>
        <div class="catalog__item">
          <div class='img__wrap'>
            <img src="/images/catalog/justborn_vl_1603850319_1.jpg" alt="">
            <!-- <div class="sale__sign">25%</div> -->
          </div>
          <p  class='catalog__item__name'>Название товара номер один очень длинное и не помещает на одну строку</p>
          <div class="catalog__item__price__and__like">
            <div>
              <span class=' num catalog__item__price'>2&nbsp;384Р</span>
              <!-- <span class='sale__price'>9&nbsp;185Р</span> -->
            </div>
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/heart.php");?>
          </div>
        </div>
      </a>
      <a href="/catalog/item.php" class='c1'>
        <div class="catalog__item">
          <div class='img__wrap'>
            <img src="/images/catalog/justborn_vl_1603850319_1.jpg" alt="">
            <!-- <div class="sale__sign">25%</div> -->
          </div>
          <p  class='catalog__item__name'>Название товара номер один очень длинное и не помещает на одну строку</p>
          <div class="catalog__item__price__and__like">
            <div>
              <span class=' num catalog__item__price'>2&nbsp;384Р</span>
              <!-- <span class='sale__price'>9&nbsp;185Р</span> -->
            </div>
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/heart.php");?>
          </div>
        </div>
      </a>
      <a href="/catalog/item.php" class='c1'>
        <div class="catalog__item">
          <div class='img__wrap'>
            <img src="/images/catalog/justborn_vl_1603850319_1.jpg" alt="">
            <!-- <div class="sale__sign">25%</div> -->
          </div>
          <p  class='catalog__item__name'>Название товара номер один очень длинное и не помещает на одну строку</p>
          <div class="catalog__item__price__and__like">
            <div>
              <span class=' num catalog__item__price'>2&nbsp;384Р</span>
              <!-- <span class='sale__price'>9&nbsp;185Р</span> -->
            </div>
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/heart.php");?>
          </div>
        </div>
      </a>
      <a href="/catalog/item.php" class='c1'>
        <div class="catalog__item">
          <div class='img__wrap'>
            <img src="/images/catalog/justborn_vl_1603850319_1.jpg" alt="">
            <!-- <div class="sale__sign">25%</div> -->
          </div>
          <p  class='catalog__item__name'>Название товара номер один очень длинное и не помещает на одну строку</p>
          <div class="catalog__item__price__and__like">
            <div>
              <span class=' num catalog__item__price'>2&nbsp;384Р</span>
              <!-- <span class='sale__price'>9&nbsp;185Р</span> -->
            </div>
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/heart.php");?>
          </div>
        </div>
      </a>

  </div>
  
</div>

<div class="interesting__sign">
  <h2 class='interesting'>ВЫ СМОТРЕЛИ РАНЬШЕ:</h2>
  <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/circus__elephant.php")?>

</div>
<div class="interesting__slider__full">
    <div class="earlier__arrow__left ea">
      <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrowslider.php")?>
    </div>
    <div class="earlier__arrow__right ea">
      <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/arrowslider.php")?>
    </div>
  <div class="earlier__slider">

  <a href="/catalog/item.php" class='c1'>
        <div class="catalog__item">
          <div class='img__wrap'>
            <img src="/images/catalog/justborn_vl_1603850319_1.jpg" alt="">
            <!-- <div class="sale__sign">25%</div> -->
          </div>
          <p  class='catalog__item__name'>Название товара номер один очень длинное и не помещает на одну строку</p>
          <div class="catalog__item__price__and__like">
            <div>
              <span class=' num catalog__item__price'>2&nbsp;384Р</span>
              <!-- <span class='sale__price'>9&nbsp;185Р</span> -->
            </div>
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/heart.php");?>
          </div>
        </div>
      </a>
      <a href="/catalog/item.php" class='c1'>
        <div class="catalog__item">
          <div class='img__wrap'>
            <img src="/images/catalog/justborn_vl_1603850319_1.jpg" alt="">
            <!-- <div class="sale__sign">25%</div> -->
          </div>
          <p  class='catalog__item__name'>Название товара номер один очень длинное и не помещает на одну строку</p>
          <div class="catalog__item__price__and__like">
            <div>
              <span class=' num catalog__item__price'>2&nbsp;384Р</span>
              <!-- <span class='sale__price'>9&nbsp;185Р</span> -->
            </div>
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/heart.php");?>
          </div>
        </div>
      </a>
      <a href="/catalog/item.php" class='c1'>
        <div class="catalog__item">
          <div class='img__wrap'>
            <img src="/images/catalog/justborn_vl_1603850319_1.jpg" alt="">
            <!-- <div class="sale__sign">25%</div> -->
          </div>
          <p  class='catalog__item__name'>Название товара номер один очень длинное и не помещает на одну строку</p>
          <div class="catalog__item__price__and__like">
            <div>
              <span class=' num catalog__item__price'>2&nbsp;384Р</span>
              <!-- <span class='sale__price'>9&nbsp;185Р</span> -->
            </div>
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/heart.php");?>
          </div>
        </div>
      </a>
      <a href="/catalog/item.php" class='c1'>
        <div class="catalog__item">
          <div class='img__wrap'>
            <img src="/images/catalog/justborn_vl_1603850319_1.jpg" alt="">
            <!-- <div class="sale__sign">25%</div> -->
          </div>
          <p  class='catalog__item__name'>Название товара номер один очень длинное и не помещает на одну строку</p>
          <div class="catalog__item__price__and__like">
            <div>
              <span class=' num catalog__item__price'>2&nbsp;384Р</span>
              <!-- <span class='sale__price'>9&nbsp;185Р</span> -->
            </div>
            <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/heart.php");?>
          </div>
        </div>
      </a>

  </div>
  
</div>

        

       

        


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


  <!--

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








