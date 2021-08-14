<header>
	<nav class="navbar navbar-expand-md navbar-light bg-gradient-success">
		<a href="<?= base_url('product'); ?>" class="navbar-brand text-white">
			<i class="fab fa-mastodon" height="28"></i> | Majoo Teknologi Indonesia
		</a>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ml-auto">
				<?php if ($user == null) : ?>
					<a class="nav-item nav-link text-white" href="<?= base_url('auth'); ?>">Login</a>
				<?php else : ?>
					<a class="nav-item nav-link text-white" href="<?= base_url('admin'); ?>"><?= $user['fullname']; ?> <img class="img-profile rounded-circle ml-1" style="width: 30px; height: 30px;" src="<?= base_url('assets/img/profile/') . $user['image']; ?>"></a>
				<?php endif; ?>
			</div>
		</div>
	</nav>
</header>
