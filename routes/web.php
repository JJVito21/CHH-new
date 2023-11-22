<?php

use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventProposalController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\AdminAnnouncementController;
use App\Http\Controllers\AdminMemberUpdateController;
use App\Http\Controllers\AdminMemberInfo;
use App\Http\Controllers\MemberListController;
use App\Http\Controllers\AnnouncementUploadController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\SearchController;
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

// Member Pages
Route::get('/', [MainController::class, 'main']);
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/event', [EventController::class, 'event']);
Route::get('/eventproposal', [EventProposalController::class, 'eventproposal']);
Route::get('/announcement', [AnnouncementController::class, 'announcement']);

Route::controller(EventController::class)->group(function () {
    Route::get('/event', 'event')->name('event.get');
    Route::post('/event', 'store')->name('event.store');
});

// Admin Pages
// FOR LOGGING IN ADMIN CREDENTIALS
Route::get('/admin', [AdminController::class, 'admin']);                                           
// DISPLAYS MEMBERS, REPORT SUMMARIES, ETC.
Route::get('/admin/dashboard', [MemberListController::class, 'index'])->name('adminhomepage');

// FOR DISPLAYING CALENDAR OF EVENTS
Route::controller(AdminEventController::class)->group(function () {
    Route::get('/admin/events', 'adminevent')->name('adminevent.get');
    Route::post('/admin/events', 'store')->name('adminevent.store');
});

// FOR DISPLAYING ADMIN ANNOUNCEMENTS
Route::get('/admin/announcement', [AdminAnnouncementController::class, 'adminannouncement'])->name('adminannouncement');
// FOR UPLOADING NEW ANNOUNCEMENTS
Route::get('/admin/announcement/upload', [AnnouncementUploadController::class, 'announcementupload'])->name('announcementupload');
Route::post('/admin/announcement/upload', [AdminAnnouncementController::class, 'addadminannouncement'])->name('addadminannouncement');
// FOR DELETING EXISTING ANNOUNCEMENTS
Route::delete('/announcement/{announcement}/delete', [AdminAnnouncementController::class, 'deleteAnnouncement'])->name('deleteAnnouncement');

// Route::get('/adminmemberupdate', [AdminMemberUpdateController::class, 'adminmemberupdate']);
// Route::get('/adminmemberinfo', [AdminMemberInfo::class, 'adminmemberinfo']);



// MEMBER CRUD FUNCTIONS
Route::get('admin/album/{album}', [MemberListController::class, 'showAlbum'])->name('showAlbum');

//Route::get('/album_list', [AlbumListController::class, 'index'])->name('index');
Route::get('/add', [MemberListController::class, 'add'])->name('add');
Route::post('/add', [MemberListController::class, 'addAlbum'])->name('addAlbum');

Route::get('/album/{album}/update', [MemberListController::class, 'update'])->name('update');
Route::put('/album/{album}/edit', [MemberListController::class, 'updateAlbum'])->name('updateAlbum');

Route::delete('/album/{album}/delete', [MemberListController::class, 'deleteAlbum'])->name('deleteAlbum');

//announcement
// Route::controller(AdminAnnouncementController::class)->group(function () {
//     Route::get('/adminannouncement', 'adminannouncement')->name('adminannouncement.get');
//     Route::post('/adminannouncement', 'store')->name('adminannouncement.store');
// });

// Route::get('/download/{file}', [DownloadController::class, 'download']);
// Route::get('/upload', [DownloadController::class, 'showForm'])->name('upload');
// Route::post('/upload', [DownloadController::class, 'uploadFile'])->name('upload');
// Route::get('/download-announcement/{announcement}', 'AnnouncementController@download')->name('downloadAnnouncement');


// SEARCH FUNCTION
// In your web.php routes file
Route::get('/search', [SearchController::class, 'search'])->name('search');
