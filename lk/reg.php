<?php require($_SERVER["DOCUMENT_ROOT"]."/header.php");?>

<div class="reg__wrapper">
    <div class="reg__window">
      <div class="reg__window__menu">
        <a class="form__type">вход</a>
        <hr>
        <a class="form__type active">Регистрация</a>
      </div>
      <div class="reg__window__form">
        <form action="" id="auth__form" class='reg__form order__wrapper' method="post">
          <label for="auth__login">email2</label>
          <input type="text" name='auth__login'>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
          <p class='auth__error__validation'>Введите правильный логин</p>

          <label for="auth__pswrd">Пароль</label>
          <input type="password" name='auth__pswrd'>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
          <p class='auth__error__validation'>Введите правильный пароль</p>
          <button type="submit">войти</button>
        </form>

        <form action="" id="reg__form" class='reg__form order__wrapper' method="post">
          <label for="reg__login">email</label>
          <input type="text" name='reg__login' id='lk__prop__email'>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
          <p id='error__validation' class='auth__error__validation'>Введите корректный email</p>

          <label for="reg__pswrd">Пароль</label>
          <input type="password" name='reg__pswrd'>
          <?php require($_SERVER["DOCUMENT_ROOT"]."/svgfiles/longline.php");?>
          <p id='error__validation_pas' class='auth__error__validation'>Введите больше 4 символов</p>

          <button id='reg__btn' type="submit">начать</button>
        </form>
      </div>
    </div>
  </div>


<?php require($_SERVER["DOCUMENT_ROOT"]."/footer.php");?>