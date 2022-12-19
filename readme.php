<?php include("inc_head.php"); ?>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <!-- 頁面 -->
            <table class="table table-hover">
                <thead class="bg-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">頁面</th>
                        <th scope="col">連結</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1-a.</td>
                        <td>首頁(會員-已登入)</td>
                        <td><a href="home.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>1-b.</td>
                        <td>首頁(委員-已登入)</td>
                        <td><a href="home_member.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>1-c.</td>
                        <td>首頁(未登入)</td>
                        <td><a href="home_noLogin.php">檢視</a></td>

                    </tr>

                    <tr>
                        <td>2</td>
                        <td>登入頁</td>
                        <td><a href="login.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>3</td>
                        <td>忘記密碼</td>
                        <td><a href="forget_password.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>4</td>
                        <td>新密碼已寄出</td>
                        <td><a href="msg_forget.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>5</td>
                        <td>註冊</td>
                        <td><a href="register.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>6</td>
                        <td>個人資料(檢視)</td>
                        <td><a href="member_view.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>7</td>
                        <td>個人資料(編輯)</td>
                        <td><a href="member_edit.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>8</td>
                        <td>個人資料(修改密碼)</td>
                        <td><a href="member_password.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>9</td>
                        <td>投稿說明</td>
                        <td><a href="seminar_manual.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>10</td>
                        <td>投稿原則</td>
                        <td><a href="seminar_rule.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>11</td>
                        <td>會議投稿</td>
                        <td><a href="seminar_contribute.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>12</td>
                        <td>投稿辦法</td>
                        <td><a href="seminar_method.php">檢視</a></td>

                    </tr>

                    <tr>
                        <td>13</td>
                        <td>聯絡我們</td>
                        <td><a href="contact.php">檢視</a></td>

                    </tr>

                    <tr>
                        <td>14</td>
                        <td>會議投稿-投稿內頁</td>
                        <td><a href="seminar_inner.php">檢視</a></td>

                    </tr>

                    <tr>
                        <td>15</td>
                        <td>會員中心-稿件進度</td>
                        <td><a href="progress.php">檢視</a></td>

                    </tr>

                    <tr>
                        <td>16-a.</td>
                        <td>會員中心-稿件進度-檢視(通過)</td>
                        <td><a href="progress_view01.php">檢視</a></td>

                    </tr>

                    <tr>
                        <td>16-b.</td>
                        <td>會員中心-稿件進度-檢視(不通過)</td>
                        <td><a href="progress_view02.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>16-c.</td>
                        <td>會員中心-稿件進度-修改(未送出)</td>
                        <td><a href="progress_edit01.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>16-d.</td>
                        <td>會員中心-稿件進度-修改(被退回)</td>
                        <td><a href="progress_edit02.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>17</td>
                        <td>稿件審查</td>
                        <td><a href="review.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>18</td>
                        <td>稿件審查>審查</td>
                        <td><a href="review_view01.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>19</td>
                        <td>稿件審查>重新審查</td>
                        <td><a href="review_view02.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>20</td>
                        <td>稿件審查>檢視</td>
                        <td><a href="review_view03.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>21</td>
                        <td>請先登入頁面</td>
                        <td><a href="toLogin.php">檢視</a></td>

                    </tr>
                    <tr>
                        <td>22</td>
                        <td>最新消息內頁</td>
                        <td><a href="news.php">檢視</a></td>

                    </tr>
                </tbody>
            </table>
            <!-- 電子郵件 -->
            <table class="table table-hover">
                <thead  class="bg-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">電子郵件</th>
                        <th scope="col">內容</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>1</td>
                        <td>註冊成功</td>
                        <td><a href="mail_03.html">檢視</a></td>
                    </tr> -->
                    <tr>
                        <td>2</td>
                        <td>密碼已修改成功</td>
                        <td><a href="mail_02.html">檢視</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>忘記密碼</td>
                        <td><a href="mail_01.html">檢視</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>