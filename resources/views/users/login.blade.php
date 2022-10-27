<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/users/css/style.css') }}">
    <title>Log-In</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="offset-md-1 col-md-10 " style="justify-content: center;">
              
                
                <div class="bg-white border rounded mt-5">
                  <div class="row">
                    <div class="col-md-4 py-5 ms-5" style="background-color: darkslateblue;">
                      <img src="assets/images/logo1.png" class="img-fluid" alt="">
                      <div style="border-end: 3px solid red"></div>
                    </div>
                    <div class="col-md-6" style="background-color: orangered;">
                     
                      <div class="w-100 p-4 d-flex justify-content-center pb-4 mt-5" style="color: white;">
                        <form style="width: 22rem;">
                            <div class="form-group form-outline">
                              <label for="email">Email address:</label>
                              <input type="email" class="form-control" id="email" placeholder="Enter email....">
                              
                            </div>
                            <div class="form-group form-outline mt-3">
                              <label for="password">Password:</label>
                              <input type="password" class="form-control" id="password" placeholder="Password...">
                            </div>
                            <div class="form-check form-outline mt-1">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Remember  me </label>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn " style="background-color: darkslateblue; color:beige" type="button">Log-In</button>
                            </div>
                            <div style="text-align: center" class="mb-5"> Not a member? <a href="register.html" style="color:#1266f1">Register</a></div>
                            
                          </form>
                        </div>
                    </div>
                  </div>

                    
                        
                </div>
            </div>

            </section>
        </div>
    </div>
</body>
</html>