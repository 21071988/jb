<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>
  <div class="lk__wrapper">
  <h1>Личный кабинет</h1>
    <div class="personal__data" >
    <form action="" id='lk__form'>
      <div class='form__part'>
        <div class="form__part__h2">
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/lk.php");?>
          <h2>Общие данные</h2>
        </div>
        <p class="lk__prop">Фамилия</p>
        <input accept="text/rtf,text/html,text/plain,application/pdf" value='Иванова' name='lk__prop__lastname' >
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        
        <p class="lk__prop">имя</p>
        <input accept="text/rtf,text/html,text/plain,application/pdf" value='' name='lk__prop__name'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>

        <p class="lk__prop">телефон</p>
        <input accept="text/rtf,text/html,text/plain,application/pdf" value='' name='lk__prop__phone' id='lk__phone' class='num'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>

        <p class="lk__prop">email</p>
        <input accept="text/rtf,text/html,text/plain,application/pdf" value='someemail@gmail.com' name='lk__prop__email' id='lk__prop__email'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
        <p id='error__validation'>Введите корректный email</p>
      </div>
      
      <div class='form__part'>
      <div class="form__part__h2">
      <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/percent.php");?>
       <h2>Бонусная система</h2>
      </div>
        <p class="lk__prop">размер вашей скидки</p>
        <input accept="text/rtf,text/html,text/plain,application/pdf" value='5%' name='lk__prop__sale' class='num'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>

        <p class="lk__prop">до следующего уровня </p>
        <p class="lk__prop__amount num">27 287Р</p>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>

      </div>
      <div class='form__part'>
        <div class="form__part__h2">
          
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/geo.php");?>
          <h2>Адрес доставки</h2>
        </div>
      <p class="lk__prop">Город</p>
      <input class='lk__adress__input' accept="text/rtf,text/html,text/plain,application/pdf" value='' placeholder='заполните это поле' name='lk__prop__city'>
      <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>

      <p class="lk__prop">Улица</p>
        <input class='lk__adress__input' accept="text/rtf,text/html,text/plain,application/pdf" value='' placeholder='заполните это поле' name='lk__prop__street'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>

        <p class="lk__prop">Дом</p>
       <input class='lk__adress__input' accept="text/rtf,text/html,text/plain,application/pdf" value='' placeholder='заполните это поле' name='lk__prop__house'>
      <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>

      <p class="lk__prop">Квартира</p>
        <input class='lk__adress__input' accept="text/rtf,text/html,text/plain,application/pdf" value='' placeholder='заполните это поле' name='lk__prop__appartment'>
        <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
      </div>
    </div>
    <div class="lk__footer">
      <div class="logout">
        <p id="logout">
          <a href="?logout=yes">
          <span>Выйти</span>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/logout.php");?>
          
          </a>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/line.php");?>
          </p>
      </div>
      <div></div>
      <div class="update__data">
        <button id='submit__lk__form' type="submit">Обновить данные</button>
        <div id="answer__message"></div>
      </div>
    </div>
    </form>

      
</div>


<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>








