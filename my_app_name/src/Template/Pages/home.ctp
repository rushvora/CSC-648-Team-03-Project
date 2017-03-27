<DOCTYPE html>
<html>
  <head>
    <title>CSC 648 Group 03</title>
    <?php use Cake\Routing\Router; ?>
  </head>
  <body>
    <h1 style="text-align: center;">Software Engineering Class SFSU</h1>
    <h2 style="text-align: center;">Spring 2017</h2>
    <h3 style="text-align: center;">Section 1 - Team 03</h3>
    <br>
    <form action="search">
      <div class="row">
        <div class="small-11 columns"> <input type="text" style="width: 100%;"> </div>
        <div class="small-1 columns"> <input class="tiny button" type="submit" value="Search" style="margin-top: -3%; margin-left: -25%; font-size: 100%;"> </div>
      </div>
    </form>

    <br>
    <br>
    <br>
    <br>
    <a style="margin-left:50%;" href=<?= Router::url(['controller' => 'Pages', 'action' => 'display', 'about']); ?>>About</a>
  </body>
</html>

