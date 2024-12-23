 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/customers.png" class="img-circle elevation-2" ">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMİN PANELİ</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item" <?= (strpos($page, 'kafe') !== false) ? 'menu-open' : ''; ?>>
            <a class="nav-link" <?= $page =='index.php' ? 'active' :  ' ' ?> href="index.php">
            <i class="fa-solid fa-store"></i>
              <p>
                KAFEMİZ
              </p>
            </a>
          </li>

           <!-- Müşteri yönetimi -->
           <li class="nav-item"  <?= (strpos($page, 'müşteri') !== false) ? 'menu-open' : ''; ?>>
           <a class="nav-link" <?= $page =='index.php' ? 'active' :  ' ' ?> href="index.php">
            <i class="fa-solid fa-users"></i>
              <p>
                Müşteri Yönetimi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?p=müşteribilgileri" class="nav-link <?= ($page == 'müşteribilgileri') ? 'active' : ''; ?>">
                <i class="fa-sharp-duotone fa-solid fa-user"></i>
                  <p>Müşteri Bilgileri</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=indirimler" class="nav-link <?= ($page == 'indirimler') ? 'active' : ''; ?> ">
                <i class="fa-solid fa-tag"></i>
                  <p>indirimler</p>
                </a>
              </li>
</ul>
         <!-- Menü yönetimi -->
          <li class="nav-item menu-open"  <?= (strpos($page, 'menü') !== false) ? 'menu-open' : ''; ?>>
            <a class="nav-link" <?= $page =='index.php' ? 'active' :  ' ' ?> href="index.php">
            <i class="fa-solid fa-utensils"></i>
              <p>
              Menü Yönetimi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?p=menüekle" class="nav-link <?= ($page == 'menüekle') ? 'active' : ''; ?>">
                <i class="fa-solid fa-notes-medical"></i>
                  <p>Menü Ekle</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=menügüncelle" class="nav-link <?= ($page == 'menügüncelle') ? 'active' : ''; ?>">
                <i class="fa-solid fa-rotate-right"></i>
                  <p>Menü Güncelle</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=menüsil" class="nav-link <?= ($page == 'menüsil') ? 'active' : ''; ?>">
                <i class="fa-solid fa-square-minus"></i>
                  <p>Menü Sil </p>
                </a>
              </li>
            </ul>
          </li>

          <!-- Sipariş yönetimi -->
          <li class="nav-item" <?= (strpos($page, 'sipariş') !== false) ? 'menu-open' : ''; ?>>
          <a class="nav-link" <?= $page =='index.php' ? 'active' :  ' ' ?> href="index.php">
            <i class="fa-solid fa-pen-to-square"></i>
              <p>
                Sipariş Yönetimi
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?p=aktifsip" class="nav-link <?= ($page == 'aktifsip') ? 'active' : ''; ?>">
                <i class="fa-solid fa-check"></i>
                  <p>Aktif Siparişler</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=sipdurumu" class="nav-link <?= ($page == 'sipdurumu') ? 'active' : ''; ?>">
                <i class="fa-solid fa-receipt"></i>
                  <p>Sipariş Durumu</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=geçmişsip" class="nav-link <?= ($page == 'geçmişsip') ? 'active' : ''; ?>">
                <i class="fa-solid fa-file-export"></i>
                  <p>Geçmiş Siparişler</p>
                </a>
              </li>
            </ul>
          </li>
         
             <!-- FİNANS YÖNETİMİ -->
          <li class="nav-item" <?= (strpos($page, 'finans') !== false) ? 'menu-open' : ''; ?>>
            <a href="#" class="nav-link"  <?= $page =='index.php' ? 'active' :  ' ' ?> href="index.php">
            <i class="fa-solid fa-coins"></i>
              <p>
              Gelir ve Finans Yönetimi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?p=satışraporu" class="nav-link <?= ($page == 'satışraporu') ? 'active' : ''; ?>">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                  <p>Satış Raporları</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=gelirgider" class="nav-link <?= ($page == 'gelirgider') ? 'active' : ''; ?>">
                  <i class="fa-solid fa-chart-line"></i>
                  <p>Gelir-Gider Takibi</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=kasa" class="nav-link <?= ($page == 'kasa') ? 'active' : ''; ?>">
                <i class="fa-solid fa-cash-register"></i>
                  <p>Kasa Yönetimi</p>
                </a>
              </li>
