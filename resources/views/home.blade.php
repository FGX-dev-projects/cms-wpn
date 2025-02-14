@section('title', 'Countries')

@extends('layouts.app')
@section('content')
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-3">
                <div class="card mb-4 rounded-12 shadow">
                    <div class="card-body p-3 p-xl-3 p-xxl-4">
                        <div class="row align-items-center">
                            <div class="col-5 col-xxl-6">
                                <span class="caption text-gray-600 d-block mb-1">Page views</span>
                                <span class="h3 mb-0">37,543</span>
                                <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1"
                                                                                           xmlns="http://www.w3.org/2000/svg"
                                                                                           width="14" height="14"
                                                                                           viewBox="0 0 16 16">
                    <g data-name="icons/tabler/trend-up" transform="translate(0)">
                      <rect data-name="Icons/Tabler/Trend background" width="16" height="16" fill="none"/>
                      <path
                          d="M.249,9.315.18,9.256a.616.616,0,0,1-.059-.8L.18,8.385,5.1,3.462A.616.616,0,0,1,5.9,3.4l.068.059L8.821,6.309,13.9,1.231H9.641A.616.616,0,0,1,9.031.7L9.025.616a.617.617,0,0,1,.532-.61L9.641,0h5.728a.614.614,0,0,1,.569.346h0l0,.008,0,.008h0a.613.613,0,0,1,.048.168V.541A.621.621,0,0,1,16,.61V6.359a.616.616,0,0,1-1.226.083l-.005-.083V2.1L9.256,7.615a.616.616,0,0,1-.8.059l-.069-.059L5.539,4.768,1.05,9.256a.615.615,0,0,1-.8.059Z"
                          transform="translate(0 3)" fill="#20C997"/>
                    </g>
                  </svg> 12.54</span>
                            </div>
                            <div class="col-7 col-xxl-6 px-xxl-0">
                                <div id="MuzeDoubleLine"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-3">
                <div class="card mb-4 rounded-12 shadow">
                    <div class="card-body p-3 p-xl-3 p-xxl-4">
                        <div class="row align-items-center">
                            <div class="col-5 col-xxl-6">
                                <span class="caption text-gray-600 d-block mb-1">Users</span>
                                <span class="h3 mb-0">6,443</span>
                                <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1"
                                                                                           xmlns="http://www.w3.org/2000/svg"
                                                                                           width="14" height="14"
                                                                                           viewBox="0 0 14 14">
                    <g data-name="Icons/Tabler/Trend down" transform="translate(0)">
                      <rect data-name="Icons/Tabler/Trend down background" width="14" height="14" fill="none"/>
                      <path
                          d="M.218.106.158.158a.539.539,0,0,0-.052.7L.158.919,4.465,5.227a.539.539,0,0,0,.7.052l.06-.052L7.718,2.736l4.443,4.443H8.436a.539.539,0,0,0-.533.465L7.9,7.718a.54.54,0,0,0,.465.534l.073,0h5.012a.537.537,0,0,0,.5-.3h0l0-.007,0-.007h0A.537.537,0,0,0,14,7.791V7.783a.544.544,0,0,0,0-.06V2.692a.539.539,0,0,0-1.073-.072l0,.072V6.418L8.1,1.593a.539.539,0,0,0-.7-.052l-.061.052L4.846,4.084.919.158a.538.538,0,0,0-.7-.052Z"
                          transform="translate(0 2.625)" fill="#e25563"/>
                    </g>
                  </svg> -10.45</span>
                            </div>
                            <div class="col-7 col-xxl-6 pe-xxl-0">
                                <div id="MuzeSingleLine"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-3">
                <div class="card mb-4 rounded-12 shadow">
                    <div class="card-body p-3 p-xl-3 p-xxl-4">
                        <div class="row align-items-center">
                            <div class="col-5 col-xxl-6">
                                <span class="caption text-gray-600 d-block mb-1">Goals</span>
                                <span class="h3 mb-0">50.1%</span>
                                <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1"
                                                                                           xmlns="http://www.w3.org/2000/svg"
                                                                                           width="14" height="14"
                                                                                           viewBox="0 0 16 16">
                    <g data-name="icons/tabler/trend-up" transform="translate(0)">
                      <rect data-name="Icons/Tabler/Trend background" width="16" height="16" fill="none"/>
                      <path
                          d="M.249,9.315.18,9.256a.616.616,0,0,1-.059-.8L.18,8.385,5.1,3.462A.616.616,0,0,1,5.9,3.4l.068.059L8.821,6.309,13.9,1.231H9.641A.616.616,0,0,1,9.031.7L9.025.616a.617.617,0,0,1,.532-.61L9.641,0h5.728a.614.614,0,0,1,.569.346h0l0,.008,0,.008h0a.613.613,0,0,1,.048.168V.541A.621.621,0,0,1,16,.61V6.359a.616.616,0,0,1-1.226.083l-.005-.083V2.1L9.256,7.615a.616.616,0,0,1-.8.059l-.069-.059L5.539,4.768,1.05,9.256a.615.615,0,0,1-.8.059Z"
                          transform="translate(0 3)" fill="#20C997"/>
                    </g>
                  </svg> 2.7%</span>
                            </div>
                            <div class="col-7 col-xxl-6 pe-xxl-0">
                                <div id="MuzeSimpleDonut"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 col-xl-6 col-xxl-3">
                <div class="card mb-4 rounded-12 shadow">
                    <div class="card-body p-3 p-xl-3 p-xxl-4">
                        <div class="row align-items-center">
                            <div class="col-5 col-xxl-6">
                                <span class="caption text-gray-600 d-block mb-1">Avg. time</span>
                                <span class="h3 mb-0">04:20</span>
                                <span class="d-block fs-11 mt-2 font-weight-semibold"><svg class="me-1"
                                                                                           xmlns="http://www.w3.org/2000/svg"
                                                                                           width="14" height="14"
                                                                                           viewBox="0 0 14 14">
                    <g data-name="Icons/Tabler/Trend down" transform="translate(0)">
                      <rect data-name="Icons/Tabler/Trend down background" width="14" height="14" fill="none"/>
                      <path
                          d="M.218.106.158.158a.539.539,0,0,0-.052.7L.158.919,4.465,5.227a.539.539,0,0,0,.7.052l.06-.052L7.718,2.736l4.443,4.443H8.436a.539.539,0,0,0-.533.465L7.9,7.718a.54.54,0,0,0,.465.534l.073,0h5.012a.537.537,0,0,0,.5-.3h0l0-.007,0-.007h0A.537.537,0,0,0,14,7.791V7.783a.544.544,0,0,0,0-.06V2.692a.539.539,0,0,0-1.073-.072l0,.072V6.418L8.1,1.593a.539.539,0,0,0-.7-.052l-.061.052L4.846,4.084.919.158a.538.538,0,0,0-.7-.052Z"
                          transform="translate(0 2.625)" fill="#FD7E14"/>
                    </g>
                  </svg> -0.04%</span>
                            </div>
                            <div class="col-7 col-xxl-6 pe-xxl-0">
                                <div id="MuzeColumnsChartTwo"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div
                    class="bg-blue-50 p-4 p-md-5 position-relative overflow-hidden rounded-12 mb-4 alert alert-dismissible zIndex-0"
                    role="alert">
                    <div class="row mb-0 mb-sm-5 mb-md-0 ps-xl-3">
                        <div class="col-lg-12 col-xl-8 col-xxl-4 pb-md-5 mb-md-5 mb-lg-0">
                            <a href="#" class="btn btn-light btn-icon rounded-pill position-absolute top-16 end-16"
                               data-bs-dismiss="alert" aria-label="CLOSE">
                                <svg data-name="icons/tabler/close" xmlns="http://www.w3.org/2000/svg" width="15"
                                     height="15" viewBox="0 0 16 16">
                                    <rect data-name="Icons/Tabler/Close background" width="16" height="16" fill="none"/>
                                    <path
                                        d="M.82.1l.058.05L6,5.272,11.122.151A.514.514,0,0,1,11.9.82l-.05.058L6.728,6l5.122,5.122a.514.514,0,0,1-.67.777l-.058-.05L6,6.728.878,11.849A.514.514,0,0,1,.1,11.18l.05-.058L5.272,6,.151.878A.514.514,0,0,1,.75.057Z"
                                        transform="translate(2 2)" fill="#1E1E1E"/>
                                </svg>
                            </a>
                            <span class="badge badge-lg badge-warning text-uppercase">{{ env('APP_NAME') }}</span>
                            <h2 class="my-2">Content Management System<img
                                    src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/right-arrow.svg"
                                    class="ms-2 arrow-icon" alt="img"></h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="get-started-img">
                                <img src="../assets/img/get-started.png" class="img-fluid" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="card rounded-12 shadow-dark-80">
                    <div class="d-flex align-items-center px-3 px-md-4 py-3">
                        <h5 class="card-header-title mb-0 ps-md-2 font-weight-semibold">Sources</h5>

                    </div>
                    <div class="table-responsive mb-0">
                        <table class="table card-table table-nowrap overflow-hidden">
                            <thead>
                            <tr>
                                <th>Source</th>
                                <th>Page Views</th>
                                <th>Change</th>
                                <th>Duration</th>
                                <th>Bounce</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="avatar avatar-sm shadow-sm rounded-circle me-1 d-flex align-items-center justify-content-center bg-white"><img
                                                src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/facebook2.svg"
                                                alt="Facebook"></span><span
                                            class="ps-2 font-weight-semibold text-gray-700">Facebook</span>
                                    </div>
                                </td>
                                <td>1,25,564</td>
                                <td><span class="badge bg-teal-50 text-teal-500">+65.31%</span></td>
                                <td>00:08:10</td>
                                <td>21.32%</td>
                                <td>
                                    <div class="dropdown text-end">
                                        <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <svg data-name="Icons/Tabler/Notification"
                                                 xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419"
                                                 viewBox="0 0 13.419 13.419">
                                                <rect data-name="Icons/Tabler/Dots background" width="13.419"
                                                      height="13.419" fill="none"/>
                                                <path
                                                    d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z"
                                                    transform="translate(5.368 0.839)" fill="#6c757d"/>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="avatar avatar-sm shadow-sm rounded-circle me-1 d-flex align-items-center justify-content-center bg-white"><img
                                                src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/medium.svg"
                                                alt="Facebook"></span>
                                        <span class="ps-2 font-weight-semibold text-gray-700">Medium</span>
                                    </div>
                                </td>
                                <td>9,567</td>
                                <td><span class="badge bg-teal-50 text-teal-500">+25.73%</span></td>
                                <td>00:01:22</td>
                                <td>68.18%</td>
                                <td>
                                    <div class="dropdown text-end">
                                        <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <svg data-name="Icons/Tabler/Notification"
                                                 xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419"
                                                 viewBox="0 0 13.419 13.419">
                                                <rect data-name="Icons/Tabler/Dots background" width="13.419"
                                                      height="13.419" fill="none"/>
                                                <path
                                                    d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z"
                                                    transform="translate(5.368 0.839)" fill="#6c757d"/>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="avatar avatar-sm shadow-sm rounded-circle me-1 d-flex align-items-center justify-content-center bg-white"><img
                                                src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/google-icon.svg"
                                                alt="Facebook"></span>
                                        <span class="ps-2 font-weight-semibold text-gray-700">Google</span>
                                    </div>
                                </td>
                                <td>5,440</td>
                                <td><span class="badge bg-red-50 text-dnd">-12.56%</span></td>
                                <td>00:03:32</td>
                                <td>01/12/21</td>
                                <td>
                                    <div class="dropdown text-end">
                                        <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <svg data-name="Icons/Tabler/Notification"
                                                 xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419"
                                                 viewBox="0 0 13.419 13.419">
                                                <rect data-name="Icons/Tabler/Dots background" width="13.419"
                                                      height="13.419" fill="none"/>
                                                <path
                                                    d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z"
                                                    transform="translate(5.368 0.839)" fill="#6c757d"/>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="avatar avatar-sm shadow-sm rounded-circle me-1 d-flex align-items-center justify-content-center bg-white"><img
                                                src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/youtube.svg"
                                                alt="Facebook"></span>
                                        <span class="ps-2 font-weight-semibold text-gray-700">Youtube</span>
                                    </div>
                                </td>
                                <td>2,767</td>
                                <td><span class="badge bg-teal-50 text-teal-500">+34.67%</span></td>
                                <td>00:02:19</td>
                                <td>01/12/21</td>
                                <td>
                                    <div class="dropdown text-end">
                                        <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <svg data-name="Icons/Tabler/Notification"
                                                 xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419"
                                                 viewBox="0 0 13.419 13.419">
                                                <rect data-name="Icons/Tabler/Dots background" width="13.419"
                                                      height="13.419" fill="none"/>
                                                <path
                                                    d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z"
                                                    transform="translate(5.368 0.839)" fill="#6c757d"/>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span
                                            class="avatar avatar-sm shadow-sm rounded-circle me-1 d-flex align-items-center justify-content-center bg-white"><img
                                                src="https://fabrx.co/preview/muse-dashboard/assets/svg/icons/bing.svg"
                                                alt="Facebook"></span>
                                        <span class="ps-2 font-weight-semibold text-gray-700">Bing</span>
                                    </div>
                                </td>
                                <td>1,443</td>
                                <td><span class="badge bg-red-50 text-dnd">-54.79%</span></td>
                                <td>00:00:56</td>
                                <td>01/12/21</td>
                                <td>
                                    <div class="dropdown text-end">
                                        <a href="#" class="btn btn-dark-100 btn-icon btn-sm rounded-circle"
                                           role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                           aria-expanded="false">
                                            <svg data-name="Icons/Tabler/Notification"
                                                 xmlns="http://www.w3.org/2000/svg" width="13.419" height="13.419"
                                                 viewBox="0 0 13.419 13.419">
                                                <rect data-name="Icons/Tabler/Dots background" width="13.419"
                                                      height="13.419" fill="none"/>
                                                <path
                                                    d="M0,10.4a1.342,1.342,0,1,1,1.342,1.342A1.344,1.344,0,0,1,0,10.4Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,10.4ZM0,5.871A1.342,1.342,0,1,1,1.342,7.213,1.344,1.344,0,0,1,0,5.871Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,5.871ZM0,1.342A1.342,1.342,0,1,1,1.342,2.684,1.344,1.344,0,0,1,0,1.342Zm1.15,0a.192.192,0,1,0,.192-.192A.192.192,0,0,0,1.15,1.342Z"
                                                    transform="translate(5.368 0.839)" fill="#6c757d"/>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end shadow-sm">
                                            <a href="#!" class="dropdown-item">
                                                Action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Another action
                                            </a>
                                            <a href="#!" class="dropdown-item">
                                                Something else here
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center p-3 p-md-4 border-top border-gray-200">
                        <a href="#" class="my-1 tiny font-weight-semibold mx-auto btn btn-link link-dark">View all
                            <svg class="ms-1" data-name="icons/tabler/chevron right" xmlns="http://www.w3.org/2000/svg"
                                 width="10" height="10" viewBox="0 0 16 16">
                                <rect data-name="Icons/Tabler/Chevron Right background" width="16" height="16"
                                      fill="none"></rect>
                                <path
                                    d="M.26.26A.889.889,0,0,1,1.418.174l.1.086L8.629,7.371a.889.889,0,0,1,.086,1.157l-.086.1L1.517,15.74A.889.889,0,0,1,.174,14.582l.086-.1L6.743,8,.26,1.517A.889.889,0,0,1,.174.36Z"
                                    transform="translate(4)" fill="#1e1e1e"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection



