<div class="col-md-8 order-md-1">
    <h4 class="mb-3">Applicant Information</h4>
    <form id="main-form" class="needs-validation" novalidate="" method="post" action="/submit/">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="first-name">First name</label>
            <input type="text" class="form-control" id="first-name" placeholder="" value="" name="first-name" required="">
            <div class="invalid-feedback">
              Valid first name is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="last-name">Last name</label>
            <input type="text" class="form-control" id="last-name" placeholder="" value="" name="last-name" required="">
            <div class="invalid-feedback">
              Valid last name is required
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="" name="email" required="">
          <div class="invalid-feedback">
            Please enter a valid email address
          </div>
        </div>

        <hr class="mb-4">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="comp-name">Company name</label>
            <input type="text" class="form-control" id="comp-name" placeholder="" name="comp-name" required="">
            <div class="invalid-feedback">
              Company name is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="comp-website">Company website</label>
            <input type="text" class="form-control" id="comp-website" placeholder="" name="comp-website" required="">
            <div class="invalid-feedback">
              Company website is required
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-7 mb-3">
            <label for="comp-desc">Company description</label>
            <select class="custom-select d-block w-100" id="comp-desc" name="comp-desc" required="">
              <option value="">Choose...</option>
              <option value="01">000000</option>
              <option value="02">000000</option>
              <option value="03">000000</option>
              <option value="04">000000</option>
              <option value="05">000000</option>
              <option value="06">000000</option>
            </select>
            <small class="text-muted">Please select what best describes your company</small>
            <div class="invalid-feedback">
              Please select company description
            </div>
          </div>
          <div class="col-md-5 mb-3">
            <label for="comp-emp">Company employees</label>
            <select class="custom-select d-block w-100" id="comp-emp" name="comp-emp" required="">
              <option value="">Choose...</option>
              <option value="01"> < 50 </option>
              <option value="02"> 50-150 </option>
              <option value="03"> 151-250 </option>
              <option value="04"> 251-350 </option>
              <option value="05"> 351-450 </option>
              <option value="06"> 451-550 </option>
              <option value="06"> 551-700 </option>
              <option value="07"> > 700 </option>
            </select>
            <div class="invalid-feedback">
              Please select an employee count
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-7 mb-3">
                <label for="approx-rev">Approximate annual revenue</label>
                <select class="custom-select d-block w-100" id="approx-rev" name="approx-rev" required="">
                    <option value="">Choose...</option>
                    <option value="01">000000</option>
                    <option value="02">000000</option>
                    <option value="03">000000</option>
                    <option value="04">000000</option>
                    <option value="05">000000</option>
                    <option value="06">000000</option>
                </select>
                <div class="invalid-feedback">
                    Please select an approximate annual revenue
                </div>
            </div>
            <div class="col-md-5 mb-3">
                <label for="top-brand">Current top-selling brand</label>
                <input type="text" class="form-control" id="top-brand" placeholder="" name="top-brand" required="">
                <div class="invalid-feedback">
                    Current top-selling brand is required
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="prod-source">Current source of RAK products</label>
                <select class="custom-select d-block w-100" id="prod-source" name="prod-cource" required="">
                    <option value="">Choose...</option>
                    <option value="01">000000</option>
                    <option value="02">000000</option>
                    <option value="03">000000</option>
                    <option value="04">000000</option>
                    <option value="05">000000</option>
                    <option value="06">000000</option>
                </select>
                <div class="invalid-feedback">
                    Please select your RAK products source
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <label for="init-order-amount">Achievable first order amount</label>
                <select class="custom-select d-block w-100" id="init-order-amount" required="">
                    <option value="">Choose...</option>
                    <option value="01">000000</option>
                    <option value="02">000000</option>
                    <option value="03">000000</option>
                    <option value="04">000000</option>
                    <option value="05">000000</option>
                    <option value="06">000000</option>
                </select>
                <div class="invalid-feedback">
                    Please provide an initial order amount
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label>Selling locations</label>
            <div class="row" id="locs">
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="united-states" name="location[united-states]">
                        <label class="custom-control-label" for="united-states">United States</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="canada" name="location[canada]">
                        <label class="custom-control-label" for="canada">Canada</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="latin-america" name="location[latin-america]">
                        <label class="custom-control-label" for="latin-america">Latin America</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="europe" name="location[europe]">
                        <label class="custom-control-label" for="europe">Europe</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="russia" name="location[russia]">
                        <label class="custom-control-label" for="russia">Russia</label>
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="asia" name="location[asia]">
                        <label class="custom-control-label" for="asia">Asia</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="africa" name="location[africa]">
                        <label class="custom-control-label" for="africa">Africa</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="austria" name="location[austria]">
                        <label class="custom-control-label" for="austria">Austria</label>
                    </div>
                </div>
            </div>
            <div id="orphan-feedback-locs" class="invalid-feedback" style="display: none;">
                You must be selling in at least one location
            </div>
        </div>

        <div class="mb-3">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" placeholder="" name="message" required=""></textarea>
          <small class="text-muted">Please specify a reason or message for direct ordering</small>
          <div class="invalid-feedback">
            Please enter a valid message or reason for this application
          </div>
        </div>

        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block mb-2" id="submit" type="submit">Submit application</button>
        <small class="text-muted">We'll get back to you within 2 bussiness days</small>
    </form>
</div>