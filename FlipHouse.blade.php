@extends('layouts.app')


@section('title')
<title>:: Flip House Calculator| {{ config('constant.DOMAIN') }} </title>
@stop	
@section('styles')
    <link href="/css/sky-forms.css" rel="stylesheet">
    <link href="/css/sky-forms-color.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style1.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
@stop

@section('content')
 <div class="bodyCon">
	<div class="container">
      <div class="row">
        <div class="col-md-12">
   	  	<h1>Flip House Profit <span>Calculator</span> </h1>
        </div>
        <div class="clr"></div>
      </div>
      
      	<h5>Directions: Fill in highlighted blanks.  Items highlighted in <b>red</b> below are critical for an accurate Return on Cash. Other cost  figures have been provided but can be adjusted for your property and market .</h5>
      <p class="flipbold">Get the full Excel customizable spreadsheet emailed to you for $50.00 . It includes  a renovation worksheet and multiple property entries. Easily save and send copies to lenders or partners. <br><span class="buttncc">SEE SAMPLE SPREADSHEET</span>
<span class="buttncc">BUY NOW</span> </p>
        
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
                    <td><strong>Approx Offer/Purchase Price</strong><br> <span class="street">( Insert best estimate of OFFER price and adjust  after reviewing profit in $ ) </span></td>
                    <td>&nbsp;</td>
                    <td style="
    padding-left: 9px;
    padding-right: 30px;
">$<input class="formtextboxSeven" type="text" name="c6" id="c6" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    margin-right: 4px;
    margin-left: 2px;
"></td>
                    <td>$<span id="tt_d6">0</span><input type="hidden" name="d6" id="d6" value="0"></td>
                    
                 </tr>
                 
                 <tr>
                    <td>Projected 1st Mortgage Amount <span class="street">( Enter loan to value %  )</span> </td>
                    <td>&nbsp;</td>
                    <td style="
    padding-top: 12px;
    padding-bottom: 12.;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c7" id="c7" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="75">%</td>
                    <td>$<span id="tt_d7">0</span><input type="hidden" name="d7" id="d7" value="0"></td>
                   
                 </tr>
                 
                 <tr>
                    <td>Cash Down on Purchase</td>
                    <td>&nbsp;</td>
                    <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                    <td>$<span id="tt_d8">0</span><input type="hidden" name="d8" id="d8" value="0"></td>
                   
                 </tr>
                 
                 
                 
                 
                  <tr>
                    <td>Tax Assessed Value</td>
                    <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                    <td style="
    padding-left: 9px;
    padding-right: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c8_2" id="c8_2" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    margin-left: 2px;
"></td>
                    <td>$<span id="tt_d8_2">0</span><input type="hidden" name="d8_2" id="d8_2" value="0"></td>
                   
                 </tr>
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 <tr>
                    <td><strong>After Renovation Value(ARV)</strong><br>( Very Important ) <span class="street">( Projected Sales Price after repairs &amp; price negotiations)</span></td>
                    <td>&nbsp;</td>
                    <td style="
    padding-left: 9px;
    padding-right: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxSeven" type="text" name="c9" id="c9" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    margin-left: 2px;
"></td>
                    <td>$<span id="tt_d9">0</span><input type="hidden" name="d9" id="d9" value="0"></td>
                   
                 </tr>
                 
                 <tr>
                    <td>&nbsp;</td>
                   <td>Carry Months</td>
                   <td>% or $</td>
                    <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                  
                 </tr>
                 
                 <tr>
                    <td colspan="7" style="text-align:left;"><strong>Expenses ( All costs to renovate and resell home )</strong></td>
                 </tr>
                 
                 <tr>
                   <td>Buying Closing Costs <br><span class="street">( Title insurance, fees, taxes, misc closing costs )( National average  approx 2% )</span>Enter %</td>
                  
                   <td>&nbsp;</td>
                    <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c12" id="c12" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="2">%</td>
                    <td>$<span id="tt_d12">0</span><input type="hidden" name="d12" id="d12" value="0"></td>
                    
                 </tr>
                 
                 <tr>
                   <td>Bank Points   <span class="street">(Percentage of puchase price ) ( Enter number of bank points)</span></td>
                   <td>&nbsp;</td>
                    <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c13" id="c13" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="1">%</td>
                    <td>$<span id="tt_d13">0</span><input type="hidden" name="d13" id="d13" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td>Total Cost of Renovations and Repairs ( Very Important ) <span class="street">(Enter your estimate of total repairs )</span></td>
                   <td>&nbsp;</td>
                    <td style="
    padding-left: 9px;
    padding-right: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxSeven" type="text" name="c14" id="c14" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    margin-left: 2px;
