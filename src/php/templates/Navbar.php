<?php

$clientIsLogged = $clientIsLogged ?? false;
$title          = $title          ?? 'Tranber';
$siteUrl        = $siteUrl        ?? '';

$signInUrl      = $siteUrl.'sign-in';
$signUpUrl      = $siteUrl.'sign-up';
$signOutUrl     = $siteUrl.'sign-out';

?><nav class="blk_Navbar">
	<div class="elm_Navbar_Title">
		<h1 class="atm_Title atm_Title-1 atm_Title-navbar">
			<a href="<?= $siteUrl ?>" class="atm_Link atm_Link-title atm_Link-navbar atm_Link-navbarTitle"><?= $title ?></a>
		</h1>
	</div>
	<div class="elm_Navbar_Menu">
		<ul class="blk_Menu blk_Menu-navbar">
<?php if ($clientIsLogged): ?>
			<li class="elm_Menu_Item elm_Menu_Item-navbar">
				<a href="<?= $signOutUrl ?>" class="atm_Link atm_Link-menu atm_Link-navbar atm_Link-navbarMenu">Sign out</a>
			</li>
<?php else: ?>
			<li class="elm_Menu_Item elm_Menu_Item-navbar">
				<a href="<?= $signInUrl ?>" class="atm_Link atm_Link-menu atm_Link-navbar atm_Link-navbarMenu">Sign in</a>
			</li>
			<li class="elm_Menu_Item elm_Menu_Item-navbar">
				<a href="<?= $signUpUrl ?>" class="atm_Link atm_Link-menu atm_Link-navbar atm_Link-navbarMenu">Sign up</a>
			</li>
<?php endif ?>
		</ul>
	</div>
</nav>