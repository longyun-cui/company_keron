<section id="block-system-main" class="block block-system clearfix">
    <div class="webform-outer">
        <div class="webform-inner">
            <div class="container container-webform">
                <div class="margin-bottom-40">

                    {{--Title--}}
                    <div class="paragraphs-items paragraphs-items-field-content paragraphs-items-field-content-full paragraphs-items-full">
                        <div class="ct ct-text-headline margin-bottom-40 container-100">
                            <div class="container container-small text-center">
                                <h2 class="price_h2">Start your move or Shipment</h2>
                                <div class="text" style="text-align: left;">
                                    <p class="mgb10">Enter your information below and we will get back to you about your move or shipment to, from or within Greater China.</p>
                                    <p>	I would like to receive a service offer for:</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form class="webform-client-form" enctype="multipart/form-data" action="javascript:void(0);" method="post" id="priceForm" accept-charset="UTF-8">

                        {{ csrf_field() }}
                        <input type="hidden" name="language" value="en" id="form-language" readonly>

                        <div>

                            {{--Service Type--}}
                            <div class="form-item webform-component webform-component---type">

                                <label class="element-invisible-" for="edit-submitted-service">
                                    Service Type <span class="form-required" title="This field is required.">*</span>
                                </label>

                                <div id="edit-submitted-service" class="form-radios">
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="submitted-service" class="form-radio" id="service-1" value="moving">
                                        <label class="moving-option" for="service-1">Moving</label>
                                    </div>
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="submitted-service" class="form-radio" id="service-2" value="special-goods">
                                        <label class="special-option" for="service-2">Special Goods</label>
                                    </div>
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="submitted-service" class="form-radio" id="service-3" value="shipping">
                                        <label class="shipping-option" for="service-3">Shipping</label>
                                    </div>
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="submitted-service" class="form-radio" id="service-4" value="storage">
                                        <label class="storage-option" for="service-4">Storage</label>
                                    </div>
                                </div>
                            </div>


                            {{--Moving Destination Type--}}
                            <div class="form-item webform-component webform-component---type moving-box _none">
                                <label class="element-invisible-" for="destination-type">
                                    Destination Type <span class="form-required" title="This field is required.">*</span>
                                </label>
                                <div id="edit-submitted-destination-type" class="form-radios">
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="moving_destination_type" class="form-radio" id="destination-type-1" value="international">
                                        <label for="destination-type-1">International</label>
                                    </div>
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="moving_destination_type" class="form-radio" id="destination-type-2" value="domestic">
                                        <label for="destination-type-2">Domestic</label>
                                    </div>
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="moving_destination_type" class="form-radio" id="destination-type-3" value="local">
                                        <label for="destination-type-3">Local</label>
                                    </div>
                                </div>
                            </div>


                            {{--Moving Type--}}
                            <div class="form-item webform-component webform-component--type moving-box _none" >

                                <label class="element-invisible-" for="moving-type">
                                    Moving Type <span class="form-required" title="This field is required.">*</span>
                                </label>

                                <div id="moving-type" class="form-radios">
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="moving_type" class="form-radio" id="type-1" value="household_move" disabled="">
                                        <label class="house-option" for="type-1">Household Move</label>
                                    </div>
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="moving_type" class="form-radio" id="type-2" value="mini_move" disabled="">
                                        <label class="mini-option" for="type-2">Mini-Move & Excess Baggage</label>
                                    </div>
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="moving_type" class="form-radio" id="type-3" value="pet_move" disabled="">
                                        <label class="pet-option" for="type-3">Pet Relocation</label>
                                    </div>
                                    <div class="form-type-radio form-item radio">
                                        <input type="radio" name="moving_type" class="form-radio" id="type-4" value="office_move" disabled="">
                                        <label class="office-option" for="type-4">Office/Factory Move</label>
                                    </div>
                                </div>

                            </div>


                            {{--宠物 Pet--}}
                            <fieldset class="panel panel-default form-wrapper moving-type-box pet-box _none">
                                <div class="panel-body">
                                    <div class="form-item webform-component webform-component-markup">
                                        <p><strong>Pet Infomation</strong></p>
                                    </div>
                                    <div class="form-item webform-component">
                                        <label class="element-invisible" for="pet-relocation-type">宠物品种 </label>
                                        <select name="pet_relocation_type" class="form-control form-select" id="pet-relocation-type">
                                            <option value="" selected="selected">Pet Type</option>
                                            <option value="dog">Dog</option>
                                            <option value="cat">Cat</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>


                            {{--办公室 Office--}}
                            <fieldset class="panel panel-default form-wrapper moving-type-box office-box _none">
                                <div class="panel-body">
                                    <div class="form-item webform-component webform-component-markup">
                                        <p><strong>Company Information</strong></p>
                                    </div>
                                    <div class="form-item webform-component">
                                        <label class="element-invisible" for="employees-involved">Number of employees involved </label>
                                        <input type="text" placeholder="Number of employees involved" class="form-control form-text" id="employees-involved" name="moving_employees_involved" size="60" maxlength="128">
                                    </div>
                                </div>
                            </fieldset>


                            {{--From-To-Time--}}
                            <fieldset class="panel panel-default form-wrapper from-to-time-box _none">
                                <div class="panel-body">

                                    <div class="form-item webform-component webform-component-markup">
                                        <p><strong>Moving from</strong></p>
                                    </div>


                                    {{--From--}}
                                    <div class="form-item webform-component">
                                        <label class="element-invisible" for="moving-from-country">出发国家</label>
                                        <select class="form-control form-select" id="moving-from-country" name="moving-from-country">
                                            @include('frontend.template-2933.component.select-country-en')
                                        </select>
                                    </div>
                                    <div class="form-item webform-component">
                                        <label class="element-invisible" for="moving-from-city">
                                            City <span class="form-required" title="This field is required.">*</span>
                                        </label>
                                        <input placeholder="City" class="form-control form-text" type="text" id="moving-from-city" name="moving-from-city" value="" size="60" maxlength="128">
                                    </div>


                                    {{--To--}}
                                    <div class="form-item webform-component webform-component-markup">
                                        <p><strong>Moving to</strong></p>
                                    </div>
                                    <div class="form-item webform-component">
                                        <label class="element-invisible" for="moving-to-country">目的地国家</label>
                                        <select class="form-control form-select" id="moving-to-country" name="moving-to-country">
                                            @include('frontend.template-2933.component.select-country-en')
                                        </select>
                                    </div>
                                    <div class="form-item webform-component">
                                        <label class="element-invisible" for="moving-to-city">
                                            目的地城市 <span class="form-required" title="This field is required.">*</span>
                                        </label>
                                        <input placeholder="City" class="form-control form-text" type="text" id="moving-to-city" name="moving-to-city" value="" size="60" maxlength="128">
                                    </div>


                                    {{--Time--}}
                                    <div class="form-item webform-component webform-component-date">
                                        <label for="">Moving date</label>
                                        <div class="webform-container-inline">
                                            <div class="form-type-select form-item form-group">
                                                <label class="element-invisible" for="move-date-month">月 </label>
                                                <select class="getMonth form-control month form-select" id="moving-date-month" name="moving-date-month"  style="width: 42% !important;padding:7px 0px 7px 4% !important;">
                                                    <option value="">Month</option>
                                                    @include('frontend.template-2933.component.select-month-en')
                                                </select>
                                            </div>
                                            <div class="form-type-select form-item form-group">
                                                <label class="element-invisible" for="move-date-day">日 </label>
                                                <select  class="getDate form-control day form-select" id="moving-date-day" name="moving-date-day"  style="width: 24% !important;padding:7px 0px 7px 3% !important;">
                                                    <option value="">Day</option>
                                                    @include('frontend.template-2933.component.select-day')
                                                </select>
                                            </div>
                                            <div class="form-type-select form-item form-group">
                                                <label class="element-invisible" for="move-date-year">年 </label>
                                                <select class="getFullYear form-control year form-select" id="moving-date-year" name="moving-date-year" style="width: 30% !important;padding: 7px 0px 7px 3% !important;">
                                                    <option value="">Year</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>


                            {{--仓储 Storage--}}
                            <fieldset class="panel panel-default form-wrapper storage-box _none">
                                <div class="panel-body">
                                    <div class="form-item webform-component">
                                        <label class="element-invisible-" for="storage-type">Storage Type</label>
                                        <div id="storage-type" class="form-radios">
                                            <div class="form-type-radio form-item radio">
                                                <input type="radio" name="storage_type" class="form-radio" id="storage-type-1" value="personal" checked="checked">
                                                <label for="storage-type-1">Personal items</label>

                                            </div>
                                            <div class="form-type-radio form-item radio">
                                                <input type="radio" name="storage_type" class="form-radio" id="storage-type-2" value="commercial">
                                                <label for="storage-type-2">Commercial items</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-item webform-component">
                                        <label class="element-invisible" for="storage-location">仓储地</label>
                                        <select class="form-control form-select" id="storage-location" name="storage_location">
                                            <option value="" selected="selected">Select Storage Location </option>
                                            <option value="Shanghai">Shanghai</option>
                                            <option value="Beijing">Beijing</option>
                                            <option value="Guangzhou">Guangzhou</option>
                                            <option value="others">Others</option>
                                        </select>
                                    </div>
                                    <div class="form-item webform-component webform-component-date">
                                        <label for="edit-submitted-storage-fields-storage-date">Storage Date</label>
                                        <div class="webform-container-inline">
                                            <div class="form-type-select form-item form-group">
                                                <label class="element-invisible" for="storage-date-month">月 </label>
                                                <select class="getMonth form-control month form-select" id="storage-date-month" name="storage_date_month" style="width: 42% !important;padding: 7px 0px 7px 4% !important;">
                                                    <option value="">Month</option>
                                                    @include('frontend.template-2933.component.select-month-en')
                                                </select>
                                            </div>
                                            <div class="form-type-select form-item form-group">
                                                <label class="element-invisible" for="edit-submitted-storage-fields-storage-date-day">日 </label>
                                                <select class="getDate form-control day form-select" id="storage-date-day" name="storage_date_day" style="width: 24% !important;padding: 7px 0px 7px 3% !important;">
                                                    <option value="">Day</option>
                                                    @include('frontend.template-2933.component.select-day')
                                                </select>
                                            </div>
                                            <div class="form-type-select form-item form-group">
                                                <label class="element-invisible" for="storage-date-year">年 </label>
                                                <select class="getFullYear form-control year form-select" id="storage-date-year" name="storage_date_year"  style="width: 30% !important;padding: 7px 0px 7px 3% !important;">
                                                    <option value="">Year</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>




                            {{--Customer Info--}}
                            <div data-info="">

                                {{--First-Name--}}
                                <div class="form-item webform-component">
                                    <label class="element-invisible" for="edit-submitted-first-name">
                                        First Name <span class="form-required" title="This field is required.">*</span>
                                    </label>
                                    <input type="text" required placeholder="First Name" class="form-control form-text" id="edit-submitted-first-name" name="submitted-first-name" size="60" maxlength="128" oninvalid="setCustomValidity('Please input this item.')" oninput="setCustomValidity('')">
                                </div>

                                {{--Last-Name--}}
                                <div class="form-item webform-component">
                                    <label class="element-invisible" for="edit-submitted-last-name">
                                        Last Name <span class="form-required" title="This field is required.">*</span>
                                    </label>
                                    <input type="text" required placeholder="Last Name *" class="form-control form-text" id="edit-submitted-last-name" name="submitted-last-name" size="60" maxlength="128" oninvalid="setCustomValidity('Please input this item.')" oninput="setCustomValidity('')">
                                </div>

                                {{--Phone Number--}}
                                <div class="form-item webform-component">
                                    <label class="element-invisible" for="edit-submitted-phone-number">
                                        Phone Number <span class="form-required" title="This field is required.">*</span>
                                    </label>
                                    <input type="text" required placeholder="Phone Number *" class="form-control form-text" id="edit-submitted-phone-number" name="submitted-phone" size="60" maxlength="128" oninvalid="setCustomValidity('Please input this item.')" oninput="setCustomValidity('')">
                                </div>

                                {{--Email--}}
                                <div class="form-item webform-component webform-component-email">
                                    <label class="element-invisible" for="edit-submitted-email">Email</label>
                                    <input type="email" required- placeholder="Email" class="email form-text form-email required" id="edit-submitted-email" name="submitted-email" size="60" oninvalid="setCustomValidity('Please input this item.')" oninput="setCustomValidity('')">
                                </div>

                                {{--Company/Organisation--}}
                                <div class="form-item webform-component _none">
                                    <label class="element-invisible" for="edit-submitted-company-organisation">Company/Organisation</label>
                                    <input type="text" placeholder="Company/Organisation" class="form-control form-text webform-conditional-disabled" id="edit-submitted-company-organisation" name="submitted-company_organisation" value="" size="60" maxlength="128" disabled="" oninvalid="setCustomValidity('Please input this item.')" oninput="setCustomValidity('')">
                                </div>

                            </div>


                            {{--Find Us--}}
                            <div class="form-item webform-component">
                                <label class="element-invisible" for="submitted-find-way">How'd You Find Us? </label>
                                <select class="form-control form-select" id="submitted-find-way" name="submitted-find-way">
                                    <option value="" selected="selected">How'd You Find Us?</option>
                                    <option value="Client">Cooperate client</option>
                                    <option value="Friend">Friend referral</option>
                                    <option value="Intermediary">Intermediary agency referral</option>
                                    <option value="Internet">Internet search</option>
                                    <option value="Wechat">Wechat</option>
                                    <option value="Advertising">Online/Offline advertising</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>


                            {{--折扣--}}
                            <div class="form-item webform-component _none">
                                <label for="submitted-discount">折扣 </label>
                                <input type="text" placeholder="Discount" class="form-control form-text" id="submitted-discount" name="submitted_discount" size="60" maxlength="128">
                            </div>


                            {{--验证码--}}
                            <fieldset class="panel panel-default form-wrapper captcha">
                                <legend class="panel-heading">
                                    <div class="panel-title fieldset-legend">
                                        <strong>Verification Code</strong>
                                    </div>
                                </legend>
                                <div class="panel-body">
                                    {{--<p class="help-block other_label"> 验证码<br>Verification Code</p>--}}
                                    <span id="code"></span>

                                    <label for="edit-captcha-response">What code is in the image?
                                        <span class="form-required" title="This field is required.">*</span>
                                    </label>
                                    <input type="text" id="J_codetext edit-captcha-response" placeholder="Verification Code" name="J_codetext" maxlength="15" maxlength="128" class="captcha-txt form-control form-text required" autocomplete="off">
                                    <div class="tips5"></div>
                                    <p class="help-block">Enter the characters shown in the image</p>
                                </div>
                            </fieldset>


                        </div>

                        <button style="margin-bottom:20px;" class="webform-submit button-primary btn btn-primary form-submit" name="op" value="Submit" type="submit">Submit</button>

                    </form>


                </div>
            </div>
        </div>
    </div>
</section>