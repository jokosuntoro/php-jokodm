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
    <title>:: Fraud Detection ::</title>
</head>

<body>
    <div class="container">
        <h4 class="text-primary text-center mt-5">
            Sistem Cerdas Fraud Detection
        </h4>
        <form action="act-fraud.php" method="POST" class="form-horizontal">
            <fieldset>
                <div class="form-row mt-3">
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Jarak dari Rumah</label>
                        <input type="number" name="jarak_rumah" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Jarak dari Transaksi Terakhir</label>
                        <input type="number" name="jarak_transaksi" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Rasio Terhadap Harga Median Pembelian</label>
                        <input type="number" name="rasio_harga" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Apakah Pembelian Ulang?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pembelian_ulang" value="ya">
                            <label class=" form-check-label">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pembelian_ulang" value="tidak">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Apakah Menggunakan Chip?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="chip" value="ya">
                            <label class=" form-check-label">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="chip" value="tidak">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Apakah Memasukkan Nomor PIN?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pin" value="ya">
                            <label class=" form-check-label">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pin" value="tidak">
                            <label class="form-check-label">
                                Tidak
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label class="col-form-label">Apakah Pesanan Online?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pesanan_online" value="ya">
                            <label class=" form-check-label">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pesanan_online" value="tidak">
                            <label class="form-check-label">
                                Tidak
                            </label>
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