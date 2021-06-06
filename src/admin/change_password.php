<?php
include('./action/login_check.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>한준에프알 Admin - login</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center" style="margin-top: 6rem;">
                        <div class="col-lg-5">
                            <h3 class="text-center font-weight-light my-4">비밀번호 변경</h3>
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-body">
                                    <form id="changePasswordForm" name="changePasswordForm" method="post" action="./action/change_password_submit.php">
                                        <div class="form-group">
                                            <label class="small mb-1" for="currentPassword">현재 비밀번호</label>
                                            <input class="form-control py-4" id="currentPassword" name="currentPassword" type="password" aria-describedby="currentPasswordHelp" placeholder="현재 비밀번호를 입력해 주세요." />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="changePassword">새로운 비밀번호</label>
                                            <input class="form-control py-4" id="changePassword" name="changePassword" type="password" aria-describedby="changePasswordHelp" placeholder="새로운 비밀번호를 입력해 주세요." />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="changePasswordCheck">새로운 비밀번호 체크</label>
                                            <input class="form-control py-4" id="changePasswordCheck" type="password" aria-describedby="changePasswordCheckHelp" placeholder="새로운 비밀번호를 한번 더 입력해 주세요." />
                                        </div>
                                        <div class="form-group" id="error_message_box">
                                            <hr>
                                            <small id="error_message" style="color: red;"></small>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <div></div>
                                            <button class="btn btn-primary" onclick="onSubmit(event)">비밀번호 변경하기</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="./js/change_password.js"></script>
</body>

</html>