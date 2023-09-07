<?php 
// session_start();
date_default_timezone_set("asia/jakarta");
include_once("proses/koneksi.php");

 ?>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Profit /day</div>
                                <?php 
                                $date=date("Y-m-d");
                                    $qy=mysql_query("SELECT SUM(psn_total) as tot FROM tbl_pesan WHERE psn_tgl='$date'") or die (mysql_error());
                                    $arr=mysql_fetch_array($qy);
                                    extract($arr);
                                 ?>
                                <div class="stat-digit"><?php echo "Rp.".number_format($tot,0,',','.'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Customer</div>
                                 <?php 
                                    $qy2=mysql_query("SELECT * FROM tbl_customer") or die (mysql_error());
                                    $arr2=mysql_num_rows($qy2);
                                    // extract($arr2);
                                 ?>
                                <div class="stat-digit"><?php echo $arr2; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           