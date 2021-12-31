<?php 

include 'header.php';


?>



<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">


    </div>

    <div class="col-md-12">
      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

          <form action="" method="POST">
            <div class="input-group">
              <input type="text" class="form-control" name="aranan" placeholder="Anahtar Kelime Giriniz...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="arama">Ara!</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
             <div align="left" class="col-md-6">
              <h2 >Çalışma Alanı İşlemleri <small>
                <?php
               // echo $say." kayıt listelendi."; echo " Bu modül fonksiyoneldir. <b>alan / İş Ortağı / Portfolyo olarak kullanılabilir.</b>";
                if ($_GET['durum']=='ok') {?> 
                
                <b style="color:green;">İşlem başarılı...</b>

                <?php } elseif ($_GET['durum']=='no')  {?>

                <b style="color:red;">İşlem Başarısız...</b>

                <?php } ?></small></h2><br>
              </div>
              <div align="right" class="col-md-6">
                <a href="alan-ekle.php"><button  class="btn btn-danger "><i class="fa fa-plus" aria-hidden="true"></i> Yeni Ekle</button></a>
              </div>
              <div class="clearfix"></div>
            </div>


            <div class="x_content">
              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                    	<th class="column-title ">Alan ID </th>
                      <th class="column-title ">Alan Ad </th>
                      <th class="column-title text-center">Alan Kısa Açıklama </th>
                      <th width="80" class="column-title"></th>
                      <th width="80" class="column-title"></th>


                    </tr>
                  </thead>

                  <tbody>

                    <?php



                $sayfada = 10; // sayfada gösterilecek içerik miktarını belirtiyoruz.


                $sorgu=$db->prepare("select * from alan");
                $sorgu->execute();
                $toplam_icerik=$sorgu->rowCount();

                $toplam_sayfa = ceil($toplam_icerik / $sayfada);

                  // eğer sayfa girilmemişse 1 varsayalım.
                $sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;

          // eğer 1'den küçük bir sayfa sayısı girildiyse 1 yapalım.
                if($sayfa < 1) $sayfa = 1; 

        // toplam sayfa sayımızdan fazla yazılırsa en son sayfayı varsayalım.
                if($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa; 

                $limit = ($sayfa - 1) * $sayfada;


                if(isset($_POST['arama'])) {

                  $aranan=$_POST['aranan'];

                  $alansor=$db->prepare("select * from alan where alan_ad LIKE '%$aranan%' order by alan_id ASC limit $limit,$sayfada");
                  $alansor->execute();
                  $say=$alansor->rowCount();


                } else {


                 $alansor=$db->prepare("select * from alan order by alan_id ASC limit $limit,$sayfada");
                 $alansor->execute();
                 $say=$alansor->rowCount();


               }



               while($alancek=$alansor->fetch(PDO::FETCH_ASSOC)) {
                ?>


                <tr>

               <td><?php echo $alancek['alan_id']; ?></td>
                  <td ><?php echo $alancek['alan_ad']; ?></td>
                  <td class="text-center"><?php echo $alancek['alan_kisa']; ?></td>

                  <td class="text-center"><a href="alan-duzenle.php?alan_id=<?php echo $alancek['alan_id']; ?>"><button style="width:80px;" class="btn btn-primary btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Düzenle</button></a></td>

                  <td class="text-center"><a href="../netting/islem.php?alansil=ok&alan_id=<?php echo $alancek['alan_id']; ?>"><button style="width:80px;" class="btn btn-danger btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i> Sil</button></a></td>

                </tr>

                <?php } ?>

              </tbody>
            </table>

            <div align="right" class="col-md-12">
            <ul class="pagination">

              <?php

              $s=0;

              while ($s < $toplam_sayfa) {

                $s++; ?>

                <?php 

                if ($s==$sayfa) {?>

                <li class="active">

                  <a href="alan.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                </li>

                <?php } else {?>


                <li>

                  <a href="alan.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a>

                </li>
                
                <?php   }

              }

              ?>

            </ul>
          </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>
</div>
</div>
<!-- /page content -->



<?php include 'footer.php'; ?>
