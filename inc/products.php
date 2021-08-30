<div class="container products_container">
  <div class="row justify-content-start">

    <?php
    $filedir = realpath(dirname(__FILE__));
    include_once($filedir . "/../lib/database.php");
    $item_conn = new Database;
    $items = $item_conn->select("SELECT * FROM products");
    if ($items) {

      while ($row = $items->fetch_assoc()) {
        echo '<div class="col-2">
        <input type="checkbox" class="delete-checkbox" name="delete_checkbox[]" value="' . $row["id"] . '">';

        echo "<p>" . $row["sku"] . "</p><p>" . $row["name"] . "</p><p> Price: " . $row["price"] . " $</p><p> " . $row["data_by_type"] . "</p>";

        echo "</div>";
      }
    }

    ?>

  </div>
</div>