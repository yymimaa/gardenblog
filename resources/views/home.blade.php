@extends('mama')
@section('kontent')

    <div style="padding-top: 120px;" class="jumbotron bgjumbo" id="home">
        <div class="row align-items-center">
            <div class="judul col-md-7 pt-9" style="font-size: 15px;">
                <h1>Grow Plant</h1>
                <h1>For <span class="multiText"></span></h1>
                <p>All about plant you can see here. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum expedita modi saepe repudiandae laborum sed voluptatum nobis molestias unde rem vero </p>
                    <div class="button">
                        <a href="#" class="btn btn-success">Login</a>
                        <a href="#" class="btn-kedua">Selengkapnya</a>
                    </div>
            </div>

            <div class="image-home">
                <div class="col-md-2">
                    <img style="width: 17rem;" src="{{asset('img/3d-casual-life-young-boys-and-young-girl-jumping.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="about">
        <div class="judul1 text-left" style="padding-top: 4rem;">
            <h4><b>Want to plant tree?</b></h4>
            <p>Easy way to plant a tree</p>
        </div>
        <div class="card-deck mb-5">
            <div class="card border-0">
              <div class="card-body text-center">
                <img src="{{asset('img/3d-casual-life-interior-plants.png')}}" style="width: 5rem" alt="">
                <p class="card-text">Prepare your site</p>
              </div>
            </div>
            <div class="card border-0">
              <div class="card-body text-center">
                <img src="{{asset('img/3d-casual-life-ecology-hand.png')}}" style="width: 5rem" alt="">
                <p class="card-text">T-notch planting</p>
              </div>
            </div>
            <div class="card border-0">
              <div class="card-body text-center">
                <img src="{{asset('img/3d-casual-life-black-girl-smiling-and-holding-plant-in-white-pot.png')}}" style="width: 1.7rem" alt="">
                <p class="card-text">Pit planting</p>
              </div>
            </div>
            <div class="card border-0">
              <div class="card-body text-center">
                <img src="{{asset('img/casual-life-3d-girl-sitting-with-plant-in-hands.png')}}" style="width: 5rem;" alt="">
                <p class="card-text">Start to planting</p>
              </div>
            </div>
        </div>
    </div>



    <div class="container" style="padding-top: 3rem; padding-bottom: 3rem;">
        <div class="row" style="padding-inline: 10rem;">
            <div class="col-md-4">
                <img src="{{asset('img/vivid-background-park.png')}}" style="width: 15rem;">
            </div>
        <div class="col-md-8 mt-4">
            <div class="bungkus text-justify">
                <h5>Love and work are to people what water and sunshine are to plants</h5>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure maxime voluptatum ipsum alias porro unde nisi soluta fuga natus deserunt aliquam placeat perferendis magni molestiae, molestias aut dolore facere totam qui eius modi? Aperiam facere, minima porro adipisci tempore nemo itaque! Laudantium consequuntur architecto ea neque beatae amet iusto, ab veniam itaque facere recusandae asperiores!
                </p>
            </div>
        </div>
        </div>
    </div>



    <div class="container" id="services">
        <div class="text-center" style="padding-top: 4rem; padding-bottom: 1.5rem;">
            <h4><b>Trending Plants</b></h4>
            <p>Trending plants that you can grow at your home</p>
        </div>


        <div class="row mb-5" style="padding-inline: 4rem;">
            <div class="col-md-4">
                <div class="card plant" style="width:300px">
                    <img class="card-img-top" src="{{asset('img/Palm Trees for Sale - Trees_com.jpeg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">ZZ Plant</h4>
                    <p class="card-text text-justify" style="font-size: 13px">The zz plant is the ultimate symbol of low light adaptability, ensuring it remains a timeless trend. This plant exudes a bold and tropical aesthetic with its glossy green leaflets arranged along upright stems.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card plant" style="width:300px">
                    <img class="card-img-top" src="{{asset('img/What Potting Mix to Use for African Violets - The Answer!.jpeg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">Peace Lily</h4>
                    <p class="card-text text-justify" style="font-size: 13px">The peace lily is an exclusive indoor plant in the United States, primarily cultivated for its stunning white flowers and glossy leaves. Its ability to thrive even in low-light environments makes it a favorite among all types of plant enthusiasts. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card plant" style="width:300px">
                    <img class="card-img-top" src="{{asset('img/8 Super Cute Indoor Plants To Buy Now.jpeg')}}" alt="Card image">
                    <div class="card-body">
                    <h4 class="card-title">African Violets</h4>
                    <p class="card-text text-justify" style="font-size: 13px">Elevate your indoor spaces with the timeless charm of African violets. These exquisite plants boast fuzzy leaves and stunning, richly-colored flowers, adding a touch of beauty to any setting.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container quotes-container" style="padding-inline: 5rem;">
        <div class="row align-items-center">
            <div class="isi col-md-7">
                <h4>"I like gardening it's a place where i find myself when i need to lose myself"</h4>
                <p>- Alice Sebold</p>
            </div>
            <div class="col-md-2 pt-3">
                <img src="{{asset('img/shine-young-woman-is-talking-about-something.png')}}" alt="">
            </div>
        </div>
    </div>


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
                <div class="card">
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
                <div class="card">
                    <div class="card-body garden">
                      <h4 class="card-title">Plants can be our friends</h4>
                      <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni incidunt ex, deleniti fugit assumenda...</p>
                      <a href="#" class="card-link">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container align-item-center">
            <div class="row" style="padding-top: 10rem; padding-inline: 10rem;">
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

