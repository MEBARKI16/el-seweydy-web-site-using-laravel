@extends('layouts.main')
<!--APropos's section-->
@section('title','CARRIERE')
@section('content')
<style>
  
.ps2{
          font-size:25px !important;
        }
        @media screen and (max-width: 1520px) {

.ps2{
  font-size:20px !important;
}
}
@media screen and (max-width: 1328px) {

.ps2{
font-size:15px !important;
}
}
@media screen and (max-width: 1028px) {

.ps2{
font-size:10px !important;
}
}
.hs{
          font-size:40px !important;
          width: 40%;
        }
        @media screen and (max-width: 1520px) {

.hs{
  font-size:30px !important;
}
}
@media screen and (max-width: 1328px) {

.hs{
font-size:20px !important;
}
}
@media screen and (max-width: 1028px) {

.hs{
font-size:15px !important;
}
}
@media screen and (max-width: 1028px) {

.hs{
width: 60% !important;
}
}
.hc{
          font-size:25px !important;
        }
        @media screen and (max-width: 1520px) {

.hc{
  font-size:20px !important;
}
}
@media screen and (max-width: 1328px) {

.hc{
font-size:15px !important;
}
}
@media screen and (max-width: 400px) {

.hc{
font-size:10px !important;
}
}

        </style>
<!-- cover photo -->
<div class="card text-white">
    <img class="card-img" src="{{ asset('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1164/Banner.png') }}" alt="Card image">
    <div class="card-img-overlay h-100 d-flex flex-column justify-content-center">
      <h1 id="contact_h1_title" class="card-title text-white display-1">Actualité</h1>
    </div>
</div>

<div class="container pt-4">

    <!-- Detail Evenement -->
   
    <div style="border: none;margin-top:60px; border-bottom: 1px solid black; height: 0px;"></div>
    <div class="text-center" style="padding-bottom: 90px;width:250px;margin:auto;margin-bottom:50px;border-top: 2px solid red;padding:20px;margin-top:0">
        <h1 style="color: black;">International</h1>
    </div>

    <style>
            .containerpartage {
                display: flex;
         
                align-items: center;
            }
    
            .icon {
                font-size: 30px !important;
                margin-bottom: 8px;
            }
        </style>
    <div class="col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-xm-12">
        <div class="card" style="border: none">
            <div class="card-body">  
                <h5 class="card-title" style="color: black; text-transform: uppercase; text-align: center; font-size: 33px; font-weight: 800; padding-bottom: 30px">la présidente de la tanzanie célèbre la mise en eau et le remplissage de jnhpp avec "elsewedy electric" et "the arab contractors"</h5>
                <a href="#" class="btn " style="float: left; background-color: transparent; color: black; font-size: 20px; border-color: transparent;font-weight:normal">Février 2023</a>
                <a href="#" class="btn " style="float: right; background: transparent; border: 1px solid black; border-radius: 34px; text-align: center;padding-left:3%;padding-right:3%; color: black; font-size: 20px;font-weight:normal">	<div class="containerpartage">
                       <h1 style="font-size:20px">Partager l'article</h1>
                    <i class="icon fa-sharp fa-solid fa-share-nodes" style="color: red; padding-left: 10px;font-size:30px;"></i>
                        
                    
                    </div>   </a>
              </div>
            <img class="card-img-top" src="{{ asset('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1164/1.png') }}" alt="Card image cap">  
        </div>
    </div>

    <div class="pt-4">
        <p style="text-transform: capitalize; justify-content: left; font-size: 18px; color: black; font-weight: 500 ">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <p style="text-transform: capitalize; justify-content: left; font-size: 18px; color: black; font-weight: 500 ">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
    <div style="padding-bottom: 40px"></div>

    


</div>

<!-- Evenements similar (cards) -->
    
