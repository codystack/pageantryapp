<?php
include('./components/header.php');
include('./controllers/auth-controller.php');
session_start();

?>

  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">REGISTRATION</h1>
              <p class="text-lead text-white">Please kindly fill in your details correctly in the form below.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border-0">
          <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-4"><small>Contestants Registration Form</small></div>
          </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div class="already-registered">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control" placeholder="First Name" pattern="[a-zA-Z]+" required type="text" name="fname">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Last Name" pattern="[a-zA-Z]+" required type="text" name="lname">
                  </div>
                </div>
              </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required type="email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id="txtPassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required type="password" name="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id="txtConfirmPassword" required placeholder="Confirm Password" type="password" name="confirm_password">
                  </div>
                </div>
              <div class="already-registered">
                <hr>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                    </div>
                    <input class="form-control" pattern="[0-9]+" minlength="11" required placeholder="Phone Number" type="tel" name="pnumber">
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Instagram Handle" aria-label="ighandle" aria-describedby="basic-addon1" name="ighandle">
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-square-pin"></i></span>
                    </div>
                    <input class="form-control" placeholder="Residential Address" required type="text" name="haddress">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="form-control" type="date" required value="2020-06-13" date of birth id="dob" name="dob">
                  </div>
                </div>
                <div class="form-group">
                  <select class="form-control" required name="sorigin">
                    <option data-display="State Of Origin">State Of Origin</option>
                    <option value="Abia">Abia</option>
                    <option value="Adamawa">Adamawa</option>
                    <option value="Akwa Ibom">Akwa Ibom</option>
                    <option value="Anambra">Anambra</option>
                    <option value="Bauchi">Bauchi</option>
                    <option value="Bayelsa">Bayelsa</option>
                    <option value="Benue">Benue</option>
                    <option value="Borno">Borno</option>
                    <option value="Cross River">Cross River</option>
                    <option value="Delta">Delta</option>
                    <option value="Ebonyi">Ebonyi</option>
                    <option value="Edo">Edo</option>
                    <option value="Ekiti">Ekiti</option>
                    <option value="Enugu">Enugu</option>
                    <option value="Abuja">FCT - Abuja</option>
                    <option value="Gombe">Gombe</option>
                    <option value="Imo">Imo</option>
                    <option value="Jigawa">Jigawa</option>
                    <option value="Kaduna">Kaduna</option>
                    <option value="Kano">Kano</option>
                    <option value="Katsina">Katsina</option>
                    <option value="Kebbi">Kebbi</option>
                    <option value="Kogi">Kogi</option>
                    <option value="Kwara">Kwara</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Nasarawa">Nasarawa</option>
                    <option value="Niger">Niger</option>
                    <option value="Ogun">Ogun</option>
                    <option value="Ondo">Ondo</option>
                    <option value="Osun">Osun</option>
                    <option value="Oyo">Oyo</option>
                    <option value="Plateau">Plateau</option>
                    <option value="Rivers">Rivers</option>
                    <option value="Sokoto">Sokoto</option>
                    <option value="Taraba">Taraba</option>
                    <option value="Yobe">Yobe</option>
                    <option value="Zamfara">Zamfara</option>
                  </select>
                </div>
                <div class="form-group">
                  <select class="form-control" required name="acity">
                    <option data-display="Preferred Audition City">Preferred Audition City</option>
                    <option value="Abuja">Abuja</option>
                    <option value="Adamawa">Adamawa</option>
                    <option value="Anambra">Akwa Ibom</option>
                    <option value="Anambra">Anambra</option>
                    <option value="Benin">Benin</option>
                    <option value="Calabar">Calabar</option>
                    <option value="Enugu">Enugu</option>
                    <option value="Ibadan">Ibadan</option>
                    <option value="Ilorin">Ilorin</option>
                    <option value="Jos">Jos</option>
                    <option value="Kaduna">Kaduna</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Owerri">Owerri</option>
                  </select>                  
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="regpic" required lang="en">
                    <label class="custom-file-label" for="customFileLang">Select file</label>
                </div>
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" required id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">I agree with the <a href="#!" style="color: #259dab;">Terms & Conditions</a></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4" name="register">Create account</button>
                </div>
              </form>
            </hr>
          </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 text-center">
              <div class="text-default-color">Already Registered?<br></div>
              <a href="login" class="text-light"><small>Login Account</small></a>
            </div>
        </div>
      </div>
    </div>
  </div>

<?php include('./components/footer.php');?>