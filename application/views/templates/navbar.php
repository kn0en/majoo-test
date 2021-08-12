<header class="navbar navbar-expand-md navbar-dark bd-navbar">
  <nav class="container-xxl flex-wrap flex-md-nowrap" aria-label="Main navigation">
    <a class="navbar-brand p-0 me-2" href="<?= base_url('product'); ?>">
      <i class="fab fa-mastodon"></i>
      | Majoo Teknologi Indonesia
    </a>

    <div class="collapse navbar-collapse" id="bdNavbar">
       
      <?php if ($user == null) : ?>
        <a class="btn btn-bd-download d-lg-inline-block my-2 my-md-0 ms-md-3 text-white ms-md-auto" href="<?= base_url('auth'); ?>">Login</a>
      <?php else : ?>
        <a class="btn btn-bd-download d-lg-inline-block my-2 my-md-0 ms-md-3 text-white ms-md-auto" href="<?= base_url('admin'); ?>"><?= $user['fullname']; ?>  <img class="img-profile rounded-circle ml-1" style="width: 30px; height: 30px;" src="<?= base_url('assets/img/profile/') . $user['image']; ?>"></a>
       
      <?php endif; ?>

    </div>
  </nav>
</header>