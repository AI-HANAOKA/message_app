<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ひとこと掲示板 管理人ページ</title>
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
    <div class="header__right">
      <a href="./index.php" class="header__board">ひとこと掲示板へ</a>
      <a href="./login.php" class="header__logout">LOG OUT</a>
    </div>
  </header>
  <h2 class="title">ひとこと掲示板 管理人ページ</h2>
  <section class="list">
    <div class="list__card">
      <div class="list__top">
        <div class="list__topL">
          <h5 class="list__name">name</h5>
          <time class="list__data">time</time>
        </div>
        <div class="list__topR">
          <img src="" alt="笑顔のアイコン" class="list__img">
        </div>
      </div>
      <div class="list__bottom">
        <div class="list__bottomL">
          <p class="list__message">message</p>
        </div>
        <div class="list__bottmR">
          <a href="./edit.php" class="list__edit">EDIT</a>
          <a href="./delete.php" class="delete">DELETE</a>
        </div>
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