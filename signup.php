<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>sign up</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css" />
  </head>
  <body>
    <body background ="">
    <div class="">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">cool cribs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <br>
       <div class="container">
        <form>
         <div class="form-group">
           <label >First Name</label>
           <input type="text" class="form-control" placeholder="Add Name">
         </div>
         <div class="form-group">
           <label >Surname</label>
           <input type="text" class="form-control" placeholder="Add Name">
         </div>
         <div class="form-group">
           <label >Email</label>
           <input type="email" class="form-control" placeholder="Add Email">
         </div>
         <div class="form-group">
           <label>About me</label>
           <textarea class="form-control" placeholder="tell us a little about yourself"></textarea>
         </div>
         <div class="form-group">
           <label>Gender</label>
            <select class="form-control">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
         </div>
         <div class="form-group">
           <label>Profile photo</label>
           <input type="file">

         </div>
         <button type="submit" class="btn btn-info">Submit</button>
  </body>
</html>
