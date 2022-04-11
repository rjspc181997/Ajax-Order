<!-- With Ajax -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Order 2</title>
    <link rel="stylesheet" href="<?=base_url('assets/stylesheets/style.css')?>">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script>
      $(document).ready(function(){
         // we are getting all of the quotes whenever the user first requests the page
        $.get('/foods/index_html', function(res) {
          $('#foods').html(res);
        });
        $('form').submit(function(){
          $.post('/foods/create', $(this).serialize(), function(res) {
            $('#foods').html(res);
          });
          return false;
        });
      });
    </script>
  </head>
  <body>
    <div class="container">
      <header>
          <h1>Order Queue: </h1>
      </header>
      <main>
        <div id="foods">
        </div>
      </main>
      <footer>
        <form action="/foods/create" method="post"> 
            <p>
              <input type="text" name="foods">
            </p>
            <input type="submit" value="Button">
          </form>
      </footer>
    </div>
  </body>
</html>