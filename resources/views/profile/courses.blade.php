@extends('layouts.profile_layouts.profile_master')

    <!--nav-->

@section('content')

 

    <!-- Start Qualification Page  -->
    <h1 class="text-center text-white">اعدادت الدورات التدريبية </h1>
    <div class="container pt-5 ">
        <div class="table-responsive">
            <table class="main-table manage-members text-center table table-bordered ">
                <tr>
                    <td>ID</td>
                    <td>اسم الدورة </td>
                    <td>المعدل</td>
                    <td>اسم المركز</td>
                   
                    <td>تاريخ اكمال الدورة</td>
                    <td>التحكم</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>PHP</td>
                    <td>90%</td>
                    <td>General Telecommunication Center</td>
              
                    <td>01/01/2020</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>JavaScript</td>
                    <td>80%</td>
                    <td>General Telecommunication Center</td>
                  
                    <td>01/01/2020</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>WordPress</td>
                    <td>100%</td>
                    <td>General Telecommunication Center</td>
                
                    <td>01/01/2020</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>CSS</td>
                    <td>95%</td>
                    <td>General Telecommunication Center</td>
                
                    <td>01/01/2020</td>
                    <td>
                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal"><i
                                class="fa fa-edit"></i> تعديل</a>
                        <a href="#" class="btn btn-danger confirm"> <i class="fa fa-close"></i> حذف</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Node.js</td>
                    <td>95%</td>
                    <td>General Telecommunication Center</td>
             
                    <td>01/01/2020</td>
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
                    <h5 class="modal-title" id="exampleModalLabel">اضافة دورة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="skills.html" method="post">
                        <div class="mb-3 row">
                            <label for="courses" class="col-sm-3 col-form-label">اسم الدورة</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="courses" placeholder="ادخل اسم الدورة"
                                    >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="description" class="col-sm-3 col-form-label">المعدل</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="description" placeholder="ادخل المعدل"
                                    >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="institute" class="col-sm-3 col-form-label">اسم المركز</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="institute"
                                    placeholder="ادخل اسم المركز" >
                            </div>
                        </div>
                       
                        <div class="mb-3 row">
                            <label for="date" class="col-sm-3 col-form-label">تاريخ اكمال الدورة</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="date" placeholder="Enter Dating Completion"
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
                    <h5 class="modal-title" id="staticBackdropLabel">تعديل دورة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="skills.html" method="post">
                        <div class="mb-3 row">
                            <label for="course" class="col-sm-3 col-form-label">الدورة</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="course" placeholder="ادخل اسم الدورة"
                                    >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="desc" class="col-sm-3 col-form-label">المعدل</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="desc" placeholder="ادخل المعدل"
                                   >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="Institute" class="col-sm-3 col-form-label">اسم المركز</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="Institute"
                                    placeholder="ادخل اسم المركز">
                            </div>
                        </div>
                    
                        <div class="mb-3 row">
                            <label for="date" class="col-sm-3 col-form-label">تاريخ اكمال الدورة</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" id="date" placeholder="ادخل التاريخ" 
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