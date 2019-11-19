<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Kinds of Payment accepted Here</title>
</head>
<body class="bg-dark">
    <div class="container-fluid p-3 brand">
    </div>
    <div class="col-lg-12 m-0 p-0 row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4 m-0  p-0">
            <div class="card mt-lg-5">
                <div class="card-body">
                    <?= form_open('home/admin_login'); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="first" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="last" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="birthday" placeholder="Mobile Number">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="address" placeholder="Account Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="contact" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-info btn-block" name="submit" value="Signup for paid Amount">
                    </div>
                    <?= form_close(); ?>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</body>
</html>