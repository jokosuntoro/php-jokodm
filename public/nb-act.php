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

    <title>PHP Data Mining</title>
</head>

<body>
    <?php
    error_reporting(0);
    require '../vendor/autoload.php';

    use jokodm\Datamining\Dataset\Demo\PembelianKomputer;
    use jokodm\Datamining\Klasifikasi\NaiveBayes;

    $usia = $_POST['usia'];
    $pendapatan = $_POST['pendapatan'];
    $pelajar = $_POST['pelajar'];
    $kredit = $_POST['kredit'];

    $dataset = new PembelianKomputer();

    $klasifikasi = new NaiveBayes();
    $klasifikasi->train($dataset->getSamples(), $dataset->getTargets());

    $prediksi = $klasifikasi->predict([$usia, $pendapatan, $pelajar, $kredit]);

    if ($prediksi == 'beli') {
        $hasil = "<font color=blue>Beli Komputer</font>";
    } else {
        $hasil = "<font color=red>Tidak Beli Komputer</font>";
    }

    if ($usia == "" or $pendapatan == "" or $pelajar == "" or $kredit == "") {
        echo "<div class='container mt-3 text-center'>
        <p mb-2>Harap isi value pada atribut dengan lengkap</p>
        <a href='nb.php' class='btn btn-primary'>Kembali ke Index</a>
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
                    <td>Usia</td>
                    <td>$usia</td>
                </tr>
                <tr>
                    <td>Pendapatan</td>
                    <td>$pendapatan</td>
                </tr>
                <tr>
                    <td>Pelajar</td>
                    <td>$pelajar</td>
                </tr>
                <tr>
                    <td>Kredit</td>
                    <td>$kredit</td>
                </tr>
                <tr class=font-weight-bold>
                    <td>Hasil Prediksi</td>
                    <td>$hasil</td>
                </tr>
            </tbody>
        </table>
        <p text-center><a href='nb.php' class='btn btn-primary'>Kembali ke Index</a></p>
    </div>";
    }
    ?>

</body>

</html>