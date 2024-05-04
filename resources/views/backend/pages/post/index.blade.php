@extends('layouts.app')

@section('content')
    <section class="mt-md-4 pt-md-3">
        <div class="container-fluid">
            <div class="row" style="color: #444;">
                <div class="col-xl-10 col-lg-9 col-md-9 ml-auto">

                    <div class="row py-2 ">
                        <div class="col">
                            <div class="row shadow-sm text-muted">


                                <!-- Button Add Category modal -->
                                <div class="ml-auto mr-3">
                                    <a href="{{ route('posts.create') }}" class="btn btn-sm btn-info px-3 rounded-0">Add
                                        Blog</a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!--Input Group Start-->

                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="example" class="table table-sm table-striped table-bordered"
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="5%">SL</th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Body</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody class="" style="font-size:0.9em;">
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td>
                                                        {{ $loop->iteration }}</td>


                                                        <td><img src="{{ asset($post->image) }}" width="50px" alt=""></td>
                                                        <td>{{ $post->title }}</td>
                                                        <td>{!! Str::limit($post->content, 100) !!}</td>
                                                        <td>
                                                        <div class="btn-group btn-block" role="group"
                                                            aria-label="Basic example">
                                                            {{-- <a href="" type="button"
                                                                class="btn btn-sm  btn-primary">View</a> --}}
                                                             <a href="{{ route('posts.edit', $post->id) }}" type="button"
                                                        class="btn btn-sm btn-info">Edit</a> 
                                                            <button onclick="deleteData({{ $post->id }})" type="button"
                                                                class="btn btn-sm btn-danger">Delete</button>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                    axios.delete('/posts/delete/' + id)
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
