<div class="card height-auto mt-5">
                    <div class="card-body">
                        <div class="heading-layout1 mb-5">
                   
                <input type="hidden" name="st_title"  value="<?php echo $st_title!=null?$st_title:"";?>" >   
                <input type="hidden" name="st_fname"  value="hggjkjjkkjjk" >
                <input type="hidden" name="st_lname"  value="<?php echo $st_lname!=null?$st_lname:"";?>" >
                <input type="hidden" name="st_mname"  value="<?php echo $st_mname!=null?$st_mname:"";?>" >
                <input type="hidden" name="st_dob"  value="<?php echo $st_dob!=null?$st_dob:"";?>" >
                <input type="hidden" name="st_pob"  value="<?php echo $st_pob!=null?$st_pob:"";?>" >
                <input type="hidden" name="st_gender"  value="<?php echo $st_gender!=null?$st_gender:"";?>" >
                <input type="hidden" name="st_nationality"  value="<?php echo $st_nationality!=null?$st_nationality:"";?>" >
                <input type="hidden" name="st_hometown"  value="<?php echo $st_hometown!=null?$st_hometown:"";?>" >
                <input type="hidden" name="st_hm_district"  value="<?php echo $st_hm_district!=null?$st_hm_district:"";?>" >
                <input type="hidden" name="st_hm_region"  value="<?php echo $st_hm_region!=null?$st_hm_region:"";?>" >
                <input type="hidden" name="st_religion"  value="<?php echo $st_religion!=null?$st_religion:"";?>" >

                            <div style="text-align:right;">
                            <a  href="index.php?pg=<?php echo md5('staff');?>&option=<?php echo md5('add'); ?>"
                             class="btn btn-fill-md text-light text-15 bg-dark"  
                             ><span class="fa fa-arrow-left"></span> Back </a>

                             <button type="submit" class="btn btn-fill-md text-15 bg-green text-light"
                                onclick="document.getElementById('viewpage').value='add';document.myform.submit();">
                                <span class="fa fa-save"> </span> Save</button>

                                <!-- <button type="submit" class="btn btn-fill-md text-15 bg-blue-dark text-light btn-hover-yellow"
                                onclick="document.getElementById('viewpage').value='add';document.myform.submit();">
                                <span class="fa fa-save"> </span> Save</button> -->
                                </div>
                                <div class="row">
                             <div class="text-secondary h1 mt-3">STAFF</div> 
                             <span class="vl mr-3 ml-3"></span> 
                             <div class="text-dark h1 mt-3" >CONTACT DETAILS</div>
                            </div>
                        </div>
                        <!-- <form class="new-added-form"> -->
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Contact 1 </label>
                                    <input  type="text" placeholder="" name="st_contact1" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Contact 2 </label>
                                    <input  type="text" placeholder="" name="st_contact2" class="form-control">
                                </div>
                               
                                           
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input  type="email" placeholder="" name="st_mail" class="form-control">
                                </div>
                               
                                
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Residential Address</label>
                                    <input  type="text" placeholder="" name="st_address" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Ghana Digital Address</label>
                                    <input  type="text" placeholder="" name="st_dig_address" class="form-control">
                                </div>
                                </div>
                            
                        <!-- </form> -->

                               <!-- </form> -->
                  
                               <div class="row m-5">
                             <div class="text-secondary h1 mt-3">STAFF</div> 
                             <span class="vl mr-3 ml-3"></span> 
                             <div class="text-dark h1 mt-3" >NEXT OF KIN</div>
                            </div>
                 
                       
                        <!-- <form class="new-added-form"> -->
                        <div class="row">
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Full Name </label>
                                    <input  type="text" placeholder="" name="st_kin_fname" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Contact</label>
                                    <input type="text" placeholder="" name="st_kin_contact" class="form-control">
                                </div>
                               
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>E-Mail</label>
                                    <input  type="email" placeholder="" name="st_kin_mail" class="form-control">
                                </div>
                               
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Residential Address</label>
                                    <input  type="text" placeholder="" name="st_kin_address" class="form-control">
                                </div>
                               
                            </div>
                        <!-- </form> -->

                        
                    
                        <div class="row m-5">
                             <div class="text-secondary h1 mt-3">STAFF</div> 
                             <span class="vl mr-3 ml-3"></span> 
                             <div class="text-dark h1 mt-3" >CAREER DETAILS</div>
                            </div>
                        <!-- <form class="new-added-form"> -->
                        <div class="row">

                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Staff Category</label>
                                    <select class="select2" name="st_category">
                                        <option  selected disabled value="">Please Select Category </option>
                                        <option value="1">Teaching</option>
                                        <option value="2">Non-Teaching</option>
                                    
                                    </select>
                                </div>

                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Date of Appointment</label>
                                    <input type="text" placeholder="dd/mm/yyyy" name="st_doa"   data-position='bottom right' class="form-control air-datepicker">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Union</label>
                                    <input  type="text" placeholder="" name="st_union" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Registered Number</label>
                                    <input  type="text" placeholder="" name="st_reg_num" class="form-control">
                                </div>

                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Current Grade/Rank </label>
                                    <input  type="text" placeholder="" name="st_rank" class="form-control">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Position </label>
                                    <input type="text" placeholder="" name="st_position" class="form-control">
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Highest Qualification</label>
                                    <input type="email" placeholder="" name="st_qualification" class="form-control">
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Course Offered</label>
                                    <input  type="text" placeholder="" name="st_course" class="form-control">
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Subject Currently Teaching</label>
                                    <input type="text" placeholder="" name="st_subject" class="form-control">
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-12 form-group">
                                    <label>Level Of Teaching</label>
                                    <select class="select2" name="st_level">
                                        <option selected disabled value="">Please Select Level </option>
                                        <option value="1">K.G</option>
                                        <option value="2">K.G and Primary</option>
                                        <option value="3">Primary</option>
                                        <option value="4">Primary and JHS</option>
                                        <option value="5">K.G, Primary and JHS</option>
                                        <option value="6"> JHS</option>
                                        <option value="7"> SHS</option>
                                        <option value="8"> SHTS</option>
                                        <option value="9"> TVET</option>
                                        <option value="10"> Special</option>
                                    </select>
                                </div>

                            </div>
                 
                    </div>
                </div>
               
               