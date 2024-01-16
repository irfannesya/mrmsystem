<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>login</title>
</head>

<body>
<?php include "layout/navbar.html"  ?>

<main>
    <div class="row">
        <div class="col-md-12">
            <form id="form-login" action="/login" method="post" class="mt-5">

                <div class="mb-3">
                    <label for="formEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="formEmail" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="formPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="formPassword"
                        placeholder="Password anda">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary float-right">Masuk</button>
                    <div class="btn-group" role="group" aria-label="Basic example">
                 <a href="index.php" class="btn btn-outline-success">Exit</a>
            </div>
                    
                </div>
            </form>
        </div>
    </div>
</main>

</body>

</html>