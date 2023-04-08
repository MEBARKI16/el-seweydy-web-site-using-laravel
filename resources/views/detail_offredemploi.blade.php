@extends('layouts.main')
<!--APropos's section-->
@section('title','CARRIERE')
@section('content')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");
    
    #titleimgdetailofre{
        font-weight: 700px;
        font-size: 4rem;
    }
    #postulerbtnofredtl{
        border-radius: 20px;
        margin-left: -15%
    }
    #txtoffredetl{
        font-size: 15px; 
        color: black;
        font-weight: 600;
        text-align: justify;
    }
    #aproposnoffredtl{
        font-size: 15px; 
        color: white; 
        font-weight: 600; 
        padding-left: 2%; 
        text-align: justify;
    }
    
    @media only screen and (max-width: 760px){
            #titleimgdetailofre{
                font-weight: 400;
                font-size: 19px;
                font-family: "Source Sans Pro";
                text-align: left;
                padding-top: 13%;
            }
            #rowofredetaile{
                margin-top: -20%;
            }
            #postulerbtnofredtl{
                border-radius: 20px;
                margin-left: 0%
            }
            #aproposnoffredtl{
                font-size: 15px; 
                color: white; 
                font-weight: 600; 
                padding-left: 1%; 
                text-align: justify;
            }
        }
      
        @media only screen and (max-width: 280px){
           
        }

</style>

