<?php
    if($stmtlist->RecordCount() > 0 ){
        $obj = $stmtlist->FetchNextObject();
        $obj->MESG_CODE;
    }
?>

<style>
    input {
        text-transform: uppercase;
    }
</style>
<!-- Admit Form Area Start Here -->
<div class="card height-auto mt-5 ">
    <div class="card-body">
        <div id="first-step-div">
            <div class="heading-layout1 mb-5">
                <div class="row mb-2">

                    <div class="col-xl-10 col-lg-10 col-10 form-group">
                        <div class="text-secondary h1">MESSAGE | Details</div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-2 form-group">
                        <div style="text-align:right;">
                            <a href="index.php?pg=<?php echo md5('messages');?>&option=<?php echo md5(''); ?>"
                                class="btn btn-fill-md text-light text-15 bg-dark">
                                <span class="fa fa-arrow-left"></span> Back
                            </a>
                        </div>
                    </div>
                </div>



                <div class="row mt-5 ml-1">
                    <div class="text-dark h3 ">Message Details</div>
                
                </div>
                <hr> 
        
                <div class="row  ml-1">

                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                        <label>Message Receiver </label> :
                        <b>
                            <?php echo $obj->MESG_RECEIVER_NAME; ?>
                        </b>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                        <label>Message Subject </label> :
                        <b>
                            <?php echo $obj->MESG_SUBJECT; ?>
                        </b>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-12 form-group">
                        <label>Message Body </label> :
                        <b>
                            <?php echo $obj->MESG_BODY; ?>
                        </b>
                    </div>


                </div>
            </div>

        </div>
    </div>