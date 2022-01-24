<?php
/**
 * Template Name: Service page
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


    <img class="main-banner-img" src="http://64.227.13.14/countaudit/wp-content/uploads/2021/12/main-banner-bg-1.jpg"
        alt="">


</div>


<div class="container banner-bottom-blue-container">

    <div class="p-4">
        <h3 class="white text-center">We'd Love To Meet You <br>And Let You The Perfect Solution</h3>

        <ul class="gold-btn-ul">
            <li> <a class="gold-btn" href="javascript:void(0);"> SCHEDULE A MEETING</a></li>
            <li><a class="gold-btn" href="javascript:void(0);">CONTACT US</a></li>
            <li><a class="gold-btn" href="javascript:void(0);">DOWNLOAD BROCHURE</a></li>
        </ul>
        <!-- <div class="text-end gold small">CountAudit宗旨</div> -->
    </div>
</div>

<div class="container mt-5">


    <div class="row justify-content-center gx-5">
        <div class="col-lg-5 col-md-10 col-sm-10 col-10  mb-5">
            <div class="img-shadow-div grey-bg p-3">

                <img class="w-100" src="<?php echo wp_get_attachment_image_src(get_field('service_image'),'full')[0];?>"
                    alt="">
                <div class="deep-blue">
                    <h3 class="blue mt-3">我們是CountAudit算數會計師事務所</h3>
                    <div class=" mt-3">是真正在hkicpa登記的執業會計師事務所<br>PC Firm Registration Number:<br>2589</div>
                </div>

                <div class="text-end mt-3">
                    <a href="javascript:void(0);" class="service-contact-btn">Registry</a>
                </div>
                <div class="img-shadow"></div>


            </div>


        </div>
        <div class="col-lg-5 col-md-10 col-sm-10 col-10 ">
            <div class="text-start">
                <?php echo get_field('service_content');?>
                <!--
                    
                <div>
                    <h4 class="gold"> //HK$3,500起
                    </h4>
                </div>
                <div>
                    <h2 class="blue"> 有限公司周年審計服務 </h2>
                    <div class="small-2">價格包括以下服務﹕</div>
                </div>

                <ul class="service-ul mt-4">
                    <li>審計核數服務</li>
                    <li> 編制財務年報</li>
                    <li> 委任為稅務代表</li>
                    <li> 填妥利得稅報稅表</li>
                    <li> 遞交報稅表</li>
                    <li> 稅務建議</li>
                    <li> 其他雜項費用</li>

                </ul>

                <div class="mt-4">如您需要，我們也可負責將不完整的賬目完善直到合乎審計標準，詳情另議。
                    會有專人跟進回覆提問及與客戶商討解決其所有困難。不計工作時間，以解決客人問題為本。</div>
                 -->
            </div>
        </div>
    </div>





</div>


<div class="grey-bg-2 mt-5">


    <div class="container contact-form-container">
        <div class="row pt-0 pb-0  mt-0 align-items-center justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12  text-center mt-5">

                <div>
                    <div>
                        <h4 class="gold">//明碼實價

                        </h4>
                    </div>
                    <div>
                        <h2 class="blue"> 索取服務報價 </h2>
                        <div class="small">請聯絡我們並提供資料，即時能獲取準確報價</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12  p-lg-5 p-md-5 p-sm-3 p-3 ">

                <h4 class="text-center lh-base"> Quotation Form of Accounting Service <br>
                    會計服務報價表</h4>



                <form action="" method="post" enctype="multipart/form-data">

                    <div class="form-div white-bg mt-4">

                        <div class="row  align-items-center">
                            <div class="col-12">
                                <h4 class="text-center mb-4"> Contact Information 聯絡資料</h4>
                            </div>
                        </div>


                        <div class="row  align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="name">Name 姓名:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="name" name="name"
                                    type="text" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="tel">Tel 電話:</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="tel" name="tel" type="text"
                                    class="form-control">
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="email">E-mail 電郵:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="email" name="email"
                                    type="text" class="form-control">
                            </div>



                            <div class="col-12">
                                <h4 class="text-center mb-4">Company Information 公司資料</h4>
                            </div>



                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="company-name">Company name
                                    公司名稱</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="company-name"
                                    name="company-name" type="text" class="form-control"></div>



                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="principal-activities">Principal activities
                                    主要業務</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3 mb-3"><input id="principal-activities"
                                    name="principal-activities" type="text" class="form-control"></div>



                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="performed-audit-before">Has performed audit before?
                                    是否曾進行核數</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="performed-audit-before"
                                        id="performed-audit-before-yes" value="yes">
                                    <label class="form-check-label" for="performed-audit-before-yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="performed-audit-before"
                                        id="performed-audit-before-no" value="no">
                                    <label class="form-check-label" for="performed-audit-before-no">
                                        No
                                    </label>
                                </div>

                            </div>






                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="year-ended-date"> If Yes,
                                    please provide the related
                                    year
                                    ended
                                    date
                                    <br>
                                    如是，請提供相關年結日</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="year-ended-date"
                                    name="year-ended-date" type="text" class="form-control">
                            </div>




                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="declared-profits-tax-before">Has declared profits
                                    tax
                                    before?
                                    <br>
                                    是否曾申報利得稅</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="declared-profits-tax-before"
                                        id="declared-profits-tax-before-yes" value="yes">
                                    <label class="form-check-label" for="declared-profits-tax-before-yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="declared-profits-tax-before"
                                        id="declared-profits-tax-before-no" value="no">
                                    <label class="form-check-label" for="declared-profits-tax-before-no">
                                        No
                                    </label>
                                </div>

                            </div>






                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="year-assessment"> If Yes,
                                    please provide the related
                                    year of
                                    assessment
                                    <br>
                                    如是，請提供相關課稅年度</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="year-assessment"
                                    name="year-assessment" type="text" class="form-control">
                            </div>





                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="done-accounting-before">Has done accounting before?
                                    <br>
                                    是否曾做會計帳</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="done-accounting-before"
                                        id="done-accounting-before-yes" value="yes">
                                    <label class="form-check-label" for="done-accounting-before-yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="done-accounting-before"
                                        id="done-accounting-before-no" value="no">
                                    <label class="form-check-label" for="done-accounting-before-no">
                                        No
                                    </label>
                                </div>

                            </div>






                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="year-ended-date-2"> If
                                    Yes, please provide the
                                    related
                                    year
                                    ended
                                    date
                                    <br>
                                    如是，請提供相關年結日</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="year-ended-date-2"
                                    name="year-ended-date-2" type="text" class="form-control">
                            </div>







                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="reporting-frequency">Reporting Frequency <br>
                                    會計匯報頻率</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reporting-frequency"
                                        id="reporting-frequency-monthly" value="monthly">
                                    <label class="form-check-label" for="reporting-frequency-monthly">
                                        每月 Monthly
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reporting-frequency"
                                        id="reporting-frequency-quarterly" value="quarterly">
                                    <label class="form-check-label" for="reporting-frequency-quarterly">
                                        每季 Quarterly
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reporting-frequency"
                                        id="reporting-frequency-yearly" value="yearly">
                                    <label class="form-check-label" for="reporting-frequency-yearly">
                                        每年 Yearly
                                    </label>
                                </div>

                            </div>





                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="excel-for-business-records">
                                    Has done Excel for business records? <br>
                                    有否做Excel營業記錄？


                                </label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="excel-for-business-records"
                                        id="excel-for-business-records-yes" value="yes">
                                    <label class="form-check-label" for="excel-for-business-records-yes"
                                        name="excel-for-business-records">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="excel-for-business-records"
                                        id="excel-for-business-records-no" value="no">
                                    <label class="form-check-label" for="excel-for-business-records-no"
                                        name="excel-for-business-records">
                                        No
                                    </label>
                                </div>

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="excel-file">if Yes, please
                                    upload <br>如有，請上載</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input type="file" class="form-control" name="excel-file" id="excel-file">
                                <!-- <input id="year-ended-date-2" name="year-ended-date-2" type="text"
                                class="form-control"> -->
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="way-of-sorting-receipts">

                                    Way of sorting and keeping receipts <br>
                                    整理單據的方式 <br>
                                    e.g. Scanning / taking picture / sorted by folder / unsorted <br>
                                    例如電子掃描//拍照/分類袋分類/沒有任何分類
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <input type="text" class="form-control" name="way-of-sorting-receipts"
                                    id="way-of-sorting-receipts">
                            </div>



                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="total-turnover-yearly">

                                    Total Turnover (yearly)
                                    全年總營業額
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <input type="text" class="form-control" name="total-turnover-yearly"
                                    id="total-turnover-yearly">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <label for="any-stock">Any stock?
                                    有否存貨?</label>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-stock" id="any-stock-yes"
                                        value="yes">
                                    <label class="form-check-label" for="any-stock-yes" name="any-stock">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-stock" id="any-stock-no"
                                        value="no">
                                    <label class="form-check-label" for="any-stock-no" name="any-stock">
                                        No
                                    </label>
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="no-of-bank-used">

                                    No. of bank used <br>
                                    使用銀行的數量

                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input name="no-of-bank-used" id="no-of-bank-used" type="text" class="form-control">

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="no-of-bank-transactions-monthly">

                                    No. of bank transactions (monthly) <br>
                                    每月經銀行交易的數量

                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input name="no-of-bank-transactions-monthly" id="no-of-bank-transactions-monthly"
                                    type="text" class="form-control">

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="any-property">

                                    Any property? <br>
                                    有否物業?
                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-property"
                                        id="any-property-yes" value="yes">
                                    <label class="form-check-label" for="any-property-yes" name="any-property">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-property"
                                        id="any-property-no" value="no">
                                    <label class="form-check-label" for="any-property-no" name="any-property">
                                        No
                                    </label>
                                </div>

                            </div>




                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="any-motor-vehicle">

                                    Any motor vehicle? <br>
                                    有否車輛?
                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-motor-vehicle"
                                        id="any-motor-vehicle-yes" value="yes">
                                    <label class="form-check-label" for="any-motor-vehicle-yes"
                                        name="any-motor-vehicle">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="any-motor-vehicle"
                                        id="any-motor-vehicle-no" value="no">
                                    <label class="form-check-label" for="any-motor-vehicle-no" name="any-motor-vehicle">
                                        No
                                    </label>
                                </div>

                            </div>





                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="no-of-loans-hire-purchases">
                                    No. of loans / hire purchases <br>
                                    貸款/分期付款數目

                                </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input name="no-of-loans-hire-purchases" id="no-of-loans-hire-purchases" type="text"
                                    class="form-control">

                            </div>



                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <label for="no-of-employees">
                                    No. of employees <br>
                                    員工人數 </label>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input name="no-of-employees" id="no-of-employees" type="text" class="form-control">

                            </div>


                            <div class="text-center mt-3">
                                <a href="javascript:void(0);" class="form-submit-btn">Submit</a>
                            </div>










                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <?php get_footer(); ?>

    <?php
    
    if($_POST)
    {
        $name = $_POST['name'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $company_name=$_POST['company-name'];
        $principal_activities=$_POST['principal-activities'];
        $performed_audit_before=$_POST['performed-audit-before'];
        $year_ended_date=$_POST['year-ended-date'];
        $declared_profits_tax_before=$_POST['declared-profits-tax-before'];
        $year_assessment=$_POST['year-assessment'];
        $done_accounting_before=$_POST['done-accounting-before'];
        $year_ended_date_2=$_POST['year-ended-date-2'];
        $reporting_frequency=$_POST['reporting-frequency'];
        $excel_for_business_records=$_POST['excel-for-business-records'];
        $excel_file =$_POST['excel-file'];//FILE
        $way_of_sorting_receipts=$_POST['way-of-sorting-receipts'];
        $total_turnover_yearly = $_POST['total-turnover-yearly'];
        $any_stock_yes=$_POST['any-stock-yes'];
        $no_of_bank_used=$_POST['no-of-bank-used'];
        $no_of_bank_transactions_monthly=$_POST['no-of-bank-transactions-monthly'];
        $any_property_yes= $_POST['any-property-yes'];
        $any_motor_vehicle=$_POST['any-motor-vehicle'];
        $no_of_loans_hire_purchases=$_POST['no-of-loans-hire-purchases'];
        $no_of_employees=$_POST['no-of-employees'];

        $post_title = $name.' application';
        $post_id = wp_insert_post(array (
            'post_type' => 'accounting_q_form',
            'post_title' => $post_title,
            'post_status' => 'publish',
            'comment_status' => 'closed',   // if you prefer
            'ping_status' => 'closed',      // if you prefer
        ));
        echo 888;

        if ($post_id) {
            add_post_meta($post_id, 'name', $name);
            add_post_meta($post_id, 'tel', $tel);
            // add_post_meta($post_id, 'email', $email);
            // add_post_meta($post_id, 'company_name', $company_name);
        }
    }
    ?>
    <script type="text/javascript">
    $(function() {
        $('.form-submit-btn').click(function() {
            $('form').submit();
        });
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