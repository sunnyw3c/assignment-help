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
Route::get('/programming-assignment-help', [LanguageController::class, 'index'])->name('languages.index');
Route::get('/programming-assignment-help/{slug}', [LanguageController::class, 'show'])->name('languages.show');

// All Services (Programming + Assignment)
Route::get('/services', [AllServicesController::class, 'index'])->name('services.index');

// Programming Services (SEO-friendly hierarchical URLs)
Route::get('/programming-help', [ServiceController::class, 'index'])->name('services.programming.index');
Route::get('/programming-help/{slug}', [ServiceController::class, 'show'])->name('services.programming.show');

// Assignment Help Services (SEO-friendly hierarchical URLs)
Route::get('/assignment-help', [AssignmentServiceController::class, 'index'])->name('services.assignment.index');
Route::get('/assignment-help/{slug}', [AssignmentServiceController::class, 'show'])->name('services.assignment.show');
Route::post('/assignment-help/calculate-price', [AssignmentServiceController::class, 'calculatePrice'])->name('services.assignment.calculate-price');


// Individual Assignment Service Routes
Route::get('/essay-writing-help', [EssayWritingController::class, 'index'])->name('services.essay-writing.index');
Route::get('/essay-writing-help/{slug}', [EssayWritingController::class, 'show'])->name('services.essay-writing.show');
Route::get('/research-paper-help', [ResearchPaperController::class, 'index'])->name('services.research-paper.index');
Route::get('/case-study-help', [CaseStudyController::class, 'index'])->name('services.case-study.index');
Route::get('/homework-help', [HomeworkHelpController::class, 'index'])->name('services.homework-help.index');
Route::get('/lab-report-help', [LabReportController::class, 'index'])->name('services.lab-report.index');
Route::get('/literature-review-help', [LiteratureReviewController::class, 'index'])->name('services.literature-review.index');
Route::get('/presentation-design-help', [PresentationDesignController::class, 'index'])->name('services.presentation-design.index');
Route::get('/proofreading-editing-help', [ProofreadingEditingController::class, 'index'])->name('services.proofreading-editing.index');
Route::get('/thesis-dissertation-help', [ThesisDissertationController::class, 'index'])->name('services.thesis-dissertation.index');


Route::get('/how-it-works', [HowItWorksController::class, 'index'])->name('how-it-works');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::get('/experts', [ExpertController::class, 'index'])->name('experts');
Route::get('/order', [OrderController::class, 'create'])->name('order');
Route::get('/order/success/{assignment}', [OrderController::class, 'success'])->name('order.success')->middleware(['auth']);
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

// File Upload Test Route
Route::get('/test-file-upload', function () {
    return view('file-upload-test');
})->name('test.file-upload');
Route::get('/dashboard', function () {
    return view('dashboard', [
        'header' => 'Student Dashboard'
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/{id}', function ($id) {
    return view('assignment-details', [
        'order_number' => $id,
        'header' => 'Assignment Details'
    ]);
})->middleware(['auth', 'verified'])->name('dashboard.details');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->prefix('api')->group(function () {
    Route::get('/assignments', [\App\Http\Controllers\Api\AssignmentApiController::class, 'index']);
    Route::post('/assignments/{assignment}/upload-file', [\App\Http\Controllers\Api\AssignmentApiController::class, 'uploadFile']);
    Route::get('/assignments/{assignment}/messages', [\App\Http\Controllers\Api\AssignmentMessageController::class, 'index']);
    Route::post('/assignments/{assignment}/messages', [\App\Http\Controllers\Api\AssignmentMessageController::class, 'store']);
});

require __DIR__ . '/auth.php';
