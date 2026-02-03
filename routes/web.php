<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\OrderController;
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
use App\Http\Controllers\EssayWritingController;
use App\Http\Controllers\ResearchPaperController;
use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\HomeworkHelpController;
use App\Http\Controllers\LabReportController;
use App\Http\Controllers\LiteratureReviewController;
use App\Http\Controllers\PresentationDesignController;
use App\Http\Controllers\ProofreadingEditingController;
use App\Http\Controllers\ThesisDissertationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/programming-languages', [LanguageController::class, 'index'])->name('languages.index');
Route::get('/programming-languages/{slug}', [LanguageController::class, 'show'])->name('languages.show');

// All Services (Programming + Assignment)
Route::get('/services', [AllServicesController::class, 'index'])->name('services.index');

// Programming Services (SEO-friendly hierarchical URLs)
Route::get('/programming', [ServiceController::class, 'index'])->name('services.programming.index');
Route::get('/programming/{slug}', [ServiceController::class, 'show'])->name('services.programming.show');

// Assignment Help Services (SEO-friendly hierarchical URLs)
Route::get('/assignment', [AssignmentServiceController::class, 'index'])->name('services.assignment.index');
Route::get('/assignment/{slug}', [AssignmentServiceController::class, 'show'])->name('services.assignment.show');
Route::post('/assignment/calculate-price', [AssignmentServiceController::class, 'calculatePrice'])->name('services.assignment.calculate-price');


// Individual Assignment Service Routes
Route::get('/essay-writing', [EssayWritingController::class, 'index'])->name('services.essay-writing.index');
Route::get('/essay-writing/{slug}', [EssayWritingController::class, 'show'])->name('services.essay-writing.show');
Route::get('/research-paper', [ResearchPaperController::class, 'index'])->name('services.research-paper.index');
Route::get('/case-study', [CaseStudyController::class, 'index'])->name('services.case-study.index');
Route::get('/homework-help', [HomeworkHelpController::class, 'index'])->name('services.homework-help.index');
Route::get('/lab-report', [LabReportController::class, 'index'])->name('services.lab-report.index');
Route::get('/literature-review', [LiteratureReviewController::class, 'index'])->name('services.literature-review.index');
Route::get('/presentation-design', [PresentationDesignController::class, 'index'])->name('services.presentation-design.index');
Route::get('/proofreading-editing', [ProofreadingEditingController::class, 'index'])->name('services.proofreading-editing.index');
Route::get('/thesis-dissertation', [ThesisDissertationController::class, 'index'])->name('services.thesis-dissertation.index');


Route::get('/how-it-works', [HowItWorksController::class, 'index'])->name('how-it-works');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::get('/experts', [ExpertController::class, 'index'])->name('experts');
Route::get('/order', [OrderController::class, 'create'])->name('order');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

// File Upload Test Route
Route::get('/test-file-upload', function () {
    return view('file-upload-test');
})->name('test.file-upload');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
