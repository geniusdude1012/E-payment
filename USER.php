<?php
include("secure.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>nav_3</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>
    <div class="box1">
        <div class="logo">
            <h1 id="head1">EPAYMENT</h1>
        </div>
        <div class="nav1">
            <div class="navbar">
                <ul>
                    <li><a class="active" href="#">HOME</a></li>
                    <li><a href="#service">SERVICES</a></li>
                    <li><a href="#contactus">CONTACT US</a></li>
                </ul>
            </div>
            <div class="bttn1">
                <a href="logout.php"><button>Logout</button></a></li>
            </div>
        </div>


    </div>

    <div class="container">
        <div class="pic1">
            <img src="pay1.jpg">
        </div>
        <div class="display">
            <div class="user">
                <div class="ele">
                    <span>USERNAME</span>
                </div>
                <div class="session">
                    <?php
                    echo $_SESSION['name'];
                    ?>
                </div>
            </div>
            <div class="user">
                <div class="ele">
                    <span>Total Balance</span>
                </div>
                <div class="session">
                    <div><span>NPR :</span>
                    </div>
                    <?php
                    echo $_SESSION['amntt'];
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="feat">
        <div class="ser" id="service">
            <span class="serv1">OUR SERVICES</span>
        </div>
        <div class="container2">
            <div class="box3">
                <div class="img3">
                    <a href="deposit.html"><button class="butt1"><img src="wallet.png"></button></a>
                </div>
                <div>
                    <span>Load Wallet</span>
                </div>
            </div>
            <div class="box3">
                <div class="img3">
                    <a href="electricity.html"> <button class="butt1"><img src="bill.png"></button></a>
                </div>
                <div class="element">
                    <span>Electricity-Bill</span>
                </div>
            </div>
            <div class="box3">
                <div class="img3">
                    <a href="water.html"><button class="butt1"><img src="water.png"></button></a>
                </div>
                <div>
                    <span>Khanepani</span>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contactus">
        <div class="contact1">
            <span class="serv1">Contact Us</span>
        </div>
        <div class="contact2">
            <div class="cont1">
                <div class="photo">
                    <img src="photo1.jpg">
                </div>
                <div class="detail">
                    <div class="info">
                        <span>Sushil Baral</span>
                    </div>
                    <div class="info">
                        <span>sushil.201334@ncit.edu.np</span>
                    </div>
                </div>
            </div>
            <div class="cont1">
                <div class="photo">
                    <img src="photo2.jpg">
                </div>
                <div class="detail">
                    <div class="info">
                        <span>Saujanya Shrestha</span>
                    </div>
                    <div class="info">
                        <span>saujanya.201326@ncit.edu.np</span>
                    </div>
                </div>
            </div>
            <div class="cont1">
                <div class="photo">
                    <img src="photo3.jpg">
                </div>
                <div class="detail">
                    <div class="info">
                        <span>Sameer Bhatt</span>
                    </div>
                    <div class="info">
                        <span>sameer.201325@ncit.edu.np</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var name = <?= $_SESSION['name'] ?>;
        var a = "Welcome" + name + "!!!";
        alert(a);
    </script>
</body>

</html>