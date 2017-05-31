@extends('layouts.app')


@section('title')
 <title>:: Rental ROI Calculator| {{ config('constant.DOMAIN') }} </title>
@stop   
@section('styles')
 <link href="css/sky-forms.css" rel="stylesheet">
    <link href="css/sky-forms-color.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style2.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
@stop
@section('content')
<div class="bodyCon">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h1>Rental Property Return On Investment(ROI) <span>Calculator</span> </h1>
        </div>
        <div class="clr"></div>
      </div>
      
        <h5>Directions: Fill In highlighted blanks. Adjust offer price to achieve your desired ROI.  Items highlighted in <strong>red</strong> below are critical for an accurate ROI projection. Other cost  figures have been provided but can be adjusted for your property and market .</h5>
      <p class="flipbold">Get the full Excel customizable spreadsheet emailed to you for $50.00 . It includes  a renovation worksheet and multiple property entries. See how appreciation and depreciation can effect your ROI. Easily save and send copies to lenders or partners. Learn why you should refinance after you renovate to achieve the maximum ROI on your money and to free up cash to purchase your next rental property.This invaluable calculator allows you to compare your ROI before and after you refinance.<br><span class="buttncc">SEE SAMPLE SPREADSHEET</span>
<span class="buttncc">BUY NOW</span> 

</p>
        
        <div class="table-responsive tableSec">
            
            <table class="table table-bordered trm">
            <thead>
            <tr class="applicationFeetc">
            <th width="35%">Subject Property Address: </th>
            <th width="9%">&nbsp;</th>
            <th width="8%">Input $ or %</th>
            <th width="8%">&nbsp;</th>
            
            </tr>
            </thead>
            <tbody class="applicationFeetc">
            
                 <tr>
                    <td><strong> County Tax Assessed Value </strong> <span class="street">(If unsure: use your best estimate or offer price to get approx. taxes) </span></td>
                    <td>&nbsp;</td>
                    <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    width: 107px;
    padding-left: 20px;
    padding-right: 20px;
">$<input class="formtextboxfive" type="text" name="c6" id="c6" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d6">0</span><input type="hidden" name="d6" id="d6" value="0"></td>
                    
                 </tr>
                 
                 <tr>
                    <td><strong>Offer (Purchase Price)</strong>
<span class="street">Insert best estimate of OFFER price and adjust after reviewing profit at the  bottom)</span> </td>
                    <td>&nbsp;</td>
                    <td style="
    padding-left: 20px;
    padding-right: 20px;
">$<input class="formtextboxfive" type="text" name="c7" id="c7" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d7">0</span><input type="hidden" name="d7" id="d7" value="0"></td>
                   
                 </tr>
                 
                 <tr>
                    <td>Projected 1st Mortgage Amount <span class="street">( Enter loan to value %)</span></td>
                    <td>&nbsp;</td>
                    <td style="
    padding-right: 1px;
    height: 42px;
    width: 124px;
    padding-left: 22px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c8" id="c8" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="75" style="
    margin-right: 4px;
    margin-left: 1px;
    padding-right: 12px;
    padding-left: 12px;
    width: 66px;
">%</td>
                    <td>$<span id="tt_d8">0</span><input type="hidden" name="d8" id="d8" value="0"></td>
                   
                 </tr>
                 
                 
                 
              
                 
                 
                 
                 
                 
                 
                 <tr>
                    <td>Cash Down on Purchase</td>
                    <td>&nbsp;</td>
                     <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 20px;
    padding-right: 20px;
">&nbsp;</td>
                    <td>$<span id="tt_d9">0</span><input type="hidden" name="d9" id="d9" value="0"></td>
                   
                 </tr>
                 
                 
                 <tr>
                    <td><b>ARV </b><span class="street">(After Renovation Value) (Enter dollar amount)</span></td>
                    <td>&nbsp;</td>
                      <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxfive" type="text" name="c10" id="c10" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d10">0</span><input type="hidden" name="d10" id="d10" value="0"></td>
                   
                 </tr>
                 
                 
                 
                 
                 <tr>
                    <td>&nbsp;</td>
                   <td>Carry Months</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 20px;
    padding-right: 20px;
">% or $</td>
                    <td>&nbsp;</td>
                  
                 </tr>
                 
                 <tr>
                    <td colspan="7" style="text-align:center;padding-top: 12px;padding-bottom: 12px;"><strong>Expenses (All costs to renovate and get home ready for rent) (Adjust values provided)</strong></td>
                 </tr>

                 
               
                 
                 <tr>
                   <td>Initial Buying Closing Costs <span class="street">(Title insurance, fees, taxes, misc. closing costs )( National average approx. 2%)(Enter %)
