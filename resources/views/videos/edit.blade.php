@section('title', 'Create')


@extends('layouts.app')
@section('content')


    <div class="container-fluid px-0">
        <div class="row align-items-center">
            
        </div>

    </div>
    <br>
    <div class="container-fluid p-xl-20">
        <div class="col-12 col-xl-8 col-xxl-9">
            <div style="background-color: #fff" class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-title"></div>
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <a href="{{ route('videos.index') }}" class="new-artictle-btn"  >
                                <span class="svg-icon svg-icon-2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="#000000" />
                                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="#000000" />
                                                    </svg>
                                                </span>Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body py-4">
                    <form class="px-3 form-style-two" action="{{ route('videos.update', $video->id) }}" method="post"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}

                        {{ method_field('PATCH') }}
                      
                        <div class="fv-row mb-7">
                            <label class="required  fs-6 mb-2">Title</label>
                            <input type="text" name="title" id="title" class="form-control form-control-solid mb-3 mb-lg-0 @error('title') is-invalid @enderror" placeholder="" value="{{ $video->title }}" />
                            @error('title')
                            <div class="invalid-feedback"> {{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="fv-row mb-7">
                            <label class="required  fs-6 mb-2">Description</label>
                            <textarea name="content" id="content">
                            {!!   $video->content !!}
                        </textarea>
                        </div>
                        
                        <div class="fv-row mb-7">
                            <label class="fs-6 mb-2">Video Preview</label>
                            <iframe 
                                id="video_preview" 
                                width="560" 
                                height="315" 
                                src="" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen 
                                style="display: none;" 
                                onerror="handleEmbedError()">
                            </iframe>
                        </div>
                      
    
                    <div class="fv-row mb-7">
                        <label class="required fs-6 mb-2">Video URL</label>
                        <input 
                            type="url" 
                            name="video_url" 
                            id="video_url" 
                            class="form-control form-control-solid mb-3 mb-lg-0" 
                            placeholder="Enter YouTube video URL" 
                            value="{{ $video->video_url }}"
                            oninput="updateVideoPreview()" 
                        />
                    </div> 
                 
                    
                    <script>
                        function updateVideoPreview() {
                            const input = document.getElementById('video_url').value;
                            const iframe = document.getElementById('video_preview');
                    
                            // Extract the video ID from the provided URL
                            const videoId = extractYouTubeID(input);
                    
                            if (videoId) {
                                iframe.src = `https://www.youtube.com/embed/${videoId}`;
                                iframe.style.display = 'block'; // Show the iframe if the video ID is valid
                            } else {
                                iframe.src = '';
                                iframe.style.display = 'none'; // Hide the iframe if the URL is invalid
                                console.error('Invalid YouTube URL.');
                            }
                        }
                    
                        function extractYouTubeID(url) {
                            const regex = /(?:youtube\.com\/(?:[^/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i;
                            const match = url.match(regex);
                            return match ? match[1] : null;
                        }
                    </script>
                        <div class="fv-row mb-7">
                            <label class="required  fs-6 mb-2">Display Video</label>
                            <div class="d-flex">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_active" value="1" checked>
                                    <label class="form-check-label text-nowrap" for="inlineRadio2" >Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_active" value="0">
                                    <label class="form-check-label text-nowrap" for="inlineRadio2">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <hr>
                        </div>
                       

                        
                        <div class="fv-row mb-7">
                            <div class="text-end pt-5">
                                <a href="javascript:void(0)" class="btn btn-light me-3 act-dis " onclick="history.back()">Discard</a>
                                <button type="submit" class="act-sub" data-kt-users-modal-action="submit">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                 <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-js')
    <script src="{{ asset('/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script>
        function updateVideoPreview() {
            const input = document.getElementById('video_url').value;
            const iframe = document.getElementById('video_preview');
            const videoId = extractYouTubeID(input);
    
            if (videoId) {
                iframe.src = `https://www.youtube.com/embed/${videoId}`;
                iframe.style.display = 'block';
            } else {
                iframe.src = '';
                iframe.style.display = 'none';
                alert('Invalid YouTube URL. Please enter a valid video link.');
            }
        }
    
        function extractYouTubeID(url) {
            const regex = /(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i;
            const match = url.match(regex);
            return match ? match[1] : null;
        }
    
        function handleEmbedError() {
            alert('The video cannot be played due to embedding restrictions. Please try another video.');
        }
    </script>
    
    <script>
       ClassicEditor
            .create(document.querySelector('#content'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

       $("#kt_datepicker_1").flatpickr();
       $("#kt_datepicker_2").flatpickr();

    </script>
@endsection


