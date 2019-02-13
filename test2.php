<!doctype html>
<html>
  <head>
    <title>test</title>
  </head>
  <body>
    <table id="aaaaa">
      <tr>
        <td>test1</td>
        <td>test2</td>
      </tr>
      <tr>
        <td>test3</td>
        <td>test4</td>
      </tr>
    </table>

    <script type="text/javascript">
      var table = document.getElementById('aaaaa');

      var collection = table.rows;

      console.log(collection[0]);
    </script>
  </body>
</html>