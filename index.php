<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Umut Can Arda | Giphy Arama</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="wrapper ui-1">
  <header>
  <a href="/">
    <img class="logo" src="img/giphyseriesc.gif" alt="giphy"></a>
    <nav>
      <ul>
        <li>
          <p>Bul:</p>
        </li>
        <li>
          <a class="trending" href="">Popüler</a>
        </li>
      </ul>
    </nav>
  </header>


  <form>
    <label>
      <p>Ara:</p>
      <input class="query" type="text" placeholder="Bir giphy ara" name="q">
    </label>
    <label>
      <p>Sonuçlar:</p>
      <input class="limit" type="number" placeholder="limit" name="limit" min="1" max="100" value="25">
    </label>
    <label>
      <p>Sıralama:</p>
      <select class="rating" name="rating">
        <option value="" selected>Hepsi</option>
        <option value="y">y</option>
        <option value="g">g</option>
        <option value="pg">pg</option>
        <option value="pg-13">pg-13</option>
        <option value="r">r</option>
      </select>
    </label>
  </form>

  <section class="res-container">
    <p class="title"></p>
    <section class="results justified-gallery"></section>
  </section>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
