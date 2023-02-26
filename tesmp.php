<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="SciAstra Education Private Ltd, admins from SciAstra edu pvt ltd">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--inherited css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://sciastra.com/Assets/Css/Common.css">
    <!--<link rel="stylesheet" href="https://sciastra.com/Assets/Css/Free-material.css">-->
    <link rel="stylesheet" href="/Assets/Css/s6css.css">
    <link rel="stylesheet" href="/Includes/headercss.css">
    <link rel="stylesheet" href="/Assets/Css/inherit.css">
    <style>
        a {
            text-decoration: none;
        }

        header {
            <?php
            if ($pT == 'home') {
                echo " background-color: transparent;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 2;
        transition: top 0.2s;
            ";
            }
            ?>
        }

        .lra {
            font-weight: ;
        }

        .tanmay_nav_new .right-nav .menu-item a {
            color: #<?php if ($pT == 'home') {
                        echo "fff";
                    } else {
                        echo "000";
                    }
                    ?>;
        }

        header.hidden {
            top: -80px;
        }
    </style>
</head>
<header>
    <nav class="tanmay_nav_new">
        <div class="left-nav">
            <a href="https://sciastra.com">
                <img src="https://www.sciastra.com/Assets/Images/new_logo_sci(1).png" alt="SciAstra Logo" />
            </a>
        </div>
        <div class="right-nav">
            <div class="n-small">
                <div class="menu-item">
                    <a class="login-button s-tx-white lra" href="https://sciastra.com/app/">Login</a>
                </div>
                <div class="menu-item
                <?php if ($pT == 'contact') {
                    echo "active";
                } ?>">
                    <a class="lra" href="https://www.sciastra.com/contact">contact us</a>
                </div>
                <div class="menu-item
                <?php if ($pT == 'contact') {
                    echo "active";
                } ?>">
                    <a class="lra" href="https://www.sciastra.com/tss-niser">TSS - 2023 </a>
                </div>
                <div class="menu-item
                <?php if ($pT == 'team') {
                    echo "active";
                } ?>">
                    <a class="lra" href="https://www.sciastra.com/teams/">team</a>
                </div>
                <div class="menu-item
                <?php if ($pT == 'materials') {
                    echo "active";
                } ?>">
                    <a class="lra" href="https://www.sciastra.com/materials">materials</a>
                </div>
                <div class="menu-item
                <?php if ($pT == 'blogs') {
                    echo "active";
                } ?>">
                    <a class="lra" href="https://www.sciastra.com/blog/">blogs</a>
                </div>
                <div class="menu-item
                <?php if ($pT == 'courses') {
                    echo "active";
                } ?>">
                    <a class="lra" href="https://www.sciastra.com/courses/">Courses</a>
                </div>
                <div class="menu-item
                <?php if ($pT == 'home') {
                    echo "active";
                } ?>">
                    <a class="lra" href="https://sciastra.com/">Home</a>
                </div>
            </div>
            <div class="n-large">
                <span onclick="openNavtanmay()"><i id="openmenubtn" class='bx bx-menu-alt-right s-jumbo s-tx-<?php if ($pT == 'home') {
                                                                                                                    echo "white";
                                                                                                                } else {
                                                                                                                    echo "black";
                                                                                                                } ?>'></i></span>
            </div>
        </div>
        <div class="clear"></div>
    </nav>
</header>
<!--menu for mobile-->
<div class="nav-tanmay-mobile-menu" id="menutoopen">
    <div class="xx">
        <div class="button-xx">
            <a href="javascript:void(0)" class="top-right-button s-jumbo" onclick="closeNavtanmay()">&times;</a>
        </div>
    </div>
    <div class="overlay-content">
        <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNavtanmay()">&times;</a>-->
        <center>
            <a href="https://sciastra.com/" class="">Home</a><br>
            <a href="https://sciastra.com/courses/" class="">Courses</a><br>
            <a href="https://sciastra.com/blog/ " class="text-white text-2xl font-light">Blog</a><br>
            <a href="https://sciastra.com/materials/" class="text-white text-2xl font-light">Materials</a><br>
            <a href="https://sciastra.com/teams/" class="text-white text-2xl font-light">Teams</a><br>
            <a href="https://sciastra.com/contact/" class="text-white text-2xl font-light">Contact Us</a><br>
            <a class="text-uppercase login-button" href="https://sciastra.com/app/">Login</a>
        </center>
    </div>
</div>
<script>
    function openNavtanmay() {
        document.getElementById('openmenubtn').style.display = 'None';
        document.getElementById('menutoopen').style.width = '100%';
    }

    function closeNavtanmay() {
        document.getElementById('openmenubtn').style.display = 'Block';
        document.getElementById('menutoopen').style.width = '0%';
    }
</script>
<script>
    const btn = document.querySelector(".closebtn");
    btn.addEventListener("click", function() {
        btn.classList.toggle("change-position");
    });
</script>
<script>
    window.addEventListener("scroll", function() {
        if (window.pageYOffset > 70) {
            document.querySelector("header").classList.add("hidden");
        } else {
            document.querySelector("header").classList.remove("hidden");
        }
    });
</script>