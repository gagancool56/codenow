<?php $this->load->view('frontend/inc/header') ?>

<section id="main-container" class="main-container">
    <div class="container text-center">
        <div class="row payment-container">
            <div class="col-lg-8 offset-2 text-center">
                <h3 class="column-title text-success">Make Payment Here</h3>
                <div class="card shadow-lg text-center">
                    <div class="card-body">
                        <form action="<?= base_url('products/purchase/checkout') ?>" method="POST" id="payment-form">
                            <input type="hidden" name="_token" value="nSnAe42ZBU1xglpBXReku3gDXxEHeyAnmY4qDobn">
                            <div class="form-group">
                                <label for="secure" class="secure_lbl">
                                    <i class="fas fa-shield-alt fa-2x text-success"></i> <img src="https://stripe.com/img/documentation/logo.svg" alt="" style="vertical-align: unset;"> <span class="h3">100% Secured Payment Solution.</span>
                                </label>
                            </div>

                            <div class="form-group productDetail border p-5 shadow">
                                <h5 class="text-left">Product Or Service Name:</h5>
                                <input type="hidden" name="productimage" value="">
                                <input type="text" name="productname" id="productName" readonly value="<?= $productname ?>" class="form-control" placeholder="Enter Product or Service Name for which making payment">
                            </div>
                            <div class="form-group row totalpay">
                                <label for="price" class="col-12 col-sm-12 col-md-4 h4">You pay total</label>
                                <div class=" col-12 col-sm-12 col-md-8 text-center">
                                    <span class="badge badge-pill badge-warning payPrice px-4 pt-2"><i class="fas fa-dollar-sign h5"></i> <span id="totalPrice" class="h5 font-weight-bold"><?= $productamount ?></span></span>
                                </div>

                            </div>
                            <hr>
                            <div class="form-group row name">
                                <label for="name" class="col-12 col-sm-12 col-md-4">Name</label>
                                <div class="col-12 col-sm-12 col-md-8">
                                    <input type="text" name="customername" id="custName" value="" class="form-control" placeholder="Enter Your Name" required="required">
                                </div>
                            </div>
                            <div class="form-group row email-id">
                                <label for="email" class="col-12 col-sm-12 col-md-4">Email Address</label>
                                <div class="col-12 col-sm-12 col-md-8">
                                    <input type="email" name="email" id="emailId" value="" class="form-control" placeholder="Enter Email Address" required="required">
                                </div>

                            </div>
                            <div class="form-group row email-id">
                                <label for="phone" class="col-12 col-sm-12 col-md-4">Phone</label>
                                <div class="col-12 col-sm-12 col-md-8">
                                    <input type="text" name="phone" id="phoneId" value="" class="form-control" placeholder="Enter Phone Number" required="required">
                                </div>

                            </div>
                            <div class="form-group row address">
                                <label for="address" class="col-12 col-sm-12 col-md-4">Address</label>
                                <div class="col-12 col-sm-12 col-md-8">
                                    <input type="text" name="address" id="custAddress" value="" class="form-control" placeholder="Enter Address" required="required">

                                    <input type="text" name="city" id="custCity" value="" class="form-control" placeholder="Enter City" required="required">
                                    <input type="text" name="customerstate" id="custState" value="" class="form-control" placeholder="Enter State" required="required">
                                    <input type="text" name="zipcode" id="custZipcode" value="" class="form-control" placeholder="Enter Zipcode" required="required">
                                    <select class="form-control" name="country" id="country" placeholder="Company" required="required" aria-invalid="true">
                                        <option value="">Country/Region</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius and Saba</option>
                                        <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Islands">Cocos Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic Of The">Congo, The Democratic Republic Of The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Curaçao">Curaçao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle Of Man">Isle Of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ivory Coast (Cote D'Ivoire)">Ivory Coast (Cote D'Ivoire)</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea Republic of">Korea Republic of</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestine">Palestine</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Martin">Saint Martin</option>
                                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sint Maarten (Dutch Part)">Sint Maarten (Dutch Part)</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Taiwan, ROC">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Tanzania, United Republic Of">Tanzania, United Republic Of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="The Federal Democratic Republic of Nepal">The Federal Democratic Republic of Nepal</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City State">Vatican City State</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                        <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row payment-method">
                                <label for="price" class="col-12 col-sm-6 col-md-4">Payment Method</label>
                                <div class="col-12 col-sm-6 col-md-8">
                                    <label for="card"><input type="radio" name="paymentmethod" id="paymentMethod" value="card" required="" checked="checked"> Card</label>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-3 col-sm-3 col-md-2" style="display:flex;align-items: center;flex-direction: row-reverse;">
                                    <input type="checkbox" name="agree_term_cond" id="" required="required" style="width: 18px;height: 18px;">
                                </div>
                                <div class="col-9 col-sm-9 col-md-10">
                                    <p style="margin-bottom: 0;">I have read and agree to the <a href="https://codenowonline.com/terms" target="blank">Terms &amp; Condition</a>. Also I have read and agree to the <a href="https://codenowonline.com/privacy" target="blank">Privacy Policy</a> and <a href="https://codenowonline.com/refund-policy" target="blank">Cancellation/Refund Policy</a>.</p>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary" id="payNow">
                                    <div class="spinner hidden" id="spinner"></div><span id="button-text">Pay Now</span>
                                </button>
                            </div>

                    </div>
                </div>
                </form>
            </div><!-- Col end -->
        </div><!-- Content row end -->
    </div><!-- Container end -->
</section><!-- Main container end -->

<?php $this->load->view('frontend/inc/footer') ?>