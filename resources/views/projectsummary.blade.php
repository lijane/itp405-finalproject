<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Project Summary</title>
  <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <style type="text/css">
  body {
    font-family: avenir;
    padding-left: 20px;
    padding-top: 20px;
    padding-right: 20px;
    background-color: #F9B67F;
  }

  a {
    text-decoration: none;
    color: black;
  }

  .container {
    background-color: white;
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: 90px;
    margin-right: 90px;
  }

  .title {
    margin-left: 50px;
    padding-top:20px;
    padding-bottom:20px;
    padding-right: 90px;
  }

  .btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
  }

  .btn-primary {
    color: #fff;
    background-color: #3e3d3d;
    /*border-color: #2e6da4;*/ 
  }
  .btn-primary:focus,
  .btn-primary.focus {
    color: #fff;
    background-color: #000;
    /*border-color: #122b40;*/
  }
  .btn-primary:hover {
    color: #fff;
    background-color: #000;
    /*border-color: #204d74;*/
  }
  .btn-primary:active,
  .btn-primary.active,
  .open > .dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #000;
    /*border-color: #204d74;*/
  }
  .btn-primary:active:hover,
  .btn-primary.active:hover,
  .open > .dropdown-toggle.btn-primary:hover,
  .btn-primary:active:focus,
  .btn-primary.active:focus,
  .open > .dropdown-toggle.btn-primary:focus,
  .btn-primary:active.focus,
  .btn-primary.active.focus,
  .open > .dropdown-toggle.btn-primary.focus {
    color: #fff;
    background-color: #204d74;
    /*border-color: #122b40;*/
  }
  .btn-primary:active,
  .btn-primary.active,
  .open > .dropdown-toggle.btn-primary {
    background-image: none;
  }
  .btn-primary.disabled:hover,
  .btn-primary[disabled]:hover,
  fieldset[disabled] .btn-primary:hover,
  .btn-primary.disabled:focus,
  .btn-primary[disabled]:focus,
  fieldset[disabled] .btn-primary:focus,
  .btn-primary.disabled.focus,
  .btn-primary[disabled].focus,
  fieldset[disabled] .btn-primary.focus {
    background-color: #337ab7;
    /*border-color: #2e6da4;*/
  }
  .btn-primary .badge {
    color: #337ab7;
    background-color: #fff;
  }
  </style>
</head>
<body>
  @include('navigation')
  <div class="container">
    <div class="title">
      <h1>Project Summary</h1>

      <h2>The Laravel App</h2>
        <ul>
          <li><span style="font-weight:bold">MVC Pattern</span> - Used.</li>
          <li><span style="font-weight:bold">Eloquent ORM</span> - Used.</li>
          <li><span style="font-weight:bold">Authentication</span> - Only users who sign up for an account can create and delete reviews. Once user is logged in, 
              the reviews page (/reviews) automatically redirects to a signed in version (/admin) with create and delete buttons. </li>
          <li><span style="font-weight:bold">Original MySQL Database</span> - My database is for ramen restaurant reviews. The 3 tables are reviews, restuarants, and 
              locations. (User: jane | Pass: jane-li)</li>
          <li><span style="font-weight:bold">Flash Messaging</span> - Flash messaging is shown for errors and success messages. If the user logs in with incorrect 
              log in credentials, leaves required fields blank in the create or signup form, they will be shown an error flash message. 
              Success mflash mssages are shown when the user signs up, deletes a review, creates a review, or logs in. </li>
          <li><span style="font-weight:bold">Blade Templating</span> - Used.</li>
          <li><span style="font-weight:bold">Server-Side Data Validation - All fields are required for the sign up and review creation forms. If the user does not
              complete all fields before submitting, they will be redirected to the same page with all old input pre-populated. </li>
          <li><span style="font-weight:bold">Site Content</span> - Used.</li>
          <li><span style="font-weight:bold">Consistent General Design</span> - Used.</li>
          <li><span style="font-weight:bold">Easy To Use / Has Styling</span> - Used.</li>
        </ul>
      <br>

      <h2>The API</h2>
        <ul>
          <li><span style="font-weight:bold">Secure Database</span> - Used.</li>
          <li><span style="font-weight:bold">Use of Promises</span> - Used.</li>
          <li><span style="font-weight:bold">Use of Express or Koa</span> - Used Express.</li>
          <li><span style="font-weight:bold">3 Endpoints</span> - I did GET to return a list of all resource objects, GET to return a single resource object, and 
              POST to create a new resource object.</li>
          <li><span style="font-weight:bold">Use Dotenv</span> - Used.</li>
        </ul>
      <br>

      <h2>Submission</h2>
      <iframe width="900" height="506" src="https://www.youtube.com/embed/iAHnXCjrCNE" frameborder="0" allowfullscreen></iframe><br><br>
      <a href ="https://youtu.be/iAHnXCjrCNE" class="btn btn-primary">Youtube Link Here</a>
      <br><br>
    </div>
  </div>
</body>
</html>
















