<style>
    label {
        margin-right: 20px;
    }

    .form-control {
        width: 90%;
    }

    .bi-search {
        font-size: 20px;
        font-weight: 900;
    }
</style>
<form action="" method="post">
    <div class="btn btn-primary" style=" float: right" name="search">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
        </svg></div>
    <input type="search" id="search-custom" class="form-control input-sm" name="cari" placeholder="Cari..." aria-controls="browse-data-table">
    <div id="search-check">
        <label for="kode">
            <input type="checkbox" value="0" name="kode" id="kode">
            <b>Kode</b>
        </label>
        <label for="barcode">
            <input type="checkbox" value="1" name="barcode" id="barcode">
            <b>Barcode</b>
        </label>
        <label for="produk">
            <input type="checkbox" value="2" name="produk" id="produk">
            <b>Produk</b>
        </label>
        <label for="rak">
            <input type="checkbox" value="3" name="rak" id="rak">
            <b>Rak</b>
        </label>
        <label for="jenis">
            <input type="checkbox" value="4" name="jenis" id="jenis">
            <b>Jenis</b>
        </label>
        <label for="kategori">
            <input type="checkbox" value="5" name="kategori" id="kategori">
            <b>Kategori</b>
        </label>
        <label for="kandungan">
            <input type="checkbox" value="6" name="kandungan" id="kandungan">
            <b>Kandungan</b>
        </label>
    </div>
</form>
<table id="browse-data-table" class="table table-bordered table-condensed ">
    <thead>
        <tr>
            <th>{{kode}}</th>
            <th>{{barcode}}</th>
            <th>{{produk}}</th>
            <th>{{rak}}</th>
            <th>{{jenis}}</th>
            <th>{{kategori}}</th>
            <th>{{kandungan}}</th>
            <th width="1">{{stok}}</th>
            <th width="1">{{harga}}</th>
        </tr>
    </thead>
</table>


<script>
    // Custom search
    const oTables = $("#browse-data-table").DataTable();
    const searchCustom = $("#search-custom");
    searchCustom.keyup(() => {
        let kolom = $(".kolom");
        $.each(kolom, (key, value) => {
            if (value.checked === true) {
                oTables.columns(value.value).search(searchCustom.va()).draw();
            }
        });
        oTables.search($(this).val()).draw();
    });

    // Data Tables
    var browseDataTable;
    $(function() {
        const oTables = $("#browse-data-table").DataTable();
        const searchCustom = $("#searchcustom")
        searchCustom.keyup(() => {
            let kolom = $(".kolom");
            $.each(kolom, (key, value) => {
                if (value.checked === true)
            })
            oTables.search($(this).val()).draw();
        });
        browseDataTable = $('#browse-data-table').DataTable({
            processing: true,
            serverSide: true,
            searchDelay: 1500,
            searching: true,
            ajax: '<?= $this->url_generator->current_url() ?>?load=1&tanggal_mutasi=<?= $tanggal_mutasi ?>',
            columns: [{
                    data: 'kode',
                    name: 'produk.kode'
                },
                {
                    data: 'barcode',
                    name: 'produk.barcode'
                },
                {
                    data: 'produk',
                    name: 'produk.produk'
                },
                {
                    data: 'rak',
                    name: 'rak_gudang.rak'
                },
                {
                    data: 'jenis',
                    name: 'produk.jenis'
                },
                {
                    data: 'kategori',
                    name: 'produk.kategori'
                },
                {
                    data: 'kandungan',
                    name: 'produk.kandungan'
                },
                {
                    data: 'stok',
                    searchable: false,
                    class: 'text-center nowrap'
                },
                {
                    data: 'harga',
                    searchable: false,
                    class: 'text-right nowrap'
                }
            ],
            select: true,
            rowCallback: function(row, data) {
                $(row).dblclick(function() {
                    if (typeof(browse_produk_on_dblclick_callback) == 'function') {
                        browse_produk_on_dblclick_callback(data);
                    }
                    bootbox.hideAll();
                });
            }
        });
    });
</script>