<!DOCTYPE html>
<html>
   <head>
      <title>KorridorSnack</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/main2.css">
      <meta charset="utf-8">
   </head>
   <body>
      <div class="content">
         <div class="innehall">
            <div class="row">
               <img class="bakgrundsbild" alt="bakgrundsbild" src="img/login.png">
               @if(Auth::check()) <!--- om användaren är inloggad visas logout knappen -->
               <div class="loggaut">
                  <a href="{{URL::route('login')}}" class="btn btn-default">Logga ut</a>
               </div>
               @endif    
               <a href="{{url('forstasida')}}"><img class="logotype" alt="logotype" width="150" src="img/Logotype1.png"></a>
               <div class="col-sm-12">
                  <div class="profil">
                     <div class="col-sm-3">
                        <div class="sidebar">
                           <img class="profilbild" alt="profilbild" width="150" src="img/profilbild.png">
                           <div class="profiltext">
                              <h4>
                                 <!--- Gör så att det syns vem som är inloggad -->
                                 @if(Auth::check())
                                 {{ Auth::User()->fname }}
                                 @endif
                              </h4>
                              <h5>
                                 <!--- Gör så att det syns vilket program den inloggade läser -->
                                 @if(Auth::check())
                                 {{ Auth::User()->program }}
                                 @endif
                              </h5>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-9">
                     <h3>Senaste</h3>
                     <form method="POST" action="{{URL::route('Post.store')}}">
                        {!! csrf_field() !!}
                        <div class="dropdown">
                           <label for="sel1">Forum</label>
                           <select class="form-control" name="category_id" type="text" id="sel1">
                              <option>Läxhjälp</option>
                              <option>Hitta rätt</option>
                              <option>Evenemang</option>
                              <option>Snack</option>
                           </select>
                        </div>
                        <div id="inlaggsruta">
                           <textarea type="text" name="message" class="form-control" rows="5" id="comment" placeholder="Inlägg"></textarea>
                        </div>
                        <div id="forstaknapp">
                           <button type="submit" class="btn btn-default">Skicka</button>
                        </div>
                     </form>
                     <div class="container-fluid" id="morklilaruta">
                        <div class="inlagg" >
                           <table class="table">
                              <tr>
                                 <div class="namn">
                                    <th>Namn</th>
                                 </div>
                                 <div class="inlagg">
                                    <th>Inlägg</th>
                                 </div>
                                 <div class="tid">
                                    <th>Tid</th>
                                 </div>
                              </tr>
                              @foreach($posts as $post)
                              <?php
                                 //namespace App\Http\Controllers; 
                                 //use \App\User;
                                 //$user = User::find($post->user_id);
                                   ?>
                              <tr>
                                 <td>{{ $post->fname }}</td>
                                 <td>{{ $post->message }}</td>
                                 <td>{{ $post->created_at }}</td>
                              </tr>
                              @endforeach
                           </table>
                        </div>
                     </div>
                     <!-- mörklila ruta stängs -->
                     <!-- <div class="container-fluid" id="ljuslilaruta">
                        <input type="text" class="form-control" placeholder="Svara">
                        <button type="submit" class="btn btn-default">Skicka</button> 
                        
                        </div> ljuslila ruta stängs -->
                  </div>
                  <div class="forum">
                     <div class="col-sm-3">
                        <h3>Forum</h3>
                        <div class="forsta">
                           <a href="{{url('senaste')}}">Senaste
                           <a/>
                        </div>
                        <div class="andra"> 
                        <a href="{{url('laxhjalp')}}">Läxhjälp<a/>
                        </div>
                        <div class="forsta"> 
                        <a href="{{url('hittaratt')}}">Hitta rätt<a/>
                        </div>
                        <div class="andra"> 
                        <a href="{{url('evenemang')}}">Evenemang<a/><br>
                        </div>
                        <div class="forsta"> 
                        <a href="{{url('snack')}}">Snack<a/>
                        </div>
                        </a>
                     </div>
                  </div>
                  <div class="omoss">
                     <div class="col-sm-3">
                        <h3>Om oss</h3>
                        <p>@Korridorsnack</p>
                     </div>
                  </div>
                  <div class="kontakt">
                     <div class="col-sm-3">
                        <h3>Kontakt</h3>
                        <p>info@korridorsnack.se</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>