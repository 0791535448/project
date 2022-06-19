@include('../shared.cdn')
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-6">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-12">
              <div class="card-body p-md-5 mx-md-4">
                <form action="{{url('/new-user')}}" method="post">
                    @csrf
                    <div class="form-outline mb-4">
                        <h6>Please Register </h6>
                    </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Username</label>
                    <input type="email" name="email"id="form2Example11" class="form-control"
                      placeholder="email address" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" name="password"id="form2Example22" class="form-control" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-success btn-block fa-lg gradient-custom-2 mb-3 w-50" type="submit">Register</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Do you have an account?</p>
                    <button type="button" class="btn btn-outline-danger"><a href='/'>Login</a></button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>