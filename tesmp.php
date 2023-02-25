<head>
    <meta name="description" content="Online courses for iiser pune, niser, isi, cmi, cebs, iacs. Best preparation classes books, mock tests, previous year papers for IAT, NEST, ISI, CMI, CEBS, IACS
"/>
       <meta name="keywords" content="iiser preparation, iiser mock tests, niser preparation, isi preparation classes, cmi preparation classes, online cmi exam preparation app, iacs preparation classes
"/>
<title> SciAstra x TVISHA - the annual inter college fest of NISER </title>
<link rel="stylesheet" href="./../Assets/Css/s6css.css">
<link rel="stylesheet" href="./../Assets/Css/Common.css">
<style>
@media(min-width:993px) {
    .sixty {
        float: left;
        padding-left: 2%;
        padding-right: 2%;
        width: 60%;
    }
    .forty {
        float: left;
        padding-left: 2%;
        padding-right: 2%;
        width: 40%;
    }
}
@media(max-width:992px) {
    .sixty {
        float: left;
        padding-left: 2%;
        padding-right: 2%;
        width: 100%;
        padding-bottom: 15px;
    }
    .forty {
        float: left;
        padding-left: 2%;
        padding-right: 2%;
        width: 100%;
    }
}
.flex-wrapper {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
    justify-content: space-between;
}
.review_all {
    margin: auto;
    width: 300px;
    padding: 20px;
    border: 0.5px solid #BE93D4;
    border-top-style: none;
    /* margin:30px; */
    box-shadow: 0.5px 0.5px 0.5px #BE93D4;
    border-radius: 5px;
}
.mentor_section {
    color: black;
    padding: 15px;
    list-style: none;
    margin-right: 30px;
}
.mentor_all {
    margin-top: 200px;
    font-size: 25px;
}
.calendly-inline-widget {
    margin-top: 70px;
    min-width: 320px;
    height: 630px;
}
.mentor_all li:before {
    content: "\2714";
    background: linear-gradient(111.3deg, rgb(74, 105, 187) 9.6%, rgb(205, 77, 204) 93.6%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-right: 20px;
}
.coursesub2 {
    display: flex;
}
.course_head {
    margin-left: 10px;
    margin-top: 10px;
    padding: 10px;
}
.course {
    font-size: 23px;
    width: 150px;
    padding: 10px;
    border: 0.5px solid #BE93D4;
    border-top-style: none;
    margin: 10px;
    box-shadow: 0.5px 0.5px 0.5px #BE93D4;
    border-radius: 5px;
    background: linear-gradient(#234EB0, #B656E2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.paying {
    margin-top: 50px;
}
.paynow {
    font-size: 30px;
}
.booknow {
    margin-top: 15px;
}
.booknow a {
    font-size: 23px;
    width: 150px;
    padding: 10px;
    border: 2px solid #BE93D4;
    /* border-top-style:none; */
    margin: 10px;
    box-shadow: 1px 1px 1px #BE93D4;
    border-radius: 10px;
    background: linear-gradient(#234EB0, #B656E2);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.booknow a:hover {
    background: #BE93D4;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
@media screen and (max-width:360px) {
    .course {
        width: 120px;
        font-size: 18px;
    }
    .course_head {
        margin-left: 10px;
    }
    .coursesub2 {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .mentor_all {
        margin-top: 10px;
        font-size: 16px;
    }
    .review_all {
        font-size: 12px;
        width: 200px;
        margin: 50px;
    }
}
@media (min-width:361px) and (max-width:375px) {
    .course {
        width: 100px;
        font-size: 18px;
    }
    .course_head {
        margin-left: 10px;
    }
    .coursesub2 {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .mentor_all {
        margin-top: 10px;
        font-size: 17px;
    }
    .review_all {
        margin-top: 30px;
        font-size: 15px;
        width: 280px;
    }
}
@media (min-width:376px) and (max-width:414px) {
    .course_head {
        margin-left: 10px;
    }
    .coursesub2 {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .mentor_all {
        margin-top: 10px;
        font-size: 17px;
    }
    .calendly-inline-widget {
        /* display:flex; */
        align-items: center;
        /* justify-content:center; */
    }
    .review_all {
        margin-top: 50px;
    }
}
@media (min-width:415px) and (max-width:820px) {
    .course_head {
        margin-left: 10px;
        margin-top: 70px;
    }
    .mentor_all {
        font-size: 20px;
    }
    .coursesub2 {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .mentor_all {
        margin-top: 10px;
    }
}
@media (min-width:821px) and (max-width:1024px) {
    .course_head {
        margin-left: 50px;
        margin-top: 70px;
    }
    .mentor_all {
        font-size: 19px;
    }
}
.main__footer {
    background-image: url(https://files.sciastra.com/footermain.jpg) !important;
}


</style>
</head>
<div class="flex-wrapper">
    <?php
$pageTitle = 'courses';
$pT='courses';
include('./Includes/Conn.php');
$count = 0;
$ContentCount = 0;
$tab_heading = '';
$tab_content = '';
$newlink = 'https://www.sciastra.com/courses.php';
$name = 'Courses';
include('./data-collect.php');
// Query For Desktop Courses Page
$selectExam = "SELECT * FROM `college_cat` WHERE `college_cat_status` = 'Active' ORDER BY `college_display_order` ASC";
$exeSelectExam = mysqli_query($conn, $selectExam);
while ($rowExam = mysqli_fetch_assoc($exeSelectExam)) {
    if ($count == 0) {
        $tab_heading .= ' <button class="nav-link course__left__side__li__a mb-4 px-5 py-3 btn active" id="' . $rowExam['college_car_id'] . '" data-bs-toggle="pill" data-bs-target="#pills-' . $rowExam['college_car_id'] . '" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">' . $rowExam['college_cat_name'] . '</button>';
        $tab_content .= '<div class="tab-pane fade showive row" id="pills-' . $rowExam['college_car_id'] . '" role="tabpanel" aria-labelledby="pills-' . $rowExam['college_car_id'] . '" tabindex="' . $rowExam['college_car_id'] . '">';
    } else {
        $tab_heading .= ' <button class="nav-link course__left__side__li__a mb-4 px-5 py-3 btn" id="' . $rowExam['college_car_id'] . '" data-bs-toggle="pill" data-bs-target="#pills-' . $rowExam['college_car_id'] . '" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">' . $rowExam['college_cat_name'] . '</button>';
        $tab_content .= '<div class="tab-pane fade row" id="pills-' . $rowExam['college_car_id'] . '" role="tabpanel" aria-labelledby="pills-' . $rowExam['college_car_id'] . '" tabindex="' . $rowExam['college_car_id'] . '">';
    }
    $productQuery = "SELECT * FROM `courses` WHERE `course_college_id` LIKE '%" . $rowExam['college_car_id'] . "%' AND `course_status` = 'Active'";
    $productResult = mysqli_query($conn, $productQuery);
    if (mysqli_num_rows($productResult) > 0) {
        if (mysqli_num_rows($productResult) < 2) {
            while ($proRow = mysqli_fetch_assoc($productResult)) {
                $dis_price = ($proRow['course_org_amt'] - $proRow['course_dis_amt']) / $proRow['course_org_amt'] * 100;
                $tab_content .= '<div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-4" style="width:25rem;">
                <div class="p-4 rounded-3 course__right__side__card">
                    <h1 class="course__main__heading fs-3 mb-3">
                        ' . $proRow['course_title'] . '
                    </h1>
                    <a href="' . $proRow['course_detail_link'] . '" class="text-black-50 fw-semibold ">View Details
                        &nbsp;
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <div class="d-flex justify-content-between mt-4 align-items-center">
                        <div class="position-relative">';
                if ($proRow['course_org_amt'] != $proRow['course_dis_amt']) {
                    $tab_content .= '<p class="course__section__price mb-0 old__price">
                                &#8377;&nbsp;' . $proRow['course_org_amt'] . '
                            </p>
                            <p class="course__section__price mb-0 new__price ">
                                &#8377;&nbsp;' . $proRow['course_dis_amt'] . '
                            </p>';
                } else {
                    $tab_content .= '<p class="course__section__price mb-0 new__price ">
                                &#8377;&nbsp;' . $proRow['course_dis_amt'] . '
                            </p>';
                }
                if ($proRow['course_org_amt'] == $proRow['course_dis_amt']) {
                    $tab_content .= '<p class="course__discount__batch d-none">' . intval($dis_price) . '% OFF</p>';
                } else {
                    $tab_content .= '<p class="course__discount__batch">' . intval($dis_price) . '% OFF</p>';
                }
                $tab_content .= '</div>
                        <a href="'.$proRow['course_detail_link'].'" class="course__buy__btn">
                            <span>
                                Buy Now
                            </span>
                        </a>
                    </div>
                </div>
            </div>';
            }
        } else {
            while ($proRow = mysqli_fetch_assoc($productResult)) {
                $dis_price = ($proRow['course_org_amt'] - $proRow['course_dis_amt']) / $proRow['course_org_amt'] * 100;
                $tab_content .= '<div class="col-12 col-sm-4 col-md-6 col-lg-6 col-xl-4 mb-4">
                <div class="p-4 rounded-3 course__right__side__card">
                    <h1 class="course__main__heading fs-3 mb-3">
                        ' . $proRow['course_title'] . '
                    </h1>
                    <a href="' . $proRow['course_detail_link'] . '" class="text-black-50 fw-semibold ">View Details
                        &nbsp;
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    <div class="d-flex justify-content-between mt-4 align-items-center">
                        <div class="position-relative">';
                if ($proRow['course_org_amt'] != $proRow['course_dis_amt']) {
                    $tab_content .= '<p class="course__section__price mb-0 old__price">
                        &#8377;&nbsp;' . $proRow['course_org_amt'] . '
                    </p>
                    <p class="course__section__price mb-0 new__price ">
                        &#8377;&nbsp;' . $proRow['course_dis_amt'] . '
                    </p>';
                } else {
                    $tab_content .= '<p class="course__section__price mb-0 new__price ">
                    &#8377;&nbsp;' . $proRow['course_dis_amt'] . '
                </p>';
                }
                if ($proRow['course_org_amt'] == $proRow['course_dis_amt']) {
                    $tab_content .= '<p class="course__discount__batch d-none">' . intval($dis_price) . '% OFF</p>';
                } else {
                    $tab_content .= '<p class="course__discount__batch">' . intval($dis_price) . '% OFF</p>';
                }
                $tab_content .= '</div>
                        <a href="' . $proRow['course_detail_link'] . '" class="course__buy__btn">
                            <span>
                                Buy Now
                            </span>
                        </a>
                    </div>
                </div>
            </div>';
            }
        }
    } else {
        $tab_content .= "<h4>Sorry !! No Actice Course Found...</h4>";
    }
    $tab_content .= '</div>';
    $count++;
}
?>
    <?php include('./../Includes/testhead.php'); ?>
    <?php include('./Includes/Header.php');?>
    <!-- Header -->
    <style>
    @media (max-width:1024px) {
        video {
            width: 100% !important;
        }
    }
    </style>
    <!-- section - 2 -->
    <section class="second__section position-relative">


        <h1 class="second__section__heading s-hide-small py-2">
           Tvisha Science Sprint
            <br><br>
            <span class="fs-4 font-semibold">
                A science quiz organised by the students of NISER
            </span>
        </h1>



        <h6 class="second__section__heading py-2 s-hide-medium s-hide-large">
            Tvisha Science <br><br> Sprint
            <br><br>
            <span class="fs-4 font-semibold">
                A science quiz organised by the students of NISER
            </span>
        </h6>
        <div class="second__section__heading__rocket position-absolute d-none d-lg-block">
            <img src="./sci.png" class="" alt="">
        </div>
    </section>
    <!-- section - 2 -->
    <!-- Courses Section For Desktop Only -->
    <!-- <section class="course__section d-none d-lg-flex mx-5 border rounded-1 p-5">
        <div class="row">
            <div class="col-12 col-lg-5 col-xl-4">
                <div class="course__left__side ">
                    <h1 class="course__left__side__heading fs-3 px-5">
                        Colleges
                    </h1>
                    <div class="course__left__side__ul__cont px-3 py-3 ">
                        <ul class="mt-6 tabs list-unstyled pe-5">
                            <?php echo $tab_heading; ?>
                        </ul>
                    </div>
                </div>
            </div>
    </section> -->
    <!-- Courses Section For Desktop Only -->
    <!-- Courses Section For Desktop Only -->
    <section class="course__section d-none d-lg-flex mx-5 border rounded-1 p-5">
        <div class="d-flex align-items-start w-100">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <h5 class="course__left__side__heading mb-lg-4">
                    Colleges
                </h5>
                <div class="nav-pills--inner--container">
                    <?php echo $tab_heading; ?>
                </div>
            </div>
            <div class="tab-content w-100" id="v-pills-tabContent">
                <div class="">
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <h5 class="course__left__side__heading mb-lg-4 ps-3">
                                Courses
                            </h5>
                        </div>
                        <div class="col-md-4 ms-auto">
                            <form action="search.php" method="POST">
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        placeholder="Polymers, Biomolecules, Chemistry in everyday life, etc..."
                                        value="" name="searchBar" id="searchBar" required>
                                    <button class="btn border" type="submit" value="Search"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php echo $tab_content; ?>
            </div>
        </div>
    </section>
    <!-- Courses Section For Desktop Only -->
    <!-- Courses Section For Mobile Only -->
    <section class="accordion__mobile mx-10 mt-20 d-block d-lg-none">
        <div class="accordion__mobile__top flex items-center my-5 justify-between">
            <h1 class="accordion__mobile__top__heading text-xl font-semibold">Colleges</h1>
            <input type="text" name="" id="seacrch_bar_id" style="display:none">
        </div>
        <div class="accordion js-accordion">
            <?php
        $accMobileCount = 0;
        $MobileselectExam = "SELECT * FROM `college_cat` WHERE `college_cat_status` = 'Active' ORDER BY `college_display_order` ASC";
        $MobileexeSelectExam = mysqli_query($conn, $MobileselectExam);
        while ($MobilerowExam = mysqli_fetch_assoc($MobileexeSelectExam)) {
            if ($accMobileCount == 0) {
        ?>
            <div class="accordion__item js-accordion-item active">
                <div class="accordion-header js-accordion-header" id="<?php echo $MobilerowExam['college_car_id']; ?>">
                    <span>
                        <?php echo $MobilerowExam['college_cat_name']; ?>
                    </span>
                </div>
                <div class="accordion-body js-accordion-body">
                    <div class="accordion-body__contents">
                        <section class="text-gray-600 body-font">
                            <div class="container px-0 px-lg-5 py-0 mx-auto">
                                <section class="text-gray-600 body-font">
                                    <div class="px-0 px-lg-5 py-0 mx-auto">
                                        <div class="row">
                                            <?php
                                                $productQueryMobile = "SELECT * FROM `courses` WHERE `course_status` = 'Active' AND `course_college_id` = '" . $MobilerowExam['college_car_id'] . "'";
                                                $exeProductMobile = mysqli_query($conn, $productQueryMobile);
                                                if (mysqli_num_rows($exeProductMobile) > 0) {
                                                    while ($rowProductMobile = mysqli_fetch_assoc($exeProductMobile)) {
                                                        $dis_price_mobile = ($rowProductMobile['course_org_amt'] - $rowProductMobile['course_dis_amt']) / $rowProductMobile['course_org_amt'] * 100;
                                                ?>
                                            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mb-4">
                                                <div class="p-4 rounded-3 course__right__side__card">
                                                    <h1 class="course__main__heading fs-3 mb-3">
                                                        <?php echo $rowProductMobile['course_title']; ?></h1>
                                                    <a href="<?php echo $rowProductMobile['course_detail_link']; ?>"
                                                        class="text-black-50 fw-semibold ">View Details
                                                        &nbsp;
                                                        <i class="bi bi-arrow-right"></i>
                                                    </a>
                                                    <div
                                                        class="d-flex justify-content-between mt-4 align-items-center flex-wrap">
                                                        <div class="position-relative">
                                                            <?php
                                                                        if ($rowProductMobile['course_org_amt'] == $rowProductMobile['course_dis_amt']) {
                                                                        ?>
                                                            <p class="course__section__price mb-0 old__price">
                                                                &#8377;&nbsp;<?php echo $rowProductMobile['course_org_amt']; ?>
                                                            </p>
                                                            <?php
                                                                        } else {
                                                                        ?>
                                                            <p class="course__section__price mb-0 old__price">
                                                                &#8377;&nbsp;<?php echo $rowProductMobile['course_org_amt']; ?>
                                                            </p>
                                                            <p class="course__section__price mb-0 new__price ">
                                                                &#8377;&nbsp;<?php echo $rowProductMobile['course_dis_amt']; ?>
                                                            </p>
                                                            <?php
                                                                        }
                                                                        ?>
                                                            <?php
                                                                        if ($rowProductMobile['course_org_amt'] != $rowProductMobile['course_dis_amt']) {
                                                                        ?>
                                                            <p class="course__discount__batch">
                                                                <?php echo intval($dis_price_mobile); ?>% OFF</p>
                                                            <?php } ?>
                                                        </div>
                                                        <a href="<?php echo $rowProductMobile['course_detail_link']?>"
                                                            class="course__buy__btn">
                                                            <span>
                                                                Buy Now
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                                    }
                                                } else {
                                                    echo "No Related Courses Found";
                                                }
                                                ?>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </div>
                </div><!-- end of accordion body -->
            </div><!-- end of accordion item -->
            <?php
            } else {
            }
            ?>
            <?php } ?>
        </div><!-- end of accordion -->
    </section>
    <!-- Courses Section For Mobile Only -->
    <section class="my-8">
        <div class="mentor_head">


            <h1 class="video__section__main__heading fs-1 fw-bold mb-md-1 text-center">
                About TSS
            </h1>


        </div>
        <div class="container">
            <div class="">
                Attention all young science enthusiasts! Are you ready to put your knowledge to the test and
                compete with students from all over India? Look no further than Tvisha Science Sprint, a
                science quiz organized by students of NISER as a part of TVISHA - the annual inter college fest
                of NISER.
                The National Institute of Science Education and Research (NISER) is a premier research
                institution located in Bhubaneswar, Odisha, India. It was established in 2007 by the Department
                of Atomic Energy (DAE), Government of India, with a mandate to train and develop scientific
                manpower for carrying out cutting-edge research in various fields of science.
                This online quiz is open to all students from classes 6 to 12, so whether you're just starting out
                in the world of science or you're already a seasoned expert, there's a place for you in this
                exciting competition
            </div>
        </div>
    </section>
    <!-- Video Section  -->
    <section class="my-4">
        <div class="container-fluid container">
            <div class="text-center ">
                <h1 class="video__section__main__top__heading fs-4 mb-0">The Best Part ?
                    <h1 class="video__section__main__heading fs-1 fw-semibold mb-1">
                        Rewards
                    </h1>
                    <p class="video__section__main__content text-base xl:w-2/4 lg:w-3/4 mx-auto ">
                    <ul class="text-left">
                        <li>
                            All participants will receive a certificate, so you'll have something to show for your
                            hard work and dedication.
                        </li>
                        <li>
                            But that's not all - the All India class toppers will get an amazing opportunity to
                            visit NISER, Bhubaneswar, along with one guardian during the fest. You'll receive
                            full accommodation and food, and even have your sleeper class tickets fare
                            reimbursed! It's an incredible chance to see a leading scientific institution up
                            close and personal.
                        </li>
                        <li>
                            And if you're a state topper, you'll receive a trophy to commemorate your
                            achievement. Even zonal toppers of each class will be invited to visit NISER,
                            Bhubaneswar during fest, along with one guardian, although they will have to
                            bear the cost.
                        </li>
                        <li>
                            But the real prize here is the chance to show off your knowledge and compete
                            with other young scientists from around the country. And with prizes worth Rs
                            3,00,000 up for grabs as form SciAstra vouchers, who knows what amazing
                            opportunities could be waiting for you?
                        </li>
                        <li>
                            Any 100 of students from the total pariticipant will get a chance to have an
                            interaction and a mentorship sesion with one of the top Scientists of the country.
                            So don't hesitate - sign up for Tvisha Science Sprint today and see where your curiosity and
                            dedication can take you!
                        </li>
                    </ul>
                    </p>
            </div>
        </div>
    </section>
    <!-- Feedback Section  -->
    <!-- Main Footer  -->
    <?php include('./Includes/Footer.php'); ?>
</div>
<script>
// Accordion
var accordion = (function() {
    var $accordion = $('.js-accordion');
    var $accordion_header = $accordion.find('.js-accordion-header');
    var $accordion_item = $('.js-accordion-item');
    // default settings
    var settings = {
        // animation speed
        speed: 400,
        // close all other accordion items if true
        oneOpen: false
    };
    return {
        // pass configurable object literal
        init: function($settings) {
            $accordion_header.on('click', function() {
                accordion.toggle($(this));
            });
            $.extend(settings, $settings);
            // ensure only one accordion is active if oneOpen is true
            if (settings.oneOpen && $('.js-accordion-item.active').length > 1) {
                $('.js-accordion-item.active:not(:first)').removeClass('active');
            }
            // reveal the active accordion bodies
            $('.js-accordion-item.active').find('> .js-accordion-body').show();
        },
        toggle: function($this) {
            if (settings.oneOpen && $this[0] != $this.closest('.js-accordion').find(
                    '> .js-accordion-item.active > .js-accordion-header')[0]) {
                $this.closest('.js-accordion')
                    .find('> .js-accordion-item')
                    .removeClass('active')
                    .find('.js-accordion-body')
                    .slideUp()
            }
            // show/hide the clicked accordion item
            $this.closest('.js-accordion-item').toggleClass('active');
            $this.next().stop().slideToggle(settings.speed);
        }
    }
})();
$(document).ready(function() {
    accordion.init({
        speed: 300,
        oneOpen: true
    });
});
// Functionality For searchBar
// $(document).ready(function() {
//     $('#searchBar').on('keyup', function() {
//         let input = $(this).val().toLowerCase();
//         console.log("Input -->" + input);
//         let targetValue = $('.course__right__side__card')
//         console.log("targetValue -->" + targetValue);
//         targetValue.filter(function() {
//             $(this).toggle($(this).text().toLowerCase().indexOf(input) > -1)
//         })
//     })
// })
</script>