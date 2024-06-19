


<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Hope UI | Responsive Bootstrap 5 Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico">
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/core/libs.min.css">
      
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/hope-ui.min.css?v=4.0.0">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/custom.min.css?v=4.0.0">
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/dark.min.css">
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/customizer.min.css">
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="{{asset('assets')}}/css/rtl.min.css">
      
      
  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
          </div>
      </div>    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">            
               <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="{{asset('assets')}}/images/auth/05.png" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
            <div class="col-md-6">               
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                        <div class="card-body">
                           <a href="../../dashboard/index.html" class="navbar-brand d-flex align-items-center mb-3">
                              
                              <!--Logo start-->
                              <div class="logo-main">
                                  <div class="logo-normal">
                                      <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                          <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                          <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                          <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                      </svg>
                                  </div>
                                  <div class="logo-mini">
                                      <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                          <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                          <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                          <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                      </svg>
                                  </div>
                              </div>
                              <!--logo End-->
                              
                              
                              
                              
                              <h4 class="logo-title ms-3">GreenCrop</h4>
                           </a>
                           <h2 class="mb-2 text-center">Sign Up</h2>
                           <p class="text-center">Create your GreenCrop account.</p>
                           <form action="{{ route('register.save') }}" method="POST" class="space-y-4 md:space-y-6">
                            @csrf
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder=" ">
                                        @error('name')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" class="form-control" name="email" id="email" required="" placeholder=" ">
                                       @error('email')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" required="" placeholder=" ">
                                        @error('password')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="confirm-password" class="form-label">Confirm Password</label>
                                        <input type="confirm-password" class="form-control" name="password_confirmation" required="" id="password_confirmation" placeholder="••••••••">
                                        @error('password_confirmation')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="daerah" class="form-label">Daerah</label>
                                        <input type="text" class="form-control" name="daerah" id="daerah" required="" placeholder=" ">
                                        @error('daerah')
                                            <span class="text-red-600">{{ $message }}</span>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="terms" required="">
                                       <label class="form-check-label" for="terms">I agree with the terms of use</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign Up</button>
                              </div>
                              {{-- <p class="text-center my-3">or sign in with other accounts?</p>
                              <div class="d-flex justify-content-center">
                                 <ul class="list-group list-group-horizontal list-group-flush">
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="{{asset('assets')}}/images/brands/fb.svg" alt="fb"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="{{asset('assets')}}/images/brands/gm.svg" alt="gm"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="{{asset('assets')}}/images/brands/im.svg" alt="im"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="{{asset('assets')}}/images/brands/li.svg" alt="li"></a>
                                    </li>
                                 </ul>
                              </div> --}}
                              <p class="mt-3 text-center">
                                 Already have an Account <a href="{{ route('login') }}" class="text-underline">Sign In</a>
                              </p>
                           </form>
                        </div>
                     </div>    
                  </div>
               </div>           
               <div class="sign-bg sign-bg-right">
                  <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                        <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8"/>
                        <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 149.47 319.328)" fill="#3A57E8"/>
                        <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 203.936 99.543)" fill="#3A57E8"/>
                        <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857" transform="rotate(45 204.316 -229.172)" fill="#3A57E8"/>
                     </g>
                  </svg>
               </div>
            </div>   
         </div>
      </section>
      </div>
    
    <!-- Library Bundle Script -->
    <script src="{{asset('assets')}}/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="{{asset('assets')}}/js/core/external.min.js"></script>
    
    <!-- Widgetchart Script -->
    <script src="{{asset('assets')}}/js/charts/widgetcharts.js"></script>
    
    <!-- mapchart Script -->
    <script src="{{asset('assets')}}/js/charts/vectore-chart.js"></script>
    <script src="{{asset('assets')}}/js/charts/dashboard.js" ></script>
    
    <!-- fslightbox Script -->
    <script src="{{asset('assets')}}/js/plugins/fslightbox.js"></script>
    
    <!-- Settings Script -->
    <script src="{{asset('assets')}}/js/plugins/setting.js"></script>
    
    <!-- Slider-tab Script -->
    <script src="{{asset('assets')}}/js/plugins/slider-tabs.js"></script>
    
    <!-- Form Wizard Script -->
    <script src="{{asset('assets')}}/js/plugins/form-wizard.js"></script>
    
    <!-- AOS Animation Plugin-->
    
    <!-- App Script -->
    <script src="{{asset('assets')}}/js/hope-ui.js" defer></script>
    
    
  </body>
</html>