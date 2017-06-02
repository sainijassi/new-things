<?php
/**
Plugin Name: Basic
Description: this is for basic learn of wordpress
Author: Jasvir
Version: 0

*/
 
 
 
function adding_admin_bar(){

	add_menu_page(
		'i-learn_wp',
		'learning_plugin',
		'manage_options',
		'clicked',
		'wp_plugin_used',
		'',
		2
		
		
		);
}
function wp_plugin_used(){
		
	require('inc/my_plugin_functionality.php');

}
add_action('admin_menu','adding_admin_bar');


function add_style_in_plugin(){
	wp_enqueue_style("Wp_Basic_style_css",plugins_url('style.css',__FILE__));
	wp_enqueue_script( 'custom_js', plugins_url( 'script.js', __FILE__ ), array('jquery') );
}
add_action('admin_enqueue_scripts','add_style_in_plugin');

add_action('wp_enqueue_scripts','frontend_add_style_in_plugin');



function frontend_add_style_in_plugin(){

wp_enqueue_script("bootstrap-js", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jquery'));
wp_enqueue_style("bootstap-css", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
}

add_shortcode('gravity-html',"show_gravity_html");

function show_gravity_html($atts){


	return '<div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_1">
   <form method="post" enctype="multipart/form-data" id="gform_1" action="/learnwp/test-gravityform/">
      <div class="gform_heading">
         <h3 class="gform_title">All field form</h3>
         <span class="gform_description"></span>
      </div>
      <div class="gform_body">
         <ul id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
            <li id="field_1_1" class="gfield field_sublabel_below field_description_below ">
<!-- add a div class with class form-group-->
            <div class= "form-group">		
               <label class="gfield_label" for="input_1_1 " >Single Line Text</label>
               <div class="ginput_container ginput_container_text">
<!--add a class in input element name form-control-->
               <input name="input_1" id="input_1_1" type="text" value="" class="medium form-control" tabindex="1" aria-invalid="false"></div> 

               </div>
            </li>

            <li id="field_1_2" class="gfield field_sublabel_below field_description_below">
            <div class="form-group">
<!--add a div here with class form-group-->            
               <label class="gfield_label" for="input_1_2">Paragraph Text</label>
               <div class="ginput_container">
<!--add group control class in textarea-->
               <textarea name="input_2" id="input_1_2" class="textarea medium form-control" tabindex="2" aria-invalid="false" rows="10" cols="50"></textarea></div>
               </div>
            </li>


            <li id="field_1_3" class="gfield field_sublabel_below field_description_below">
 <!-- add a div there -->
            <div class="form-group">
               <label class="gfield_label" for="input_1_3">Drop down</label>
               <div class="ginput_container ginput_container_select ">
<!-- add class form-control in select tag -->
                  <select name="input_3" id="input_1_3" class="medium gfield_select selectpicker form-control" tabindex="3" aria-invalid="false">
                     <option value="First Choice">First Choice</option>
                     <option value="Second Choice">Second Choice</option>
                     <option value="Third Choice">Third Choice</option>
                     <option value="Fourth Choice">Fourth Choice</option>
                  </select>
               </div>
               </div>
            </li>

            <li id="field_1_4" class="gfield field_sublabel_below field_description_below">
<!-- add div and give class form-group -->
            <div class="form-group">
               <label class="gfield_label" for="input_1_4">Multi Select</label>
               <div class="ginput_container ginput_container_multiselect">
<!-- add class form-control in select -->
                  <select multiple="multiple" size="7" name="input_4[]" id="input_1_4" class="medium gfield_select form-control" tabindex="4">
                     <option value="First Choice">First Choice</option>
                     <option value="Second Choice">Second Choice</option>
                     <option value="Third Choice">Third Choice</option>
                  </select>
               </div>
            </div>
            </li>

            <li id="field_1_5" class="gfield field_sublabel_below field_description_below">
<!-- add div and give class form-group -->
            <div class="form-group">
               <label class="gfield_label" for="input_1_5">Number</label>
               <div class="ginput_container ginput_container_number">
<!-- add class form-control in input -->
           		<input name="input_5" id="input_1_5" type="text" value="" class="medium form-control" tabindex="5" aria-invalid="false"></div>
               </div>
            </li>

            <li id="field_1_6" class="gfield field_sublabel_below field_description_below">
<!-- add div and give class form-group -->            
            <div class = "form-group">
               <label class="gfield_label">checkBoxes</label>
 <!-- add class well in div -->
               <div class="ginput_container ginput_container_checkbox well">
<!-- add list-group class in ul -->
                  <ul class="gfield_checkbox list-group " id="input_1_6">
 <!-- add listh-group-item in all checkboxes -->                 
                     <li class="gchoice_1_6_1 list-group-item ">
                        <input name="input_6.1" type="checkbox" value="First Choice" id="choice_1_6_1" tabindex="6">
                        <label for="choice_1_6_1" id="label_1_6_1">First Choice</label>                        
                     </li>
                     <li class="gchoice_1_6_2 list-group-item">
                        <input name="input_6.2" type="checkbox" value="Second Choice" id="choice_1_6_2" tabindex="7">
                        <label for="choice_1_6_2" id="label_1_6_2">Second Choice</label>
                     </li>
                     <li class="gchoice_1_6_3 list-group-item">
                        <input name="input_6.3" type="checkbox" value="Third Choice" id="choice_1_6_3" tabindex="8">
                        <label for="choice_1_6_3" id="label_1_6_3">Third Choice</label>
                     </li>
                  </ul>
               </div>
               </div>
            </li>
<!-- in this li doing everything same as last li --> 
            <li id="field_1_7" class="gfield field_sublabel_below field_description_below">
            <div class = "form-group">
               <label class="gfield_label">Radio Buttons</label>
               <div class="ginput_container ginput_container_radio well">
                  <ul class="gfield_radio list-group" id="input_1_7">
                     <li class="gchoice_1_7_0 list-group-item"><input name="input_7" type="radio" value="First Choice" id="choice_1_7_0" tabindex="9"><label for="choice_1_7_0" id="label_1_7_0">First Choice</label></li>
                     <li class="gchoice_1_7_1 list-group-item"><input name="input_7" type="radio" value="Second Choice" id="choice_1_7_1" tabindex="10"><label for="choice_1_7_1" id="label_1_7_1">Second Choice</label></li>
                     <li class="gchoice_1_7_2 list-group-item"><input name="input_7" type="radio" value="Third Choice" id="choice_1_7_2" tabindex="11"><label for="choice_1_7_2" id="label_1_7_2">Third Choice</label></li>
                  </ul>
               </div>
               </div
            </li>


            <li id="field_1_8" class="gfield gform_hidden field_sublabel_below field_description_below"><input name="input_8" id="input_1_8" type="hidden" class="gform_hidden" aria-invalid="false" value=""></li>
            <li id="field_1_9" class="gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below"></li>

            <li id="field_1_10" class="gfield field_sublabel_below field_description_below">
<!-- add a div with class form-group -->
            <div class = "form-group">
               <label class="gfield_label gfield_label_before_complex" for="input_1_10_3">Name</label>
               <div class="ginput_complex ginput_container no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gfield_trigger_change" id="input_1_10">
                  <span id="input_1_10_3_container" class="name_first">
<!-- add class form-control in both inputs section -->
                  <input type="text" name="input_10.3" id="input_1_10_3" value="" aria-label="First name" tabindex="13" aria-invalid="false" class="form-control">
                  <label for="input_1_10_3">First</label>
                  </span>
                  <span id="input_1_10_6_container" class="name_last">
                  <input type="text" name="input_10.6" id="input_1_10_6" value="" aria-label="Last name" tabindex="15" aria-invalid="false" class="form-control">
                  <label for="input_1_10_6">Last</label>
                  </span>
                  </div>
               </div>
            </li>

            <li id="field_1_11" class="gfield field_sublabel_below field_description_below">
 <!-- add div with class form-group and add class form-control in input area -->
            <div class="form-group">
               <label class="gfield_label" for="input_1_11">Date</label>
               <div class="ginput_container ginput_container_date">
                  <input name="input_11" id="input_1_11" type="text" value="" class="datepicker medium mdy datepicker_no_icon hasDatepicker form-control" tabindex="17" >
               </div>
               <input type="hidden" id="gforms_calendar_icon_input_1_11" class="gform_hidden form-control" value="http://localhost/learnwp/wp-content/plugins/gravityforms/images/calendar.png">
               </div>
            </li>


            <li id="field_1_12" class="gfield field_sublabel_below field_description_below">
<!-- add div with class form-group add form-control class in input and add form-control class in section area -->
            <div class = form-group>
               <label class="gfield_label gfield_label_before_complex" for="input_1_12_1">Time</label>
               <div class="clear-multi">
                  <div class="gfield_time_hour ginput_container ginput_container_time" id="input_1_12">
                     <input type="text" maxlength="2" name="input_12[]" id="input_1_12_1" value="" tabindex="18" class="form-control"> <i>:</i>
                     <label for="input_1_12_1">HH</label>
                  </div>
                  <div class="gfield_time_minute ginput_container ginput_container_time">
                     <input type="text" maxlength="2" name="input_12[]" id="input_1_12_2" value="" tabindex="19"  class="form-control">
                     <label for="input_1_12_2">MM</label>
                  </div>
                  <div class="gfield_time_ampm ginput_container ginput_container_time ">
                     <select name="input_12[]" id="input_1_12_3" tabindex="20"  class="form-control">
                        <option value="am">AM</option>
                        <option value="pm">PM</option>
                     </select>
                  </div>
               </div>
            </li>


            <li id="field_1_13" class="gfield field_sublabel_below field_description_below">
<!-- add div with class form-group and add form-control class in input area -->
            <div class = "form-group">

               <label class="gfield_label" for="input_1_13">Phone</label>
               <div class="ginput_container ginput_container_phone"><input name="input_13" id="input_1_13" type="text" value="" class="medium form-control" tabindex="21" aria-invalid="false"></div>
               </div>
               </div>
            </li>

            <li id="field_1_14" class="gfield field_sublabel_below field_description_below">
            <div class="form-group">
               <label class="gfield_label gfield_label_before_complex" for="input_1_14_1">Address</label>    
               <div class="ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address gfield_trigger_change" id="input_1_14">

                  <span class="ginput_full address_line_1" id="input_1_14_1_container">
                  <input type="text" name="input_14.1" id="input_1_14_1" value="" tabindex="22" class="form-control">
                  <label for="input_1_14_1" id="input_1_14_1_label">Street Address</label>
                  </span><span class="ginput_full address_line_2" id="input_1_14_2_container">
                  <input type="text" name="input_14.2" id="input_1_14_2" value="" tabindex="23" class="form-control">
                  <label for="input_1_14_2" id="input_1_14_2_label">Address Line 2</label>
                  </span><span class="ginput_left address_city" id="input_1_14_3_container">
                  <input type="text" name="input_14.3" id="input_1_14_3" value="" tabindex="24" class="form-control">
                  <label for="input_1_14_3" id="input_1_14_3_label">City</label>
                  </span><span class="ginput_right address_state" id="input_1_14_4_container">
                  <input type="text" name="input_14.4" id="input_1_14_4" value="" tabindex="26" class="form-control">
                  <label for="input_1_14_4" id="input_1_14_4_label">State / Province / Region</label>
                  </span><span class="ginput_left address_zip" id="input_1_14_5_container">
                  <input type="text" name="input_14.5" id="input_1_14_5" value="" tabindex="27" class="form-control">
                  <label for="input_1_14_5" id="input_1_14_5_label">ZIP / Postal Code</label>
                  </span>
                  <span class="ginput_right address_country" id="input_1_14_6_container">
                     <select name="input_14.6" id="input_1_14_6" tabindex="28" class="form-control">
                        <option value="" selected="selected"></option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
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
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
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
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                        <option value="Congo, Republic of the">Congo, Republic of the</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Côte dIvoire">Côte dIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
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
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
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
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="North Korea">North Korea</option>
                        <option value="South Korea">South Korea</option>
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
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestine, State of">Palestine, State of</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Sint Maarten">Sint Maarten</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Sudan, South">Sudan, South</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City">Vatican City</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                     </select>
                     <label for="input_1_14_6" id="input_1_14_6_label">Country</label>
                  </span>
                  <div class="gf_clear gf_clear_complex"></div>
               </div>
               </div>
               </div>
            </li>

<!-- under all li i add a div element after li element with class form-group and add form-control class in all input and section -->
            <li id="field_1_15" class="gfield field_sublabel_below field_description_below">
            <div class="form-group">
               <label class="gfield_label" for="input_1_15">Website</label>
               <div class="ginput_container ginput_container_website">
                  <input name="input_15" id="input_1_15" type="text" value="" class="medium form-control" tabindex="29" placeholder="http://" aria-invalid="false">
               </div>
               </div>
            </li>

            <li id="field_1_16" class="gfield field_sublabel_below field_description_below">
            <div class="form-group">
               <label class="gfield_label" for="input_1_16">Post Title</label>
               <div class="ginput_container ginput_container_post_title">
                  <input name="input_16" id="input_1_16" type="text" value="" class="medium form-control" tabindex="30" aria-invalid="false">
               </div>
               </div>
            </li>

            <li id="field_1_17" class="gfield field_sublabel_below field_description_below">
            <div class="form-group">
               <label class="gfield_label" for="input_1_17">Post Body</label>
               <div class="ginput_container"><textarea name="input_17" id="input_1_17" class="textarea medium form-control" tabindex="31" aria-invalid="false" rows="10" cols="50"></textarea></div>
               </div>
            </li>


            <li id="field_1_18" class="gfield field_sublabel_below field_description_below">
            <div class="form-group">
               <label class="gfield_label" for="input_1_18">Post Tags</label>
               <div class="ginput_container ginput_container_post_tags">
                  <input name="input_18" id="input_1_18" type="text" value="" class="large form-control" tabindex="32" aria-invalid="false">
               </div>
               </div>
            </li>


            <li id="field_1_19" class="gfield field_sublabel_below field_description_below">
               <label class="gfield_label" for="input_1_19">Post Category</label>
               <div class="ginput_container ginput_container_select">
                  <select name="input_19" id="input_1_19" class="medium gfield_select form-control" tabindex="33" aria-invalid="false">
                     <option value="1" selected="selected">Uncategorized</option>
                  </select>
               </div>
            </li>
            <li id="field_1_20" class="gfield field_sublabel_below field_description_below">
            <div class="form-group">
               <label class="gfield_label" for="input_1_20">Post Image</label>
               <div class="ginput_complex ginput_container ginput_container_post_image"><span class="ginput_full"><input name="input_20" id="input_1_20" type="file" class="medium form-control" tabindex="34"></span></div>
               </div>
            </li>

            <li id="field_1_21" class="gfield field_sublabel_below field_description_below">
            <div class="form-group">
               <label class="gfield_label" for="input_1_21">Post Custom Field</label>
               <div class="ginput_container ginput_container_text"><input name="input_21" id="input_1_21" type="text" value="" class="medium form-control" tabindex="38" aria-invalid="false"></div>
               </div>
            </li>
         </ul>
      </div>
      <div class="gform_footer top_label"> <input type="submit" id="gform_submit_button_1" class="gform_button button btn " value="Submit" tabindex="39" onclick="if(window[&quot;gf_submitting_1&quot;]){return false;}  window[&quot;gf_submitting_1&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_1&quot;]){return false;} window[&quot;gf_submitting_1&quot;]=true;  jQuery(&quot;#gform_1&quot;).trigger(&quot;submit&quot;,[true]); }"> 
         <input type="hidden" class="gform_hidden" name="is_submit_1" value="1">
         <input type="hidden" class="gform_hidden" name="gform_submit" value="1">
         <input type="hidden" class="gform_hidden" name="gform_unique_id" value="">
         <input type="hidden" class="gform_hidden" name="state_1" value="WyJbXSIsImRiMjQyODRhOTdlZjU1YWY5ZTNjNjQ1M2Y3MjRhZDNmIl0=">
         <input type="hidden" class="gform_hidden" name="gform_target_page_number_1" id="gform_target_page_number_1" value="0">
         <input type="hidden" class="gform_hidden" name="gform_source_page_number_1" id="gform_source_page_number_1" value="1">
         <input type="hidden" name="gform_field_values" value="">
      </div>
   </form>
</div>';
}