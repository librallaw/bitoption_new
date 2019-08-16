@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: black">
                <div class="card-header" align="center" style="color:white;font-size: 25px;">{{ __('Register') }}</div>

                <div class="card-body" style="background: black">
                    <form method="POST" action="{{ route('register') }}">

                            <div class="form-group  ">
                                <input type="text" style="background: #30333c;color:#9397A0" name="username" value="" class="form-control" placeholder="Username"  />            </div>
                            <div class="form-group  ">
                                <input type="text" style="background: #30333c;color:#9397A0" name="Firstname" value="" class="form-control" placeholder="First Name"  />            </div>
                            <div class="form-group  ">
                                <input type="text" style="background: #30333c;color:#9397A0" name="lastname" value="" class="form-control" placeholder="Last Name"  />            </div>
                            <div class="form-group  ">
                                <input type="text" style="background: #30333c;color:#9397A0" name="email" value="" class="form-control" placeholder="Email"  />            </div>
                            <div class="form-group   password-container">
                                <input type="password" style="background: #30333c;color:#9397A0" name="password" value="" id="pass" class="form-control" placeholder="Password"  /><!--                    <a class="show_pass" href="javascript:;" onmousedown="$('#pass,#confirm-pass').attr('type', 'text');" onmouseup="$('#pass,#confirm-pass').attr('type', 'password');"><i class="fa fa-eye"></i></a>-->
                            </div>
                            <div class="form-group   password-container">
                                <input type="password" style="background: #30333c;color:#9397A0" name="confirm-password" value="" id="confirm-pass" class="form-control" placeholder="Password confirmation"  /><!--                    <a class="show_pass" href="javascript:;" onmousedown="$('#pass,#confirm-pass').attr('type', 'text');" onmouseup="$('#pass,#confirm-pass').attr('type', 'password');"><i class="fa fa-eye"></i></a>-->
                            </div>
                            <div class="form-group  ">
                                <select class="form-control" name="country" required />
                                <option value="">-- Please select Country --</option>
                                <option value="Select your country.">Select your country.</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Aland Islands (Finland)">Aland Islands (Finland)</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa (USA)">American Samoa (USA)</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla (UK)">Anguilla (UK)</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba (Netherlands)">Aruba (Netherlands)</option>
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
                                <option value="Bermuda (UK)">Bermuda (UK)</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Virgin Islands (UK)">British Virgin Islands (UK)</option>
                                <option value="Brunei">Brunei</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burma">Burma</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Caribbean Netherlands (Netherlands)">Caribbean Netherlands (Netherlands)</option>
                                <option value="Cayman Islands (UK)">Cayman Islands (UK)</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island (Australia)">Christmas Island (Australia)</option>
                                <option value="Cocos (Keeling) Islands (Australia)">Cocos (Keeling) Islands (Australia)</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Cook Islands (NZ)">Cook Islands (NZ)</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curacao (Netherlands)">Curacao (Netherlands)</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (UK)">Falkland Islands (UK)</option>
                                <option value="Faroe Islands (Denmark)">Faroe Islands (Denmark)</option>
                                <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana (France)">French Guiana (France)</option>
                                <option value="French Polynesia (France)">French Polynesia (France)</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar (UK)">Gibraltar (UK)</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland (Denmark)">Greenland (Denmark)</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe (France)">Guadeloupe (France)</option>
                                <option value="Guam (USA)">Guam (USA)</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey (UK)">Guernsey (UK)</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong (China)">Hong Kong (China)</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man (UK)">Isle of Man (UK)</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Ivory Coast">Ivory Coast</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey (UK)">Jersey (UK)</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Kosovo">Kosovo</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macau (China)">Macau (China)</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique (France)">Martinique (France)</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte (France)">Mayotte (France)</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Moldov">Moldov</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat (UK)">Montserrat (UK)</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Caledonia (France)">New Caledonia (France)</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue (NZ)">Niue (NZ)</option>
                                <option value="Norfolk Island (Australia)">Norfolk Island (Australia)</option>
                                <option value="North Korea">North Korea</option>
                                <option value="Northern Mariana Islands (USA)">Northern Mariana Islands (USA)</option>
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
                                <option value="Pitcairn Islands (UK)">Pitcairn Islands (UK)</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Republic of the Congo">Republic of the Congo</option>
                                <option value="Reunion (France)">Reunion (France)</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Barthelemy (France)">Saint Barthelemy (France)</option>
                                <option value="Saint Helena, Ascension and Tristan da Cunha (UK)">Saint Helena, Ascension and Tristan da Cunha (UK)</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Martin (France)">Saint Martin (France)</option>
                                <option value="Saint Pierre and Miquelon (France)">Saint Pierre and Miquelon (France)</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tom and Principe">Sao Tom and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Sint Maarten (Netherlands)">Sint Maarten (Netherlands)</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen (Norway)">Svalbard and Jan Mayen (Norway)</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau (NZ)">Tokelau (NZ)</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands (UK)">Turks and Caicos Islands (UK)</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Virgin Islands (USA)">United States Virgin Islands (USA)</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Vatican City">Vatican City</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Wallis and Futuna (France)">Wallis and Futuna (France)</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>

                                </select>
                            </div>
                            <div class="form-group  ">
                                <select name="secq" class="form-control" required>
                                    <option selected="selected">Choose your security question</option>
                                    <option>What is my pet name</option>
                                    <option>What is my Favourite TV program</option>
                                    <option>What is the name of my childhood friend</option>
                                    <option>What is my lastname</option>
                                    <option>Where will I spend my holiday</option>
                                    <option>What is the name of my mentor</option>
                                    <option>What is the name of my spouse</option>
                                    <option>What is my Faourite sport activites</option>
                                </select>           </div>

                            <div class="form-group  ">
                                <select name="address" class="form-control" required>
                                    <option selected="selected">Choose your Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>           </div>
                            <div class="form-group  ">
                                <input type="text" style="background: #30333c;color:#9397A0" name="seca" value="" class="form-control" placeholder="Secret Answer"  />            </div>
                            <div class="form-group  ">
                                <input type="text" style="background: #30333c;color:#9397A0"  name="phone" value="" class="form-control" placeholder="Phone Number"  />            </div>

                            <div class="form-group  rules ">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="rules" value="1" id="checkbox_pao" require  />
                                        <p class="ruls" style="color:wite">I have read and accepted the following agreement: <a href="#"></a></p>

                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="waves btn btn-green-light btn-block" style="    border-color: #5ede5e;
    background-color: rgba(94,222,94,.12);
    -webkit-box-shadow: 0 2px 2px rgba(0,0,0,.2), 0 0 15px rgba(94,222,94,.5);
    -moz-box-shadow: 0 2px 2px rgba(0,0,0,.2),0 0 15px rgba(94,222,94,.5);
    box-shadow: 0 2px 2px rgba(0,0,0,.2), 0 0 15px rgba(94,222,94,.5);
    font-family: inherit;
    font-size: 14px;color:white;">Sign Up</button>
                            </div>
                            <div class="register-social" style="text-align: center">
                            </div>
                            <div style="text-align: center;color:white;">
                                Already registered? - <a href="/account/login.php">Sign in</a>            </div>

                        @csrf

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
