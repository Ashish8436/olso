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

$route['profile/(.+)'] = 'Profile/view_profile/$1';

$route['Register'] = 'User_login/user_register';
$route['Login'] = 'User_login/user_login';
$route['Logout'] = 'User_login/user_logout';

$route['Dashboard'] = 'Dashboard/view_dashboard';
$route['Profile'] = 'Dashboard/view_profile';
$route['Edit-Profile'] = 'User_details/view_edit_profile';
$route['Profile-Update'] = 'User_details/store_profile_info';
$route['Profile-Picture'] = 'User_details/update_profile_picture';
$route['Profile-Photo'] = 'User_details/view_edit_photo';
$route['Docuement-Verify'] = 'Document_management/view_document_management';
$route['ID-Verification'] = 'Document_management/view_id_verification';
$route['ID-Verification-Store'] = 'Document_management/store_id_verification';
$route['Add-Documents'] = 'Document_management/store_document_files';
$route['Verify-Selfie'] = 'Document_management/view_take_selfi';
$route['Trust-Verification'] = 'Trust_verification/view_trust_verification';


$route['Create-Item'] = 'Create_item/view_create_item';
$route['Items-Store'] = 'Create_item/store_items';
$route['Items-Duplicate_Store'] = 'Create_item/store_duplicate_items';
$route['Create-Offers'] = 'Tools/view_create_offer';
$route['Store-Offers'] = 'Tools/store_create_offer';
$route['Delete-Offers/(.+)'] = 'Tools/delete_offer/$1';

$route['my-items'] = 'User_item_list/view_user_item_list';

$route['Duplicate-Item/(.+)'] = 'Create_item/view_duplicate_item/$1';
$route['Edit-Item/(.+)'] = 'Create_item/view_edit_item/$1';
$route['update-item'] = 'Create_item/edit_items';

$route['Product-Buy/(.+)'] = 'Product_details/view_product_details/$1';

// Tools
$route['Instant-Book'] = 'Tools/view_instant_book';
$route['Store-Instant-Booking'] = 'Tools/store_instant_booking';
$route['Policies'] = 'Tools/view_policies';
$route['Store-Policies'] = 'Tools/store_policy';
$route['Open-Hours'] = 'Tools/view_open_hours';
$route['Store-Open-Hours'] = 'Tools/store_open_hours';

$route['availability-settings'] = 'Tools/view_availability_settings';
$route['Store-Advance_month'] = 'Tools/store_user_adv_month';

$route['calendar-sync'] = 'Tools/view_calendar';
$route['update-calendar-sync/(.+)'] = 'Tools/view_update_calendar/$1';
$route['block-calendar-sync/(.+)'] = 'Tools/view_block_calendar/$1';


$route['request-items'] = 'Request_condition/show_vendor_request_item_view';
$route['Customer-Orders'] = 'Request_condition/show_customer_orders_in_vendor';

$route['request-items-details'] = 'Request_condition/show_request_item_details';
$route['Item-Accept'] = 'Request_condition/accept_request';
$route['Item-Cancel'] = 'Request_condition/cancel_request';
$route['request-for-item'] = 'Request_for_item/show_request_for_item';
$route['request-items'] = 'Request_condition/show_vendor_request_item_view';

$route['Store-Request-For-Item'] = 'Request_for_item/store_request_for_item';

$route['Notifications'] = 'User_notifications/show_user_notifications';
$route['notifications-details/(.+)'] = 'User_notifications/show_user_notifications_details/$1';


$route['OLSO-Payout-Partner-Default-AccountRegistration'] = 'Bank_details/view_bank_tansfer_details';
$route['Modify-Bank-Account'] = 'Bank_details/edit_bank_tansfer_details';
$route['Store-Payment-Bank-Details'] = 'Bank_details/store_vendor_account_details';
$route['Update-Payment-Bank-Details'] = 'Bank_details/update_vendor_account_details';
$route['Transactions'] = 'Transaction/show_transaction';


$route['Orders'] = 'Payment/orders';








$route['Admin/login'] = 'Olso_admin_portal/Login/show_login';
$route['Admin/login/try'] = 'Olso_admin_portal/Login/admin_login';
$route['Admin/logout'] = 'Olso_admin_portal/Login/admin_logout';
$route['Admin-portal/Dashboard'] = 'Olso_admin_portal/Master_controller/dashboard';

$route['Admin-portal/Transactions'] = 'Olso_admin_portal/Transaction/show_transaction';
$route['Admin-portal/Transactions-details'] = 'Olso_admin_portal/Transaction/show_transaction_details';
$route['Admin-portal/Update-Payment'] = 'Olso_admin_portal/Transaction/store_admin_to_lender_payment';

$route['Admin-portal/Approble-Item'] = 'Olso_admin_portal/Approble_item/show_manage_approble_item';

$route['Admin-portal/Unapproble-Item-Details/(.+)'] = 'Olso_admin_portal/Approble_item/show_unapproble_item_details/$1';
$route['Admin-portal/accept-unapproble-item'] = 'Olso_admin_portal/Approble_item/accept_unapproble_item';
$route['Admin-portal/cancel-unapproble-item'] = 'Olso_admin_portal/Approble_item/cancel_unapproble_item';

$route['Admin-portal/ID-Verification'] = 'Olso_admin_portal/Id_verify/view_id_verification';
$route['Admin-portal/ID-Verification-Details/(.+)'] = 'Olso_admin_portal/Id_verify/view_id_verification_details/$1';

$route['Admin-portal/Id-Verify'] = 'Olso_admin_portal/Id_verify/accept_id_verify';
$route['Admin-portal/ID-Cancel'] = 'Olso_admin_portal/Id_verify/cancel_id_verify';



$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
