@php
use Carbon\Carbon; 
@endphp
@extends ('Frontend.layouts.layout')

@section('contenido')


<!-- Home -->
<div class="clearfix">

</div>
<section class="banner-wrap">
    <div class="banner">
        {{-- FILTRO --}}
        <div class="col-md-8 col-xs-12 form-filter" style="">
            <div class="class=search-form margin-top-20 padding-vertical-20"  >
                <div class="row ">
                    <h1 class="titulo"><span class="destacado"><strong>Invierte en movilidad,</strong></span> un mercado en constante <span class="destacado">crecimiento.</span></h1>
                </div>
                <div class="col-md-6 col-sm-8 botones">
                    <button class="lg-button btn-block" type="submit">¡Invierte ahora!</button>
                    <button class="lg-button btn-block btn-2" type="submit">¿Cómo funciona 123Capital?</button>
                </div>
            </div>
        </div>
        {{-- SLIDER --}}
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

              <div class="item active carrousel" style="background-image: url({{asset('images/slide-2.png')}}) ">
              </div>
              
            </div>
          
           
        </div>
    </div>
</section>

<section class="content">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
              <h1 class="titulo" style="padding-left: 0px; margin-top: 80px; font-size: 40px;">
                <strong class="destacado" sty>INVIERTE TU DINERO</strong>
                <span>en tres sencillos pasos</span>
              </h1>
            </div>
    
            <div class="col-sm-4">
              <div class="intro_pasos">
                <p>1</p>
                <img src="https://fondea.es/images/fondea/home/intro_paso_1.png" class="img-responsive animation-slideRight">
                <h3>Elige el <strong class="destacado">VEHÍCULO</strong></h3>
              </div>        
            </div>
    
            <div class="col-sm-4">
              <div class="intro_pasos">
                <p>2</p>
                <img src="https://fondea.es/images/fondea/home/intro_paso_2.png" class="img-responsive animation-slideDown">
                <h3>Decide la cantidad que quieres <strong class="destacado">INVERTIR</strong></h3>
              </div>              
            </div>
    
            <div class="col-sm-4">
              <div class="intro_pasos">
                <p>3</p>
                <img src="https://fondea.es/images/fondea/home/intro_paso_3.png" class="img-responsive animation-slideLeft">
                <h3>En un máximo de 7 meses recibirás un <strong class="destacado">8%* de RENTABILIDAD</strong></h3>
                <small class="mas_info"><a href="https://fondea.es/faqs#faqs-accordion-4-row">* Más información</a></small>
              </div>              
            </div>
          </div>
            </div>

        <div class="inner-page homepage margin-bottom-none">

            <div class="row parallax_parent design_2 margin-bottom-40 margin-top-30" style="height: 385px;">
                <div class="parallax_scroll clearfix" data-velocity="-.5" data-offset="-200" data-image="images/parallax1.jpg" style="background-image: url(&quot;{{asset('images/parallax1.jpg')}}&quot;); background-position: 50% -237px;">
                    <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-sm-8 col-sm-offset-1">
                                    <button class="lg-button btn-block big-btn" type="submit"><strong class="invierte">INVIERTE YA DESDE 15.000€</strong></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content faq">
                    <div class="container">
                        <div class="inner-page">
                            <div class="row"> 
                                <!--FAQ LEFT-->
                                <div class="col-md-12 padding-left-none padding-right-30 md-padding-right-30 xs-padding-right-none xs-padding-bottom-40">
                                        <div class="col-sm-12">
                                                <h1 class="titulo" style="padding-left: 0px; ">
                                                    <strong class="destacado" sty>PREGUNTAS FRECUENTES</strong>
                                                </h1>
                                            </div>
                                    <div class="accodian_panel margin-top-30">
                                            
                                        <div class="panel-group description-accordion faq-sort margin-bottom-none" id="accordion"> 
                                            
                                            <!--description-->
                                            <div class="panel panel-default padding-top-20 padding-bottom-15" data-categories="Electrical,Navigational,Wiring">
                                                <div class="panel-heading padding-vertical-10 padding-horizontal-15">
                                                    <h4 class="panel-title padding-left-30"> 
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed" aria-expanded="false">
                                                            Cuál es la cantidad mínima a invertir? 
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
                                                    <div class="panel-body"> 
                                                        <!--Panel_body-->
                                                        <div class="faq_post padding-left-40">
                                                            <p>Para poder participar solo es posible haciendo una inversión minima de 15.000€.</p>
                                                        </div>
                                                        <!--Panel_body--> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--description--> 
                                            
                                            <!--description-->
                                            <div class="panel panel-default padding-top-20 padding-bottom-15" data-categories="Engine,Sunroof,Wiring">
                                                <div class="panel-heading padding-vertical-10 padding-horizontal-15">
                                                    <h4 class="panel-title padding-left-30"> 
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed" aria-expanded="false">
                                                            Cómo recibo mi rentabilidad?
                                                        </a> 
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
                                                    <div class="panel-body"> 
                                                        <!--Panel_body-->
                                                        <div class="faq_post padding-left-40">
                                                            <p>Existen dos variantes, la primera es la liquidación de intereses anual o la liquidación de intereses trimestrales.</p>
                                                        </div>
                                                        <!--Panel_body--> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--description--> 
                                            
                                            <!-- description-->
                                            <div class="panel panel-default padding-top-20 padding-bottom-15" data-categories="Electrical,Mechanical,Wiring">
                                                <div class="panel-heading padding-vertical-10 padding-horizontal-15">
                                                    <h4 class="panel-title padding-left-30"> 
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">
                                                            Cuándo se me devuelve el principal?
                                                        </a> 
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
                                                    <div class="panel-body"> 
                                                        <!--Panel_body-->
                                                        <div class="faq_post padding-left-40">
                                                            <p>El principal es devuelto a la finalización del cliclo del renting, los ciclos de 123Renting son de 3 años completos.</p>
                                                        </div>
                                                        <!--Panel_body--> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--description--> 
                                            
                                            <!--description-->
                                            <div class="panel panel-default padding-top-20 padding-bottom-15" data-categories="Mechanical,Sunroof,Navigational">
                                                <div class="panel-heading padding-vertical-10 padding-horizontal-15">
                                                    <h4 class="panel-title padding-left-30"> 
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed" aria-expanded="false"> 
                                                            Puedo volver a invertir una vez terminado el ciclo? 
                                                        </a> 
                                                    </h4>
                                                </div>
                                                <div id="collapsefour" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
                                                    <div class="panel-body"> 
                                                        <!--Panel_body-->
                                                        <div class="faq_post padding-left-40">
                                                            <p>Sí, al finalizar el primer ciclo, podemos reinvertir tus fondos, para que sigas disfrutanto de tu rentabilidad.</p>
                                                        </div>
                                                        <!--Panel_body--> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--description--> 
                                            
                                            
                                            
                                            <!--description-->
                                            <div class="panel panel-default padding-top-20 padding-bottom-15" data-categories="Electrical,Sunroof,Wiring">
                                                <div class="panel-heading padding-vertical-10 padding-horizontal-15">
                                                    <h4 class="panel-title padding-left-30">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsenine" class="collapsed" aria-expanded="false">
                                                            Puedo volver a invertir una vez terminado el ciclo? 
                                                        </a> 
                                                    </h4>
                                                </div>
                                                <div id="collapsenine" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
                                                    <div class="panel-body"> 
                                                        <!--Panel_body-->
                                                        <div class="faq_post padding-left-40">
                                                            <div class="post-entry clearfix margin-top-10"> <img src="images/faq-img1.jpg" alt="" class="alignleft">
                                                                <p>Sí, al finalizar el primer ciclo, podemos reinvertir tus fondos, para que sigas disfrutanto de tu rentabilidad.</p>
                                                            </div>
                                                        </div>
                                                        <!--Panel_body--> 
                                                    </div>
                                                </div>
                                            </div>
                                            <!--description--> 
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--FAQ LEFT--> 
                                <!--FAQ LEFT-->
                            </div>
                        </div>
                        <!--FAQ RIGHT--> 
                        
                    </div>
                    <!--container ends--> 
                </section>

                <div class="container">
                    <div class="row">
                        <div class="inventory_box car_listings boxed boxed_full row">
                                <h4 class="margin-bottom-25 margin-top-none" style="color: #EC4B25;"><strong>INVERSIONES</strong> </h4>
        
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <div class="inventory clearfix margin-bottom-20 styled_input has-photoswipe"> 
                                    <input type="checkbox" class="checkbox compare_vehicle" id="vehicle_387" data-id="387"> 
                                    <label for="vehicle_387"></label> 
                                    
                                    <a class="inventory" href="">
                                        <div class="title">Seat León</div> 
                                        <img src="{{asset('images/destacado_1.png')}}" class="preview" alt="preview" width="200" height="150" data-gallery-images="[{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-1.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-2.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-3.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-4.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-5.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-6.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-7.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-8.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-9.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-10.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-11.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-12.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-13.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-14.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-15.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-16.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-17.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-18.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800}]" data-pswp-uid="1">
                                            <div class="clearfix"></div> 
                                        </a>
                                        <div class="price"> 
                                            <div class="figure"> $43,995</div>
                                        </div> 
                                    </div>
                                </div>
        
                                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="inventory clearfix margin-bottom-20 styled_input has-photoswipe"> 
                                            <input type="checkbox" class="checkbox compare_vehicle" id="vehicle_387" data-id="387"> 
                                            <label for="vehicle_387"></label> 
                                            
                                            <a class="inventory" href="">
                                                <div class="title">Opel Crossland X</div> 
                                                <img src="{{asset('images/destacado_2.png')}}" class="preview" alt="preview" width="200" height="150" data-gallery-images="[{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-1.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-2.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-3.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-4.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-5.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-6.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-7.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-8.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-9.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-10.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-11.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-12.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-13.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-14.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-15.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-16.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-17.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-18.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800}]" data-pswp-uid="1">
                                                    <div class="clearfix"></div> 
                                            </a>
                                            <div class="price"> 
                                                <div class="figure"> $43,995</div>
                                            </div> 
                                        </div>
                                    </div>
        
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                        <div class="inventory clearfix margin-bottom-20 styled_input has-photoswipe"> 
                                            <input type="checkbox" class="checkbox compare_vehicle" id="vehicle_387" data-id="387"> 
                                            <label for="vehicle_387"></label> 
                                                
                                            <a class="inventory" href="">
                                                <div class="title">Nissan Qashqai</div> 
                                                <img src="{{asset('images/destacado_3.png')}}" class="preview" alt="preview" width="200" height="150" data-gallery-images="[{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-1.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-2.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-3.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-4.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-5.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-6.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-7.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-8.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-9.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-10.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-11.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-12.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-13.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-14.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-15.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-16.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-17.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-18.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800}]" data-pswp-uid="1">
                                                    
                                                <div class="clearfix"></div> 
                                            </a>
                                            <div class="price"> 
                                                <div class="figure"> $43,995</div>
                                            </div> 
                                        </div>
                                    </div>
        
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                            <div class="inventory clearfix margin-bottom-20 styled_input has-photoswipe"> 
                                                <input type="checkbox" class="checkbox compare_vehicle" id="vehicle_387" data-id="387"> 
                                                <label for="vehicle_387"></label> 
                                                
                                                <a class="inventory" href="">
                                                    <div class="title">Audi Q2</div> 
                                                    <img src="{{asset('images/destacado_4.png')}}" class="preview" alt="preview" width="200" height="150" data-gallery-images="[{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-1.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-2.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-3.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-4.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-5.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-6.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-7.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-8.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-9.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-10.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-11.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-12.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-13.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-14.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-15.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-16.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-17.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800},{&quot;src&quot;:&quot;https:\/\/demo.themesuite.com\/automotive-wp\/wp-content\/uploads\/2014\/09\/9-carrera-18.jpg&quot;,&quot;w&quot;:3200,&quot;h&quot;:1800}]" data-pswp-uid="1">

                                                        <div class="clearfix"></div> 
                                                </a>
                                                    <div class="price"> 
                                                        <div class="figure"> $43,995</div>
                                                    </div> 
                                            </div>
                                        </div>
        
                        </div>
                    </div>
                </div>
            
            <!--nosotros-->
            <section class="welcome-wrap padding-top-30 sm-horizontal-15">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h4 class="margin-bottom-25 margin-top-none"><strong>NOSOTROS</strong> </h4>
                        <p>Lorem ipsum dolor sit amet, falli tollit cetero te eos. Ea ullum liber aperiri mi, impetus
                            ate philosophia ad duo, quem regione ne ius. Vis quis lobortis dissentias ex, in du aft 
                            philosophia, malis necessitatibus no mei. Volumus sensibus qui ex, eum duis doming 
                            ad. Modo liberavisse eu mel, no viris prompta sit. Pro labore sadipscing et. Ne peax
                            egat usu te mel <span class="alternate-font">vivendo scriptorem</span>. Pro labore sadipscing et. Ne pertinax egat usu te 
                            mel vivendo scriptorem.</p>
                        <p>Cum ut tractatos imperdiet, no tamquam facilisi qui. Eum tibique consectetuer in, an 
                            referrentur vis, vocent deseruisse ex mel. Sed te <span class="alternate-font">idque graecis</span>. Vel ne libris dolores, 
                            mel graece mel vivendo scriptorem dolorum.</p>
                    </div>
                    <!--welcome ends-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-right-none sm-padding-left-none md-padding-left-15 xs-padding-left-none padding-bottom-40 scroll_effect fadeInUp" data-wow-delay=".2s" style="z-index: 100; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        @isset ($video)
                            
                        
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! html_entity_decode($video) !!}

                            {{-- <iframe class="embed-responsive-item" style="width: 100%; height: 50%;" src="" allowfullscreen></iframe> --}}
                            
                        </div>
                        @endisset
                    </div>
                    <!--invetory ends--> 
                </div>
                
                
            </section>

            <section class="message-wrap">
                <div class="container">
                    <div class="text-center d-flex justify-content-center py-5">
                    
                        <h2 class="col-lg-12 col-md-8 col-sm-12 col-xs-12 align-center margin-bottom-25 " style="text-align: center !important;">Suscríbete a nuestro <span class="alternate-font">Newsletter</span></h2>
                
                        <div class="contact_wrapper information_head">
                            <div class="form_contact margin-bottom-20">
                                <div id="result"></div>
                                <fieldset id="contact_form">
                                    <input type="email" name="email" class="form-control margin-bottom-25 input-lg" placeholder="Tu correo electrónico...)">
                                    <input id="submit_btn" type="submit" value="Suscribirse">
                                </fieldset>
                            </div>
                        </div>                        
                    </div>
                </div>
            <div class="message-shadow"></div>
                </section>
                
 
    <div class="row parallax_parent margin-top-30" style="height: 278px;">
            <div class="parallax_scroll clearfix" data-velocity="-.5" data-offset="-300" data-no-repeat="true" data-image="{{asset('images/parallax2')}}.jpg" style="background-image: url(&quot;{{asset('images/parallax2.jpg')}}&quot;); background-position: 50% -315px;">
                <div class="overlay">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col">
                                <div class=" text-center">
                                    <br>
                                    <h2>Lo que nuestros clientes dicen</h2>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div id="carousel-example-generic" class="carousel col-12 slide mt-5" data-ride="carousel">
                                <div class="carousel-inner">
                                @foreach($comentarios as $comentario)
                                    <div class="item {{ $loop->first ? 'active' : '' }}">
                                        <div class="owl-item" >
                                            <div class="col-12">
                                                <div class="d-flex justify-content-center ">
                                                    <img class="img-circle "  src="{{ url('/images/comentarios/'.$comentario->url_imagen) }}" alt="" width="140" height="140">
                                
                                                    <div class="number" >
                                                        <em><h5>{!! $comentario->contenido !!}</h5></em>
                                                        <br> 
                                                        <h6> <b>{{ $comentario->nombre }} / {{ $comentario->procedencia }}</b></h6>
                                                        <br> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   @endforeach    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br><br><br><br>

        <div class="message-shadow"></div>
        <div class="clearfix"></div>
        <section class="content">
            <div class="container">
                <div class="inner-page">
                    <div class="col-md-12 padding-none"> 
                        <!--MAP-->

                        <div class="find_map row clearfix">
                            <h2 class="margin-bottom-25 margin-top-none">ENCUÉNTRANOS</h2>
                            @isset ($ubicacion)
                                {!! html_entity_decode($ubicacion) !!}
                            @endisset
                            
                            {{-- <iframe src="{{$ubicacion}}" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                        </div>
                        <!--MAP--> 
                        <!--CONTACT INFORMATION-->
                        <div class="row contacts margin-top-25"> 
                            <!--LEFT INFORMATION-->
                            <div class="col-md-6 left-information">
                                <div class="contact_information information_head clearfix">
                                    <h3 class="margin-bottom-25 margin-top-none">INFORMACIÓN DE CONTACTO</h3>
                                    <div class="address clearfix margin-right-25 ">
                                        <div class="icon_address">
                                            <p><i class="fas fa-map-marker-alt"></i><strong>Dirección:</strong></p>
                                        </div>
                                        <div class="contact_address">
                                            <p class="margin-bottom-none">{{$direccion}}</p>
                                        </div>
                                    </div>
                                    <div class="address clearfix address_details margin-right-25 ">
                                        <ul class="margin-bottom-none">
                                            @isset($telefono)
                                            <li><i class="fas fa-phone"></i><strong>Teléfono:</strong> <span> {{$telefono}}</span></li>
                                            @endisset
                                            @isset($email)
                                            <li><i class="fas fa-envelope"></i><strong>Correo:</strong> <a href="mailto:sales@company.com">{{$email}}</a></li>
                                            @endisset
                                            @isset($web)
                                            <li class="padding-bottom-none"><i class="fas fa-laptop"></i><strong>Web:</strong> <a href="http://company.com">{{$web}}</a></li>
                                            @endisset
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--LEFT INFORMATION--> 
                            
                            <!--RIGHT INFORMATION-->
                           <div class="col-md-5 col-lg-offset-1 col-md-offset-1 padding-right-none xs-padding-left-none sm-padding-left-none xs-margin-top-30">
                                <div class="contact_wrapper information_head">
                                    <h3 class="margin-bottom-25 margin-top-none">CONTÁCTANOS</h3>
                                    <div class="form_contact margin-bottom-20">
                                        <div id="result"></div>
                                        <fieldset id="contact_form">
                                            <div style="display: none" class="alert-top fixed-top col-12  text-center alert  alert-success" id="estado"> {{ session('estado') }}</div>     
                                                                                                              
                                        <form method="POST" action="enviar" class="contact-form"  role="form" id="form-contacto">
                                            {{ csrf_field() }}
                                            <input id="nombre" type="text" name="nombre"  class="form-control margin-bottom-25"  placeholder="Nombre">
                                            <p class="text-danger" id='error_nombre'>{{$errors->first('nombre')}}</p>
                                           
                                            <input type="email" id="email" name="email" class="form-control margin-bottom-25" placeholder="Correo Electrónico" >
                                            <p class="text-danger" id='error_email'>{{$errors->first('email')}}</p>
                                            
                                            <textarea  id="mensaje"  name="mensaje" class="form-control margin-bottom-25 contact_textarea" placeholder="Tu mensaje" rows="7"  data-error="Por favor incluye un mensaje."></textarea>
                                            <p class="text-danger" id='error_mensaje'>{{$errors->first('mensaje')}}</p>
                                            <input id="btn-contacto" type="submit" value="Enviar Mensaje">
                                        </form>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                            <!--RIGHT INFORMATION--> 
                            
                        </div>
                        <!---CONTACT INFORMATION--> 
                        
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--container ends--> 
        </section>
        </div>
    </div>
</section>

@endsection
@push('scripts')
<script>
    var route='{{asset('images/find.jpg') }}';
    $('.evento').parallax({imageSrc: route});



    $('#form-contacto').submit(function(e) {
   e.preventDefault();
            $("#nombre").css("border", "none");
            $("#email").css("border", "none");
            $("#mensaje").css("border", "none");
            var nombre    = $('input#nombre').val();
            var email    = $('input#email').val();
            var mensaje = $('textarea#mensaje').val();

            $.ajaxSetup({
                    headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "post",
                    url: '{{ route('send_mail') }}',
                    dataType: "json",
                    data: { nombre: nombre,email: email ,mensaje: mensaje,_token: '{{csrf_token()}}' },
                    success: function (data){
                    //console.log(data);   
                         if($.isEmptyObject(data.error)){
                            $("#estado").css("display","block");
                            $("#estado").html(data.success);
                            $("#estado").fadeIn( 300 ).delay( 1500 ).fadeOut( 1500 );
                            $("#form-contacto").trigger("reset");

                          }else{
                                                   
                            $.each( data.error, function( key, value ) {
                                $("#"+key).css("border", "1px solid").css("border-color", "#FC8496");
                                $("#error_"+key).html(value);
                                $("#error_"+key).fadeIn( 300 ).delay( 1500 ).fadeOut( 1500 );
                              });
                          }       

                    }

                });

        });

    
</script>

@endpush