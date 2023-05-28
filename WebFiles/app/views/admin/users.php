


<main id="main" class="main">

<div class="pagetitle">
  <h1><?php echo $sonuc["site_ismi"]; ?></h1>
  
</div><!-- End Page Title -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">İD</th>
      <th scope="col">Kullanıcı Adı</th>
      <th scope="col">Email</th>
      <th scope="col">Şifre</th>
      <th scope="col">Kayıt Tarihi</th>
    </tr>
  </thead>
  <tbody>
   
<?php 
               $yazılar = $db->prepare("SELECT * FROM users ORDER BY id desc");
               $yazılar->execute();
               $yazıcek = $yazılar->fetchAll(PDO::FETCH_ASSOC);
               $yazı_say = $yazılar->rowCount();

               if($yazı_say){
                foreach ($yazıcek as $row) {
               
?>
            <tr>
      <th scope="row"><?php echo $row["id"] ?></th>
      <td><?php echo $row["nickname"] ?></td>
      <td><?php echo $row["email"] ?></td>
      <td><?php echo $row["password"] ?></td>
      <td><?php echo $row["register_date"] ?></td>
    </tr>

            <?php
            }
        }
        ?>
          </tbody>
</table>

  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
          </div>


</main><!-- End #main -->
