


<!-- footer -->

  <footer class="hh">
         <div class="flex container">
             <div class="footer-about">
                 <h5>About Stated</h5>
                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum
                     autem. Amet aliquid nesciunt veritatis aliquam.</p>
             </div>

             <div class="footer-quick-links">
                 <h5>Quick Links</h5>
                 <ul>
                     <li><a href="#">About Us</a></li>
                     <li><a href="#">Services</a></li>
                     <li><a href="#">Testimonials</a></li>
                     <li><a href="#">Contact Us</a></li>
                 </ul>
             </div>

             <div class="footer-subscribe">
                 <h5>Subscribe to our Newsletter</h5>
                 <div id="subscribe-container">
                     <input type="text" placeholder="Enter Email" />
                     <button class="right-rounded">Send</button>
                 </div>

                 <h5 class="follow-us">Follow Us</h5>
                 <ul>
                     <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                     <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                     <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                     <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                 </ul>
             </div>
         </div>

         <small>
             Copyright &copy; 2019 All rights reserved <a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter">admin login</a>
         </small>
     </footer>

<!-- footer -->

 <!-- start student registration modal -->

 
<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Start Registration Form -->
      <form>
  <div class="form-group">
     <i class="fas fa-user"></i>
     <label for="stuname" class="pl-2 font-weight-bold" >Name</label>
     <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
  </div>
  <div class="form-group">
      <i class="fas fa-envelope"></i>
     <label for="stuemail" class="pl-2 font-weight-bold" >Email</label>
     <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
    <small>We will never share your email with anyone else</small>
  </div>
    <div class="form-group">
     <i class="fas fa-key"></i>
     <label for="stuname" class="pl-2 font-weight-bold" >New Password</label>
     <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
  </div>
   
</form>
<!-- end Registration form -->
</div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         
      </div>
    </div>
  </div>
</div>

 <!-- end student registration modal -->


 <!-- start student Login modal -->

 
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Start Login Form -->
      <form id="stuLoginForm">
  
  <div class="form-group">
      <i class="fas fa-envelope"></i>
     <label for="stuLogemail" class="pl-2 font-weight-bold" >Email</label>
     <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
    
  </div>
    <div class="form-group">
     <i class="fas fa-key"></i>
     <label for="stuname" class="pl-2 font-weight-bold" >Password</label>
     <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
  </div>
   
</form>
<!-- end Login form -->
</div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="stuLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
         
      </div>
    </div>
  </div>
</div>

 <!-- end student Login modal -->





 <!-- start Admin Login modal -->

 
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- Start Login Form -->
      <form id="adminLoginForm">
  
  <div class="form-group">
      <i class="fas fa-envelope"></i>
     <label for="adminLogemail" class="pl-2 font-weight-bold" >Email</label>
     <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="stuLogemail">
    
  </div>
    <div class="form-group">
     <i class="fas fa-key"></i>
     <label for="stuname" class="pl-2 font-weight-bold" >Password</label>
     <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
  </div>
   
</form>
<!-- end Login form -->
</div>
      <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
         
      </div>
    </div> 
  </div>
</div>

 <!-- end Admin Login modal -->







    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>