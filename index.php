<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <nav>this is navbar</nav>
    <section>this is section</section>

    <div id="dark-mode">
      <button type="submit" id="dark" onclick="fun1(); fun2()">
        Dark Mode
      </button>
    </div>
    <script>
      function fun1() {
        var element = document.nav;
        element.classList.toggle("dark-mode");
      }
      function fun2() {
        var element = document.section;
        element.classList.toggle("dark-mode");
      }
    </script>
    <style>
      .dark-mode {
        color: red;
      }
    </style>
  </body>
</html>