<!--APropos's section-->

    
    <div id="offredemploi_img" class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--style="height:550px; position: relative; top: -100px;"-->
            <img id="background-img" src="{{asset('public/images/offredemploi/Banner_Offre_emploi.png')}}" alt="" style="position: relative;"> 
                <div class="product container">
                <h2 id="titleimgdetailofre" class="text-white text-left display-4">Offre d'emploi</h2>
                </div>
        </div>
    </div>
      

    <!-- Our Activities -->
    <div class="container mt-4">
        <div id="rowofredetaile" class="row">
            <div class="col-xxl-8 col-xl-8 lg-8 col-md-8 col-sm-12 col-xm-12">  
                <div class="row mb-3">
                    <div class="col-xxl-10 col-xl-10 col-bg-10 col-md-10 col-sm-10 col-xm-10"> <!-- col-xxl-6 col-xl-6 col-bg-6 col-md-6 col-sm-6 col-xm-6 -->
                        <h1 class="text-uppercase text-justify text-left text-dark" style="font-size: 30px; font-weight: 900"> DEVELOPER SOFTWARE ENGINEER</h1>
                    </div>

                    <div class="col-xxl-2 col-xl-2 col-bg-2 col-md-2 col-sm-2 col-xm-2">
                        <button id="postulerbtnofredtl" class="btn btn-danger text-upprcase text-left text-white"><i>POSTULER</i></button>
                    </div>
                </div>
                <div class="row">
                    <div class="border-top"></div>
                    
                    <div class="col-xxl-4 col-xl-4 col-bg-4 col-md-4 col-sm-4 col-xm-4 text-right">
                        <h3 style="font-size: 20px"><i class="fa fa-map-marker"></i> Alger, Alérie</h3>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-bg-4 col-md-4 col-sm-4 col-xm-4 text-right">
                        <h3 style="font-size: 20px" ><i class="bi bi-alarm"></i> Temps pleine</h3>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-bg-4 col-md-4 col-sm-4 col-xm-4 float-right">
                        <h3 style="font-size: 20px" ><i class="bi bi-calendar"></i> 01/ 03/ 2023</h3>
                    </div>
                </div>
                <br>

                <!-- text description of the offer job -->
               <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xm-12">
                    <p id="txtoffredetl" class="text-justify text-capitalize text-dark">
                        lorem Ipsum is simply dummy text of the printing and typesetting i1ndustry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                        Why do we use it ?
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                        Why do we use it?
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                    </p>
                </div>
               </div>

               <!-- postuler a cette offre -->
               <div class="row">
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xm-12" style="background-color: #dadada">
                        <div class="row pt-5 pb-5 pl-3">
                            <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xm-8">
                                <h2 class="text-capitalize fw-dark" style="font-size: 25px; color: brown;">postuler à cette offre</h2>
                            </div>

                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xm-4">
                                <button class="btn btn-light fw-dark" style="color: brown; border: 2px solid; font-size: 14px; ">Retour aux détail de l'offre <i class="bi bi-arrow-return-right"></i></button>
                            </div>
                        </div>

                        <!-- postuler -->
                        <div class="row">
                            <form id="job_offer_form">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6">
                                    <div class="form-group">
                                        <label class="form-label text-dark">Nom</label>
                                        <input type="text" class="form-control" name=firstname id="firstname" aria-describedby="nameHelp" placeholder="Enter nom" style="font-size: 1rem;" required>
                                        <div class="invalid-feedback">SVP Entrez votre Nom.</div>
                                        <div class="valid-feedback">
                                            Looks good!
                                          </div>
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6">
                                    <div class="form-group">
                                        <label class="form-label text-dark">Prénom</label>
                                        <input type="text" name="secondname" class="form-control" id="secondname" aria-describedby="prenomHelp" placeholder="Enter prénom" style="font-size: 1rem" required>
                                        <div class="invalid-feedback">SVP Entrez votre Prénom.</div>
                                        <div class="valid-feedback">
                                            Looks good!
                                          </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6">
                                    <div class="form-group">
                                        <label class="form-label text-dark">Wilaya</label>
                                        <select name="country" class="form-select d-block" id="country" style="font-size: 1rem" required>
                                            <option default>Sélectionner</option>
                                            @foreach (wilayas() as $id => $wilaya)
                                                <option value="{{ $id }}">{{ $id }} - {{ $wilaya }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">SVP Entrez votre Willaya.</div>
                                    </div>
                                </div>

                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6">
                                    <div class="form-group">
                                        <label class="form-label text-dark">Civilité</label>
                                        <select name="situation" class="form-select" id="situation" style="font-size: 1rem" required>
                                            <option>Sélectionner</option>
                                            <option>Célébataire</option>
                                            <option>Marrié</option> 
                                        </select>
                                        <div class="invalid-feedback">SVP Entrez votre Situation.</div>
                                        </div>
                                </div>
                            </div>

                                <div class="row">
                                    <div class="ccol-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Téléphone Mobile</label>
                                            <input name="phone" type="text" class="form-control" id="phone" aria-describedby="prenomHelp" placeholder="Enter téléphone" style="font-size: 1rem" required>
                                            <div class="invalid-feedback">SVP Entrez votre téléphone mobile.</div>
                                        </div>
                                    </div>
    
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xm-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark">E-mail</label>
                                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" style="font-size: 1rem" required>
                                            <div class="invalid-feedback">SVP Entrez votre e-mail.</div>
                                          </div>
                                    </div>
                                </div>

                              
                                <label class="d-block mb-4">
                                    <span class="form-label fw-bolder">Your CV</span>
                                    <input name="cvfile" type="file" class="form-control" id="cvfile" style="text-align: right;" style="font-size: 1rem" required />
                                    <div class="invalid-feedback">SVP uploader votre CV (pdf, docs, doc).</div>
                                </label>
                            
                                <button id="btnsendcvfile" type="submit" class="btn btn-danger text-center" style="float: right; font-size: 1rem; margin-bottom: 15px">Envoyer</button>
                  
                              </form>
                        </div>
                    </div>
               </div>

            </div>
            
            <!-- a propos -->
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-0 col-xm-0" style="background-color: black; height: 100%;">
                <h1 class="text-uppercase text-center pt-5 pb-4" style="color: brown; font-size: 30px; font-weight: 900">à propos de nous</h1>
                
                <p id="aproposnoffredtl" class="text-justify">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>     
            </div>
        </div>
    </div>
    <!-- Finished our Activities -->

    <script src="{{ asset('public/js/offredemploijs/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/js/offredemploijs/poper.min.js') }}"></script>
    <script src=" {{ asset('public/js/offredemploijs/bootsrap.min.js') }} "></script>
    <script src="{{ asset('public/js/offredemploijs/main.js') }}"></script>
@endsection