@extends('layouts.app')

@section('content')
    <section class="mt-md-4 pt-md-3">
        <div class="container-fluid">
            <div class="row" style="color: #444; background-color: #ffffff">
                <div class="col-xl-10 col-lg-9 col-md-9 ml-auto">

                    <div class="row py-2 ">
                        <div class="col">
                            <div class="row shadow-sm text-muted">

                                <div class="btn-group btn-block" role="group" aria-label="Basic example">

                                <a class="btn btn-sm btn-info" href="{{ route('news') }}">Back</a>
                                    
                                    
                                </div>
                                <!-- Button Add Category modal -->

                            </div>
                        </div>
                    </div>



                    <div class="col">
                        <span class="hidden" class="sharethis-inline-share-buttons"></span>
                        <h2 class="title-details font-weight-bold">{{ $news->title }}</h2>
                        <div class="row">
                            <div class="col">
                                <h6 class="pb-1" style="color: #999999;">

                                    @php
                                        use App\Helper\Bengali;

                                        $date = $news->created_at;
                                        $formattedDate = date('h:i A - d F Y', strtotime($date));
                                        $time = Bengali::bn_date_time($formattedDate);

                                    @endphp

                                    <span class="publishdate" style="color: black;"> প্রকাশ:

                                        @php
                                            echo $time;
                                        @endphp

                                    </span>

                                </h6>
                                <div class="details text-center">
                                    <img src="{{ asset($news->image) }}" class="card-img-top rounded-0" title="news title"
                                        alt="">
                                </div>
                                <style>
                                    .publishdate{
                                        font-family: 'solaimanLipi', sans-serif;
                                        font-optical-sizing: auto;
                                        font-weight: bold;
                                        font-style: normal;
                                    }
                                    .title-details {
                                        font-family: 'solaimanLipi', sans-serif;
                                        font-optical-sizing: auto;
                                        font-weight: bold;
                                        font-style: normal;
                                    }

                                    .details img {
                                        text-align: center;
                                        width: 500px;
                                        height: 500px;

                                    }
                                </style>
                            </div>
                        </div>
                        <div class="row">
                            <style type="text/css">
                                p {
                                    padding: 0px 20px 0px 0px;
                                }
                            </style>
                            <div class="col-12 og:description detailsStyle">
                                <!-- News Body -->
                                <h5 class="py-3 text-muted">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                            viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="1"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34">
                                            </path>
                                            <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                        </svg>
                                        Reporter:
                                        {{ $news->reporter }}

                                </h5>

                                {!! $news->body !!}

                            </div>
                        </div>
                    </div>



    </section>


    </div>
    </div>
    </div>


    <!-- Load TinyMCE -->
    <script src="{{ asset('assets') }}/js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setupTinyMCE();
        });
    </script>
    <!-- /TinyMCE -->
    </section>
    {{-- <script>
        async function saveDraft() {
                // Get the values of the elements
                let title = document.getElementById('title').value;
                let comment = document.getElementById('comment').value;
                let body = document.getElementById('body').value;
                let chiefReporterId = document.getElementById('chief_reporter_id').value;
                let imageInput = document.getElementById('image');
                let reporter = document.getElementById('reporter').value;

                // Create a FormData object to store the values
                let formData = new FormData();

                // Append the values to the FormData object
                formData.append('title', title);
                formData.append('comment', comment);
                formData.append('body', body);
                formData.append('chief_reporter_id', chiefReporterId);
                // Check if an image file is selected
                formData.append('image', imageInput);
                formData.append('reporter', reporter);

                // Now formData contains all the values, including the image file if selected
                // You can now use this FormData object to send the data via AJAX or submit it with a form

                // Send the data using axios
 

                // Hide loader after request completes

                const config = {
                    headers: {
                        'content-type': 'multipart/form-data'
                    }
                }

                showLoader();
                let res = await axios.post("/news/store", formData, config)
                hideLoader();
                if(res.status===200){
                    document.getElementById("save-form").reset();

                }
            }
    </script> --}}








    








    @if (session()->has('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast',
                },
                showConfirmButton: false,
                timer: 2500,
                timerProgressBar: true,
            })

            ;
            (async () => {
                Toast.fire({
                    icon: 'success',
                    title: '{{ session('success') }}',
                })
            })()
        </script>
    @endif

    @if (session()->has('warning'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast',
                },
                showConfirmButton: false,
                timer: 2500,
                timerProgressBar: true,
            })

            ;
            (async () => {
                Toast.fire({
                    icon: 'warning',
                    title: '{{ session('warning') }}',
                })
            })()
        </script>
    @endif>
@endsection
