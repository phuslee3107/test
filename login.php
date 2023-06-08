<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- nhung thu vien css boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <form action="login_handle.php" method="post">
                    <div class="form-group">
                        <label for="">username</label>
                        <input type="text" class="form-control" name="empID" id="empID" value="E01" required>
                    </div>
                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" class="form-control" name="password" id="password" value="123" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-danger" name="submit">Submit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>