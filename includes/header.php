<?php
    include_once "includes/functions.php";

	$users_count = get_user_count();
	$links_count = get_links_count();
	$views_count = get_views_count();

	// http://localhost/goo
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<title><?php echo SITE_NAME; ?>
</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="<?php echo get_url();?>"><?php echo SITE_NAME; ?></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?php echo get_url(); ?>">Главная</a>
						</li>
						<?php if (isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id'])) { ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo get_url("profile.php");?>">Профиль</a>
						</li>
						<?php } ?>
					</ul>
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<?php if (isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id'])) { ?>
								<a href="<?php echo get_url("includes/logout.php");?>" class="btn btn-primary">Выйти</a>
							<?php } else { ?>
								<a href="<?php echo get_url("login.php"); ?>" class="btn btn-primary">Войти</a>
							<?php } ?>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
<?php