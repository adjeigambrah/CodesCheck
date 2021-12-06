<?php

$stmtlist; $stmt;

switch($viewpage){

  
    case 'add':
        

        $msgcode = $engine->getMsgCode($sql);
        
        $actor_id = $session->get("userid");  
        $fullname = $session->get('userfullname');
        $companycode = $session->get("companycode");


        if($messagetype == "customSelect"){
  
          $msgcontactlist = explode(",",str_replace("\n",",",$msgcontactlist));
          var_dump($msgsubject);
          var_dump($msgbody);

          

          foreach($msgcontactlist as $phonenumber){
            $smsresponse = $engine->sendSMS($phonenumber, $msg);
          }
          $stmt =$sql->Execute($sql->Prepare("INSERT INTO ges_messages (MESG_CODE, MESG_RECEIVER, MESG_RECEIVER_NAME, MESG_RECEIVER_NUMBER, MESG_SENDER, MESG_SENDER_NAME, MESG_SUBJECT, MESG_BODY,MESG_ACTORCODE, MESG_ACTORCOMPCODE, MESG_STATUS) VALUES (".$sql->Param('1').", ".$sql->Param('2').", ".$sql->Param('3').", ".$sql->Param('4').", ".$sql->Param('5').", ".$sql->Param('6').", ".$sql->Param('7').", ".$sql->Param('8').", ".$sql->Param('9').", ".$sql->Param('10').")"),
            array($msgcode, "RCC0000000001", "ALL USERS", $actor_id, "Custom Message", $msgcontactlist, $msgsubject, $msgbody, $actor_id, $companycode, "1"));
            print $sql->ErrorMsg();

      

        } else if($messagetype == "groupSelect"){

          if(isset($_POST['messagesubgroup'])){
            $messagesubgroup = $_POST['messagesubgroup'];
          }
          

          $msgcontactlist = [];

          foreach ($messagesubgroup as $value) {
            # code...

            $query = $sql->Execute($sql->Prepare("SELECT IND_CONTACT FROM individual_tb WHERE IND_STATUS !='0' AND IND_DEPARTMENT LIKE ".$sql->Param('a')."  ORDER BY IND_ID DESC "),array('%'.$value.'%'));
            print $sql->ErrorMsg();

            if($query->RecordCount() > 0){
              $result = $query->GetAll();
              

              foreach ($result as $val) {
                array_push($msgcontactlist, $engine->getContactvalidation($val['IND_CONTACT']));
              }
              

              
            }else{
              $result = [];
            }
            
          }
          
          

          if(count($msgcontactlist) > 0){
            
            foreach($msgcontactlist as $phonenumber){
              $smsresponse = $engine->sendSMS($phonenumber, $msg);
              print $sql->ErrorMsg();
            }

            $stmt =$sql->Execute($sql->Prepare("INSERT INTO ges_messages (MESG_CODE, MESG_RECEIVER, MESG_RECEIVER_NAME, MESG_RECEIVER_NUMBER, MESG_SENDER, MESG_SENDER_NAME, MESG_SUBJECT, MESG_BODY,MESG_ACTORCODE, MESG_ACTORCOMPCODE, MESG_STATUS) VALUES (".$sql->Param('1').", ".$sql->Param('2').", ".$sql->Param('3').", ".$sql->Param('4').", ".$sql->Param('5').", ".$sql->Param('6').", ".$sql->Param('7').", ".$sql->Param('8').", ".$sql->Param('9').", ".$sql->Param('10').")"),
              array($msgcode, "RCC0000000001", "ALL USERS", $actor_id, $messagemaingroup, json_encode($phonenumber), $messagesubject, $messagebody, $actor_id, $companycode, "1"));
              
          }

        }     


    break;

    case 'listchats':
      $stmtlist_msg = $sql->Execute($sql->Prepare("SELECT * FROM ges_messages WHERE MESG_SENDER = ".$sql->Param('a')." AND MESG_STATUS IN ('1','0')  LIMIT 1"),array($keys));
      print $sql->ErrorMsg();		
    
    break;


    case 'details':

      $stmtlist = $sql->Execute($sql->Prepare("SELECT MESG_CODE, MESG_RECEIVER, MESG_RECEIVER_NAME, MESG_SENDER, MESG_SENDER_NAME, MESG_SUBJECT, MESG_BODY,MESG_ACTORCODE, MESG_ACTORCOMPCODE, MESG_STATUS FROM ges_messages WHERE MESG_CODE = ".$sql->Param('a')." AND MESG_STATUS IN ('1','0')  LIMIT 1"),array($keys));
      print $sql->ErrorMsg();		
    
    break;


    case 'update':
      

    break;

    case 'reset':
      $limit = 10;
      $fdsearch = "";
    break;

    

  }


  
      //This is the a method that is always called to fetch paginated items
      if($viewpage == "search"){
        if(isset($fdsearch) && $fdsearch != ""){
  
          $query = "SELECT * FROM ges_messages   WHERE  MESG_STATUS IN  ('1','0') AND MESG_SUBJECT = ".$sql->Param('a')." GROUP BY MESG_SENDER";
          $input =array($fdsearch); 
    
        }else{ 
          $query = "SELECT * FROM ges_messages   WHERE  MESG_STATUS IN  ('1','0') GROUP BY MESG_SENDER";
          $input =array();
        }
      }
      else{ 
        $query = "SELECT * FROM ges_messages   WHERE  MESG_STATUS IN  ('1','0') GROUP BY MESG_SENDER";
        $input =array();
      }
      
    
      
      if(!isset($limit)){
        $limit = $session->get("limited");
      }else if(empty($limit)){
        $limit =20;
      }
      
      $session->set("limited",$limit);
      $lenght = 10;
      $paging = new OS_Pagination($sql,$query,$limit,$lenght,"pg=".$pg."&option=".$option, isset($input) ?$input:  []);
    
  
