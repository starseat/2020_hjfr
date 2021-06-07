<?php

session_start();

$page_name = 'notice';
require_once('./fragment/header.php');
?>

<?php
include('./common.php');
include('./db_conn.php');
?>

<?php

$notice_seq = 0;
$is_access = false;
if ($_SERVER['QUERY_STRING'] != '') {
    $notice_seq = $_GET['seq'];
    if (!isEmpty($notice_seq) && is_numeric($notice_seq)) {
        $is_access = true;
    }
}

if (!$is_access) {
    viewAlert('잘못된 접근 입니다.');
    mysqli_close($conn);
    flush();
    //historyBack();
    echo ('<meta http-equiv="refresh" content="0 url=./notice.php" />');
    exit;
}

$notice_seq = intval(mysqli_real_escape_string($conn, $notice_seq));

$sql  = "SELECT seq, level, title, contents, view_count, created_at, updated_at FROM boards WHERE seq = $notice_seq";
$sql .= " Limit 1";
$result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
$notice_info = $result->fetch_array();
$result->free();

// 조회수 처리
// $notice_view_cookie_name = 'notice_view_' . $notice_seq;
// if (!isset($_COOKIE[$notice_view_cookie_name]) || empty($_COOKIE[$notice_view_cookie_name])) {
//     $sql  = 'UPDATE boards set view_count = view_count + 1 WHERE seq = ' . $notice_seq;
//     $result = mysqli_query($conn, $sql) or exit(mysqli_error($conn));
//     // setcookie($notice_view_cookie_name, 1, time() + (60 * 60 * 24), '/');  // 1 day
// }
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="./css/common.css" type="text/css" rel="stylesheet">
<link href="./css/notice.css" type="text/css" rel="stylesheet">

<!-- 콘텐츠 -->
<div class="site-section" id="hjfr-notice-section-1">
    <div class="container">
        <div class="row hjfr-main-blank"></div>
        <div class="row hjfr-main-blank"></div>

        <div class="content_inner">
            <h2 class="content_title">공지사항</h2>
            <br>

            <?php
            if (isset($_SESSION['is_login']) && !empty($_SESSION['is_login']) && $_SESSION['is_login'] == 1) {
            ?>
                <div style="text-align: right;">
                    <button class="btn btn btn-outline-secondary" onclick="location.href='/admin/notice_edit.php?seq=<?php echo $notice_seq ?>'">수정하기</button>
                    <button class="btn btn btn-outline-danger" onclick="doDelete(<?php echo $notice_seq ?>);">삭제하기</button>
                </div>
            <?php }  ?>

            <div class="board_view_area">
                <div class="top_title_faq">
                    <em class="board_title"><?php echo getNoticeListViewTitme(intval(RemoveXSS($notice_info['level'])), RemoveXSS($notice_info['title'])); ?></em>
                </div>
                <div class="stit_area">
                    <span class="stit_regist_day">
                        <span class="stit_text">등록일 :</span>
                        <span class="stit_date"><?php echo $notice_info['created_at']; ?></span>
                    </span>
                    <span class="stit_regist_end">
                        <span class="stit_text">수정일 :</span>
                        <em class="stit_date"><?php echo $notice_info['updated_at']; ?></em>
                    </span>
                </div>
                <div class="view_area"><?php echo RemoveXSS($notice_info['contents']); ?></div>
                <div class="button_box_w">
                    <button type="button" class="button_board_list" onclick="javascript: location.href='./notice.php'; ">
                        <span class="btn_bl_text">목록으로</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
mysqli_close($conn);
flush();
?>

<?php require_once('./fragment/footer.php'); ?>

<?php if (isset($_SESSION['is_login']) && !empty($_SESSION['is_login']) && $_SESSION['is_login'] == 1) { ?>
    <script>
        function doDelete(notice_seq) {
            $.ajax({
                type: 'post',
                url: '/admin/action/notice_delete.php',
                data: {
                    seq: notice_seq
                },
                dataType: 'json',
                success: function(result) {
                    console.log('[doDelete] result:: ', result);
                    alert(result.message);
                    location.href = '/notice.php';
                },
                error: function(xhr, status, error) {
                    console.error('[doDelete] ajax error:: ', error);
                },

            });
        }
    </script>
<?php } ?>

<?php require_once('./fragment/tail.php'); ?>