<div class="page-section">
<div class="container">
@foreach($refugee as $refugees)
<div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="refugeeimage/{{$refugees->rphoto}}" alt="">
              <div class="meta">
                <a href="https://www.ri.org/" target="_blank"><span class="mai-arrow-forward"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Name: {{$refugees->name}} </p>
              <p class="text-xl mb-0">Country of Origin: {{$refugees->country}} </p>
              <p class="text-xl mb-0">Date Of Birth: {{$refugees->bdate}}</p>
              <p>{{$refugees->bdate}}</p><br>
              <p class="text-xl mb-0">ID Number:</p><br>
              <p>{{$refugees->idnum}}</p><br>
              <p class="text-xl mb-0">Phone Number:</p><br>
              <p>{{$refugees->phoneNum}}</p><br>
              <p class="text-xl mb-0">Camp Currently Located:</p><br>
              <p>{{$refugees->camp}}</p><br>
            </div>
          </div>
        </div>
@endforeach
</div>
</div>