<?php
get_header(); 
?>

<div class="container mx-auto">


    <div class="print-header">

        <img class="ca-print-logo" src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/ca-print-logo-1.jpg"
            alt="">

        <div class="float-end border border-dark p-2">Trust or Company Service Provider Liscense No. <br>
            信托或公司服務提供牌照:TC007204</div>
    </div>

    <div class="desktop-print-header">
        <img class="ca-print-logo" src="<?php echo get_site_url();?>/wp-content/uploads/2022/03/ca-print-logo-1.jpg"
            alt="">

        <div class="float-end border border-dark p-2">Trust or Company Service Provider Liscense No. <br>
            信托或公司服務提供牌照:TC007204</div>

    </div>



    <?php if($_GET['f']=='aqf')
    {
        
    ?>
    <div class="accounting-q-form-div">
        <div class="print-form-container">
            <h2 class="text-center mt-4">Quotation Form of Accounting Service <br>
                會計服務報價表
            </h2>

            <table class="form-table mt-3 mb-0">
                <tr>
                    <td colspan="2" class="text-center orange-yellow-bg fw-bold">Contact Information 聯絡資料</td>
                </tr>
                <tr>
                    <td class="fit">
                        Name 姓名:</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="fit">
                        Tel 電話:</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="fit">
                        E-mail 電郵:</td>
                    <td></td>
                </tr>
            </table>


            <table class="form-table mt-0">
                <tr>
                    <td colspan="4" class="text-center orange-yellow-bg fw-bold">Company Information 公司資料</td>
                </tr>
                <tr>
                    <td class="fit">Company name <br> 公司名稱</td>
                    <td colspan="3">
                    </td>
                </tr>
                <tr>
                    <td class="fit">
                        Principal activities <br>
                        主要業務
                    </td>
                    <td colspan="3">
                    </td>
                </tr>
                <tr>
                    <td class="fit">Incorporation date <br>
                        公司開立日期</td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td class="fit">Has performed audit before?<br>
                        是否曾進行核數</td>
                    <td class="fit">Yes / No If Yes,<br>please provide the related year ended date<br>
                        是 / 否 如是，請提供相關年結日</td>
                    <td class="text-wrap" colspan="2"></td>
                </tr>
                <tr>
                    <td class="fit">Has declared profits tax before?<br>
                        是否曾申報利得稅</td>
                    <td class="fit">Yes / No If Yes,<br>please provide the related year of assessment<br>
                        是 / 否 如是，請提供相關課稅年度</td>
                    <td class="text-wrap" colspan="2"></td>
                </tr>
                <tr>
                    <td class="fit">Has done accounting before?<br>
                        是否曾做會計帳</td>
                    <td class="fit">Yes / No If Yes,<br>please provide the related year ended date<br>
                        是 / 否 如是，請提供相關年結日</td>
                    <td class="text-wrap" colspan="2"></td>
                </tr>
                <tr>
                    <td class="fit">Reporting Frequency <br>
                        會計匯報頻率</td>
                    <td colspan="3">
                        每月 Monthly □ 每季 Quarterly □ 每年 Yearly
                    </td>
                </tr>
                <tr>
                    <td>Has done Excel for business records? <br>
                        有否做Excel營業記錄？ </td>
                    <td colspan="3">

                        Yes / No, if Yes, please upload <br>
                        　如有，請上載</td>
                </tr>
                <tr>
                    <td>Way of sorting and keeping receipts <br>
                        整理單據的方式<br>

                        <div class="small"> e.g. Scanning / taking picture /<br>sorted by folder / unsorted <br>
                            例如電子掃描//拍照/<br>分類袋分類/沒有任何分類</div>
                    </td>
                    <td colspan="3">

                    </td>
                </tr>

                <tr>
                    <td>Total Turnover (yearly) <br>
                        全年總營業額</td>
                    <td colspan="3">

                    </td>
                </tr>
                <tr>
                    <td class="fit">Any stock? <br>
                        有否存貨?</td>
                    <td class="text-wrap">Yes/No</td>
                    <td class="fit">No. of bank used <br>
                        使用銀行的數量</td>
                    <td class="text-wrap"></td>
                </tr>

                <tr>
                    <td class="fit">No. of bank transactions <br> (monthly) <br>
                        每月經銀行交易的數量</td>
                    <td class="text-wrap"></td>
                    <td class="fit">No. of non-bank transactions <br>(monthly) <br>
                        每月非經銀行交易的數量</td>
                    <td class="text-wrap"></td>
                </tr>

                <tr>
                    <td class="fit">Any property? <br>
                        有否物業?</td>
                    <td class="text-wrap">Yes /No</td>
                    <td class="fit">Any motor vehicle? <br>
                        有否車輛?</td>
                    <td class="text-wrap">Yes /No</td>
                </tr>


                <tr>
                    <td class="fit">No. of loans / hire purchases <br>
                        貸款/分期付款數目</td>
                    <td class="text-wrap"></td>
                    <td class="fit">No. of employees <br>
                        員工人數</td>
                    <td class="text-wrap"></td>
                </tr>


            </table>

        </div>
    </div>
    <?php
    }
    ?>

    <?php
     if($_GET['f']=='atrqf')
     {
         ?>
    <div class="audit-and-tax-reporting-q-form">
        <div class="print-form-container">
            <h2 class="text-center mt-4">
                Quotation Form of Audit and Tax Reporting <br>
                審計及稅務報價表
            </h2>

            <table class="form-table mt-3 mb-0">
                <tr>
                    <td colspan="2" class="text-center orange-yellow-bg fw-bold">Contact Information 聯絡資料</td>
                </tr>
                <tr>
                    <td class="fit">
                        Name 姓名:</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="fit">
                        Tel 電話:</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="fit">
                        E-mail 電郵:</td>
                    <td></td>
                </tr>
            </table>


            <table class="form-table mt-0 mb-0">
                <tr>
                    <td colspan="4" class="text-center orange-yellow-bg fw-bold">Reporting purposes 報表用途</td>
                </tr>
                <tr>
                    <td>□ HK Profits Tax declaration <br>
                        申報香港利得稅</td>
                    <td>□ Borrowing loans from banks<br>
                        向銀行借款</td>
                    <td>□ Funding purposes <br>
                        基金要求</td>
                    <td>
                        Other: Please specify <br>
                        其他：請註明 <br>
                        _____________________
                    </td>
                </tr>




            </table>

            <table class="form-table mt-0">
                <tr>
                    <td colspan="4" class="text-center orange-yellow-bg fw-bold">Company Information 公司資料</td>
                </tr>
                <tr>
                    <td class="fit">Company name <br> 公司名稱</td>
                    <td colspan="3">
                    </td>
                </tr>
                <tr>
                    <td class="fit">
                        Principal activities <br>
                        主要業務
                    </td>
                    <td colspan="3">
                    </td>
                </tr>
                <tr>
                    <td class="fit">Incorporation date <br>
                        公司開立日期</td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td class="fit">Has performed audit before?<br>
                        是否曾進行核數</td>
                    <td class="fit">Yes / No If Yes,<br>please provide the related year ended date<br>
                        是 / 否 如是，請提供相關年結日</td>
                    <td class="text-wrap" colspan="2"></td>
                </tr>
                <tr>
                    <td class="fit">Has declared profits tax before?<br>
                        是否曾申報利得稅</td>
                    <td class="fit">Yes / No If Yes,<br>please provide the related year of assessment<br>
                        是 / 否 如是，請提供相關課稅年度</td>
                    <td class="text-wrap" colspan="2"></td>
                </tr>
                <tr>
                    <td class="fit">Has received the tax return this year <br>
                        有否收到今年度利得稅報稅表</td>
                    <td class="fit">Yes / No If Yes,<br>please provide the issued date<br>
                        是 / 否 如有，請提供發出日期</td>
                    <td class="text-wrap" colspan="2"></td>
                </tr>
                <tr>
                    <td colspan="4" class="fw-bold">
                        是否有做會計帳目？ 如有，請提供審計年度的Profit and Loss, Balance Sheet <br>
                        如沒有，請提供以下資料
                    </td>
                </tr>
                <tr>
                    <td class="fit">Total Turnover (yearly) <br>
                        全年總營業額</td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td class="fit">Any stock? <br>
                        有否存貨?</td>
                    <td class="text-wrap">Yes /No</td>
                    <td class="fit">No. of bank used <br>
                        使用銀行的數量</td>
                    <td class="text-wrap"></td>
                </tr>

                <tr>
                    <td class="fit">No. of bank transactions (monthly) <br>
                        每月經銀行交易的數量</td>
                    <td class="text-wrap"></td>
                    <td class="fit">No. of non-bank transactions (monthly) <br>
                        每月非經銀行交易的數量</td>
                    <td class="text-wrap"></td>
                </tr>

                <tr>
                    <td class="fit">Any property? <br>
                        有否物業?</td>
                    <td class="text-wrap">Yes /No</td>
                    <td class="fit">Any motor vehicle? <br>
                        有否車輛?</td>
                    <td class="text-wrap">Yes /No</td>
                </tr>


                <tr>
                    <td class="fit">No. of loans / hire purchases <br>
                        貸款/分期付款數目</td>
                    <td class="text-wrap"></td>
                    <td class="fit">No. of employees <br>
                        員工人數</td>
                    <td class="text-wrap"></td>
                </tr>








            </table>

        </div>
    </div>
    <?php
     }
    ?>

    <?php
     if($_GET['f']=='csf')
     {
        ?>
    <div class="accounting-q-form-div">
        <div class="print-form-container">
            <h2 class="text-center mt-4">Company Secretary in Hong Kong Application Form
                <br>
                香港公司秘書服務計劃申請表
                <div class="small mt-2">*為必須填寫項目 Required Fields</div>
            </h2>

            <table class="form-table mt-3 mb-0">
                <tr>
                    <td colspan="4" class="text-center orange-yellow-bg fw-bold">申請人資料 Applicant Information

                    </td>
                </tr>
                <tr>
                    <td class="fit">
                        Name 姓名:</td>
                    <td></td>
                    <td class="fit">*電郵 Email:

                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td class="fit">
                        *電話 Tel:

                    </td>
                    <td></td>
                    <td class="fit">傳真 Fax:



                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4">

                        *上述申請人為賬單聯絡人 The above applicant is the billing contact person ❑ 是 Yes ❑ 否 No <br>
                        如否，請提供賬單聯絡人資料 If No, please provide the information of the billing contact person <br>
                        <br>
                        姓名Name：_______________________________ 聯絡電話Phone Number：_______________________________


                    </td>
                </tr>


            </table>


            <table class="form-table mt-0 mb-0">
                <tr>
                    <td colspan="4" class="text-center orange-yellow-bg fw-bold">公司資料 Company Information



                    </td>
                </tr>
                <tr>
                    <td rowspan="2">*公司名稱 <br>
                        Company Name
                    </td>
                    <td>中文名稱 Chinese Name
                    </td>
                </tr>
                <tr>


                    <td>英文名稱 English Name

                    </td>
                </tr>

                <tr>
                    <td class="fit">*公司秘書更改日期 <br>
                        The date of changing Company Secretary
                    </td>
                    <td></td>
                </tr>




            </table>

            <table class="form-table mt-0 mb-0">
                <tr>
                    <td colspan="2" class="text-center orange-yellow-bg fw-bold">

                        *申請所需之文件 Required Documents
                        <div class="small">(請上載下列文件 Please upload the following documents)
                        </div>


                    </td>
                </tr>
                <tr>
                    <td>1. 商業登記証(副本) (BR); 周年申報表(副本) (NAR1) / 法團成立表格 <br>
                        (NNC1); 公司證書 (CI); 公司章程 (AA)*

                    </td>
                    <td>2. 有效之身份證 / 護照副本 及 3 個月內之住址證明 <br>
                        All member’s ID/passport copy and address proof within 3 months
                    </td>
                </tr>
            </table>

            <table class="form-table mt-0 mb-0">
                <tr>
                    <td colspan="2" class="text-center orange-yellow-bg fw-bold">

                        附加詳情 Further Information


                    </td>

                </tr>
                <tr>
                    <td colspan="2">上一個年度至今是否有任何股份變動或成員資料變更? Is there any Shares Transfer or Information change of the
                        Company
                        Members during the past annual year?

                    </td>
                </tr>
                <tr>
                    <td>*變動詳情 <br>

                        Details of changes

                    </td>
                    <td>
                        □ 沒有 No <br>
                        □ 更改公司名稱 [NNC2] Change of Company Name<br>
                        □ 委任 / 辭任董事或公司秘書 [ND2A / ND4] Change / Resignation of Company Director(s) / Secretary<br>
                        □ 股權變動 Shares Transfer<br>
                        □ 更改註冊地址 [NR1] Change of Registered Address<br>
                        □ 更改董事或公司秘書資料 [ND2B] Change of Information of Company Director(s) / Secretary<br>
                        □ 增加註冊資本 [NSC1] Return of Allotment<br>
                        □ 登記册及公司紀錄備存地點通知書 Notice of Location of Registers and Company Records<br>
                        □ 其他 Others:

                    </td>
                </tr>
                <tr>
                    <td>備註 <br>

                        Remarks
                    </td>
                    <td></td>
                </tr>
            </table>
            <table class="form-table mt-0">
                <tr>
                    <td colspan="4" class="text-center orange-yellow-bg fw-bold">服務計劃資料 Service Plan Information
                        <div class="mb-4">
                            <p><b class="d-block text-center">Plan A (HK$1,400) </b></p>
                            <ul class="m-0 mt-2 p-0 ps-3">
                                <li class="ls1">擔任法定公司秘書 Act as Company Secretary</li>
                                <li class="ls1">準備及遞交週年申報表 Prepare and Submit Annual Return</li>
                                <li class="ls1">協助續辦商業登記證 Renew the Business Registration Certificate</li>
                                <li class="ls1">對公司註冊署及稅局信提供專業意見 Provide professional opinions for CR and IRD’s letter
                                </li>
                                <li class="ls1">更改公司註冊地址資料 Change of Registered Office Address</li>
                                <li class="ls1">準備及遞交任免董事資料 Appointment / Resignation / Change of Director</li>
                                <li class="ls1">準備及遞交任免秘書資料 Appointment / Resignation / Change of Secretary</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </table>
            <!-- 
            <table class="form-table mt-0">
                <tr>
                    <td colspan="4" class="text-center orange-yellow-bg fw-bold">Company Information 公司資料</td>
                </tr>
                <tr>
                    <td class="fit">Company name <br> 公司名稱</td>
                    <td colspan="3">
                    </td>
                </tr>
                <tr>
                    <td class="fit">
                        Principal activities <br>
                        主要業務
                    </td>
                    <td colspan="3">
                    </td>
                </tr>
                <tr>
                    <td class="fit">Incorporation date <br>
                        公司開立日期</td>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td class="fit">Has performed audit before?<br>
                        是否曾進行核數</td>
                    <td class="fit">Yes / No If Yes,<br>please provide the related year ended date<br>
                        是 / 否 如是，請提供相關年結日</td>
                    <td class="text-wrap" colspan="2"></td>
                </tr>
                <tr>
                    <td class="fit">Has declared profits tax before?<br>
                        是否曾申報利得稅</td>
                    <td class="fit">Yes / No If Yes,<br>please provide the related year of assessment<br>
                        是 / 否 如是，請提供相關課稅年度</td>
                    <td class="text-wrap" colspan="2"></td>
                </tr>
                <tr>
                    <td class="fit">Has done accounting before?<br>
                        是否曾做會計帳</td>
                    <td class="fit">Yes / No If Yes,<br>please provide the related year ended date<br>
                        是 / 否 如是，請提供相關年結日</td>
                    <td class="text-wrap" colspan="2"></td>
                </tr>
                <tr>
                    <td class="fit">Reporting Frequency <br>
                        會計匯報頻率</td>
                    <td colspan="3">
                        每月 Monthly □ 每季 Quarterly □ 每年 Yearly
                    </td>
                </tr>
                <tr>
                    <td>Has done Excel for business records? <br>
                        有否做Excel營業記錄？ </td>
                    <td colspan="3">

                        Yes / No, if Yes, please upload <br>
                        　如有，請上載</td>
                </tr>
                <tr>
                    <td>Way of sorting and keeping receipts <br>
                        整理單據的方式<br>

                        <div class="small"> e.g. Scanning / taking picture /<br>sorted by folder / unsorted <br>
                            例如電子掃描//拍照/<br>分類袋分類/沒有任何分類</div>
                    </td>
                    <td colspan="3">

                    </td>
                </tr>

                <tr>
                    <td>Total Turnover (yearly) <br>
                        全年總營業額</td>
                    <td colspan="3">

                    </td>
                </tr>
                <tr>
                    <td class="fit">Any stock? <br>
                        有否存貨?</td>
                    <td class="text-wrap">Yes/No</td>
                    <td class="fit">No. of bank used <br>
                        使用銀行的數量</td>
                    <td class="text-wrap"></td>
                </tr>

                <tr>
                    <td class="fit">No. of bank transactions <br> (monthly) <br>
                        每月經銀行交易的數量</td>
                    <td class="text-wrap"></td>
                    <td class="fit">No. of non-bank transactions <br>(monthly) <br>
                        每月非經銀行交易的數量</td>
                    <td class="text-wrap"></td>
                </tr>

                <tr>
                    <td class="fit">Any property? <br>
                        有否物業?</td>
                    <td class="text-wrap">Yes /No</td>
                    <td class="fit">Any motor vehicle? <br>
                        有否車輛?</td>
                    <td class="text-wrap">Yes /No</td>
                </tr>


                <tr>
                    <td class="fit">No. of loans / hire purchases <br>
                        貸款/分期付款數目</td>
                    <td class="text-wrap"></td>
                    <td class="fit">No. of employees <br>
                        員工人數</td>
                    <td class="text-wrap"></td>
                </tr>


            </table> -->

        </div>
    </div>
    <?php
     }
    ?>





</div>



<?php get_footer(); ?>
</body>

</html>