<!-- Sidebar -->
<header>
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white p-0">
    <div class="position-sticky">
      <div class="mt-4">
        <div id="header-content" class="w-auto">
          <div class="d-flex justify-content-center">
            <img src="./image/baby.jpg"
              alt="avatar" class="rounded-circle img-fluid mb-3 m-auto" style="max-width: 100px;">
          </div>
          <h4 class="text-center">
            <span style="white-space: nowrap;"><?php echo $_SESSION['name']?></span>
          </h4>
          <p class="text-center"><?php echo $_SESSION['email']?></p>
        </div>
        <hr class="mb-0">
      </div>
      <div class="list-group list-group-flush mx-3 mt-4">
        <a class="list-group-item list-group-item-action py-2 ripple pb-2 active" id="tab-main" data-mdb-toggle="pill" href="#pills-main" role="tab" aria-controls="pills-main" aria-selected="true">
          <i class="fas fa-house pe-3"></i>主畫面
        </a>
        <a class="list-group-item list-group-item-action py-2 ripple pb-2" id="tab-announcement" data-mdb-toggle="pill" href="#pills-announcement" role="tab" aria-controls="pills-announcement" aria-selected="false">
          <i class="fas fa-envelope pe-3"></i>公告
        </a>
        <a class="list-group-item list-group-item-action py-2 ripple pb-2" id="tab-message" data-mdb-toggle="pill" href="#pills-message" role="tab" aria-controls="pills-message" aria-selected="false">
          <i class="fas fa-comment pe-3"></i>留言板
        </a>
        <a class="list-group-item list-group-item-action py-2 ripple pb-2" id="tab-violate-record" data-mdb-toggle="pill" href="#pills-violate-record" role="tab" aria-controls="pills-violate-record" aria-selected="false">
          <i class="fas fa-book pe-3"></i>違規紀錄
        </a>
        <a class="list-group-item list-group-item-action py-2 ripple pb-2" id="tab-all" data-mdb-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="false">
          <i class="fas fa-house-chimney pe-3"></i>宿舍資料
        </a>
      </div>
      <div class="list-group list-group-flush mx-3">
        <a href="./index.php" class="list-group-item py-2 ripple pb-2">
          <i class="fas fa-right-from-bracket pe-3"></i>登出
        </a>
      </div>
      <div class=" text-center text-reset mt-5">
        <em><small>Copyright © 2023 - PYSY</small></em>
      </div>
  </nav>
</header>

<!--Main layout-->
<main>

  <div class="tab-content" style="max-height: 100vh;">

    <!--main-->
    <div class="tab-pane fade show active" id="pills-main" role="tabpanel" aria-labelledby="tab-main">
      <div class="card m-2 px-4 py-3">
        <div class="d-flex justify-content-between">
            <h4 class="mb-0">個人資料</h4>
        </div>
      </div>
      <div class="card m-2 px-4 py-3">
        <div>
          <p class="m-1">名稱：<?php echo $_SESSION['name'];?></p>
          <p class="m-1">帳號：<?php echo $_SESSION['account'];?></p>
          <p class="m-1">Email：<?php echo $_SESSION['email'];?></p>
          <p class="m-1">電話：<?php echo $_SESSION['phone'];?></p>
          <p class="m-1">種類：<?php echo $types[$_SESSION['type']];?></p>
          <p class="m-1">性別：<?php echo $genders[$_SESSION['gender']];?></p>
          <p class="m-1">科系：<?php echo $_SESSION['department'];?></p>
          <p class="m-1">學生帳號：<?php echo $_SESSION['student_account'];?></p>
          <p class="m-1">宿舍：<?php echo $_SESSION['dormitory_id'];?></p>
          <p class="m-1">房號：<?php echo $_SESSION['room_number'];?></p>
        </div>
      </div>
    </div>
  
    <!--announcement-->
    <div class="tab-pane fade" id="pills-announcement" role="tabpanel" aria-labelledby="tab-announcement">
      <?php
        require("./components/announcementComponent.php")
      ?>
    </div>

    <!--message-->
    <div class="tab-pane fade" id="pills-message" role="tabpanel" aria-labelledby="tab-message">
      <?php
        require("./components/messageComponent.php")
      ?>
    </div>

  </div>
</main>

<script>
  document.querySelectorAll('.form-outline').forEach((formOutline) => {
    new mdb.Input(formOutline).init();
  });

  if (location.hash === "#pills-main") {
    const triggerEl = document.querySelector('a[href="#pills-main"]');
    if (triggerEl) {
      let instance = mdb.Tab.getInstance(triggerEl)
      if (!instance) {
        instance = new mdb.Tab(triggerEl);
      }
      instance.show();
    }
  } else if (location.hash === "#pills-announcement") {
    const triggerEl = document.querySelector('a[href="#pills-announcement"]');
    if (triggerEl) {
      let instance = mdb.Tab.getInstance(triggerEl)
      if (!instance) {
        instance = new mdb.Tab(triggerEl);
      }
      instance.show();
    }
  } else if (location.hash === "#pills-message") {
    const triggerEl = document.querySelector('a[href="#pills-message"]');
    if (triggerEl) {
      let instance = mdb.Tab.getInstance(triggerEl)
      if (!instance) {
        instance = new mdb.Tab(triggerEl);
      }
      instance.show();
    }
  } else if (location.hash === "#pills-violate-record") {
    const triggerEl = document.querySelector('a[href="#pills-violate-record"]');
    if (triggerEl) {
      let instance = mdb.Tab.getInstance(triggerEl)
      if (!instance) {
        instance = new mdb.Tab(triggerEl);
      }
      instance.show();
    }
  } else if (location.hash === "#pills-all") {
    const triggerEl = document.querySelector('a[href="#pills-all"]');
    if (triggerEl) {
      let instance = mdb.Tab.getInstance(triggerEl)
      if (!instance) {
        instance = new mdb.Tab(triggerEl);
      }
      instance.show();
    }
  }
</script>

