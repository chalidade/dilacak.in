<div class="container">
  <table width="100%">
    <tr>
      <?php if ($session["USER_ROLE"] == "1"){ ?>
        <td style="vertical-align:middle"><h1 class="sub-title">Form Pemesanan</h1></td>
        <td>
          <button class="btn blue-light-bg text-light" data-toggle="modal" data-target="#addNew" style="font-size:12px;width:100%">+ New</button>
        </td>
      <?php } else { ?>
        <td style="vertical-align:middle"><h1 class="sub-title">List Pemasangan</h1></td>
      <?php }?>
    </tr>
  </table>
  <hr>
</div>
  <div class="main-background" style="background:#fff;border-top:solid thin #d4d4d4">
    <div class="row p-side-20">
      <table class="table" style="font-size:10px">
        <tr style="text-align:center">
          <th>NO</th>
          <th>NAMA</th>
          <?php if ($session["USER_ROLE"] == "1") { ?>
            <th>STATUS</th>
          <?php } else { ?>
            <th>TANGGAL</th>
          <?php } ?>
          <th>OPTION</th>
        </tr>
        <?php
          $userId = $session["USER_ID"];
          $no     = 1;
          $query  = mysqli_query($mysqli, "SELECT * FROM `tx_hdr_order` A LEFT JOIN `tm_reff` B ON A.`ORDER_STATUS` = B.`REFF_ID` WHERE `ORDER_STATUS` = '2' AND B.`REFF_TR_ID` = '1'");
          while($order = mysqli_fetch_array($query)) {
        ?>
        <tr style="text-align:center">
          <td><?php echo $no;$no++; ?></td>
          <td><?php echo $order["ORDER_NAME"]; ?></td>
          <!-- <td><?php //echo date('d/m/Y', strtotime($order["ORDER_DATE"])); ?></td> -->
          <td><?php echo $order["ORDER_PEMASANGAN"]; ?></td>
          <td style="text-align:center">
            <a data-toggle="modal" data-target="#view<?php echo $no; ?>">View</a>
            <div class="modal fade" id="view<?php echo $no; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align:left">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" class="sub-title text-center" style="font-size:14px;font-weight:600">Detail Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container" style="margin-bottom:20px">
                      <form class="" action="app/controller/main.php?id=orderForm" method="post">
                        <label for="tanggal" style="width:100%">
                          <b>Nama</b>
                          <input type="text" class="form-control" placeholder="Chalid Ade Rahman" value="<?php echo $order["ORDER_NAME"]; ?>" name="ORDER_NAME" style="font-size:12px;margin-top:5px">
                         </label>
                        <label for="tanggal" style="width:100%">
                          <b>Nomor Telpon</b>
                          <input type="text" class="form-control" placeholder="085784566522" value="<?php echo $order["ORDER_PHONE"]; ?>" name="ORDER_PHONE" style="font-size:12px;margin-top:5px">
                        </label>
                        <label for="tanggal" style="width:100%">
                          <b>Pekerjaan</b>
                          <input type="text" class="form-control" placeholder="Pegawai Swasta" value="<?php echo $order["ORDER_PEKERJAAN"]; ?>" name="ORDER_PEKERJAAN" style="font-size:12px;margin-top:5px">
                        </label>
                        <label for="tanggal" style="width:100%">
                          <b>Tanggal Pemasangan</b>
                          <input type="date" class="form-control" value="<?php echo $order["ORDER_PEMASANGAN"]; ?>" name="ORDER_PEMASANGAN" style="font-size:12px;margin-top:5px">
                        </label>
                        <table style="width:100%">
                          <tr>
                            <td>
                              <label for="tanggal" style="width:100%">
                                <b>DP</b>
                                <input type="text" class="form-control" placeholder="1000000" value="<?php echo $order["ORDER_PAYMENT"]; ?>" name="ORDER_PAYMENT" style="font-size:12px;margin-top:5px">
                              </label>
                            </td>
                            <td>
                              <label for="tanggal" style="width:100%">
                                <b>Total Pemasangan</b>
                                <input type="text" class="form-control" placeholder="5" value="<?php echo $order["ORDER_TOTAL"]; ?>" name="ORDER_TOTAL" style="font-size:12px;margin-top:5px">
                                <input type="hidden" value="<?php echo $order["ORDER_USER"]; ?>" name="ORDER_USER" value="<?php $session["USER_ID"]; ?>">
                              </label>
                            </td>
                          </tr>
                        </table>
                        <label for="tanggal" style="width:100%">
                          <b>List Kendaraan</b>
                          <textarea class="form-control" placeholder="1. Motor | No KTP | No KK" name="ORDER_LIST_VEHICLES" style="font-size:12px;margin-top:5px;height:80px"><?php echo $order["ORDER_LIST_VEHICLES"]; ?></textarea>
                        </label>
                        <label for="tanggal" style="width:100%">
                          <b>Alamat</b>
                          <textarea class="form-control" placeholder="Dsn Ngelawang Watukosek, Gempol, Pasuruan" name="ORDER_ADDRESS" style="font-size:12px;margin-top:5px;height:50px"><?php echo $order["ORDER_ADDRESS"]; ?></textarea>
                        </label>
                      </form>
                      <hr>
                      <form action="app/controller/main.php?id=updateTenisi" method="post">
                        <input type="hidden" name="ORDER_TEKNISI" value="<?php echo $session["USER_ID"]; ?>">
                        <input type="hidden" name="ORDER_ID" value="<?php echo $order["ORDER_ID"]; ?>">
                        <input type="submit" class="btn btn-success" value="Done" style="width:100%">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
        <?php } ?>
        <tr>
          <td colspan="4">Total : <?php echo $no-1; ?></td>
        </tr>
      </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" class="sub-title text-center" style="font-size:14px;font-weight:600">Add New Device</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container" style="margin-bottom:20px">
          <form class="" action="app/controller/main.php?id=orderForm" method="post">
            <h2 style="font-size: 18px;">Informasi Klien</h2>
            <hr>
            <label for="tanggal" style="width:100%">
              <b>Nama</b>
              <input type="text" class="form-control" placeholder="Chalid Ade Rahman" name="ORDER_NAME" style="font-size:12px;margin-top:5px">
             </label>
            <label for="tanggal" style="width:100%">
              <b>Nomor Telpon</b>
              <input type="text" class="form-control" placeholder="085784566522" name="ORDER_PHONE" style="font-size:12px;margin-top:5px">
            </label>
            <label for="tanggal" style="width:100%">
              <b>Pekerjaan</b>
              <input type="text" class="form-control" placeholder="Pegawai Swasta" name="ORDER_PEKERJAAN" style="font-size:12px;margin-top:5px">
            </label>
            <label for="tanggal" style="width:100%">
              <b>Tanggal Pemasangan</b>
              <input type="date" class="form-control" name="ORDER_PEMASANGAN" style="font-size:12px;margin-top:5px">
            </label>
            <table style="width:100%">
              <tr>
                <td>
                  <label for="tanggal" style="width:100%">
                    <b>DP</b>
                    <input type="text" class="form-control" placeholder="1000000" name="ORDER_PAYMENT" style="font-size:12px;margin-top:5px">
                  </label>
                </td>
                <td>
                  <label for="tanggal" style="width:100%">
                    <b>Total Pemasangan</b>
                    <input type="text" class="form-control" placeholder="5" name="ORDER_TOTAL" style="font-size:12px;margin-top:5px">
                    <input type="hidden" name="ORDER_USER" value="<?php echo $session["USER_ID"]; ?>">
                  </label>
                </td>
              </tr>
            </table>
            <label for="tanggal" style="width:100%">
              <b>List Kendaraan</b>
              <textarea class="form-control" placeholder="1. Motor | No KTP | No KK" name="ORDER_LIST_VEHICLES" style="font-size:12px;margin-top:5px;height:80px"></textarea>
            </label>
            <label for="tanggal" style="width:100%">
              <b>Alamat</b>
              <textarea class="form-control" placeholder="Dsn Ngelawang Watukosek, Gempol, Pasuruan" name="ORDER_ADDRESS" style="font-size:12px;margin-top:5px;height:50px"></textarea>
            </label>
            <input type="submit" class="btn blue-light-bg text-light" value="Kirim Laporan" style="font-size:12px;width:100%;margin-top:10px">
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn pink-bg text-light" style="font-size:12px">Save</button>
      </div>
    </div>
  </div>
</div>
