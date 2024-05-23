<?php $v->layout("_theme");?>

<div class="error">
  <h2>Ooooooops erro <?= $error; ?> </h2>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</div>

<?php $v->start("sidebar"); ?>
<a href="<?= url(); ?>" title="Voltar ao início">Voltar</a>
<?php $v->end("sidebar"); ?>