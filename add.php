
<style>

    input{
        text-transform: uppercase;
    }

    .title{
        margin-top: 1em;
        font-weight: 300;
    }

</style>


<!-- Admit Form Area Start Here -->
<div class="card height-auto mt-5 ">
    <div class="card-body" >
        <div id="first-step-div">
            
            <div class="heading-layout1 mb-5" >
                <div class="row mb-2">
                    <div class="text-secondary h1 mt-3">MESSAGE</div> 
                    <span class="vl mr-3 ml-3"></span> 
                    <div class="text-dark h1 mt-3" >NEW</div>
                </div>

                <div style="text-align:right;">
                    <a  href="index.php?pg=<?php echo md5('messages');?>&option=<?php echo md5(''); ?>" class="btn btn-fill-md text-light text-15 bg-dark">
                        <span class="fa fa-arrow-left"></span> Back 
                    </a>
                    

                    <button type="button" class="btn btn-fill-md text-15 text-light bg-primary" onclick="sendsms()">
                    <span class="fa fa-paper-plane"> </span> Send
                </button>

        
            </div>
            
            <div class="row" >

                    

                    <div class="col-xl-6 col-lg-6 col-6 form-group">
                        <label>Message Type </label>
                        <select id="messagetype" name="messagetype" onchange="admSelectCheck(this);" class="form-control">
                            <option value="">Select Message Type</option>
                            <option value="customSelect">Custom</option>
                            <option value="groupSelect">Group</option>
                        </select>

                    </div>

                    <div id="customSelect" style="display:none;">
                        <h3 class="title">Custom Message</h3>
                        <div class="row"> 
                            
                            <div class="col-xl-4 col-lg-4 col-4 form-group">
                                <h5>Compose Message</h5> <br>
                                <p> Enter Message you want to send to recepient(s) in the box on the right. <br><br>
                                <b>Note:</b> The "enter" key and other characters copied from Word or from your browser may be counted as more tan one character.  </p>
                            </div>

                            <div class="col-xl-8 col-lg-8 col-8 form-group">
                                <textarea name="msgbody" id="msgbody" cols="90" rows="10"></textarea>
                                <br><br>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-4 form-group">
                                <h5>Contact Recipients List</h5>
                                <p>Recipient numbers should be arranged vertically with each number on a new line. <br> <br>
                                <b>Note:</b> Numbers should be in this format <br><code>2335556687xx</code>
                                <br><code>2335556645xx</code>  </p>
                            </div>

                            <div class="col-xl-8 col-lg-8 col-8 form-group">
                                <textarea name="msgcontactlist" id="msgcontactlist" cols="90" rows="10"></textarea> <br><br>
                                <div class="row"> 
                                    <div class="col-xl-4 col-lg-4 col-4 form-group">
                                        <span>Download sample Excel file <code> <br> <a href="./media/uploads/sms/SampleContacts.csv" style="color: #eb569a;"><i class="far fa-file-excel"></i> Download Excel</code></a></span>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-8 form-group">
                                        <input class="form-control" type="file" id="file-input">
                                    </div>
                                    <!-- <div class="col-xl-3 col-lg-3 col-3 form-group">
                                        <button type="button" class="btn btn-fill-md text-15 bg-green text-light" onclick="sendsms()">
                                            <span class="fa fa-upload"> </span> Upload File
                                        </button>
                                    </div> -->
                                    <!-- <div class="col-xl-12 col-lg-12 col-12 form-group">
                                    
                                        <h3>Raw contents of the file:</h3>
                                        <pre id="file-content">No data yet.</pre>

                                        <h3>Parsed file contents:</h3>
                                        <pre id="file-parsed">No data yet.</pre>

                                    </div> -->
                                </div>
                                <br><br>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-4 form-group">
                                <h5>Subject </h5>
                            </div>

                            <div class="col-xl-8 col-lg-8 col-8 form-group">
                                <input type="text" placeholder="" name="msgsubject" id="msgsubject"  class="form-control" >
                            </div>

                            
                        </div>
                    </div>
                    
                    <div id="groupSelect" style="display:none;">
                        
                        <div class="row">
                        
                            
                            <div class="col-md-12">
                                <div class="panel panel-filled" padding>
                                    <div class="panel-body" margin-top>
                                        <div class="row" style="margin: 2em 0em;">
                                            <div class="col-md-12">
                                                <h3 class="title" >Group Message</h3> 
                                            </div>


                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="messagebody">Body</label>
                                                    <textarea class="form-control" name="messagebody" id="messagebody" cols="30" rows="30" style="height: 10em;"><?php //echo (is_object($result))? '' : $result['MACH_DESCRIPTION'];?></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="col-sm-12">
                                                <label for="messagemaingroup">Group</label>
                                                <div class="form-group">
                                                    <select class="target form-control"  name="messagemaingroup" id="messagemaingroup" >
                                                        <option>Select Main Group</option>
                                                        <option value="Membership">Membership</option>
                                                        <option value="Departments">Departments</option>
                                                        <option value="Covenant_Families">Cevenant Families</option>
                                                        <!-- <option value="financials">Mine Support Companies</option>
                                                        <option value="companies">Dealers</option>
                                                        <option value="companies">Employees</option>
                                                        <option value="companies">Quaries</option> -->
                                                    </select>
                                                </div>
                                                <div class="Membership box">
                                                    <br>
                                                    <div>
                                                        <input type="checkbox" id="companiescheck" name="messagesubgroup[]" value="All Members" class="messagesubgroup">
                                                        <label for="companiescheck"> All Members</label> &nbsp; &nbsp;

                                                        <!-- <input type="checkbox" id="companiescheck" name="messagesubgroup[]" value="Bike" class="messagesubgroup">
                                                        <label for="companiescheck"> Children</label> &nbsp; &nbsp;
                                                        <input type="checkbox" id="checkdealers" name="messagesubgroup[]" value="Car" class="messagesubgroup">
                                                        <label for="checkdealers"> Youth</label> &nbsp; &nbsp;
                                                        <input type="checkbox" id="checkquaries" name="messagesubgroup[]" value="Boat" class="messagesubgroup">
                                                        <label for="checkquaries"> Adults</label> &nbsp; &nbsp; -->
                                                    </div>
                                                    <br>
                                                </div>
                                                <div class="Departments box">
                                                    <br>
                                                    <div>

                                                        <?php 
                                                                $compcat = $engine->getDepartments();
                                                                foreach($compcat as $compcat){
                                                        ?>
                                                        
                                                        <input type="checkbox" id="<?php echo $compcat['DEPT_CODE']; ?>" name="messagesubgroup[]" value="<?php echo $compcat['DEPT_CODE']; ?>" class="messagesubgroup">
                                                        <label for="<?php echo $compcat['DEPT_CODE']; ?>"> <?php echo $compcat['DEPT_NAME']; ?> </label> &nbsp; &nbsp;

                                                        <?php } ?>
                                                    
                                                    </div><br>
                                                </div>

                                                <div class="Covenant_Families box">
                                                    <br>
                                                    <div>
                                                        <?php 
                                                                $compcat = $engine->getDepartments();
                                                                foreach($compcat as $compcat){
                                                        ?>
                                                        
                                                        <input type="checkbox" id="<?php echo $compcat['DEPT_CODE']; ?>" name="messagesubgroup[]" value="<?php echo $compcat['DEPT_CODE']; ?>" class="messagesubgroup">
                                                        <label for="<?php echo $compcat['DEPT_CODE']; ?>"> <?php echo $compcat['DEPT_NAME']; ?> </label> &nbsp; &nbsp;

                                                        <?php } ?>
                                                    </div><br>
                                                </div>

                                                <div class="financials box">
                                                    <br>
                                                    <div>
                                                        <input type="checkbox" id="vehicle1" name="messagesubgroup[]" value="Bike" class="messagesubgroup">
                                                        <label for="vehicle1"> Tracking Payments</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        <input type="checkbox" id="vehicle2" name="messagesubgroup[]" value="Car" class="messagesubgroup">
                                                        <label for="vehicle2"> Tracking Payments - Defaulters </label> &nbsp; &nbsp;
                                                        <br>

                                                        <input type="checkbox" id="vehicle1" name="messagesubgroup[]" value="Bike" class="messagesubgroup">
                                                        <label for="vehicle1"> Annual Monitoring Fee </label> &nbsp; &nbsp; &nbsp;
                                                        <input type="checkbox" id="vehicle2" name="messagesubgroup[]" value="Car" class="messagesubgroup">
                                                        <label for="vehicle2"> Annual Monitoring Fee - Defaulters </label> &nbsp; &nbsp; 
                                                        <br>
                                                        
                                                        <input type="checkbox" id="vehicle1" name="messagesubgroup[]" value="Bike" class="messagesubgroup">
                                                        <label for="vehicle1"> Royalties</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        <input type="checkbox" id="vehicle2" name="messagesubgroup[]" value="Car" class="messagesubgroup">
                                                        <label for="vehicle2"> Royalties - Defaulters</label> &nbsp; &nbsp;
                                                        <br>
                                                        
                                                        <input type="checkbox" id="vehicle1" name="messagesubgroup[]" value="Bike" class="messagesubgroup">
                                                        <label for="vehicle1"> Annual Ground Rents</label> &nbsp; &nbsp; &nbsp; &nbsp;
                                                        <input type="checkbox" id="vehicle2" name="messagesubgroup[]" value="Car" class="messagesubgroup">
                                                        <label for="vehicle2"> Annual Ground Rents - Defaulters</label> &nbsp; &nbsp;  <br>                                            
                                                        <input type="checkbox" id="vehicle1" name="messagesubgroup[]" value="Bike" class="messagesubgroup">
                                                        <label for="vehicle1"> Annual Rights Fees</label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                        <input type="checkbox" id="vehicle2" name="messagesubgroup[]" value="Car" class="messagesubgroup">
                                                        <label for="vehicle2"> Annual Rights Fees - Defaulters</label> &nbsp; &nbsp;
                                                    </div>
                                                    <br>
                                                </div>
                                
                                            </div>
                                        
                                        
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                <label for="messagesubject">Subject </label>
                                                <input type="text" class="form-control" name="messagesubject" id="messagesubject" value="<?php //echo (is_object($result) ? '' :  $result['MACH_NAME'] ); ?>" placeholder="">
                                                </div>
                                            </div>
                                            



                                            <script>
                                                var images = <?php if ($images){print_r($images);}else{echo '[]';}?>;
                                                console.log(images);
                                                images.forEach (function (e) {
                                                    $("<span class=\"pip\">" +
                                                        "<img class=\"imageThumb\" src=\"<?php echo WEB_PRODUCTS; ?>" + e + "\" title=\"" + e + "\"/>" +
                                                        "<br/><span class=\"remove\"><img class=\"delete-btn\" id=\"remove\" src=\"theme/assets/img/x.png\" alt=\"close\"></span>" +
                                                        "</span>").appendTo("#imagelist");
                                                    $(".remove").click(function(){
                                                        $(this).parent(".pip").remove();
                                                    images.pop(e);
                                                    var oldphoto = JSON.stringify(images);
                                                    $('#oldphoto').val(oldphoto);
                                                    }); 
                                                });
                                                
                                                $(document).ready(function() {
                                                    if (window.File && window.FileList && window.FileReader) {
                                                        $("#prodimage").on("change", function(e) {
                                                            var files = e.target.files,
                                                                filesLength = files.length;
                                                            for (var i = 0; i < filesLength; i++) {
                                                                var f = files[i]
                                                                var fileReader = new FileReader();
                                                                fileReader.onload = (function(e) {
                                                                    var file = e.target;
                                                                    $("<span class=\"pip\">" +
                                                                        "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                                                                        "<br/><span class=\"remove\"><img class=\"delete-btn\" id=\"remove\" src=\"theme/assets/img/x.png\" alt=\"close\"></span>" +
                                                                        "</span>").appendTo("#imagelist");
                                                                    $(".remove").click(function(){
                                                                        $(this).parent(".pip").remove();
                                                                    }); 
                                                                });
                                                                fileReader.readAsDataURL(f);

                                                            }
                                                        });
                                                        
                                                    } else {
                                                        alert("Your browser doesn't support to File API")
                                                    }
                                                    
                                                    $(".remove").click(function(){
                                                        $(this).parent(".pip").remove();
                                                    }); 
                                                });
                                            </script>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>

        </div>
    </div>
