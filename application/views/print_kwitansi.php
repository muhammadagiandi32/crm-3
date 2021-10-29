<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

    <!-- <div class="box" id="printJS-table"> -->


    <title>Document</title>
</head>

<body>
    <div class="box" id="printJS-table">
        <style>
            @page {
                size: auto;
                /* auto is the initial value */
                margin: 0px 8px 0px 5px;
                /* this affects the margin in the printer settings */
            }

            #printJS-table {
                margin-left: 10px;
                margin-top: 30px;
                margin-left: 20px;
                width: 900px;
                height: 465px;
                border: 3px black solid;
            }

            /* @media print {
                



                @page {
                    width: 210mm;
                    height: 148.5mm;
                    margin: 0px auto;

                }
            } */

            #foto {
                margin-left: -20px;
                margin-right: -90px;
                margin-top: -20px;
                margin-bottom: 40px;

                border-right: 3px solid black;
                height: 460px;
                width: 200px;
                padding: auto;
                float: left;
            }


            body {
                font-size: 20px;
            }

            #penutup {
                /* border-bottom:1px solid black; */
                margin: -30px 10px 30px 40px;
                padding: 3px 0px 0px 0px;
                /* background:red; */
            }

            #margin {
                margin: auto;
                padding: auto;
            }


            .margin {
                /* margin-left: 30px; */
                margin-top: 20px;
                float: left;
                width: 650px;
                /* background:blue; */
            }

            #foto img {
                margin-top: 20px;
                margin-left: 10px;
                height: 450px;
            }

            #foto {
                margin-left: -20px;
                margin-right: -90px;
                margin-top: -20px;
                margin-bottom: 0px;

                border-right: 3px solid black;
                height: 510px;
                width: 200px;
                padding: auto;
                float: left;
            }

            #jumlah {
                /* background:yellow; */
                font: 28px bold;
                width: 250px;
                height: 47px;
                margin-left: 40px;
                margin-top: 250px;
                padding: 5px 0px 5px 0px;
                border-top: 3px solid black;
                border-bottom: 3px solid black;
            }

            #tanggal {
                /* background:red; */
                width: 220px;
                height: 35px;
                margin-left: 500px;
                margin-top: -140px;
                padding: 4px 0px 4px 30px;
            }

            #tanggal1 {
                /* background:red; */
                width: 220px;
                height: 35px;
                margin-left: 600px;
                margin-top: 70px;
                padding: 4px 0px 4px 30px;
                text-decoration: underline;
            }

            #tanggal2 {
                /* background:red; */
                width: 220px;
                height: 35px;
                margin-left: 620px;
                /* margin-top: 5px; */
                padding: 0px 0px 4px 20px;
                /* text-decoration: underline; */
            }

            #garisbawah {
                /* border-left: 6px; */
                border-bottom: 2px solid black;
                /* font-weight: bold; */
                width: 800px;
                margin-bottom: 5px;
            }

            #csm {
                font-weight: bold;
                width: 200px;
            }

            /* #csn {
                
            } */

            #ket {
                /* background:red; */
                padding: 4px 0px 0px 30px;
                /* height:10px; */
                font: 10px;
            }

            .keterangan {
                margin-right: 100px;
                margin-left: 0px;
                margin-top: 150px;
                margin-bottom: 30px;

            }

            .back {
                background-color: yellow;
                border-bottom: 3px solid black;

            }

            .head1 {
                margin-left: 380px;
                font-size: 30px;
                margin-top: -70px;
            }

            .head2 {
                margin-left: 380px;
                font-size: 20px;
                text-decoration: underline;
            }

            /* #garisbawah1 {} */

            .images {
                width: 75px;
                height: 75px;
                /* margin-top: 20px; */
                margin-left: 200px;

            }

            /* #agi{
            font-size:11px;
        } */
        </style>
        <div>
            <div class="back">
                <img src="" alt="">

                <?php
                if ($query->satuan == 'HALAL') {
                    echo '<img class="images" src="' . base_url("img/sudijaya1.png") . '"alt="">';
                    echo '<p class="head1">SUDIJAYA</p>';
                } else {
                    echo '<img class="images" src="' . base_url("img/rusmanjaya1.png") . '"alt="">';
                    echo '<p class="head1">RUSMANJAYA</p>';
                }
                ?>

                <?php
                ?>
            </div>
            <div>
                <p class="head2">KWITANSI</p>
            </div>
            <div class="margin">
                <div id="penutup">
                    <div id="garisbawah1">No. <?= $query->no_invoice ?></div>
                </div>
                <div id="penutup">
                    <div id="garisbawah">Telah Terima Dari: <?= $query->nama_customers ?></div>
                    <div></div>
                </div>
                <div id="penutup">
                    <div id="garisbawah">Uang Sejumlah: <?= $angka ?></div>
                </div>
                <div id="penutup">
                    <div id="garisbawah">Untuk Pembayaran: UD.RUSMANJAYA KEPADA <?= $query->nama_customers ?>
                    </div>
                    <div id="garisbawah">PERTANGGAL <?= $query->date ?> YANG AKAN DI BAYARKAN KE REKENING</div>
                    <div id="garisbawah">
                        BCA. 2770567583 A/N GEDE WIJAYA KUSUMA
                    </div>
                    <!-- <div>Inv. </div> -->
                </div>
                <div class="garisvertical"></div>
            </div>
        </div>
        <div id="jumlah">Rp. <?= number_format($query->harga) ?></div>

        <div id="tanggal">Jakarta, <?= $query->date ?></div>
        <div id="tanggal1">(RUSMAJAYA)</div>
        <div id="tanggal2">DIREKTUR</div>


        <!-- <div class="keterangan"><small id="ket">Ket: 1)Whith:Customer &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                2)Red:Accounting &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;3)Yellow:Sales ADM &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp;4)Green: Finance</small>
        </div> -->
        <br>
    </div>
    <button type="button" id="btn">
        Print Form
    </button>
    <script>
        $(" #btn").click(function() {
            $(".box").show();
            window.print();
        });
    </script>
</body>

</html>