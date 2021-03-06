<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
    <link rel="stylesheet" href="stylesoal3.css">
</head>

<body>
    <?php
    $s = $sErr = "";
    $luas = $keliling = "";

    function Keliling($s)
    {
        $Keliling = 4 * $s;
        return $Keliling;
    }

    function luas($s)
    {
        $Luas =  $s * $s;
        return $Luas;
    }

    ?>

    <?php
    if (isset($_POST['hitung'])) {
        if (empty($_POST["s"])) {
            $sErr = "panjang tidak boleh kosong";
        } else {
            $s = $_POST["s"];
        }
        if ($s == "") {
            $kosong = "";
        } else {
            $keliling = keliling($_POST["s"]);
            $luas = luas($_POST["s"]);
        }
    }

    if (isset($_POST["kembali"])) {
        echo "<script>window.location = 'soal3.php'</script>";
    }
    ?>

    <nav>
        <div class="wrap">
            <div class="logo"><a href="../index.htm"><img class="x" src="../polinestext.png"></a></div>
            <div class="menu">
                <ul>
                    <li><a href="../index.htm#beranda">Soal 1</a></li>
                    <li><a href="../index.htm#soal2">Soal 2</a></li>
                    <li><a href="../index.htm#soal3">Soal 3</a></li>
                    <li><a href="../index.htm#soal4">Soal 4</a></li>
                    <li><a href="../kontak.htm">About Us</a></li>
                    <li><a href="../bukutamu.php">Buku Tamu</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <div class="container">
            <h2>Hitung Luas Dan Keliling</h2>
            <h2>PERSEGI</h2>
            <hr>
            </hr>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <table>
                    <tr>
                        <td>Sisi</td>
                        <td>(s)</td>
                        <td>:</td>
                        <td><input type="text" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="s" value="<?php echo $s; ?>"></td>
                        <td><span class="error">* <?php echo $sErr; ?></span><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <input class="button" type="submit" name="hitung" value="Hitung">
                            <input class="button" type="submit" name="kembali" value="Kembali">
                        </td>
                    </tr>
                </table>
                <h2 class="hasil">Hasil Perhitungan</h2>
                <div class="container1">
                    <div class="container2">
                        <h3>Luas Persegi</h3>
                        <p><?php echo round($luas, 2); ?> cm<sup>2</sup></p>
                    </div>
                    <div class="container2">
                        <h3>Keliling Persegi</h3>
                        <p><?php echo round($keliling, 2); ?> cm</p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>Kelompok<span>8</span></h3>
            <p class="footer-links">
                <a href="index.htm">Home</a>
                ??
                <a href="number 3.php">Buku Tamu</a>
                ??
                <a href="index2.htm">About</a>
                ??
                <a href="https://www.polines.ac.id/">Polines</a>
            </p>

            <p class="footer-company-name">Ashiappp &copy; 2019</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Jl. Prof. Sudarto, Tembalang</span> Semarang, Jawa Tengah</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>(024) 7473417</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">sekretariat@polines.ac.id</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About Polines</span>
                perguruan tinggi vokasi negeri yang terletak di areal kampus Universitas Diponegoro.
            </p>

        </div>

    </footer>


</body>

</html>