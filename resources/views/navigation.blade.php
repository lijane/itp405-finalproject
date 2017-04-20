<style type="text/css">
.navbar {
	margin-left:90px;
}

.nav {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eee;
}
.nav > li.disabled > a {
  color: #777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777;
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
}

.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 4px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #337ab7;
}

</style>
<div class="navbar">
<img src="https://s3-us-west-1.amazonaws.com/powr/defaults/image-slider2.jpg">
<ul class="nav nav-pills">
  <li role="presentation"><a href="/reviews">Reviews</a></li>
<!--   <li role="presentation"><a href="/reviews/new">Write a Review</a></li>-->  
<!--   <li role="presentation"><a href="/account">Account</a></li>
 -->  <li role="presentation"><a href="/login">Login</a></li>
  <li role="presentation"><a href="/signup">Sign Up</a></li>
  <li role="presentation"><a href="/logout">Logout</a></li>
  <li role="presentation"><a href="/projectsummary">Project Summary</a></li>
</ul>
<br>
</div>