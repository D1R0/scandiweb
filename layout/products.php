<div class="container products_container">

  <div class="row justify-content-start">
    <?php
    $items = $products->getAll();
    if ($items->num_rows > 0) {
      while ($row = $items->fetch_assoc()) {
        echo '<div class="col-2">
        <input type="checkbox" class="delete_checkbox" name="delete_checkbox[]" value="' . $row["sku"] . '">';
        echo "<p>" . $row["sku"] . "</p><p>" . $row["name"] . "</p><p> Price: " . $row["price"] . " $</p><p> " . $row["data_by_type"] . "</p>";
        echo "</div>";
      }
    }

    ?>




  </div>

</div>
</form>