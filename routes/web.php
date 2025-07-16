<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\masterController;
use App\Http\Controllers\userController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\taskController;
use App\Http\Controllers\LeaveApplicationController;
use App\Http\Controllers\SalaryPaymentController;
use App\Http\Controllers\StaffRosterController;
use App\Http\Controllers\trackingController;

//use App\Http\Controllers\Auth\dashboardController;
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

//Normal Route
Route::get('/login', function () {
   return redirect('login');
});
//Route::get('/',[FrontController::class,'index'])-> name('index');

Auth::routes();
//admin panel routes:
//Dashboard Routes
Route::get('/', [FrontController::class ,'index'])->name('index');
//Route::get('/login', [LoginController::class ,'login'])->name('login');
Route::get('/forgetpass', [HomeController::class ,'forgetpass'])->name('forgetpass');
Route::get('/dashboard', [masterController::class ,'master'])->name('dashboard');
Route::get('/faq', [HomeController::class ,'faq'])->name('faq');
Route::get('/general', [HomeController::class ,'general'])->name('general');
Route::get('/emailcompose', [HomeController::class ,'emailcompose'])->name('emailcompose');
Route::get('/emailinbox', [HomeController::class ,'emailinbox'])->name('emailinbox');
Route::get('/emailread', [HomeController::class ,'emailread'])->name('emailread');
Route::get('/userpfp', [HomeController::class ,'userpfp'])->name('userpfp');
Route::get('/task', [HomeController::class ,'task'])->name('task');
Route::get('/boxlayout', [HomeController::class ,'boxlayout'])->name('boxlayout');
Route::get('/calender', [HomeController::class ,'calender'])->name('calender');
Route::get('/contacts', [HomeController::class ,'contacts'])->name('contacts');
Route::get('/todo', [HomeController::class ,'todo'])->name('todo');
Route::get('/darkMode', [HomeController::class ,'darkMode'])->name('darkMode');
Route::get('/createinvoice', [HomeController::class ,'createinvoice'])->name('createinvoice');
//leave controller
Route::get('/leave', [LeaveApplicationController::class ,'showLeaveApplications'])->name('leave');
Route::post('/leave/store', [LeaveApplicationController::class, 'store'])->name('leave.store');
//master controller
Route::get('/master', [masterController::class ,'master'])->name('master');
Route::get('/masterpayment', [masterController::class ,'masters'])->name('masterpayment');
//salary controller
Route::get('/add-salary/{id}', [SalaryPaymentController::class, 'showSalaryPaymentForm']);
Route::post('/add-salary/{id}', [SalaryPaymentController::class, 'storeSalaryPayment']);
//staff roaster controller
Route::get('/staff_roaster', [StaffRosterController::class, 'showRosterForm'])->name('staff_roaster');
Route::post('/staff_roaster/store', [StaffRosterController::class, 'storeRoster'])->name('staff_roaster.store');
//Route::get('/updatemasterpay', [masterController::class ,'masterpay'])->name('updatemasterpayment');
//Register Routes
Route::get('/register', [RegisterController::class ,'register'])->name('register');
Route::post('/postregister', [RegisterController::class ,' postregister'])->name(' postregister');
Route::get('/details', [RegisterController::class ,'showDetails'])->name('details');
//Route::post('post-login',[LoginController::class,'postlogin'])->name('login.post');
//User Routes
Route::post('/createUser', [userController::class ,'createUser'])->name('createUser');
Route::get('/users', [userController::class ,'users'])->name('users');
Route::get('/details', [userController::class ,'showDetails'])->name('details');
Route::get('/updateUser/{id}', [userController::class ,'updateUser'])->name('updateUser');
Route::get('/userprofile', [userController::class ,'userprofile'])->name('userprofile');
Route::post('/updateUserDetails', [userController::class ,'updateUserDetails'])->name('updateUserDetails');
Route::post('/userStatus', [userController::class ,'userStatus'])->name('userStatus');
Route::get('/useredit', [userController::class ,'useredit'])->name('useredit');
Route::post('/usereditDetails', [userController::class ,'usereditDetails'])->name('usereditDetails');
//Project Routes
Route::get('/projects', [projectController::class ,'projects'])->name('projects');
Route::get('/projectDetails', [projectController::class ,'projectDetails'])->name('projectDetails');
Route::get('/createProject', [projectController::class ,'createProject'])->name('createProject');
Route::post('/addProject', [projectController::class ,'addProject'])->name('addProject');
Route::post('/projectStatus', [projectController::class ,'projectStatus'])->name('projectStatus');
//Client Routes
Route::get('/clients', [clientController::class ,'clients'])->name('clients');
Route::get('/clientDetails', [clientController::class ,'clientDetails'])->name('clientDetails');
Route::post('/createClient', [clientController::class ,'createClient'])->name('createClient');
Route::get('/updateClient/{clientID}', [clientController::class ,'updateClient'])->name('updateClient');
Route::post('/updateClientDetails', [clientController::class ,'updateClientDetails'])->name('updateClientDetails');
Route::post('/clientStatus', [clientController::class ,'clientStatus'])->name('clientStatus');
//Task Routes
Route::get('/tasks', [taskController::class ,'tasks'])->name('tasks');
Route::post('/addTask', [taskController::class ,'addTask'])->name('addTask');
Route::post('/taskStatus', [taskController::class ,'taskStatus'])->name('taskStatus');
//tracking
Route::get('/tracking', [trackingController::class ,'tracking'])->name('tracking');


