<?= helper(["yardimcifonksiyonlar"]) ?><!--start sidebar -->
<!-- Tekli Hata Mesajı -->
<?php if (session()->has('error')): ?>
    <script>
        swal("Dikkat!", "<?= session('error') ?>", "error");
    </script>
<?php endif; ?>
<!-- Tekli Hata Mesajı -->
<!-- ///////////////////// -->
<!-- Başarılı Mesajı -->
<?php if (session()->has('success')): ?>
    <script>
        swal("Başarılı!", "<?= session('success') ?>", "success");
    </script>
<?php endif; ?>

<!-- Başarılı Mesajı -->
<!-- ///////////////////// -->
<!-- Sıralı Hata Mesajları -->
<?php
$mesaj = "";
if (session()->getFlashdata('errors')): ?>

    <?php foreach (session()->getFlashdata('errors') as $error): ?>
        <?php $mesaj = $mesaj . " " . esc($error) ?>
    <?php endforeach; ?>
    <script>
        swal("Dikkat!", "<?= $mesaj ?>", "error");
    </script>
<?php endif; ?>
<!-- Sıralı Hata Mesajları -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="<?= site_logo("small") ?>" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">Reflex Bulut</h4>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li>
      <a href="<?= base_url() ?>/home">
        <div class="parent-icon">
          <ion-icon name="home-outline"></ion-icon>
        </div>
        <div class="menu-title">Gösterge Paneli</div>
      </a>
    </li>

    <li>
      <a href="<?= base_url() ?>/users">
        <div class="parent-icon">
          <ion-icon name="person-circle-outline"></ion-icon>
        </div>
        <div class="menu-title">Kullanıcılar</div>
      </a>
    </li>
    <li>
      <a href="<?= base_url() ?>/product">
        <div class="parent-icon">
          <ion-icon name="basket-outline"></ion-icon>
        </div>
        <div class="menu-title">Ürünler</div>
      </a>
    </li>

    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="gift-outline"></ion-icon>
        </div>
        <div class="menu-title">Components</div>
      </a>
      <ul>
        <li> <a href="component-alerts.html">
            <ion-icon name="ellipse-outline"></ion-icon>Alerts
          </a>
        </li>
        <li> <a href="component-accordions.html">
            <ion-icon name="ellipse-outline"></ion-icon>Accordions
          </a>
        </li>
        <li> <a href="component-badges.html">
            <ion-icon name="ellipse-outline"></ion-icon>Badges
          </a>
        </li>
        <li> <a href="component-buttons.html">
            <ion-icon name="ellipse-outline"></ion-icon>Buttons
          </a>
        </li>
        <li> <a href="component-cards.html">
            <ion-icon name="ellipse-outline"></ion-icon>Cards
          </a>
        </li>
        <li> <a href="component-carousels.html">
            <ion-icon name="ellipse-outline"></ion-icon>Carousels
          </a>
        </li>
        <li> <a href="component-list-groups.html">
            <ion-icon name="ellipse-outline"></ion-icon>List Groups
          </a>
        </li>
        <li> <a href="component-media-object.html">
            <ion-icon name="ellipse-outline"></ion-icon>Media Objects
          </a>
        </li>
        <li> <a href="component-modals.html">
            <ion-icon name="ellipse-outline"></ion-icon>Modals
          </a>
        </li>
        <li> <a href="component-navs-tabs.html">
            <ion-icon name="ellipse-outline"></ion-icon>Navs & Tabs
          </a>
        </li>
        <li> <a href="component-paginations.html">
            <ion-icon name="ellipse-outline"></ion-icon>Pagination
          </a>
        </li>
        <li> <a href="component-popovers-tooltips.html">
            <ion-icon name="ellipse-outline"></ion-icon>Popovers & Tooltips
          </a>
        </li>
        <li> <a href="component-progress-bars.html">
            <ion-icon name="ellipse-outline"></ion-icon>Progress
          </a>
        </li>
        <li> <a href="component-spinners.html">
            <ion-icon name="ellipse-outline"></ion-icon>Spinners
          </a>
        </li>
        <li> <a href="component-notifications.html">
            <ion-icon name="ellipse-outline"></ion-icon>Notifications
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="leaf-outline"></ion-icon>
        </div>
        <div class="menu-title">Icons</div>
      </a>
      <ul>
        <li> <a href="icons-line-icons.html">
            <ion-icon name="ellipse-outline"></ion-icon>Line Icons
          </a>
        </li>
        <li> <a href="icons-boxicons.html">
            <ion-icon name="ellipse-outline"></ion-icon>Boxicons
          </a>
        </li>
        <li> <a href="icons-feather-icons.html">
            <ion-icon name="ellipse-outline"></ion-icon>Feather Icons
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-label">Forms & Tables</li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="newspaper-outline"></ion-icon>
        </div>
        <div class="menu-title">Forms</div>
      </a>
      <ul>
        <li> <a href="form-elements.html">
            <ion-icon name="ellipse-outline"></ion-icon>Form Elements
          </a>
        </li>
        <li> <a href="form-input-group.html">
            <ion-icon name="ellipse-outline"></ion-icon>Input Groups
          </a>
        </li>
        <li> <a href="form-layouts.html">
            <ion-icon name="ellipse-outline"></ion-icon>Forms Layouts
          </a>
        </li>
        <li> <a href="form-validations.html">
            <ion-icon name="ellipse-outline"></ion-icon>Form Validation
          </a>
        </li>
        <li> <a href="form-wizard.html">
            <ion-icon name="ellipse-outline"></ion-icon>Form Wizard
          </a>
        </li>
        <li> <a href="form-radios-and-checkboxes.html">
            <ion-icon name="ellipse-outline"></ion-icon>Radio & Checkboxes
          </a>
        </li>
        <li> <a href="form-date-time-pickes.html">
            <ion-icon name="ellipse-outline"></ion-icon>Date Pickers
          </a>
        </li>
        <li> <a href="form-select2.html">
            <ion-icon name="ellipse-outline"></ion-icon>Select2
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="server-outline"></ion-icon>
        </div>
        <div class="menu-title">Tables</div>
      </a>
      <ul>
        <li> <a href="table-basic-table.html">
            <ion-icon name="ellipse-outline"></ion-icon>Basic Table
          </a>
        </li>
        <li> <a href="table-advance-tables.html">
            <ion-icon name="ellipse-outline"></ion-icon>Advance Tables
          </a>
        </li>
        <li> <a href="table-datatable.html">
            <ion-icon name="ellipse-outline"></ion-icon>Data Table
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-label">Pages</li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="lock-closed-outline"></ion-icon>
        </div>
        <div class="menu-title">Authentication</div>
      </a>
      <ul>
        <li> <a href="authentication-sign-in-basic.html">
            <ion-icon name="ellipse-outline"></ion-icon>Sign In Basic
          </a>
        </li>
        <li> <a href="authentication-sign-in-cover.html">
            <ion-icon name="ellipse-outline"></ion-icon>Sign In Cover
          </a>
        </li>
        <li> <a href="authentication-sign-in-simple.html">
            <ion-icon name="ellipse-outline"></ion-icon>Sign In Simple
          </a>
        </li>
        <li> <a href="authentication-sign-up-basic.html">
            <ion-icon name="ellipse-outline"></ion-icon>Sign Up Basic
          </a>
        </li>
        <li> <a href="authentication-sign-up-cover.html">
            <ion-icon name="ellipse-outline"></ion-icon>Sign Up Cover
          </a>
        </li>
        <li> <a href="authentication-sign-up-simple.html">
            <ion-icon name="ellipse-outline"></ion-icon>Sign Up Simple
          </a>
        </li>
        <li> <a href="authentication-reset-password-basic.html">
            <ion-icon name="ellipse-outline"></ion-icon>Reset Password Basic
          </a>
        </li>
        <li> <a href="authentication-reset-password-cover.html">
            <ion-icon name="ellipse-outline"></ion-icon>Reset Password Cover
          </a>
        </li>
        <li> <a href="authentication-reset-password-simple.html">
            <ion-icon name="ellipse-outline"></ion-icon>Reset Password Simple
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="pages-user-profile.html">
        <div class="parent-icon">
          <ion-icon name="person-circle-outline"></ion-icon>
        </div>
        <div class="menu-title">User Profile</div>
      </a>
    </li>
    <li>
      <a href="pages-edit-profile.html">
        <div class="parent-icon">
          <ion-icon name="create-outline"></ion-icon>
        </div>
        <div class="menu-title">Edit Profile</div>
      </a>
    </li>
    <li>
      <a href="pages-invoices.html">
        <div class="parent-icon">
          <ion-icon name="receipt-outline"></ion-icon>
        </div>
        <div class="menu-title">Invoice</div>
      </a>
    </li>
    <li>
      <a href="pages-to-do.html">
        <div class="parent-icon">
          <ion-icon name="shield-checkmark-outline"></ion-icon>
        </div>
        <div class="menu-title">Invoice</div>
      </a>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="copy-outline"></ion-icon>
        </div>
        <div class="menu-title">Extra Pages</div>
      </a>
      <ul>
        <li><a href="pages-faq.html">
            <ion-icon name="ellipse-outline"></ion-icon>FAQ
          </a>
        </li>
        <li><a href="pages-pricing-tables.html">
            <ion-icon name="ellipse-outline"></ion-icon>Pricing
          </a>
        </li>
        <li><a href="pages-errors-404-error.html">
            <ion-icon name="ellipse-outline"></ion-icon>404 Error
          </a>
        </li>
        <li><a href="pages-errors-500-error.html">
            <ion-icon name="ellipse-outline"></ion-icon>500 Error
          </a></li>
        <li><a href="pages-errors-coming-soon.html">
            <ion-icon name="ellipse-outline"></ion-icon>Coming Soon
          </a></li>
        <li><a href="pages-starter-page.html">
            <ion-icon name="ellipse-outline"></ion-icon>Blank Page
          </a></li>
      </ul>
    </li>
    <li class="menu-label">Charts & Maps</li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="bar-chart-outline"></ion-icon>
        </div>
        <div class="menu-title">Charts</div>
      </a>
      <ul>
        <li> <a href="charts-apex-chart.html">
            <ion-icon name="ellipse-outline"></ion-icon>Apex
          </a>
        </li>
        <li> <a href="charts-chartjs.html">
            <ion-icon name="ellipse-outline"></ion-icon>Chartjs
          </a>
        </li>
        <li> <a href="charts-peity.html">
            <ion-icon name="ellipse-outline"></ion-icon>Peity
          </a>
        </li>
        <li> <a href="charts-other.html">
            <ion-icon name="ellipse-outline"></ion-icon>Other Charts
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="map-outline"></ion-icon>
        </div>
        <div class="menu-title">Maps</div>
      </a>
      <ul>
        <li> <a href="map-google-maps.html">
            <ion-icon name="ellipse-outline"></ion-icon>Google Maps
          </a>
        </li>
        <li> <a href="map-vector-maps.html">
            <ion-icon name="ellipse-outline"></ion-icon>Vector Maps
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-label">Others</li>
    <li>
      <a class="has-arrow" href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="list-outline"></ion-icon>
        </div>
        <div class="menu-title">Menu Levels</div>
      </a>
      <ul>
        <li> <a class="has-arrow" href="javascript:;">
            <ion-icon name="ellipse-outline"></ion-icon>Level One
          </a>
          <ul>
            <li> <a class="has-arrow" href="javascript:;">
                <ion-icon name="ellipse-outline"></ion-icon>Level Two
              </a>
              <ul>
                <li> <a href="javascript:;">
                    <ion-icon name="ellipse-outline"></ion-icon>Level Three
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <a href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="document-text-outline"></ion-icon>
        </div>
        <div class="menu-title">Documentation</div>
      </a>
    </li>
    <li>
      <a href="javascript:;">
        <div class="parent-icon">
          <ion-icon name="link-outline"></ion-icon>
        </div>
        <div class="menu-title">Support</div>
      </a>
    </li>
  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->

