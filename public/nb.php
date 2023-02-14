<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>:: Pembelian Komputer ::</title>
</head>

<body>
    <div class="container">
        <h4 class="text-primary text-center mt-5">
            Sistem Cerdas Prediksi Pembelian Komputer
        </h4>
        <form action="nb-act.php" method="POST" class="form-horizontal">
            <fieldset>
                <div class="form-row mt-3">
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Usia</label>
                        <div>
                            <select name="usia" class="form-control">
                                <option value="" selected>--Pilih Usia--</option>
                                <option value="muda">Muda</option>
                                <option value="tengah_baya">Tengah Baya</option>
                                <option value="tua">Tua</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Pendapatan</label>
                        <div>
                            <select name="pendapatan" class="form-control">
                                <option value="">--Pilih Pendapatan--</option>
                                <option value="muda">Rendah</option>
                                <option value="tengah_baya">Sedang</option>
                                <option value="tua">Tinggi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Pelajar</label>
                        <div>
                            <select name="pelajar" class="form-control">
                                <option value="" selected>--Apakah Pelajar?--</option>
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Kredit</label>
                        <div>
                            <select name="kredit" class="form-control">
                                <option value="">--Pilih -Status Kredit-</option>
                                <option value="lancar">Lancar</option>
                                <option value="macet">Macet</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-5">
                    <button type="submit" class="btn btn-primary btn-md mr-2">Proses</button>
                    <button type="reset" class="btn btn-danger btn-md">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>