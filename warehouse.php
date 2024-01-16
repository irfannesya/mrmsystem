

<body>

<?php include "layout/navbar.html" ?>

    <div class="container" id="daftar-produk">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                    <tr>

                        <td>
                            <%= data.nama %>
                        </td>
                        <td>
                            <%= data.jenis%>
                        </td>
                        <td>
                            <%= data.harga %>
                        </td>
                        <td>
                            <%= data.deskripsi %>
                        </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button id="<%= data.id %>" class="btn btn-info btn-sm edit-produk">Aprove</button>
                                <button id="<%= data.id %>" class="btn btn-info btn-sm edit-produk">Edit</button>
                                <button type="button" class="btn btn-danger" id="deleteProduk"
                                    onclick="deleteProduk('<%= data.id %>')">Reject</button>
                        </td>
                    </tr>
                    <div class="btn-group" role="group" aria-label="Basic example">
                 <a href="production.php" class="btn btn-outline-success">Exit</a>
            </div>
            </tbody>
        </table>
    </div>
    
</body>