@extends('layouts.app')

@section('content')

<main role="main">
  <article>    
    <!-- Header -->
    <header class="section background-image text-center" style="background-image:url(img/carousel-01.jpg)">
      <h1 class="animated-element slow text-extra-thin text-white text-s-size-30 text-m-size-40 text-size-50 text-line-height-1 margin-bottom-30 margin-top-130">
        Contact Us
      </h1>
      <p class="animated-element text-white">Duis autem vel eum iriure dolor in hendrerit in</p>
      
      <!-- white full width arrow object -->
      <img class="arrow-object" src="img/arrow-object-white.svg" alt="">
    </header>
    
    <!-- Section 1 -->
    <section class="section background-white">
      <div class="line">
        <div class="margin2x">
          <div class="m-12 l-6">
            <div class="margin2x"> 
              
              <div class="l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-location-pin text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong">Dirección</h2>                
                  <p>Colina de Buenaventura 47</p>
                  <p>Boulevares, Naucalpan</p>
                  <p>Estado de México, C.P. 53110</p>             
                </div>
              </div>
              
              <div class="l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong">E-mail</h2>                
                  <p><a class="text-primary-hover" href="mailto:contact@panelmexico.com">contact@panelmexico.com</a></p>               
                </div>
              </div>
              
              <div class="l-12 xl-6 margin-bottom-60">
                <div class="float-left">
                  <i class="icon-sli-earphones-alt text-primary text-size-40 text-line-height-1"></i>
                </div>
                <div class="margin-left-60">
                  <h2 class="text-size-20 margin-bottom-10 text-strong">Teléfono</h2>                
                  <p>55 8421 4610</p>            
                </div>
              </div>
            </div>
          </div>
          <div class="m-12 l-6">
          
            <!-- <h2 class="text-size-20 margin-bottom-10 margin-m-top-50 text-strong">Functional Ajax Contact Form</h2> -->
            <!-- If you want to make a field required, add the "required" class to the input. -->
            <!-- The form e-mail address you can change on file resp-email.php on line 4. -->
            <form name="contactForm" class="customform ajax-form" method="post" enctype="multipart/form-data">
              <div class="line">
                <div class="margin">
                  <div class="s-12 m-12 l-6">
                    <input name="email" class="required email" placeholder="Your e-mail" title="Your e-mail" type="text" />
                    <p class="email-error form-error">Please enter your e-mail.</p>
                  </div>
                  <div class="s-12 m-12 l-6">
                    <input name="name" class="name" placeholder="Your name" title="Your name" type="text" />
                    <p class="name-error form-error">Please enter your name.</p>
                  </div>
                </div>
              </div>            
                              
              <div class="line">       
                <div class="s-12">
                  <input name="subject" class="required subject" placeholder="Subject" title="Subject" type="text" />
                  <p class="subject-error form-error">Please enter your subject.</p>
                </div>
                <div class="s-12">
                  <textarea name="message" class="required message" placeholder="Your message" rows="3"></textarea>
                  <p class="message-error form-error">Please enter your message.</p>
                </div>
                <div class="s-12">
                  <input type="file" name="file[]" />                    
                </div>
                <!-- full-name-field is hidden antirobot field -->
                <input name="full-name-field" type="text" id="full-name-field" class="full-name-field" />
                <div class="s-12">
                  <a class="captcha-button text-white background-green border-radius margin-bottom">
                    <span class="not-a-robot-icon"><i class="icon-check text-white"></i></span> 
                    <span class="not-a-robot-text">Enviar</span>
                  </a>
                </div> 
                <!-- The submit button text you can edit in the file validation.sj on the line 8. -->
                <div class="s-12 button-parent"></div>
                <div class="line">
                  <p class="mail-success form-success">Your message has been sent successfully.</p>
                  <p class="mail-fail form-error">Sorry, error occured this time sending your message.</p>
                </div>
              </div>    
            </form>
          </div>
        </div>
      </div>    
    </section>
    
  </article>
</main>


@endsection
