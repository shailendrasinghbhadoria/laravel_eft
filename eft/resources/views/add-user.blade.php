
@extends('header')

@section('content')


<div class="wrap">
{{--
	 <div id="header">
		<div id="top">
			<div class="left">
				
			</div>
			<div class="right">
				<div class="align-right">
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
		<div id="nav">
		</div>
	</div> --}}
	
	<div id="content">
		<div id="sidebar">
            <div class="box">
                <div class="h_title">&#8250; Main control</div>
                <ul id="home">
                    <li class="b2"><a class="icon report" href="view-user.php">Manage Invoice</a></li>
                    <li class="b1"><a class="icon add_page" href="/adduser">Add Invoice</a></li>
                        
                    <li class="b1"><a class="icon add_page" href="export-csv.php">Send & Download</a></li>
                    <?php if(Session::get('user') == 'admin'){ ?>
                            <li class="b1"><a class="icon add_page" href="add-admin.php">Create Admin</a></li>
                            <li class="b2"><a class="icon report" href="view-admin-user.php">Admin User List</a></li>
                        <?php } ?>
                    <!--<li class="b1"><a class="icon add_page" href="download-attachment.php">Download Attachment</a></li>-->		
                </ul>
            </div>   
           
        </div>
		<div id="main">
			<div class="full_w">

				<div class="h_title">Add Invoice</div>
			
			<form action="{{route('createInvoice')}}" id="add-user" method="post">
                @csrf	
            	<div class="form_header">
          		<div class="form_inner">
                <label for="bill sequence number">Bill Sequence number</label>
                <input value="1" readonly="readonly" type="text" name="data['0'][bill_seq_num]"  onkeyup="return limitlength(this, 1)"  required="required" >
                <p style="color:#F00">
				<?php if(isset($_GET['validmsg'])){
							echo "Already have this number";
					} ?>
                </p>
                </div>
            	<div class="form_inner">
                <label for="">Provider  Name</label>
            	<input value="DILIGENCE INTERNATIONAL GROUP" readonly="readonly" type="text" name="provider_name" onkeyup="return providerlength(this, 31)" maxlength="31" required="required">
                </div>
                <div class="form_inner">
                <label for="">Provider First Name</label>
                <input type="text"  onkeyup="return providername(this, 10)" name="provider_lname" id="provider_lname" maxlength="10">
                </div>
                <div class="form_inner">
                <label for="">Provider Tax Id</label>
                <input value="262339302" readonly="readonly" type="text" maxlength="11"  onkeyup="return providertaxid(this, 11)" name="tax_id" required="required" >
                </div>
                <div class="form_inner_clear"></div>
                <div class="form_inner mrg-top">
                <label for="">Location Sequence Number</label>
                <input type="text" readonly="readonly" name="location_seq_num" onkeyup="return seqnum(this, 5)" maxlength="5" value="00002" required="required" >
                </div>
                <div class="form_inner mrg-top">
                <label for="">Service Date</label>
                	<input type="text" value="" name="bill_date" placeholder="yyyy-mm-dd" maxlength="10"  class="datePicker"  />
                </div>
                <div class="form_inner mrg-top"><label for="">Provider invoice number</label>
                <input type="text" name="invoice_number" maxlength="11"  required="required"  ></div>
                <div class="form_inner mrg-top "><label for="">Provider Account number</label>
                <input type="text" name="account_num" maxlength="11"  ></div>
                <div class="form_inner_clear"></div>
                <div class="form_inner_1"><label for="">Filler</label>
                <input type="text" maxlength="32" name="filler" onkeyup="return filler(this, 32)" >
                </div>
                </div>
        		<div class="form_inner_clear"></div>
				
				
            	
            
                <div class="form_inner">
                <label for="">Number Of Records:</label>
                <input type="text" name="num_record" id="numRecord" maxlength="9" value="1" onkeyup="return nrecord(this,9)" required="required">
                </div>
                <div class="form_inner">
                <label for="">Total Billed Amount:</label>
                <input type="text" name="total_amount" class="totalAmount"  id="totalAmount" readonly maxlength="9" onkeyup="return tamount(this, 9)" required="required">
                </div>
                <div class="form_inner_2">      	
                    <input type="submit" name="Submit" value="Save">
                    <a id="add-more">ADD MORE</a>
                
                </div>
           <div class="form_inner_clear"></div>
            </form>	
			
				
				
			</div>
		</div>
		<div class="clear"></div>
    </div>
