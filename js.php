<script  type="text/javascript">


//print function
function clicktoPrint(divName){

var printContents = document.getElementById(divName).innerHTML;
var originalContents = document.body.innerHTML;
document.body.innerHTML = printContents;
window.print();
document.body.innerHTML = originalContents;

}

 
// document.getElementById('second-step-div').style.display = 'block'; // show

document.getElementById('second-step-div').style.display = 'none'; // hide
document.getElementById('third-step-div').style.display = 'none'; // hidethird


document.getElementById('st_reg_num_layout').style.display = 'none'; // registered number 
document.getElementById('st_subject_layout').style.display = 'none'; // subject tought 
document.getElementById('st_level_layout').style.display = 'none'; // Level of taching  
document.getElementById('st_non_teaching_layout').style.display = 'none'; // Level of taching 
// $(document).ready(function() {
//     $("#st_category").change(function(){
//     //hiding the first div
//     $('#st_subject_layout').show();
//     //showing the second div
//     $('#st_subject_layout').show();

//     });
// });



// function selectTeacherType(){}


function moveToSecond(){

    if($('#st_fname').val()==""){
        // displayFormErrorMessage("First name");
        swal("Error",  "Sorry, First Name is required",  "error");
        return false;
        }
        if($('#st_lname').val()==""){
        swal("Error",  "Sorry, Last Name is required", "error");
        return false;
        }
        if($('#st_title').val()==""){
        swal("Error", "Sorry, Title is required", "error");
        return false;
        }
        if($('#st_dob').val()==""){
        swal("Error", "Please select your Date of Birth", "error");
        return false;
        }
        if($('#st_pob').val()==""){
        swal("Error", "Sorry, Place of Birth is required", "error");
        return false;
        }
        if($('#st_gender :selected').val()==""){
        swal("Error", "Please select your Gender", "error");
        return false;
        }
        if($('#st_religion :selected').val()==""){
        swal("Error", "Please select your Religion", "error");
        return false;
        }
        if($('#st_nationality').val()==""){
        swal("Error", "Sorry, your Nationality is required", "error");
        return false;
        }
        if($('#st_hometown').val()==""){
        swal("Error", "Sorry, your Hometown is required", "error");
        return false;
        }

        //Staff hometown can not be enforce because staff might not be ghanaian
        // if($('#st_hm_region :selected').val()==""){
        // swal("Error", "Please select Hometown Region", "error");
        // return false;
        // }
        // if($('#st_hm_district :selected').val()==""){
        // swal("Error", "Sorry, your Hometown District is required", "error");
        // return false;
        // }
        
        if($('#st_marital_stat :selected').val()==""){
        swal("Error", "Please select Marital Status", "error");
        return false;
        }
       
        
    
    //hiding the first div
    $('#first-step-div').hide();
    //showing the second div
    $('#second-step-div').show();
    //hiding the third div
    $('#third-step-div').hide();

}



function moveToThird(){

    if($('#st_contact1').val()==""){
        swal("Error", "Sorry, Contact 1 is required", "error");
        return false;
        }

        if($('#st_address').val()==""){
        swal("Error", "Sorry, Residential Address is required", "error");
        return false;
        }

    if($('#st_kin_fname').val()==""){
        swal("Error", "Sorry, Next of kin's name is required", "error");
        return false;
        }

    if($('#st_kin_contact').val()==""){
        swal("Error", "Sorry,  Next of kin's  contact is required", "error");
        return false;
        }

        if($('#st_kin_relation').val()==""){
        swal("Error", "Sorry,  Relationship with Staff is required", "error");
        return false;
        }

        if($('#st_kin_address').val()==""){
        swal("Error", "Sorry,  Next of kin's  Address is required", "error");
        return false;
        }

    

//hiding the first div
$('#first-step-div').hide();
//hiding the second div
$('#second-step-div').hide();
//showing the third div
$('#third-step-div').show();

}


