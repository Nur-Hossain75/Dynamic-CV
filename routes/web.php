<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CoantactController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\InformationBoxController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\SkillCategoryController;
use App\Http\Controllers\SkillController;
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

Route::get('/',[HomeController::class,'index'])->name('home.page');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'
])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/crate/profile',[ProfileController::class,'index'])->name('create.profile');
    Route::post('/add/profile',[ProfileController::class,'add'])->name('add.profile');
    Route::get('/manage/profile',[ProfileController::class,'manage'])->name('manage.profile');
    Route::get('/detail/profile/{id}',[ProfileController::class,'detail'])->name('profile.detail');
    Route::get('/edit/profile/{id}',[ProfileController::class,'edit'])->name('profile.edit');
    Route::post('/update/profile/{id}',[ProfileController::class,'update'])->name('update.profile');
    Route::get('/delete/profile/{id}',[ProfileController::class,'delete'])->name('profile.delete');

    Route::get('/crate/contact',[CoantactController::class,'index'])->name('create.contact');
    Route::post('/add/contact',[CoantactController::class,'add'])->name('add.contact');
    Route::get('/manage/contact',[CoantactController::class,'manage'])->name('manage.contact');
    Route::get('/edit/contact/{id}',[CoantactController::class,'edit'])->name('contact.edit');
    Route::post('/update/contact/{id}',[CoantactController::class,'update'])->name('update.contact');
    Route::get('/delete/contact/{id}',[CoantactController::class,'delete'])->name('contact.delete');

    Route::get('/create/education_infu',[EducationController::class,'index'])->name('create.edu_info');
    Route::post('/add/eduInfu',[EducationController::class,'add'])->name('add.edu_info');
    Route::get('/add/manage_education',[EducationController::class,'manage'])->name('manage.edu_info');
    Route::get('/edit/manage_education/{id}',[EducationController::class,'edit'])->name('edit.edu_info');
    Route::post('/update/manage_education/{id}',[EducationController::class,'update'])->name('update.education');
    Route::get('/delete/manage_education/{id}',[EducationController::class,'delete'])->name('delete.edu_info');

    Route::get('/create/certificate',[CertificateController::class,'index'])->name('create.certificate');
    Route::post('/add/certificate',[CertificateController::class,'add'])->name('add.certificate');
    Route::get('/manage/certificate',[CertificateController::class,'manage'])->name('manage.certificate');
    Route::get('/edit/certificate/{id}',[CertificateController::class,'edit'])->name('edit.certificate');
    Route::post('/update/certificate/{id}',[CertificateController::class,'update'])->name('update.certificate');
    Route::get('/delete/certificate/{id}',[CertificateController::class,'delete'])->name('delete.certificate');

    Route::get('/create/project',[ProjectController::class,'index'])->name('create.project');
    Route::post('/add/project',[ ProjectController ::class,'add'])->name('add.project');
    Route::get('/manage/project',[ ProjectController ::class,'manage'])->name('manage.project');
    Route::get('/edit/project/{id}',[ ProjectController ::class,'edit'])->name('edit.project');
    Route::post('/update/project/{id}',[ProjectController::class,'update'])->name('update.project');
    Route::get('/delete/project/{id}',[ProjectController::class,'delete'])->name('delete.project');

    Route::get('/create/skill-category',[SkillCategoryController::class,'index'])->name('create.skill-category');
    Route::post('/add/skill-category',[ SkillCategoryController ::class,'add'])->name('add.skill-category');
    Route::get('/manage/skill-category',[ SkillCategoryController ::class,'manage'])->name('manage.skill-category');
    Route::get('/edit/skill-category/{id}',[ SkillCategoryController ::class,'edit'])->name('edit.skill_category');
    Route::post('/update/skill-category/{id}',[ SkillCategoryController ::class,'update'])->name('update.skill_category');
    Route::get('/delete/skill-category/{id}',[ SkillCategoryController ::class,'delete'])->name('delete.skill_category');

    Route::get('/create/skill',[SkillController::class,'index'])->name('create.skill');
    Route::post('/add/skill',[ SkillController ::class,'add'])->name('add.skill');
    Route::get('/manage/skill',[ SkillController ::class,'manage'])->name('manage.skill');
    Route::get('/edit/skill/{id}',[ SkillController ::class,'edit'])->name('edit.skill');
    Route::get('/delete/skill/{id}',[ SkillController ::class,'delete'])->name('delete.skill');
    Route::get('/edit/skill/{id}',[ SkillController ::class,'edit'])->name('edit.skill');
    Route::post('/update/skill/{id}',[ SkillController ::class,'update'])->name('update.skill');
    Route::get('/delete/skill/{id}',[ SkillController ::class,'delete'])->name('delete.skill');
    
    Route::get('/create/information',[InformationBoxController::class,'index'])->name('create.information');
    Route::post('/add/information',[ InformationBoxController ::class,'add'])->name('add.information');
    Route::get('/manage/information',[ InformationBoxController ::class,'manage'])->name('manage.information');
    Route::get('/edit/information/{id}',[ InformationBoxController ::class,'edit'])->name('edit.information');
    Route::post('/update/information/{id}',[ InformationBoxController ::class,'update'])->name('update.information');
    Route::get('/delete/information/{id}',[ InformationBoxController ::class,'delete'])->name('delete.information');
    
    Route::get('/create/reference',[ReferenceController::class,'index'])->name('create.reference');
    Route::post('/add/reference',[ReferenceController ::class,'add'])->name('add.reference');
    Route::get('/manage/reference',[ReferenceController ::class,'manage'])->name('manage.reference');
    Route::get('/edit/reference/{id}',[ReferenceController ::class,'edit'])->name('edit.reference');
    Route::post('/update/reference/{id}',[ReferenceController ::class,'update'])->name('update.reference');
    Route::get('/delete/reference/{id}',[ReferenceController ::class,'delete'])->name('delete.reference');
    
});
