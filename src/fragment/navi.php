<div class="col-12 col-md-10 col-xl-9 main-menu">
    <nav class="site-navigation position-relative text-left" role="navigation">

        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block ml-0 pl-0">
            <li><a href="<?php if ($page_name != 'index') { echo './index.php'; } ?>#hjfr-greetings-section" class="nav-link">인사말</a></li>
            <li><a href="<?php if ($page_name != 'index') { echo './index.php'; } ?>#hjfr-history-section" class="nav-link">연혁</a></li>
            <?php if ($page_name == 'index' || $page_name == 'notice') { ?>
                <li class="has-children">
                    <a href="#hjfr-group-section" class="nav-link">그룹소개</a>
                <?php } else { ?>
                <li class="has-children" id="hjfr-nav-group">
                    <span class="nav-link active">그룹소개</span>
                <?php } ?>
                <ul class="dropdown arrow-top">
                    <li><a href="disuse.php" class="nav-link hjfr-nav-sub">불용자재 사업</a></li>
                    <li><a href="lng.php" class="nav-link hjfr-nav-sub">가스(LNG,수소) 및 에너지 사업</a></li>
                    <li><a href="sun.php" class="nav-link hjfr-nav-sub">태양광 발전 사업</a></li>
                    <li><a href="water.php" class="nav-link hjfr-nav-sub">한준케미칼 - 폐화학물질 사업</a></li>
                    <li><a href="oil.php" class="nav-link hjfr-nav-sub">켐애로우 루보 - 윤활유 사업</a></li>
                    <li><a href="wood.php" class="nav-link hjfr-nav-sub">규원에너지 - 목재 펠릿 사업</a></li>
                </ul>
                </li>
                <li><a href="./notice.php" class="nav-link <?php if($page_name == 'notice') { echo ' active'; } ?>">공지사항</a></li>
                <li><a href="<?php if ($page_name != 'index') { echo './index.php'; } ?>#hjfr-map-section" class="nav-link">오시는 길</a></li>
        </ul>
    </nav>
</div>