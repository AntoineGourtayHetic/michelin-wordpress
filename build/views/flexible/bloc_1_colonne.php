<?php
$titre= get_sub_field('titre');
$bloc1= get_sub_field('bloc_texte');
?>
<section class="row title-program">
  <h2><strong><?= $titre ?></strong></h2>
  <div class="modification__flex">
    <div class="col s12">
      <p><?= $bloc1?></p>
    </div>
  </div>
</section>
