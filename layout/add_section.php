<form action="" method="post">
    <div class="container top_section">
        <?php
        ?>
        <div class="row justify-content-between">

            <div class="col-4">

                <h2>Add Products</h2>

            </div>

            <div class="col-4 buttons">

                <a href="index.php"><button class="btn btn-success" name="save">Save</button></a>
                <button class="btn btn-danger" name="cancel">CANCEl</button>

            </div>

        </div>

    </div>
    <div class="container products_container">


        <div class="mb-3">

            <label class="label">SKU</label>

            <input type="text" class="form-control" id="sku" name="sku">

        </div>

        <div class="mb-3">

            <label class="label">Name</label>

            <input type="text" class="form-control" id="name" name="name">

        </div>

        <div class="mb-3">

            <label class="label">Price($)</label>

            <input type="number" class="form-control" id="price" name="price">

        </div>


        <div class="mb-3">

            <label for="disabledSelect">Type Switcher</label>

            <select name="type" class="form-select" id="productType" onchange="showMe(this);">

                <option selected></option>

                <option value="DVD">DVD-disc</option>

                <option value="Furniture">Furniture</option>

                <option value="Book">Book</option>

            </select>

        </div>

        <div class="mb-3 box" id="DVD">

            <label class="label">Size (MB)</label>

            <input class="form-control" type="number" step=".01" id="size" name="size">

            <p>Please provide dimension in MB format</p>

        </div>

        <div class="mb-3 box" id="Furniture">

            <label class="label">Height (CM)</label>

            <input class="form-control" type="number" step=".01" id="height" name="height">

            <br>

            <label class="label">Width (CM)</label>

            <input class="form-control" type="number" step=".01" id="width" name="width">

            <br>

            <label class="label">Lenght (CM)</label>

            <input class="form-control" type="number" step=".01" id="length" name="lenght">

            <p>Please provide dimensions in HxWxL format</p>

        </div>

        <div class="mb-3 box" id="Book">

            <label class="label">Weight (KG)</label>

            <input class="form-control" type="number" step=".01" id="weight" name="weight_book">

            <p>Please provide dimension in KG format</p>

        </div>





    </div>
</form>