</div>

<script>
    function admSelectCheck(nameSelect) {
        console.log(nameSelect);
        if (nameSelect) {

            if (nameSelect.value == "customSelect") {
                document.getElementById("customSelect").style.display = "block";
                document.getElementById("groupSelect").style.display = "none";
            } else if (nameSelect.value == "groupSelect") {
                document.getElementById("groupSelect").style.display = "block";
                document.getElementById("customSelect").style.display = "none";
            }

        } else {
            document.getElementById("admDivCheck").style.display = "none";
        }
    }


    function sendsms() {
        
        var messagetype = document.getElementById("messagetype").value;
        

        if(messagetype == "customSelect"){
           
            var msgbody = document.getElementById("msgbody").value;
            var msgcontactlist = document.getElementById("msgcontactlist").value;
            var msgsubject = document.getElementById("msgsubject").value;
            
            if( msgbody != "" &&  msgcontactlist != "" &&  msgsubject != ""){
                sendsmsAlert();
            }else{
                errorsmsAlert();
            }

        }else if(messagetype == "groupSelect"){

            var messagebody = document.getElementById("messagebody").value;
            var messagemaingroup = document.getElementById("messagemaingroup").value;
            
            var messagesubgroup = [];
            $("input:checkbox[class=messagesubgroup]:checked").each(function(){
                messagesubgroup.push($(this).val());
            });


            console.log("messagesubgroup");
            console.log(messagesubgroup);

            if( messagebody != "" &&  messagemaingroup != "" &&  messagesubgroup.length > 0){
                sendsmsAlert();
            }else{
                errorsmsAlert();
            }

        }else{
            errorsmsAlert();
        }

    }
    
    function sendsmsAlert() {
        swal({
        title: "Send SMS?",
        text: "Click Ok To Send SMS!",
        icon: "success",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {

            //   swal("Poof! Your imaginary file has been deleted!", {
            //     icon: "success",
            //   });

            document.getElementById('viewpage').value='add';
            document.myform.submit();


            } else {
            //   swal("Your imaginary file is safe!");
            }
        });

    }


    function errorsmsAlert() {
        swal({
        title: "Empty Field",
        text: "Please fill all fields.",
        icon: "danger",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        });

    }


    $(document).ready(function(){
        $(".target").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });




    //////////////////////////////////////////////////////////////////////
                        // File Upload //

    function readSingleFile(e) {
        var file = e.target.files[0];
        if (!file) {
            return;
        }

        var reader = new FileReader();
        reader.onload = function(e) {
            var contents = e.target.result;
            // displayContents(contents);
            displayParsed(contents);
        };

        reader.readAsText(file);
    }

    function displayContents(contents) {
        var element = document.getElementById('file-content');
        element.textContent = contents;
    }

    function displayParsed(contents) {
        // const element = document.getElementById('file-parsed');
        const msgcontactlist = document.getElementById('msgcontactlist');
        const json = contents.split('\n');
        // element.textContent = JSON.stringify(json);
        

        var contactslist = "";

        for(i=1; i < json.length; i++){
            var row = json[i].split(',');
        
            if (row[3] != undefined){
                if (contactvalidation(row[3]) != ""){
                    contactslist = contactslist + row[3] + "\n";
                }
            }

        }

        msgcontactlist.textContent = contactslist;

    }

    function contactvalidation(phonenumber){
        var phonenumber = phonenumber.replace(/\D/g,'');

        if(phonenumber.substring(0,1) == "0" && phonenumber.length == 10){
            phonenumber ='233' + phonenumber.slice(1);
        }

        if(phonenumber.length == 12 && phonenumber.substring(0,3) == "233"){
            return phonenumber;
        }else{
            return "";
        }

        
    }

    document.getElementById('file-input').addEventListener('change', readSingleFile, false);
</script>