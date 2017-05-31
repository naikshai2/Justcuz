@extends('layouts.app')


@section('title')
   <title>:: Amoritization Calculator| {{ config('constant.DOMAIN') }} </title>
@stop   
@section('styles')
    <link href="/css/amoritize.css" rel="stylesheet">
    <link href="/css/style1.css" rel="stylesheet">

@stop

@section('content')
 
<div id="content">
<h1 class="title">Amoritization Schedule<strong> Calculator</strong></h1>

<center>

   
<table class="table table-bordered trm">
            <tbody><tr><td> <b>Loan Amount</b></td>
   <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    border-left-width: 1px;
">  $<input type="text" id="loanAmount" class="user-input" value="" style="
    width: 104px;
    border-collapse: separate;
    border: solid black 1px;
    /* border-radius: 6px; */
    -moz-border-radius: 6px;
    height: 30;
    font-size: 15;
    padding-left: 5px;
"></td>
</tr>
  
  
    <tr><td><b>Interest Rate</b></td>
   
  
      <td style="
    padding-top: 12px;
    padding-bottom: 12px;
    width: 100px;
    padding-right: 5px;
"><input type="text" id="interestRate" class="user-input" value="" style="
    width: 104px;
    border-collapse: separate;
    border: solid black 1px;
    /* border-radius: 6px; */
    -moz-border-radius: 6px;
    height: 30;
    font-size: 15;
    padding-left: 5px;
">%</td>
  </tr>

 
     <tr><td style="
    padding-top: 12px;
    padding-bottom: 12px;
           "><b>Years</b></td>
  
      <td><input type="text" id="years" class="user-input" value="30" style="
  width: 104px;
  border-collapse: separate;
  border: solid black 1px;
  /* border-radius: 6px; */
  -moz-border-radius: 6px;
  height: 30;
  font-size: 15;
  padding-left: 5px;
"></td>
  </tr>

  
      <tr><td style="
    padding-top: 12px;
    padding-bottom: 12px;
           "><b>Payments per year</b></td>
  
  
    <td><input type="text" id="paymentsPerYear" class="user-input" value="12" style="
   width: 104px;
   border-collapse: separate;
   border: solid black 1px;
   /* border-radius: 6px; */
   -moz-border-radius: 6px;
   height: 30;
   font-size: 15;
   padding-left: 5px;
"></td>
  </tr> 
  
        <tr class="greenbold"><td>Payment Amount</td>
  
   <td> <div id="paymentAmount" style="
    font-size: 34;
">$35.18</div></td>
  </tr> 
</tbody></table> 
     
<br>


<div id="outline-container-sec-3" class="outline-2">

<div id="piechart" style="width: 600px; height: 500px;"></div>

<h2 id="sec-4">Schedule</h2>
<div class="outline-text-2" id="text-4">
<a name="schedule">



<div id="schedule"><div id="schedule_table_wrapper" class="dataTables_wrapper no-footer"><table cellpadding="0" cellspacing="0" border="0" class="display table dataTable no-footer" id="schedule_table" role="grid"><thead><tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 46px;">Period</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 63px;">Principle</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 54px;">Interest</th><th class="sorting_disabled" rowspan="1" colspan="1" style="width: 75px;">Remaining</th></tr></thead><tbody><tr role="row" class="odd"><td>0</td><td>819.58</td><td>2250.00</td><td>50000.00</td></tr><tr role="row" class="even"><td>1</td><td>856.46</td><td>2213.12</td><td>49180.42</td></tr><tr role="row" class="odd"><td>2</td><td>895.00</td><td>2174.58</td><td>48323.96</td></tr><tr role="row" class="even"><td>3</td><td>935.27</td><td>2134.30</td><td>47428.97</td></tr><tr role="row" class="odd"><td>4</td><td>977.36</td><td>2092.22</td><td>46493.69</td></tr><tr role="row" class="even"><td>5</td><td>1021.34</td><td>2048.23</td><td>45516.33</td></tr><tr role="row" class="odd"><td>6</td><td>1067.30</td><td>2002.27</td><td>44494.99</td></tr><tr role="row" class="even"><td>7</td><td>1115.33</td><td>1954.25</td><td>43427.69</td></tr><tr role="row" class="odd"><td>8</td><td>1165.52</td><td>1904.06</td><td>42312.36</td></tr><tr role="row" class="even"><td>9</td><td>1217.97</td><td>1851.61</td><td>41146.83</td></tr><tr role="row" class="odd"><td>10</td><td>1272.78</td><td>1796.80</td><td>39928.86</td></tr><tr role="row" class="even"><td>11</td><td>1330.05</td><td>1739.52</td><td>38656.09</td></tr><tr role="row" class="odd"><td>12</td><td>1389.91</td><td>1679.67</td><td>37326.03</td></tr><tr role="row" class="even"><td>13</td><td>1452.45</td><td>1617.13</td><td>35936.13</td></tr><tr role="row" class="odd"><td>14</td><td>1517.81</td><td>1551.77</td><td>34483.68</td></tr><tr role="row" class="even"><td>15</td><td>1586.11</td><td>1483.46</td><td>32965.86</td></tr><tr role="row" class="odd"><td>16</td><td.center>1657.49</td><td>1412.09</td><td>31379.75</td></tr><tr role="row" class="even"><td>17</td><td>1732.08</td><td>1337.50</td><td>29722.26</td></tr><tr role="row" class="odd"><td>18</td><td>1810.02</td><td>1259.56</td><td>27990.19</td></tr><tr role="row" class="even"><td>19</td><td>1891.47</td><td>1178.11</td><td>26180.17</td></tr><tr role="row" class="odd"><td>20</td><td>1976.59</td><td>1092.99</td><td>24288.70</td></tr><tr role="row" class="even"><td>21</td><td>2065.53</td><td>1004.05</td><td>22312.11</td></tr><tr role="row" class="odd"><td>22</td><td>2158.48</td><td>911.10</td><td>20246.58</td></tr><tr role="row" class="even"><td>23</td><td>2255.61</td><td>813.96</td><td>18088.10</td></tr><tr role="row" class="odd"><td>24</td><td>2357.12</td><td>712.46</td><td>15832.49</td></tr><tr role="row" class="even"><td>25</td><td>2463.19</td><td>606.39</td><td>13475.37</td></tr><tr role="row" class="odd"><td>26</td><td>2574.03</td><td>495.55</td><td>11012.19</td></tr><tr role="row" class="even"><td>27</td><td>2689.86</td><td>379.72</td><td>8438.16</td></tr><tr role="row" class="odd"><td>28</td><td>2810.90</td><td>258.67</td><td>5748.30</td></tr><tr role="row" class="even"><td>29</td><td>2937.39</td><td>132.18</td><td>2937.39</td></tr><tr role="row" class="odd"><td>30</td><td>3069.58</td><td>0.00</td><td>0.00</td></tr></tbody></table></div></div>
</a></div><a name="schedule">
</a></div><a name="schedule">
</a>
</div>

</div>
</div>
</center>
@stop
@section('scripts') 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="http://www.pirilampo.org/styles/readtheorg/js/rtd.js"></script>
<script src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="/js/amoritize.js"></script>
    
@stop
