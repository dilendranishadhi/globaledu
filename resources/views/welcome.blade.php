<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="{{ asset('css/main.css') }}" rel="stylesheet">
      <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <title>Global Edulink</title>
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/popper.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
      <!-- Fonts -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
      <!-- Styles -->
      <style>
         /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
      </style>
      <style>
         body {
         font-family: 'Nunito', sans-serif;
         }
      </style>
   </head>
   <body>
      <section id="nav-bar">
         <nav class="navbar bg-body-tertiary">
            <div class="container">
               <nav class="navbar navbar-expand-lg bg-body-tertiary">
                  <img src="images\GEL-logo-1.png" alt="Bootstrap" width="70" height="64">
                  <img src="images\GEL-logo-2.png" alt="Bootstrap" width="70" height="64">
                  <div class="container-fluid">
                     <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                           <li class="nav-item mr-2">
                              <a class="nav-link active" aria-current="page" href="#">COURSES</a>
                           </li>
                           <li class="nav-item mr-2" >
                              <a class="nav-link" href="#">AWARDING </a>
                           </li>
                           <li class="nav-item mr-2">
                              <a class="nav-link" href="#"> PRODUCTS</a>
                           </li>
                           <li class="nav-item mr-2">
                              <a class="nav-link" href="#">CONTACT</a>
                           </li>
                           <li class="nav-item mx-2">
                              <button class="round3-button">Enquire Now</button>
                           </li>
                           <li class="nav-item mr-2">
                              <a class="nav-link" href="#">LOGIN</a>
                           </li>
                           <li class="nav-item mx-2">
                              <button type="button" class="myButton">Register</button>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </nav>
      </section>
      <br><br>
      <section>
         <div class="containerban">
         <img class="imageban" src="images/ppl.jpg" alt="Your Image">
         <div class="gradientban-overlay">
         <div class="overlay-text">
            <p>ACCREDITED ONLINE <br> LEARNING FROM <br>ANYWHERE</p>
         </div>
         <div class="overlay-text2">
            <p>Get accredited qualifications from anywhere <br> and access course content on any device.</p>
         </div>
         <div class="search-container">
            <input type="text" class="search-input" placeholder="Search what you want" >
         </div>
         <div class="overlay-text3">
            <img style="height: 70px; width:300px" src="images/trust-pilot-home.png" alt="Your Image">
         </div>
      </section>
      <section id="counter" class="sec-padding">
         {{-- <div class="container"> --}}
            <div class="row">
               <div class="col-md-3 px-0 ">
                  <div class="count">
                     <p class="number">10+</p>
                     <h4>YEARS OF EXPERIENCE</h4>
                  </div>
               </div>
               <div class="col-md-3 px-0 ">
                  <div class="count">
                     <p class="number">900+</p>
                     <h4>ONLINE COURSES </h4>
                  </div>
               </div>
               <div class="col-md-3 px-0 ">
                  <div class="count">
                     <p class="number">480,000+</p>
                     <h4>EXPERT INSTRUCTORS</h4>
                  </div>
               </div>
               <div class="col-md-3 px-0 ">
                  <div class="count">
                     <p class="number">150+</p>
                     <h4>EXPERT INSTRUCTORS</h4>
                  </div>
               </div>
            </div>
         </div>
      </section> <br>
      <h2>TOGETHER, SHAPING YOUR FUTURE</h2><br>
      <section>
         <div class="tabcontainer">
            <div class="tab-group">
               <div class="tab selected" onclick="selectTab(1)">Popular Course</div>
               <div class="tab" onclick="selectTab(2)">New Course</div>
            </div>
         </div>
         <script>
            function selectTab(tabIndex) {
                const tabs = document.querySelectorAll('.tab');
                tabs.forEach((tab, index) => {
                    if (index + 1 === tabIndex) {
                        tab.classList.add('selected');
                    } else {
                        tab.classList.remove('selected');
                    }
                });
            }
            // Select the first tab by default
            selectTab(1);
         </script>
         <div class="container">
            <div class="container">
               <main>
                  <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                     <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                        <div class="col">
                           <div class="card">
                              <div class="card-body">
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <div class="label-top shadow-sm"><i class="fa fa-heart" style="color:red;" aria-hidden="true" ></i></div>
                                 <h5 class="card-title">CIPD Level 3 Foundation Certificate in People Practice</h5>
                                 <img src="images\1.jpg" class="round-image"
                                    class="card-img-top" alt="...">
                                 <span class="float-end price-hp">1 Year <br>CIPD <br> <strike>£119.00</strike> £119.00 </span>
                                 <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                                 <button type="button" class="btn btn-sm btn-primary">Buy Now</button>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="card">
                              <div class="card-body">
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <div class="label-top shadow-sm"><i class="fa fa-heart" style="color:red;" aria-hidden="true" ></i></div>
                                 <h5 class="card-title">CIPD Level 3 Foundation Certificate in People Practice</h5>
                                 <img src="images\1.jpg" class="round-image"
                                    class="card-img-top" alt="...">
                                 <span class="float-end price-hp">1 Year <br>CIPD <br> <strike>£119.00</strike> £119.00 </span>
                                 <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                                 <button type="button" class="btn btn-sm btn-primary">Buy Now</button>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="card">
                              <div class="card-body">
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <div class="label-top shadow-sm"><i class="fa fa-heart" style="color:red;" aria-hidden="true" ></i></div>
                                 <h5 class="card-title">CIPD Level 3 Foundation Certificate in People Practice</h5>
                                 <img src="images\1.jpg" class="round-image"
                                    class="card-img-top" alt="...">
                                 <span class="float-end price-hp">1 Year <br>CIPD <br> <strike>£119.00</strike> £119.00 </span>
                                 <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                                 <button type="button" class="btn btn-sm btn-primary">Buy Now</button>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="card">
                              <div class="card-body">
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <div class="label-top shadow-sm"><i class="fa fa-heart" style="color:red;" aria-hidden="true" ></i></div>
                                 <h5 class="card-title">CIPD Level 3 Foundation Certificate in People Practice</h5>
                                 <img src="images\1.jpg" class="round-image"
                                    class="card-img-top" alt="...">
                                 <span class="float-end price-hp">1 Year <br>CIPD <br> <strike>£119.00</strike> £119.00 </span>
                                 <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                                 <button type="button" class="btn btn-sm btn-primary">Buy Now</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </main>
               <main>
                  <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">
                     <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                        <div class="col">
                           <div class="card">
                              <div class="card-body">
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <div class="label-top shadow-sm"><i class="fa fa-heart" style="color:red;" aria-hidden="true" ></i></div>
                                 <h5 class="card-title">CIPD Level 3 Foundation Certificate in People Practice</h5>
                                 <img src="images\1.jpg" class="round-image"
                                    class="card-img-top" alt="...">
                                 <span class="float-end price-hp">1 Year <br>CIPD <br> <strike>£119.00</strike> £119.00 </span>
                                 <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                                 <button type="button" class="btn btn-sm btn-primary">Buy Now</button>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="card">
                              <div class="card-body">
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <div class="label-top shadow-sm"><i class="fa fa-heart" style="color:red;" aria-hidden="true" ></i></div>
                                 <h5 class="card-title">CIPD Level 3 Foundation Certificate in People Practice</h5>
                                 <img src="images\1.jpg" class="round-image"
                                    class="card-img-top" alt="...">
                                 <span class="float-end price-hp">1 Year <br>CIPD <br> <strike>£119.00</strike> £119.00 </span>
                                 <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                                 <button type="button" class="btn btn-sm btn-primary">Buy Now</button>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="card">
                              <div class="card-body">
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <div class="label-top shadow-sm"><i class="fa fa-heart" style="color:red;" aria-hidden="true" ></i></div>
                                 <h5 class="card-title">CIPD Level 3 Foundation Certificate in People Practice</h5>
                                 <img src="images\1.jpg" class="round-image"
                                    class="card-img-top" alt="...">
                                 <span class="float-end price-hp">1 Year <br>CIPD <br> <strike>£119.00</strike> £119.00 </span>
                                 <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                                 <button type="button" class="btn btn-sm btn-primary">Buy Now</button>
                              </div>
                           </div>
                        </div>
                        <div class="col">
                           <div class="card">
                              <div class="card-body">
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <i class="fa fa-star rating-color"></i>
                                 <div class="label-top shadow-sm"><i class="fa fa-heart" style="color:red;" aria-hidden="true" ></i></div>
                                 <h5 class="card-title">CIPD Level 3 Foundation Certificate in People Practice</h5>
                                 <img src="images\1.jpg" class="round-image"
                                    class="card-img-top" alt="...">
                                 <span class="float-end price-hp">1 Year <br>CIPD <br> <strike>£119.00</strike> £119.00 </span>
                                 <button type="button" class="btn btn-sm btn-outline-info">Info</button>
                                 <button type="button" class="btn btn-sm btn-primary">Buy Now</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </main>
            </div>
         </div>
      </section>
      <section>
         <div class="fullwidth-container">
         <div class="content">
            <h2>AREAS OF INTEREST</h2>
            <div class="grid-container">
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-373.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-370.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-369.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/rectangle367.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-373.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-370.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-369.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/rectangle367.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-373.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-370.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-369.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/rectangle367.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-373.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-370.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/img-369.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
               <div class="grid-item">
                  <div >
                     <div class="card2" onclick="window.location.href='your_link_here.html'">
                        <img src="images/rectangle367.png" alt="Image">
                        <span >Other </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <br>
      <h2>OUR POPULAR LIVE ONLINE COURSES</h2>
      <section>
         <div class="container">
            <div class="card3-container">
               <div class="card3">
                  <img src="images/image-6.png" class="rounded2-image" alt="Image 1">
                  <p class="text">£219</p>
                  <p class="text2">Pearson BTEC Level 3 Award in Education and Training (RQF)(Formerly PTLLS)</p>
               </div>
               <div class="card3">
                  <img src="images/image-6.png" class="rounded2-image" alt="Image 1">
                  <p class="text">£219</p>
                  <p class="text2">Pearson BTEC Level 3 Award in Education and Training (RQF)(Formerly PTLLS)</p>
               </div>
               <div class="card3">
                  <img src="images/image-6.png" class="rounded2-image" alt="Image 1">
                  <p class="text">£219</p>
                  <p class="text2">Pearson BTEC Level 3 Award in Education and Training (RQF)(Formerly PTLLS)</p>
               </div>
               <div class="card3">
                  <img src="images/image-6.png" class="rounded2-image" alt="Image 1">
                  <p class="text">£219</p>
                  <p class="text2">Pearson BTEC Level 3 Award in Education and Training (RQF)(Formerly PTLLS)</p>
               </div>
            </div>
         </div>
      </section>
      <br> <br>
      <h2><b> WE HAVE GREAT REVIEWS </b></h2>
      <br> <br>
      <section>
         <div class="container">
            <div class="card3-container">
               <div >
                  <br> <br>
                  <img src="images/trustpilot-new 3.png" alt="Image 1">
                  <p class="text">
               </div>
               <div class="card4">
                  <div class="stars-container">
                     <i class="fa fa-star rating-color" ></i>
                     <i class="fa fa-star rating-color"></i>
                     <i class="fa fa-star rating-color"></i>
                     <i class="fa fa-star rating-color"></i>
                     <i class="fa fa-star rating-color"></i>
                  </div>
                  <p class="text2">Shelly Marshall</p>
                  <p style=" font-size: 10px;">I have loved doing this level 4 Skincare course with Global Ed. The information in this course...</p>
                  <p style="color: gray; font-size: 9px; text-align: right;">posted 1 day ago</p>
               </div>
               <div class="card4">
                  <div class="stars-container">
                     <i class="fa fa-star rating-color" ></i>
                     <i class="fa fa-star rating-color"></i>
                     <i class="fa fa-star rating-color"></i>
                     <i class="fa fa-star rating-color"></i>
                     <i class="fa fa-star rating-color"></i>
                  </div>
                  <p class="text2">Shelly Marshall</p>
                  <p style=" font-size: 10px;">I have loved doing this level 4 Skincare course with Global Ed. The information in this course...</p>
                  <p style="color: gray; font-size: 9px; text-align: right;">posted 1 day ago</p>
               </div>
               <div class="card4">
                  <div class="stars-container">
                     <i class="fa fa-star rating-color" ></i>
                     <i class="fa fa-star rating-color"></i>
                     <i class="fa fa-star rating-color"></i>
                     <i class="fa fa-star rating-color"></i>
                     <i class="fa fa-star rating-color"></i>
                  </div>
                  <p class="text2">Shelly Marshall</p>
                  <p style=" font-size: 10px;">I have loved doing this level 4 Skincare course with Global Ed. The information in this course...</p>
                  <p style="color: gray; font-size: 9px; text-align: right;">posted 1 day ago</p>
               </div>
            </div>
         </div>
      </section>
      <br> <br> 
      <section>
         <div class="container5">
            <div class="card5">
               <img src="images/UCIMG-1084.jpg" alt="Card Image 1">
               <h2>Card Title 1</h2>
               <div class="card5-content">
                  <p style="font-size: 30px;"> <b>Amazing Free Courses.</b></p>
                  <p style="font-size: 10px; text-align: justify">Our Free Course page is packed full of exciting courses you can access for free. Gain an accredited UK qualification and save a ton. Visit our Free Course page to find out more.</p>
                  <button>Start Now</button>
               </div>
            </div>
            <div class="card5">
               <img src="images/children-tile2.jpg" alt="Card Image 1">
               <h2>Card Title 1</h2>
               <div class="card5-content">
                  <p style="font-size: 30px;"> <b>Amazing Free Courses.</b></p>
                  <p style="font-size: 10px; text-align: justify">Our Free Course page is packed full of exciting courses you can access for free. Gain an accredited UK qualification and save a ton. Visit our Free Course page to find out more.</p>
                  <button>Start Now</button>
               </div>
            </div>
            <div class="card5">
               <img src="images/st3.jpg" alt="Card Image 1">
               <h2>Card Title 1</h2>
               <div class="card5-content">
                  <p style="font-size: 30px;"> <b>Amazing Free Courses.</b></p>
                  <p style="font-size: 10px; text-align: justify">Our Free Course page is packed full of exciting courses you can access for free. Gain an accredited UK qualification and save a ton. Visit our Free Course page to find out more.</p>
                  <button>Start Now</button>
               </div>
            </div>
            <div class="card5">
               <img src="images/learning.jpg" alt="Card Image 1">
               <h2>Card Title 1</h2>
               <div class="card5-content">
                  <p style="font-size: 30px;"> <b>Amazing Free Courses.</b></p>
                  <p style="font-size: 10px; text-align: justify">Our Free Course page is packed full of exciting courses you can access for free. Gain an accredited UK qualification and save a ton. Visit our Free Course page to find out more.</p>
                  <button>Start Now</button>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="container6">
            <h1 class="heading">BRANDS WORKING WITH US</h1>
            <p class="normal-text">If you want to get qualified it's important to make sure that the course you take is accredited, which means that an awarding body has inspected the course, and has approved the qualification. Awarding bodies are organizations that are strictly regulated, and make sure that the resources and qualifications they approve are of an extremely high standard</p>
            <div class="image6-row">
               <img class="image6" src="images/3.png" alt="Image 1">
               <img class="image6" src="images/4.png" alt="Image 2">
               <img class="image6" src="images/3.png" alt="Image 3">
               <img class="image6" src="images/4.png" alt="Image 4">
               <img class="image6" src="images/3.png" alt="Image 5">
               <img class="image6" src="images/4.png" alt="Image 6">
               <img class="image6" src="images/4.png" alt="Image 7">
               <img class="image6" src="images/4.png" alt="Image 8">
            </div>
         </div>
      </section>
      <section>
         <br>
         <div class="container22">
            <h2>AWARDING BODIES</h2>
            <p class="normal-text">If you want to get qualified it's important to make sure that the course you take is accredited, which means that an awarding body has inspected the course, and has approved the qualification. Awarding bodies are organizations that are strictly regulated, and make sure that the resources and qualifications they approve are of an extremely high standard</p>
         </div>
      </section>
      <section>
         <div class="container">
            <div class="card11-container">
               <div class="card11">
                  <img src="images/R.png" class="rounded2-image" alt="Image 1">
               </div>
               <div class="card12">
                  <img src="images/sage_logo.png"  alt="Image 1">
               </div>
               <div class="card12">
                  <img src="images/athe_logo.png" class="rounded2-image" alt="Image 1">
               </div>
               <div class="card12">
                  <img src="images/CMI_logo.png" class="rounded2-image" alt="Image 1">
               </div>
               <div class="card12">
                  <img src="images/QLS-ProductDetails-1 (1).png" class="rounded2-image" alt="Image 1">
               </div>
               <div class="card12">
                  <img src="images/image-6 (1).png" class="rounded2-image" alt="Image 1">
               </div>
            </div>
         </div>
         <div class="container">
            <div class="card12-container">
                <div class="card11">
                    <img src="images/R.png" class="rounded2-image" alt="Image 1">
                 </div>
                 <div class="card12">
                    <img src="images/sage_logo.png"  alt="Image 1">
                 </div>
                 <div class="card12">
                    <img src="images/athe_logo.png" class="rounded2-image" alt="Image 1">
                 </div>
                 <div class="card12">
                    <img src="images/CMI_logo.png" class="rounded2-image" alt="Image 1">
                 </div>
                 <div class="card12">
                    <img src="images/QLS-ProductDetails-1 (1).png" class="rounded2-image" alt="Image 1">
                 </div>
                 <div class="card12">
                    <img src="images/image-6 (1).png" class="rounded2-image" alt="Image 1">
                 </div>
            </div>
         </div>
      </section>
   </body>
</html>