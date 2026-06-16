<?php
http_response_code(404);
require_once __DIR__ . '/puddin.php';

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$lang = 'ru';
if (preg_match('~^/(en|tr|uz)(?:/|$)~i', $path, $m)) {
    $lang = strtolower($m[1]);
}

$pages = [
  'ru' => [
    'html_lang' => 'ru',
    'title' => '404 - Страница не найдена | Cactus',
    'description' => 'Страница не найдена. Вернитесь на главную страницу Cactus.',
    'eyebrow' => 'Ошибка 404',
    'h1' => 'Страница не найдена',
    'text' => 'Запрошенная страница не существует, была удалена или адрес введён неверно.',
    'button' => 'На главную',
    'home' => '/',
  ],
  'en' => [
    'html_lang' => 'en',
    'title' => '404 - Page Not Found | Cactus',
    'description' => 'Page not found. Return to the Cactus home page.',
    'eyebrow' => 'Error 404',
    'h1' => 'Page not found',
    'text' => 'The requested page does not exist, was removed, or the address was typed incorrectly.',
    'button' => 'Back to home',
    'home' => '/en',
  ],
  'tr' => [
    'html_lang' => 'tr',
    'title' => '404 - Sayfa Bulunamadı | Cactus',
    'description' => 'Sayfa bulunamadı. Cactus ana sayfasına geri dönün.',
    'eyebrow' => 'Hata 404',
    'h1' => 'Sayfa bulunamadı',
    'text' => 'İstenen sayfa mevcut değil, kaldırılmış olabilir veya adres hatalı yazılmış olabilir.',
    'button' => 'Ana sayfaya dön',
    'home' => '/tr',
  ],
  'uz' => [
    'html_lang' => 'uz',
    'title' => '404 - Sahifa topilmadi | Cactus',
    'description' => 'Sahifa topilmadi. Cactus bosh sahifasiga qayting.',
    'eyebrow' => 'Xato 404',
    'h1' => 'Sahifa topilmadi',
    'text' => 'Soʻralgan sahifa mavjud emas, oʻchirilgan yoki manzil notoʻgʻri kiritilgan.',
    'button' => 'Bosh sahifaga qaytish',
    'home' => '/uz',
  ]
];
$t = $pages[$lang] ?? $pages['ru'];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($t['html_lang'], ENT_QUOTES, 'UTF-8') ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-language" content="<?= htmlspecialchars($t['html_lang'], ENT_QUOTES, 'UTF-8') ?>">
  <title><?= htmlspecialchars($t['title'], ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="description" content="<?= htmlspecialchars($t['description'], ENT_QUOTES, 'UTF-8') ?>">
  <meta name="robots" content="noindex, follow">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Cactus">
  <meta property="og:title" content="<?= htmlspecialchars($t['title'], ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($t['description'], ENT_QUOTES, 'UTF-8') ?>">
  <meta property="og:image" content="https://cactus-hub.ru/og-image.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($t['title'], ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($t['description'], ENT_QUOTES, 'UTF-8') ?>">
  <meta name="twitter:image" content="https://cactus-hub.ru/og-image.jpg">
  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" type="image/svg+xml" href="/favicon.svg">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <meta name="theme-color" content="#161c24">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="preload" as="image" href="/imgs/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/main.css?v=9">
  <style>:root{--color-black:#000;--color-white:#FFF;--color-blue-1:#09031f;--color-blue-2:#160f3b;--color-blue-3:#2f205e;--color-blue-4:#433277;--color-orange:#fb4d00;--color-green-opacity:rgba(34, 200, 101, 0.18);--color-red-opacity:rgba(227, 42, 42, 0.18);--color-red:rgba(255, 81, 81, 1);--color-green:#3ADD67;--color-yellow:#FDDE50;--color-light:#c4bdda;--gradient-green:linear-gradient(92.71deg, #fff0 0.92%, rgba(0, 170, 99, 0.79) 97.74%);--gradient-yellow:linear-gradient(92.71deg, #fff0 0.92%, #F8C020 43.91%, #FDDE4F 97.74%)}html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}main{display:block}h1{font-size:2em;margin:.67em 0}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:.35em .75em .625em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details{display:block}summary{display:list-item}template{display:none}[hidden]{display:none}*,::after,::before{box-sizing:inherit}html{box-sizing:border-box;max-width:100%;overflow-x:hidden;scroll-behavior:smooth}body{position:relative;min-width:320px;margin:0;color:var(--color-white);font-family:Inter,-apple-system,Arial,sans-serif;font-size:16px;line-height:1.375;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;max-width:100%;background:var(--color-blue-1)}@media screen and (max-width:768px){body{font-size:12px}}img,picture{display:block;max-width:100%;height:auto}a{text-decoration:none;transition:all .3s ease-in-out;color:var(--color-white)}
    @media (min-width: 1200px) {
        .sidebar__item666{
display:none;
    }
}
.langs15454{
display:inline-block;
}
.langs15454 img{
    width:24px;height:24px;
}
.langs15454{margin-right:8px;}
.langs15454--active img{width:32px;height:32px;transform:translateY(-2px);}
@media screen and (max-width:768px){.langs15454 img{width:22px;height:22px}.langs15454--active img{width:28px;height:28px}}

</style>
  <style>
  html, body { margin: 0; padding: 0; background: #161c24; }
  body { min-width: 320px; overflow-x: hidden; }
  main { min-height: 100vh; background: #161c24; }
  .cactus-404-wrap {
    width: 100%;
    background: #fff;
    color: #111827;
    padding: clamp(56px, 8vw, 96px) 20px;
    min-height: calc(100vh - 112px);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .cactus-404-card {
    width: min(720px, 100%);
    text-align: center;
    background: #fff;
    border: 1px solid rgba(17, 24, 39, 0.08);
    border-radius: 24px;
    box-shadow: 0 18px 55px rgba(15, 23, 42, 0.08);
    padding: clamp(30px, 6vw, 56px) clamp(20px, 5vw, 48px);
  }
  .cactus-404-code {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
    padding: 8px 16px;
    border-radius: 999px;
    background: rgba(0, 170, 84, 0.10);
    color: #00aa54;
    font-weight: 800;
    letter-spacing: .02em;
  }
  .cactus-404-card h1 {
    margin: 0 0 14px;
    color: #0f172a;
    font-size: clamp(32px, 5vw, 54px);
    line-height: 1.05;
    font-weight: 900;
  }
  .cactus-404-card p {
    margin: 0 auto 28px;
    max-width: 560px;
    color: #334155;
    font-size: clamp(16px, 2vw, 18px);
    line-height: 1.6;
  }
  .cactus-404-button,
  .cactus-404-button:hover,
  .cactus-404-button:focus {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 48px;
    padding: 0 28px;
    border-radius: 14px;
    text-decoration: none !important;
    color: #fff !important;
    background: linear-gradient(180deg,#00b95c 0%,#00aa54 100%) !important;
    border: 1px solid #00aa54 !important;
    box-shadow: 0 12px 30px rgba(0,170,84,.24) !important;
    font-weight: 800;
  }
  .header a, .header a:hover, .header a:focus { text-decoration: none !important; }
  @media (max-width: 768px) {
    .cactus-404-wrap { min-height: calc(100vh - 80px); padding: 44px 14px; }
    .cactus-404-card { border-radius: 18px; }
  }
</style>
</head>
<body style="background:#161c24">
  <main>
<?php if ($lang === 'ru'): ?>
<header class="header" style="background:#161c24">
	<div class="header__sidebar">
		
      <div class="header__logo">
      <a href="<?=$kechidlinki;?>" aria-label="Cactus" rel="sponsored nofollow noopener noreferrer">
        <img src="/imgs/logo.png" alt="Cactus" width="834" height="136" decoding="async">
      </a>
    </div>
    </div>
	<div class="header__wrap" >
		<div class="header__content" >
			<a class="app__btn" href="<?=$kechidlinki;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
				<img src="/assets/img/money.svg" alt="money" width="30" height="31" decoding="async">
				<span style="background: transparent;">
        <div class="app__btn-title">Выигрывайте до 175 000!

</div>Бесплатный бонус!


				</span>
			</a>
			<div class="header__actions" >
				<a class="app__btn" href="<?=$ioslink;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
					<img src="/assets/img/ios.svg" alt="ios" width="30" height="31" decoding="async">
					<span>Скачать:
						<div class="app__btn-title">IOS</div>
					</span>
				</a>
				<a class="app__btn" href="<?=$androidlink;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
					<img src="/assets/img/android.svg" alt="android" width="30" height="31" decoding="async">
					<span>Скачать:
						<div class="app__btn-title">Android</div>
					</span>
				</a>
			</div>
		</div>
		<div class="header__actions">
    <a class="btn btn-border" style="background: transparent;border-color: transparent;color: #00aa54;box-shadow: none;" href="<?=$kechidlinki;?>" rel="sponsored nofollow noopener noreferrer">Вход</a>
    <a class="btn btn-green" style="background: linear-gradient(180deg,#00b95c 0%,#00aa54 100%);border-color: #00aa54;color: #fff;box-shadow: 0 12px 30px rgba(0,170,84,.24);" href="<?=$kechidlinki;?>" rel="sponsored nofollow noopener noreferrer">Регистрация</a>
		</div>
	</div>
	<div class="mobile-language-switcher">
      <button class="language__btn js-menu-btn" type="button" aria-expanded="false" aria-label="Открыть меню языка">
        <img src="/imgs/ru.png" alt="Русский" width="18" height="18" decoding="async">
        <span>RU</span>
      </button>
      <div class="language__dropdown">
        <ul class="language__list" role="list">
            <li><a href="/tr" class="language__option" lang="tr" hreflang="tr"><img src="/imgs/tr.png" alt="Türkçe" width="18" height="18" decoding="async"><span>Türkçe</span></a></li>
            <li><a href="/en" class="language__option" lang="en" hreflang="en"><img src="/imgs/en.png" alt="English" width="18" height="18" decoding="async"><span>English</span></a></li>
            <li><a href="/" class="language__option is-active" lang="ru" hreflang="ru" aria-current="page"><img src="/imgs/ru.png" alt="Русский" width="18" height="18" decoding="async"><span>Русский</span></a></li>
            <li><a href="/uz" class="language__option" lang="uz" hreflang="uz"><img src="/imgs/uz.png" alt="Oʻzbekcha" width="18" height="18" decoding="async"><span>Oʻzbekcha</span></a></li>
        </ul>
      </div>
    </div>
	<div class="burger js-menu-button"><span></span><span></span></div>
</header>
<?php elseif ($lang === 'en'): ?>
<header class="header" style="background:#161c24">
	<div class="header__sidebar">
		
      <div class="header__logo">
      <a href="<?=$kechidlinki;?>" aria-label="Cactus" rel="sponsored nofollow noopener noreferrer">
        <img src="/imgs/logo.png" alt="Cactus" width="834" height="136" decoding="async">
      </a>
    </div>
    </div>
	<div class="header__wrap" >
		<div class="header__content" >
			<a class="app__btn" href="<?=$kechidlinki;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
				<img src="/assets/img/money.svg" alt="money" width="30" height="31" decoding="async">
				<span style="background: transparent;">
        <div class="app__btn-title">Win up to 175,000!

</div>Free bonus!


				</span>
			</a>
			<div class="header__actions" >
				<a class="app__btn" href="<?=$ioslink;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
					<img src="/assets/img/ios.svg" alt="ios" width="30" height="31" decoding="async">
					<span>Download:
						<div class="app__btn-title">IOS</div>
					</span>
				</a>
				<a class="app__btn" href="<?=$androidlink;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
					<img src="/assets/img/android.svg" alt="android" width="30" height="31" decoding="async">
					<span>Download:
						<div class="app__btn-title">Android</div>
					</span>
				</a>
			</div>
		</div>
		<div class="header__actions">
    <a class="btn btn-border" style="background: transparent;border-color: transparent;color: #00aa54;box-shadow: none;" href="<?=$kechidlinki;?>" rel="sponsored nofollow noopener noreferrer">Log in</a>
    <a class="btn btn-green" style="background: linear-gradient(180deg,#00b95c 0%,#00aa54 100%);border-color: #00aa54;color: #fff;box-shadow: 0 12px 30px rgba(0,170,84,.24);" href="<?=$kechidlinki;?>" rel="sponsored nofollow noopener noreferrer">Sign up</a>
		</div>
	</div>
	<div class="mobile-language-switcher">
      <button class="language__btn js-menu-btn" type="button" aria-expanded="false" aria-label="Open language menu">
        <img src="/imgs/en.png" alt="English" width="18" height="18" decoding="async">
        <span>EN</span>
      </button>
      <div class="language__dropdown">
        <ul class="language__list" role="list">
            <li><a href="/tr" class="language__option" lang="tr" hreflang="tr"><img src="/imgs/tr.png" alt="Türkçe" width="18" height="18" decoding="async"><span>Türkçe</span></a></li>
            <li><a href="/en" class="language__option is-active" lang="en" hreflang="en" aria-current="page"><img src="/imgs/en.png" alt="English" width="18" height="18" decoding="async"><span>English</span></a></li>
            <li><a href="/" class="language__option" lang="ru" hreflang="ru"><img src="/imgs/ru.png" alt="Русский" width="18" height="18" decoding="async"><span>Русский</span></a></li>
            <li><a href="/uz" class="language__option" lang="uz" hreflang="uz"><img src="/imgs/uz.png" alt="Oʻzbekcha" width="18" height="18" decoding="async"><span>Oʻzbekcha</span></a></li>
        </ul>
      </div>
    </div>
	<div class="burger js-menu-button"><span></span><span></span></div>
</header>
<?php elseif ($lang === 'tr'): ?>
<header class="header" style="background:#161c24">
	<div class="header__sidebar">
		
      <div class="header__logo">
      <a href="<?=$kechidlinki;?>" aria-label="Cactus" rel="sponsored nofollow noopener noreferrer">
        <img src="/imgs/logo.png" alt="Cactus" width="834" height="136" decoding="async">
      </a>
    </div>
    </div>
	<div class="header__wrap" >
		<div class="header__content" >
			<a class="app__btn" href="<?=$kechidlinki;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
				<img src="/assets/img/money.svg" alt="money" width="30" height="31" decoding="async">
				<span style="background: transparent;">
        <div class="app__btn-title">175.000’e kadar kazanın!

</div>Ücretsiz bonus!


				</span>
			</a>
			<div class="header__actions" >
				<a class="app__btn" href="<?=$ioslink;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
					<img src="/assets/img/ios.svg" alt="ios" width="30" height="31" decoding="async">
					<span>İndir:
						<div class="app__btn-title">IOS</div>
					</span>
				</a>
				<a class="app__btn" href="<?=$androidlink;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
					<img src="/assets/img/android.svg" alt="android" width="30" height="31" decoding="async">
					<span>İndir:
						<div class="app__btn-title">Android</div>
					</span>
				</a>
			</div>
		</div>
		<div class="header__actions">
    <a class="btn btn-border" style="background: transparent;border-color: transparent;color: #00aa54;box-shadow: none;" href="<?=$kechidlinki;?>" rel="sponsored nofollow noopener noreferrer">Giriş</a>
    <a class="btn btn-green" style="background: linear-gradient(180deg,#00b95c 0%,#00aa54 100%);border-color: #00aa54;color: #fff;box-shadow: 0 12px 30px rgba(0,170,84,.24);" href="<?=$kechidlinki;?>" rel="sponsored nofollow noopener noreferrer">Kayıt ol</a>
		</div>
	</div>
	<div class="mobile-language-switcher">
      <button class="language__btn js-menu-btn" type="button" aria-expanded="false" aria-label="Dil menüsünü aç">
        <img src="/imgs/tr.png" alt="Türkçe" width="18" height="18" decoding="async">
        <span>TR</span>
      </button>
      <div class="language__dropdown">
        <ul class="language__list" role="list">
            <li><a href="/tr" class="language__option is-active" lang="tr" hreflang="tr" aria-current="page"><img src="/imgs/tr.png" alt="Türkçe" width="18" height="18" decoding="async"><span>Türkçe</span></a></li>
            <li><a href="/en" class="language__option" lang="en" hreflang="en"><img src="/imgs/en.png" alt="English" width="18" height="18" decoding="async"><span>English</span></a></li>
            <li><a href="/" class="language__option" lang="ru" hreflang="ru"><img src="/imgs/ru.png" alt="Русский" width="18" height="18" decoding="async"><span>Русский</span></a></li>
            <li><a href="/uz" class="language__option" lang="uz" hreflang="uz"><img src="/imgs/uz.png" alt="Oʻzbekcha" width="18" height="18" decoding="async"><span>Oʻzbekcha</span></a></li>
        </ul>
      </div>
    </div>
	<div class="burger js-menu-button"><span></span><span></span></div>
</header>
<?php elseif ($lang === 'uz'): ?>
<header class="header" style="background:#161c24">
	<div class="header__sidebar">
		
      <div class="header__logo">
      <a href="<?=$kechidlinki;?>" aria-label="Cactus" rel="sponsored nofollow noopener noreferrer">
        <img src="/imgs/logo.png" alt="Cactus" width="834" height="136" decoding="async">
      </a>
    </div>
    </div>
	<div class="header__wrap" >
		<div class="header__content" >
			<a class="app__btn" href="<?=$kechidlinki;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
				<img src="/assets/img/money.svg" alt="money" width="30" height="31" decoding="async">
				<span style="background: transparent;">
        <div class="app__btn-title">175 000 gacha yutib oling!

</div>Bepul bonus!


				</span>
			</a>
			<div class="header__actions" >
				<a class="app__btn" href="<?=$ioslink;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
					<img src="/assets/img/ios.svg" alt="ios" width="30" height="31" decoding="async">
					<span>Yuklab oling:
						<div class="app__btn-title">IOS</div>
					</span>
				</a>
				<a class="app__btn" href="<?=$androidlink;?>" style="background: #161c24;" rel="sponsored nofollow noopener noreferrer">
					<img src="/assets/img/android.svg" alt="android" width="30" height="31" decoding="async">
					<span>Yuklab oling:
						<div class="app__btn-title">Android</div>
					</span>
				</a>
			</div>
		</div>
		<div class="header__actions">
    <a class="btn btn-border" style="background: transparent;border-color: transparent;color: #00aa54;box-shadow: none;" href="<?=$kechidlinki;?>" rel="sponsored nofollow noopener noreferrer">Kirish</a>
    <a class="btn btn-green" style="background: linear-gradient(180deg,#00b95c 0%,#00aa54 100%);border-color: #00aa54;color: #fff;box-shadow: 0 12px 30px rgba(0,170,84,.24);" href="<?=$kechidlinki;?>" rel="sponsored nofollow noopener noreferrer">Ro'yxatdan o'tish</a>
		</div>
	</div>
	<div class="mobile-language-switcher">
      <button class="language__btn js-menu-btn" type="button" aria-expanded="false" aria-label="Til menyusini ochish">
        <img src="/imgs/uz.png" alt="Oʻzbekcha" width="18" height="18" decoding="async">
        <span>UZ</span>
      </button>
      <div class="language__dropdown">
        <ul class="language__list" role="list">
            <li><a href="/tr" class="language__option" lang="tr" hreflang="tr"><img src="/imgs/tr.png" alt="Türkçe" width="18" height="18" decoding="async"><span>Türkçe</span></a></li>
            <li><a href="/en" class="language__option" lang="en" hreflang="en"><img src="/imgs/en.png" alt="English" width="18" height="18" decoding="async"><span>English</span></a></li>
            <li><a href="/" class="language__option" lang="ru" hreflang="ru"><img src="/imgs/ru.png" alt="Русский" width="18" height="18" decoding="async"><span>Русский</span></a></li>
            <li><a href="/uz" class="language__option is-active" lang="uz" hreflang="uz" aria-current="page"><img src="/imgs/uz.png" alt="Oʻzbekcha" width="18" height="18" decoding="async"><span>Oʻzbekcha</span></a></li>
        </ul>
      </div>
    </div>
	<div class="burger js-menu-button"><span></span><span></span></div>
</header>
<?php endif; ?>
    <section class="cactus-404-wrap" aria-labelledby="not-found-title">
      <div class="cactus-404-card">
        <div class="cactus-404-code"><?= htmlspecialchars($t['eyebrow'], ENT_QUOTES, 'UTF-8') ?></div>
        <h1 id="not-found-title"><?= htmlspecialchars($t['h1'], ENT_QUOTES, 'UTF-8') ?></h1>
        <p><?= htmlspecialchars($t['text'], ENT_QUOTES, 'UTF-8') ?></p>
        <a class="btn btn-green cactus-404-button" href="<?= htmlspecialchars($t['home'], ENT_QUOTES, 'UTF-8') ?>"><?= htmlspecialchars($t['button'], ENT_QUOTES, 'UTF-8') ?></a>
      </div>
    </section>
  </main>
  <script src="/assets/js/main.js?v=2" type="module"></script>
</body>
</html>
