<body>
<?php include "layout/navbar.html"?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="mt-5" id="edit-produk-form">
                    <input type="hidden" name="produkId" id="produkId" value="<%= produk.id %>">
                    <div class="form-group">
                        <label for="title">Nama Produk</label>
                        <input type="text" value="" class="form-control" id="nama" name="nama"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="title">Jenis</label>
                        <input type="text" value="" class="form-control" id="jenis" name="jenis"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="title">harga</label>
                        <input type="text" value="" class="form-control" id="harga" name="harga"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="title">Deskripsi</label>
                        <input type="text" value="" class="form-control" id="harga" name="harga"
                            required>
                        
                            </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="submit" class="btn btn-primary float-right">save Edit</button>
                        </div>

                        <div class="btn-group" role="group" aria-label="Basic example">
                 <a href="production.php" class="btn btn-outline-success">Exit</a>
            </div>
                </form>
            </div>
        </div>
    </div>

</body>