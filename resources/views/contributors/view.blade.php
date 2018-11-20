@extends('contributors.layout')

@section('body-class', 'home')

@section('content')

<nav id="slide-menu" class="slide-menu" role="navigation">

    <div class="brand">
        <a href="/">
            <img src="/assets/img/laravel-logo-white.png" height="50" alt="Laravel white logo">
        </a>
    </div>

    <ul class="slide-main-nav">
        @include('partials.main-nav')
    </ul>

</nav>


<style>
    
    #contributors .page-wrapper {
  min-height: 100vh;
  background-color: #F5F7FA;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  align-content: flex-start;
  justify-content: space-evenly;
  padding-left: calc(5% - 16px);
  padding-right: calc(5% - 16px);
  /* padding: 0 5%; */
}
#contributors nav {
  min-height: 72px;
  background: #FFFFFF;
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.05);
  padding: 0 5%;
  display: flex;
  flex-direction: row;
  align-items: center;
}
#contributors .profile-box {
  background: #FFFFFF;
  box-shadow: 0 2px 6px 0 rgba(47, 83, 151, 0.1);
  border-radius: 3px;
  margin: 16px 16px;
  padding: 16px 16px;
  width: 200px;
  text-align: center;
  transition: 300ms;
  flex-grow: 1;
}
#contributors .profile-box:hover {
  /* box-shadow: 0 2px 6px 0 rgba(47,83,151,0.40); */
  box-shadow: 0 0 20px 9px rgba(0, 0, 0, 0.03);
}
#contributors img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  box-shadow: 0 2px 6px 0 rgba(47, 83, 151, 0.1);
}
#contributors #logo {
  width: 127px;
  height: 100%;
  border-radius: 0%;
  background-color: white;
  margin-right: 32px;
  box-shadow: none;
}
#contributors #searchField {
  width: 100%;
  background: rgba(245, 247, 250, 0.2);
  border: 1px solid #F5F7FA;
  border-radius: 6px;
  padding: 8px 16px;
}
#contributors ::placeholder {
  color: #98A0A6;
  font-family: 'Lato', sans-serif;
  font-style: italic;
  font-weight: 300;
}
#contributors h3 {
  font-weight: 300;
  font-size: 18px;
  margin-bottom: 0;
}
#contributors h4 {
  transition: 500ms;
  font-weight: 300;
  font-size: 14px;
  margin-top: 8px;
  color: #98A0A6;
  cursor: pointer;
}
#contributors h4:hover {
  color: #507BFC;
  text-decoration: underline;
}
#contributors #assign,
#contributors #view {
  width: 50%;
  font-size: 14px;
  color: #98A0A6;
  font-weight: 300;
  padding: 8px 0;
  border-radius: 100px;
  transition: 300ms;
  cursor: pointer;
}
#contributors #assign:hover,
#contributors #view:hover {
  background-color: #507BFC;
  color: white;
  box-shadow: 0 10px 20px 0 rgba(80, 123, 252, 0.5);
}
#contributors #assign {
  float: left;
}
#contributors #view {
  float: right;
}
#contributors i {
  margin-right: 8px;
}




</style>


<div class="hero">
    <div class="container">
        <div class="content">
            <h1>যারা অবদান রেখেছেন! আমরাও অবদান রাখি...</h1>
            <p> লারাভেল ডকুমেন্টেশন বাংলায় অনুবাদ করে  <a href="https://github.com/laravel-bangladesh/docs" target="_blank">সহায়তা করুন</a> </p>
        </div>
    </div>
</div>

<section>

<div id="contributors">
  <div class="container">
      <div class="page-wrapper" id="contributors_list"></div>
  </div>
</div>


</section>

@endsection
