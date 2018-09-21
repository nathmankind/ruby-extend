<div class="col-md-4">
    <aside class="aside">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <a href="{{url('/submit-post')}}"  class="btn story-btn">SUBMIT YOUR POST</a>
                </div>
                <div class="col-md-12">
                    <p>Got a story to share about your experience on coding? Let's help you share it with the world.</p>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="row header">
                <div class="col-md-12">
                    <div class="aside-block">
                        <div class="block-head text-align center">
                            <h4>Trending Posts</h4>
                            <hr>
                        </div>
                        <div class="row trend">
                            <div class="col-md-3">
                                <img src="assets/images/placeholder-img.jpg" alt="">
                            </div>
                            <div class="col-md-9">
                                <div class="article-title">
                                    <h5><a href="#"> What the furure entails with machine learning</a></h5>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row trend">
                            <div class="col-md-3">
                                <img src="assets/images/placeholder-img.jpg" alt="">
                            </div>
                            <div class="col-md-9">
                                <div class="article-title">
                                    <h5><a href="#">Machine and emotions. Artificial Intelligence</a></h5>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row trend">
                            <div class="col-md-3">
                                <img src="assets/images/placeholder-img.jpg" alt="">
                            </div>
                            <div class="col-md-9">
                                <div class="article-title">
                                    <h5><a href="#">How the internet works. Internet of things</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row header">
                <div class="col-md-12">
                    <div class="aside-block">
                        <div class="block-head text-center">
                            <h4>Categories</h4>
                            <hr>
                        </div>
                        <div class="row categories">
                            <div class="col-md-12">
                                <ul>
                                    @forelse($categories as $category)
                                        <li><a href="#">{{$category->name}}</a> </li>
                                        <hr>
                                    @empty
                                        <li><a href="#">No Category Available</a> </li>
                                    @endforelse
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </aside>
</div>