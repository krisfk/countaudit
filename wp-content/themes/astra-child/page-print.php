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
                    <td colspan="2">上一個年度至今是否有任何股份變動或成員資料變更? <br> Is there any Shares Transfer or Information change of
                        the
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

            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>

            <table class="form-table mt-0">
                <tr>
                    <td colspan="4" class="text-center orange-yellow-bg fw-bold">服務計劃資料 Service Plan Information

                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-2">
                            <p><b class="d-block text-center">Plan A (HK$1,400) </b></p>
                            <ul class="m-0 mt-2 p-0 ps-4">
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
                        <div class="mb-2">
                            <p><b class="d-block text-center">Plan B (HK$2,200) </b></p>
                            <ul class="m-0 mt-2 p-0 ps-4">
                                <li class="ls1">擔任法定公司秘書 Act as Company Secretary</li>
                                <li class="ls1">準備及遞交週年申報表 Prepare and Submit Annual Return</li>
                                <li class="ls1">協助續辦商業登記證 Renew the Business Registration Certificate</li>
                                <li class="ls1">對公司註冊署及稅局信提供專業意見 Provide professional opinions for CR and IRD’s letter
                                </li>
                                <li class="ls1">更改公司註冊地址資料 Change of Registered Office Address</li>
                                <li class="ls1">準備及遞交任免董事資料 Appointment / Resignation / Change of Director</li>
                                <li class="ls1">準備及遞交任免秘書資料 Appointment / Resignation / Change of Secretary</li>
                                <li class="">更改董事個人資料 Change of Personal Particulars of Director</li>
                                <li class="">業務性質變更 Change of Company Business Nature</li>
                                <li class="">準備及保存重要控制人登記册 Prepare and keep record of Significant Controllers Register
                                </li>
                                <li class="">宣布及登記公司處於不活動狀態 Declare Dormant Business</li>
                                <li class="">準備及保存董事、股東及公司秘書登記册 Prepare and keep record of Register of Directors,
                                    shareholders</li>
                                <li class="">and company secretaries</li>
                                <li class="">準備及保存股票證 Prepare and keep record of stock certificate</li>
                                <li class="">增加公司註冊股本 Increase of Capital</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-2">
                            <p><b class=" d-block text-center">Plan C (HK$3,000) </b></p>
                            <ul class="m-0 mt-2 p-0 ps-4">
                                <li class="ls1">擔任法定公司秘書 Act as Company Secretary</li>
                                <li class="ls1">準備及遞交週年申報表 Prepare and Submit Annual Return</li>
                                <li class="ls1">協助續辦商業登記證 Renew the Business Registration Certificate</li>
                                <li class="ls1">對公司註冊署及稅局信提供專業意見 Provide professional opinions for CR and IRD’s letter
                                </li>
                                <li class="ls1">更改公司註冊地址資料 Change of Registered Office Address</li>
                                <li class="ls1">準備及遞交任免董事資料 Appointment / Resignation / Change of Director</li>
                                <li class="ls1">準備及遞交任免秘書資料 Appointment / Resignation / Change of Secretary</li>
                                <li class="">更改董事個人資料 Change of Personal Particulars of Director</li>
                                <li class="">業務性質變更 Change of Company Business Nature</li>
                                <li class="">準備及保存重要控制人登記册 Prepare and keep record of Significant Controllers Register
                                </li>
                                <li class="">宣布及登記公司處於不活動狀態 Declare Dormant Business</li>
                                <li class="">準備及保存董事、股東及公司秘書登記册 Prepare and keep record of Register of Directors,
                                    shareholders and company secretaries</li>
                                <li class="">準備及保存股票證 Prepare and keep record of stock certificate</li>
                                <li class="">增加公司註冊股本 Increase of Capital</li>
                                <li class="ls3">分配股份 Allotment of Shares</li>
                                <li class="ls3">申請分行 Register Branch</li>
                                <li class="ls3">年度股東大會Annual General Meeting</li>
                                <li class="ls3">更改公司或分行名稱 Change of Company / Branch Name</li>
                                <li class="ls3">股份轉讓 Transfer of Shares (不包括印花稅 stamp duty fee is not included)</li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>

            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>

            <table class="form-table mt-0 mb-0">
                <tr>
                    <td colspan="4" class="text-center orange-yellow-bg fw-bold">附加服務 Additional Services

                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="text-start">
                            ❑ 虛擬辦工室 Virtual Office
                        </div>


                        <table class="form-table mt-0 mb-0">
                            <tr>
                                <td>尖沙咀 Tsim Sha Tsui

                                </td>
                                <td>荔枝角 Lai Chi Kok

                                </td>
                                <td>觀塘 Kwun Tong

                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <div class="form-check"><input id="tst-HK1600-year" class="form-check-input"
                                            name="virtual-office[]" type="checkbox" value="tst-HK1600-year"> <label
                                            class="form-check-label" for="tst-HK1600-year"> HK$1,600/year </label>
                                    </div>
                                    <ul class="m-0 ps-4">
                                        <li class="ls1">註冊公司地址</li>
                                        <li class="ls1">信件包裹代收</li>
                                        <li class="ls1">稅局郵件轉寄</li>
                                        <li class="ls1">製作公司水牌</li>
                                        <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                    </ul>

                                </td>
                                <td class="fit">
                                    <div class="form-check"><input id="lck-HK950-year" class="form-check-input"
                                            name="virtual-office[]" type="checkbox" value="lck-HK950-year"> <label
                                            class="form-check-label" for="lck-HK950-year"> HK$950/year </label>
                                    </div>
                                    <ul class="m-0 ps-4">
                                        <li class="ls1">註冊公司地址</li>
                                        <li class="ls1">信件包裹代收</li>
                                        <li class="ls1">稅局郵件轉寄 (按要求)</li>
                                        <li class="ls1">製作公司水牌</li>
                                        <li class="ls1">每月轉寄郵件</li>
                                        <li class="ls1">郵件到取</li>
                                        <li class="ls1">更改商業登記及公司註冊處地址</li>
                                    </ul>


                                </td>


                                <td class="fit">

                                    <div class="form-check"><input id="kt-HK900-year" class="form-check-input"
                                            name="virtual-office[]" type="checkbox" value="kt-HK900-year"> <label
                                            class="form-check-label" for="kt-HK900-year"> HK$900/year </label></div>
                                    <ul class="m-0 ps-4">
                                        <li class="ls1">註冊公司地址</li>
                                        <li class="ls1">信件代收</li>
                                        <li class="ls1">製作公司水牌</li>
                                    </ul>

                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <div class="form-check"><input id="lck-HK950-year" class="form-check-input"
                                            name="virtual-office[]" type="checkbox" value="lck-HK950-year"> <label
                                            class="form-check-label" for="lck-HK950-year"> HK$950/year </label>
                                    </div>

                                    <ul class="m-0 ps-4">
                                        <li class="ls1">註冊公司地址</li>
                                        <li class="ls1">信件包裹代收</li>
                                        <li class="ls1">稅局郵件轉寄 (按要求)</li>
                                        <li class="ls1">製作公司水牌</li>
                                        <li class="ls1">每月轉寄郵件</li>
                                        <li class="ls1">郵件到取</li>
                                        <li class="ls1">更改商業登記及公司註冊處地址</li>
                                    </ul>
                                </td>
                                <td class="fit">
                                    <div class="form-check"><input id="lck-HK1500-year" class="form-check-input"
                                            name="virtual-office[]" type="checkbox" value="lck-HK1500-year"> <label
                                            class="form-check-label" for="lck-HK1500-year"> HK$1,500/year </label>
                                    </div>
                                    <ul class="m-0 ps-4">
                                        <li class="ls1">註冊公司地址</li>
                                        <li class="ls1">信件包裹代收</li>
                                        <li class="ls1">稅局郵件轉寄</li>
                                        <li class="ls1">製作公司水牌</li>
                                        <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                        <li class="ls1">郵件到取</li>
                                        <li class="ls1">更改商業登記及公司註冊處地址</li>
                                        <li class="ls2">郵件電子掃描</li>
                                        <li class="ls2">每月一次會議室出租</li>
                                        <li class="ls2">辦公室電話代接</li>
                                    </ul>

                                </td>
                                <td class="fit">

                                </td>
                            </tr>
                            <tr>
                                <td class="fit">
                                    <div class="form-check"><input id="tst-HK12000-year" class="form-check-input"
                                            name="virtual-office[]" type="checkbox" value="tst-HK12000-year"> <label
                                            class="form-check-label" for="tst-HK12000-year"> HK$12,000/year </label>
                                    </div>
                                    <ul class="m-0 ps-4">
                                        <li class="ls1">註冊公司地址</li>
                                        <li class="ls1">信件包裹代收</li>
                                        <li class="ls1">稅局郵件轉寄</li>
                                        <li class="ls1">製作公司水牌</li>
                                        <li class="ls1">更改商業登記地址</li>
                                        <li class="ls1">每月轉寄郵件及包裹(包首1KG 20x20x20cm)</li>
                                        <li class="ls2">辦公室電話代接</li>
                                        <li class="ls2">稅局文件代處理及信件代開</li>
                                        <li class="ls2">準備及保存重要控制人登記册</li>
                                        <li class="ls3">每月三次會議室出租</li>
                                    </ul>
                                </td>
                                <td class="fit">

                                </td>
                                <td class="fit">

                                </td>
                            </tr>
                        </table>


                    </td>
                </tr>
                <tr>
                    <td>

                        ❑ 撤銷公司(港幣$1,500加政府費用) <br>
                        Deregistration of Limited Company (HK$1,500 plus government charges)


                    </td>
                </tr>
                <tr>
                    <td>❑ 其他 Others 請註明 please specify:____________________________________
                    </td>
                </tr>
            </table>

            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>

            <table class="form-table mt-0 mb-0">

                <tr>
                    <td class="text-center orange-yellow-bg fw-bold">條款及細則 Terms and Conditions

                    </td>
                </tr>
                <tr>
                    <td>
                        <u> 服務條款 MAIN TERMS</u> <br>
                        <u> *適用於虛擬辦工室客戶Applicable for Virtual Office Service</u>

                        <br>
                        1 本申請表由算數秘書有限公司（“本公司”）提供，並由公司秘書/虛擬辦公室服務計畫申請人（“客戶”）同意，雙方共同履行申請表內所載的條款及細則。
                        This application form is offered by CountAudit Secretarial Limited and accepted by the
                        Company Secretarial Service / Virtual Office Service  Applicants (the “Client”), both
                        executing the terms and conditions started in this application form.
                        <br> <br>

                        2 客戶須於服務到期日一個月前與本公司書面提出續約或中止服務，否則會遞交政府文件辭任公司秘書。
                        Client are required to renew / terminate the service with CountAudit Secretarial Limited 1 month
                        before the expiry date of the service period. Otherwise, the resignation form of company
                        secretary will be submitted to Companies Registry.  <br><br>

                        3 客戶如自行更改過公司資料，包括及不限於公司名稱、股權變動等，必須於周年日前   7   
                        個工作天將相關資料以電郵通知本公司，如果因客戶的遺漏而導致周年申報表資料錯誤，客戶需另外支付額外費用，並可能需要支付遲交罰款。 
                        If there is any Shares Transfer or Information Change of the Company Members during the past
                        Annual year. Client must send the related information and documents to CountAudit Secretarial
                        Limited 7 days prior to the anniversary of the date of the company’s incorporation of that year.
                        Client would be responsible if there is any missing of providing accurate information for
                        preparing the Annual Return, and have to pay the additional fees for re-doing the Annual Return,
                        the Client would also be responsible for paying the late charge / penalty (if any) due to late
                        submission. <br> <br>
                        4 客戶如需要簽署周年申報表或相關文件，必須將簽妥的文件正本於該年中的周年日後的    30   
                        日內寄回本公司以確保有足夠時間安排提交文件及費用，如果因遲交而導致任何罰款，客戶需要自行承擔。
                        If Client has to sign the Annual Return, the signed documents must be returned to CountAudit
                        Secretarial Limited within 30 days after the anniversary of the date of the company’s
                        incorporation in that year, to ensure CountAudit Secretarial Limited has sufficient time to
                        arrange submission of the documents. If there is any late charge / penalty due to late
                        submission, the Client should hold full responsibilities.  <br><br>
                        5 *客戶知悉並同意本申請表中沒有賦予客戶佔用或使用任何本虛擬辦公室服務所列位址之辦公室、設備或設施的權力。
                        The Client understands and agrees that they will have no right to occupy and access any part of
                        the premises, and any equipment or facilities within the premise of the virtual office address
                        under this application form. <br> <br>

                        6 *客戶不能在服務生效前或終止後，公開或使用本公司提供的位址、電話號碼以及傳真號碼。客戶也不能以其他未向本公司登記的公司和用戶的名義，公開或使用本公司提供的位址、電話號碼以及傳真號碼。
                        The Client shall not publish or use the provided address, telephone number and fax number
                        provided by CountAudit Secretarial Limited before the commencement of the service or after the
                        termination of service. The Client shall not allow any company or user not registered with
                        CountAudit Secretarial Limited to publish or use the provided address, telephone number and fax
                        number provided by CountAudit Secretarial Limited.
                        <br>
                        <br>
                        7
                        *本公司只為申請人之公司提供虛擬辦公室服務，故不會代收其聯絡人之私人信件或包裹。如有此情況，本公司將收取HKD100手續費，並且本公司不承擔任何因此引致之損失（包括但不限於信件或包裹丟失）。
                        The virtual office service is provided to the applicant only, i.e.the Company registered with
                        us. Thus, CountAudit Secretarial Limited will not accept the mails or parcels addressed to the
                        other parties (including but not limited to the company contact persons) (“unauthorized mails
                        and parcels”). If any unauthorized mails or parcels are sent to CountAudit Secretarial Limited,
                        CountAudit Secretarial Limited will charge HKD100 handling fee. Moreover, CountAudit Secretarial
                        Limited will not be responsible for any loss incurred resulted from this matter (including but
                        not limited to the loss of mail or parcels).
                        <br> <br>
                        8
                        *在服務生效前及或終止期間，或任何未經許可的情況下，本公司有權拒絕收取客戶的郵件、包裹、電郵或傳真，及拒絕處理客戶專線電話的來電或傳真，並且不會通知以上各種項目的傳送。在服務終止的30天后，客戶遺下的任何郵件、包裹、傳真和物件，本公司有權代為處理。

                        Before the commencement of service, during suspension period, or any situation without the prior
                        authorization, CountAudit Secretarial Limited reserves the right to reject any mails, parcels,
                        faxes or any other objects sent to the Client and will not handle all calls from the assigned
                        telephone/fax numbers. CountAudit Secretarial Limited is not responsible to notify the Client of
                        such delivery. 30 days after the termination of service, any mail, parcels, fax or any other
                        objects sent to or left at any offices of CountAudit Secretarial Limited shall be at the
                        disposal of CountAudit Secretarial Limited at its absolute discretion.
                        <br>
                        <br>
                        9 *代收取客戶郵件及包裹 MAIL HANDING SERVICES
                        <br>
                        <br>
                        [1]
                        包裹的體積不應超過20釐米*20釐米*20釐米。如包裹超過20釐米*20釐米*20釐米，本公司將按HKD20/每天/每20釐米*20釐米*20釐米收取存放費，並且本公司有權拒收任何超出上述體積的包裹。
                        The volume of parcels shall not exceed 20cm*20cm*20cm.If the volume of parcels exceed
                        20cm*20cm*20cm, storage fee will be charged at HKD20/day/20cm*20cm*20cm.Moreover, CountAudit
                        Secretarial Limited reserves the right to refuse receiving mails and parcels exceeding the above
                        stated size. <br>
                        <br>

                        [2] 客戶之體積不超過20釐米*20釐米*20釐米的包裹可以免費存放3天，3天後本公司將收取存放費(HKD20/每天/每件)
                        The storage of the parcel with its volume not exceeding 20cm*20cm*20cm will be free of charge
                        for the first 3 days and HKD20/item/day will be charged afterwards.
                        <br>
                        <br>
                        [3] 本公司有權拒絕收任何危險或非法物件。 
                        CountAudit Secretarial Limited reserves the right to refuse receiving any dangerous or illegal
                        items.
                        <br>
                        <br>
                        [4] 超逾30天不取，及不能聯絡者，本公司將自行處理寄存物，而不另行通知，並且不負任何責任，後果客戶自負。若客戶暫存的物件基於任何原因而被盜，遺失或損毀，本公司不須為此而負上任何責任。
                        Mails and parcels uncollected over 30 days, or if the Client is un-contactable, the mails and
                        parcels shall be disposed of without any notice. CountAudit Secretarial Limited shall not be
                        responsible for any losses or any obligations. CountAudit Secretarial Limited shall not be
                        liable if the stored items are lost, being stolen or damaged due to any reason during the
                        storage period. 






                    </td>
                </tr>
            </table>

            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>
            <div class="blank-area">- BLANK AREA -</div>


            <table class="form-table mt-0 mb-0">

                <tr>
                    <td>
                        10 *轉寄郵件及包裹服務 MAIL FORWARDING SERVICES <br>
                        若客戶需要轉寄郵件及包裹，需於服務申請時提出，或每次以電郵或書面形式通知本公司。本公司不會為轉寄郵件及包裹所引致的損失、被竊、被破壞、或任何災害，而作出任何賠償及負上任何責任。本公司每次將收取HKD80元手續費（不包轉寄郵件及包裹之郵寄費用）。
                        If mail forwarding services is required, the Client should state at the time of application.
                        Otherwise, the Client     should notice CountAudit Secretarial Limited by email or written
                        notice every time. CountAudit Secretarial Limited shall not be liable for any losses, damages,
                        cost, claims and expenses of liabilities of whatever nature in mail forwarding. CountAudit
                        Secretarial Limited will charge HKD80 for handling charge (excluding mailing fee) of the forward
                        mails and/or parcels.
                        <br>
                        <br>
                        11 *電話服務 CALL SERVICES    


                    </td>
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

<script type="text/javascript">

</script>

<?php get_footer(); ?>
</body>

</html>