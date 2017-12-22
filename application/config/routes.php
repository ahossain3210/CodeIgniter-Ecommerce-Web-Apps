<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;





/* Welcome Controller */

$route['product-details/(:any)']='Welcome/productDetails/$1';
$route['category-products/(:any)']='Welcome/categoryProduct/$1';
$route['manufacturer-product/(:any)']='Welcome/manufacturerProduct/$1';
$route['contact']='Welcome/contact';
$route['all-products']='Welcome/all_product';
$route['search-product']='Welcome/search_product';
$route['new-product-collection']='Welcome/latest_product';
$route['computer-collections']='Welcome/computer_collection';
$route['mobile-collections']='Welcome/mobile_collection';
$route['feature-products']='Welcome/feature_product';
$route['save-customer-message']='Welcome/save_customer_message';





/* Cart Controller */

$route['cart']='Cart/viewCart';
$route['add-to-cart']='Cart/addToCart';

/* Checkout Controller */

$route['payment']='Checkout/payment';
$route['order-list']='Checkout/orderList';
$route['customer-registration']='Checkout/customerRegistration';
$route['customer-logout']='Checkout/customerLogout';
$route['save-customer-info']='Checkout/saveCustomer';
$route['billing']='Checkout/billing';
$route['save-billing']='Checkout/saveBilling';
$route['shipping']='Checkout/shipping';
$route['save-shipping']='Checkout/payment';
$route['place-order']='Checkout/placeOrder';
$route['cancel-order/(:any)']='Checkout/cancel_order/$1';



/* Admin Controller */


/* Dashboard Controller */

$route['dashboard']='Dashboard/index';
$route['add-category']='Dashboard/addCategory';
$route['add-manufacturer']='Dashboard/addManufacturer';
$route['add-product']='Dashboard/addProduct';
$route['add-blog']='Dashboard/addBlog';
$route['manage-category']='Dashboard/manageCategory';
$route['manage-manufacturer']='Dashboard/manageManufacturer';
$route['manage-product']='Dashboard/manageProduct';
$route['manage-blog']='Dashboard/manageBlog';
$route['manage-order']='Dashboard/manageOrder';
$route['unpublish-category/(:any)']='Dashboard/unpublishCategory/$1';
$route['publish-category/(:any)']='Dashboard/publishCategory/$1';
$route['edit-category/(:any)']='Dashboard/editCategory/$1';
$route['delete-category/(:any)']='Dashboard/deleteCategory/$1';
$route['update-category']='Dashboard/updateCategory';
//$route['unpublish-manufacturer/(:any)']='Dashboard/unpublishManufacturer/$1';
//$route['publish-manufacturer/(:any)']='Dashboard/publishManufacturer/$1';
//$route['edit-manufacturer/(:any)']='Dashboard/editManufacturer/$1';
//$route['delete-manufacturer/(:any)']='Dashboard/deleteManufacturer/$1';
//$route['update-manufacturer/(:any)']='Dashboard/updateManufacturer/$1';