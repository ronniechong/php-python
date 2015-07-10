<!DOCTYPE html>
<html>
  <head>
    <title>Pi Generator with Python</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div class="container">
      <div class="box">
        <h1>Generator!</h1>
        <form id="form">
          <div class="form__container">
            <label for="form__input--number">Enter decimals</label>
            <input type="number" id="form__input--number"/>
          </div>
          <div class="form__container">
            <input type="submit" value="Generate"/>
          </div>
          <span class="form__loader"></span>
          <span id="time"></span>
        </form>
        <div id="output"></div>
      </div>
      <small><a href="https://github.com/ronniechong/php-python" target="_blank" title="php-python at Github">https://github.com/ronniechong/php-python</a></small>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>
