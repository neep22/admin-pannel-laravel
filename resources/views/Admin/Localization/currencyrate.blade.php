@extends('Admin.Admin_layout.MasterApp')
@section("title", "Currency Rate")
@section("content")

    <!-- Container-fluid starts-->
    <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <!-- Table Start -->
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Translation List</h5>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table id="table_id" class="table rate-table all-package theme-table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div class="check-box-contain">
                                                                <span class="form-check user-checkbox">
                                                                    <input class="checkbox_animated checkall"
                                                                        type="checkbox">
                                                                </span>
                                                                <span>Currency Title</span>
                                                            </div>
                                                        </th>
                                                        <th>USD</th>
                                                        <th>Code</th>
                                                        <th>Exchange Rate</th>
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
                                                                <span>Us Dollar</span>
                                                            </div>
                                                        </td>
                                                        <td>2.4512478</td>
                                                        <td>USD</td>
                                                        <td>0.57912364</td>
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
                                                                <span>Afghanistan Afghani</span>
                                                            </div>
                                                        </td>
                                                        <td>5.14761214</td>
                                                        <td>AFN</td>
                                                        <td>1.05761432</td>
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
                                                                <span>United Arab Emirates Dirham</span>
                                                            </div>
                                                        </td>
                                                        <td>12.02646581</td>
                                                        <td>AED</td>
                                                        <td>0.15642465</td>
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
                                                                <span>European Union</span>
                                                            </div>
                                                        </td>
                                                        <td>8.124712425</td>
                                                        <td>EUR</td>
                                                        <td>0.187541231</td>
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
                                                                <span>Japanese</span>
                                                            </div>
                                                        </td>
                                                        <td>10.78422121</td>
                                                        <td>JPY</td>
                                                        <td>3.8425110221</td>
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
                                                                <span>Great Britain Pound</span>
                                                            </div>
                                                        </td>

                                                        <td>7.1246121152</td>

                                                        <td>GBP</td>

                                                        <td>0.25522648</td>

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
                                <!-- Table End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
        </div>
        <!-- Page Body End -->

@endsection