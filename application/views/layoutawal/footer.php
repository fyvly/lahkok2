<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
  <!--begin::Container-->
  <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
    <!--begin::Copyright-->
    <div class="text-dark order-2 order-md-1">
      <span class="text-muted fw-bold me-1">2022©</span>
      <a href="" target="_blank" class="text-gray-800 text-hover-primary">Fyvly</a>
    </div>

  </div>
  <!--end::Container-->
</div>
<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Root-->

<!--begin::Javascript-->
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="<?= base_url('puy/dist/') ?>assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url('puy/dist/') ?>assets/js/scripts.bundle.js"></script>
<script src="<?= base_url('puy/dist/') ?>assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="<?= base_url('puy/dist/') ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="<?= base_url('puy/dist/') ?>assets/js/custom/widgets.js"></script>
<script src="<?= base_url('puy/dist/') ?>assets/js/custom/apps/chat/chat.js"></script>
<script src="<?= base_url('puy/dist/') ?>assets/js/custom/modals/create-app.js"></script>
<script src="<?= base_url('puy/dist/') ?>assets/js/custom/modals/upgrade-plan.js"></script>
<!--end::Page Custom Javascript-->
<!--end::Javascript-->
<script>
  $("#kt_datatable_example_5").DataTable({
    "language": {
      "lengthMenu": "Show _MENU_",
    },
    "dom": "<'row'" +
      "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
      "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
      ">" +

      "<'table-responsive'tr>" +

      "<'row'" +
      "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
      "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
      ">"
  });
</script>
<script>
  $(function() {
    toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-full-width",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "200",
      "hideDuration": "300",
      "timeOut": "600",
      "extendedTimeOut": "600",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
    };
    <?php if ($this->session->flashdata('sukses')) { ?>
      toastr.success("<?php echo $this->session->flashdata('sukses'); ?>");
    <?php } ?>
    <?php if ($this->session->flashdata('danger')) { ?>
      toastr.error("<?php echo $this->session->flashdata('danger'); ?>");
    <?php } ?>
    <?php if ($this->session->flashdata('warning')) { ?>
      toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php } ?>
  });
</script>
</body>
<!--end::Body-->

</html>