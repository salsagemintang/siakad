<div class="page">
    <div class="page-content">
        <style type="text/css">
            .page-content {
                background: linear-gradient(#1f3d7a, #e6eeff);
                background-repeat: repeat-x;
            }
        </style>
        <div class="row">
            <div class="box">
                <div class="panel-body">
                    <div class="col-md-12 w3ls-graph">
                        <!--agileinfo-grap-->
                        <div class="agileinfo-grap">
                            <div class="agileits-box">

                                <style type="text/css">
                                    .agileits-box {
                                        text-align: center;
                                        padding: 2em;

                                        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.50), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                                        background: #001a33;
                                        color: #99ccff;
                                        border-radius: 25px;
                                        margin-left: 300px;
                                        border: 8px ridge white;

                                    }

                                    h2 {
                                        color: white;
                                    }

                                    h3 {
                                        color: #99ccff;
                                    }
                                </style>
                                <center>

                                    <div><i class="icon wb-user " style="font-size: 30px"></i>
                                        <br>
                                        <h2><?php echo $dashboard->MESSAGE->NAMA_MAHASISWA ?></h2>
                                        <span><?php echo $dashboard->MESSAGE->NIM ?></span>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <!--//agileinfo-grap-->

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="box3">
            <div class="agile-last-grids">
                <style type="text/css">
                    .area-grids-heading {
                        padding: 1em;

                        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                        background-color: #001a33;
                        color: white;
                        border-radius: 25px;
                        margin-bottom: 50px;
                        border: 8px ridge white;
                    }


                    .box3 {
                        display: flex;
                        justify-content: center;
                    }
                </style>
                <div class="col-md-12 agile-last-left">
                    <div class="agile-last-grid">
                        <center>
                            <div class="area-grids-heading">
                                <h2>PROGRAM STUDI</h2>
                                <h3><?php echo $dashboard->MESSAGE->PROGRAM_STUDI ?></h3>
                            </div>
                    </div>
                    </center>
                </div>
            </div>

            <div class="col-md-4 agile-last-left agile-last-middle">
                <div class="agile-last-grid">
                    <center>
                        <div class="area-grids-heading">
                            <h2>MASA</h2>

                            <h3><?php echo $dashboard->MESSAGE->MASA ?></h3>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-4 agile-last-left agile-last-right">
                <div class="agile-last-grid">
                    <center>
                        <div class="area-grids-heading">
                            <h2>TAHUN AJARAN</h2>

                            <h3><?php echo $dashboard->MESSAGE->TAHUN_SEMESTER ?></h3>
                        </div>
                    </center>

                </div>
            </div>
        </div>
    </div>
    <!-- //calendar -->


    <!-- / footer -->
    </section>
    <!--main content end-->
    </section>