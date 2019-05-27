<?php

require_once ('./common/connexionBase.php');


$stmt = $connection->prepare("SELECT url_affiche, id FROM `film`");
$stmt->execute();
$lesUrls = $stmt->fetchall();

?>

<a href="#home" class="scrollToTop" id="myBtn"><i class="fas fa-arrow-up"></i></a>

<div class="container">
    <div class="row mt-5">


<?php

foreach($lesUrls as $url) {

?>


<div class="col-12 col-md-4 d-flex justify-content-center pb-4 "><?php echo '<a href="film.php?id='.$url["id"].'">'?><img src="<?php echo $url['url_affiche'];?>" alt="Image"></a></div>




<?php
}
?>

    </div>
</div>