<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>
<div class="wrapper__catalog">
  <div class="catalog__left__part">
    <div class="catalog__menu__categories">
      <a href="">футболки</a>
      <a href="">штанишки</a>
      <a href="">ночнушки</a>
      <a href="">распашонки</a>
      <a href="">носочки</a>
      <a href="">косметика</a>
      <a href="">уход</a>
      <a href="">футболки</a>
      <a href="">штанишки</a>
      <a href="">ночнушки</a>
      <a href="">распашонки</a>
      <a href="">носочки</a>
      <a href="">косметика</a>
      <a href="">уход</a>
    </div>
    <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/catalog__img.php");?>
  </div>
  <div class="right__part">
    
    <div class="top__catalog__menu">
      <div class="catalog__filter catalog__filter2">
        <span>Наличие</span>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/bearhead.php");?>
        <span>Возраст</span>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/bearhead.php");?>
        <span>Цвет</span>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/bearhead.php");?>
      </div>
      <div class="catalog__filter catalog__filter3">
        <span>Сначала новые</span>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/bearhead.php");?>
        <span>Сначала старые</span>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/bearhead.php");?>
        <span>Цена по убыванию</span>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/bearhead.php");?>
        <span>Цена по возрастанию</span>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/bearhead.php");?>
        <span>Сортировка</span>
        <span>А-я</span>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/bearhead.php");?>          
        <span>Я-а</span>
      </div>
    </div>
   
      <div class="learn__about__wrapper">
        <p id='learn__more__sign' class='learn__more__sign'>Узнать больше о бренде</p>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/ad.php");?>          
      </div>
      
      <div class="learn__about">
      <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/basketdeletebtn.php");?>
        <h2>Название бренда</h2>
        <div class="learn__about__block">
          <img src="/images/catalog/IMG_5615-01.jpeg" alt="">
          <p class="learn__about__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsa quam harum impedit quos, voluptatem aut, doloremque dolor in nam at nemo labore quaerat reiciendis ullam illum quo consequuntur. Corporis natus porro delectus ut nemo aut aperiam aspernatur fuga accusantium.
          </p>
        </div>
      </div>


      <!-- <div class="top__menu__chooses">
      <form action="">    
        
        <div class="top__menu__choose__sizes top__menu__choose its__block" id='block__sizes'>
          <label class='top__menu__choose__size possibly__active' for="xs"><input type="checkbox" id="xs" name='size' value='xs' checked> xs</label>
          <label class='top__menu__choose__size possibly__active' for="s"><input type="checkbox" id="s" name='size' value='s' checked> s</label>
          <label class='top__menu__choose__size possibly__active' for="m"><input type="checkbox" id="m" name='size' value='m' checked> m</label>
          <label class='top__menu__choose__size possibly__active' for="l"><input type="checkbox" id="l" name='size' value='l' checked> l</label>
          <label class='top__menu__choose__size possibly__active' for="one-size"><input type="checkbox" id="one-size" name='one-size' value='one-size' checked> one-size</label>
        </div>

        <div class="top__menu__choose__colors top__menu__choose__grid its__block">
          <label class='top__menu__choose__color possibly__active' for="red"><input type="checkbox" id="red" name='size' value='red' checked> Красный</label>
          <label class='top__menu__choose__color possibly__active' for="blue"><input type="checkbox" id="blue" name='size' value='blue' checked> Голубой</label>
          <label class='top__menu__choose__color possibly__active' for="white"><input type="checkbox" id="white" name='size' value='white' checked> Белый</label>
          <label class='top__menu__choose__color possibly__active' for="black"><input type="checkbox" id="black" name='size' value='black' checked> Чёрный</label>
          <label class='top__menu__choose__color possibly__active' for="green"><input type="checkbox" id="green" name='size' value='green' checked> зелёный</label>
          <label class='top__menu__choose__color possibly__active' for="yellow"><input type="checkbox" id="yellow" name='size' value='yellow' checked> жёлтый</label>

          <label class='top__menu__choose__color possibly__active' for="red"><input type="checkbox" id="red" name='size' value='red' checked> Красный</label>
          <label class='top__menu__choose__color possibly__active' for="blue"><input type="checkbox" id="blue" name='size' value='blue' checked> Фиолетовый</label>
          <label class='top__menu__choose__color possibly__active' for="white"><input type="checkbox" id="white" name='size' value='white' checked> Белый</label>
          <label class='top__menu__choose__color possibly__active' for="black"><input type="checkbox" id="black" name='size' value='black' checked> Черно-красный</label>
          <label class='top__menu__choose__color possibly__active' for="green"><input type="checkbox" id="green" name='size' value='green' checked> зелёный</label>
          <label class='top__menu__choose__color possibly__active' for="yellow"><input type="checkbox" id="yellow" name='size' value='yellow' checked> жёлтый</label>

          <label class='top__menu__choose__color possibly__active' for="red"><input type="checkbox" id="red" name='size' value='red' checked> Красный</label>
          <label class='top__menu__choose__color possibly__active' for="blue"><input type="checkbox" id="blue" name='size' value='blue' checked> Голубой</label>
          <label class='top__menu__choose__color possibly__active' for="white"><input type="checkbox" id="white" name='size' value='white' checked> Белый</label>
          <label class='top__menu__choose__color possibly__active' for="black"><input type="checkbox" id="black" name='size' value='black' checked> Чёрный</label>
          <label class='top__menu__choose__color possibly__active' for="green"><input type="checkbox" id="green" name='size' value='green' checked> зелёный</label>
          <label class='top__menu__choose__color possibly__active' for="yellow"><input type="checkbox" id="yellow" name='size' value='yellow' checked> жёлтый</label>

          <label class='top__menu__choose__color possibly__active' for="red"><input type="checkbox" id="red" name='size' value='red' checked> Красный</label>
          <label class='top__menu__choose__color possibly__active' for="blue"><input type="checkbox" id="blue" name='size' value='blue' checked> Голубой</label>
          <label class='top__menu__choose__color possibly__active' for="white"><input type="checkbox" id="white" name='size' value='white' checked> Белый</label>
          <label class='top__menu__choose__color possibly__active' for="black"><input type="checkbox" id="black" name='size' value='black' checked> Чёрный</label>
          <label class='top__menu__choose__color possibly__active' for="green"><input type="checkbox" id="green" name='size' value='green' checked> зелёный</label>
          <label class='top__menu__choose__color possibly__active' for="yellow"><input type="checkbox" id="yellow" name='size' value='yellow' checked> жёлтый</label>
        </div>

        <div class="top__menu__choose__type top__menu__choose its__block">
        <label class='top__menu__choose__color possibly__active' for="expensive"><input type="checkbox" id="expensive" name='size' value='expensive' checked> СНачала дорогие</label>
        <label class='top__menu__choose__color possibly__active' for="cheap"><input type="checkbox" id="cheap" name='size' value='cheap' checked> Сначала дешёвые</label>  
        </div>
        <div class="new__btn">
           <button type='submit' id='show__items__button__mobile'>Показать</button>
        </div>
      </form>
  </div> -->
  <div class="catalog__pages__full">
    <div class="catalog__pages">
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
    <button data-page='2' id='showMore'>Показать еще</button>
  </div>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>








