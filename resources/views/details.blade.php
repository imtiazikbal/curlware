@extends('layout.app')

@section('content')
    <div class="about-area">
        <div class="container">
            <!-- Hot Aimated News Tittle-->

            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            <img src="{{ asset($post->image) }}" alt="">
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3>{{ $post->title }}</h3>
                        </div>


                        <div class="about-prea">
                            {!! $post->content !!}
                        </div>
                        <div class="social-share pt-30">
                            <div class="section-tittle">
                                <h3 class="mr-20">Share:</h3>
                                <ul>
                                    <li><a href="#"><img src="{{ asset('fontend') }}/assets/img/news/icon-ins.png"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('fontend') }}/assets/img/news/icon-fb.png"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('fontend') }}/assets/img/news/icon-tw.png"
                                                alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('fontend') }}/assets/img/news/icon-yo.png"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- From -->
                    <div class="row">
                        <div class="col-lg-8">
                            @auth
                            <form class="form-contact contact_form mb-80" action="{{ route('comments.store') }}"
                            method="POST">
                                @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">

                                    </div>
                                  
                                        <textarea class="form-control w-100 error" name="message" id="message" cols="30" rows="9"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message">
                                {{ old('message') }}
                                </textarea>
                                        @if ($errors->has('message'))
                                            <div class="error mt-2 text-danger">{{ $errors->first('message') }}</div>
                                        @endif
                                    </div>
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">

                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                </div>


                            </form>
                            @endauth
                            
                           @guest
                           <p>Please <a class="text-danger" href="{{ route('register') }}">register</a> to leave comment.
                           </p>
                           @endguest
                                <!-- Show a message or redirect to login page -->
                                
                           
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-12 col-lg-6">
                            <div class="mb-4">


                                @forelse ($comments as $comment)
                                    <div class="cbody">
                                        <p>{{ $comment->text ?? '' }}</p>

                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex flex-row align-items-center">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp"
                                                    alt="avatar" width="25" height="25" />
                                                <p class="small mb-0 ms-2 ml-2">
                                                    {{ $comment->user->name ?? 'Anonymous' }} - {{ $comment->created_at->diffForHumans() }}
                                                </p>
                                            </div>
                                            <div class="d-flex flex-row align-items-center">
                                                <p class="small text-muted mb-0">like?</p>
                                                <i class="far fa-thumbs-up mx-2 fa-xs text-body"
                                                    style="margin-top: -0.16rem;"></i>
                                                <p class="small text-muted mb-0">3</p>
                                            </div>
                                            @auth
                                                @if (auth()->check() && auth()->user()->id == $comment->user_id)
                                                    <div class="d-flex flex-row align-items-center w-10">
                                                        <button onclick="openEditModal({{ $comment->id }})" class="text-pr"
                                                            href="#">Edit</button>
                                                        <button onclick="deleteData({{ $comment->id }})" type="button"
                                                            class="text-danger">Delete</button>
                                                    </div>
                                                @endif
                                            @endauth
                                        </div>
                                    </div>
                                @empty
                                    <p>No comments yet.</p>
                                @endforelse

                                <style>
                                    button {
                                        background-color: transparent;
                                        border: none;
                                        color: inherit;
                                        /* Optional: to inherit the color from the parent */
                                        /* Add any additional styles as needed */
                                    }
                                </style>

                                <!-- Blade Template -->
                               <!-- Blade Template -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h4>Edit your comment</h4>
        <form id="editForm">
            <input type="hidden" id="itemId">
            <input type="text" id="itemName" placeholder="Item Name">
            <!-- Add more input fields as needed -->
            <button id="saveBtn" class="btn btn-primary" type="button">Save Changes</button>
        </form>
    </div>
</div>

                            </div>


                        </div>
                    </div>

                </div>
               
            </div>
        </div>
    </div>
    <!-- Blade Template -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
           
                <h4>Edit your comment</h4>
            <form id="editForm" class="d-flex justify-items-center">
                <input type="hidden" id="itemId">
                <input type="text" class="form-control" id="itemName" placeholder="Item Name">
                <button id="saveBtn" class="btn btn-primary" type="button">Save Changes</button>

            </form>
            

        </div>
    </div>

    <!-- Button to trigger modal -->



    <script>
        // Function to open modal and fetch item data
        function openEditModal(itemId) {
            // Show the modal
            var modal = document.getElementById("editModal");
            modal.style.display = "block";
    
            // Fetch item data via Axios
            axios.get('/comment/show/' + itemId)
                .then(function (response) {
                  
                    // Populate modal fields with fetched data
                    document.getElementById("itemId").value = response.data.id;
                    document.getElementById("itemName").value = response.data.text;
                    // Populate other fields as needed
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    
        // Close the modal when the user clicks on the close button
        var closeBtn = document.getElementsByClassName("close")[0];
        closeBtn.onclick = function() {
            var modal = document.getElementById("editModal");
            modal.style.display = "none";
        };
    
        // Event listener for the "Save Changes" button
        var saveBtn = document.getElementById("saveBtn");
        saveBtn.addEventListener("click", updateData);
    
        // Function to update data via Axios
        async function updateData() {
          
           
            // Prevent form submission default behavior
            event.preventDefault();
            let id = document.getElementById("itemId").value;
            let text = document.getElementById("itemName").value
            // Retrieve form data
            let formData = {
                text: text
            };
    
            // Submit form data via Axios
            try {
                const response = await axios.post('/comment/update/' + id, formData);
               Swal.fire({
                    title: "Updated!",
                    text: "Your file has been updated.",
                    icon: "success"
                });
              
                // Close the modal upon successful update
                var modal = document.getElementById("editModal");
                modal.style.display = "none";
                window.location.reload();
               
            } catch (error) {
                console.error(error);
            }
        }
    </script>
    

    <script>
        async function deleteData(id) {

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    axios.delete('/comment/delete/' + id)
                        .then(function(response) {
                            window.location.reload();
                        })
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });


        }
    </script>

    <style>
        /* Modal styles */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1000;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            /* Could be more or less, depending on screen size */
            max-width: 400px;
            /* Max width */
        }

        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Responsive styles */
        @media screen and (max-width: 600px) {
            .modal-content {
                width: 90%;
                /* Adjust width for smaller screens */
            }
        }
    </style>
@endsection
