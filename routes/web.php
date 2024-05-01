<?php

use App\Http\Controllers\Admin\Attribute\AddAttributeController;
use App\Http\Controllers\Admin\Attribute\AttributeListController;
use App\Http\Controllers\Admin\Authentication\LoginController;
use App\Http\Controllers\Admin\Authentication\SignupController;
use App\Http\Controllers\Admin\Category\AddCatController;
use App\Http\Controllers\Admin\Category\AddNewCategoryController;
use App\Http\Controllers\Admin\Category\CategoryListController;
use App\Http\Controllers\Admin\Category\DeleteCategoryController;
use App\Http\Controllers\Admin\Category\DeleteCatSubController;
use App\Http\Controllers\Admin\Category\EditCatController;
use App\Http\Controllers\Admin\Category\SubCategoryListController;
use App\Http\Controllers\Admin\Category\UpdateCategoryController;
use App\Http\Controllers\Admin\Category\UpdateSubCatController;
use App\Http\Controllers\Admin\Coupons\CouponListController;
use App\Http\Controllers\Admin\Coupons\CreateCouponController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\ListPage\ListPageController;
use App\Http\Controllers\Admin\Localization\CurrencyRateController;
use App\Http\Controllers\Admin\Localization\TranslationController;
use App\Http\Controllers\Admin\Media\MediaController;
use App\Http\Controllers\Admin\Orders\OrderDetailController;
use App\Http\Controllers\Admin\Orders\OrderListController;
use App\Http\Controllers\Admin\Orders\OrderTrackingController;
use App\Http\Controllers\Admin\Product\AddNewProductController;
use App\Http\Controllers\Admin\Product\DeleteProductController;
use App\Http\Controllers\Admin\Product\EditProductController;
use App\Http\Controllers\Admin\Product\ProductListController;
use App\Http\Controllers\Admin\Product\SearchProductController;
use App\Http\Controllers\Admin\ProductReview\ProductReviewController;
use App\Http\Controllers\Admin\Report\ReportController;
use App\Http\Controllers\Admin\Roles\AllRolesListController;
use App\Http\Controllers\Admin\Roles\CreateRoleController;
use App\Http\Controllers\Admin\Settings\ProifleSettingController;
use App\Http\Controllers\Admin\SupportTicket\SupportTicketController;
use App\Http\Controllers\Admin\Tax\TaxController;
use App\Http\Controllers\Admin\Users\AddNewUserController;
use App\Http\Controllers\Admin\Users\AllUserListController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User\Authentication\ForgotController;
use App\Http\Controllers\User\Authentication\UserDashboardController;
use App\Http\Controllers\User\Authentication\UserForgotController;
use App\Http\Controllers\User\Authentication\UserLoginController;
use App\Http\Controllers\User\Authentication\UserSignupController;
use App\Http\Controllers\User\Order\UserOrderController;
use App\Http\Controllers\User\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'login']);
Route::get('/signup', [SignupController::class, 'signUp']);
Route::post('/registration', [SignUpController::class, 'addUserInfo'])->name('add.userInfo');


Route::post('/admin-login', [LoginController::class, 'adminLogin'])->name('admin.login');

Route::group(['middleware' => 'disable_back_btn'], function(){

    Route::group(['prefix'=>'admin','middleware'=>'admin'], function(){
        
        //Dashboard
        Route::get('/dashboard', [DashboardController::class, 'dashboard']);
        Route::get('/logout', [loginController::class, 'logout']);
    });
});


Route::get('/adminlogin', [LoginController::class, 'login']);
Route::get('/adminsignup', [SignupController::class, 'signUp']);
Route::post('/adminregistration', [SignUpController::class, 'addUserInfo'])->name('add.userInfo');