"></td>
                    <td>$<span id="tt_d14">0</span><input type="hidden" name="d14" id="d14" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td>Carry Cost <span class="street">( Approx )( Interest only)(Enter Months of carry and interest rate )</span></td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxSeven" type="text" style="text-align:center" name="b15" id="b15" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isMonth(event)" value="6"></td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c15" id="c15" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="7">%</td>
                    <td>$<span id="tt_d15">0</span><input type="hidden" name="d15" id="d15" value="0"></td>
                   
                 </tr>
                 <tr>
                   <td>Property Taxes  <span class="street">( Enter Tax Rate ) (1.28% is National Average) (Find your county's tax rate<a href="http://money.cnn.com/interactive/real-estate/property-tax/" target="_blank"> <strong>here</strong>)</a> </span></td>
                   <td><span id="tt_b16">6</span><input type="hidden" name="b16" id="b16" value="6"></td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c16" id="c16" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="1.28">%</td>
                   <td>$<span id="tt_d16">0</span><input type="hidden" name="d16" id="d16" value="0"></td>
                   
                 </tr>
                 <tr>
                   <td>Selling Closing<br> <span class="street">( Costs Average 2%) ( Taxes, settlement fees etc ) ( Enter average closing costs when you sell )</span></td>
                   <td>&nbsp;</td>
                    <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c17" id="c17" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="2">%</td>
                    <td>$<span id="tt_d17">0</span><input type="hidden" name="d17" id="d17" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td>Real Estate Commisions <span>(Enter percentage)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c18" id="c18" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="5">%</td>
                    <td>$<span id="tt_d18">0</span><input type="hidden" name="d18" id="d18" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td>Average Sellers Subsidy Paid by you <span class="street">(Enter percentage)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c19" id="c19" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="3">%</td>
                    <td>$<span id="tt_d19">0</span><input type="hidden" name="d19" id="d19" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td>Liability Insurance <span class="street">(Average  nationwide .8%)  ( Enter approx Insurance Rate )</span></td>
                  <td><span id="tt_b20">6</span><input type="hidden" name="b20" id="b20" value="6"></td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxTwo" type="text" name="c20" id="c20" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0.8">%</td>
                   <td>$<span id="tt_d20">0</span><input type="hidden" name="d20" id="d20" value="0"></td>
                   
                 </tr>
                 <tr>
                   <td>Overhead <span class="street">( Utilities, Maintenance, lawn care  and misc ( Enter  dollar amount )</span></td>
                  <td>&nbsp;</td>
                    <td style="
    padding-left: 8px;
    padding-right: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxSeven" type="text" name="c21" id="c21" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="1" style="
    margin-left: 2px;
"></td>
                    <td>$<span id="tt_d21">0</span><input type="hidden" name="d21" id="d21" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td> HOA/Condo  FEES etc    <span class="street">(Enter  Mo. HOA Fee Dollar Amount)</span></td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><span id="tt_b22">6</span><input type="hidden" name="b22" id="b22" value="6"></td>
                   <td style="
    padding-left: 7px;
    padding-right: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c22" id="c22" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    margin-left: 2px;
"></td>
                   <td>$<span id="tt_d22">0</span><input type="hidden" name="d22" id="d22" value="0"></td>
                   
                 </tr>
                 <tr>
                   <td>Other Expense: <span class="street">(Enter Dollar Amount)</span></td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                  <td style="
    padding-left: 6px;
    padding-right: 30px;
    padding-top: 12px;
    padding-bottom: 12px;
">$<input class="formtextboxTwo" type="text" name="c23" id="c23" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="0" style="
    margin-left: 2px;
"></td>
                    <td>$<span id="tt_d23">0</span><input type="hidden" name="d23" id="d23" value="0"></td>
                    
                 </tr>
                 <tr>
                   <td>Credits: Seller Subsidy Received, Commissions etc  <span class="street">( Enter a negative number)</span></td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                   <td style="
    padding-left: 2px;
    padding-right: 35px;
    padding-top: 12px;
    padding-bottom: 12px;
">-$<input class="formtextboxTwo" type="text" name="c24" id="c24" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumberss()" value="0"></td>
                    <td>-$<span id="tt_d24">0</span><input type="hidden" name="d24" id="d24" value="0"></td>
                   
                 </tr>
                 
                 <tr>
                   <td><strong>Total Expenses</strong></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                   <td>$<span id="tt_d25">0</span><input type="hidden" name="d25" id="d25" value="0"></td>
                  
                 </tr>
                 
                 <tr class="greenbold">
                   <td class="greenbold">Projected Profit or Loss <span class="street">(Sales Price minus Purchase Price &amp; Expenses )</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                     <td>$<span id="tt_d26">0</span><input type="hidden" name="d26" id="d26" value="0"></td>
                   
                 </tr>
                 <tr class="blackbold">
                   <td>Total Cash Needed <span class="street">(Total Expenses Plus Cash Paid for Purchase)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                   <td>$<span id="tt_d27">0</span><input type="hidden" name="d27" id="d27" value="0"></td>
                   
                 </tr>
                 <tr class="blackbold">
                   <td>Return on Cash  <span class="street">(Net Profit / Total Cash Investment)</span> </td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                     <td><span id="tt_d28">0</span>%<input type="hidden" name="d28" id="d28" value="NaN"></td>
                   
                 </tr>
                 <tr class="blackbold">
                   <td>ROI annualized <span class="street">( If Cash return rate continued for the rest of year)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                    <td><span id="tt_d29">0</span>%<input type="hidden" name="d29" id="d29" value="NaN"></td>
                   
                 </tr>
                 <tr>
                   <td height="10" colspan="7"></td>
                 </tr>
                 
                 <tr class="greenbold">
                   <td>Minimum Acceptable Profit</td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
"><input class="formtextboxSeven" type="text" name="c32" id="c32" kl_virtual_keyboard_secure_input="on" onblur="calcutation()" onkeypress="return isNumber(event, this)" value="10">%</td>
                    <td>$<span id="tt_d32">0</span><input type="hidden" name="d32" id="d32" value="0"></td>
                    
                 </tr>
                 <tr class="blackbold">
                   <td>Maximum  Suggested Offer Price <span class="street">( Based on Minimum Profit )</span> 
                   	  If maximum offer is less than approx purchase price consider adjusting the offer lower.</td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                    <td>$<span id="tt_d33">0</span><input type="hidden" name="d33" id="d33" value="0"></td>
                  
                 </tr>
                 <tr class="blackbold">
                   <td>Return on Cash  <span class="street">(Net Profit / Total Cash Investment)</span></td>
                   <td>&nbsp;</td>
                   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
">&nbsp;</td>
                    <td><span id="tt_d34">0</span>%<input type="hidden" name="d34" id="d34" value="NaN"></td>
                  
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
 <script src="js/myScript.js"></script>
@stop 