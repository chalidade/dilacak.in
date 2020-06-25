<div class="container">
  <h1 class="sub-title">Form Pemesanan</h1>
  <hr>
</div>
  <div class="main-background" style="background:#fff;border-top:solid thin #d4d4d4">
    <div class="row p-side-20">
      <table width="100%">
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
                  <input type="hidden" name="ORDER_USER" value="<?php $session["USER_ID"]; ?>">

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
      </table>
    </div>
</div>
