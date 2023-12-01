<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta tags -->
  <!-- Your meta tags here -->

  <!-- CSS links -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="style/main.css" rel="stylesheet" />
  <style>
    body,
    html {
      height: 100%;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .left-box {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: #a0c492;
    }

    .right-box {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    /* Additional CSS as per your requirements */
    .box-area {
      max-width: 800px;
      width: 100%;
    }
  </style>
</head>
<body>
  <!-- Main Container -->
  <div class="container min-vh-100">
    <!-- Login Container -->
    <div class="box-area border rounded-5 p-3 bg-white shadow">
      <!-- Left Box - Image and Title -->
      <div class="row">
        <div class="col-md-12 text-center mb-4">
          <img src="images/logo-login.png" class="img-fluid" style="width: 200px;" />
        </div>
      </div>
      <!-- Right Box - Form -->
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="header-text mb-4">
            <h2>Inventaris Barang</h2>
            <p>Kelola Gudang Jadi Gampang!</p>
          </div>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email -->
            <div class="input-group mb-3">
              <input id="email" type="email" class="form-control form-control-lg bg-light fs-6 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <!-- Password -->
            <div class="input-group mb-5">
              <input id="password" type="password" class="form-control form-control-lg bg-light fs-6 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>
            <!-- Button Log In-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-lg text-white w-100 fs-6 kotak-login" style="background-color: #6A5ACD;">
                {{ __('Login') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
