 <!-- Add New Teacher Area Start Here -->
 <div class="card height-auto mt-5">
                    <div class="card-body">
                        <div class="heading-layout1 mb-5">
                        <div class="row">
                             <div class="text-secondary h1 mt-3">STAFF</div> 
                             <span class="vl mr-3 ml-3"></span> 
                             <div class="text-dark h1 mt-3" >EDIT</div>
                            </div>
                            <div style="text-align:right;">
                            <?php
                                if($stmtlist->RecordCount() > 0 ){
                                    $obj = $stmtlist->FetchNextObject();

                                    $objCode = $obj->GST_CODE;
                                    $keys=$objCode;
                                ?>
                             <button type="submit" class="btn btn-fill-md text-15 bg-dark text-light "
                                onclick="document.getElementById('pg').value='<?php echo md5('staff');?>'; document.getElementById('option').value='<?php echo md5('details'); ?>'; document.getElementById('viewpage').value='details'; document.getElementById('keys').value='<?php echo $objCode; ?>'; ">  
                             <span class="fa fa-arrow-left"></span> Back </button>
                            


                             <button type="button" class="btn btn-fill-md text-15 bg-green text-light"
                                onclick="document.getElementById('pg').value='<?php echo md5('staff');?>'; document.getElementById('option').value=''; document.getElementById('viewpage').value='update';  document.myform.submit();">
                                <span class="fa fa-save"> </span> Update</button>
                                </div>

                        </div>
                        <!-- <form class="new-added-form"> -->
                        <div class="row  mt-5 ">
                             <div class="text-dark h3 " >PERSONAL DETAILS</div>
                        </div>
                        <div class="row" >

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>First Name </label>
                                    <input  type="text" value="<?php echo  $obj->GST_FIRST_NAME; ?>" name="st_fname" id=""  class="form-control">
                                </div>
                                <!-- <span style="color:#F30206">*</span> -->
                           
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Last Name </label>
                                    <input  type="text" value="<?php echo  $obj->GST_LAST_NAME; ?>" name="st_lname" id=""  class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Middle Name </label>
                                    <input  type="text" value="<?php echo  $obj->GST_MIDDLE_NAME; ?>" name="st_mname" id=""  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Title </label>
                                    <input  type="text" value="<?php echo  $obj->GST_TITLE; ?>" name="st_title" id=""  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 text-dark form-group">
                                    <label>Date Of Birth </label>
                                    <input  type="date" value="<?php echo  $obj->GST_DOB; ?>" name="st_dob" id=""  class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Place of Birth</label>
                                    <input  type="text" value="<?php echo  $obj->GST_PLACE_OF_BIRTH; ?>" name="st_pob" id=""  class="form-control">
                                </div>
                             
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Gender </label>
                                    <select class="select2" type="text" value="<?php echo  $obj->GST_GENDER; ?>" name="st_gender" id=""  class="form-control">
                                    <?php
                                    foreach($system_gender as $rg){
                                        if($obj->GST_GENDER.strtoupper('') == $rg.strtoupper('')){
                                            echo '<option value="'. $rg.'" selected>'. $rg.'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $rg.'">'. $rg.'</option>';
                                        }
                                    }
                                    ?>
                                        
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Religion </label>
                                    <select class="select2"  type="" value="" name="st_religion" id=""  class="form-control">
                                    <?php
                                    foreach($system_religion as $rg){
                                        if($obj->GST_RELIGION.strtoupper('') == $rg.strtoupper('')){
                                            echo '<option value="'. $rg.'" selected>'. $rg.'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $rg.'">'. $rg.'</option>';
                                        }
                                    }
                                    ?>
                                        
                                    </select>
                                </div>
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Nationality</label>
                                    <input  type="text" value="<?php echo  $obj->GST_NATIONALITY; ?>" name="st_nationality" id=""  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Hometown</label>
                                    <input  type="text" value="<?php echo  $obj->GST_HOMETOWN; ?>" name="st_hometown" id=""  class="form-control"> </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Hometown District</label>
                                    <select class="select2" type="" value="" name="st_hm_district" id=""  class="form-control">
                                    <?php
                                    foreach($system_district as $rg){
                                        if($obj->GST_HOMETOWN_DISTRICT.strtoupper('') == $rg.strtoupper('')){
                                            echo '<option value="'. $rg.'" selected>'. $rg.'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $rg.'">'. $rg.'</option>';
                                        }
                                    }
                                    ?>
                                    </select>
                                     </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Hometown Region</label>
                                    <select class="select2" type="" value="" name="st_hm_region" id=""  class="form-control">
                                    <?php
                                    foreach($system_region as $rg){
                                        if($obj->GST_HOMETOWN_REGION.strtoupper('') == $rg.strtoupper('')){
                                            echo '<option value="'. $rg.'" selected>'. $rg.'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $rg.'">'. $rg.'</option>';
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Marital Status</label>
                                    <select class="select2" type="" value="" name="st_marital_stat" id=""  class="form-control">
                                    <?php
                                    foreach($system_marital_status as $rg){
                                        if($obj->GST_MARITAL_STATUS.strtoupper('') == $rg.strtoupper('')){
                                            echo '<option value="'. $rg.'" selected>'. $rg.'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $rg.'">'. $rg.'</option>';
                                        }
                                    }
                                    ?>
                                        
                                    </select>
                                </div>

                            </div>

                            <div class="row mt-5 ">
                             <div class="text-dark h3 " >CONTACT DETAILS</div>
                        </div>
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Contact 1 </label>
                                    <input  type="text" value="<?php echo  $obj->GST_CONTACT_1; ?>" name="st_contact1" id=""  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Contact 2 </label>
                                    <input  type="text" value="<?php echo  $obj->GST_CONTACT_2; ?>" name="st_contact2" id=""  class="form-control">
                                </div>
                               
                                           
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input  type="text" value="<?php echo  $obj->GST_EMAIL; ?>" name="st_mail" id=""  class="form-control">
                                </div>
                               
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Residential Address</label>
                                    <input  type="text" value="<?php echo  $obj->GST_ADDRESS; ?>" name="st_address" id=""  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Ghana Digital Address</label>
                                    <input  type="text" value="<?php echo  $obj->GST_DIGITAL_ADDRESS; ?>" name="st_dig_address" id=""  class="form-control">
                                </div>

                                </div>
                            
                        <!-- </form> -->
                       
                        <!-- <form class="new-added-form"> -->
                        
                        <div class="row mt-5">
                             <div class="text-dark h3 " >NEXT OF KIN</div>
                        </div>
                        <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Full Name </label>
                                <input  type="text" value="<?php echo  $obj->GST_KIN_NAME; ?>" name="st_kin_fname" id=""  class="form-control"> </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Contact</label>
                                    <input  type="text" value="<?php echo  $obj->GST_KIN_CONTACT; ?>" name="st_kin_contact" id=""  class="form-control">
                                </div>
                               
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Relationship With Staff</label>
                                    <input  type="text" value="<?php echo  $obj->GST_KIN_RELATION; ?>" name="st_kin_relation" id=""  class="form-control">
                                </div>
                               
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Residential Address</label>
                                    <input  type="text" value="<?php echo  $obj->GST_KIN_ADDRESS; ?>" name="st_kin_address" id=""  class="form-control">
                                </div>
                               
                            </div>

                            
                        <div class="row  mt-5 ">
                             <div class="text-dark h3 " >CAREER DETAILS</div>
                        </div>
                        <!-- <form class="new-added-form"> -->

                        <input type="hidden" name="staff_code" id="staff_code" value="<?php echo $obj->GST_CODE; ?>">
                        <div class="row">

                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Staff Category</label>
                                    <select class="select2" type="text" value="" name="st_category" id=""  class="form-control">
                                    <?php
                                    foreach($system_staff_category as $rg){
                                        if($obj->GST_CATEGORY.strtoupper('') == $rg.strtoupper('')){
                                            echo '<option value="'. $rg.'" selected>'. $rg.'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $rg.'">'. $rg.'</option>';
                                        }
                                    }
                                    ?>
                                        
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Position </label>
                                    <input  type="text" value="<?php echo  $obj->GST_POSITION; ?>" name="st_position" id=""  class="form-control">
                                </div>

                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date of Appointment</label>
                                    <input  type="date" value="<?php echo  $obj->GST_DATE_OF_APPOINTMENT; ?>" name="st_doa" id=""  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Union</label>
                                    <input  type="text" value="<?php echo  $obj->GST_UNION; ?>" name="st_union" id=""  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>SSNIT Number</label>
                                    <input  type="text" value="<?php echo  $obj->GST_SSNIT; ?>" name="st_ssnit" id=""  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Category</label>
                                    <input  type="text" value="<?php echo  $obj->GST_NON_TEACHIING; ?>" name="st_non_teaching" id=""  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Current Grade/Rank </label>
                                    <select  class="select2" type="" value="" name="st_rank" id=""  class="form-control">
                                    <?php
                                    foreach($system_rank as $rg){
                                        if($obj->GST_CURRENT_RANK.strtoupper('') == $rg.strtoupper('')){
                                            echo '<option value="'. $rg.'" selected>'. $rg.'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $rg.'">'. $rg.'</option>';
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Notional Date </label>
                                    <input type="date" placeholder="" value="<?php echo  $obj->GST_NOTIONAL_DATE; ?>" name="st_notional" id=""   data-position='bottom right' class="form-control ">
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Highest Qualification</label>
                                    <input  type="text" value="<?php echo  $obj->GST_QUALIFICATION; ?>" name="st_qualification" id=""  class="form-control">
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group" >
                                    <label>Course Offered</label>
                                    <input  type="text" value="<?php echo  $obj->GST_COURSE_OFFERED; ?>" name="st_course" id=""  class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group" id="st_reg_num_layout">
                                    <label>Registered Number</label>
                                    <input  type="text" value="<?php echo  $obj->GST_REGISTERED_NUMBER; ?>" name="st_reg_num" id=""  class="form-control">
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group" id="st_subject_layout">
                                    <label>Subject Currently Teaching</label>
                                    <input  type="text" value="<?php echo  $obj->GST_SUBJECT_TEACHING; ?>" name="st_subject" id=""  class="form-control">
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group" id="st_level_layout">
                                    <label>Level Of Teaching</label>
                                    <select class="select2" type="" value="" name="st_level" id=""  class="form-control">
                                    <?php
                                    foreach($system_school_level as $rg){
                                        if($obj->GST_TEACHING_LEVEL.strtoupper('') == $rg.strtoupper('')){
                                            echo '<option value="'. $rg.'" selected>'. $rg.'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $rg.'">'. $rg.'</option>';
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>School</label>
                                    <input  type="text" value="<?php echo  $obj->GST_SCHOOL; ?>" name="st_school" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>School Region</label>
                                    <select class="select2" type="" value="" name="st_sch_region" class="form-control">
                                    <?php
                                    foreach($system_region as $rg){
                                        if($obj->GST_SCHOOL_REGION.strtoupper('') == $rg.strtoupper('')){
                                            echo '<option value="'. $rg.'" selected>'. $rg.'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $rg.'">'. $rg.'</option>';
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>

                    
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>School District</label>
                                    <select class="select2" type="" value="" name="st_sch_district" class="form-control">
                                    <?php
                                    foreach($system_district as $rg){
                                        if($obj->GST_SCHOOL_DISTRICT.strtoupper('') == $rg.strtoupper('')){
                                            echo '<option value="'. $rg.'" selected>'. $rg.'</option>';
                                        }
                                        else{
                                            echo '<option value="'. $rg.'">'. $rg.'</option>';
                                        }
                                    }
                                    ?>
                                    </select>
                                </div>

                               <!--  <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>School ID</label>
                                    <input  type="text" placeholder="" name="st_sch_id" class="form-control">
                                </div> -->

                            </div>
                        <!-- </form> -->
                    </div>
                    <?php } ?>
                </div>
                <!-- Add New Teacher Area End Here -->