//Method will take you back to the first div
function backToFirst(){
    //showing the first div
    $('#first-step-div').show();
    //hiding the second div
    $('#second-step-div').hide();
    //hiding the third div
    $('#third-step-div').hide();
}


//Method will take you back to the second div
function backToSecond(){
    //hiding the first div
    $('#first-step-div').hide();
    //showing the second div
    $('#second-step-div').show();
    //hiding the third div
    $('#third-step-div').hide();
}

function selectStaffCategory(){
    var staffCate =  $('#st_category').val();
    if(staffCate == "1"){
        $('#st_subject_layout').show();
        $('#st_level_layout').show();
        $('#st_reg_num_layout').show();  
        $('#st_non_teaching_layout').hide();
    }
    else if(staffCate == "2"){
        $('#st_subject_layout').hide();
        $('#st_level_layout').hide();
        $('#st_reg_num_layout').hide();
        $('#st_non_teaching_layout').show();
    }
}



//Save button 
function saveStaff(){
    
    if($('#st_category :selected').val()==""){
    swal("Error", "Please select staff category", "error");
    return false;
    }
    if($('#st_id').val()==""){
    swal("Error",  "Sorry, Staff number is required ",  "error");
    return false;
    }
    if($('#st_doa').val()==""){
    swal("Error",  "Sorry, Staff's date of appointment is required", "error");
    return false;
    }
    if($('#st_union').val()==""){
    swal("Error", "Sorry, Staff Union is required", "error");
    return false;
    }

//Calling the save method
document.getElementById('viewpage').value='add';document.myform.submit();

   
}


//This method is called when  hometown region is selected
//It splits the joint region code and name
$(function () {               

    $(".st_hm_region").change(function (e) { 

        $('#dis_hm_district').show();
        var regioncode=$('.st_hm_region option:selected').val();
        getdistrict(regioncode.split("@@@")[0]);                  
        e.preventDefault();
        
    });
});


//GET hometown DISTRICTS
    function getdistrict(regioncode){

        $.ajax({
                    method:'POST',
                    url:'public/staff/model/fetch.php',
                    data:{'regioncode':regioncode},
                    success: function(response){
                    if(!response){
                        $("#st_hm_district").html('<option >--No District available--</option>')
                        return
                    }
                    hasCompanies = true ;
                    $('#st_hm_district').html(response);

                    }
                })

    }




//This method is called when  school region is selected
//It splits the joint region code and name
$(function () {               

$(".st_sch_region").change(function (e) { 

    $('#dis_st_sch__district').show();
    var regioncodesch=$('.st_sch_region option:selected').val();
    getschdistrict(regioncodesch.split("@@@")[0]);                  
    e.preventDefault();
    
});
});

//GET school DISTRICTS
function getschdistrict(regioncodesch){

    $.ajax({
                method:'POST',
                url:'public/staff/model/fetch.php',
                data:{'regioncode':regioncodesch},
                success: function(response){
                if(!response){
                    $("#st_sch_district").html('<option >--No District available--</option>')
                    return
                }
                
                $('#st_sch_district').html(response);

                }
            })

}




$(function () {
    $(".st_sch_district").change(function (e) { 

    $('#div_st_school').show();
    var districtcode=$('.st_sch_district option:selected').val();
    getSchool(districtcode.split("@@@")[0]);                  
    e.preventDefault();
                           
        });
    });

        //Function to get shcool
        function getSchool(districtcode){
            $.ajax({
            method:'POST',
            url:'public/staff/model/fetch.php',
            data:{'districtcode':districtcode},
            success: function(response){
            if(!response){
                $("#st_school").html('<option >--No School available--</option>')
                return
            }
            
            $('#st_school').html(response);

            }
        })

}


//Function allows only numbers
function allowNumbersOnly(e) {
    var code = (e.which) ? e.which : e.keyCode;
    if (code > 31 && (code < 48 || code > 57)) {
        e.preventDefault();
    }
}


</script>