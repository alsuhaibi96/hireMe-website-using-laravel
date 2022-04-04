@extends('layouts.profile_layouts.profile_master')

    <!--nav-->

@section('content')
  

    <!-- Start Qualification Page  -->
    <h1 class="text-center text-white">اعدادت المؤهلات</h1>
    <div class="container pt-5">
        <div class="table-responsive">
            <table class="main-table manage-members text-center table table-bordered">
                <tr>
                    <td>ID</td>
                    <td>المؤهل</td>
                    <td>عام التخرج</td>
                    <td>جامعة - مركز</td>
                    <td>التحكم</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>بكالوريوس</td>
                    <td>2021 / 2020</td>
                    <td>جامعة ذمار</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>دبلوم سنتان بعد التخرج</td>
                    <td>2018 / 2017</td>
                    <td>المعهد التقني</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>دبلوم لغة انجليزية</td>
                    <td>2017 / 2016</td>
                    <td>مركز جامعة الحكمة</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>دبلوم لغة انجليزية</td>
                    <td>2017 / 2016</td>
                    <td>مركز جامعة الحكمة</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>دبلوم لغة انجليزية</td>
                    <td>2017 / 2016</td>
                    <td>مركز جامعة الحكمة</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
            </table>
        </div>
        <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
            class="fa fa-plus"></i> اضافة</a>
    </div>
    

    <!-- Modal Add New-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة المؤهل</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="skills.html" method="post">
                        <div class="mb-3 row">
                            <label for="qualification" class="col-sm-3 col-form-label">المؤهل</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="qualification" 
                                    placeholder="ادخل المؤهل" 
                                    >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="years" class="col-sm-3 col-form-label">عام التخرج</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="years" 
                                    placeholder="ادخل عام التخرج" 
                                    >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="company" class="col-sm-3 col-form-label">جامعة - مركز</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="company" 
                                    placeholder="ادخل الجامعة او المركز" 
                                    >
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
                    <h5 class="modal-title" id="staticBackdropLabel">تعديل المؤهل</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="skills.html" method="post">
                        <div class="mb-3 row">
                            <label for="Experience" class="col-sm-3 col-form-label">المؤهل</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="skill" 
                                    placeholder="ادخل المؤهل" 
                                  
                                  >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="years" class="col-sm-3 col-form-label">عام التخرج</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="years" 
                                    placeholder="ادخل عام التخرج" 
                                   >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="universtiy" class="col-sm-3 col-form-label">جامعة - مركز</label>
                            <div class="col-sm-9">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    id="universtiy" 
                                    placeholder="ادخل الجامعة او المركز" 
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

    <!-- End Qualification Page -->
@stop