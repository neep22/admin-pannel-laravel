@extends('Admin.Admin_layout.MasterApp')
@section("title", "Media")
@section("content")

    <!-- Container-fluid starts-->
    <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title justify-content-start">
                                        <h5>Media Library</h5>
                                        <div class="selected-options">
                                            <ul>
                                                <li>selected(0)</li>
                                                <li><a href="#"><i class="ri-download-2-line"></i></a></li>
                                                <li><a href="#"><i class="ri-delete-bin-line"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="right-options ms-auto">
                                            <ul>
                                                <li>
                                                    <a class="btn btn-solid" href="javascript:void(0)"
                                                        data-bs-toggle="modal" data-bs-target="#mediaModel">Add
                                                        Media</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div
                                        class="row row-cols-xl-6 row-cols-md-5 row-cols-sm-3 row-cols-2 g-sm-3 g-2 media-library-sec ratio_square">
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox1" />
                                                <label for="myCheckbox1">
                                                    <div>
                                                        <img src="assets/images/product/1.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox2" />
                                                <label for="myCheckbox2">
                                                    <div>
                                                        <img src="assets/images/product/2.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox3" />
                                                <label for="myCheckbox3">
                                                    <div>
                                                        <img src="assets/images/product/3.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox4" />
                                                <label for="myCheckbox4">
                                                    <div>
                                                        <img src="assets/images/product/4.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox5" />
                                                <label for="myCheckbox5">
                                                    <div>
                                                        <img src="assets/images/product/5.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox6" />
                                                <label for="myCheckbox6">
                                                    <div>
                                                        <img src="assets/images/product/6.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox7" />
                                                <label for="myCheckbox7">
                                                    <div>
                                                        <img src="assets/images/product/7.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox8" />
                                                <label for="myCheckbox8">
                                                    <div>
                                                        <img src="assets/images/product/8.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox9" />
                                                <label for="myCheckbox9">
                                                    <div>
                                                        <img src="assets/images/product/9.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox10" />
                                                <label for="myCheckbox10">
                                                    <div>
                                                        <img src="assets/images/product/10.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox11" />
                                                <label for="myCheckbox11">
                                                    <div>
                                                        <img src="assets/images/product/14.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox12" />
                                                <label for="myCheckbox12">
                                                    <div>
                                                        <img src="assets/images/product/13.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox13" />
                                                <label for="myCheckbox13">
                                                    <div>
                                                        <img src="assets/images/product/16.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="library-box">
                                                <input type="checkbox" id="myCheckbox14" />
                                                <label for="myCheckbox14">
                                                    <div>
                                                        <img src="assets/images/product/20.png"
                                                            class="img-fluid bg-img bg_size_content" alt="">
                                                    </div>
                                                    <div class="dropdown">
                                                        <a class="" href="#" role="button" id="dropdownMenuLink"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                            aria-labelledby="dropdownMenuLink">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-download-2-line me-2"></i>Download</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#"><i
                                                                        class="ri-delete-bin-line me-2"></i>Delete</a>
                                                            </li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
        </div>

@endsection