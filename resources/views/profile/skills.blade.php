@extends('layouts.profile_layouts.profile_master')

    <!--nav-->

@section('content')
  

    <!-- Start Skills Page  -->
    <h1 class="text-center text-white">اعدادت المهارات</h1>
    <div class="container pt-5">
        <div class="table-responsive">
            <table class="main-table manage-members text-center table table-bordered">
                <tr>
                    <td>ID</td>
                    <td>اسم المهارة</td>
                    <td>الوصف</td>
                    <td>مستوى المهارة</td>
                    <td>التحكم</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Laravel PHP Framework</td>
                    <td>مطور مواقع</td>
                    <td>80%</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Flutter</td>
                    <td>مطور هواتف</td>
                    <td>90%</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Flutter</td>
                    <td>مطور هواتف</td>
                    <td>90%</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Flutter</td>
                    <td>مطور هواتف</td>
                    <td>90%</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Flutter</td>
                    <td>مطور هواتف</td>
                    <td>90%</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
            </table>
        </div>
        <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
            class="fa fa-plus"></i> اضافة جديد</a>
    </div>
    

    <!-- Modal Add New-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة مهارة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="skills.html" method="post">
                        <div class="mb-3 row">
                            <label for="Experience" class="col-sm-3 col-form-label">اسم المهارة</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="experience" placeholder="ادخل المهارة" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="years" class="col-sm-3 col-form-label">الوصف</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="experience" placeholder="ادخل الوصف" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="company" class="col-sm-3 col-form-label">مستوى المهارة</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="company" placeholder="ادخل المستوى اوالنسبة" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                            <button type="button" class="btn btn-primary">اضافة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Edit-->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">تعديل المهارة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="skills.html" method="post">
                        <div class="mb-3 row">
                            <label for="Experience" class="col-sm-3 col-form-label">اسم المهارة</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="skill" 
                                    placeholder="ادخل اسم المهارة" 
                                   >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="years" class="col-sm-3 col-form-label">الوصف</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="description" 
                                    placeholder="ادخل الوصف" 
                                   >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="company" class="col-sm-3 col-form-label">مستوى المهارة</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="level" 
                                    placeholder="ادخل المستوى" 
                                   >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                            <button type="button" class="btn btn-primary">تحديث</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Skills Page -->

 @stop