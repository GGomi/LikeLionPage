<?php
  require_once("select.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQh$">
    <link rel="stylesheet" href="style.css">
    <title>Test</title>
  </head>
  <body>
    <div class="container tb">
      <div>
        <form action="load.php" method="post">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="check">CHECK</th>
                <th scope="col" class="username">USERNAME</th>
                <th scope="col" class="vodname">VODNAME</th>
                <th scope="col" class="state">STATE</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $num = '1';
                while($row = $result_get->fetch_assoc()) {
              ?>
                  <tr>
                    <td><input name="check[]" type="checkbox" value="<?php echo $row['num']?>" /></td>
                    <td><?php echo $row['user_name'] ?></td>
                    <td><?php echo $row['vod_name'] ?></td>
                    <td><?php echo $row['state'] ?></td>
                  </tr>
              <?php
                $num = (int)$num + 1;
                }
              ?>
            </tbody>
        </table>
      </div>
    </div>
    <div class="container">
      <div class="tb">
        <button type="submit" class="col-lg-12 mt-5 btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
  </body>
</html>

