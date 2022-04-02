@extends('layouts/plantilla')
@extends('layouts/scriptst1')

@section('title','Categorias')

@section('content')


    <div class="clearfix"></div>

<div class="header-inner-tmargin">
        <section class="section-side-image clearfix">
      <div class="img-holder col-md-12 col-sm-12 col-xs-12">
        <div class="background-imgholder" style="background:url(/competitividad2020/images/sliders/trabajo.jpg);"><img class="nodisplay-image" src="/competitividad2020/images/sliders/trabajo.jpg" alt=""/> </div>
      </div>
      <div class="container-fluid" >
        <div class="row">       
        <div class="col-md-12 col-sm-12 col-xs-12 clearfix nopadding">
        <div class="header-inner"><div class="">       
       <div class="text text-center">
    <h3 class="uppercase text-white less-mar-1 title">CATEGORÍAS</h3>
    <h6 class="uppercase text-white sub-title">DE PARTICIPACIÓN</h6>
    </div>
       </div>       
        </div></div>        
        </div>
      </div>
    </section>
    <div class=" clearfix"></div>
    <!--end section-->
    </div>
    <div class="clearfix"></div>
    <!--end header inner-->
    
    <section>
      <div class="pagenation-holder">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h4>CATEGORIAS QUE PARTICIPAN PARA LA ELABORACIÓN DE LAS PROPUESTAS:</h4>
            </div>
            <div class="col-md-6">
              <ol class="breadcrumb">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li class="current"><a href="#"></a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!--end section-->
    
    <section class="sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-5 animate-in" data-anim-type="fade-in-left" data-anim-delay="100"> <img src="/competitividad2020/images/categorias/innovaciones.jpg" alt="" class="img-responsive"/> </div>
            <!--end image-->
            
            <div class="col-md-7">
              <h4 class="uppercase">Proyectos de Servicios o Procesos Nuevos (Innovaciones)</h4>
              <p>En esta categoría se recibirán proyectos o servicios que actualmente no se realicen en nuestra CFE y que como resultado mejoren la satisfacción del cliente.
              </p>
            
            </div>
            <!--end text--> 
            
          </div>
          <!--end item--> 
          
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
    
    <div class="divider-line solid light"></div>
    <section class="sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-7">
              <h4 class="uppercase">Proyecto Servicios o Procesos que Mejoran los Resultados de Satisfacción al Cliente (Mejores Prácticas).</h4>
              <p> En esta categoría se recibirán proyectos que documente prácticas que ya se realizan en los procesos y que como resultado mejoran la satisfacción del cliente.
              </p>
              
            </div>
            <!--end text-->
            
            <div class="col-md-5 animate-in" data-anim-type="bounce-in" data-anim-delay="100"> <img src="/competitividad2020/images/categorias/mejores_practicas.jpg" alt="" class="img-responsive"/> </div>
            <!--end image--> 
            
          </div>
          <!--end item--> 
          
        </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!-- end section -->
    
    
    
    <section class="section-dark sec-padding">
      
      </section>
      <div class="clearfix"></div>
      <!--end section-->
      
      
      <div class="clearfix"></div>
      <!-- end section --> 
      
      <a href="#" class="scrollup"></a><!-- end scroll to top of the page--> 
      
    </div>
    <!--end site wrapper--> 
  </div>
  <!--end wrapper boxed--> 
  
 
  <script>
      $(window).load(function(){
        setTimeout(function(){
  
          $('.loader-live').fadeOut();
        },1000);
      })
  
    </script>

   
   

@endsection