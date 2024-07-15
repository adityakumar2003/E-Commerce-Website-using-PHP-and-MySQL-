<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Payment page</title>
</head>

<body>
  <section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8">
          <div class="card">
            <div class="card-body p-md-5">
              <div>
                <h4>PAYMENT OPTIONS</h4>
                <!-- <p class="text-muted pb-2">
                Please make the payment to start enjoying all the features of our premium
                plan as soon as possible
              </p> -->
              </div>

              <div class="px-3 py-4 border border-primary border-2 rounded mt-4 d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                  <img src="./images/bagg.webp" class="rounded" width="60" />
                  <div class="d-flex flex-column ms-4">
                    <span class="h5 mb-1">TOTAL AMOUNT</span>
                    <span class="small text-muted">SELECT YOUR PAYMENT OPTIONS</span>
                  </div>
                </div>
                <div class="d-flex flex-row align-items-center">
                  <sup class="dollar font-weight-bold text-muted">$</sup>
                  <span class="h2 mx-1 mb-0">8,350</span>
                  <span class="text-muted font-weight-bold mt-2">/ year</span>
                </div>
              </div>

              <h4 class="mt-5">Payment details</h4>

              <div class="mt-4 d-flex justify-content-between align-items-center">
                <div class="d-flex flex-row align-items-center">
                  <img src="https://i.imgur.com/qHX7vY1.webp" class="rounded" width="70" />
                  <div class="d-flex flex-column ms-3">
                    <span class="h5 mb-1">Credit Card</span>
                    <span class="small text-muted">1234 XXXX XXXX 2570</span>
                  </div>
                </div>
                <div>
                  <input type="text" class="form-control" placeholder="CVC" style="width: 70px;" />
                </div>
              </div>

              <div class="mt-2 d-flex justify-content-between align-items-center">
                <div class="d-flex flex-row align-items-center">
                  <img src="https://i.imgur.com/qHX7vY1.webp" class="rounded" width="70" />
                  <div class="d-flex flex-column ms-3">
                    <span class="h5 mb-1">Credit Card</span>
                    <span class="small text-muted">2344 XXXX XXXX 8880</span>
                  </div>
                </div>
                <div>
                  <input type="text" class="form-control" placeholder="CVC" style="width: 70px;" />
                </div>
              </div>

              <h6 class="mt-4 mb-3 text-primary text-uppercase">ADD PAYMENT METHOD</h6>

              <div data-mdb-input-init class="form-outline">
                <input type="text" id="formControlLg" class="form-control form-control-lg" />
                <label class="form-label" for="formControlLg">Email address</label>
              </div>
              <div class="mt-3">
                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block btn-lg">
                  Proceed to payment <i class="fas fa-long-arrow-alt-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>