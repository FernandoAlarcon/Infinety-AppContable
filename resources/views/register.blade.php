@include('header')
@include('navbar')
<div class="section">
    <div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 900px;">
        <div class="container">
          <div class="row">
            <div class="card card-signup" data-background-color="orange">
            <form method="POST" action="{{ route('register') }}">

                @csrf
                
                <div class="card-header text-center">
                  <h3 class="card-title title-up">Crea tu cuenta </h3>
                  <!-- <div class="social-line">
                    <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                      <i class="fab fa-google-plus"></i>
                    </a>
                  </div> -->
                </div>

                <div class="card-body">

                    <div class="input-group no-border">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="now-ui-icons users_single-02"></i>
                        </span>
                        </div> 
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre Completo" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="input-group no-border">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="now-ui-icons ui-1_email-85"></i>
                        </span>
                        </div>
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group no-border">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                        </span>
                        </div> 
                        <input id="password" type="password" placeholder="Contrase??a" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <input id="password-confirm" type="password" placeholder="Confirmar Contrase??a" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                </div>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-neutral btn-round btn-lg">
                                Registrate
                    </button>
                </div>
              </form>
            </div>
          </div>
          <!-- <div class="col text-center">
            <a href="examples/login-page.html" class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View Login Page</a>
          </div> -->
        </div>
    </div>
</div>

@include('footer')
  