<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='stylesheets/style.css' />
    <link href="https://fonts.googleapis.com/css?family=Lusitana" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cousine:700" rel="stylesheet">
    <title>Coffee & Stuff</title>
</head>
<body>
    <div class="nav-bar-container">
        <ul class="nav-bar">
            <li><a id="navbar-about" href="#about">About</a></li>
            <li><a id="navbar-makers" href="#makers">Coffee Makers</a></li>
            <li><a id="navbar-mugs" href="#mugs">Mugs</a></li>
            <li><a id="navbar-coffee" href="#coffee">Coffee</a></li>
            <li><a id="navbar-home" href="#home">Home</a></li>
        </ul>
    </div>

    <div id="home" class="home section">
        <div class="hero-text">
            <h1>Coffee & Stuff</h1>
        </div>
    </div>
    <?php require_once 'pdo.php';

    //THIS SECTION IS FOR DISPLAYING OUR COFFEE PRODUCTS
    $coffeeQuery = 'SELECT * FROM coffee';
    $stmt = $conn->prepare($coffeeQuery);
    $stmt->execute();
    $coffeeInfo = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<div id='coffee' class='coffee section'>";
    echo "<div class='section-title'>";
    echo "<h2>Coffee</h2>";
    echo "</div>";
    echo "<table class='product-table'>";

    $i = 0;
    if(count($coffeeInfo) > 0){
        echo "<tr>";
        foreach($coffeeInfo as $row){
            if($i%4 == 0 && $i > 0){
                echo "</tr>";
            }
            echo "<td class='product-description'>";
            echo "<a href='coffeePage.php?id=$row[product_id]'>";
            echo "<div class='image-container'>";
            echo "<img class='product-image' src='$row[pic]'/>";
            echo "</div>";
            echo "<div class='desc-container'>";
            echo "<h3>$row[description]</h3>";
            echo "<h3>$row[product_name]</h3>";
            echo "<h4>$$row[price]</h4>";
            echo "</div>";
            echo "</a>";
            echo "</td>";
            $i++;
        }
    }
    echo "</table>";
    echo "</div>";

    //THIS SECTION IS FOR DISPLAYING OUR MUGS
    $mugQuery = 'SELECT * FROM mug';
    $stmt = $conn->prepare($mugQuery);
    $stmt->execute();
    $mugInfo = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<div id='mugs' class='mugs section'>";
    echo "<div class='section-title'>";
    echo "<h2>Mugs</h2>";
    echo "</div>";
    echo "<table class='product-table'>";

    $i = 0;
    if(count($mugInfo) > 0){
        echo "<tr>";
        foreach($mugInfo as $row){
            if($i%4 == 0 && $i > 0){
                echo "</tr>";
            }
            echo "<td class='product-description'>";
            echo "<a href='mugPage.php?id=$row[product_id]'>";
            echo "<div class='image-container'>";
            echo "<img class='product-image' src='$row[pic]'/>";
            echo "</div>";
            echo "<div class='desc-container'>";
            echo "<h3>$row[description]</h3>";
            echo "<h3>$row[product_name]</h3>";
            echo "<h4>$$row[price]</h4>";
            echo "</div>";
            echo "</a>";
            echo "</td>";
            $i++;
        }
    }
    echo "</table>";
    echo "</div>";

    //THIS SECTION IS FOR DISPLAYING OUR COFFEE MAKERS
    $makerQuery = 'SELECT * FROM coffeemaker';
    $stmt = $conn->prepare($makerQuery);
    $stmt->execute();
    $makerInfo = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<div id='makers' class='makers section'>";
    echo "<div class='section-title'>";
    echo "<h2>Coffee Makers</h2>";
    echo "</div>";
    echo "<table class='product-table'>";

    $i = 0;
    if(count($makerInfo) > 0){
        echo "<tr>";
        foreach($makerInfo as $row){
            if($i%4 == 0 && $i > 0){
                echo "</tr>";
            }
            echo "<td class='product-description'>";
            echo "<a href='makerPage.php?id=$row[product_id]'>";
            echo "<div class='image-container'>";
            echo "<img class='product-image' src='$row[pic]'/>";
            echo "</div>";
            echo "<div class='desc-container'>";
            echo "<h3>$row[description]</h3>";
            echo "<h3>$row[product_name]</h3>";
            echo "<h4>$$row[price]</h4>";
            echo "</div>";
            echo "</a>";
            echo "</td>";
            $i++;
        }
    }
    echo "</table>";
    echo "</div>";
    $conn = null;
    ?>
    <div id="about" class="about section">
      <div class="section-title">
        <h2>About</h2>
        <table class="staff-table">
            <tr>
                <td class="staff-description">
                      <div class="image-container">
                        <img class="staff-image" src="images/gen.jpg"/>
                      </div>
                      <div class="desc-container">
                        <h3>Gen Fillipow</h3>
                        <p>CEO&Founder</p>
                        <p>gfillipo@uci.edu</p>
                      </div>
                </td>
                <td class="staff-description">
                      <div class="image-container">
                        <img class="staff-image" src="images/yukino.jpg"/>
                      </div>
                      <div class="desc-container">
                        <h3>Yukino Nagasawa</h3>
                        <p>Secretary</p>
                        <p>nagasawy@uci.edu</p>
                      </div>
                </td>
            </tr>
            <tr>
              <td class="company-desc" colspan="2">
                <p>
                  Gen and Yukino are 2 Informatics students who met during their sophmore year of college through their mutual friend. Over the years, they had numerous classes together and discovered their mutual love for coffee. In one of their classes, they were assigned a project with a start up, learning from an experienced, well versed entrepreneur the means to run a successful business. With this, and their background in web development, the two decided to translate their passion for coffee into a business. They only choose the best of the best to sell and quality is a 100% guarantee. Stay tuned for more, even better products!
                </p>
              </td>
            <tr>
        </table>
      </div>
    </div>

</body>
<script src="javascript/image.js"></script>
</html>
