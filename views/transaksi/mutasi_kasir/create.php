<?= $this->form->open_multipart(null, 'id="frm-create"') ?>
<?= $this->template->view('transaksi/mutasi_kasir/form') ?>
<div class="form-group">
    <button type="button" class="btn btn-success" onclick="store()">{{store}}</button> <button type="button" class="btn btn-default" onclick="cancel()">{{cancel}}</button>
</div>
<?= $this->form->close() ?>

<?php $this->load->view('transaksi/mutasi_kasir/form_script') ?>

<script>
    $(function() {
        $('#frm-create').buildForm();
    });
</script>