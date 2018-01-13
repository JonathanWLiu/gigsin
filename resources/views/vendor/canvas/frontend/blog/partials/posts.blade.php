<div class="row" style="text-align: center">
    <div class="col-sm-4" style="background-image: url('{{url('img/bg_review.png')}}');background-size: auto">
        <h3 style="margin-bottom: 20px"><a href="/blog?tag=review">GIGS REVIEWS</a></h3>
        <div class="post-in">
            @foreach ($posts as $post)
                @unless( $post->tags->isEmpty())
                    @if($post->tags[0]->tag == 'review')
                        <div class="post-preview">
                            <div class="row bg-light">
                                <div class="col-sm-4">
                                    <img src="{{asset($post->page_image)}}" alt="" width="100">
                                </div>
                                <div class="col-sm-8">
                                    <h3 style="margin: 0;text-align: left">
                                        <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p style="margin: 0;text-align: center;color: #999;font-size:13px">
                                        {{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} MIN READ
                                    </p>
                                    <p style="font-size: 13px;text-align: right;margin: 0"><a href="{{ $post->url($tag) }}">READ MORE...</a></p>
                                </div>
                            </div>

                        </div>
                        <hr>
                    @endif
                @endunless
            @endforeach
        </div>
    </div>
    <div class="col-sm-4">
        <h3><a href="/blog?tag=biography">BIOGRAPHY</a></h3>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php $temp = 0; ?>
            @foreach ($posts as $post)
                @unless( $post->tags->isEmpty())
                    @if($post->tags[0]->tag == 'biography')
                                <div class="carousel-item {{$temp == 0 ? 'active' : ''}}">
                                    <img class="d-block w-100" src="{{asset($post->page_image)}}" alt="slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5> <a href="{{ $post->url($tag) }}">{{ $post->title }}</a></h5>
                                        <p> {{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} MIN READ</p>
                                    </div>
                                </div>
                        <?php $temp++; ?>
                    @endif
                @endunless
            @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    </div>
    <div class="col-sm-4" style="background-image: url('{{url('img/bg_news.png')}}');background-size: auto">
        <h3><a href="/blog?tag=news">NEWS</a></h3>
        <div class="post-in">
            @foreach ($posts as $post)
                @unless( $post->tags->isEmpty())
                    @if($post->tags[0]->tag == 'news')
                        <div class="post-preview">
                            <div class="row bg-light">
                                <div class="col-sm-8">
                                    <h3 style="margin: 0;text-align: right">
                                        <a href="{{ $post->url($tag) }}">{{ $post->title }}</a>
                                    </h3>
                                    <p style="margin: 0;text-align: center;color: #999;font-size:13px">
                                        {{ $post->published_at->diffForHumans() }} &#183; {{ $post->readingTime() }} MIN READ
                                    </p>
                                    <p style="font-size: 13px;text-align: left;margin: 0"><a href="{{ $post->url($tag) }}">READ MORE...</a></p>
                                </div>
                                <div class="col-sm-4">
                                    <img src="{{asset($post->page_image)}}" alt="" width="100">
                                </div>
                            </div>

                        </div>
                        <hr>
                    @endif
                @endunless
            @endforeach
        </div>
    </div>
</div>