Route::post('/admin-login', [LoginController::class, 'adminLogin'])->name('admin.login');
Route::group(['prefix'=>'admin','middleware'=>'admin'], function(){
        
    //Dashboard
    // Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    // Route::get('/logout', [loginController::class, 'logout']);

    //Product Lsit
    Route::get('/product-list', [ProductListController::class, 'productList']);
    Route::get('/pagination/paginate-data', [ProductListController::class, 'pagination']);

    //Add New Product

    Route::get('/add-new-product', [AddNewProductController::class, 'addNewProduct']);

    Route::post('/sub-cat-id', [AddNewProductController::class, 'getsubcategory'])->name('cat.id');
    // Route::get('/add-new-product', [AddNewProductController::class, 'addNewProduct'])->name('cat.id');

    //Category List
    Route::get('/category-list', [CategoryListController::class, 'categoryList']);
    Route::get('/sub-category-list', [SubCategoryListController::class, 'subCategoryList']);

    //Add New  Category
    Route::get('/add-new-category', [AddCatController::class, 'addNewCategory']);

    //Attribute List
    Route::get('/attribute-list', [AttributeListController::class, 'attributeList']);

    //Add Attribute
    Route::get('/add-attribute', [AddAttributeController::class, 'addAttribute']);

    //User List
    Route::get('/all-user-list', [AllUserListController::class, 'allUserList']);

    //Add new user
    Route::get('/add-new-user', [AddNewUserController::class, 'addNewUser']);

    //Roles List
    Route::get('/all-roles-list', [AllRolesListController::class, 'allRolesList']);

    //create role
    Route::get('/create-role', [CreateRoleController::class, 'createRole']);

    //Media
    Route::get('/media-library', [MediaController::class, 'mediaLibrary']);



    //order detail
    Route::get('/order-detail', [OrderDetailController::class, 'orderDetail']);

    //order list
    Route::get('/order-list', [OrderListController::class, 'orderList']);

    //order Tracking
    Route::get('/order-tracking', [OrderTrackingController::class, 'orderTracking']);

    //Translation
    Route::get('/translation-list', [TranslationController::class, 'translationList']);

    //Currency Rate
    Route::get('/currency-rate', [CurrencyRateController::class, 'currencyRate']);

    //Coupon list
    Route::get('/coupon-list', [CouponListController::class, 'couponList']);

    //create coupon
    Route::get('/create-coupon', [CreateCouponController::class, 'createCoupon']);

    //Tax
    Route::get('/tax', [TaxController::class, 'tax']);

    //Product Review
    Route::get('/product-review', [ProductReviewController::class, 'productReview']);

    //Support Ticket
    Route::get('/support-ticket', [SupportTicketController::class, 'supportTicket']);


    //Profile Setting
    Route::get('/profile-setting', [ProifleSettingController::class, 'profileSetting']);

    //Reports
    Route::get('/report', [ReportController::class, 'report']);

    //List Page
    Route::get('/list-page', [ListPageController::class, 'listPage']);

    Route::post('/add-parent-cat', [AddCatController::class, 'addParentCategory'])->name('add.parentcat');
    //get category list
    // Route::get('/category-list', [AddCatController::class, 'categoryList']);
    Route::post('/add-sub-cat', [AddCatController::class, 'addSubCat'])->name('add.subcat');
    // Route::get('/edit-cat-modal', [EditCatController::class, 'getCategory']);
    Route::post('/update-sub-cat', [UpdateSubCatController::class, 'updateSubCat'])->name('update.subCat');
    Route::post('/update-cat', [UpdateCategoryController::class, 'updateCat'])->name('update.cat');
    
    Route::post('/delete-cat', [DeleteCategoryController::class, 'deleteCat'])->name('delete.cat'); //via ajax
    // Route::get('/delete-cat/{id}', [DeleteCategoryController::class, 'deleteCat']); //via URL
    Route::get('/delete-sub-cat/{id}', [DeleteCatSubController::class, 'deleteSub']); //via URL
    
    //Edit Product Blade file
    // Route::get('/edit-cat-sub/{id}', [EditCatController::class, 'editCatSub']);

    //Insert Product
    Route::post('/add-product', [AddNewProductController::class, 'addProduct'])->name('add.product');
    
    // Edit Product
    Route::get('/edit-product/{id}', [EditProductController::class, 'getProduct']);
    // Route::match(['get', 'post'], '/edit-product/{id}', [EditProductController::class, 'editProduct'])->name('cat.id');

    // update product
    Route::post('/update-product', [EditProductController::class, 'updateProduct'])->name('update.product');
    
    // Delete product
    // Route::post('/delete-product', [DeleteProductController::class, 'deleteCat'])->name('delete.product'); //via ajax
    Route::get('/delete-product/{id}', [DeleteProductController::class, 'deleteProduct']);

    Route::get('/pagination/paginate-data', [SearchProductController::class, 'pagination']);
    Route::get('/search-product', [SearchProductController::class, 'searchProduct'])->name('search.product');

    //add new admin
    Route::post('/add-new-admin', [AddNewUserController::class, 'addNewAdmin'])->name('add.newAdmin');
});




Route::get("/",[SiteController::class,"index"]);

Route::get("/product-details/{productId}/{categoryId}",[SiteController::class,"getSingleproduct"])->name('product.details');

