<?php 
session_start();
require './config/bootstrap.php';

if ($_SESSION['user']['type_user'] != 'hrd') {
    header("Location: index.php");
} 


if (isset($_POST['submit'])) {
    Posting::create([
        'title'   => $_POST['title'],
        'content' => $_POST['content'],
        'id_user' => $_SESSION['user']['id_user']
    ]);

    header('Location: index.php');
}

include './template/header.php'; 
?>

<section class="hero" style="background:#f5f5f5;">
  <div class="hero-body" style="height:90vh">
  <form action="" method="POST">

  <div class="field">
  <label class="label">Judul Kerjaan</label>
  <div class="control">
    <input class="input" type="text" name="title" placeholder="Masukan Judul Kerjaan">
  </div>
</div>


<div class="field">
  <label class="label">Deskripsi Kerjaan</label>
  <div class="control">
    <textarea class="textarea" name="content" placeholder="Masukan Deskripsi Kerjaan"></textarea>
  </div>
</div>


<div class="field is-grouped">
  <div class="control">
    <input type="submit" name="submit" class="button is-link" value="Submit" />
  </div>
</div>

</form>

</div>
</section>
<?php include './template/footer.php'; ?>

