<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universitas D2D</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
    <header>
        <h2 class="center">Selamat Datang di Universitas D2D</h2>
    </header>
    <div class="row center">
        <div class="col s12">
            <div class="card" id="loginreg">
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab">
                            <a href="#login" class="active">LOGIN</a>
                        </li>
                        <li class="tab">
                            <a href="#register">REGISTER</a>
                        </li>
                    </ul>  
                </div>
                <div class="card-content">
                    <div id="login">
                        <div class="row center">
                            <form method="POST" action="proses-login.php" class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="username">Username*</label>
                                        <input type="text" name="username" class="validate" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="password">Password*</label>
                                        <input type="password" name="password" class="validate" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <a class="waves-effect waves-light btn"><input type="submit" value="submit" name="submit"></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php if(isset($_GET['status'])):?>
                            <p>
                                <?php
                                    if($_GET['status'] == 'sukses'){
                                        echo "Pendaftaran Mahasiswa baru berhasil";
                                    }else{
                                        echo "Pendaftaran gagal";
                                    }
                                ?>    
                            </p>
                        <?php endif; ?>
                    </div>
                    <div id="register">
                        <div class="row center">
                            <form action="proses-register" method="post" class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="username">Nama*</label>
                                        <input type="text" name="nama" class="validate" required>
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="username">Username*</label>
                                        <input type="text" name="username" class="validate" required>
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="password">Password*</label>
                                        <input type="password" name="password" class="validate" required>
                                    </div>
                                    <div class="input-field col s12">
                                        <label for="confirmpass">Ulangi Password*</label>
                                        <input type="password" name="confirmpass" class="validate" required>
                                    </div>
                                    <div class="input-field col s12">
                                        <a class="waves-effect waves-light btn"><input type="submit" value="submit" name="submit"></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>