<!--start top header-->
<header class="top-header">
  <nav class="navbar navbar-expand gap-3">
    <div class="toggle-icon">
      <ion-icon name="menu-outline"></ion-icon>
    </div>

    <form class="searchbar">
      <div class="position-absolute top-50 translate-middle-y search-icon ms-3">
        <ion-icon name="search-outline"></ion-icon>
      </div>
      <input class="form-control" type="text" placeholder="Search for anything">
      <div class="position-absolute top-50 translate-middle-y search-close-icon">
        <ion-icon name="close-outline"></ion-icon>
      </div>
    </form>
    <div class="top-navbar-right ms-auto">

      <ul class="navbar-nav align-items-center">
        <li class="nav-item">
          <a class="nav-link mobile-search-button" href="javascript:;">
            <div class="">
              <ion-icon name="search-outline"></ion-icon>
            </div>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link dark-mode-icon" href="javascript:;">
            <div class="mode-icon">
              <ion-icon name="moon-outline"></ion-icon>
            </div>
          </a>
        </li>
        <li class="nav-item dropdown dropdown-large dropdown-apps">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
            <div class="">
              <ion-icon name="apps-outline"></ion-icon>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
            <div class="row row-cols-3 g-3 p-3">
              <div class="col text-center">
                <div class="app-box mx-auto bg-gradient-purple text-white">
                  <ion-icon name="cart-outline"></ion-icon>
                </div>
                <div class="app-title">Orders</div>
              </div>
              <div class="col text-center">
                <div class="app-box mx-auto bg-gradient-info text-white">
                  <ion-icon name="people-outline"></ion-icon>
                </div>
                <div class="app-title">Teams</div>
              </div>
              <div class="col text-center">
                <div class="app-box mx-auto bg-gradient-success text-white">
                  <ion-icon name="shield-checkmark-outline"></ion-icon>
                </div>
                <div class="app-title">Tasks</div>
              </div>
              <div class="col text-center">
                <div class="app-box mx-auto bg-gradient-danger text-white">
                  <ion-icon name="videocam-outline"></ion-icon>
                </div>
                <div class="app-title">Media</div>
              </div>
              <div class="col text-center">
                <div class="app-box mx-auto bg-gradient-warning text-white">
                  <ion-icon name="file-tray-outline"></ion-icon>
                </div>
                <div class="app-title">Files</div>
              </div>
              <div class="col text-center">
                <div class="app-box mx-auto bg-gradient-branding text-white">
                  <ion-icon name="notifications-outline"></ion-icon>
                </div>
                <div class="app-title">Alerts</div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-large">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
            <div class="position-relative">
              <span class="notify-badge">8</span>
              <ion-icon name="notifications-outline"></ion-icon>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end">
            <a href="javascript:;">
              <div class="msg-header">
                <p class="msg-header-title">Notifications</p>
                <p class="msg-header-clear ms-auto">Marks all as read</p>
              </div>
            </a>
            <div class="header-notifications-list">
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="notify text-primary">
                    <ion-icon name="cart-outline"></ion-icon>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                        ago</span></h6>
                    <p class="msg-info">You have recived new orders</p>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="notify text-danger">
                    <ion-icon name="person-outline"></ion-icon>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                        ago</span></h6>
                    <p class="msg-info">5 new user registered</p>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="notify text-success">
                    <ion-icon name="document-outline"></ion-icon>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
                        ago</span></h6>
                    <p class="msg-info">The pdf files generated</p>
                  </div>
                </div>
              </a>

              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="notify text-info">
                    <ion-icon name="checkmark-done-outline"></ion-icon>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span></h6>
                    <p class="msg-info">Your new product has approved</p>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="notify text-warning">
                    <ion-icon name="send-outline"></ion-icon>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
                        ago</span></h6>
                    <p class="msg-info">5.1 min avarage time response</p>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="notify text-danger">
                    <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
                        ago</span></h6>
                    <p class="msg-info">New customer comments recived</p>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="notify text-primary">
                    <ion-icon name="albums-outline"></ion-icon>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
                        ago</span></h6>
                    <p class="msg-info">24 new authors joined last week</p>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="notify text-success">
                    <ion-icon name="shield-outline"></ion-icon>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
                        ago</span></h6>
                    <p class="msg-info">Successfully shipped your item</p>
                  </div>
                </div>
              </a>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="notify text-warning">
                    <ion-icon name="cafe-outline"></ion-icon>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
                        ago</span></h6>
                    <p class="msg-info">45% less alerts last 4 weeks</p>
                  </div>
                </div>
              </a>
            </div>
            <a href="javascript:;">
              <div class="text-center msg-footer">View All Notifications</div>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown dropdown-user-setting">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
            <div class="user-setting">
              <img src="<?= public_dosya_yolu() ?>assets/images/avatars/06.png" class="user-img" alt="">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex flex-row align-items-center gap-2">
                  <img src="<?= public_dosya_yolu() ?>assets/images/avatars/06.png" alt="" class="rounded-circle"
                    width="54" height="54">
                  <div class="">
                    <h6 class="mb-0 dropdown-user-name">Jhon Deo</h6>
                    <small class="mb-0 dropdown-user-designation text-secondary">UI Developer</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="">
                    <ion-icon name="person-outline"></ion-icon>
                  </div>
                  <div class="ms-3"><span>Profile</span></div>
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="">
                    <ion-icon name="settings-outline"></ion-icon>
                  </div>
                  <div class="ms-3"><span>Setting</span></div>
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="">
                    <ion-icon name="speedometer-outline"></ion-icon>
                  </div>
                  <div class="ms-3"><span>Dashboard</span></div>
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="">
                    <ion-icon name="wallet-outline"></ion-icon>
                  </div>
                  <div class="ms-3"><span>Earnings</span></div>
                </div>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="">
                    <ion-icon name="cloud-download-outline"></ion-icon>
                  </div>
                  <div class="ms-3"><span>Downloads</span></div>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item" href="javascript:;">
                <div class="d-flex align-items-center">
                  <div class="">
                    <ion-icon name="log-out-outline"></ion-icon>
                  </div>
                  <div class="ms-3"><span>Logout</span></div>
                </div>
              </a>
            </li>
          </ul>
        </li>

      </ul>

    </div>
  </nav>
</header>
<!--end top header-->