<?php include './template/header.php'; ?>
<section class="hero" style="background:#f5f5f5;">
  <div class="hero-body" style="height:90vh">

    <div class="columns is-centered" style="margin-top:8%">
    <div class="column is-6">
        <center>
            <figure class="image is-128x128">
                <img src="<?= BASEPATH ?>/assets/img/electrician.png" />
            </figure>
        </center>
    </div>
    </div>

<div class="columns is-centered" >
<div class="column is-6">
  <div class="control has-icons-left has-icons-right">
  <input class="input is-medium" type="text" placeholder="Cari Pekerjaan Disekitar Anda" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);color:black;text-align:center" />
  <span class="icon is-small is-left">
    <i class="fas fa-search"></i>
  </span>
  </div>
</div>
</div>

<div class="columns is-centered" >
    <div class="column is-6">
        <center>
           <p id="ketik"> </p>
        </center>
    </div>
    </div>

 
   
  </div>
</section>

<?php include './template/footer.php'; ?>