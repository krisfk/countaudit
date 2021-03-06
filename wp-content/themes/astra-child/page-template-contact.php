<?php
/**
 * Template Name: Contact page
 * Template Post Type: page
 **/


// if ( ! defined( 'ABSPATH' ) ) {
	// exit; // Exit if accessed directly.
// }

get_header(); ?>

<div class="main-banner"
    style="background:url(<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-1.jpg)">

    <div class="position-absolute top-0 start-0 w-100 h-100">
        <div class="container title-container">
            <div><?php echo get_field('title_txt');?></div>
        </div>
    </div>


    <img class="main-banner-img" src="<?php echo get_site_url();?>/wp-content/uploads/2021/12/main-banner-bg-1.jpg"
        alt="">
        
</div>






<?php echo get_field('content_1');?>


<div class="map-div">
    <?php echo get_field('content_2');?>
</div>


<div class="grey-bg-2">


    <div class="container contact-form-container">
        <div class="row   align-items-center">
           
        
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
                    $send_content .='??????:'.$client_name.'<br>';
                    $send_content .='????????????:'.$tel.'<br>';
                    $send_content .='??????:'.$email.'<br>';
                    $send_content .='????????????:'.$enquiry_type.'<br>';
                    $send_content .='????????????:'.$message.'<br>';
                 
                    $headers = array(
                        'From: Countaudit <info@countaudit.com>',
                      );
                      
                wp_mail( $receive_email, 'Countaudit ????????????(from '.$client_name.')', $send_content,$headers );   
               
                
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

                    <input type="text" class="form-control" placeholder="??????????????????">
                    <input type="text" class="form-control" placeholder="????????????">
                    <input type="text" class="form-control" placeholder="??????">
                    <input type="text" class="form-control" placeholder="????????????">
                    <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="????????????"></textarea>

                    <div class="text-end">
                        <a href="#" class="blue-bg white submit-btn mt-3">????????????</a>
                    </div>

                </div> -->
                <!-- <form id="form" action="" method="post"> <input type="hidden" name="form-type" value="general_enquiry">
                    <div class="form-div white-bg contact-form-div"> <input type="text" class="form-control"
                            placeholder="??????????????????*" name="client-name" required> <input type="text" class="form-control"
                            placeholder="????????????" name="tel"> <input type="text" class="form-control" placeholder="??????*"
                            required name="email" required> <select required name="enquiry-type" id="enquiry-type"
                            class="form-control">
                            <option value="">????????????*</option>
                            <option value="??????">??????</option>
                            <option value="??????">??????</option>
                            <option value="??????">??????</option>
                            <option value="????????????">????????????</option>
                            <option value="????????????">????????????</option>
                            <option value="????????????">????????????</option>
                            <option value="??????">??????</option>
                        </select> <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="????????????"
                            name="message"></textarea>
                        <div class="text-end"> <input type="submit" value="????????????" class="form-submit-btn"></div>
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