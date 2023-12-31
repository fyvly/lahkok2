<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
  <!--begin::Header-->
  <div id="kt_header" style="" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
      <!--begin::Aside mobile toggle-->
      <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
        <div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
          <i class="bi bi-list fs-1"></i>
        </div>
      </div>
      <!--end::Aside mobile toggle-->
      <!--begin::Mobile logo-->
      <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
        <a href="<?= base_url('dashboard') ?>" class="d-lg-none">
          <img alt="Logo" src="<?= base_url('puy/dist/') ?>assets/media/logos/logo-compact.svg" class="h-15px" />
        </a>
      </div>
      <!--end::Mobile logo-->
      <!--begin::Wrapper-->
      <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
        <!--begin::Navbar-->
        <div class="d-flex align-items-stretch" id="kt_header_nav">
          <!--begin::Menu wrapper-->

          <!--end::Menu wrapper-->
        </div>
        <!--end::Navbar-->
        <!--begin::Topbar-->
        <div class="d-flex align-items-stretch flex-shrink-0">
          <!--begin::Toolbar wrapper-->
          <div class="topbar d-flex align-items-stretch flex-shrink-0">

            <!--begin::User-->
            <div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
              <!--begin::Menu wrapper-->
              <?php
              $profilenya               = $this->Global_model->selectidmaster_user(array('id_user' => $this->session->userdata('id_user')));
              ?>

              <div class="topbar-item cursor-pointer symbol px-3 px-lg-5 me-n3 me-lg-n5 symbol-30px symbol-md-35px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                <font color="white"><?php echo $profilenya->nama_user ?></font> &emsp; <img src="<?= base_url('puy/images/user/') ?><?php echo $profilenya->pic_user ?>" alt="metronic" />
              </div>
              <!--begin::Menu-->
              <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                  <div class="menu-content d-flex align-items-center px-3">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                      <img alt="Logo" src="<?= base_url('puy/images/user/') ?><?php echo $profilenya->pic_user ?>" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Username-->
                    <?

                    if ($profilenya->status_user == 1) {
                      $status_user = 'Aktif';
                      $warna_user = 'badge-success';
                    } else {
                      $status_user = 'Tidak Aktif';
                      $warna_user = 'badge-danger';
                    }
                    ?>
                    <div class="d-flex flex-column">
                      <div class="fw-bolder d-flex align-items-center fs-5"><?php echo $profilenya->nama_user ?>
                        <span class="badge <?= $warna_user ?> fw-bolder fs-8 px-2 py-1 ms-2"><?= $status_user ?></span>
                      </div>
                      <a href="#" class="fw-bold text-muted text-hover-primary fs-7"><?php echo $profilenya->email_user ?></a>
                    </div>
                    <!--end::Username-->
                  </div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                  <a href="<?php echo base_url('login/my_profile'); ?>" class="menu-link px-5">My Profile</a>
                </div>


                <!--end::Menu item-->

                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->


                <!--begin::Menu item-->
                <div class="menu-item px-5">
                  <a href="<?php echo base_url('login/logout'); ?>" class="menu-link px-5">Sign Out</a>
                </div>
                <!--end::Menu item-->

              </div>
              <!--end::Menu-->
              <!--end::Menu wrapper-->
            </div>
            <!--end::User -->
            <!--begin::Heaeder menu toggle-->
            <div class="d-flex align-items-stretch d-lg-none px-3 me-n3" title="Show header menu">
              <div class="topbar-item" id="kt_header_menu_mobile_toggle">
                <i class="bi bi-text-left fs-1"></i>
              </div>
            </div>
            <!--end::Heaeder menu toggle-->
          </div>
          <!--end::Toolbar wrapper-->
        </div>
        <!--end::Topbar-->
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::Header-->