@extends('Admin.Admin_layout.MasterApp')
@section("title", "Translation")
@section("content")

        <!-- Translation Start -->
        <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <!-- Translation Table Start -->
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Translation List</h5>
                                        <!-- <div class="right-options">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">import</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Export</a>
                                                </li>
                                                <li>
                                                    <a class="btn btn-solid" href="add-new-product.html">Add Coupon</a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <!-- <div class="search-area mb-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type to search"
                                                aria-label="Recipient's username" aria-describedby="button-addon2">
                                            <button class="btn btn-solid" type="button"
                                                id="button-addon2">Clear</button>
                                        </div>
                                        <div class="filter-sec">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Product Filter</option>
                                                <option value="1">Product title A-Z</option>
                                                <option value="2">Product title Z-A</option>
                                                <option value="3">Created (oldest first)</option>
                                                <option value="4">Created (newest first)</option>
                                                <option value="5">Updated (oldest first)</option>
                                                <option value="6">Updated (newest first)</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table trans-table all-package theme-table" id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated checkall"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>User Key</span>
                                                            </div>
                                                        </th>
                                                        <th>Russian</th>
                                                        <th>Arabic</th>
                                                        <th>English</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-lists</span>
                                                            </div>
                                                        </td>

                                                        <td>список пользователей</td>

                                                        <td>.قوائم المستخدمين</td>

                                                        <td>user lists</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-first-name</span>
                                                            </div>
                                                        </td>

                                                        <td>имя пользователя</td>

                                                        <td>اسم المستخدم الأول</td>

                                                        <td>user first name</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-last-name</span>
                                                            </div>
                                                        </td>

                                                        <td>фамилия пользователя</td>

                                                        <td>اسم المستخدم الأخير</td>

                                                        <td>user last name</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-login</span>
                                                            </div>
                                                        </td>

                                                        <td>логин пользователя</td>

                                                        <td>دخول المستخدم</td>

                                                        <td>user login</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-add-product</span>
                                                            </div>
                                                        </td>

                                                        <td>добавить продукт</td>

                                                        <td>أضف المنتج</td>

                                                        <td>add product</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-orders-list</span>
                                                            </div>
                                                        </td>

                                                        <td>упорядоченный список</td>

                                                        <td>قائمة الأوامر</td>

                                                        <td>orders list</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-coupon-list</span>
                                                            </div>
                                                        </td>

                                                        <td>список купонов</td>

                                                        <td>قائمة القسائم</td>

                                                        <td>coupon list</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-new-password</span>
                                                            </div>
                                                        </td>

                                                        <td>пользователя новый пароль</td>

                                                        <td>.مستخدم جديد كلمة مرور</td>

                                                        <td>user new password</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-roles</span>
                                                            </div>
                                                        </td>

                                                        <td>роль пользователя</td>

                                                        <td>أدوار المستخدم</td>

                                                        <td>user roles</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-profile-information</span>
                                                            </div>
                                                        </td>

                                                        <td>информация профиля</td>

                                                        <td>معلومات التوصيف</td>

                                                        <td>profile information</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>admin:admin.button.delete</span>
                                                            </div>
                                                        </td>

                                                        <td>удалить</td>

                                                        <td>احذف</td>

                                                        <td>delete</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>admin:admin.button.save</span>
                                                            </div>
                                                        </td>

                                                        <td>спасать</td>

                                                        <td>احفظ</td>

                                                        <td>save</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>admin:admin.button.edit</span>
                                                            </div>
                                                        </td>

                                                        <td>редактировать</td>

                                                        <td>حرر</td>

                                                        <td>edit</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>admin:admin.tabs.general</span>
                                                            </div>
                                                        </td>

                                                        <td>главные вкладки</td>

                                                        <td>الألسنة العامة</td>

                                                        <td>general tabs</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>user:users.user-reset-password</span>
                                                            </div>
                                                        </td>

                                                        <td>сброс пароля</td>

                                                        <td>أعد ضبط كلمة السر</td>

                                                        <td>user reset password</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>category:categories.physical</span>
                                                            </div>
                                                        </td>

                                                        <td>физический</td>

                                                        <td>جسدي</td>

                                                        <td>physical</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>category:categories.digital</span>
                                                            </div>
                                                        </td>

                                                        <td>цифровой</td>

                                                        <td>رقمي</td>

                                                        <td>digital</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>category:categories.sub.category</span>
                                                            </div>
                                                        </td>

                                                        <td>промежуточная категория</td>

                                                        <td>الفئة الفرعيةر</td>

                                                        <td>sub category</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated check-it"
                                                                        type="checkbox" value="">
                                                                </span>
                                                                <span>media:media.dropzone</span>
                                                            </div>
                                                        </td>

                                                        <td>зона сброса</td>

                                                        <td>منطقة الإسقاط</td>

                                                        <td>dropzone</td>

                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Translation Table End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
            <!-- Translation End -->
        </div>
        <!-- Page Body End-->

@endsection