Route::get("/Shop category sidebar",[SiteController::class,"shop_category"]);
Route::get("/shop_left_sidebar",[SiteController::class,"shop_left_sidebar"]);
Route::get("/product_left_thumbnail",[SiteController::class,"product_left_thumbnail"]);
Route::get("/blog_detail",[SiteController::class,"blog_detail"]);
Route::get("/blog_list",[SiteController::class,"blog_list"]);
Route::get("/404",[SiteController::class,"error_page"]);
Route::get("/cart",[SiteController::class,"cart"]);
Route::get("/contact",[SiteController::class,"contact"]);
Route::get("/coming_soon",[SiteController::class,"coming_soon"]);

//Order 
Route::post('/add-order', [UserOrderController::class, 'addOrder'])->name('add.order');

//Quantity increament/decreament

Route::post('/quantity-update',[UserOrderController::class,'updateQuantity'])->name('update.quantity');
Route::get('/header-header',[UserOrderController::class,'header']);
Route::post('/delete-order',[UserOrderController::class,'deleteOrder'])->name('delete.order');




Route::get('/signup', [UserSignupController::class, 'userSignup']);
Route::get('/login', [UserLoginController::class, 'login'])->name('user.login-in');
Route::get('/user-forgot-password', [UserForgotController::class, 'userForgot']);


// user registration
Route::post('/user-signup', [UserSignupController::class, 'userRegistration'])->name('add.userRegistration');

//access im dashboard
Route::post('/user-login', [UserLoginController::class, 'userLogin'])->name('user.login');

Route::group(['prefix'=>'user','middleware'=>'user'], function(){
    Route::get('/user-dashboard/{id}/{name}', [UserDashboardController::class, 'userDashboard'])->name('user.user-dashboard');
    Route::get('/logout', [UserLoginController::class, 'logout'])->name('user.logout');

    Route::post('/user-profile-update', [UserSignupController::class, 'userProfileUpdate'])->name('update.userProfile');
    
   Route::get("/checkout",[SiteController::class,"checkout"]);
});

//Dashboard
// Route::get('/', [DashboardController::class, 'dashboard']);
// Route::get('/testing-purpose', [TestController::class, 'testing']);
// Route::get('/testing-purpose', [EditCatController::class, 'getCategory']);

// //Product Lsit
// Route::get('/product-list', [ProductListController::class, 'productList']);

// //Add New Product

// Route::get('/add-new-product', [AddNewProductController::class, 'addNewProduct']);

// Route::get('/add-new-product', [AddNewProductController::class, 'addNewProduct']);

// //Category List
// Route::get('/category-list', [CategoryListController::class, 'categoryList']);

// //Add New  Category
// Route::get('/add-new-category', [AddCatController::class, 'addNewCategory']);

// //Attribute List
// Route::get('/attribute-list', [AttributeListController::class, 'attributeList']);

// //Add New  Category
// Route::get('/add-attribute', [AddAttributeController::class, 'addAttribute']);

// //User List
// Route::get('/all-user-list', [AllUserListController::class, 'allUserList']);

// //Add new user
// Route::get('/add-new-user', [AddNewUserController::class, 'addNewUser']);

// //Roles List
// Route::get('/all-roles-list', [AllRolesListController::class, 'allRolesList']);

// //create role
// Route::get('/create-role', [CreateRoleController::class, 'createRole']);

// //Media
// Route::get('/media-library', [MediaController::class, 'mediaLibrary']);



// //order detail
// Route::get('/order-detail', [OrderDetailController::class, 'orderDetail']);

// //order list
// Route::get('/order-list', [OrderListController::class, 'orderList']);

// //order Tracking
// Route::get('/order-tracking', [OrderTrackingController::class, 'orderTracking']);

// //Translation
// Route::get('/translation-list', [TranslationController::class, 'translationList']);

// //Currency Rate
// Route::get('/currency-rate', [CurrencyRateController::class, 'currencyRate']);

// //Coupon list
// Route::get('/coupon-list', [CouponListController::class, 'couponList']);

// //create coupon
// Route::get('/create-coupon', [CreateCouponController::class, 'createCoupon']);

// //Tax
// Route::get('/tax', [TaxController::class, 'tax']);

// //Product Review
// Route::get('/product-review', [ProductReviewController::class, 'productReview']);

// //Support Ticket
// Route::get('/support-ticket', [SupportTicketController::class, 'supportTicket']);


// //Profile Setting
// Route::get('/profile-setting', [ProifleSettingController::class, 'profileSetting']);

// //Reports
// Route::get('/report', [ReportController::class, 'report']);

// //List Page
// Route::get('/list-page', [ListPageController::class, 'listPage']);