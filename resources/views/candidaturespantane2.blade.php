@extends('layouts.main')
<!--APropos's section-->
@section('title','CARRIERE')
@section('content')
<style>

    @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");
    
        
        #employchoix{
            background-color: brown;
            height: 50%;
            padding: 2% 2% 2% 2%;
            border-radius: 50%
        }
        #offredemploi_desc_text{ 
            color: black;
            font-size: 21px;
            font-weight: 500;
            text-align: justify;
            font-family: "Source Sans Pro";
        }
        #offretable{
            background-color: brown;
        }

        #background-img{
            background: url('public/images/offredemploi/Banner_Condidature_spontane.png')no-repeat center center;
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
                background: url('public/images/offredemploi/Banner_Condidature_spontane.png')no-repeat center center;
                background-size: cover;
                width: 100%;
                height: 100%;
                padding-bottom: 30%;
                margin-bottom: 16%;
            }
            #offredmpdetail{
                font-weight: 500px;
                font-size: 1.8rem;    
                font-family: "Source Sans Pro";
                padding-top: 10%;
                text-align: left;
                margin-top: 10%;
            }

            #employchoix{
                background-color: brown;
                height: 50%;
                padding: 5% 5% 5% 5%;
                border-radius: 50%;
                margin-bottom: 20px;
            }
            #offredemploicontainer{
                margin-top: -15%;
                margin-left: 5%;
                margin-right: 5%;
                text-align: justify;
            }
            #sendcoverltter{
                text-align: right;
            }
        }
      
        @media only screen and (max-width: 280px){
           
        }
        
  </style>


<!--APropos's section-->

    <header id="background-img" class="text-left text-white masthead" style="">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 id="offredmpdetail" class="text-white text-left display-4">Offre d'emploi</h2>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
       <!-- <div  class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--style="height:550px; position: relative; top: -100px;"-->
             <!--   <img id="background-img" src="{asset('public/images/offredemploi/Banner_Condidature_spontane.png')}}" alt=""> 
                    <div class="product container">
                    <h2 id="offredmpdetail" class="text-white text-left display-4" >Offre d'emploi</h2>
                    </div>
            </div>
        </div> -->
    
        <!-- Our Activities -->
      
            <div id="offredemploicontainer"  class="row">
                <div id="employchoix" class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-2">
                   <img src="{{ asset('public/images/offredemploi/Artboard_cv.png') }}" alt="" class="rounded float-left pt-0" >  <!-- style="max-width: 10rem; max-height: 10rem; position: relative" -->
                </div>
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="text-left">
                        <h1 class="text-uppercase" style="color: rgb(0, 0, 0); font-weight: 700; text-align: left">candidature spontanée</h1>
                    </div>
                    <div class="text-left">
                        <p id="offredemploi_desc_text" class="text-capitalize">
                              et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                        </p>
                    </div>
                </div>
            </div>
        
        <!-- Finished our Activities -->
        
        <!-- Job offer table -->
    
        <div id="offretable" class="content">
        
          <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-4 pb-5">
                    <h2 class="text-left" style="color: white">Entrez vos informations</h2>
                </div>
            </div>
            <form id="job_offer_mtv_form">
    
                <div class="row">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-4">
                        <div class="form-group">
                            <label class="form-label text-white">Poste souhaité</label>
                            <input type="text" class="form-control" name=postsouhaiter id="postsouhaiter" aria-describedby="nameHelp" placeholder="Enter le poste souhaiter" style="font-size: 1rem;" required>
                            <div class="invalid-feedback">SVP Entrez votre poste souhaité.</div>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                        </div>
                    </div>
    
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-4">
                        <div class="form-group">
                            <label class="form-label text-white">Disponible à partir du</label>
                            <input type="date" name="disponibilte" class="form-control" id="disponibilte" aria-describedby="prenomHelp" placeholder="" style="font-size: 1rem" required>
                            <div class="invalid-feedback">SVP Entrez la date de disponibilité.</div>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                </div>
    
                <div class="row">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-4">
                        <div class="form-group">
                            <label class="form-label text-white">Nom</label>
                            <input type="text" class="form-control" name=firstname id="firstname" aria-describedby="nameHelp" placeholder="Enter nom" style="font-size: 1rem;" required>
                            <div class="invalid-feedback">SVP Entrez votre Nom.</div>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                        </div>
                    </div>
    
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-4">
                        <div class="form-group">
                            <label class="form-label text-white">Prénom</label>
                            <input type="text" name="secondname" class="form-control" id="secondname" aria-describedby="prenomHelp" placeholder="Enter prénom" style="font-size: 1rem" required>
                            <div class="invalid-feedback">SVP Entrez votre Prénom.</div>
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                </div>
    
                <div class="row">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-4">
                        <div class="form-group">
                            <label class="form-label text-white">Wilaya</label>
                            <select name="country" class="form-select d-block" id="country" style="font-size: 1rem" required>
                                <option default>Sélectionner</option>
                                @foreach (wilayas() as $id => $wilaya)
                                    <option value="{{ $id }}">{{ $id }} - {{ $wilaya }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">SVP Entrez votre Willaya.</div>
                        </div>
                    </div>
    
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-4">
                        <div class="form-group">
                            <label class="form-label text-white">Civilité</label>
                            <select name="situation" class="form-select" id="situation" style="font-size: 1rem" required>
                                <option>Sélectionner</option>
                                <option>Célébataire</option>
                                <option>Marrié</option> 
                            </select>
                            <div class="invalid-feedback">SVP Entrez votre Situation.</div>
                            </div>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                </div>
    
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-4">
                            <div class="form-group">
                                <label class="form-label text-white">Téléphone Mobile</label>
                                <input name="phone" type="text" class="form-control" id="phone" aria-describedby="prenomHelp" placeholder="Enter téléphone" style="font-size: 1rem" required>
                                <div class="invalid-feedback">SVP Entrez votre téléphone mobile.</div>
                            </div>
                        </div>
    
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-4">
                            <div class="form-group">
                                <label class="form-label text-white">E-mail</label>
                                <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" style="font-size: 1rem" required>
                                <div class="invalid-feedback">SVP Entrez votre e-mail.</div>
                              </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                    </div>
    
                  
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6">
                            <label class="d-block mb-4">
                                <span class="form-label fw-bolder text-white">Your CV</span>
                                <input name="cvfile" type="file" class="form-control" id="cvfile" style="text-align: right;" style="font-size: 1rem" required />
                                <div class="invalid-feedback">SVP uploader votre CV (pdf, docs, doc).</div>
                            </label>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xm-2"></div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6">
                            <label class="d-block mb-4">
                                <span class="form-label fw-bolder text-white">Cover Letter</span>
                                <input name="lettreMtvfile" type="file" class="form-control" id="lettreMtvfile" style="text-align: right;" style="font-size: 1rem" required />
                                <div class="invalid-feedback">SVP uploader cover letter plz (pdf, docs, doc).</div>
                            </label>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-9 col-sm-9 col-xm-9"></div>
                        <div id="sendcoverltter" class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xm-3">
                            <button id="btnsendcvfile" type="submit" class="btn btn-danger text-center mt-4" style="text-align: rigth; font-size: 1rem; margin-bottom: 15px">Envoyer</button>
                        </div>
                    </div>
                    
      
                  </form>
          </div>
      
        </div>
    </div>
      

    <script src="{{ asset('public/js/offredemploijs/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/js/offredemploijs/poper.min.js') }}"></script>
    <script src=" {{ asset('public/js/offredemploijs/bootsrap.min.js') }} "></script>
    <script src="{{ asset('public/js/offredemploijs/main.js') }}"></script>
@endsection