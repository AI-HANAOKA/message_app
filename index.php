<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ひとこと掲示板</title>
  <link rel="stylesheet" href="./assets/css/reset.css">

</head>
<body>
  <div class="all">
    <header class="header">
      <div class="header__logo">
        <h1 class="header__logoText">
          <a href="./index.php">
            ひとこと<span class="logoSpan">掲示板</span>
          </a>
        </h1>
      </div>
      <a href="./login.php" class="header__login">LOG IN</a>
    </header>
    <section class="form">
      <h2 class="form__title">ひとこと掲示板</h2>
      <div class="form__alert"></div>
      <form action="create.php" method="post" class="form__inputBox">
        <div class="form__name">
          <label for="name" class="form__nameTitle">ニックネーム</label>
          <input type="text" name="name" id="name" class="form__nameInput">
        </div>
        <div class="form__message">
          <label for="message" class="form__messageTitle">ひとこと</label>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="書き込む" class="form__submit">
      </form>
    </section>
    <hr class="hr">
    <section class="list">
      <div class="list__card">
        <div class="list__top">
          <h3 class="list__name">name</h3>
          <time>time</time>
        </div>
        <div class="list__bottom">
          <p class="list__message">message</p>
        </div>
      </div>
    </section>
    <section class="up">
      <p class="up__icon">▲</p>
    </section>
    <footer class="footer">
      <p class="footer__text">
        © 2021 A.Hanaoka. All rights reserved.
      </p>
    </footer>
  </div>
</body>
</html>