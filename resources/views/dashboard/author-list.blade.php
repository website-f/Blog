@extends('partial.dashboardmain')

@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
<main>

    <!-- =======================
    Author list START -->
    <section class="py-4">
        <div class="container">
        <!-- Author list title START -->
            <div class="row g-4 pb-4">
                <div class="col-12">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <h1 class="mb-sm-0 h2">Author list</h1>			
                        <a href="#" class="btn btn-sm btn-primary mb-0"><i class="fas fa-plus me-2"></i>Add new author</a>
                    </div>
                </div>
            </div>
            <!-- Author list title START -->
            <div class="row g-4">
                <div class="col-12">
                    <!-- Card START -->
                    <div class="card border">
                        <!-- Card header START -->
                        <div class="card-header border-bottom p-3">
                            <!-- Search and select START -->
                            <div class="row g-3 align-items-center justify-content-between">
                                <!-- Search bar -->
                                <div class="col-md-8">
                                    <form class="rounded position-relative">
                                        <input class="form-control bg-transparent" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 "></i></button>
                                    </form>
                                </div>
                                <!-- Tab buttons -->
                                <div class="col-md-3">
                                    <!-- Tabs START -->
                                    <ul class="list-inline mb-0 nav nav-pills nav-pill-dark-soft border-0 justify-content-end" id="pills-tab" role="tablist">
                                        <!-- Grid tab -->
                                        <li class="nav-item">
                                            <a href="#nav-list-tab" class="nav-link mb-0 me-2 active" data-bs-toggle="tab">
                                                <i class="fas fa-fw fa-list-ul"></i>
                                            </a>
                                        </li>
                                        <!-- List tab -->
                                        <li class="nav-item">
                                            <a href="#nav-grid-tab" class="nav-link mb-0" data-bs-toggle="tab">
                                                <i class="fas fa-fw fa-th-large"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tabs end -->
                                </div>
                            </div>
                            <!-- Search and select END -->
                        </div>
                        <!-- Card header END -->
    
                        <!-- Card body START -->
                        <div class="card-body p-3 pb-0">
                            <!-- Tabs content START -->
                            <div class="tab-content py-0 my-0">
    
                                <!-- Tabs content item START -->
                                <div class="tab-pane fade show active" id="nav-list-tab">
                                    <!-- Table START -->
                                    <div class="table-responsive border-0">
                                        <table class="table align-middle p-4 mb-0 table-hover">
                                            <!-- Table head -->
                                            <thead class="table-dark">
                                                <tr>
                                                    <th scope="col" class="border-0 rounded-start">Author name</th>
                                                    <th scope="col" class="border-0">Join date</th>
                                                    <th scope="col" class="border-0">Total post</th>
                                                    <th scope="col" class="border-0">Total followers</th>
                                                    <th scope="col" class="border-0">Payment</th>
                                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                                </tr>
                                            </thead>
    
                                            <!-- Table body START -->
                                            <tbody class="border-top-0">
                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <div class="d-flex align-items-center position-relative">
                                                            <!-- Image -->
                                                            <div class="avatar avatar-md">
                                                                <img src="assets/images/avatar/09.jpg" class="rounded-circle" alt="">
                                                            </div>
                                                            <div class="mb-0 ms-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0"><a href="#" class="stretched-link">Lori Stevens</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>Jan 22, 2022</td>
                                                    <!-- Table data -->
                                                    <td>256</td>
                                                    <!-- Table data -->
                                                    <td>5,354</td>
                                                    <!-- Table data -->
                                                    <td>
                                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Paid</span>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>
                              <div class="d-flex gap-2">
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
                                  <i class="bi bi-envelope"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Block" aria-label="Block">
                                  <i class="fas fa-ban"></i>
                                </a>
                              </div>
                                                    </td>
                                                </tr>
    
                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <div class="d-flex align-items-center position-relative">
                                                            <!-- Image -->
                                                            <div class="avatar avatar-md">
                                                                <img src="assets/images/avatar/01.jpg" class="rounded-circle" alt="">
                                                            </div>
                                                            <div class="mb-0 ms-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0"><a href="#" class="stretched-link">Carolyn Ortiz</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>Jan 19, 2022</td>
                                                    <!-- Table data -->
                                                    <td>56</td>
                                                    <!-- Table data -->
                                                    <td>15,523</td>
                                                    <!-- Table data -->
                                                    <td>
                                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Paid</span>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>
                              <div class="d-flex gap-2">
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
                                  <i class="bi bi-envelope"></i>
                                </a>
                                <a href="#" class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Unblock" aria-label="Block">
                                  <i class="fas fa-ban"></i>
                                </a>
                              </div>
                                                    </td>
                                                </tr>
    
                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <div class="d-flex align-items-center position-relative">
                                                            <!-- Image -->
                                                            <div class="avatar avatar-md">
                                                                <img src="assets/images/avatar/03.jpg" class="rounded-circle" alt="">
                                                            </div>
                                                            <div class="mb-0 ms-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0"><a href="#" class="stretched-link">Dennis Barrett</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>Nov 11, 2022</td>
                                                    <!-- Table data -->
                                                    <td>98</td>
                                                    <!-- Table data -->
                                                    <td>2,546</td>
                                                    <!-- Table data -->
                                                    <td>
                                                        <span class="badge bg-warning bg-opacity-15 text-warning mb-2">Pending</span>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>
                              <div class="d-flex gap-2">
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
                                  <i class="bi bi-envelope"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Block" aria-label="Block">
                                  <i class="fas fa-ban"></i>
                                </a>
                              </div>
                                                    </td>
                                                </tr>
    
                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <div class="d-flex align-items-center position-relative">
                                                            <!-- Image -->
                                                            <div class="avatar avatar-md">
                                                                <img src="assets/images/avatar/04.jpg" class="rounded-circle" alt="">
                                                            </div>
                                                            <div class="mb-0 ms-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0"><a href="#" class="stretched-link">Billy Vasquez</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>Jan 22, 2022</td>
                                                    <!-- Table data -->
                                                    <td>1258</td>
                                                    <!-- Table data -->
                                                    <td>12,786</td>
                                                    <!-- Table data -->
                                                    <td>
                                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Paid</span>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>
                              <div class="d-flex gap-2">
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
                                  <i class="bi bi-envelope"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Block" aria-label="Block">
                                  <i class="fas fa-ban"></i>
                                </a>
                              </div>
                                                    </td>
                                                </tr>
    
                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <div class="d-flex align-items-center position-relative">
                                                            <!-- Image -->
                                                            <div class="avatar avatar-md">
                                                                <img src="assets/images/avatar/05.jpg" class="rounded-circle" alt="">
                                                            </div>
                                                            <div class="mb-0 ms-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0"><a href="#" class="stretched-link">Jacqueline Miller</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>Jan 29, 2022</td>
                                                    <!-- Table data -->
                                                    <td>2568</td>
                                                    <!-- Table data -->
                                                    <td>21,245</td>
                                                    <!-- Table data -->
                                                    <td>
                                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Paid</span>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>
                              <div class="d-flex gap-2">
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
                                  <i class="bi bi-envelope"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Block" aria-label="Block">
                                  <i class="fas fa-ban"></i>
                                </a>
                              </div>
                                                    </td>
                                                </tr>
    
                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <div class="d-flex align-items-center position-relative">
                                                            <!-- Image -->
                                                            <div class="avatar avatar-md">
                                                                <img src="assets/images/avatar/06.jpg" class="rounded-circle" alt="">
                                                            </div>
                                                            <div class="mb-0 ms-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0"><a href="#" class="stretched-link">Amanda Reed</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td class="text-center text-sm-start">Apr 25 2022</td>
                                                    <!-- Table data -->
                                                    <td>895</td>
                                                    <!-- Table data -->
                                                    <td>8,546</td>
                                                    <!-- Table data -->
                                                    <td>
                                                        <span class="badge bg-success bg-opacity-10 text-success mb-2">Paid</span>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>
                              <div class="d-flex gap-2">
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
                                  <i class="bi bi-envelope"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Block" aria-label="Block">
                                  <i class="fas fa-ban"></i>
                                </a>
                              </div>
                                                    </td>
                                                </tr>
    
                                                <!-- Table row -->
                                                <tr>
                                                    <!-- Table data -->
                                                    <td>
                                                        <div class="d-flex align-items-center position-relative">
                                                            <!-- Image -->
                                                            <div class="avatar avatar-md">
                                                                <img src="assets/images/avatar/07.jpg" class="rounded-circle" alt="">
                                                            </div>
                                                            <div class="mb-0 ms-2">
                                                                <!-- Title -->
                                                                <h6 class="mb-0"><a href="#" class="stretched-link">Samuel Bishop</a></h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>Mar 17 2022</td>
                                                    <!-- Table data -->
                                                    <td>856</td>
                                                    <!-- Table data -->
                                                    <td>5,354</td>
                                                    <!-- Table data -->
                                                    <td>
                                                        <span class="badge bg-danger bg-opacity-10 text-danger mb-2">Cancel</span>
                                                    </td>
                                                    <!-- Table data -->
                                                    <td>
                              <div class="d-flex gap-2">
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Message" aria-label="Message">
                                  <i class="bi bi-envelope"></i>
                                </a>
                                <a href="#" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Block" aria-label="Block">
                                  <i class="fas fa-ban"></i>
                                </a>
                              </div>
                                                    </td>
                                                </tr>
    
                                            </tbody>
                                            <!-- Table body END -->
                                        </table>
                                    </div>
                                    <!-- Table END -->
                                </div>
                                <!-- Tabs content item END -->
    
                                <!-- Tabs content item START -->
                                <div class="tab-pane fade" id="nav-grid-tab">
                                    <div class="row g-4">
    
                                        <!-- Card item START -->
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card border p-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <!-- avatar -->
                                                        <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/10.jpg" alt="">
                                                        </div>
                                                        <!-- Connections holder -->
                                                        <div class="flex-grow-1 d-block">
                                                            <h5 class="mb-1"><a href="#">Frances Guerrero</a></h5>
                                                            <div class="small">Editor at Blogzine</div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Followers and Post -->
                                                    <div class="d-sm-flex justify-content-sm-between mt-3">
                                                        <!-- Followers -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-people-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">5,354</h5>
                                                                <h6 class="mb-0 fw-light">Followers</h6>
                                                            </div>
                                                        </div>
    
                                                        <!-- Total post -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-file-earmark-text-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">846</h5>
                                                                <h6 class="mb-0 fw-light">Total Blogs</h6>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Buttons -->
                                                    <div class="d-sm-flex gap-2 mt-4">
                                                        <a href="#" class="btn btn-primary-soft w-100">
                                                            <i class="fab fa-facebook-messenger pe-2"></i> Message
                                                        </a>
                                                        <a href="#" class="btn btn-danger-soft w-100">
                                                            <i class="fas fa-ban pe-2"></i> Block
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
    
                                        <!-- Card item START -->
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card border p-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <!-- avatar -->
                                                        <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="">
                                                        </div>
                                                        <!-- Connections holder -->
                                                        <div class="flex-grow-1 d-block">
                                                            <h5 class="mb-1"><a href="#">Carolyn Ortiz</a></h5>
                                                            <div class="small">Editor at eduport</div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Followers and Post -->
                                                    <div class="d-sm-flex justify-content-sm-between mt-3">
                                                        <!-- Followers -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-people-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">2,545</h5>
                                                                <h6 class="mb-0 fw-light">Followers</h6>
                                                            </div>
                                                        </div>
    
                                                        <!-- Total post -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-file-earmark-text-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">586</h5>
                                                                <h6 class="mb-0 fw-light">Total Blogs</h6>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Buttons -->
                                                    <div class="d-sm-flex gap-2 mt-4">
                                                        <a href="#" class="btn btn-primary-soft w-100">
                                                            <i class="fab fa-facebook-messenger pe-2"></i> Message
                                                        </a>
                                                        <a href="#" class="btn btn-danger-soft w-100">
                                                            <i class="fas fa-ban pe-2"></i> Block
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
    
                                        <!-- Card item START -->
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card border p-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <!-- avatar -->
                                                        <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="">
                                                        </div>
                                                        <!-- Connections holder -->
                                                        <div class="flex-grow-1 d-block">
                                                            <h5 class="mb-1"><a href="#">Louis Ferguson</a></h5>
                                                            <div class="small">Editor at folio</div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Followers and Post -->
                                                    <div class="d-sm-flex justify-content-sm-between mt-3">
                                                        <!-- Followers -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-people-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">3,546</h5>
                                                                <h6 class="mb-0 fw-light">Followers</h6>
                                                            </div>
                                                        </div>
    
                                                        <!-- Total post -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-file-earmark-text-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">786</h5>
                                                                <h6 class="mb-0 fw-light">Total Blogs</h6>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Buttons -->
                                                    <div class="d-sm-flex gap-2 mt-4">
                                                        <a href="#" class="btn btn-primary-soft w-100">
                                                            <i class="fab fa-facebook-messenger pe-2"></i> Message
                                                        </a>
                                                        <a href="#" class="btn btn-danger-soft w-100">
                                                            <i class="fas fa-ban pe-2"></i> Block
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
    
                                        <!-- Card item START -->
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card border p-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <!-- avatar -->
                                                        <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="">
                                                        </div>
                                                        <!-- Connections holder -->
                                                        <div class="flex-grow-1 d-block">
                                                            <h5 class="mb-1"><a href="#">Billy Vasquez</a></h5>
                                                            <div class="small">Editor at Wizixo</div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Followers and Post -->
                                                    <div class="d-sm-flex justify-content-sm-between mt-3">
                                                        <!-- Followers -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-people-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">6,586</h5>
                                                                <h6 class="mb-0 fw-light">Followers</h6>
                                                            </div>
                                                        </div>
    
                                                        <!-- Total post -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-file-earmark-text-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">1,235</h5>
                                                                <h6 class="mb-0 fw-light">Total Blogs</h6>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Buttons -->
                                                    <div class="d-sm-flex gap-2 mt-4">
                                                        <a href="#" class="btn btn-primary-soft w-100">
                                                            <i class="fab fa-facebook-messenger pe-2"></i> Message
                                                        </a>
                                                        <a href="#" class="btn btn-danger-soft w-100">
                                                            <i class="fas fa-ban pe-2"></i> Block
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
    
                                        <!-- Card item START -->
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card border p-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <!-- avatar -->
                                                        <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="">
                                                        </div>
                                                        <!-- Connections holder -->
                                                        <div class="flex-grow-1 d-block">
                                                            <h5 class="mb-1"><a href="#">Samuel Bishop</a></h5>
                                                            <div class="small">Editor at Realty</div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Followers and Post -->
                                                    <div class="d-sm-flex justify-content-sm-between mt-3">
                                                        <!-- Followers -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-people-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">996</h5>
                                                                <h6 class="mb-0 fw-light">Followers</h6>
                                                            </div>
                                                        </div>
    
                                                        <!-- Total post -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-file-earmark-text-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">156</h5>
                                                                <h6 class="mb-0 fw-light">Total Blogs</h6>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Buttons -->
                                                    <div class="d-sm-flex gap-2 mt-4">
                                                        <a href="#" class="btn btn-primary-soft w-100">
                                                            <i class="fab fa-facebook-messenger pe-2"></i> Message
                                                        </a>
                                                        <a href="#" class="btn btn-danger-soft w-100">
                                                            <i class="fas fa-ban pe-2"></i> Block
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
    
                                        <!-- Card item START -->
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card border p-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <!-- avatar -->
                                                        <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="">
                                                        </div>
                                                        <!-- Connections holder -->
                                                        <div class="flex-grow-1 d-block">
                                                            <h5 class="mb-1"><a href="#">Amanda Reed</a></h5>
                                                            <div class="small">Editor at Blogzine</div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Followers and Post -->
                                                    <div class="d-sm-flex justify-content-sm-between mt-3">
                                                        <!-- Followers -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-people-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">2,586</h5>
                                                                <h6 class="mb-0 fw-light">Followers</h6>
                                                            </div>
                                                        </div>
    
                                                        <!-- Total post -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-file-earmark-text-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">665</h5>
                                                                <h6 class="mb-0 fw-light">Total Blogs</h6>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Buttons -->
                                                    <div class="d-sm-flex gap-2 mt-4">
                                                        <a href="#" class="btn btn-primary-soft w-100">
                                                            <i class="fab fa-facebook-messenger pe-2"></i> Message
                                                        </a>
                                                        <a href="#" class="btn btn-danger-soft w-100">
                                                            <i class="fas fa-ban pe-2"></i> Block
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
    
                                        <!-- Card item START -->
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card border p-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <!-- avatar -->
                                                        <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="">
                                                        </div>
                                                        <!-- Connections holder -->
                                                        <div class="flex-grow-1 d-block">
                                                            <h5 class="mb-1"><a href="#">Lori Stevens</a></h5>
                                                            <div class="small">Editor at Eduport</div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Followers and Post -->
                                                    <div class="d-sm-flex justify-content-sm-between mt-3">
                                                        <!-- Followers -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-people-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">1,586</h5>
                                                                <h6 class="mb-0 fw-light">Followers</h6>
                                                            </div>
                                                        </div>
    
                                                        <!-- Total post -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-file-earmark-text-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">458</h5>
                                                                <h6 class="mb-0 fw-light">Total Blogs</h6>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Buttons -->
                                                    <div class="d-sm-flex gap-2 mt-4">
                                                        <a href="#" class="btn btn-primary-soft w-100">
                                                            <i class="fab fa-facebook-messenger pe-2"></i> Message
                                                        </a>
                                                        <a href="#" class="btn btn-danger-soft w-100">
                                                            <i class="fas fa-ban pe-2"></i> Block
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
    
                                        <!-- Card item START -->
                                        <div class="col-md-6 col-xl-4">
                                            <div class="card border p-2">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <!-- avatar -->
                                                        <div class="avatar avatar-lg me-3 flex-shrink-0">
                                                            <img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="">
                                                        </div>
                                                        <!-- Connections holder -->
                                                        <div class="flex-grow-1 d-block">
                                                            <h5 class="mb-1"><a href="#">Jacqueline Miller</a></h5>
                                                            <div class="small">Editor at Blogzine</div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Followers and Post -->
                                                    <div class="d-sm-flex justify-content-sm-between mt-3">
                                                        <!-- Followers -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-people-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">9,586</h5>
                                                                <h6 class="mb-0 fw-light">Followers</h6>
                                                            </div>
                                                        </div>
    
                                                        <!-- Total post -->
                                                        <div class="d-flex text-start align-items-center mt-3">
                                                            <div class="icon-md bg-light text-body rounded-circle flex-shrink-0">
                                                                <i class="bi bi-file-earmark-text-fill fa-fw"></i>
                                                            </div>
                                                            <div class="ms-2">
                                                                <h5 class="mb-0">2,586</h5>
                                                                <h6 class="mb-0 fw-light">Total Blogs</h6>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <!-- Buttons -->
                                                    <div class="d-sm-flex gap-2 mt-4">
                                                        <a href="#" class="btn btn-primary-soft w-100">
                                                            <i class="fab fa-facebook-messenger pe-2"></i> Message
                                                        </a>
                                                        <a href="#" class="btn btn-danger-soft w-100">
                                                            <i class="fas fa-ban pe-2"></i> Block
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card item END -->
    
                                    </div> <!-- Row END -->
                                </div>
                                <!-- Tabs content item END -->
    
                            </div>
                            <!-- Tabs content END -->
                        </div>
                        <!-- Card body END -->
    
                        <!-- Card Footer START -->
                        <div class="card-footer p-3">
                            <!-- Pagination START -->
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                <!-- Content -->
                                <p class="mb-sm-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
                                <!-- Pagination -->
                                <nav class="mb-sm-0 d-flex justify-content-center" aria-label="navigation">
                                    <ul class="pagination pagination-sm pagination-bordered mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Pagination END -->
                        </div>
                        <!-- Card Footer END -->
                    </div>
                    <!-- Card END -->
                </div>
                
                <div class="col-12">
                    <!-- Card START -->
                    <div class="card border">
    
                        <!-- Card header START -->
                        <div class="card-header border-bottom p-3">
                            <h5 class="mb-2 mb-sm-0">New requests</h5>
                        </div>
                        <!-- Card header END -->
    
                        <!-- Card body START -->
                        <div class="card-body p-3">
                            <!-- Table START -->
                            <div class="table-responsive border-0">
                                <table class="table align-middle p-4 mb-0 table-hover">
                                    <!-- Table head -->
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" class="border-0 rounded-start">Author name</th>
                                            <th scope="col" class="border-0">Apply date</th>
                                            <th scope="col" class="border-0">Company</th>
                                            <th scope="col" class="border-0 rounded-end">Action</th>
                                        </tr>
                                    </thead>
    
                                    <!-- Table body START -->
                                    <tbody class="border-top-0">
                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/avatar/04.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">Billy Vasquez</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Table data -->
                                            <td>Jan 22, 2022</td>
                                            <!-- Table data -->
                                            <td>Blogzine</td>
                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success-soft me-1 mb-1 mb-lg-0">Accept</a>
                                                <a href="#" class="btn btn-sm btn-secondary-soft me-1 mb-1 mb-lg-0">Reject</a>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-0">View App</a>
                                            </td>
                                        </tr>
    
                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/avatar/05.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">Jacqueline Miller</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Table data -->
                                            <td>Jan 29, 2022</td>
                                            <!-- Table data -->
                                            <td>Wizixo</td>
                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success-soft me-1 mb-1 mb-lg-0">Accept</a>
                                                <a href="#" class="btn btn-sm btn-secondary-soft me-1 mb-1 mb-lg-0">Reject</a>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-0">View App</a>
                                            </td>
                                        </tr>
    
                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/avatar/06.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">Amanda Reed</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Table data -->
                                            <td class="text-center text-sm-start">Apr 25 2022</td>
                                            <!-- Table data -->
                                            <td>Eduport</td>
                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-success me-1 mb-1 mb-md-0 disabled">Accepted</a>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-0" data-bs-toggle="modal" data-bs-target="#appDetail">View App</a>
                                            </td>
                                        </tr>
    
                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class="d-flex align-items-center position-relative">
                                                    <!-- Image -->
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/avatar/07.jpg" class="rounded-circle" alt="">
                                                    </div>
                                                    <div class="mb-0 ms-2">
                                                        <!-- Title -->
                                                        <h6 class="mb-0"><a href="#" class="stretched-link">Samuel Bishop</a></h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- Table data -->
                                            <td>Mar 17 2022</td>
                                            <!-- Table data -->
                                            <td>Folio</td>
                                            <!-- Table data -->
                                            <td>
                                                <a href="#" class="btn btn-sm btn-secondary me-1 mb-1 mb-md-0 disabled">Rejected</a>
                                                <a href="#" class="btn btn-sm btn-primary-soft me-1 mb-0" data-bs-toggle="modal" data-bs-target="#appDetail">View App</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                            </div>
                            <!-- Table END -->
                        </div>
                        <!-- Card body END -->
                    </div>
                    <!-- Card END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Author list END -->
    
    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection