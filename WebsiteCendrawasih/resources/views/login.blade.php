<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome</h3>
                  <p class="mb-0">Silahkan Masukkan Email dan Password</p>
                </div>
                <div class="card-body">
                  @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                  @endif
                  <form action="{{ route('login') }}" method="post">
                      @csrf
                      <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" placeholder="Email" name="email" required>
                      </div>
                      <div class="form-group">
                          <label for="password">Password:</label>
                          <input type="password" class="form-control" placeholder="Password" name="password" required>
                      </div>
                      <button type="submit" class="btn btn-info w-100 mt-4 mb-0">Login</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                  style="background-image:url('{{ asset('corporate-ui-dashboard-main/assets/img/curved-images/curved6.jpg') }}')">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('layouts.footer')

</body>

</html>

