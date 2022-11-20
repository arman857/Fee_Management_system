
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="fooer_logo"><img src="images/footer-logo.png"></div>
                  <p class="footer_lorem_text">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by 
                  </p>
               </div>
              
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">OUR Design</h1>
                  <p class="footer_lorem_text">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by 
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="customer_text">OUR Design</h1>
                  <p class="footer_lorem_text">There are many variat
                     ions of passages of L
                     orem Ipsum available
                     , but the majority h
                     ave suffered altera
                     tion in some form, by 
                  </p>
               </div>
               <div class="col-lg-3 col-sm-6 mb-5">
                  <h1 class="customer_text">OUR Company Details</h1>
                
                    {{$setting['Description']}}
               </div>
               </div>
            </div>
            <div class="input-group bg-warning justify-content-center">
               <ul>
               <li><h1><i>Company Email</i></h1></li>
               <li><h2><i>{{$setting['Email']}}</i></h2></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="copyright_section">
      <div class="container">
         <div class="social_icon">
            <ul>
               <li><a href="{{$setting->Facebook_Link ?? ''}}" target="_blank"><img src="{{url('frontend/images/fb-icon.png')}}"></a></li>
               <li><a href="{{$setting->Google_Link ?? ''}}" target="_blank"><img src="{{url('frontend/images/twitter-icon.png')}}"></a></li>
               <li><a href="{{$setting->Youtube_Link ?? ''}}" target="_blank"><img src="{{url('frontend/images/instagram-icon.png')}}"></a></li>
               
            </ul>
         </div>
            
         </div>
         <p class="copyright_text text-success"><i>2022 All Rights Reserved. Design by</i> 
            <a href="https://html.design"><i class="text-info m-auto">Dynamic html  Templates</i></a></p>
      </div>
      <script src="{{url('js/myscript.js')}}"></script>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>