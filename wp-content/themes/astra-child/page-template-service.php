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



                <?php echo get_field('bottom_form');?>


                <h4 class="text-center lh-base"> Company Secretary in Hong Kong Application Form<br> 香港公司秘書服務計劃申請表 </h4>

                <form id="form" action="" method="post" enctype="multipart/form-data">

                    <div class="form-div white-bg mt-4">

                        <div class="row  align-items-center">
                            <div class="col-12">
                                <h4 class="text-center mb-4"> 申請人資料 Applicant Information</h4>
                            </div>
                        </div>

                        <div class="row  align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="client-name">
                                    姓名 Name:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="client-name"
                                    name="client-name" type="text" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="email">電郵 E-mail:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="email" name="email"
                                    type="text" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="tel">電話 Tel:</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="tel" name="tel" type="text"
                                    class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="fax">傳真 Fax:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="fax" name="fax" type="text"
                                    class="form-control">
                            </div>




                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="billing-contact-person">上述申請人為賬單聯絡人<br>The above applicant is the billing
                                    contact
                                    person</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="billing-contact-person"
                                        id="billing-contact-person-yes" value="yes">
                                    <label class="form-check-label" for="billing-contact-person-yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="billing-contact-person"
                                        id="billing-contact-person-no" value="no">
                                    <label class="form-check-label" for="billing-contact-person-no">
                                        No
                                    </label>
                                </div>

                            </div>
                            <div class="col-12">
                                如否，請提供賬單聯絡人資料 If No, please provide the information of the billing contact person
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="contact-name">
                                    聯絡人姓名 Name:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="contact-name"
                                    name="contact-name" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label
                                    for="contact-phone-number">聯絡電話Phone
                                    Number:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="contact-phone-number"
                                    name="contact-phone-number" type="text" class="form-control">
                            </div>

                            <div class="col-12 mt-4">
                                <h4 class="text-center mb-4"> 公司資料 Company Information</h4>
                            </div>
                            <div class="col-12 fw-bold">公司名稱 Company Name＊</div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="contact-name-chinese">
                                    中文名稱 Chinese Name</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="contact-name-chinese"
                                    name="contact-name-chinese" type="text" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="contact-name-english">
                                    英文名稱 English Name</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="contact-name-english"
                                    name="contact-name-english" type="text" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="date-change-secretary">
                                    公司秘書更改日期
                                    The date of changing Company Secretary＊</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="date-change-secretary"
                                    name="date-change-secretary" type="text" class="form-control">
                            </div>

                            <div class="col-12 mt-4">
                                <h4 class="text-center mb-4">申請所需之文件 Required Documents <br>
                                    (請上載下列文件 Please upload the following documents)</h4>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="upload-file-1">
                                    1. 商業登記証(副本) (BR); 周年申報表(副本) (NAR1) / 法團成立表格
                                    (NNC1); 公司證書 (CI); 公司章程 (AA)
                                </label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input type="file" class="form-control" name="upload-file-1" id="upload-file-1">

                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="upload-file-2">2. 有效之身份證 /
                                    護照副本 及 3 個月內之住址證明
                                    All member’s ID/passport copy and address proof within 3 months</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">

                                <input type="file" class="form-control" name="upload-file-2" id="upload-file-2">

                            </div>

                            <div class="col-12 mt-4 mb-4">
                                <h4 class="text-center mb-4">附加詳情 Further Information</h4>
                                <div>上一個年度至今是否有任何股份變動或成員資料變更? Is there any Shares Transfer or Information change of the
                                    Company Members during the past annual year?</div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="details-of-changes">變動詳情

                                    Details of changes</label>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3 ">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="沒有 No"
                                        id="details-of-changes-1">
                                    <label class="form-check-label" for="details-of-changes-1">
                                        沒有 No

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="更改公司名稱 [NNC2] Change of Company Name" id="details-of-changes-2">
                                    <label class="form-check-label" for="details-of-changes-2">
                                        更改公司名稱 [NNC2] Change of Company Name
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="委任 / 辭任董事或公司秘書 [ND2A / ND4] Change / Resignation of Company Director(s) /
                                        Secretary" id="details-of-changes-3">
                                    <label class="form-check-label" for="details-of-changes-3">
                                        委任 / 辭任董事或公司秘書 [ND2A / ND4] Change / Resignation of Company Director(s) /
                                        Secretary
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="股權變動 Shares Transfer"
                                        id="details-of-changes-4">
                                    <label class="form-check-label" for="details-of-changes-4">
                                        股權變動 Shares Transfer

                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="更改註冊地址 [NR1] Change of Registered Address" id="details-of-changes-5">
                                    <label class="form-check-label" for="details-of-changes-5">
                                        更改註冊地址 [NR1] Change of Registered Address

                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="更改董事或公司秘書資料 [ND2B] Change of Information of Company Director(s) / Secretary
