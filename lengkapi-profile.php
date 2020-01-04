<?php 
include './template/header.php';
require './config/bootstrap.php';

if (isset($_SESSION['user']['type_user'])) {
    header('Location: index.php');
} else if (isset($_POST['kirim'])) {
   $user = User::where('fb_id', $_SESSION['user']['fb_id']);
    User::where('fb_id', $_SESSION['user']['fb_id'])->update([
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'type_user' => $_POST['type_user']
    ]);

    $_SESSION['user'] = array(
        "nama_user" => $_SESSION['user']['nama_user'],
        "fb_id"     => $_SESSION['user']['fb_id'],
        "type_user" => $_POST['type_user'],
        "id_user"   => $user->id_user
    );

    header("Location: index.php");
}


?>

<section class="hero" style="background:#f5f5f5;">
  <div class="hero-body" style="height:90vh">

<h3>Harap Lengkapi Terlebih Dahulu</h3>
<form action="" method="POST">
<div class="field">
  <label class="label">Anda Mendaftar Kesini Menjadi ?</label>
  <div class="control">
    <div class="select">
      <select name="type_user">
        <option value="hrd">HRD</option>
        <option value="pelamar">Pelamar</option>
      </select>
    </div>
  </div>
</div>


<div class="field">
<label class="label">Jenis Kelamin Anda ?</label>
  <div class="control">
    <label class="radio">
      <input type="radio" value="pria" name="jenis_kelamin">
      Pria
    </label>
    <label class="radio">
      <input type="radio" value="wanita" name="jenis_kelamin">
      Wanita
    </label>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <input type="submit" value="Kirim" name="kirim" class="button is-link" />
  </div>

</div>
</form>
 
   
  </div>
</section>

<?php include './template/footer.php'; ?>