</span></td>
                   <td>&nbsp;</td>
                    <td style="
    padding-right: 0px;
    padding-left: 19px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c13" id="c13" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="2" style="
    margin-left: 1px;
    margin-right: 4px;
    width: 66px;
">%</td>
                    <td>$<span id="tt_d13">0</span><input type="hidden" name="d13" id="d13" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td>Bank Points  <span class="street">(Percentage of purchase price) (Enter number of bank points)</span></td>
                   <td>&nbsp;</td>
                    <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c14" id="c14" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="1" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d14">0</span><input type="hidden" name="d14" id="d14" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td>Total Cost of Renovations &amp; Repairs (Very Important) 
 <span class="street">(Enter your estimate of total renovations and repairs)</span></td>
                  <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxfive" type="text" name="c15" id="c15" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d15">0</span><input type="hidden" name="d15" id="d15" value="0"></td>
                   
                 </tr>
                 <tr>
                   <td>Carry Cost <span class="street">(Mortgage Interest until rented) (Enter Months of carry and interest rate on loan)</span></td>
                   <td><input class="formtextboxfive" type="text" name="b16" id="b16" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="6" style="
    width: 66px;
"></td>
                   <td style="
    padding-left: 30px;
    padding-bottom: 12px;
    padding-top: 12px;
"><input class="formtextboxTwo" type="text" name="c16" id="c16" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="8" style="
    width: 66px;