</div>




@endsection

@push('script')
<script type="text/javascript">
    $(function(){
        $(".box .h_title").not(this).next("ul").hide("normal");
        $(".box .h_title").not(this).next("#home").show("normal");
        $(".box").children(".h_title").click( function() { $(this).next("ul").slideToggle(); });
    });
    </script>
    <script type="text/javascript">
    function sameAsAbove(Id){ 
    
        var Rid=Id;
    
    var Newid=Rid-1;
    var tf = true;
    
    while(tf){
        if($("#form-box-" + Newid).length == 0) {
            // alert('it doesn t exist'); 
            Newid= Newid-1;
            if(Newid<0){
                //alert(Rid);
                if($('#sameas'+Rid).is(":checked")) {
    
                    $("#customer_lname"+Rid).val($("#customer_lname").val());
                    $("#customer_fname"+Rid).val($("#customer_fname").val());
                    $("#birth_date"+Rid).val($("#birth_date").val());
                    $("#year_select"+Rid).val($("#year_select").val());
                    $("#month_select"+Rid).val($("#month_select").val());
                    $("#day_select"+Rid).val($("#day_select").val());
                                    $("#security_num"+Rid).val($("#security_num").val());
                    $("#state_residence"+Rid).val($("#state_residence").val());
                    $("#policy_num"+Rid).val($("#policy_num").val());
                    $("#servicedate"+Rid).val($("#service_date").val());
                    $("#office_code"+Rid).val($("#office_code").val());
                    }else{
                        $("#customer_lname"+Rid).val('');
                        $("#customer_fname"+Rid).val('');
                        $("#birth_date"+Rid).val('');
                                            $("#year_select"+Rid).val('');
                        $("#month_select"+Rid).val('');
                        $("#day_select"+Rid).val('');
                        $("#security_num"+Rid).val('');
                        $("#state_residence"+Rid).val('');
                        $("#policy_num"+Rid).val('');
                        $("#servicedate"+Rid).val('');
                        $("#office_code"+Rid).val('');
                    }
            
                
                tf=false;
            }else{
    
                
                tf=true
            }
            
        }
        else {
    
            
            /* alert(test);
            alert('ho'+jai); */
    
            if($('#sameas'+Rid).is(":checked")) {
    
                $("#customer_lname"+Rid).val($("#customer_lname"+Newid).val());
                $("#customer_fname"+Rid).val($("#customer_fname"+Newid).val());
                $("#birth_date"+Rid).val($("#birth_date"+Newid).val());
                            $("#year_select"+Rid).val($("#year_select"+Newid).val());
                $("#month_select"+Rid).val($("#month_select"+Newid).val());
                $("#day_select"+Rid).val($("#day_select"+Newid).val());
                $("#security_num"+Rid).val($("#security_num"+Newid).val());
                $("#state_residence"+Rid).val($("#state_residence"+Newid).val());
                $("#policy_num"+Rid).val($("#policy_num"+Newid).val());
                $("#servicedate"+Rid).val($("#servicedate"+Newid).val());
                $("#office_code"+Rid).val($("#office_code"+Newid).val());
                
                }else{
                    $("#customer_lname"+Rid).val('');
                    $("#customer_fname"+Rid).val('');
                    $("#birth_date"+Rid).val('');
                                    $("#year_select"+Rid).val('');
                    $("#month_select"+Rid).val('');
                    $("#day_select"+Rid).val('');
                    $("#security_num"+Rid).val('');
                    $("#state_residence"+Rid).val('');
                    $("#policy_num"+Rid).val('');
                    $("#servicedate"+Rid).val('');
                    $("#office_code"+Rid).val('');
                
                }
    
            
            //alert('its  exist'); 
            tf=false;		
        }
        
    }

   
    }
    
    function providername(obj){
    
        var re = /[^a-zA-Z]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^a-zA-Z]/g, '');
        }
        }
    function invoicenum(obj){
    
        var re = /[^0-9]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^0-9]/g, '');
        }
        
    }
    function accountnum(obj){
        var re = /[^0-9]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^0-9]/g, '');
        }
    }
    function lname(obj){
        var re = /[^a-zA-Z]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^a-zA-Z]/g, '');
        }
    }
    function fname(obj){
        var re = /[^a-zA-Z]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^a-zA-Z]/g, '');
        }
    }
    function snum(obj){
        var re = /[^0-9]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^0-9]/g, '');
        }
    }
    function pnum(obj){
        var re = /[^0-9]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^0-9]/g, '');
        }
    }
    function amount(obj){
        var re = /[^0-9]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^0-9.]/g, '');
        }
    }
    function mklname(obj){
        var re = /[^a-zA-Z]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^a-zA-Z]/g, '');
        }
    }
    function marketcode(obj){
        var re = /[^0-9]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^0-9]/g, '');
        }
    }
    function offcode(obj){
        var re = /[^0-9]/g;
        var match = re.exec(obj);
        if (match) {
            obj.value = obj.value.replace(/[^0-9]/g, '');
        }
    }
    </script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>
    
    
    <script>
    
    
        
    
            $(function() {
                
                
                jQuery('.datePicker').datepicker({dateFormat: 'yy-mm-dd'}).on('change', function(ev){
                 var txtDate=jQuery('.datePicker').val();
                    
                    if(!isDate(txtDate)) {
                        jQuery('.datePicker').val('');
    
                    }
                    
                        
                    });
    
                
            //	var $myDate = $('.datePicker');
                 var $myDatedob = $('.datePickerdob');
                 var d = new Date();
                 var curr_year = d.getFullYear();
                 
    
                 
                 $myDatedob.datepicker({
                     //yearRange: '1900:'+ curr_year, changeMonth:true, changeYear:true, maxDate: '-1d', 
                        dateFormat: 'yy-mm-dd',
                        
                        onClose: function(dateText, inst) {
                              $(this).datepicker('option', 'dateFormat', 'yy-mm-dd');                
                        }
    
    
                     }).on('change', function(ev){
                         var txtDate=jQuery('.datePickerdob').val();
                            
                            if(!isDate(txtDate)) {
                                jQuery('.datePickerdob').val('');
    
                            }
                            
                                
                            });
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var minDate = new Date(y, m, d);
                //alert(minDate);
                $myDatedob.datepicker('option', 'maxDate', minDate);
                 
                
                 
            });
    
            function isDate(txtDate)
            {
              var currVal = txtDate;
    //alert(currVal);
              
              if(currVal == '')
                return true;
              
              //Declare Regex  
              var rxDatePattern = /^\d{4}-\d{1,2}-\d{1,2}$/; 
              var dtArray = currVal.match(rxDatePattern); // is format OK?
    
              if (dtArray == null)
                  
                 return false;
             
              //Checks for mm/dd/yyyy format.
              dtMonth = dtArray[3];
              dtDay= dtArray[5];
              dtYear = dtArray[1];
    
              if (dtMonth < 1 || dtMonth > 12)
                  return false;
              else if (dtDay < 1 || dtDay> 31)
                  return false;
              else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31)
                  return false;
              else if (dtMonth == 2)
              {
                 var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
                 if (dtDay> 29 || (dtDay ==29 && !isleap))
                     
                      return false;
                  
              }
        
              return true;
            }
    </script>



