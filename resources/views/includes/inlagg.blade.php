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
<div class="container-fluid" id="morklilaruta" >
   <div class="inlagg">
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