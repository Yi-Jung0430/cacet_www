<?php include("inc_head.php"); ?>
<div class="page bg-gray02">
    <div class="home__bg01">
        <!-- 導航欄 開始 -->
        <?php include("inc_navbar.php"); ?>
        <!-- 導航欄 結束 -->

        <div class="container pb-3 pb-lg-5">
            <div class="row">
                <div class="col">
                    <!-- breadcrumb start -->
                    <nav class="mt-3 mt-md-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.php">首頁</a></li>
                            <li class="breadcrumb-item active" aria-current="page">聯絡我們</li>
                        </ol>
                    </nav>
                    <!-- breadcrumb end -->

                    <!-- 聯絡表格 開始 -->
                    <div class="table-responsive">
                        <table class="contact table table-bordered border-third table-hover mt-3 mt-lg-5 ">
                            <thead>
                                <tr class="bg-third text-white">
                                    <th colspan="2" class="fs-6 py-2 text-nowrap">研討會</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-nowrap">聯絡人</th>
                                    <td>廖敏蕙助理秘書</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-nowrap">電話</th>
                                    <td class="text-nowrap">02-8226-5021#3014</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-nowrap">信箱</th>
                                    <td colspan="2" class="text-nowrap">
                                        <a href="mailto: iceet@cacet.org">iceet@cacet.org</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="contact table table-bordered border-third table-hover mt-3 mt-lg-5">
                            <thead class="text-primary">
                                <tr class="bg-third text-white">
                                    <th colspan="2" class="fs-6 py-2 text-nowrap">期刊</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="text-nowrap">聯絡人</th>
                                    <td class="text-nowrap">廖敏蕙秘書</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-nowrap">電話</th>
                                    <td class="text-nowrap">02-8226-5021#3014</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-nowrap">信箱</th>
                                    <td colspan="2" class="text-nowrap">
                                        <a href="mailto: etl@cacet.org">etl@cacet.org</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- 聯絡表格 結束 -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("inc_footer.php"); ?>