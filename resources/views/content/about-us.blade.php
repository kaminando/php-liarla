@extends('layouts.main')

@section('content')
  
  <!-- HEADER -->
  @include('content.header', array('headerClass'=>'lightHeader')) 
  

  <!-- PAGE TITLE -->
  <section class="pageTitle about-page">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="titleTable">
            <div class="titleTableInner">
              <div class="pageTitleInfo">
                <h1>SOBRE LIARLA</h1>
                <p>Lo que hacemos, por qué lo hacemos, dónde, por ti!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PAGE CONTENT -->
  <section class="mainContentSection">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="aboutTitle">
            <h4>LIARLA</h4>
            <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet diam nec mi dictum, gravida venenatis eros consequat. Maecenas est enim, ultrices et lacus a, semper dictum orci. Morbi malesuada est eu nisi varius, sit amet pulvinar leo eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin purus neque, consequat eu neque nec, laoreet pellentesque purus. Donec magna dui, egestas bibendum pulvinar vel, vulputate id quam. Maecenas sed massa id elit tincidunt sagittis. Curabitur et felis at massa pellentesque porta. Ut in ornare erat, non gravida leo. Nulla auctor rutrum tellus ullamcorper aliquam. Proin eget purus et sem dapibus pulvinar. Proin tincidunt dignissim risus ut tincidunt. Morbi auctor consequat metus eget ornare.</p>
          </div>
        </div>
      </div>
      <div class="row aboutItem">
        <div class="col-sm-6">
          <div class="col-xs-12">
            <div class="media">
              <div class="media-body">
                <h4 class="media-heading center">MISIÓN</h4>
                <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet diam nec mi dictum, gravida venenatis eros consequat. Maecenas est enim, ultrices et lacus a, semper dictum orci. Morbi malesuada est eu nisi varius, sit amet pulvinar leo eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin purus neque, consequat eu neque nec, laoreet pellentesque purus. Donec magna dui, egestas bibendum pulvinar vel, vulputate id quam. Maecenas sed massa id elit tincidunt sagittis. Curabitur et felis at massa pellentesque porta.</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12">
            <div class="media">
              <div class="media-body">
                <h4 class="media-heading center">VISIÓN</h4>
                <p class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet diam nec mi dictum, gravida venenatis eros consequat. Maecenas est enim, ultrices et lacus a, semper dictum orci. Morbi malesuada est eu nisi varius, sit amet pulvinar leo eleifend. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin purus neque, consequat eu neque nec, laoreet pellentesque purus. Donec magna dui, egestas bibendum pulvinar vel, vulputate id quam. Maecenas sed massa id elit tincidunt sagittis. Curabitur et felis at massa pellentesque porta.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 center">
          <img class="about-img no-xs" src="images/about-img.jpg">
        </div>
       
      
      </div>
    </div>
  </section>

  <!-- QUOTE -->
  <section class="darkSection aboutComments">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="commentsTable">
            <div class="commentsTableInner">
              <div class="commentsInfo">
                <i class="fa fa-quote-right" aria-hidden="true"></i>
                <p class="about-quote">"Te descubrimos el mundo..."</p>
                <h5>LIARLA Team</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- FOOTER -->
  @include('content.footer')
  

@endsection


{{-- include a modales --}}