</ul>

            <!-- ÇALIŞAN KADROMUZ -->
          <li class="nav-item" <?= (strpos($page, 'çalışan') !== false) ? 'menu-open' : ''; ?>>
            <a href="#" class="nav-link"  <?= $page =='index.php' ? 'active' :  ' ' ?> href="index.php">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Çalışan Yönetimi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?p=çalışanbil" class="nav-link <?= ($page == 'çalışanbil') ? 'active' : ''; ?>">
                <i class="fa-solid fa-person"></i>
                  <p>Çalışan Bilgileri</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=çalışmasaati" class="nav-link <?= ($page == 'çalışmasaati') ? 'active' : ''; ?>">
                <i class="fa-solid fa-clock"></i>
                  <p>İzin ve Çalışma Saatleri</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=maaş" class="nav-link <?= ($page == 'maaş') ? 'active' : ''; ?>">
                <i class="fa-solid fa-money-bill"></i>
                  <p>Maaş ve Ödeme Yönetimi</p>
                </a>
              </li>
          </li>
</ul>
            <!-- İŞLETME BİLGİLERİ -->
             
          <li class="nav-header"><br><br>İŞLETME BİLGİLERİ</li>
          <li class="nav-item" <?= (strpos($page, 'kadro') !== false) ? 'menu-open' : ''; ?>>
          <a class="nav-link" <?= $page =='index.php' ? 'active' :  ' ' ?> href="index.php">
            <i class="fa-solid fa-user-plus"></i>
              <p>
                Kadromuz
              </p>
            </a>
          </i>

          
          <li class="nav-item"  <?= (strpos($page, 'vizyon') !== false) ? 'menu-open' : ''; ?>>
          <a class="nav-link" <?= $page =='index.php' ? 'active' :  ' ' ?> href="index.php">
            <i class="fa-brands fa-slack"></i>
                Vizyonumuz
              </p>
            </a>
          </li>


          <li class="nav-item" <?= (strpos($page, 'rezervasyon ve etkinlik') !== false) ? 'menu-open' : ''; ?>>
          <a class="nav-link" <?= $page =='index.php' ? 'active' :  ' ' ?> href="index.php">
            <i class="fa-regular fa-file-lines"></i>
              <p>
                Rezervasyon Ve Etkinliklerimiz
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?p=rezervasyon" class="nav-link <?= ($page == 'rezervasyon') ? 'active' : ''; ?>">
                <i class="fa-regular fa-file"></i>
                  <p>Rezervasyon Takibi</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=etkinlik" class="nav-link <?= ($page == 'etkinlik') ? 'active' : ''; ?>">
                <i class="fa-brands fa-waze"></i><i class="fa-brands fa-waze"></i>
                  <p>Etkinliklerimiz</p>
                </a>
              </li>
</ul>
              <li class="nav-item" <?= (strpos($page, 'müşteri') !== false) ? 'menu-open' : ''; ?>>
            <a href="#" class="nav-link" <?= $page =='index.php' ? 'active' :  ' ' ?> href="index.php">
            <i class="fa-regular fa-face-smile"></i>
              <p>
                Müşteri Memnuniyeti
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?p=yorum" class="nav-link <?= ($page == 'yorum') ? 'active' : ''; ?>">
                <i class="fa-solid fa-comment"></i>
                  <p>Müşteri Yorumları</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=şikayet" class="nav-link <?= ($page == 'şikayet') ? 'active' : ''; ?>">
                <i class="fa-solid fa-bolt"></i>
                  <p>Müşteri Şikayetleri</p>
                </a>
              </li>
              <li class="nav-item">
              <a href="index.php?p=öneri" class="nav-link <?= ($page == 'öneri') ? 'active' : ''; ?>">
                <i class="fa-solid fa-bell"></i>
                  <p>Müşteri Önerileri</p>
                </a>
              </li>
            </ul>
          </li>
</ul>       
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
