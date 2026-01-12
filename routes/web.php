<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AssignmentServiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AllServicesController;
use App\Http\Controllers\HowItWorksController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ExpertController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/programming-languages', [LanguageController::class, 'index'])->name('languages.index');
Route::get('/programming-languages/{slug}', [LanguageController::class, 'show'])->name('languages.show');

// All Services (Programming + Assignment)
Route::get('/services', [AllServicesController::class, 'index'])->name('services.index');

// Programming Services (SEO-friendly hierarchical URLs)
Route::get('/services/programming', [ServiceController::class, 'index'])->name('services.programming.index');
Route::get('/services/programming/{slug}', [ServiceController::class, 'show'])->name('services.programming.show');

// Assignment Help Services (SEO-friendly hierarchical URLs)
Route::get('/services/assignment', [AssignmentServiceController::class, 'index'])->name('services.assignment.index');
Route::get('/services/assignment/{slug}', [AssignmentServiceController::class, 'show'])->name('services.assignment.show');
Route::post('/services/assignment/calculate-price', [AssignmentServiceController::class, 'calculatePrice'])->name('services.assignment.calculate-price');

Route::get('/how-it-works', [HowItWorksController::class, 'index'])->name('how-it-works');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::get('/experts', [ExpertController::class, 'index'])->name('experts');
Route::get('/assignments/create', [AssignmentController::class, 'create'])->name('assignments.create');
Route::post('/assignments/store', [AssignmentController::class, 'store'])->name('assignments.store');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