" id="details-of-changes-6">
                                    <label class="form-check-label" for="details-of-changes-6">
                                        更改董事或公司秘書資料 [ND2B] Change of Information of Company Director(s) / Secretary

                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="增加註冊資本 [NSC1] Return of Allotment" id="details-of-changes-7">
                                    <label class="form-check-label" for="details-of-changes-7">
                                        增加註冊資本 [NSC1] Return of Allotment

                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                        value="登記册及公司紀錄備存地點通知書 Notice of Location of Registers and Company Records"
                                        id="details-of-changes-8">
                                    <label class="form-check-label" for="details-of-changes-8">
                                        登記册及公司紀錄備存地點通知書 Notice of Location of Registers and Company Records

                                    </label>
                                </div>

                                <div class="mt-3">
                                    <label class="form-check-label mb-3" for="defaultCheck1">
                                        其他 Others:
                                    </label>
                                    <input type="text" class="form-control">
                                </div>


                            </div>





                        </div>

                        <div class="row  align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="remarks">
                                    備註 Remarks</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="remarks" name="remarks"
                                    type="text" class="form-control">
                            </div>

                        </div>



                        <div class="col-12 mt-4">
                            <h4 class="text-center mb-4"> 服務計劃資料 Service Plan Information </h4>
                            <div>
                                <b>
                                    服務費用 (每年港幣$950) Service fee (per year HK$950)，已包括：</b>


                                <ul class="m-0 mt-2 p-0 ps-3">
                                    <li>擔任法定公司秘書 Act as Company Secretary</li>
                                    <li>準備及遞交週年申報表 Prepare and Submit Annual Return</li>
                                    <li>協助續辦商業登記證 Renew the Business Registration Certificate</li>
                                    <li> 對公司註冊署及稅局信提供專業意見 Provide professional opinions for CR and IRD’s letter</li>
                                    <li>更改公司註冊地址資料 Change of Registered Office Address</li>
                                    <li>準備及遞交任免董事資料 Appointment / Resignation / Change of Director</li>
                                    <li>準備及遞交任免秘書資料 Appointment / Resignation / Change of Secretary</li>
                                    <li>更改董事個人資料 Change of Personal Particulars of Director</li>
                                    <li>業務性質變更 Change of Company Business Nature</li>
                                    <li>準備及保存重要控制人登記册 Prepare and keep record of Significant Controllers Register</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <h4 class="text-center mb-4"> 附加服務 Additional Services </h4>

                        </div>


                        <!-- <div class="form-check">

                            <input class="form-check-input" type="checkbox" name="virtual-office" id="virtual-office"
                                value="yes">
                            <label class="form-check-label" for="virtual-office">
                                虛擬辦工室 Virtual Office

                            </label>
                        </div> -->

                        <div class="col-12">

                            <div class="col-12 mt-4">
                                <h5 class="text-center mb-4"> 虛擬辦工室 Virtual Office </h5>

                            </div>




                        </div>
                        <div class="mb-3">
                            <h5 class="text-center">- 尖沙咀 Tsim Sha Tsui -</h5>
                        </div>

                        <div class="row">

                            <div class="col-4">





                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="沒有 No" id="HK1600-year">
                                    <label class="form-check-label" for="HK1600-year">
                                        HK$1,600/year

                                    </label>
                                </div>

                                <ul class="m-0 ps-3">
                                    <li>註冊公司地址</li>
                                    <li>信件包裹代收</li>
                                    <li>稅局郵件轉寄</li>
                                    <li>製作公司水牌</li>
                                    <li>每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                </ul>
                            </div>
                            <div class="col-4">

                                <div> HK$4,000/year
                                </div>
                                <ul class="m-0 ps-3">
                                    <li>註冊公司地址</li>
                                    <li>信件包裹代收</li>
                                    <li>稅局郵件轉寄</li>
                                    <li>製作公司水牌</li>
                                    <li>每月轉寄郵件/包裹(包首1KG 20x20x20cm)</li>
                                    <li>辦公室電話代接</li>
                                    <li>稅局文件代處理及信件代開</li>
                                    <li>準備及保存重要控制人登記册</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <div> HK$12,000/year
                                </div>
                                <ul class="m-0 ps-3">
                                    <li>註冊公司地址</li>
                                    <li>信件包裹代收</li>
                                    <li>稅局郵件轉寄</li>
                                    <li>製作公司水牌</li>
                                    <li>更改商業登記地址</li>
                                    <li>每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                    <li>辦公室電話代接</li>
                                    <li>稅局文件代處理及信件代開</li>
                                    <li>準備及保存重要控制人登記册</li>
                                    <li>每月三次會議室出租</li>
                                </ul>



                            </div>
                        </div>

                        <div class="mb-3 mt-4">
                            <h5 class="text-center">
                                - 荔枝角 Lai Chi Kok -</h5>
                        </div>

                        <div class="row">

                            <div class="col-4">





                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="沒有 No" id="HK1600-year">
                                    <label class="form-check-label" for="HK1600-year">
                                        HK$1,600/year

                                    </label>
                                </div>

                                <ul class="m-0 ps-3">
                                    <li>註冊公司地址</li>
                                    <li>信件包裹代收</li>
                                    <li>稅局郵件轉寄</li>
                                    <li>製作公司水牌</li>
                                    <li>每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                </ul>
                            </div>
                            <div class="col-4">

                                <div> HK$4,000/year
                                </div>
                                <ul class="m-0 ps-3">
                                    <li>註冊公司地址</li>
                                    <li>信件包裹代收</li>
                                    <li>稅局郵件轉寄</li>
                                    <li>製作公司水牌</li>
                                    <li>每月轉寄郵件/包裹(包首1KG 20x20x20cm)</li>
                                    <li>辦公室電話代接</li>
                                    <li>稅局文件代處理及信件代開</li>
                                    <li>準備及保存重要控制人登記册</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <div> HK$12,000/year
                                </div>
                                <ul class="m-0 ps-3">
                                    <li>註冊公司地址</li>
                                    <li>信件包裹代收</li>
                                    <li>稅局郵件轉寄</li>
                                    <li>製作公司水牌</li>
                                    <li>更改商業登記地址</li>
                                    <li>每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                    <li>辦公室電話代接</li>
                                    <li>稅局文件代處理及信件代開</li>
                                    <li>準備及保存重要控制人登記册</li>
                                    <li>每月三次會議室出租</li>
                                </ul>



                            </div>
                        </div>


                        <div class="mt-4 mb-3">
                            <h5 class="text-center">
                                - 觀塘 Kwun Tong -</h5>

                        </div>










                    </div>


            </div>
            </form>
            <!-- 
                <form id="form" action="" method="post" enctype="multipart/form-data">

                    <div class="form-div white-bg mt-4">

                        <div class="row  align-items-center">
                            <div class="col-12">
                                <h4 class="text-center mb-4"> Contact Information 聯絡資料</h4>
                            </div>
                        </div>


                        <div class="row  align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><label for="client-name">Name
                                    姓名:</label>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3"><input id="client-name"
                                    name="client-name" type="text" class="form-control">
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
                                    for="reporting-purposes">Has performed audit before?
                                    是否曾進行核數</label></div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reporting-purposes"
                                        id="reporting-purposes-yes" value="yes">
                                    <label class="form-check-label" for="reporting-purposes-yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="reporting-purposes"
                                        id="reporting-purposes-no" value="no">
                                    <label class="form-check-label" for="reporting-purposes-no">
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
                </form> -->
        </div>
    </div>

