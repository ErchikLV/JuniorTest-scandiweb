<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Styles CSS-->
    <link rel="stylesheet" href="Styles/style.css">

  </head>

  <body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="addproduct">Product Add</a>
    </nav>

    <section>
        <form action="php/background_process.php" id="product_form" class="add_form" method="post">

            <fieldset>
                <label for="sku">SKU </label>
                <input class="input" type="text" id="sku" name="sku" placeholder="#sku" pattern="^[a-zA-Z0-9_.-]*$" oninput="checkSKU();" required>
            </fieldset>
                <span id="availability"></span>
            <fieldset>
                <label for="name">Name </label>
                <input class="input" type="text" id="name" name="name" placeholder="#name" pattern="^[a-zA-Z0-9_.-]*$" required>
            </fieldset>
           
            <fieldset>
                <label for="price">Price($) </label>
                <input class="input" type="number" id="price" name="price" min="0" step="0.01" placeholder="#price" pattern="^[0-9]*$" required>
            </fieldset>

            <fieldset>
                <label for="types">Choose a product type:</label>
                <select name="types" id="types" onchange="showDiv(this);" required>
                    <option value="" selected disabled hidden>Choose type</option>
                    <option value="DVD" id="DVD">DVD</option>
                    <option value="Furniture" id="Furniture">Furniture</option>
                    <option value="Book" id="Book">Book</option>
                </select>
            </fieldset>

            <section class="add" id="dvd" method="post">

                    <fieldset>
                        <label for="size" class="size">Size (MB) </label>
                        <input class="input" type="number" id="size" name="size" min="1" max="99999" value="size" pattern="^[0-9]*$" placeholder="#size">
                    </fieldset>

                    <p><mark> Please provide the DVD size. </mark></p>
                    <p> *Product description* </p>
                    
            </section>

            <section class="add" id="furniture" method="post">

                    <fieldset>
                        <label for="height">Height (CM) </label>
                        <input class="input" type="number" id="height" name="height" min="1" max="999999999" pattern="^[0-9]*$" placeholder="#height">
                    </fieldset>

                    <fieldset>
                        <label for="width">Width (CM) </label>
                        <input class="input" type="number" id="width" name="width" min="1" max="999999999" pattern="^[0-9]*$" placeholder="#width">
                    </fieldset>

                    <fieldset>
                        <label for="length">Length (CM) </label>
                        <input class="input" type="number" id="length" name="length" min="1" max="999999999" pattern="^[0-9]*$" placeholder="#length">
                    </fieldset>

                    <p><mark> Please provide dismensions in HxWxL format. </mark></p>
                    <p> *Product description* </p>

            </section>

            <section class="add" id="book" method="post">

                    <fieldset>
                        <label for="weight">Weight (KG) </label>
                        <input class="input" type="number" id="weight" name="weight" min="1" max="999999999" pattern="^[0-9]*$" placeholder="#weight">
                    </fieldset>

                    <p><mark> Please provide the Book`s weight. </mark></p>
                    <p> *Product description* </p>

            </section>

            <div class="buttons">
                <button type="submit" id="submitBtn" class="badge badge-light" style="font-size: 17px; margin-right: 8px; cursor: pointer;">Save</button>
                <a href="index" class="badge badge-light" style="font-size: 17px;">Cancel</a>
            </div>
        </form>
    </section>

    <footer>
        <p> Scandiweb Test assignment </p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script/custom.js" type="text/javascript"> </script>
  </body>
</html>