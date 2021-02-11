<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my design</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
</head>
<body class="bg-light">
   <div class="container-fluid">
       <div class="row mt-4">
       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
           <div class="card h-100"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);background-color:#cecbcb; padding-bottom:80px;">
               <div class="card-body">
                   <div class="row">
                       <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 mb-2" style="margin:0px;padding-right:0px;">
                           <p class="text-left text-info">CompanyName</p>
                           <div class="card h-100">
                               <div class="card-body">
                                   <p class="card-title h2 text-center pt-2 font-wieght-bolder text-success">Sign in to Account</p>
                                   <div class="col-12 pt-2" style="text-align:center;">
                                     <i class="fa fa-facebook-official fa-2x ml-2" aria-hidden="true"></i>
                                      <i class="fa fa-instagram fa-2x ml-2" aria-hidden="true"></i>
                                      <i class="fa fa-google-plus-official fa-2x ml-2" aria-hidden="true"></i>
                                   </div>
                                   <p class="text-muted text-center small pt-2">or use any email account</p>
                                   <form action="mydesign.php" method="post">
                                        <div class="form-group">
                                             <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                       <div class="form-group">
                                           <input type="password" placeholder="password" class="form-control">
                                       </div>
                                       
                                       <div class="form-check-inline">
                                          <input type="checkbox">Remember me
                                          <span class="text-dark" style="margin-left:180px;">Forgot Password?</span> 
                                       </div> 
                                    
                                        <div class="text-center mt-2">
                                            <button type="button" class="btn btn-success" style="padding-left:50px;padding-right:50px;border-radius:30px;">Sign In</button>
                                         </div>
                                   </form>
                               </div>
                                  <div class="clearfix mb-2 pb-2">
                                       <span class="text-muted small" style="margin-left:140px;">Privacy policy</span>
                                   <span class="text-muted small" style="margin-left:50px;">Terms & Conditions</span>
                                  </div>
                           </div>
                       </div>
                       <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="margin:0px;padding-left:0px;">
                            <div class="card bg-success h-100" style="margin-top:40px;border-left-radius:80pox;">
                                       <div class="card-body">
                                           <p class="card-title h3 text-white text-center" style="padding-top:100px;">Hello,Friend</p>
                                           <p class="card-text text-white small text-center pt-2">Fill up personal information and start journey with us.</p>
                                         <div class="text-center pt-4">
                                            <button type="button" class="btn btn-outline-warning" style="padding-left:30px;padding-right:30px;border-radius:30px;">Sign Up</button>
                                         </div>
                                       </div>
                               </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

       </div>
   </div>
    
   </div>
</body>
</html>