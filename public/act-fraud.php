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

    <title>Hasil Prediksi</title>
</head>

<body>
    <?php
    error_reporting(0);
    require '../vendor/autoload.php';

    use jokodm\Datamining\Dataset\Demo\FraudDetection;
    use jokodm\Datamining\Klasifikasi\DecisionTree;

    $jarak_rumah = $_POST['jarak_rumah'];
    $jarak_transaksi = $_POST['jarak_transaksi'];
    $rasio_harga_median_pembelian = $_POST['rasio_harga_median_pembelian'];
    $pembelian_ulang = $_POST['pembelian_ulang'];
    $chip = $_POST['chip'];
    $pin = $_POST['pin'];
    $pesanan_online = $_POST['pesanan_online'];


    $dataset = new FraudDetection();

    $klasifikasi = new DecisionTree();
    $klasifikasi->train($dataset->getSamples(), $dataset->getTargets());

    $prediksi = $klasifikasi->predict([$jarak_rumah, $jarak_transaksi, $rasio_harga_median_pembelian, $pembelian_ulang, $chip, $pin, $pesanan_online]);

    if ($prediksi == 'ya') {
        $hasil = "<font color=red>Indikasi Penyalahgunaan Akun</font>";
    } else {
        $hasil = "<font color=green>Akun Anda Aman</font>";
    }

    if ($jarak_rumah == "" or $jarak_transaksi == "" or $rasio_harga_median_pembelian == "" or $pembelian_ulang == "" or $chip == "" or $pin == "" or $pesanan_online == "") {
        echo "<div class='container mt-3 text-center'>
        <p mb-2>Harap isi value pada atribut dengan lengkap</p>
        <a href='form-fraud.php' class='btn btn-primary'>Kembali ke Index</a>
        </div>";
    } else {
        echo "<div class='container mt-3'>
        <table class=table table-striped table-bordered>
            <thead>
                <tr>
                    <th scope=col>Atribut</th>
                    <th scope=col>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jarak Rumah</td>
                    <td>$jarak_rumah</td>
                </tr>
                <tr>
                    <td>Jarak Transaksi Terakhir</td>
                    <td>$jarak_transaksi</td>
                </tr>
                <tr>
                    <td>Rasio Harga Pembelian Terakhir</td>
                    <td>$rasio_harga_median_pembelian</td>
                </tr>
                <tr>
                    <td>Pembelian Ulang</td>
                    <td>$pembelian_ulang</td>
                </tr>
                <tr>
                    <td>Chip yang Digunakan</td>
                    <td>$chip</td>
                </tr>
                <tr>
                    <td>PIN yang Digunakan</td>
                    <td>$pin</td>
                </tr>
                <tr>
                    <td>Pesanan Online</td>
                    <td>$pesanan_online</td>
                </tr>
                <tr class=font-weight-bold>
                    <td>Hasil Prediksi</td>
                    <td>$hasil</td>
                </tr>
            </tbody>
        </table>
        <p text-center><a href='form-fraud.php' class='btn btn-primary'>Kembali ke Index</a></p>
    </div>";
    }
    ?>

</body>

</html>