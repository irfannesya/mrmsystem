<style>
    .container {
        width: 300px;
        margin: 0 auto;
        padding: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        text-align: center;
        margin-top: 10px;
    }

    .container h2 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .container input[type="text"],
    .container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .container input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-weight: bold;
    }

    .container input[type="submit"]:hover {
        background-color: #45a049;
    }

    .container p {
        margin-top: 10px;
        font-size: 14px;
    }

    .container a {
        text-decoration: none;
        color: #4CAF50;
    }

    .container a:hover {
        text-decoration: underline;
    }
</style>



<body>
<?php include "layout/navbar.html" ?>    

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="mt-5" id="create-produk-form">
                <div class="form-group">
                    <label for="title">Nama Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="title">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" required>
                </div>
                <div class="form-group">
                    <label for="title">harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" required>
                </div>
                <div class="form-group">
                    <label for="content">Deskripsi</label>
                    <input type="text" id="deskripsi" name="content"></textarea>
                </div>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </div>
            </form>
            <div class="btn-group" role="group" aria-label="Basic example">
                 <a href="production.php" class="btn btn-outline-success">Exit</a>
            </div>
        </div>
    </div>
</div>
</body>
