<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibraryController;
use Illuminate\Http\Request;

Route::post('/login-library', [LibraryController::class, 'actionLoginLibrary'])->name('login.library');
Route::get('/logout', [LibraryController::class, 'logout']);


Route::middleware(['auth.login', 'role:library'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        //    Route::get('/', [DashboardController::class, 'index']);
    });
   
    Route::get('/library', [LibraryController::class, 'index']);
    
    Route::get('/library/gcs/section/admin', [LibraryController::class, 'index']);
    Route::get('/data/library', [LibraryController::class, 'library'])->name('library.add.book');
    Route::get('/data/library/edit/{id}', [LibraryController::class, 'editLibrary'])->name('library.edit.book');
    Route::post('/data/library/update', [LibraryController::class, 'updateLibrary'])->name('library.update.book');
    Route::post('/data/library/post', [LibraryController::class, 'storeLibrary'])->name('store.library');
    Route::delete('/delete/library/{id}', [LibraryController::class, 'deleteBook'])->name('delete.library.book');
    
    Route::get('/data/cd-book', [LibraryController::class, 'cdBook'])->name('library.add.cd.and.book');
    Route::get('/data/cd-book/edit/{id}', [LibraryController::class, 'editCdBook'])->name('library.edit.cd.book');
    Route::post('/data/cd-book/post', [LibraryController::class, 'storeCdBook'])->name('store.cd.book');
    Route::post('/data/cd-book/update', [LibraryController::class, 'updateCdBook'])->name('update.cd.book');
    Route::delete('/delete/cd-book/{id}', [LibraryController::class, 'deleteCdBook'])->name('delete.cd.book');
    
    Route::get('/data/three-level', [LibraryController::class, 'threeLevel'])->name('library.three.level');
    Route::get('/data/three-level/edit/{id}', [LibraryController::class, 'editThreeLevel'])->name('edit.three.level');
    Route::post('/data/three-level/post', [LibraryController::class, 'storeThreeLevel'])->name('store.three.level');
    Route::post('data/three-level/update', [LibraryController::class, 'updateThreeLevel'])->name('update.three.level');
    Route::delete('/delete/three-level/{id}', [LibraryController::class, 'deleteThreeLevel'])->name('delete.three.level');

    Route::get('/data/small-warehouse', [LibraryController::class, 'smallWarehouse'])->name('library.small.warehouse');
    Route::get('/data/small-warehouse/edit/{id}', [LibraryController::class, 'editSmallWarehouse'])->name('edit.small.warehouse');
    Route::post('/data/small-warehouse/post', [LibraryController::class, 'storeSmallWarehouse'])->name('store.small.warehouse');
    Route::post('/data/small-warehouse/update', [LibraryController::class, 'updateSmallWarehouse'])->name('update.small.warehouse');
    Route::delete('/delete/small-warehouse/{id}', [LibraryController::class, 'deleteSmallWarehouse'])->name('delete.small.warehouse');
    
    Route::get('/data/reference-book', [LibraryController::class, 'referenceBook'])->name('library.reference.book');
    Route::get('/data/reference-book/edit/{id}', [LibraryController::class, 'editReferenceBook'])->name('edit.reference.book');
    Route::post('/data/reference-book/post', [LibraryController::class, 'storeReferenceBook'])->name('store.reference.book');
    Route::post('/data/reference-book/update', [LibraryController::class, 'updateReferenceBook'])->name('update.reference.book');
    Route::delete('/delete/reference-book/{id}', [LibraryController::class, 'deleteReferenceBook'])->name('delete.reference.book');
    
    Route::get('/data/lemari-cd', [LibraryController::class, 'lemariCD'])->name('library.lemari.cd');
    Route::get('/data/lemari-cd/edit/{id}', [LibraryController::class, 'editLemariCD'])->name('edit.lemari.cd');
    Route::post('/data/lemari-cd/post', [LibraryController::class, 'storeLemariCD'])->name('store.lemari.cd');
    Route::post('/data/lemari-cd/update', [LibraryController::class, 'updateLemariCD'])->name('update.lemari.cd');
    Route::delete('/delete/lemari-cd/{id}', [LibraryController::class, 'deleteLemariCD'])->name('delete.lemari.cd');
    
    Route::get('/data/curriculum-old', [LibraryController::class, 'curriculumOld'])->name('library.curriculum.old');
    Route::get('/data/curriculum-old/edit/{id}', [LibraryController::class, 'editCurriculumOld'])->name('edit.curriculum.old');
    Route::post('/data/curriculum-old/post', [LibraryController::class, 'storeCurriculumOld'])->name('store.curriculum.old');
    Route::post('/data/curriculum-old/update', [LibraryController::class, 'updateCurriculumOld'])->name('update.curriculum.old');
    Route::delete('/delete/curriculum-old/{id}', [LibraryController::class, 'deleteCurriculumOld'])->name('delete.curriculum.old');
 
    Route::get('/reserve-book', [LibraryController::class, 'reserve'])->name('data.reserve.book');
    Route::post('/done-pick/{id}', [LibraryController::class, 'donePick'])->name('done.pick.book');
    Route::post('/done-return/{id}', [LibraryController::class, 'doneReturn'])->name('done.return.book');
    Route::post('/remind/{id}', [LibraryController::class, 'remind'])->name('remind.book');
   
 
    Route::get('/visitor', [LibraryController::class, 'visitor'])->name('visitor');
    Route::post('/visit-student', [LibraryController::class, 'visitStudent'])->name('visit.student');
    
    Route::get('/create-article-library',[LibraryController::class, 'articleAdmin'])->name('create.article.library');
    Route::get('/article/edit',[LibraryController::class, 'editArticle'])->name('edit.article.library');
    Route::post('/post-article',[LibraryController::class, 'storeArticle'])->name('store.article.library');
    Route::post('/update-article',[LibraryController::class, 'updateArticle'])->name('update.article.library');
    Route::delete('/delete-article/{id}',[LibraryController::class, 'deleteArticle'])->name('delete.article.library');
    Route::post('/upload-image-article', function (Request $request) {
       if ($request->hasFile('file')) {
          $file = $request->file('file');
          $path = $file->store('image-article', 'public'); // Simpan di storage/app/public/image-questions
          return response()->json(['link' => asset('storage/' . $path)]);
       }
       return response()->json(['error' => 'No file uploaded'], 400);
    })->name('upload.image.article');
 
    Route::get('/plan-visit', [LibraryController::class, 'dashboardPlanVisit']);
    Route::post('/confirm/plan/visit/{id}', [LibraryController::class, 'confirmPlanVisit'])->name('confirm.plan.visit');
    Route::post('/cancel/plan/visit/{id}', [LibraryController::class, 'cancelPlanVisit'])->name('cancel.plan.visit');
});
 
Route::get('/',[LibraryController::class, 'libraryPublic'])->name('library.public');
Route::get('/booking',[LibraryController::class, 'booking']);
Route::get('/explore-library',[LibraryController::class, 'explore']);
Route::get('/data/reserve/get/{id}',[LibraryController::class, 'getBook'])->name('get.reserve.book');
Route::post('/reserve-book',[LibraryController::class, 'reserveBook'])->name('reserve.book');
Route::get('/visit',[LibraryController::class, 'visit'])->name('visit.library');
Route::get('/article-library',[LibraryController::class, 'article'])->name('article.library');
Route::get('/facility',[LibraryController::class, 'facility'])->name('facility.library');
Route::post('/search-book',[LibraryController::class, 'search'])->name('search'); 
Route::post('/cancel/{id}', [LibraryController::class, 'cancel'])->name('cancel.book');
Route::post('/plan-visit', [LibraryController::class, 'planVisit'])->name('action.plan.visit');
Route::get('/others', [LibraryController::class, 'others'])->name('others');