<script>
    $(document).ready(function(){
        var i = 1;
        $("#add-more").on('click',function(){
            var html = "";
            
                 
            html +='<div><a style="float: right;" onclick="billed_amount_minus('+i+')" class="remov" href="#" data-srno="'+i+'"> Remove </a></div>';
            html +='<div id="form-box-'+i+'" class="form_bottom" >';
            html +=' <input type="checkbox" id="sameas'+i+'" value="'+i+'" onclick="sameAsAbove('+i+')"> Same as Above <input type="hidden" id="task'+i+'" name="task" value="'+i+'" /> <br/>';
            html +='<div class="form_inner mrg-top">';
            html +='<label for="customerlname">Customer Last Name:</label>';
            html +='<input type="text" style="text-transform:uppercase" name="data['+i+'][customer_lname]" id="customer_lname'+i+'" onkeyup="return lname(this)" maxlength="20" required="required" ></div>';
            html +='<div class="form_inner mrg-top">';
            html +='<label for="">Customer First Name:</label>';
            html +='<input type="text" style="text-transform:uppercase"  name="data['+i+'][customer_fname]" id="customer_fname'+i+'" maxlength="10"  onkeyup="return fname(this, 10)" required="required"></div>';
            html +='<div class="form_inner mrg-top">';
            html +='<label for="billdate">Date Of Birth:</label>';
                html +='<select name="date_year" id="year_select'+i+'" onchange="setDOB('+i+');"><option value="" >Year</option><?php for ($year = date("Y"); $year >= ('1900'); $year--) { ?>  <option value="<?php echo  $year ?>"> <?php echo  $year ?></option>   <?php    } ?>  </select> <select name="date_month" id="month_select'+i+'" onchange="setDOB('+i+');" ><option value="" >Month</option><?php $months = array("", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");  for ($month = 1; $month <= 12; $month++) { ?> <option value="<?php echo  $months[$month] ?>"><?php echo  $months[$month] ?></option> <?php    } ?> </select> <select name="date_day" id="day_select'+i+'" onchange="setDOB('+i+');"> <option value="">Day</option><?php for ($day = 1; $day <= 31; $day++) { ?> <option value="<?php echo  $day ?>"><?php echo  $day ?></option> <?php   } ?> </select>';
                                        html +='<input type="hidden" name="data['+i+'][birth_date]" id="birth_date'+i+'"   value="" maxlength="10" class="datePickerdob" ></div>';
            html +='<div class="form_inner mrg-top">';
            html +='<label for="">Customer Social Security Number</label>';
            html +='<input type="text" name="data['+i+'][security_num]" id="security_num'+i+'"  maxlength="9" onkeyup="return snum(this, 9)" pattern=".{9,}" required title="SSN must be 9 digit"></div>';
            html +='<div class="form_inner_clear"></div>';
            html +='<div class="form_inner">';
            html +='<label for="">Customer State Of Residence:</label>';
        //	html +='<input type="text" name="data['+i+'][state_residence]" required="required"></div>';
            html +='<select class="form-control" name="data['+i+'][state_residence]" id="state_residence'+i+'" required="required" >';
            html +=' <option value="" >Select State</option>';
            html +=' <option value="AL" >Alabama</option>';
            html +='<option value="AK">Alaska</option>';
            html +='<option value="AZ">Arizona</option>';
            html +='<option value="AR">Arkansas </option>';
            html +='<option value="CA" >California</option>';
            html +='<option value="CO">Colorado</option>';
            html +=' <option value="CT">Connecticut </option>';
            html +=' <option value="DE">Delaware </option>';
            html +=' <option value="DC" >District Of Columbia</option>';
            html +=' <option value="FL">Florida</option>';
            html +='<option value="GA">Georgia </option>';
            html +=' <option value="HI">Hawaii</option>';
            html +=' <option value="ID" >Idaho</option>';
            html +='  <option value="IL">Illinois</option>';
            html +='   <option value="IN">Indiana</option>';
            html +='   <option value="IA">Iowa</option>';
            html +='   <option value="KS" >Kansas</option>';
            html +='   <option value="KY">Kentucky</option>';
            html +='    <option value="LA">Louisiana</option>';
            html +='    <option value="ME">Maine</option>';
            html +='    <option value="MD" >Maryland</option>';
            html +='    <option value="MA">Massachusetts</option>';
            html +='    <option value="MI">Michigan</option>';
            html +='    <option value="MO">Missouri</option>';
                                    html +='    <option value="MS">Mississippi</option>';
            html +='    <option value="MT" >Montana</option>';
            html +='    <option value="PR">Puerto Rico</option>';
            html +='    <option value="VI">Virgin Islands </option>';
            html +='    <option value="GU">Guam</option>';
            html +='    <option value="NE" >Nebraska</option>';
            html +='    <option value="NV">Nevada</option>';
            html +='  <option value="NH">New Hampshire</option>';
           html +='  <option value="NJ">New Jersey </option>';
           html +='  <option value="NM" >New Mexico</option>';
           html +=' <option value="NY">New York</option>';
           html +='  <option value="NC">North Carolina</option>';
           html +='    <option value="ND">North Dakota</option>';
           html +='  <option value="OH" >Ohio</option>';
                                   html +='  <option value="OR" >Oregon</option>';
           html +=' 	   <option value="OK">Oklahoma</option>';
           html +='    <option value="PA">Pennsylvania</option>';
           html +='   <option value="RI">Rhode Island</option>';
           html +='  <option value="SC" >South Carolina</option>';
           html +='   <option value="SD">South Dakota</option>';
           html +='  <option value="TN">Tennessee</option>';
           html +='    <option value="TX">Texas</option>';
           html +='    <option value="UT">Utah</option>';
           html +='    <option value="UK">United Kingdom</option>';
                                   html +='    <option value="VT">Vermont</option>';
           html +='     <option value="VA">Virginia</option>';
           html +='     <option value="WA">Washington</option>';
           html +='     <option value="WV">West Virginia</option>';
           html +='     <option value="WI">Wisconsin</option>';
           html +='    <option value="WY">Wyoming</option>';
           html +='    <option value="MX">Mexico</option>';
                                   html +='<option value="MN">Minnesota</option>';				
            html +=' </select></div>';
            html +='<div class="form_inner mrg-top">';
            html +='<label for="">Policy Number</label>';
            html +='<input type="text" name="data['+i+'][policy_num]" id="policy_num'+i+'"  maxlength="16" value=""></div>';
            html +='<div class="form_inner mrg-top">';
            html +='<label for="">Service Date</label>';
            html +='<input value=""  type="text" name="data['+i+'][service_date]" id="servicedate'+i+'" maxlength="10" class="datePicker"></div>';
            
            html +='<div class="form_inner mrg-top">';
            html +='<label for="">Service Type Code:</label>';
        //	html +='<input type="text" name="data['+i+'][service_code]"  /></div>';
            html +='<select class="form-control" name="data['+i+'][service_code]" id="service_code'+i+'"  required >';
            html +='<option value="0" >Select Service Type</option>';
            html +=' <option value="IR">Inspection Report</option>';
            html +='  <option value="MC">Medical Canvass</option>';
            html +='   <option value="CB">Comprehensive Bag</option>';
            html +='   <option value="FB">Foreign Bal</option>';
            html +='    <option value="DD">Due Diligence</option>';
            html +='    <option value="FIR">Foreign Inspection Report</option>';
            html +=' </select></div>';
            html +='<div class="form_inner_clear"></div>';
            html +='<div class="form_inner">';
            html +='<label for="">Line Of Business Code1:</label>';
        //	html +='<input type="text" name="data['+i+'][busn_code1]" value=""></div>';
            html +='<select class="form-control"  name="data['+i+'][busn_code1]" >';
            //html +='    <option value="0" >Select Line of Business Code</option>';
            html +='   <option value="1">Life Underwriting</option>';
            //html +='    <option value="2">Disability Income Underwriting </option>';
            //html +='     <option value="F">Variable Life Underwriting </option>';
            html +='  </select></div>';
            html +='<div class="form_inner">';
            html +='<label for="">Line Of Business Code2:</label>';
        //	html +='<input type="text" name="data['+i+'][busn_code2]" value=""></div>';
            html +='<select class="form-control"  name="data['+i+'][busn_code2]" >';
            html +='    <option value="0" >Select Line of Business Code</option>';
            //html +='   <option value="1">Life Underwriting</option>';
            //html +='    <option value="2">Disability Income Underwriting </option>';
            //html +='     <option value="F">Variable Life Underwriting </option>';
            html +='  </select></div>';
            html +='<div class="form_inner">';
            html +='<label for="">Line Of Business Code3:</label>';
        //	html +='<input type="text" name="data['+i+'][busn_code3]" value=""></div>';
            html +='<select class="form-control"  name="data['+i+'][busn_code3]" >';
            html +='    <option value="0" >Select Line of Business Code</option>';
            //html +='   <option value="1">Life Underwriting</option>';
            //html +='    <option value="2">Disability Income Underwriting </option>';
            //html +='     <option value="F">Variable Life Underwriting </option>';
            html +='  </select></div>';
            html +='<div class="form_inner">';
            html +='<label for="">Line Of Business Code4:</label>';
    //		html +='<input type="text" name="data['+i+'][busn_code4]" value=""></div>';
            html +='<select class="form-control"  name="data['+i+'][busn_code4]" >';
            html +='    <option value="0" >Select Line of Business Code</option>';
            //html +='   <option value="1">Life Underwriting</option>';
            //html +='    <option value="2">Disability Income Underwriting </option>';
            //html +='     <option value="F">Variable Life Underwriting </option>';
            html +='  </select></div>';
            html +='<div class="form_inner_clear"></div>';
            html +='<div class="form_inner mrg-top">';
            html +='<label for="customerlname">Requirment Billed Amount:</label>';
            html +='<input onchange="total_billed_amount(this);" type="text" name="data['+i+'][billed_amount]" id="billedAmount'+i+'" maxlength="9" onkeyup="return amount(this, 9)" required="required" value=""></div>';
            html +='<div class="form_inner">';
            html +='<label for="">Provider\'s Customer Source Number:</label>';
            html +='<input type="text" readonly="readonly" name="data['+i+'][source_num]" id="source_num'+i+'" value=""  maxlength="11"></div>';
            html +='<div class="form_inner mrg-top">';
            html +='<label for="billdate">Marketer Last Name:</label>';
            html +='<input type="text" readonly="readonly" name="data['+i+'][marketer_lname]" id="marketer_lname'+i+'" maxlength="5" onkeyup="return mklname(this, 5)" value=""></div>';
            
            html +='<div class="form_inner mrg-top">';
            html +='<label for="">Marketer Code Number</label>';
            html +='<input type="text" readonly="readonly" name="data['+i+'][marketer_code]" id="marketer_code'+i+'" maxlength="7" onkeyup="return marketcode(this, 7)" ></div>';
            html +='<div class="form_inner_clear"></div>';
            html +='<div class="form_inner">';
            html +='<label for="">General Office Code:</label>';
            html +='<input type="text" name="data['+i+'][office_code]" id="office_code'+i+'" maxlength="3"   value="">';
            html +='</div>';
            html +='</div>';
            html +='<script>$(function() { var $myDate = $(".datePicker");var d = new Date();  var curr_year = d.getFullYear(); var $myDatedob = $(".datePickerdob"); $myDate.datepicker({dateFormat: "yy-mm-dd"})  ; $myDatedob.datepicker({ yearRange: "1900:"+ curr_year, changeMonth:true, changeYear:true, maxDate: "-1d",dateFormat: "yy-mm-dd",onClose: function(dateText, inst) {$(this).datepicker("option", "dateFormat", "yy-mm-dd"); }   })});<\/script>';
            //html +='<script>function lname(obj){var re = /[^a-zA-Z]/g;var match = re.exec(obj);if (match) {obj.value = obj.value.replace(/[^a-zA-Z]/g, '');}}<\/script>';
            $('.new-html').append(html);

                
            
            i++;
        });
            
            
            $(".new-html").on('click', '.remov', function(){
                
                
                    var srno = $(this).data('srno');
                    
                $('#form-box-'+srno).remove();
                $(this).remove();
            var numRecords = $("#numRecord").val();
            numRecords--;
          
          $('#numRecord').val(numRecords);
          $('#numRecord').attr("readonly", "readonly");
          /*var amo = $(".billedAmount2").val();
          alert(amo)*/
        
            });
        
          
        
        
});
</script>

        <script>
        $("#add-more").click(function(){  
        var numRecords = $("#numRecord").val();
        numRecords++;

        $('#numRecord').val(numRecords);
        $('#numRecord').attr("readonly", "readonly");
        


        })
        </script>

        <script>


        function billed_amount(amount){
        if(amount == ''){
        amount = 0;
        }
        var total_amount = $('.totalAmount').val();
        total_amount = (parseInt(total_amount) + parseInt(amount));
        $('.totalAmount').val(total_amount);
        }
        function billed_amount_minus(i){

        var am = $("#billedAmount"+i).val() ;
        if(am == ''){
        am = 0;
        }
        var total_amount = $('.totalAmount').val();
        total_amount = (parseInt(total_amount) - parseInt(am));
        $('.totalAmount').val(total_amount);
        }

        function total_billed_amount(fld){
        var oldVal = fld.defaultValue;
        //alert(oldVal);
        oldVal = (oldVal===undefined || oldVal==''|| oldVal=='NULL')?'0':fld.defaultValue;
        //alert(oldVal);
        var newVal = fld.value;
        newVal = newVal==''?'0':fld.value;
        //alert(newVal);
        fld.defaultValue = newVal;
        var total_amount = $('.totalAmount').val();
        total_amount = (total_amount===undefined || total_amount==''|| total_amount=='NULL')?'0':total_amount;
        //alert('total = '+total_amount);
        total_amount = (parseFloat(total_amount) - parseFloat(oldVal));
        total_amount = (parseFloat(total_amount) + parseFloat(newVal));
        if(total_amount < 0) {
            total_amount=0;
            }
        $('.totalAmount').val(total_amount);

        }

        function setDOB(Id){

        var Rid=Id;
        //alert(Rid);
        var day = document.getElementById('day_select'+Rid).value;
        var month = document.getElementById('month_select'+Rid).value;
        var year = document.getElementById('year_select'+Rid).value;

        if (year == "")
        {
        alert( "Please Select Year" );

        return false;
        }
        else if (month == "")
        {
        alert( "Please Select Month" );

        return false;
        }
        else if (day == "" )
        {
        alert( "Please Select Day" );

        return false;
        }


        var strText= year +'-'+ month + '-'+day ;
        document.getElementById('birth_date'+Rid).value= strText;



        }
        function setNDOB(){
        var day = document.getElementById('day_select').value;
        var month = document.getElementById('month_select').value;
        var year = document.getElementById('year_select').value;
        if (year == "")
        {
        alert( "Please Select Year" );

        return false;
        }
        else if (month == "")
        {
        alert( "Please Select Month" );

        return false;
        }
        else if (day == "" )
        {
        alert( "Please Select Day" );

        return false;
        }
        var strText= year +'-'+ month + '-'+day ;
        document.getElementById('birth_date').value= strText;
        }  

        </script>


@endpush
