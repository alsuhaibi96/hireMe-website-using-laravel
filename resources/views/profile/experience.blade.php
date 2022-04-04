@extends('layouts.profile_layouts.profile_master')

    <!--nav-->

@section('content')
 
    <!-- Start Experience Page  -->
    <h1 class="text-center text-white">اعدادت الخبرات</h1>
    <div class="container pt-5">
        <div class="table-responsive">
            <table class="main-table manage-members text-center table table-bordered">
                <tr>
                    <td>ID</td>
                    <td>الخبرات</td>
                    <td>السنوات</td>
                    <td>الشركة</td>
         
                    <td>التحكم</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>تطوير مواقع</td>
                    <td>3 سنوات</td>
                    <td> شركة AZ Software </td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>تطوير مواقع</td>
                    <td>3 سنوات</td>
                    <td> شركة AZ Software </td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>تطوير مواقع</td>
                    <td>3 سنوات</td>
                    <td> شركة AZ Software </td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>تطوير مواقع</td>
                    <td>3 سنوات</td>
                    <td> شركة AZ Software </td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>تطوير مواقع</td>
                    <td>3 سنوات</td>
                    <td> شركة AZ Software </td>
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
    <!-- End Experience Page -->

    <!-- Modal Add New-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة خبرات</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="experience.html" method="post">
                        <div class="mb-3 row">
                            <label for="Experience" class="col-sm-3 col-form-label">التفاصيل</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="experience" placeholder="ادخل تفاصيل الخبرات">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="years" class="col-sm-3 col-form-label">عدد السنوات</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="years">
                                    <option value="1">سنة</option>
                                    <option value="2">سنتان</option>
                                    <option value="3">3 سنوات</option>
                                    <option value="4">4 سنوات</option>
                                    <option value="5">5 سنوات</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="company" class="col-sm-3 col-form-label">اسم الشركة</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="company" placeholder="ادخل اسم الشركة">
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
                    <h5 class="modal-title" id="staticBackdropLabel">تعديل الخبرات</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="experience.html" method="post">
                        <div class="mb-3 row">
                            <label for="Experience" class="col-sm-3 col-form-label">التفاصيل</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="experience">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="years" class="col-sm-3 col-form-label">عدد السنوات</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="years">
                                    <option value="1">سنة</option>
                                    <option value="2">سنتان</option>
                                    <option value="3">3 سنوات</option>
                                    <option value="4">4 سنوات</option>
                                    <option value="5">5 سنوات</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="company" class="col-sm-3 col-form-label">اسم الشركة</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="company" >
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
 
    @stop