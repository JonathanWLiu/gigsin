<div class="container">
    @if(!empty(\Canvas\Models\Settings::disqus()))
        @include('canvas::frontend.blog.partials.disqus')
    @endif
    @if(!empty(\Canvas\Models\Settings::changyanAppid()) && !empty(\Canvas\Models\Settings::changyanConf()))
        @include('canvas::frontend.blog.partials.changyan')
    @endif

    <div style="text-align: center">
        <hr>
        <div class="row">
            <div class="col-lg-2">
                <img src="{{asset('img/logotag.png')}}" alt="">
            </div>
            <div class="col-lg-8 col-md-10 col-md-offset-1">
                <p>
                    GIGS.IN adalah media online yang menyajikan semua hal yang berkaitan dengan musik: berita musik, Informasi Event dan informasi lainnya. Kami juga turut berpartisipasi sebagai media partner di beberapa event, seperti event sekolah, kampus, komunitas dan event lainnya.
                </p>
                <hr>
                <p class="small"><a href="{!! route('canvas.admin') !!}"><i class="fa fa-lock"></i> Sign In</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- scroll to top button -->
<span id="top-link-block" class="hidden hover-button">
    <a id="scroll-to-top" href="#top">SCROLL TO TOP</a>
</span>

@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif