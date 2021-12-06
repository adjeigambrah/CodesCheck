
                    <?php
                        $stmtlist = $paging->paginate(); ?> 
                         <div class="card height-auto mt-5">
                            <div class="card-body">
                                <div class="heading-layout1">
                                
                            <div class="row">
                             <div class="text-secondary h1 mt-3">SMS MESSAGES</div> 
                             <span class="vl mr-3 ml-3"></span> 
                             <div class="text-dark h1 mt-3" >Receiver List</div>
                            </div>
                                    <div class="mb-5" style="text-align:right;">
               
               <!-- <a  href="index.php?pg=<?php //echo md5('dashboard');?>&option=<?php //echo md5(''); ?>"
                 class="btn btn-fill-md text-15 text-light bg-red"
                 ><span class="fas fa-times"></span> Close</a> -->
                
                    <a  href="index.php?pg=<?php echo md5('messages');?>&option=<?php echo md5('add'); ?>"
                     type="" class="btn btn-fill-md text-15 text-light bg-primary"><span class="fas fa-plus"></span> Send Message</a>
                                                       </div>
                           
		

                                </div>
                             
                             
                            <!-- Beginning of search pagination -->
                            <br>
                        <div class="mg-b-10 text-center">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                                <div class="mt-2">
									<?php echo $paging->renderFirst('<span class="fa fa-angle-double-left"></span>');?>
									<?php echo $paging->renderPrev('<span class="fa fa-arrow-circle-left"></span>','<span class="fa fa-arrow-circle-left"></span>');?>
									<input name="page" size="5" type="text" class="pagedisplay short" value="<?php echo $paging->renderNavNum();?>" readonly />
									<?php echo $paging->renderNext('<span class="fa fa-arrow-circle-right"></span>','<span class="fa fa-arrow-circle-right"></span>');?>
									<?php echo $paging->renderLast('<span class="fa fa-angle-double-right "></span>');?>
									<?php $paging->limitList($limit,"myform");?>
								</div>
                                </div>
                                <div class="col-3-xxxl col-xl-4 col-lg-4x col-12 form-group">
                                    <input type="text" id="fdsearch" name="fdsearch" value="<?php isset($fdsearch)?$fdsearch:""; ?>"   placeholder="Search by Name" class="form-control" >
                                </div>
                                
                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                <button type="submit" onclick="document.getElementById('viewpage').value='search'; document.myform.submit();" class="btn btn-fill-md text-15 text-light bg-warning">SEARCH</button>
                                   
                                </div>

                                <!-- <button type="submit" class="fw-btn-fill btn-gradient-yellow" id="fdsearch" name="fdsearch" value = "<?php //echo isset($fdsearch) ?$fdsearch: ""; ?>">SEARCH</button> -->

                                <!-- <button type="submit" class="btn btn-fill-md text-15 bg-warning text-dark "
                                onclick="document.getElementById('pg').value='<?php echo md5('vacancies');?>'; document.getElementById('option').value='<?php //echo md5('edit'); ?>'; document.getElementById('viewpage').value='details'; document.getElementById('keys').value='<?php echo $objCode; ?>'; ">
                                <span class="far fa-edit"></span> Edit</button> -->

                                <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                                    <button type="submit"  onclick="document.getElementById('viewpage').value='reset'; document.getElementById('fdsearch').value=''; document.myform.submit(); " class="btn btn-fill-md text-15 text-light bg-dark">RESET</button>
                                </div>
                            </div>
                        </div>
                        <!-- Ending of search pagination -->

                            <?php 
                            $engine->msgBox($msg, $status,);
                            ?>
                        <!-- </form> -->
                                <div class="table-responsive">
                            <table class="table table-striped text-nowrap">
                                <thead>
                                    <tr  style="text-align:center;" class="p-5">
                                        <th>
                                           #
                                        </th>
                                        <th>RECEIVER NAME</th>                                       
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                if($paging->total_rows > 0 ){
                                    $num = 1;
                                    while($obj = $stmtlist->FetchNextObject()){
                                     
                                        $objCode = $obj->MESG_SENDER;
                                        $keys=$objCode;
                                ?>
                                    <tr style="text-align:center;">
                                    <td><?php echo$num++;?></td>
                                    <td><?php echo  strtoupper($obj->MESG_SENDER_NAME);?></td>
                                    
                                    <td>
                                        <button type="submit" class="btn btn-fill-md text-15 text-light bg-primary"
                                        onclick="document.getElementById('pg').value='<?php echo md5('messages');?>'; document.getElementById('option').value='<?php echo md5('listchats'); ?>'; document.getElementById('viewpage').value='listchats'; document.getElementById('keys').value='<?php echo $objCode; ?>'; ">
                                        <span class="fa fa-comments"></span> 
                                            Messages Sent
                                        </button>

                                    </td>
                                    </tr>
                                    <?php

                                        }
                                    }else{
                                        echo'
                                        <tr class="even">
                                        <td colspan="8" class="empty-text text-center">No messages found.</td>
                                        </tr>
                                        ';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                            </div>
                        </div>