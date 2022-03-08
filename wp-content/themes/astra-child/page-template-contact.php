<?php
/**
 * Template Name: Contact page
 * Template Post Type: page
 **/


// if ( ! defined( 'ABSPATH' ) ) {
	// exit; // Exit if accessed directly.
// }

get_header(); ?>

<div class="main-banner">

    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="container title-container">
            <div><?php echo get_field('title_txt');?></div>
        </div>
    </div>


    <!-- <img class="main-banner-img" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/banner-bg.jpg" alt=""> -->

    <img class="main-banner-img" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-1.jpg"
        alt="">
    <!-- <img src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/banner-bg.jpg" alt=""> -->

</div>


<!-- <div class="container contact-pts-ul-wrapper-container">

    <ul class="contact-pts-ul  p-0 ">
        <li>
            <img class="contact-pts-icon"
                src="http://64.227.13.14/countaudit/wp-content/uploads/2022/01/contact-icon-1.png" alt="">

            <h3 class="white m-0 fw-bold">VISIT US</h3>
            <div>可預約會面</div>

            <div class="gold mt-3">Lai Chi Kok Office</div>
            <div>Flat C, 11/F., Wing Hong Centre, 18 Wing Hong Street, Lai Chi Kok, Kowloon
                Unit C, 4/F, 760 Cheung Sha Wan Rd, Lai Chi Kok, Kowloon</div>

            <div class="gold mt-3">Kwun Tong Office</div>
            <div>Unit 9039, 9/F, Block B, Chung Mei Centre, 15-17 Hing Yip Street, Kwun Tong, Kowloon, Hong Kong
            </div>
        </li>
        <li>
            <img class="contact-pts-icon"
                src="http://64.227.13.14/countaudit/wp-content/uploads/2022/01/contact-icon-2.png" alt="">
            <h3 class="white m-0 fw-bold">CALL US</h3>
            <div>可致電或Whatsapp我們</div>

            <div class="gold mt-3">3525 1900
            </div>
            <div>Office hour: Mon to Fri 10am - 7pm
            </div>

            <div class="gold mt-3">6519 4755 </div>
            <div>Office hour: Mon to Fri 10am - 7pm

            </div>
        </li>
        <li>
            <img class="contact-pts-icon"
                src="http://64.227.13.14/countaudit/wp-content/uploads/2022/01/contact-icon-3.png" alt="">
            <h3 class="white m-0 fw-bold">CONTACT US</h3>
            <div>數小時內回覆</div>

            <div class="mt-3">
                <a class="gold no-deco" href="#" target="_blank">info@countaudit.hk
                </a>
            </div>
        </li>

    </ul>

</div> -->


<?php echo get_field('content_1');?>

<!-- <iframe class="map-iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
    src="https://maps.google.com/maps?q=CountAudit%20Secretarial%20Limited&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
    aria-label="CountAudit Secretarial Limited"></iframe> -->

<div class="map-div">
    <?php echo get_field('content_2');?>
</div>


<div class="grey-bg-2">


    <div class="container contact-form-container">
        <div class="row   align-items-center">
            <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">
                <div class="text-start">
                    <div>
                        <h4 class="gold">//明碼實價
                        </h4>
                    </div>
                    <div>
                        <h2 class="blue">索取服務報價</h2>
                        <div class="small">請聯絡我們並提供資料，即時能獲取準確報價</div>
                    </div>


                </div>
            </div> -->
            <?php echo get_field('content_3');?>


            <div class="col-lg-6 col-md-12 col-sm-12 col-12  p-lg-5 p-md-5 p-sm-3 p-3 ">
                <?php echo get_field('content_4');?>


                <?php
if ($_POST) {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LdMWbweAAAAANK8OWHVYPts4avJ5fblHpeBpV-C',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }
   $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        ?>
                <script type="text/javascript">
                $(function() {

                    $('.lightbox').fadeIn(200);
                    $('.lightbox-msg-txt').html(
                        'Please go back and make sure you check the security CAPTCHA box.');

                })
                </script>
                <?php
    } else {


        if($_POST)
        {
            global $receive_email;

                    $client_name=$_POST['client-name'];
                    $tel=$_POST['tel'];
                    $email=$_POST['email'];
                    $enquiry_type=$_POST['enquiry-type'];
                    $message = $_POST['message'];
                    $send_content='';
                    $send_content .='稱呼:'.$client_name.'<br>';
                    $send_content .='聯絡電話:'.$tel.'<br>';
                    $send_content .='電郵:'.$email.'<br>';
                    $send_content .='查詢類別:'.$enquiry_type.'<br>';
                    $send_content .='簡短留言:'.$message.'<br>';
                 
                    $headers = array(
                        'From: Countaudit <info@countaudit.com>',
                      );
                      
                wp_mail( $receive_email, 'Countaudit 一般查詢(from '.$client_name.')', $send_content,$headers );   
               
                
        }
        
        ?>
                <script type="text/javascript">
                $(function() {

                    $('.lightbox').fadeIn(200);
                    $('.lightbox-msg-txt').html(
                        'Submitted successfully, we will get back to you soon.');

                })
                </script>
                <?php
    }
}

?>
                <!-- <div class="form-div white-bg contact-form-div">

                    <input type="text" class="form-control" placeholder="如何稱呼您？">
                    <input type="text" class="form-control" placeholder="聯絡電話">
                    <input type="text" class="form-control" placeholder="電郵">
                    <input type="text" class="form-control" placeholder="查詢類別">
                    <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="簡短留言"></textarea>

                    <div class="text-end">
                        <a href="#" class="blue-bg white submit-btn mt-3">服務報價</a>
                    </div>

                </div> -->
                <!-- <form id="form" action="" method="post"> <input type="hidden" name="form-type" value="general_enquiry">
                    <div class="form-div white-bg contact-form-div"> <input type="text" class="form-control"
                            placeholder="如何稱呼您？*" name="client-name" required> <input type="text" class="form-control"
                            placeholder="聯絡電話" name="tel"> <input type="text" class="form-control" placeholder="電郵*"
                            required name="email" required> <select required name="enquiry-type" id="enquiry-type"
                            class="form-control">
                            <option value="">查詢類別*</option>
                            <option value="稅務">稅務</option>
                            <option value="會計">會計</option>
                            <option value="審計">審計</option>
                            <option value="成立公司">成立公司</option>
                            <option value="管理公司">管理公司</option>
                            <option value="僱傭條例">僱傭條例</option>
                            <option value="其他">其他</option>
                        </select> <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="簡短留言"
                            name="message"></textarea>
                        <div class="text-end"> <input type="submit" value="服務報價" class="form-submit-btn"></div>
                    </div>
                </form> -->
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
<script type="text/javascript">
$(function() {
    $('.about-carousel').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        autoplay: false,
        pauseOnFocus: false,
        infinite: true,
        speed: 800,
        autoplaySpeed: 5000,
        cssEase: 'ease-out',
        pauseOnHover: false

    });




})
</script>
</body>

</html>