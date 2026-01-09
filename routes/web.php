<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AssignmentServiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ServiceController;
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

// Programming Services (existing - unchanged)
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('services.show');

// Assignment Help Services (new)
Route::get('/assignment-services', [AssignmentServiceController::class, 'index'])->name('assignment-services.index');
Route::get('/assignment-services/{slug}', [AssignmentServiceController::class, 'show'])->name('assignment-services.show');
Route::post('/assignment-services/calculate-price', [AssignmentServiceController::class, 'calculatePrice'])->name('assignment-services.calculate-price');

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
