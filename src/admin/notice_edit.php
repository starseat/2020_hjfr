<?php
include('./action/login_check.php');
?>

<?php

include('../db_conn.php');
include('../common.php');

$notice_seq = 0;
if ($_SERVER['QUERY_STRING'] != '') {
    $notice_seq = $_GET['seq'];
}

$notice_seq = intval(mysqli_real_escape_string($conn, $notice_seq));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>한준에프알 Admin - 공지사항</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/common.css">
</head>

<body>

    <!-- #hjfr-notice-section-1 start -->
    <div class="site-section" id="hjfr-notice-section-1">
        <div class="container">

            <div class="container">

                <div class="row hjfr-main-blank"></div>
                <div class="row hjfr-main-blank"></div>

                <div class="content_inner">
                    <h2 class="content_title">공지사항</h2>

                    <div class="card mt-2">
                        <div class="card-body">
                            <form id="notice_from" name="notice_from">
                                <?php if ($notice_seq > 0) { ?>
                                    <div class="form-group" id="notice_date_box">
                                        <div class="row">
                                            <div class="col-6"></div>
                                            <div class="col-6 text-right">
                                                <div class="row justify-content-md-end">
                                                    <div class="col-3"><label for="notice_created_at" class="col-form-label">최초 등록일</label></div>
                                                    <div class="col-4"><input type="text" class="form-control" id="notice_created_at" readonly></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-6"></div>
                                            <div class="col-6 text-right">
                                                <div class="row justify-content-md-end">
                                                    <div class="col-3"><label for="notice_updated_at" class="col-form-label">마지막 수정일</label></div>
                                                    <div class="col-4"><input type="text" class="form-control" id="notice_updated_at" readonly></div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                <?php } ?>

                                <input type="hidden" id="notice_seq" name="notice_seq" value="<?php echo $notice_seq; ?>">

                                <div class="form-group row">
                                    <div class="form-group col-md-8">
                                        <label for="notice_title">* 제목</label>
                                        <input type="text" class="form-control" id="notice_title" name="notice_title" placeholder="공지사항 제목을 입력해주세요.">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="notice_level">중요도</label>
                                        <select class="form-control" id="notice_level" name="notice_level">
                                            <option value="1">일반</option>
                                            <option value="2">중요</option>
                                            <option value="3">긴급</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="notice_contents">* 공지사항 내용</label>
                                    <div id="notice_contents" class="form-control"></div>
                                </div>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <button class="btn btn-info" id="notice_list_btn" onclick="goNoticeList(event)">목록</button>
                                        <button class="btn btn-secondary" id="notice_form_reset_btn" onclick="doReset(event)">초기화</button>
                                        <?php if($notice_seq > 0) { ?>
                                        <button class="btn btn-danger" id="notice_form_delete_btn" onclick="doDelete(event)">삭제</button>
                                        <?php } ?>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button class="btn btn-primary" onclick="doSubmit(event)">저장</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ko-KR.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/notice.edit.js"></script>

</body>

</html>