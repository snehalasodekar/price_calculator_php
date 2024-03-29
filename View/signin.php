<!-- Section: Design Block -->
<section class=" text-center text-lg-start">
    <style>
        .rounded-t-5 {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        @media (min-width: 992px) {
            .rounded-tr-lg-0 {
                border-top-right-radius: 0;
            }

            .rounded-bl-lg-5 {
                border-bottom-left-radius: 0.5rem;
            }
        }
    </style>
    <div class="card mb-3 col-md-6">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-4 d-none d-lg-flex">
                <img src="././src/img/priceCalculator.jpg"
                     alt="Trendy Pants and Shoes"
                     class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5"/>
            </div>
            <div class="col-lg-8">
                <div class="card-body py-5 px-md-5">

                    <form>
                        <!-- User name input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="customerName" class="form-control"/>
                            <label class="form-label" for="customerName">Customer Name</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="customerId" class="form-control"/>
                            <label class="form-label" for="customerId">Customer Id</label>
                        </div>

                        <!-- Submit button -->
                        <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->
