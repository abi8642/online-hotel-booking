<?php
session_start();
if ((!isset($_SESSION['loggedin'])) || ($_SESSION['loggedin'] != true)) {
    $loggedin = true;
} else {
    $loggedin = false;
}
include 'db_connect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>STAR HOTEL</title>
    <link rel="stylesheet" type="text/css" href="css/main2.css">
    <link href="img/logo.png" type="img/icon" rel="icon">
</head>

<body>
    <header>
        <div class="main">
            <div class="logo">
                <img src="img/logo.png" ;>
            </div>
            <div class="nav">
                <ul class="lr">
                    <?php
                    if ($loggedin) {
                        echo '<li><a href="login.php">Login</a></li>
                            <li><a href="signup.php">Register</a></li>';
                    } else {
                        echo '<li><a href="logout.php">Logout</a></li>';
                    }
                    ?>

                </ul>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">SERVICE</a></li>
                    <li><a href="#">GALLERY</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="title">
            <h1>WELCOME TO S.T.A.R HOTEL</h1>
            <h2>THE BEST IN CLASS</h2>

        </div>
    </header>
    <div class="f1">
        <form>
            <table>
                <tr>
                    <th width="20%" height="50px">ROOM TYPE</th>
                    <th width="20%" height="50px">CHECK IN DATE</th>
                    <th width="20%" height="50px"> CHECK OUT DATE</th>
                    <th width="20%" height="50px">ADD ON FACILITIES</th>
                </tr>
                <tr>
                    <td width="20%" height="50px">
                        <select>
                            <option>AC</option>
                            <option>NON-AC</option>
                            <option>DULEX</option>
                            <option>DOUBLE-DULEX</option>
                        </select>
                    </td>
                    <td width="20%" height="50px">
                        <input type="date">
                    </td>
                    <td width="20%" height="50px">
                        <input type="date">
                    </td>
                    <td width="20%" height="50px">
                        <select>
                            <option>GYM</option>
                            <option>SWIMMING POOL</option>
                            </option>
                        </select>
                    </td>
                </tr>
                <tr width="20%" height="50px">
                    <td colspan="4"><input type="submit" value="check"></td>
                </tr>
            </table>
        </form>

    </div>
    <div class="ABOUT">
        <h1 align="center" style=color:red> ABOUT US </h1>
        <center>
            <font size="4">
                our project is about hotel booking system we have made a website <br> wheye you can book hotel room from
                your <br> mobile without going through the trouble of of going there yourself<br>
            </font>
            <h2 style="color:blue;">our brand</h2>
        </center>
        </div?>
        <div class="g1">
            <div class="one"><img src="img/2.jpg" width="100%">

                <center>
                    <h2>AC</h2><br> An enchanting and intimate space designed with your comfort in our room.<br> Feel
                    the stress of the day melt away with our designer rainshower, treat yourself to our complimentary
                    snacks and refreshment.<br> BED- 1 king
                    <br>
                    <button class="btn"><a href="booking/index.php">BOOK</a></button>
                </center>
            </div>
            <div class="g2">
                <div class="two"><img src="img/3.jpg" width="100%">
                    <center>
                        <h2>DOUBLE-DULEX</h2><br> An expansive spacer room. Room have 2 double beds decked with in the
                        finest sheets.<br> The bathroom comes with a Grohe rainshower and built-in bathtub. High speed
                        internet,a smart TV with international channels
                        and complimentary welcome snacks and refreshments.<br>
                        <button class="btn"><a href="booking/index.php">BOOK</a></button>
                    </center>
                </div>
                <div class="g3">
                    <div class="three"><img src="img/4.jpg" width="100%">
                        <center>
                            <h2>DULEX</h2><br> Take business and pleasure to the next level. A stay in this room makes
                            an excellent experienc.<br> A plus modular king sized bed (that can be converted to a twin
                            bed as per request) with luxury bathroom fitting
                            byb grohe. High speed wifi along with the smart HD TV with international channels we will
                            ensure that you stay connected 24/7.<br>
                            <button class="btn"><a href="booking/index.php">BOOK</a></button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>