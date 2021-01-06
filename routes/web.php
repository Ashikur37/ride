<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 

Auth::routes();

//Admin Panel Start
Route::get('/admin', 'adminController@admin')->name('admin');




//Driver
//Table
Route::get('/Adriver', 'tableController@Adriver');
Route::post('/Adriversearch', 'tableController@Adriversearch')->name('Adriversearch');
Route::get('/driverapproval/{ID}', 'tableController@driverapproval');





//Parcel

//Table
Route::get('/Aparcel', 'tableController@Aparcel');
Route::post('/Aparcelsearch', 'tableController@Aparcelsearch')->name('Aparcelsearch');
Route::get('/orderapproval/{ID}', 'adminController@orderapproval');


//Edit & Delete
Route::get('/parceleditreq/{id}', 'tableController@parceleditreq');
Route::post('/parceledit', 'tableController@parceledit');
Route::get('/parceldelete/{id}', 'tableController@parceldelete');
// End Parcel




//document

//Table
Route::get('/Adocument', 'tableController@Adocument');
Route::post('/Adocumentsearch', 'tableController@Adocumentsearch')->name('Adocumentsearch');

//Edit & Delete
Route::get('/documenteditreq/{id}', 'tableController@documenteditreq');
Route::post('/documentedit', 'tableController@documentedit');
Route::get('/documentdelete/{id}', 'tableController@documentdelete');
// End document




//packaging

//Table
Route::get('/Apackaging', 'tableController@Apackaging');
Route::post('/Apackagingsearch', 'tableController@Apackagingsearch')->name('Apackagingsearch');

//Edit & Delete
Route::get('/packagingeditreq/{id}', 'tableController@packagingeditreq');
Route::post('/packagingedit', 'tableController@packagingedit');
Route::get('/packagingdelete/{id}', 'tableController@packagingdelete');
// End packaging






//medicine

//Table
Route::get('/Amedicine', 'tableController@Amedicine');
Route::post('/Amedicinesearch', 'tableController@Amedicinesearch')->name('Amedicinesearch');

//Edit & Delete
Route::get('/medicineeditreq/{id}', 'tableController@medicineeditreq');
Route::post('/medicineedit', 'tableController@medicineedit');
Route::get('/medicinedelete/{id}', 'tableController@medicinedelete');
// End medicine









//Laoptop
//Form
Route::get('/laptopform', 'formController@laptopform');
Route::post('/laptopinput', 'formController@laptopinput')->name('laptopinput');
//Table
Route::get('/Alaptop', 'tableController@Alaptop');
Route::post('/Alaptopsearch', 'tableController@Alaptopsearch')->name('Alaptopsearch');

//Edit & Delete
Route::get('/laptopeditreq/{id}', 'tableController@laptopeditreq');
Route::post('/laptopedit', 'tableController@laptopedit');
Route::get('/laptopdelete/{id}', 'tableController@laptopdelete');
// End Laoptop





//bikeregistration

//Table
Route::get('/Abike', 'tableController@Abike');
Route::post('/Abikesearch', 'tableController@Abikesearch')->name('Abikesearch');
Route::get('/orderapproval/{ID}', 'adminController@orderapproval');


//Edit & Delete
Route::get('/bikeeditreq/{id}', 'tableController@bikeeditreq');
Route::post('/bikeedit', 'tableController@bikeedit');
Route::get('/bikedelete/{id}', 'tableController@bikedelete');
// End Parcel



//carregistration

//Table
Route::get('/Acar', 'tableController@Acar');
Route::post('/Acarsearch', 'tableController@Acarsearch')->name('Acarsearch');
Route::get('/orderapproval/{ID}', 'adminController@orderapproval');


//Edit & Delete
Route::get('/careditreq/{id}', 'tableController@careditreq');
Route::post('/caredit', 'tableController@bikeedit');
Route::get('/cardelete/{id}', 'tableController@bikedelete');
// End Parcel




//bicycleregistration