">%</td>
                   <td>$<span id="tt_d16">0</span><input type="hidden" name="d16" id="d16" value="0"></td>
                   
                 </tr>
                 <tr>
                   <td>Property Taxes  <span class="street">(Enter Tax Rate)(1.28% is National Average) (Find your county's tax rate at: <a href="http://money.cnn.com/interactive/real-estate/property-tax/" target="_blank"> <strong>here</strong>)</a></span></td>
                   <td><span id="tt_b17">6</span><input type="hidden" name="b17" id="b17" value="6"></td>
                    <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c17" id="c17" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="1.28" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d17">0</span><input type="hidden" name="d17" id="d17" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td>Liability Insurance 
 <span>(Average  nationwide .8% of purchase price) (Enter approx. Insurance Rate)</span></td>
                    <td><span id="tt_b18">6</span><input type="hidden" name="b18" id="b18" value="6"></td>
                   <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c18" id="c18" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.8" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d18">0</span><input type="hidden" name="d18" id="d18" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td>Overhead (Utilities, Maintenance, lawn care, etc.) 
 <span class="street">(Enter  dollar amount)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-left: 9px;
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c19" id="c19" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.00" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d19">0</span><input type="hidden" name="d19" id="d19" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td> HOA/Condo  FEES etc. <span class="street">(Enter  Mo. HOA  fee dollar amount)</span></td>
                  <td><span id="tt_b20">6</span><input type="hidden" name="b20" id="b20" value="6"></td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c20" id="c20" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.00" style="
    width: 66px;
"></td>
                   <td>$<span id="tt_d20">0</span><input type="hidden" name="d20" id="d20" value="0"></td>
                   
                 </tr>
                 <tr>
                   <td>Other Expense: 
 <span class="street">(Enter Dollar Amount)</span></td>
                  <td>&nbsp;</td>
                    <td style="
    padding-bottom: 12px;
    padding-top: 12px;
">$<input class="formtextboxTwo" type="text" name="c21" id="c21" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.00" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d21">0</span><input type="hidden" name="d21" id="d21" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td> Credits: Seller Subsidy Received When Purchasing, Commissions etc.  
    <span class="street">(Enter a negative number)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-right: 15px;
    padding-top: 12px;
    padding-bottom: 12px;
">-$<input class="formtextboxTwo" style="text-align:center;width: 66px;padding-right: 12px;" type="text" name="c22" id="c22" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0"></td>
                   <td>-$<span id="tt_d22">0</span><input type="hidden" name="d22" id="d22" value="0"></td>
                   
                 </tr>
                 <tr>
                   <td><strong>Total Costs to Buy and Get Ready for Rent</strong>
</td>
                   <td>&nbsp;</td>
                  <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 20px;
    padding-right: 20px;
">&nbsp;</td>
                    <td>$<span id="tt_d23">0</span><input type="hidden" name="d23" id="d23" value="0"></td>
                    
                 </tr>
                 
                 
                 
                 
               
                 <tr>
                   <td><strong>Total Cash Needed </strong> (Total Expenses Plus Cash Down Paid at Purchase)</td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 20px;
    padding-right: 20px;
">&nbsp;</td>
                   <td>$<span id="tt_d24">0</span><input type="hidden" name="d24" id="d24" value="0"></td>
                  
                 </tr>
                 
                <tr>
                   <td height="10" colspan="10" style="text-align:center;padding-top: 12px;padding-bottom: 12px;"><strong>RENTAL PROPERTY CASH FLOW</strong>        
</td>
                 </tr> 
                 
                 
                 
                 <tr>
                   <td><strong> Annual Expenses </strong>       
 <span class="street">( Adjust values provided )</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    padding-right: 20px;
    padding-left: 20px;
">&nbsp;</td>
                     <td>&nbsp;</td>
                   
                 </tr>
                
                
                 <tr>
                   <td>Annual Mortgage <span class="street">( Only interest expense  )  (Enter interest rate on loan )</span></td>
                   <td>&nbsp;</td>
                  <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c29" id="c29" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="5" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d29">0</span><input type="hidden" name="d29" id="d29" value="0"></td>
                   
                 </tr>
                 
                 
                 
                  <tr>
                   <td>Property Taxes  
 <span class="street">(Enter tax rate)(1.28% is national average) (Find your county's tax rate at: <a href="http://money.cnn.com/interactive/real-estate/property-tax/" target="_blank"> <strong>here</strong>)</a></span></td>
                   <td>&nbsp;</td>
                  <td style="
    width: 142px;
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c30" id="c30" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="1.28" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d30">0</span><input type="hidden" name="d30" id="d30" value="0"></td>
                   
                 </tr>
                 
                 
                 
                 
                   <tr>
                   <td>Liability Insurance 
 <span class="street">(Average  nationwide .8% of purchase price)  ( Enter approx. Insurance Rate )</span></td>
                   <td>&nbsp;</td>
                  <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c31" id="c31" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.8" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d31">0</span><input type="hidden" name="d31" id="d31" value="0"></td>
                   
                 </tr>
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 <tr>
                   <td>Extra Insurance <span class="street">(flood, hurricane, etc.) (Enter annual $ amount)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c32" id="c32" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.00" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d32">0</span><input type="hidden" name="d32" id="d32" value="0"></td>
                    
                 </tr>
                 
                 
                 
                <tr>
                   <td>Management  <span class="street"> (Enter % of annual rent)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c33" id="c33" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="10.00" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d33">0</span><input type="hidden" name="d33" id="d33" value="0"></td>
                    
                 </tr>
                 
                 
                 <tr>
                   <td>Overhead  Office Etc.  <span class="street"> (Enter % of annual rent)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c34" id="c34" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="1.00" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d34">0</span><input type="hidden" name="d34" id="d34" value="0"></td>
                    
                 </tr>
                 
                 
                 
                   <tr>
                   <td>Repairs and Maintenance  <span class="street"> (Enter % of annual rent)  </span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c35" id="c35" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="7.00" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d35">0</span><input type="hidden" name="d35" id="d35" value="0"></td>
                    
                 </tr>
                 
                 
                 
                 <tr>
                   <td>Repairs <span class="street">  (Additional cost of repairs in between renters, repaint, carpet,  etc.)  (Enter % of annual rent) </span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c36" id="c36" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="6.00" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d36">0</span><input type="hidden" name="d36" id="d36" value="0"></td>
                    
                 </tr>
                 
                 
                 
                 <tr>
                   <td>Commissions Paid In House or To Rental Agents <span class="street">  (Enter annual dollar amount ) </span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-left: 10px;
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c37" id="c37" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d37">0</span><input type="hidden" name="d37" id="d37" value="0"></td>
                    
                 </tr>
                 
                 
                 
                 <tr>
                   <td>Legal and Court Costs <span class="street">  (Enter % of annual rent) </span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-left: 30px;
"><input class="formtextboxTwo" type="text" name="c38" id="c38" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="1.00" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d38">0</span><input type="hidden" name="d38" id="d38" value="0"></td>
                    
                 </tr>
                 
                 
                 
                  <tr>
                   <td>HOA/Condo Fees  <span class="street">  ( Enter monthly HOA/condo fees )</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c39" id="c39" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.00" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d39">0</span><input type="hidden" name="d39" id="d39" value="0"></td>
                    
                 </tr>
                 
                 
                 
                 
                  <tr>
                   <td>Estimated Utilities  <span class="street">  (Only if Owner Pays) ( Enter annual dollar amount )</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c40" id="c40" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.00" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d40">0</span><input type="hidden" name="d40" id="d40" value="0"></td>
                    
                 </tr>
                 
                 
                 
                <tr>
                   <td>Lawn and Landscape Care   <span class="street"> (Only if owner pays) ( Enter annual dollar amount )</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c41" id="c41" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.00" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d41">0</span><input type="hidden" name="d41" id="d41" value="0"></td>
                    
                 </tr>   
                 
                 
                 
                   <tr>
                   <td>Vacancy  <span class="street"> (8% is One Month) ( Enter % vacancy or average unrented time per year )  </span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c42" id="c42" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="5.00" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d42">0</span><input type="hidden" name="d42" id="d42" value="0"></td>
                    
                 </tr>
                 
                 
                 
                 
              <tr>
                   <td>Uncollectable Rent   <span class="street">   (Enter % of annual rent)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c43" id="c43" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="2.00" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d43">0</span><input type="hidden" name="d43" id="d43" value="0"></td>
                    
                 </tr>   
                 
                 
                 
                 <tr>
                   <td>Other  <span class="street"> ( Enter annual $ amount )</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c44" id="c44" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.00" style="
    width: 66px;
"></td>
                    <td>$<span id="tt_d44">0</span><input type="hidden" name="d44" id="d44" value="0"></td>
                    
                 </tr>   
                 
                 
                 
                 <tr>
                   <td><strong>Total Annual Expenses</strong></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 20px;
    padding-right: 20px;
">&nbsp;</td>
                    <td>$<span id="tt_d45">0</span><input type="hidden" name="d45" id="d45" value="0"></td>
                    
                 </tr>   
                 
                 
                 <tr>
                   <td height="10" colspan="10" style="text-align:center;padding-left: 200px;padding-top: 12px;padding-bottom: 12px;"><strong> Income</strong>      
</td>
                 </tr>
   
                 
                  <tr>
                   <td>Estimated Monthly Rent
   <span class="street">  ( Include pet fees etc.)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxfive" type="text" name="c48" id="c48" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.00" style="
    width: 66px;
"></td>
                    <td>&nbsp;</td>
                 </tr>  
                 
                 
                  <tr>
                   <td>Total Annual Rent</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>$<span id="tt_d49">0</span><input type="hidden" name="d49" id="d49" value="0"></td>
                 </tr>  
                 
            <tr>
                   <td>Annual Positive/Negative Cash Flow</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>$<span id="tt_d50">0</span><input type="hidden" name="d50" id="d50" value="0"></td>
                 </tr> 
                 
                 
                 
                  <tr>
                   <td>Total Cash Needed (Total Expenses Plus Cash Down Paid at Purchase)</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td>$<span id="tt_d51">0</span><input type="hidden" name="d51" id="d51" value="0"></td>
                 </tr> 
                 
                 
                 
                 
                  <tr>
                   <td><strong>ROC : Return on Cash Before Appreciation and Depreciation</strong> <span class="street"> ( Cash Flow / Total Cash Investment)</span> 
</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td><span id="tt_d52">0</span>%<input type="hidden" name="d52" id="d52" value="NaN"></td>
                 </tr> 
                 
                 <tr>
                   <td height="10" colspan="10" style="text-align:center;padding-top: 12px;padding-bottom: 12px;padding-left: 20px;padding-right: 20px;"><strong>Depreciation Tax Write Off and Appreciation</strong>       
</td>
                 </tr>  
                 
                 
                 <tr>
                   <td>Appreciation (Enter your prediction of the annual property appreciation)</td>
                   <td>&nbsp;</td>
                   <td style="
    padding-left: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxfive" type="text" name="c55" id="c55" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="2.00" style="
    width: 66px;
">%</td>
                    <td>$<span id="tt_d55">0</span><input type="hidden" name="d55" id="d55" value="0"></td>
                    
                 </tr>
                 
                 
                 
                 
                  <tr>
                   <td>Depreciation Tax Write Off ( Enter tax accessed value of structures only )</td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c56" id="c56" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.00" style="
    width: 66px;
"></td>
                    <td>&nbsp;</td>
                    
                 </tr>
                 
                 
                 
                 
                 
                 
                 
                  <tr>
                   <td>Annual Depreciation Cash Tax Write Off  <span class="street">( Based on 30% tax bracket and 26 year depreciation )</span>
</td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 20px;
    padding-right: 20px;
">&nbsp;</td>
                   <td>$<span id="tt_d57">0</span><input type="hidden" name="d57" id="d57" value="0"></td>
                 </tr>  
                 
                 
                 
                  <tr>
                   <td>Total Value of  Cash Flow, Appreciation and Depreciation Tax Write Off

</td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    padding-left: 20px;
    padding-right: 20px;
">&nbsp;</td>
                   <td>$<span id="tt_d58">0</span><input type="hidden" name="d58" id="d58" value="0"></td>
                 </tr>  
                 
                 
                 
                   <tr>
                   <td><strong>Total Return On Capital </strong> <span class="street">(Based on 1st years projected cash flow, appreciation and depreciation tax write off)</span>
</td>
                   <td>&nbsp;</td>
                   <td>&nbsp;</td>
                   <td><span id="tt_d59">0</span><input type="hidden" name="d59" id="d59" value="NaN">%</td>
                 </tr>  
                  
                 
                  
            </tbody>
            </table>

        </div>
        
    </div>
</div>
@stop

@section('scripts') 
    <script src="js/jquery.1.11.1.js"></script>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/custom.js"></script>
@stop