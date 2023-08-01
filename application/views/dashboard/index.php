<style>
    .responsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
    }
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="" style="width: 100%;">
            <div class="card">

                <div class="card-body p-0">
                    <form action="" method="POST">
                        <br>

                        <div class="row">
                            <div class="col-sm-1">&nbsp;</div>
                            <div class="col-sm-9">
                                <select name="pilih_lantai" class="select form-control" data-control="select2" id="" data-placeholder="Pilih Lantai..">
                                    <option value="">Pilih Lantai..</option>
                                    <?php foreach ($list as $lantai) { ?>
                                        <option value="<?= $lantai->id_lantai ?>" <?php if ($_POST) {
                                                                                        if ($lantai->id_lantai == $_POST['pilih_lantai']) {
                                                                                            echo "selected";
                                                                                        }
                                                                                    } ?>> <?= $lantai->nama_lantai ?></option>
                                    <?php } ?>
                                </select>

                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success">Tampilkan</button>
                            </div>

                        </div>
                    </form>
                    <br><br><br>
                    <?php if ($_POST) {
                        $id_lantainya = $_POST['pilih_lantai'];
                    ?>
                        <div class="card-p mt-n20 position-relative responsive-iframe">
                            <div class="row g-0">
                                <iframe src="<?= base_url('dashboard/spots/') . $id_lantainya ?>" frameborder="0" style="height:100%;width:100%;height:100vh;"></iframe>
                            </div>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
</div>