//Table
Route::get('/Abicycle', 'tableController@Abicycle');
Route::post('/Abicyclesearch', 'tableController@Abicyclesearch')->name('Abicyclesearch');
Route::get('/orderapproval/{ID}', 'adminController@orderapproval');


//Edit & Delete
Route::get('/bicycleeditreq/{id}', 'tableController@bicycleeditreq');
Route::post('/bicycleedit', 'tableController@bicycleedit');
Route::get('/bicycledelete/{id}', 'tableController@bicycledelete');
// End Parcel





//Admin Panel End






//User Panel Start
Route::get('/', 'userController@index')->name('index');
Route::get('/userprofile', 'userController@userprofile')->name('userprofile');

//Registration
Route::get('/clientregister', 'clientRegister@clientregister');
Route::post('/clientinput', 'clientRegister@clientinput')->name('clientinput');

// Login and Logout
Route::get('/clientloginpage', 'clientRegister@clientloginpage');
Route::post('/clientlogin', 'clientRegister@clientlogin')->name('clientlogin');
Route::get('/clientlogout','clientRegister@clientlogout');


//userprofile
Route::get('/userprofile', 'userController@userprofile');
Route::get('/profileeditreq/{id}', 'userController@profileeditreq');
Route::post('/profileedit', 'userController@profileedit');

//End User


//driver profile
//car
Route::get('/bikeprofile', 'userController@bikeprofile');
Route::get('/bikeprofileeditreq/{id}', 'userController@bikeprofileeditreq');
Route::post('/bikeprofileedit', 'userController@bikeprofileedit');



//User Lock Form
//Form Start

//User Order Details
Route::get('/orderdetails', 'userController@orderdetails');

//Service
Route::get('/gift', 'userForm@gift');
Route::post('/giftinput', 'userForm@giftinput')->name('giftinput');

Route::get('/document', 'userForm@document');
Route::post('/documentinput', 'userForm@documentinput')->name('documentinput');

Route::get('/package', 'userForm@package');
Route::post('/packageinput', 'userForm@packageinput')->name('packageinput');


//vehicle service
//bike
Route::get('/bike', 'userForm@bike');
Route::post('/bikeinput', 'userForm@bikeinput')->name('bikeinput');
//car
Route::get('/car', 'userForm@car');
Route::post('/carinput', 'userForm@carinput')->name('carinput');







//Navbar
//Tracking

Route::get('/tracking', 'userController@tracking');
Route::post('/productsearch', 'userController@productsearch')->name('productsearch');
 
//Service
Route::get('/percel', 'userController@percel');
Route::get('/food', 'userController@food');
Route::get('/bike', 'userController@bike');
Route::get('/car', 'userController@car');
Route::get('/courier', 'userController@courier');
Route::get('/packaging', 'userController@packaging');
Route::get('/garment', 'userController@garment');
Route::get('/bikeregistration', 'userController@bikeregistration');
Route::get('/carregistration', 'userController@carregistration');
Route::get('/bicycleregistration', 'userController@bicycleregistration');
Route::get('/vehicle', 'userController@vehicle');
Route::get('/vehiclelogin', 'userController@vehiclelogin');
Route::get('/referral', 'userController@referral');
Route::get('/location', 'userController@location');
Route::get('/tea', 'userController@tea');
Route::get('/nfc', 'userController@nfc');
Route::get('/student', 'userController@student');




//Pricing
Route::get('/pricing', 'userController@pricing');


//Contatct
Route::get('/contact', 'userController@contact');









//User Panel End









//Driver Section

//Registration
Route::get('/driverregister', 'driverController@driverregister');
Route::post('/driverinput', 'driverController@driverinput')->name('driverinput');

// Login and Logout
Route::get('/driverloginpage', 'driverController@driverloginpage');
Route::post('/driverlogin', 'driverController@driverlogin')->name('driverlogin');
Route::get('/driverlogout','driverController@driverlogout');


//userprofile
Route::get('/driverprofile', 'driverController@driverprofile');