</div>

<?php get_footer(); ?>

<?php
    
    if($_POST)
    {
        
        if($_POST['form-type']=='accounting_q_form')
        {
            
            $client_name = $_POST['client-name'];
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
            $way_of_sorting_receipts=$_POST['way-of-sorting-receipts'];
            $total_turnover_yearly = $_POST['total-turnover-yearly'];
            $any_stock=$_POST['any-stock'];
            $no_of_bank_used=$_POST['no-of-bank-used'];
            $no_of_bank_transactions_monthly=$_POST['no-of-bank-transactions-monthly'];
            $any_property= $_POST['any-property'];
            $any_motor_vehicle=$_POST['any-motor-vehicle'];
            $no_of_loans_hire_purchases=$_POST['no-of-loans-hire-purchases'];
            $no_of_employees=$_POST['no-of-employees'];

            $post_title = $client_name.' application';
            $post_id = wp_insert_post(array (
                'post_type' => 'accounting_q_form',
                'post_title' => $post_title,
                'post_status' => 'publish',
                'comment_status' => 'closed',   // if you prefer
                'ping_status' => 'closed',      // if you prefer
            ));

            if ($post_id) {
                add_post_meta($post_id, 'client_name', $client_name);
                add_post_meta($post_id, 'tel', $tel);
                add_post_meta($post_id, 'email', $email);
                add_post_meta($post_id, 'company_name', $company_name);
                add_post_meta($post_id, 'principal_activities', $principal_activities);
                add_post_meta($post_id, 'performed_audit_before', $performed_audit_before);
                add_post_meta($post_id, 'year_ended_date', $year_ended_date);
                add_post_meta($post_id, 'declared_profits_tax_before', $declared_profits_tax_before);
                add_post_meta($post_id, 'year_assessment', $year_assessment);
                add_post_meta($post_id, 'done_accounting_before', $done_accounting_before);
                add_post_meta($post_id, 'year_ended_date_2', $year_ended_date_2);
                add_post_meta($post_id, 'reporting_frequency', $reporting_frequency);
                add_post_meta($post_id, 'excel_for_business_records', $excel_for_business_records);
                add_post_meta($post_id, 'way_of_sorting_receipts', $way_of_sorting_receipts);
                add_post_meta($post_id, 'total_turnover_yearly', $total_turnover_yearly);
                add_post_meta($post_id, 'any_stock', $any_stock);
                add_post_meta($post_id, 'no_of_bank_used', $no_of_bank_used);
                add_post_meta($post_id, 'no_of_bank_transactions_monthly', $no_of_bank_transactions_monthly);
                add_post_meta($post_id, 'any_property', $any_property);
                add_post_meta($post_id, 'any_motor_vehicle', $any_motor_vehicle);
                add_post_meta($post_id, 'no_of_loans_hire_purchases', $no_of_loans_hire_purchases);
                add_post_meta($post_id, 'no_of_employees', $no_of_employees);
    
            }

        }


        if($_POST['form-type']=='audit_and_tax_report')
        {
           
            $client_name = $_POST['client-name'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $reporting_purposes = $_POST['reporting-purposes'];
            $other_reporting_purposes=$_POST['other-reporting-purposes'];
            $company_name=$_POST['company-name'];
            $principal_activities=$_POST['principal-activities'];
            $incorporation_date=$_POST['incorporation-date'];
            $performed_audit_before=$_POST['performed-audit-before'];
            $year_ended_date=$_POST['year-ended-date'];
            $declared_profits_tax_before=$_POST['declared-profits-tax-before'];
            $year_assessment=$_POST['year-assessment'];
            $has_receive_tax_return=$_POST['has-receive-tax-return'];
            $total_turnover_yearly=$_POST['total-turnover-yearly'];
            $any_stock=$_POST['any-stock'];
            $no_of_bank_used=$_POST['no-of-bank-used'];
            $no_of_bank_transactions_monthly= $_POST['no-of-bank-transactions-monthly'];
            $no_of_non_bank_transactions_monthly=$_POST['no-of-non-bank-transactions-monthly'];
            $any_property= $_POST['any-property'];
            $any_motor_vehicle=$_POST['any-motor-vehicle'];
            $no_of_loans_hire_purchases=$_POST['no-of-loans-hire-purchases'];
            $no_of_employees=$_POST['no-of-employees'];
           
            
            $post_title = $client_name.' application';
            $post_id = wp_insert_post(array (
                'post_type' => 'audit_and_tax_report',
                'post_title' => $post_title,
                'post_status' => 'publish',
                'comment_status' => 'closed',   // if you prefer
                'ping_status' => 'closed',      // if you prefer
            ));   


            if ($post_id) {
                add_post_meta($post_id, 'client_name', $client_name);
                add_post_meta($post_id, 'tel', $tel);
                add_post_meta($post_id, 'email', $email);
                add_post_meta($post_id, 'reporting_purposes', $reporting_purposes);
                add_post_meta($post_id, 'other_reporting_purposes', $other_reporting_purposes);
                add_post_meta($post_id, 'company_name', $company_name);
                add_post_meta($post_id, 'principal_activities', $principal_activities);
                add_post_meta($post_id, 'incorporation_date', $incorporation_date);
                add_post_meta($post_id, 'performed_audit_before', $performed_audit_before);
                add_post_meta($post_id, 'year_ended_date', $year_ended_date);
                add_post_meta($post_id, 'declared_profits_tax_before', $declared_profits_tax_before);
                add_post_meta($post_id, 'year_assessment', $year_assessment);
                add_post_meta($post_id, 'has_receive_tax_return', $has_receive_tax_return);
                add_post_meta($post_id, 'total_turnover_yearly', $total_turnover_yearly);
                add_post_meta($post_id, 'any_stock', $any_stock);
                add_post_meta($post_id, 'no_of_bank_used', $no_of_bank_used);
                add_post_meta($post_id, 'no_of_bank_transactions_monthly', $no_of_bank_transactions_monthly);
                add_post_meta($post_id, 'no_of_non_bank_transactions_monthly', $no_of_non_bank_transactions_monthly);
                add_post_meta($post_id, 'any_property', $any_property);
                add_post_meta($post_id, 'any_motor_vehicle', $any_motor_vehicle);
                add_post_meta($post_id, 'no_of_loans_hire_purchases', $no_of_loans_hire_purchases);
                add_post_meta($post_id, 'no_of_employees', $no_of_employees);   
            }
        }
    }




   if(!empty($_FILES))
    {
        // print_r($_FILES);

        //File 1
        if($_FILES["excel-file"]['size'])
        {
        $wordpress_upload_dir = wp_upload_dir();

        $new_file_path = $wordpress_upload_dir['path'] . '/' . $_FILES["excel-file"]["name"];

            $i=0;
        while( file_exists( $new_file_path ) ) {
            $i++;
            $new_file_path = $wordpress_upload_dir['path'] . '/' . $i . '_' . $_FILES["excel-file"]["name"];
        }
        
        if (move_uploaded_file($_FILES["excel-file"]["tmp_name"], $new_file_path)) {
   
            $upload_id = wp_insert_attachment( array(
            'guid'           => $new_file_path, 
            'post_mime_type' => 'image/*',
            //$_FILES["file_upload"]["tmp_name"],
            'post_title'     => preg_replace( '/\.[^.]+$/', '', $_FILES["excel-file"]["name"] ),
            'post_content'   => '',
            'post_status'    => 'inherit'
        ), $new_file_path );
         require_once( ABSPATH . 'wp-admin/includes/image.php' );
    
         wp_update_attachment_metadata( $upload_id, wp_generate_attachment_metadata( $upload_id, $new_file_path ) );

        update_field( 'excel_file', $upload_id, $post_id );
        // update_field( 'mid_report_approval', false, $school_id );


        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}


    
    ?>
<script type="text/javascript">
$(function() {
    $('.form-submit-btn').click(function() {
        // alert(650);
        $('#form').submit();
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