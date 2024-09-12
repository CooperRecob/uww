<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include bootstrap CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajaxbr/bs/jquery/1.11.0/jquery.min.js"></script>
    <title>CS382 Spring 2024 Midterm Exam</title>
    <style>
        p,
        table {
            margin-left: 50px;
        }

        .datagrid {
            width: 400px;
        }

        .hrule {
            border-top: 1px solid #000
        }

        .listItem {
            padding: 6px;
        }
    </style>
</head>

<body>
    <div class='container-fluid'>
        <h3>Problem 1: Compute Net Income</h3>
        <form method="post">
            <table class='table table-bordered datagrid'>
                <tr>
                    <td><label for='income'>Gross Income:</label><input type='text' name="grossIncome"
                            class='form-control' id="income"></td>
                </tr>
                <tr>
                    <td><label for='dependents'>Number of Dependents: </label>
                        <select name="dependents" class="listItem" id="dependents">
                            <option value="-1">-- Select # Dependents</option>
                            <option value="0">None</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four or more</option>
                    </td>
                </tr>
            </table>
            <p><input type='submit' name='submit1' value="Display Net Income" class='btn btn-primary'>
                <input type='reset' class='btn btn-default'>
            </p>


            <?php
            if (isset($_POST['submit1'])) {
                $grossIncome = $_POST['grossIncome'];
                $dependents = $_POST['dependents'];
                $error = false;
                if ($grossIncome == "") {
                    echo "<p class='alert alert-danger'>Please enter the gross income</p>";
                    $error = true;
                }
                if ($dependents == -1) {
                    echo "<p class='alert alert-danger'>Please select your # of dependents</p>";
                    $error = true;
                }
                if (!$error) {
                    $taxRate = 0;
                    switch ($dependents) {
                        case 0:
                            $taxRate = 0.30;
                            break;
                        case 1:
                            $taxRate = 0.25;
                            break;
                        case 2:
                            $taxRate = 0.20;
                            break;
                        case 3:
                            $taxRate = 0.15;
                            break;
                        case 4:
                            $taxRate = 0.10;
                            break;
                    }
                    $taxes = $grossIncome * $taxRate;
                    $netIncome = $grossIncome - $taxes;
                    echo "<p class='alert alert-success'>Gross Income: $$grossIncome<br>Taxes: $$taxes<br>Net Income: $$netIncome</p>";
                }
            }
            ?>
        </form>
        <hr class="hrule">
        </hr>

        <h3>Problem 2: Estimate Rental Charge</h3>
        <form method="post" />
        <p>Select Vehicle Type:<br />
            <input type='radio' name="category" value='car'> Car<br />
            <input type='radio' name="category" value='suv'> SUV<br />
            <input type='radio' name="category" value='minivan'> Minivan<br />
        </p>
        <p>Number of Days: <input type='number' name="numDays" placeholder="Enter number of days" /></p>
        <p><input type='checkbox' name='coverage'> Add collision damage coverage : $20 per day</p>
        <p><input type='submit' name='submit' value="Estimate Rental Charges" class='btn btn-primary'>
            <input type='reset' class='btn btn-default'>
        </p>
        </form>
        <hr class="hrule">
        </hr>

        <h3>Problem 3: Display a list of products (title, price, category) based on the selected product category from
            the following list:</h3>
        <form method="post">
            <p>Select product Category:</p>
            <p>
                <input type='radio' name='category' value="HDTV"> Televisions<br />
                <input type='radio' name='category' value="Cellphone"> Mobile Phones<br />
                <input type='radio' name='category' value="Electronic"> Electronics<br />
                <input type='radio' name='category' value="Video-game"> Video games<br />
                <button type="submit" class="btn btn-primary">Display Selected Products</button>
            </p>
        </form>
        <hr class="hrule">
        </hr>

        <h3>Problem 4: Display a list of products (title, price, category) with a price >1000 :</h3>
        <form method="post">
            <p><button type="submit" class='btn btn-primary'>Expensive Products</button></p>
        </form>
        <hr class="hrule">
        </hr>

        <h3>Problem 5: Display a list of products (title, price, category) with a price between 500 and 1000 :</h3>
        <form method="post">
            <p><button type="submit" class='btn btn-primary'>Popular Products</button></p>
        </form>
        <hr class="hrule">
        </hr>

        <h3>Problem 6: Compute the number of containers needed to complete the order</h4>
            <form method="post">
                <table class="table" style="width: 200px">
                    <tbody>
                        <tr>
                            <td>Length: </td>
                            <td><input type='number' name="cartLength" placeholder="Enter the length" /></td>
                        </tr>
                        <tr>
                            <td>Height: </td>
                            <td><input type='number' name="cartHeight" placeholder="Enter the height" /></td>
                        </tr>
                        <tr>
                            <td>Distance: </td>
                            <td><input type='number' name="distance" placeholder="Enter the distance" /></td>
                        </tr>
                    </tbody>
                </table>
                <p><input type='submit' name='submit' value="Estimate Transportation Charges" class='btn btn-primary'>
                    <input type='reset' class='btn btn-default'>
                </p>
            </form>
    </div>
</body>

</html>