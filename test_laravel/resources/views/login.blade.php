<html>
        <head>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="F:\project\templates\alert.js"> </script>
      </head>
        <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="overflow:show;position: fixed;top: 0;width: 100%;z-index:1000";>
                <a class="navbar-brand" href="#">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                      
                    
                        
                          <div class-="container">
                      
                                
                                <!-- <a class="nav-link enabled" href="{% url 'about' %}"  tabindex="-1" aria-disabled="true">About Us</a> -->
                           </div>
                                      
                              
                            </li>
                        
                        
                    
                  </ul>
                  <form class="form-inline my-2 my-lg-0"   action="/reg">
                  <div class-="container">
              
                             
                                <button type="submit" class="btn btn-primary">SignUp</button>
              
                          &emsp;
                  </div>
                      </form>
                  
              
              
                </div>
              </nav> 
              <br>
              <br>
              <br>
              <div class="container col md-4">
              @if(session()->has('message'))
    <div class="alert alert-danger">
       <center> {{ session()->get('message') }} </center>
    </div>
    </div>
@endif
<div class="row">
    <div class="col-4"><br>
    <br>
    <br>
    <br>
    <br>
  
    </div>
    <div class="col-4">
    <br><br><br><br>
  
  <div class="card">
  <div class="card-header">
    <center><h3>Login Page</h3></center>
    </div>
  <form action="/dashboard" method="post">
    {{ csrf_field() }}
  <div class="card-body">
  
  
          
             <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter UserName" >

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  
  
  
            <center>
          <button type="submit" class="btn btn-primary">Login</button>
        </center>
  
  </div>
  
       </form>
    </div>
  </div>
  
  </div>
  
  
  </body>
  </html>