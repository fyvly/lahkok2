<!--begin::Body-->
<?php $uri_1 = $this->uri->segment(1) ?>
<?php $uri_2 = $this->uri->segment(2) ?>
<?php $uri_3 = $this->uri->segment(3) ?>
<?php $uri_4 = $this->uri->segment(4) ?>
<?php $uri_5 = $this->uri->segment(5) ?>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <!--begin::Brand-->
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="<?= base_url('dashboard') ?>">
                        <h2 style="color: white;">SIMAIN</h2>
                    </a>
                    <!--end::Logo-->
                    <!--begin::Aside toggler-->
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr074.svg-->
                        <span class="svg-icon svg-icon-1 rotate-180">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M11.2657 11.4343L15.45 7.25C15.8642 6.83579 15.8642 6.16421 15.45 5.75C15.0358 5.33579 14.3642 5.33579 13.95 5.75L8.40712 11.2929C8.01659 11.6834 8.01659 12.3166 8.40712 12.7071L13.95 18.25C14.3642 18.6642 15.0358 18.6642 15.45 18.25C15.8642 17.8358 15.8642 17.1642 15.45 16.75L11.2657 12.5657C10.9533 12.2533 10.9533 11.7467 11.2657 11.4343Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Aside toggler-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid">
                    <!--begin::Aside Menu-->
                    <div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                            <div class="menu-item">
                                <div class="menu-content pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link <?php if ($uri_1 == 'dashboard') {
                                                        echo "active";
                                                    } ?>" href="<?= base_url('dashboard') ?>">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
                                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
                                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
                                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Monitoring</span>
                                </a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link <?php if ($uri_1 == 'maintenance') {
                                                        echo "active";
                                                    } ?>" href="<?= base_url('maintenance') ?>">
                                    <span class="menu-icon">
                                        <i class="bi bi-window fs-3"></i>
                                    </span>
                                    <span class="menu-title">Maintenance</span>
                                </a>
                            </div>
                            <!-- <div class="menu-item">
                                <a class="menu-link" href="../../demo13/dist/landing.html">
                                    <span class="menu-icon">
                                        <i class="bi bi-app-indicator fs-3"></i>
                                    </span>
                                    <span class="menu-title">Landing Page</span>
                                </a>
                            </div> -->
                            <?
                            if ($this->session->userdata('id_level') == 1) {
                                $masterdata = '';
                                $userdata = '';
                                $kondisidata = '';
                            } elseif ($this->session->userdata('id_level') == 2) {
                                $masterdata = '';
                                $userdata = 'style="display:none;"';
                                $kondisidata = 'style="display:none;"';
                            } else {
                                $masterdata = 'style="display:none;"';
                                $userdata = 'style="display:none;"';
                                $kondisidata = 'style="display:none;"';
                            }
                            ?>
                            <div class="menu-item" <?= $masterdata ?>>
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">MASTER DATA</span>
                                </div>
                            </div>
                            <div class="menu-item" <?= $masterdata ?>>
                                <a class="menu-link <?php if ($uri_2 == 'lantai') {
                                                        echo "active";
                                                    } ?>" href="<?= base_url('master/lantai') ?>">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <i class="bi bi-archive fs-3"></i>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Data Lantai</span>
                                </a>
                            </div>
                            <div class="menu-item" <?= $masterdata ?>>
                                <a class="menu-link <?php if ($uri_2 == 'lokasi' || $uri_2 == 'v_lokasisparepart') {
                                                        echo "active";
                                                    } ?>" href="<?= base_url('master/lokasi') ?>">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <i class="bi bi-archive fs-3"></i>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Data Lokasi</span>
                                </a>
                            </div>
                            <div class="menu-item" <?= $masterdata ?>>
                                <a class="menu-link <?php if ($uri_2 == 'barang') {
                                                        echo "active";
                                                    } ?>" href="<?= base_url('master/barang') ?>">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <i class="bi bi-archive fs-3"></i>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Data Barang</span>
                                </a>
                            </div>
                            <div class="menu-item" <?= $masterdata ?>>
                                <a class="menu-link <?php if ($uri_2 == 'sparepart') {
                                                        echo "active";
                                                    } ?>" href="<?= base_url('master/sparepart') ?>">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <i class="bi bi-archive fs-3"></i>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Data Sparepart</span>
                                </a>
                            </div>
                            <div class="menu-item" <?= $masterdata ?>>
                                <a class="menu-link <?php if ($uri_2 == 'master_tipebarang') {
                                                        echo "active";
                                                    } ?>" href="<?= base_url('master/master_tipebarang') ?>">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <i class="bi bi-archive fs-3"></i>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Data Tipe Barang</span>
                                </a>
                            </div>
                            <div class="menu-item" <?= $userdata ?>>
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">USER DATA</span>
                                </div>
                            </div>
                            <div class="menu-item" <?= $userdata ?>>
                                <a class="menu-link <?php if ($uri_2 == 'view_user') {
                                                        echo "active";
                                                    } ?>" href="<?= base_url('login/view_user') ?>">
                                    <span class="menu-icon">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                        <i class="bi bi-person fs-3"></i>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-title">Data User</span>
                                </a>
                            </div>

                            <div class="menu-item" <?= $userdata ?>>
                                <div class="menu-content">
                                    <div class="separator mx-1 my-4"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>