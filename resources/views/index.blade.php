<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Office Search</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</head>
<body>
    <main>
        <form>
            <div class="field">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="field">
                <label for="price">Price:</label>
                <input type="number" name="price-min" id="price">
                <input type="number" name="price-max" id="price">
            </div>

            <div class="field">
                <label for="offices">Offices:</label>
                <input type="number" name="offices" id="offices">
            </div>

            <div class="field">
                <label for="tables">Tables:</label>
                <input type="number" name="tables" id="tables">
            </div>

            <div class="field">
                <label for="sqm">sqm:</label>
                <input type="number" name="sqm-min" id="sqm">
                <input type="number" name="sqm-max" id="sqm">
            </div>

            <div class="errors" style="display: none;">
            </div>

            <div class="submit">
                <button type="submit">Update</button>
            </div>
        </form>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Offices</th>
                    <th>Tables</th>
                    <th>sqm</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5">Adjust the fields above to search.</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>