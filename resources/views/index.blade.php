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
        <form method="POST">
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="price">Price:</label>
                <input type="number" name="price-min" id="price">
                <input type="number" name="price-max" id="price">
            </div>

            <div>
                <label for="offices">Offices:</label>
                <input type="number" name="offices" id="offices">
            </div>

            <div>
                <label for="tables">Tables:</label>
                <input type="number" name="tables" id="tables">
            </div>

            <div>
                <label for="sqm">sqm:</label>
                <input type="number" name="sqm-min" id="sqm">
                <input type="number" name="sqm-max" id="sqm">
            </div>

            <div class="errors">
                <ul>
                    <li>Error 1</li>
                    <li>Error 2</li>
                </ul>
            </div>

            <div>
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
                    <td>St Georges Terrace</td>
                    <td>1900</td>
                    <td>4</td>
                    <td>8</td>
                    <td>300</td>
                </tr>
                <tr>
                    <td>St Georges Terrace</td>
                    <td>1900</td>
                    <td>4</td>
                    <td>8</td>
                    <td>300</td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>