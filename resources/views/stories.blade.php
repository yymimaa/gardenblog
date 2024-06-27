@extends('mama')
@section('kontent')

    <div class="jumbotron bgjumboo">
        <div class="container" id="categories">

            <div class="text-center" style="padding-top: 4rem; padding-bottom: 1.5rem;">
                <h4><b>Nature lover stories</b></h4>
                <p>a story about the struggles of plant lovers</p>
            </div>
            <div class="row" style="padding-inline: 4rem;">
                <div class="col-6 mb-4">
                    <div class="card card-stories">
                        <div class="card-body garden">
                          <h4 class="card-title">A walk for our better healthy environtmen</h4>
                          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium natus voluptates sit quae beatae...</p>
                          <a href="/articles" class="card-link">Read More</a>
                        </div>
                      </div>
                    </div>

                <div class="col-6 mb-4">
                    <div class="card card-stories">
                        <div class="card-body garden">
                          <h4 class="card-title">Plants for saving life and providing fresh</h4>
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius modi repudiandae corporis nihil aperiam..</p>
                          <a href="#" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body garden">
                          <h4 class="card-title">Planning trees from our hand to hands</h4>
                          <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa nesciunt cumque tempora possimus..</p>
                          <a href="#" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card card-stories">
                        <div class="card-body garden">
                          <h4 class="card-title">Plants can be our friends</h4>
                          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni incidunt ex, deleniti fugit assumenda...</p>
                          <a href="#" class="card-link">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container align-item-center">
            <div class="row" style="padding-top: 10rem; padding-inline: 10rem; justify-content: center;">
                <div class="col-md-4 sosmed grid">
                <h6>Sosial Media</h6>
                <div>
                    <a href="https://portal.smkn2kraksaan.sch.id/"><i class="uil uil-globe"></i></a>
                    <a href="https://www.youtube.com/@smkn2kraksaanprobolinggo888"><i class="uil uil-youtube"></i></a>
                </div>
                </div>
                <div class="col-md-4 aboutus">
                    <ul>
                    <h6>About Us</h6>
                            <li><i class="uil uil-map-marker"></i> <a href="#"> Indonesia, EastJava</a></li>
                            <li><i class="uil uil-globe"></i> <a href="#"> Garden.co.id</a></li>
                            <li><i class="uil uil-phone"></i> <a href="#"> 0335-846407</a></li>
                        </ul>
                </div>
                <div class="col-md-4 location">
                    <ul>
                    <h6>Community</h6>
                            <li><a href="#">Surabaya</a></li>
                            <li><a href="#">Jakarta</a></li>
                            <li><a href="#">Solo</a></li>
                            <li><a href="#">Bali</a></li>
                        </ul>
                </div>
            </div>

            <div class="copyright" style="padding-top: 6rem; text-align: center;">
                <p class="footer__copy">&#169; Garden. All right reserved</p>
            </div>
        </div>
    </footer>

@endsection


