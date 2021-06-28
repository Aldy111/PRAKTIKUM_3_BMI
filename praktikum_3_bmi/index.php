<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=""  crossorigin="anonymous">
    <title>Form Pasien</title>
</head>
<body>
    <div class="container mt-2 w-25">
        <div class="btn btn-primary mt-5 text-center w-100 mb-4">
            <h3>cek bmi</h3>
        </div>
        <form action="admin.php" method="POST">
            <div class="form-group">
              <input type="text" class="form-control" id="nama" placeholder="Nama" name='nama'>
            </div>
            <div class="input-group my-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">kg</div>
                </div>
                <input type="number" class="form-control" id="berat" placeholder="Berat Badan" name='bb'>
            </div>
            <div class="input-group my-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">cm</div>
                </div>
                <input type="number" class="form-control" id="tinggi" placeholder="Tinggi Badan" name='tb'>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="umur" placeholder="Umur" name='umur'>
            </div>
            <fieldset class="form-group border p-2">
                <div class="row">
                    <legend class="col-form-label col-sm-6">Jenis Kelamin</legend>
                    <div class="col-sm-6" >
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Pria">
                            <label class="form-check-label" for="jk">
                                Pria
                            </label>
                        </div>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Wanita">
                            <label class="form-check-label" for="jk">
                                Wanita
                            </label>
                        </div>

                    </div>
                </div>
            </fieldset>

            <button class='btn btn-primary'>Simpan</button>
          </form>
    </div>
</body>
</html>