<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>九九乘法表</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <h1>九九乘法表&nbsp;&nbsp;&nbsp;</h1>
    <table>
      <tbody>
        <?php
        for ($i = 1; $i <= 9; $i++) {
          echo "<tr>";
          for ($j = 1; $j <= 9; $j++) {
            if ($i == $j) {
              if (($i * $j) % 3 == 0) {
                echo '<td class="equals triple">' . $i . '×' . $j . '=' . $i * $j . "</td>";
              } else {
                echo '<td class="equals">' . $i . '×' . $j . '=' . $i * $j . "</td>";
              }
            } else if (($i * $j) % 3 == 0) {
              echo '<td class="triple">' . $i . '×' . $j . '=' . $i * $j . "</td>";
            } else {
              echo '<td>' . $i . '×' . $j . '=' . $i * $j . "</td>";
            }
          }
          echo "</tr>";
          $j = 1;
        }
        echo "\n";
        ?>
      </tbody>
    </table>
  </body>
</html>
