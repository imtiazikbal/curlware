@extends('layout.app')

@section('content')
<div class="trending-area fix">
    <div class="container">
        <div class="trending-main">
            <!-- Trending Tittle -->
           
            <div class="row">
                <div class="col-lg-12">
                    <!-- Trending Top -->
                    <div class="trending-top mb-30">
                        <div class="trend-top-img">
                            <img src="{{ asset($featured->image) }}" alt="" width="100%" height="500px">
                            <div class="trend-top-cap">
                                <span>Appetizers</span>
                                <h2><a href="{{ url('posts/detail/'.$featured->id) }}">{{ $featured->title }}</a></h2>
                            </div>
                        </div>
                    </div>
                    <!-- Trending Bottom -->
                    <div class="trending-bottom">
                        <div class="row">
                            @foreach ($posts as $post) 
                            <div class="col-lg-4">
                                <div class="single-bottom mb-35">
                                    <div class="trend-bottom-img mb-30">
                                        <img src="{{ asset($post->image) }}" alt="">
                                    </div>
                                    <div class="trend-bottom-cap">
                                        <span class="color1">Lifestyple</span>
                                        <h4><a href="{{ url('posts/detail/'.$post->id) }}">{{ $post->title }}</a></h4>
                                    </div>
                                </div>
                            </div>


                            @endforeach
                           
                            {{ $posts->links() }}
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Riht content -->
               
            </div>
        </div>
    </div>
</div>
@endsection