<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
        <div class="single-sidebar-widget newsletter-widget">
            @if (session('success') != null)
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
            <h4 class="single-sidebar-widget__title">Newsletter</h4>
            <div class="form-group mt-30">
                <div class="col-autos">
                    <form action="{{ route('subscriber.store') }}" method="post">
                        @csrf
                        <input type="text" class="form-control" name="email" id="inlineFormInputGroup"
                            placeholder="Enter email" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter email'">
                        {{-- Named Error Bages --}}
                        @error('email')
                            <div class="alert alert-danger text-center p-1 my-2">
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                </div>
            </div>
            <input type="submit" value="Subcribe" class="bbtns d-block mt-20 w-100">
            </form>
        </div>

        <div class="single-sidebar-widget post-category-widget">
            <h4 class="single-sidebar-widget__title">Catgory</h4>
            <ul class="cat-list mt-20">
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Technology</p>
                        <p>(03)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Software</p>
                        <p>(09)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Lifestyle</p>
                        <p>(12)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Shopping</p>
                        <p>(02)</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex justify-content-between">
                        <p>Food</p>
                        <p>(10)</p>
                    </a>
                </li>
            </ul>
        </div>

        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="single-sidebar-widget__title">Recent Post</h4>
            <div class="popular-post-list">
                <div class="single-post-list">
                    <div class="thumb">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/thumb/thumb1.png"
                            alt="">
                        <ul class="thumb-info">
                            <li><a href="#">Adam Colinge</a></li>
                            <li><a href="#">Dec 15</a></li>
                        </ul>
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.html">
                            <h6>Accused of assaulting flight attendant miktake alaways</h6>
                        </a>
                    </div>
                </div>
                <div class="single-post-list">
                    <div class="thumb">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/thumb/thumb2.png"
                            alt="">
                        <ul class="thumb-info">
                            <li><a href="#">Adam Colinge</a></li>
                            <li><a href="#">Dec 15</a></li>
                        </ul>
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.html">
                            <h6>Tennessee outback steakhouse the
                                worker diagnosed</h6>
                        </a>
                    </div>
                </div>
                <div class="single-post-list">
                    <div class="thumb">
                        <img class="card-img rounded-0" src="{{ asset('assets') }}/img/blog/thumb/thumb3.png"
                            alt="">
                        <ul class="thumb-info">
                            <li><a href="#">Adam Colinge</a></li>
                            <li><a href="#">Dec 15</a></li>
                        </ul>
                    </div>
                    <div class="details mt-20">
                        <a href="blog-single.html">
                            <h6>Tennessee outback steakhouse the
                                worker diagnosed</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
