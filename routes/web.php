<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AdminBookingController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [ServiceController::class, 'showBySlug'])->name('services.slug');

// Booking
Route::get('/booking', [BookingController::class, 'create'])->name('booking');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Testimonials
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');

// Articles/Blog
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Route dashboard user biasa (untuk redirect setelah register/login)
Route::middleware(['auth'])->get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

// Route profile.edit agar menu profile tidak error
Route::middleware(['auth'])->get('/profile/edit', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');

// Route profile.update agar menu profile tidak error
Route::middleware(['auth'])->put('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

// Route profile.destroy agar menu profile tidak error
Route::middleware(['auth'])->delete('/profile', [\App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

// ================= ADMIN PANEL =================
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/bookings', [AdminBookingController::class, 'index'])->name('bookings.index');
    // Tambahkan route CRUD lain di sini untuk artikel, layanan, testimoni, dsb.
});

// Pastikan routes auth.php di-include
require __DIR__.'/auth.php';