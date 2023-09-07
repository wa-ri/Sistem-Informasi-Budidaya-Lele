<?php 
@$cs=$_GET['cs'];
switch ($cs) {

	case 'home':
		include_once('view/index.php');
		break;

	case 'index':
		include_once('view/index.php');
		break;

	case 'blog':
		include_once('view/blog.php');
		break;
	
	case 'category':
		include_once('view/category.php');
		break;

	case 'checkout':
		include_once('view/checkout.php');
		break;

	case 'contact':
		include_once('view/contact.php');
		break;

	case 'elements':
		include_once('view/elements.php');
		break;

	case 'registration':
		include_once('view/registration.php');
		break;

	case 'single-blog':
		include_once('view/single-blog.php');
		break;

	case 'single-product':
		include_once('view/single-product.php');
		break;

	case 'tracking':
		include_once('view/tracking.php');
		break;

	case 'confirmation':
		include_once('view/confirmation.php');
		break;

	case 'cart':
		include_once('view/cart.php');
		break;

	case 'shop':
		include_once('view/shoping.php');
		break;

	case 'akun':
		include_once('view/akun.php');
		break;

	case 'panen':
		include_once('view/panen.php');
		break;

	case 'd_beli':
		include_once('view/d_beli.php');
		break;

	
	default:
		include_once("view/index.php");
		break;
}

 ?>