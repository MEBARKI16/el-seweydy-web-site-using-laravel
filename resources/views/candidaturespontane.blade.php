@extends('layouts.main')
<!--APropos's section-->
@section('title','CARRIERE')
@section('content')
<style>

  @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");
   
   #offredemploi_img h1{
      font-weight: 700px;
      font-size: 4rem;    
      font-family: "Source Sans Pro";
   }
   #offredmpl_text{
      font-size: 20px;
      text-align: justify;
      font-family: "Source Sans Pro";
      color: black;
    }
    #employchoix{
          padding: 2% 2% 2% 2%;
          height: 50%;
    }
    #offretable{
      background-color: brown;
    }
    table{
      text-align: center;
    }
    #background-img{
            background: url('public/images/offredemploi/Banner_Offre_emploi.png')no-repeat center center;
            background-size: cover;
            width: 100%;
            height: 100%;
            padding-bottom: 30%;
            margin-bottom: 5%;
        }
        #offredmpdetail{
            font-weight: 700px; 
            font-size: 4rem;
            font-family: "Source Sans Pro";
            text-align: left;
            padding-top: 20%;
        }

      @media only screen and (max-width: 760px){
        #background-img{
                background: url('public/images/offredemploi/Banner_Offre_emploi.png')no-repeat center center;
                background-size: cover;
                width: 100%;
                height: 100%;
                padding-bottom: 21%;
                margin-bottom: 16%;
            }
            #offredmpdetail{
                font-weight: 500px;
                font-size: 1.6rem;    
                font-family: "Source Sans Pro";
                padding-top: 10%;
                text-align: left;
                margin-top: 10%;
            }
        #offredemploi_img h1{
          font-weight: 500px;
          font-size: 1.4rem;    
          font-family: "Source Sans Pro";
          padding-top: 13%;
          text-align: left;
        }
        #employchoix{
          margin-top: -50px;
          margin-bottom: 16px;
          padding: 4% 4% 4% 4%;
        }
        #vousnetrv, #envoicv{
          text-align: center;
        }
      }
    
      @media only screen and (max-width: 280px){
         
      }
      
</style>
  

<header id="background-img" class="text-left text-white masthead" style="">
  <div class="container">
      <div class="row">
          <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <h2 id="offredmpdetail" class="text-white text-left display-4">Offre d'emploi</h2>
          </div>
      </div>
  </div>
</header>

<!--APropos's section-->
<!--
    <div id="offredemploi_img" class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--style="height:550px; position: relative; top: -100px;"-->
        <!--    <img id="background-img" src="{asset('public/images/offredemploi/Banner_Offre_emploi.png')}}" alt="" style="position: relative;"> 
                <div class="product container">
                <h1 class="text-white text-left display-4" >Offre d'emploi</h1>
                </div>
        </div>
    </div> -->

    <!-- Our Activities -->
    <div class="container">
        <div class="row">
            <div id="employchoix" class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12" style="background-color: brown; border-radius: 50%">
               <img src="{{ asset('public/images/offredemploi/Artboard.png ') }}" alt="" class="rounded float-left pt-0"  >  <!-- style="max-width: 10rem; max-height: 10rem; position: relative" -->
            </div>
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="text-left">
                    <h1 class="text-uppercase" style="color: rgb(0, 0, 0); font-weight: 700; text-align: left">nos dernière offres d'emploi</h1>
                </div>
                <div class="text-left">
                    <p id="offredmpl_text" class="text-capitalize" style="font-weight: 400; line-height: 1.4">
                          et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Finished our Activities -->
    
    <!-- Job offer table -->

    <div id="offretable" class="content">
    
      <div class="container-fluid">
        
  
        <div class="table-responsive custom-table-responsive">
  
          <table id="tablespontane" class="table table-dark table-borderless mb-0">
            <thead>
              <tr>  
  
                <th scope="col">
                  
                </th>
                
                <th scope="col">DATE</th>
                <th scope="col">POSTE</th>
                <th scope="col">LIEU</th>
                <th></th>
              </tr>
            </thead>
            <tbody id="bodyspontane">
              <tr>
                <td></td>
                <td> 2022-04-12 <span class="badge badge-secondary">New</span> </td>
                <td>James Yates </td>
                <td> Web Designer Far far away, behind the word mountains</td>
                <td> <a class="btn btn-danger btn-rounded" href="{{ route('detailoffredemploi') }}"  style="color: white; text-transform: uppercase;">VOIR L'OFFRE</a> </td> 
              </tr> 
              <tr>
                <td></td>
                <td> 2022-04-12 <span class="badge badge-secondary">New</span> </td>
                <td>James Yates </td>
                <td> Web Designer Far far away, behind the word mountains</td>
                <td> <a class="btn btn-danger btn-rounded" href="{{ route('detailoffredemploi') }}"  style="color: white; text-transform: uppercase;">VOIR L'OFFRE</a> </td>  
              </tr> 
              <tr>
                <td></td>
                <td> 2022-04-12 <span class="badge badge-secondary">New</span> </td>
                <td>James Yates </td>
                <td> Web Designer Far far away, behind the word mountains</td>
                <td> <a class="btn btn-danger btn-rounded" href="{{ route('detailoffredemploi') }}"  style="color: white; text-transform: uppercase;">VOIR L'OFFRE</a> </td> 
              </tr> 

              <tr>
                <td></td>
                <td> 2022-04-12 <span class="badge badge-secondary">New</span> </td>
                <td>James Yates </td>
                <td> Web Designer Far far away, behind the word mountains</td>
                <td> <a class="btn btn-danger btn-rounded" href="{{ route('detailoffredemploi') }}"  style="color: white; text-transform: uppercase;">VOIR L'OFFRE</a> </td> 
              </tr> 
            </tbody>
          </table>
        </div>
  
  
      </div>
  
    </div>
      
    <!-- Finished job offer table -->
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
        <div id="spontaneotheroffre" class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xm-10">
          <div class="container">
            <div class="row">
              <br>
              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xm-10" style="padding-left: 10%; padding-right: 20%;">
                <h1 id="vousnetrv" class="text-uppercase text-justify" style="font-size: 200%; text-align: center;">VOUS NE TROUVEZ PAS L'OFFRE D'EMPLOI QUI VOUS CORRESPOND ?</h1>
                <br>
                <h3 id="envoicv" class="text-capitalize">Envoyer-nous votre <a href="{{ route('candidaturespontane2') }}" style="color: brown">candidature spontanée.</a></h3>
              </div>
              <br>
            </div>
          </div>
        </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
      </div>
    </div>

    <script src="{{ asset('public/js/offredemploijs/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/js/offredemploijs/poper.min.js') }}"></script>
    <script src=" {{ asset('public/js/offredemploijs/bootsrap.min.js') }} "></script>
    <script src="{{ asset('public/js/offredemploijs/main.js') }}"></script>
@endsection