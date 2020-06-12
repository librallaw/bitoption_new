

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{$user->full_name()}}  - Block Chain Traders</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="/css/style2.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include("inc.header3")
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include("inc.sidebar2")
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <br />
                    <br />

                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">{{date("D, jS M, Y")}}</span>
                    </div>
                </div>

            </div>
            <!-- row -->

            <div class="container">
                
                <div class="row">



                    @include("alert")
                    <div class="col-xl-6 col-xxl-6 col-lg-6">
                        <div class="col-xl-12 col-xxl-6 col-lg-6">
                            <form action="{{route("credit_user")}}" method="post">
                                @csrf
                                <div class="card">

                                    <div class="card-body">
                                        <h4 class="card-title">Credit Account</h4>
                                        <div class="buy-token mt-4">
                                            <div class="basic-form">

                                                <input type="hidden" value="{{$user->id}}" name="id" />

                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <!-- <label>Bitcoin wallet address</label> -->
                                                        <div class="input-group mb-3 mb-md-0">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text input-text-btc"><i class="cc BTC-alt"></i></span>
                                                            </div>
                                                            <input id="input1" type="number" name="amount"
                                                                   placeholder=""
                                                                   class="form-control" value="">

                                                        </div>
                                                    </div>


                                                </div>


                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success">Credit</button>
                                    </div>
                                </div>



                            </form>
                        </div>



                    <div class="col-xl-12 col-xxl-6 col-lg-6">
                        <form action="{{route("debit_user")}}" method="post">
                            @csrf
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="card-title">Debit Account</h4>
                                    <div class="buy-token mt-4">
                                        <div class="basic-form">

                                            <input type="hidden" value="{{$user->id}}" name="id" />

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <!-- <label>Bitcoin wallet address</label> -->
                                                    <div class="input-group mb-3 mb-md-0">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text input-text-btc"><i class="cc BTC-alt"></i></span>
                                                        </div>
                                                        <input id="input1" type="number" name="amount"
                                                               placeholder=""
                                                               class="form-control" value="">

                                                    </div>
                                                </div>


                                            </div>


                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">Debit</button>
                                </div>
                            </div>



                        </form>
                    </div>


                        <div class="col-xl-12 col-xxl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Latest Transactions</h4>
                                    <div class="table-responsive">
                                        <table class="table table-responsive-sm">
                                            <thead>
                                            <tr>

                                                <th scope="col">BTC</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Transaction Hash</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($transactions) > 0)
                                                @foreach($transactions as $deposit)
                                                    <tr>

                                                        <td>{{$deposit->amount}} <span class="BTC">BTC</span>
                                                        </td>
                                                        <td><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> {{$deposit->created_at->diffForHumans()}}</td>
                                                        @if($deposit->status == 1)
                                                            <td><span class="badge badge-success">Confirmed</span>
                                                            </td>
                                                        @endif
                                                        @if($deposit->status == 2)
                                                            <td><span class="badge badge-warning">Pending</span>
                                                            </td>
                                                        @endif
                                                        @if($deposit->status == 0)
                                                            <td><span class="badge badge-danger">Cancelled</span>
                                                            </td>
                                                        @endif
                                                        <td>{{$deposit->reference}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <div>
                                                    No Deposit found
                                                </div>
                                                @endif

                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="card col-xl-6 col-xxl-6 col-lg-6">
                        <form class="card-body" action="{{route("doEditUser")}}" method="post">
                        <div class="card">

                            <div class="card-body">
                                <h4 class="card-title">Balance</h4>
                                <div class="buy-token mt-4">
                                    <div class="basic-form">

                                        <input type="hidden" value="{{$user->id}}" name="id" />

                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <!-- <label>Bitcoin wallet address</label> -->
                                                    <div class="input-group mb-3 mb-md-0">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text input-text-btc"><i class="cc BTC-alt"></i></span>
                                                        </div>
                                                        <input id="input1" type="text" name="balance"
                                                               placeholder="17UMWRhSZN7B4gYrspvFvf6rqcwyopzPSG"
                                                               class="form-control" value="{{$user->balance}}">

                                                    </div>
                                                </div>


                                            </div>


                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Details</h4>
                                <div class="buy-token mt-4">
                                    <div class="basic-form">


                                            <div class="form-group  ">
                                                <label>Username</label>
                                                <input type="text" style="" name="username" 
                                                       value="{{$user->username}}" 
                                                       class="form-control" placeholder="Username"  />            </div>

                                            <div class="form-group  ">
                                                <label>First Name</label>
                                                <input type="text" style="" name="first_name" value="{{$user->first_name}}" class="form-control" placeholder="First Name"  />            </div>

                                            <div class="form-group  ">
                                                <label>Last Name</label>
                                                <input type="text" style="" name="last_name" value="{{$user->last_name}}" class="form-control" placeholder="Last Name"  />            </div>

                                            <div class="form-group  ">
                                                <label>Email</label>
                                                <input type="text" style="" name="email" value="{{$user->email}}" class="form-control" placeholder="Email"  />            </div>

                                            <div class="form-group   password-container">
                                                <label>Password</label>
                                                <input type="password" style="" name="password"
                                                       value="{{$user->password_view}}" id="pass"
                                                       class="form-control" placeholder="Password"  /><!--                    <a class="show_pass" href="javascript:;" onmousedown="$('#pass,#confirm-pass').attr('type', 'text');" onmouseup="$('#pass,#confirm-pass').attr('type', 'password');"><i class="fa fa-eye"></i></a>-->
                                            </div>

                                            <div class="form-group  ">
                                                <label>Country</label>
                                                <select class="form-control" name="country" required />

                                                <option value="{{$user->country}}">{{$user->country}}</option>
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
                                                <label>Security question</label>
                                                <select name="security_question" class="form-control" required>
                                                    <option selected="selected">{{$user->security_question}}</option>
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
                                                <label>Security Answer</label>
                                                <input type="text" style="" name="security_answer"
                                                       value="{{$user->security_answer}}"
                                                       class="form-control" placeholder="Secret Answer"  />
                                            </div>




                                            <div class="form-group  ">
                                                <label>Phone Number</label>
                                                <input type="text" style=""  name="phone" value="{{$user->phone}}" class="form-control" placeholder="Phone Number"  />            </div>

                                            <div class="form-group">
                                                <button name="submit" type="submit" class="btn btn-success" style=";
">Update Profile</button>   @csrf
                                            </div>





                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>


                    

                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
       @include("inc.footer2")
        <!--**********************************
            Footer end
        ***********************************-->

        
        <!--**********************************
            Right sidebar start
        ***********************************-->
        <div class="sidebar-right">
            <a class="sidebar-right-trigger gradient-5-x" href="/javascript:void(0)">
                <span><i class="fa fa-cog fa-spin"></i></span>
            </a>
            <div class="sidebar-right-inner">
                <div class="admin-settings">
                    <h4>Pick your style</h4>
                    <div>
                        <p>Background</p>
                        <select class="form-control" name="theme_version" id="theme_version">
                            <option value="light">Light</option>
                            <option value="dark">Dark</option>
                        </select>
                    </div>
                    <div>
                        <p>Layout</p>
                        <select class="form-control" name="theme_layout" id="theme_layout">
                            <option value="vertical">Vertical</option>
                            <option value="horizontal">Horizontal</option>
                        </select>
                    </div>
                    <div>
                        <p>Sidebar</p>
                        <select class="form-control" name="sidebar_style" id="sidebar_style">
                            <option value="full">Full</option>
                            <option value="mini">Mini</option>
                            <option value="compact">Compact</option>
                            <option value="overlay">Overlay</option>
                        </select>
                    </div>
                    <div>
                        <p>Sidebar position</p>
                        <select class="form-control" name="sidebar_position" id="sidebar_position">
                            <option value="static">Static</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                    <div>
                        <p>Header position</p>
                        <select class="form-control" name="header_position" id="header_position">
                            <option value="static">Static</option>
                            <option value="fixed">Fixed</option>
                        </select>
                    </div>
                    <div>
                        <p>Container</p>
                        <select class="form-control" name="container_layout" id="container_layout">
                            <option value="wide">Wide</option>
                            <option value="boxed">Boxed</option>
                            <option value="wide-boxed">Wide Boxed</option>
                        </select>
                    </div>
                    <div>
                        <p>Direction</p>
                        <select class="form-control" name="theme_direction" id="theme_direction">
                            <option value="ltr">LTR</option>
                            <option value="rtl">RTL</option>
                        </select>
                    </div>
                    <div>
                        <p>Navigation Header</p>
                        <div>
                            <span>
                                <input type="radio" name="navigation_header" value="color_1" class="filled-in chk-col-primary" id="nav_header_bg_1">
                                <label for="nav_header_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_2" class="filled-in chk-col-primary" id="nav_header_bg_2">
                                <label for="nav_header_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_3" class="filled-in chk-col-primary" id="nav_header_bg_3">
                                <label for="nav_header_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_4" class="filled-in chk-col-primary" id="nav_header_bg_4">
                                <label for="nav_header_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_5" class="filled-in chk-col-primary" id="nav_header_bg_5">
                                <label for="nav_header_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_6" class="filled-in chk-col-primary" id="nav_header_bg_6">
                                <label for="nav_header_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_7" class="filled-in chk-col-primary" id="nav_header_bg_7">
                                <label for="nav_header_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_8" class="filled-in chk-col-primary" id="nav_header_bg_8">
                                <label for="nav_header_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_9" class="filled-in chk-col-primary" id="nav_header_bg_9">
                                <label for="nav_header_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="navigation_header" value="color_10" class="filled-in chk-col-primary" id="nav_header_bg_10">
                                <label for="nav_header_bg_10"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Header</p>
                        <div>
                            <span>
                                <input type="radio" name="header_bg" value="color_1" class="filled-in chk-col-primary" id="header_bg_1">
                                <label for="header_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_2" class="filled-in chk-col-primary" id="header_bg_2">
                                <label for="header_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_3" class="filled-in chk-col-primary" id="header_bg_3">
                                <label for="header_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_4" class="filled-in chk-col-primary" id="header_bg_4">
                                <label for="header_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_5" class="filled-in chk-col-primary" id="header_bg_5">
                                <label for="header_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_6" class="filled-in chk-col-primary" id="header_bg_6">
                                <label for="header_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_7" class="filled-in chk-col-primary" id="header_bg_7">
                                <label for="header_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_8" class="filled-in chk-col-primary" id="header_bg_8">
                                <label for="header_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_9" class="filled-in chk-col-primary" id="header_bg_9">
                                <label for="header_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="header_bg" value="color_10" class="filled-in chk-col-primary" id="header_bg_10">
                                <label for="header_bg_10"></label>
                            </span>
                        </div>
                    </div>
                    <div>
                        <p>Sidebar</p>
                        <div>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_1" class="filled-in chk-col-primary" id="sidebar_bg_1">
                                <label for="sidebar_bg_1"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_2" class="filled-in chk-col-primary" id="sidebar_bg_2">
                                <label for="sidebar_bg_2"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_3" class="filled-in chk-col-primary" id="sidebar_bg_3">
                                <label for="sidebar_bg_3"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_4" class="filled-in chk-col-primary" id="sidebar_bg_4">
                                <label for="sidebar_bg_4"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_5" class="filled-in chk-col-primary" id="sidebar_bg_5">
                                <label for="sidebar_bg_5"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_6" class="filled-in chk-col-primary" id="sidebar_bg_6">
                                <label for="sidebar_bg_6"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_7" class="filled-in chk-col-primary" id="sidebar_bg_7">
                                <label for="sidebar_bg_7"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_8" class="filled-in chk-col-primary" id="sidebar_bg_8">
                                <label for="sidebar_bg_8"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_9" class="filled-in chk-col-primary" id="sidebar_bg_9">
                                <label for="sidebar_bg_9"></label>
                            </span>
                            <span>
                                <input type="radio" name="sidebar_bg" value="color_10" class="filled-in chk-col-primary" id="sidebar_bg_10">
                                <label for="sidebar_bg_10"></label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="/vendor/common/common.min.js"></script>
    <script src="/js/custom.min.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/quixnav.js"></script>
    <script src="/js/styleSwitcher.js"></script>



    <script>
        (function($) {
            "use strict"

            new quixSettings({
                version: "light", //2 options "light" and "dark"
                layout: "vertical", //2 options, "vertical" and "horizontal"
                navheaderBg: "color_7", //have 10 options, "color_7" to "color_10"
                headerBg: "color_7", //have 10 options, "color_7" to "color_10"
                sidebarStyle: "full", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
                sidebarBg: "color_7", //have 10 options, "color_7" to "color_10"
                sidebarPosition: "fixed", //have two options, "static" and "fixed"
                headerPosition: "static", //have two options, "static" and "fixed"
                containerLayout: "wide",  //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
                direction: "ltr" //"ltr" = Left to Right; "rtl" = Right to Left
            });


        })(jQuery);
    </script>
    

</body>

</html>