<div class="row pt-4" style="background-color: #dadada; padding-bottom: 70px; margin-bottom: 60px">
    <div style="padding-top: 70px; padding-bottom: 30px">
        <h1 class="text-left" style="padding-left: 80px; font-size: 50px; font-weight: 800">
            Actualités connexes
        </h1>
    </div>
    <div class="row pt-4" style="width:80%;margin:auto">
  <div id="evenShow1" class="col-xxl-4 col-xl-4 col-md-4 col-sm-12 col-xm-12 mb-3" >
        <div class="card" style="border:none;">
                <div style="position:relative;" >
                    <img class="card-img-top" style="width:100%;height:100%" src="{{ url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/1.png') }}" alt="Card image cap">
                <h5 class="card-title text-center titre-img hc" style="background-color:#E12630;color:white;position:absolute;bottom:-30px;left:20px;padding:15px;border-radius:30px;padding-left:10%;padding-right:10%">National</h5>
                </div>
               
                <div class="card-body" style="margin-top:20px">
                    <p class="card-text ps2" style='color:black;font-weight:bold'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text ps2" style='color:black;font-weight:normal'>Fev 2023</p>
  
                    <a id="lirelasuite" class="card-text ps2" style="color:black;font-weight:normal" href="{{ route('detailevenement') }}"><div style="display:flex;justify-content:flex-end;align-items:center"><p class="card-text titre-img" style='color:black;font-weight:normal;padding-top:4px'>Lire La suite</p>  <div style="width:40px;border:1px solid #E12630;margin-left:10px"></div><i class="fa-sharp fa-solid fa-play" style="color:#E12630;font-size:15px"></i></div> </a>
             
                </div>
            </div>
    </div>

    <div class="col-xxl-4 col-xl-4 col-md-4 col-sm-12 col-xm-12 mb-3" >
            <div class="card" style="border:none;">
                    <div style="position:relative;" >
                        <img class="card-img-top" style="width:100%;height:100%" src="{{ url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/1.png') }}" alt="Card image cap">
                    <h5 class="card-title text-center titre-img hc" style="background-color:#E12630;color:white;position:absolute;bottom:-30px;left:20px;padding:15px;border-radius:30px;padding-left:10%;padding-right:10%">National</h5>
                    </div>
                   
                    <div class="card-body" style="margin-top:20px">
                        <p class="card-text ps2" style='color:black;font-weight:bold'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text ps2" style='color:black;font-weight:normal'>Fev 2023</p>
      
                        <a id="lirelasuite" class="card-text ps2" style="color:black;font-weight:normal" href="{{ route('detailevenement') }}"><div style="display:flex;justify-content:flex-end;align-items:center"><p class="card-text titre-img" style='color:black;font-weight:normal;padding-top:4px'>Lire La suite</p>  <div style="width:40px;border:1px solid #E12630;margin-left:10px"></div><i class="fa-sharp fa-solid fa-play" style="color:#E12630;font-size:15px"></i></div> </a>
                 
                    </div>
                </div>
    </div>

    <div id="evenShow2" class="col-xxl-4 col-xl-4 col-md-4 col-sm-12 col-xm-12 mb-3">
            <div class="card" style="border:none;">
                    <div style="position:relative;" >
                        <img class="card-img-top" style="width:100%;height:100%" src="{{ url('public/images/WL_ELSWEDY_Elements_Page_Actualite/3072x1113/1.png') }}" alt="Card image cap">
                    <h5 class="card-title text-center titre-img hc" style="background-color:#E12630;color:white;position:absolute;bottom:-30px;left:20px;padding:15px;border-radius:30px;padding-left:10%;padding-right:10%">National</h5>
                    </div>
                   
                    <div class="card-body" style="margin-top:20px">
                        <p class="card-text ps2" style='color:black;font-weight:bold'>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text ps2" style='color:black;font-weight:normal'>Fev 2023</p>
      
                        <a id="lirelasuite" class="card-text ps2" style="color:black;font-weight:normal" href="{{ route('detailevenement') }}"><div style="display:flex;justify-content:flex-end;align-items:center"><p class="card-text titre-img" style='color:black;font-weight:normal;padding-top:4px'>Lire La suite</p>  <div style="width:40px;border:1px solid #E12630;margin-left:10px"></div><i class="fa-sharp fa-solid fa-play" style="color:#E12630;font-size:15px"></i></div> </a>
                 
                    </div>
                </div>
    </div>
    </div>
  

</div>

@endsection