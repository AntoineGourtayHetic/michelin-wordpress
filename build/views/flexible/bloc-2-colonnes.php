<?php
$titre= get_sub_field('titre_bloc');
$bloc1= get_sub_field('bloc_1');
$bloc2= get_sub_field('bloc_2');
?>
<section class="row title-program">
  <h2><strong><?= $titre ?></strong></h2>
  <div class="modification__flex">
    <div class="col s12 m6">
      <p><?= $bloc1?></p>
    </div>
    <div class="col s12 m6">
      <p><?= $bloc2?></p>
    </div>
  </div>
</section>
