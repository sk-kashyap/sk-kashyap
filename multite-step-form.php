
<?php /* Template Name: applynowform */ 
require_once 'vendor/autoload.php'; 
require_once 'dompdf/autoload.inc.php'; 
use Dompdf\Dompdf; 

 $error ="";
// error_reporting(E_ALL);
// ini_set('display_errors',1);
if (isset($_POST['submit_form'])) {   
    $Stud_Surname = "";
    $Stud_forname = "";
    $Stud_Title = "";
    $Stud_Fname = "";
    $Stud_Mname = "";
    $Stud_DoB = "";
    $Stud_Place_DoB = "";
    $Stud_Gender = "";
    $Stud_Marital_Status = "";
    $Stud_Nationality = "";
    $Stud_ID_card_No = "";
    $Stud_ID_CardDateOfIssue = "";
    $Stud_Passport = "";
    $Stud_PassportDateOfIssue = "";
    $Stud_PassportValid = "";

    
    $Stud_PermanentHomeAddress = "";
    $Stud_Post_Code = "";
    $Stud_Tel_No = "";
    $Stud_Mobile_phone = "";
    $Stud_Email = "";
    $Stud_Dates_Form = "";
    $Studen_Dates_to = "";

    $Stud_PermanentAddressCorres = "";
    $Stud_Post_CodeTwo = "";
    $Stud_Tel_NoTwo = "";
    $Stud_Mobile_phoneTwo = "";
    $Stud_EmailTwo = "";
    $Stud_Dates_FormTwo = "";
    $Studen_Dates_toTwo = "";

    
    $Stud_Programme_detail = "";
    $Stud_Department = "";
    $Stud_Mode_of_attendance = "";
    $Stud_Location_of_studies = "";
    $Stud_start_your_studies = "";

    // 4th form
    $Stud_Studie_Finance = "";
    $Stude_other_Specity_fund = "";
    $Student_fundig = "";

    // 5th Form
    $Stud_Pre_Qualification = "";
    $Stud_pre_sachool = "";
    $Stud_score = "";
    $Stud_Date_of_award = "";

    $Stud_Pre_Qualificationtwo = "";
    $Stud_pre_sachoolTwo = "";
    $Stud_scoreTwo = "";
    $Stud_Date_of_awardTwo = "";
    $Stud_pre_skill = "";


    // 6th form
    $Stud_F_language = "";
    $Stud_Pre_education_language = "";
    $Stud_Eduation_language = "";
    $Stud_State_language = "";
    $Stud_certificates_Eng_lang_Quli = "";
    $Student_Qualification = "";
    $Stud_Awarding_body = "";
    $Student_score = "";
    $Stud_Dateofaward = "";



    // First form Student_photos 
    
         //$StudPhoto = $_POST["Student_photos"];

          $photoS=$_FILES['Student_photos']['name'];
          $temp=$_FILES['Student_photos']['tmp_name'];
          $path="temimage/".$photoS;
          move_uploaded_file($temp,$path);

  
    if (isset($_POST["Student_Surname"])) {
          $Stud_Surname = $_POST["Student_Surname"];
    }
    if (isset($_POST["Student_FOrename"])) {
         $Stud_forname = $_POST["Student_FOrename"];
    }
    if (isset($_POST["name_pro"])) {
         $Stud_Title = $_POST["name_pro"];
    }
    if (isset($_POST["Student_Father_name"])) {
         $Stud_Fname = $_POST["Student_Father_name"];
    }
    if (isset($_POST["Student_Mother_name"])) {
          $Stud_Mname = $_POST["Student_Mother_name"];
    }
    if (isset($_POST["Student_Date_of_birth"])) {
         $Stud_DoB = $_POST["Student_Date_of_birth"];
    }
    if (isset($_POST["gender"])) {
          $Stud_Gender = $_POST["gender"];
    }
    if (isset($_POST["mStatus"])) {
         $Stud_Marital_Status = $_POST["mStatus"];
    }
    if (isset($_POST["Student_Nationality"])) {
           $Stud_Nationality = $_POST["Student_Nationality"];
    }
    if (isset($_POST["Student_ID_Card_No"])) {
         $Stud_ID_card_No = $_POST["Student_ID_Card_No"];
    }
    if (isset($_POST["Student_Card_issue_date"])) {
         $Stud_ID_CardDateOfIssue = $_POST["Student_Card_issue_date"];
    }
    if (isset($_POST["Student_Passport_number"])) {
            $Stud_Passport = $_POST["Student_Passport_number"];
    }
    if (isset($_POST["Student_Pass_date_issue"])) {
          $Stud_PassportDateOfIssue = $_POST["Student_Pass_date_issue"];
    }
    if (isset($_POST["Student_Pass_valid_until"])) {
           $Stud_PassportValid = $_POST["Student_Pass_valid_until"];
    }
    if (isset($_POST["Student_place_of_birth"])) {
        $Stud_Place_DoB = $_POST["Student_place_of_birth"];
    }
 



    // 2nd Form
    if (isset($_POST["Permanent_Home_Add"])) {
          $Stud_PermanentHomeAddress = $_POST["Permanent_Home_Add"];
    }
    if (isset($_POST["Stude_Post_code"])) {
           $Stud_Post_Code = $_POST["Stude_Post_code"];
    }
    if (isset($_POST["StudentTelNo"])) {
            $Stud_Tel_No = $_POST["StudentTelNo"];
    }
    if (isset($_POST["Student_Mobile_number"])) {
           $Stud_Mobile_phone = $_POST["Student_Mobile_number"];
    }
    if (isset($_POST["Student_Email"])) {
            $Stud_Email = $_POST["Student_Email"];
    }
    if (isset($_POST["contactable_add_Dates_form"])) {
           $Stud_Dates_Form = $_POST["contactable_add_Dates_form"];
    }
    if (isset($_POST["contactable_add_Dates_to"])) {
          $Studen_Dates_to = $_POST["contactable_add_Dates_to"];
    }
    if (isset($_POST["StudentCorrespondence_address"])) {
          $Stud_PermanentAddressCorres = $_POST["StudentCorrespondence_address"];
    }
    if (isset($_POST["Student_postCodeTWo"])) {
           $Stud_Post_CodeTwo = $_POST["Student_postCodeTWo"];
    }
    if (isset($_POST["StudentTelNoTwo"])) {
           $Stud_Tel_NoTwo = $_POST["StudentTelNoTwo"];
    }
    if (isset($_POST["StudentMobilephoneTwo"])) {
           $Stud_Mobile_phoneTwo = $_POST["StudentMobilephoneTwo"];
    }
    if (isset($_POST["Student_EnailTwo"])) {
         $Stud_EmailTwo = $_POST["Student_EnailTwo"];
    }
    if (isset($_POST["contactable_add_Dates_formTWo"])) {
           $Stud_Dates_FormTwo = $_POST["contactable_add_Dates_formTWo"];
    }
    if (isset($_POST["contactable_add_Dates_toTwo"])) {
          $Stud_Dates_toTwo = $_POST["contactable_add_Dates_toTwo"];
    }


    //3rd form
    if (isset($_POST["AllCourse"])) {
          $Stud_Programme_detail = $_POST["AllCourse"];
    }
    if (isset($_POST["Stud_Department"])) {
          $Stud_Department = $_POST["Stud_Department"];
    }
    if (isset($_POST["Stud_attendance"])) {
         $Stud_Mode_of_attendance = $_POST["Stud_attendance"];
    }
    if (isset($_POST["Location_Study"])) {
          $Stud_Location_of_studies = $_POST["Location_Study"];
    }
    if (isset($_POST["start_your_studies"])) {
          $Stud_start_your_studies = $_POST["start_your_studies"];
    }


    // 4th form
    if (isset($_POST["Stud_Finance"])) {
        $Stud_Studie_Finance = $_POST["Stud_Finance"];
        //print_r($Stud_Studie_Finance);
    }
    if (isset($_POST["stude_other_funde"])) {
         $Stude_other_Specity_fund = $_POST["stude_other_funde"];
    }
    if (isset($_POST["Stud_Fund"])) {
          $Student_fundi = $_POST["Stud_Fund"];
    }


    // 5th Form
    if (isset($_POST["Student_Qualification"])) {
          $Stud_Pre_Qualification = $_POST["Student_Qualification"];
    }
    if (isset($_POST["Student_School"])) {
          $Stud_pre_sachool = $_POST["Student_School"];
    }
    if (isset($_POST["Student_score"])) {
          $Stud_score = $_POST["Student_score"];
    }
    if (isset($_POST["Stude_DateOf_Award"])) {
         $Stud_Date_of_award = $_POST["Stude_DateOf_Award"];
    }
    if (isset($_POST["Student_QualificationTwo"])) {
          $Stud_Pre_Qualificationtwo = $_POST["Student_QualificationTwo"];
    }
    if (isset($_POST["Student_SchoolTwo"])) {
         $Stud_pre_sachoolTwo = $_POST["Student_SchoolTwo"];
    }
    if (isset($_POST["Student_scoreTwo"])) {
         $Stud_scoreTwo = $_POST["Student_scoreTwo"];
    }
    if (isset($_POST["Stude_DateOf_AwardTWo"])) {
          $Stud_Date_of_awardTwo = $_POST["Stude_DateOf_AwardTWo"];
    }
    if (isset($_POST["student_Skills"])) {
         $Stud_pre_skill = $_POST["student_Skills"];
    }




    // 6th form   

    if (isset($_POST["click_f_language"])) {
          $Stud_F_language = $_POST["click_f_language"];
    }
    if (isset($_POST["Pre_edu_Eng"])) {
          $Stud_Pre_education_language = $_POST["Pre_edu_Eng"];
    }
    if (isset($_POST["State_language"])) {
          $Stud_State_language = $_POST["State_language"];
    }
    if (isset($_POST["native_language"])) {
          $Stud_Eduation_language = $_POST["native_language"];
    }
    if (isset($_FILES["file-upload-cstm-input"])) {

          $filename=$_FILES['file-upload-cstm-input']['name'];
          $temp=$_FILES['file-upload-cstm-input']['tmp_name'];
          $pathFILE="upload/". $filename;
          move_uploaded_file($temp,$pathFILE);
          
    }
    if (isset($_POST["Studemt_E_Qualification"])) {
          $Student_Qualification = $_POST["Studemt_E_Qualification"];
    }
    if (isset($_POST["Student_Awarding_body"])) {
          $Stud_Awarding_body = $_POST["Student_Awarding_body"];
    }
    if (isset($_POST["Student_E_Score"])) {
          $Student_score = $_POST["Student_E_Score"];
    }
    if (isset($_POST["Stude_Date_of_award"])) {
         $Stud_Dateofaward = $_POST["Stude_Date_of_award"];
    }

    // 7th form 

    if (isset($_POST["stud_employment_details_form"])) {

         $Stud_Employe_details = $_POST["stud_employment_details_form"];
    }
    if (isset($_POST["stud_employment_details_to"])) {

         $Stud_Employe_detailsTo = $_POST["stud_employment_details_to"];
    }
    if (isset($_POST["stud_employment_Position_held"])) {
         $Stud__employment_held = $_POST["stud_employment_Position_held"];
    }
    if (isset($_POST["Employer_name_address"])) {
         $Stud_Employer_name_address = $_POST["Employer_name_address"];
    }
    if (isset($_POST["employer_Key_Respon"])) {
         $Stud_employer_Key_Respon = $_POST["employer_Key_Respon"];
    }
    if (isset($_POST["stud_employment_details_formTwo"])) {
         $stud_employment_FormTwo = $_POST["stud_employment_details_formTwo"];
    }
    if (isset($_POST["stud_employment_details_toTwo"])) {
         $stud_employment_ToTwo = $_POST["stud_employment_details_toTwo"];
    }
    if (isset($_POST["stud_employment_Position_heldTwo"])) {
         $stud_employment_heldTwo = $_POST["stud_employment_Position_heldTwo"];
    }
    if (isset($_POST["Employer_name_addressTwo"])) {
         $Employer_name_addressTwo = $_POST["Employer_name_addressTwo"];
    }
    if (isset($_POST["employer_Key_ResponTwo"])) {
         $employer_Key_ResponTwo = $_POST["employer_Key_ResponTwo"];
    }

    // 8th form

    if (isset($_POST["Student_Hob_Intere"])) {

         $Stud_Hobe = $_POST["Student_Hob_Intere"];
    }

    // form 9th

    if (isset($_POST["Student_fathe_name"])) {

         $StudFname = $_POST["Student_fathe_name"];
    }
    if (isset($_POST["Stud_father_Profes"])) {

         $StudFproFession = $_POST["Stud_father_Profes"];
    }
    if (isset($_POST["StudentFeducation"])) {

         $StudFEduaction = $_POST["StudentFeducation"];
    }
    if (isset($_POST["Stude_F_No"])) {

         $Studf_No = $_POST["Stude_F_No"];
    }
    if (isset($_POST["Stude_fJobAddres"])) {

         $Stud_FjobA = $_POST["Stude_fJobAddres"];
    }
    if (isset($_POST["Student_Mothe_name"])) {

         $StudM_name = $_POST["Student_Mothe_name"];
    }
    if (isset($_POST["Stud_mother_Profes"])) {

         $StudMprofess = $_POST["Stud_mother_Profes"];
    }
    if (isset($_POST["StudentMeducation"])) {

         $Stud_MEduation = $_POST["StudentMeducation"];
    }
    if (isset($_POST["Stude_M_No"])) {

         $StudM_No = $_POST["Stude_M_No"];
    }
    if (isset($_POST["Stude_MJobAddres"])) {

         $StudM_JobA = $_POST["Stude_MJobAddres"];
    }

    if (isset($_POST["approprite"])) {

         $Stude_approprite = $_POST["approprite"];
    }
    if (isset($_POST["Advertisement_Specify"])) {

         $StudA_Specify = $_POST["Advertisement_Specify"];
    }
    if (isset($_POST["appropriteOne"])) {

         $StudA_ONE = $_POST["appropriteOne"];
    }
    if (isset($_POST["Advertisement_SpecifyOne"])) {

         $StudA_Specifyone = $_POST["Advertisement_SpecifyOne"];
    }
    if (isset($_POST["appropriteTWO"])) {

         $StudA_TWO = $_POST["appropriteTWO"];
    }
    if (isset($_POST["Advertisement_SpecifyTWO"])) {

         $StudA_SpecifyTWo = $_POST["Advertisement_SpecifyTWO"];
    }
    if (isset($_POST["appropriteThree"])) {

         $StudA_Three  = $_POST["appropriteThree"];
    }
    if (isset($_POST["Advertisement_SpecifyFO"])) {

         $StudA_SpecifyFreO = $_POST["Advertisement_SpecifyFO"];
    }
    if (isset($_POST["alumnus"])) {

         $Stud_alumnus = $_POST["alumnus"];
    }
    if (isset($_POST["Specify_City_college"])) {

         $Stud_Specify_city_colege = $_POST["Specify_City_college"];
    }
    if (isset($_POST["checkboox_other"])) {

         $StudM_check_other = $_POST["checkboox_other"];
    }
    if (isset($_POST["Specify_other"])) {

         $StudA_SpecifyOther = $_POST["Specify_other"];
    }
    if (isset($_POST["Student_Uni_Colleg"])) {

         $StudStudent_Uni_Colleg = $_POST["Student_Uni_Colleg"];
    }
    if (isset($_POST["course_name_Tit"])) {

         $StudMcourse_name_Tit = $_POST["course_name_Tit"];
    }


    // 11 form Stud_highSent_byDate8

    if (isset($_POST["Stud_Highg_enclosed1"])) {

         $StudHigh_enclosedOne = $_POST["Stud_Highg_enclosed1"];
    }
    if (isset($_POST["Stud_High_SentTwoWeek"])) {

         $StudHigh_SentTwoWeek = $_POST["Stud_High_SentTwoWeek"];
    }
    if (isset($_POST["Stud_highSent_byDate"])) {

         $StudHighSent_byDate = $_POST["Stud_highSent_byDate"];
    }
    if (isset($_POST["Stud_Highg_enclosed2"])) {

         $StudHighg_enclosed2 = $_POST["Stud_Highg_enclosed2"];
    }
    if (isset($_POST["Stud_High_SentTwoWeek2"])) {

         $StudHigh_SentTwoWeek2 = $_POST["Stud_High_SentTwoWeek2"];
    }
    if (isset($_POST["Stud_highSent_byDate2"])) {

         $StudHighSent_byDate2 = $_POST["Stud_highSent_byDate2"];
    }
    if (isset($_POST["stud_Highg_enclosed3"])) {

         $studHighg_enclosed3 = $_POST["stud_Highg_enclosed3"];
    }
    if (isset($_POST["Stud_High_SentTwoWeek3"])) {

         $StudHigh_SentTwoWeek3 = $_POST["Stud_High_SentTwoWeek3"];
    }
    if (isset($_POST["Stud_highSent_byDate3"])) {

         $StudHighSent_byDate3 = $_POST["Stud_highSent_byDate3"];
    }
    if (isset($_POST["Stude_leaving_Caertificate"])) {

         $StudeLeaving_Caertificate = $_POST["Stude_leaving_Caertificate"];
    }
    if (isset($_POST["Stud_High_SentTwoWeek4"])) {

         $StudHigh_SentTwoWeek4 = $_POST["Stud_High_SentTwoWeek4"];
    }
    if (isset($_POST["Stud_highSent_byDate4"])) {

         $StudHighSent_byDate4 = $_POST["Stud_highSent_byDate4"];
    }
    if (isset($_POST["Stud_English_testScoreore"])) {

         $StudEnglish_testScoreore = $_POST["Stud_English_testScoreore"];
    }
    if (isset($_POST["Stud_High_SentTwoWeek5"])) {

         $StudHigh_SentTwoWeek5 = $_POST["Stud_High_SentTwoWeek5"];
    }
    if (isset($_POST["Stud_highSent_byDate5"])) {

         $StudHhighSent_byDate5 = $_POST["Stud_highSent_byDate5"];
    }
    if (isset($_POST["Student_CopyPassportID"])) {

         $StudentCopyPassportID = $_POST["Student_CopyPassportID"];
    }
    if (isset($_POST["Stud_High_SentTwoWeek6"])) {

         $StudHigh_SentTwoWeek6 = $_POST["Stud_High_SentTwoWeek6"];
    }
    if (isset($_POST["Stud_highSent_byDate6"])) {

         $StudHighSent_byDate6 = $_POST["Stud_highSent_byDate6"];
    }
    if (isset($_POST["Student_Photograph"])) {

         $Student_Photograph = $_POST["Student_Photograph"];
    }
    if (isset($_POST["Stud_High_SentTwoWeek7"])) {

         $StudHigh_SentTwoWeek7 = $_POST["Stud_High_SentTwoWeek7"];
    }
    if (isset($_POST["Stud_highSent_byDate7"])) {

         $StudHighSent_byDate7 = $_POST["Stud_highSent_byDate7"];
    }
    if (isset($_POST["Stude_Registration_Fee"])) {

         $Stude_Registration_Fee = $_POST["Stude_Registration_Fee"];
    }
    if (isset($_POST["Stud_High_SentTwoWeek8"])) {

         $StudHigh_SentTwoWeek8 = $_POST["Stud_High_SentTwoWeek8"];
    }
    if (isset($_POST["Stud_highSent_byDate8"])) {

         $StudHhighSent_byDate8 = $_POST["Stud_highSent_byDate8"];
    }

	if(isset($_POST["SelectedAmount"]))
	{
		 $full_total_amount = $_POST["SelectedAmount"];
        $Camount= filter_var($full_total_amount, FILTER_SANITIZE_NUMBER_INT);
	}
	
    if(isset($_POST["CardholderName"]))
    {
         $CardholderName = $_POST["CardholderName"];
        
    }
     if(isset($_POST["CardNumber"]))
    {
         $card_number = $_POST["CardNumber"];
        
    }
     if(isset($_POST["ExpirationMonth"]))
    {
         $exp_month = $_POST["ExpirationMonth"];
        
    }
    if(isset($_POST["ExpirYear"]))
    {
         $exp_year = $_POST["ExpirYear"];
        
    }
     if(isset($_POST["cvvNumber"]))
    {
         $cvc = $_POST["cvvNumber"];
        
    }
     if(isset($_POST["payment-selected"]))
    {
         $paymentselected = $_POST["payment-selected"];
        
    }
    if(isset($_POST["selectcourse"]))
    {
         $selectselected = $_POST["selectcourse"];
        
    }
    if(isset($_POST["selectco"]))
    {
         $selectmode = $_POST["selectco"];
        
    }
     $randomid= rand();

 \Stripe\Stripe::setApiKey('sk_test_51M6vIYSIQBtPanH4X2iu5I91Pvs3q16A3FGrnWImuzrnrvA0ztBRDOaYhebwORCOtrNftgcV3Ccg4Vbz1j6YOLbS00zqsdO7fy');
  $token = \Stripe\Token::create([
    'card' => [
      'number' => $card_number,
      'exp_month' =>$exp_month,
      'exp_year' => $exp_year,
      'cvc' => $cvc
    ]
  ]);
 $tokens = $token->id;
if(!empty($tokens)){
    	$customer = \Stripe\Customer::create([
        'name' => $CardholderName,
        'email' => "sachin@gmail.com",
        'address' => ['line1' => 'Near Building', 'line2' => 'Tower', 'city' => 'New York', 'state' => 'New York', 'postal_code' => '10001', 'country' => 'US']
        ]);

        $cus_id = $customer->id;
        
	
   if(!empty($customer)){

        $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $Camount*100,
                'customer' => $cus_id,
                'currency' => 'usd',
                'payment_method' => $paymentselected,
                'description' => 'Software development services',
                'off_session'=> true,
                    'confirm'=>true
            ]);
        //print_r($paymentIntent);
        $array = json_encode($paymentIntent);
		
             if ($paymentIntent->status === 'succeeded') {
				 $charge = \Stripe\Charge::retrieve($paymentIntent->latest_charge);
				   $paymet_iddd = $paymentIntent->id;
					$payment_intent = \Stripe\PaymentIntent::retrieve($paymet_iddd);
					 $transaction_id = $payment_intent->charges->data[0]->id;
                         $tansactionId= $charge->balance_transaction;
					// echo "<pre>";
					// print_r( $charge);
					// echo "</pre>";
				  $paymentid= $charge->id;
                  $paymentamount_captured= $charge->amount_captured;
                   $paymentbalance_transaction= $charge->balance_transaction;
                   $paymentcustomer= $paymentIntent->customer;
                   $paymentbrand= $charge->payment_method_details->card->brand;
                   $paymentcountry=$paymentIntent->currency;
                   $paymentexp_month= $charge->payment_method_details->card->exp_month;
                   $paymentexp_year= $charge->payment_method_details->card->exp_year;
                   $paymentlast4= $charge->payment_method_details->card->last4;
                  
                  

                  $intent = \Stripe\PaymentIntent::retrieve($paymentIntent->id);
                 $paymentDate = date('M  d Y ', $intent->created);
                    global $wpdb;
                    $datas =  $wpdb->insert('wp_StudentData', array(
                         'Name'  => $Stud_Surname, 
                         'Forename'  => $Stud_forname, 
                         'Title'  => $Stud_Title,
                         'Father-Name'  => $Stud_Fname,
                         'Mother-Name'  => $Stud_Mname, 
                         'Date-of-birth'  => $Stud_DoB,
                         'Place-of-birth'  => 'null', 
                         'Gender'  => $Stud_Gender,
                         'Marital-Status'  => $Stud_Marital_Status, 
                         'Nationality'  => $Stud_Nationality,
                         'ID-card-No'  => $Stud_ID_card_No,
                         'Date-of-issue'  => $Stud_ID_CardDateOfIssue,
                         'Passport-No'  => $Stud_Passport,
                         'Valid-until'=>'null',
                         'Contact-details'=>'null',
                         'Permanent-home-address'  => $Stud_PermanentHomeAddress,
                         'Post-Code'  => $Stud_Post_Code, 
                         'Telephone-No'  => $Stud_Tel_No,
                         'Mobile-phone-no'  => $Stud_Mobile_phone,
                         'Email' => $Stud_Email ,
                         'Programme-of-study'  =>  $Stud_Programme_detail, 
                         'As-per-semester'  => 'null',
                         'Full-Course'  => 'null',
                         'Location-of-studies'  => $Stud_Location_of_studies,
                         'Department'  => $Stud_Department,
                         'finance-your-studies' => $Stud_Studie_Finance,
                         'Please-Specify-stufy'  => $Stude_other_Specity_fund,
                         'Qualification'  => $Stud_Pre_Qualification, 
                         'Institution'  => $Stud_pre_sachool,
                         'grade'  => $Stud_score,  
                         'Date-of-award'  =>  $Stud_Date_of_award,
                         'computer-skills'  => $Stud_pre_skill,
                         'image'=>$path,
                         'fileupload'=>$pathFILE,
                         // 'paymentdetail'=>$array,
                         // 'Advertisement'=> $StudA_Specify,
                         // 'Advertisementone'=>$StudA_Specifyone,
                         // 'Advertisementtwo'=>$StudA_SpecifyTWo,
                         // 'Personalreco'=> $StudA_SpecifyFreO,
                         // 'CITYCollegealumn'=>$Stud_Specify_city_colege,
                         // 'Other'=>$StudA_SpecifyOther,
                         // 'Institution'=>$StudStudent_Uni_Colleg,
                         // 'Coursetitle'=>$StudMcourse_name_Tit,

                         )); 

                  $last_id = $wpdb->insert_id;
                   
                   update_post_meta($last_id, 'paymentdetail', $array);
                   $datasa = $wpdb->insert('wp_StudentDatatwo', array(
                             'id'=>$last_id,
                           'Englishlanguage'  =>  $Stud_F_language,
                           'Employment-details-date-form'=> $Stud_Employe_details,  
                           'Employment-details-date-to'  => $Stud_Employe_detailsTo,
                           'Position-held'  =>  $Stud__employment_held,
                           'Name-and-address'  => $Stud_Employer_name_address,
                           'Key-Responsibilities' =>  $Stud_employer_Key_Respon,
                           'Interests-Hobbies' => $Stud_Hobe,
                           'Father-Profession' => $StudFproFession,
                           'Father-education' => $StudFEduaction, 
                           'fa-TeleNo' =>  $Studf_No,
                           'fa-Job-address' => $Stud_FjobA ,
                           'Mother-Profession' => $StudMprofess,
                           'Mother-education' =>  $Stud_MEduation, 
                           'ma-TeleNo' => $StudM_No,
                           'ma-Job-address' => $StudM_JobA,
                           'Certified-High-School-Enclosed' => $StudHigh_enclosedOne,
                           'Certified-High-School-2-weeks' => $StudHigh_SentTwoWeek,
                           'Certified-date' => $StudHighSent_byDate,
                           'Translation-High-School-Enclosed' => $StudHighg_enclosed2,
                           'Translation-High-School-2-weeks' => $StudHigh_SentTwoWeek2,
                           'Translation-date' => $StudHighSent_byDate2,
                           'Leaving-Certificate-Enclosed' => $studHighg_enclosed3,
                           'Leaving-Certificate-2-week' => $StudHigh_SentTwoWeek3,
                           'Leaving-Certificate-date' => $StudHighSent_byDate3,
                           'English-Language-Enclosed' => $StudeLeaving_Caertificate,
                            'English-Language-2-week' => $StudHigh_SentTwoWeek4,
                            'English-Language-date' => $StudHighSent_byDate4,
                            'passport-ID-Enclosed' => $StudentCopyPassportID,
                            'passport-ID-2-week' => $StudHigh_SentTwoWeek6,
                            'passport-ID-date' => $StudHighSent_byDate6,
                            'Photograph-Enclosed' => $Student_Photograph,
                            'Photograph-2-week' => $StudHigh_SentTwoWeek7,
                            'Photograph-date' => $StudHighSent_byDate7,
                            'Registration-Fee-Enclosed' => $Stude_Registration_Fee,
                            'Registration-Fee-2-week' => $StudHigh_SentTwoWeek8,
                            'Registration-Fee-date' => $StudHhighSent_byDate8
                         ));

                    $datapayment =  $wpdb->insert('wp_paymentdetail', array(
                                         'id'=>$last_id,
                                        'name' => $CardholderName,
                                        'carddetail' => $card_number,
                                        'totalfee' => $Camount,
                                        'invoice' =>  $attachments,
                                        'select-fee' => $selectselected,
                                        'paymentID'  =>  $paymentid,   
                                        'amount_captured'  =>  $paymentamount_captured,   
                                        'balance_transaction' =>$paymentbalance_transaction,  
                                        'customer'=> $paymentcustome,  
                                        'brand'   => $paymentbrand,   
                                        'currency'  =>  $paymentcountry,   
                                        'exp_month'=> $paymentexp_month,   
                                        'exp_year' =>  $paymentexp_year,  
                                        'last4'=>$paymentlast4
                            ));

                         ob_start();
                         $to = 'traineemidriff17@gmail.com';
                         $subject = 'St.Joseph University';
                         ob_start();
						include('Email-Template/EmailTemplate.php');
                         $message = ob_get_contents(); 
                         ob_end_clean();            
						$pdf_name = "invoice-".rand().".pdf";
    					ob_start();
    					include('invoicetable/invoice.php');
    					$htmll = ob_get_contents(); 
    					ob_end_clean();
    					$dompdf = new Dompdf();
						$options = $dompdf->getOptions();
						$options->set('isRemoteEnabled', true);
    					$dompdf->loadHtml($htmll);
    					$dompdf->render();
    					$pdfOutput = $dompdf->output();
    					array(file_put_contents('wp-content/themes/twenty-twenty-child/assets/pdf/'.$pdf_name, $pdfOutput));  
						$headers = array('Content-Type: text/html; charset=UTF-8');
						$attachments = array(ABSPATH . '/wp-content/themes/twenty-twenty-child/assets/pdf/'.$pdf_name);
                     if( is_wp_error(wp_mail($to, $subject, $message, $headers,$attachments)))
                     {  
                           $error   = $coustam_user->get_error_message();
                         
                     } else {
                         update_post_meta($last_id ,"invocepdfFile",$attachments);
                         $error = " Send Email";
						 $link = "https://stjosephuniversity.midriffdeveloper.online/thank-you/";
						 echo '<script>window.location ="'.$link.'"</script>';    
					
						
                      }


             } else {

               $error= 'Payment failed.';
              }

         }
       
    }
}

get_header();
 ?>
<style>
    #formMultipleStep {
        text-align: center;
        position: relative;
        margin-top: 20px
    }

    #formMultipleStep fieldset {
        border: 0;
        border-radius: 0;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        padding-top: 0;
        position: relative
    }

    #formMultipleStep fieldset:not(:first-of-type) {
        display: none
    }

    /* #formMultipleStep input,
    #formMultipleStep textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 16px;
        letter-spacing: 1px
    } */

    /* #formMultipleStep input:focus,
    #formMultipleStep textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #673AB7;
        outline-width: 0
    } */

    /* #formMultipleStep .action-button {
        width: 100px;
        background: #673AB7;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #formMultipleStep .action-button:hover,
    #formMultipleStep .action-button:focus {
        background-color: #311B92
    }

    #formMultipleStep .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right;
    }

    #formMultipleStep .action-button-previous:hover,
    #formMultipleStep .action-button-previous:focus {
        background-color: #000000
    } */

    .progressBarMain {
        height: 20px;
    }

    .progress-bar {
        background-color: #673AB7;
        font-family: 'Poppins', sans-serif;
    }

    /* .fit-image {
        width: 100%;
        object-fit: cover;
    } */

    .progressBarMain {
        background-color: #ddefea;
        border-radius: 20px;
        position: relative;
        margin: 15px 0;
        height: 30px;
        width: 100%;
    }

    .progress-done {
        background: linear-gradient(220deg, #2CE5AD 26%, #0CA6F0 91%);
        box-shadow: 2px 2px 12px 1px rgb(44 229 173 / 30%);
        border-radius: 20px;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        width: 0;
        /* opacity: 0; */
        transition: 1s ease 0.3s;
        font-size: 17px;
    }




    .UploadImageAvtr {
        position: relative;
        max-width: 205px;
        margin: 50px auto;
    }

    .UploadImageAvtr .editUploadImg {
        position: absolute;
        right: 5px;
        z-index: 1;
        top: -5px;
    }

    .UploadImageAvtr .editUploadImg input {
        display: none;
    }

    .UploadImageAvtr .editUploadImg input+label {
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #FFFFFF;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all 0.2s ease-in-out;
    }

    .UploadImageAvtr .editUploadImg input+label:hover {
        background: #f1f1f1;
        border-color: #d6d6d6;
    }

    .UploadImageAvtr .editUploadImg input+label:after {
        content: "";
        /* font-family: 'FontAwesome'; */
        color: #757575;
        position: absolute;
        background-image: url('/wp-content/uploads/2023/04/pencil-edit.png');
        background-repeat: no-repeat;
        background-size: 17px auto;
        background-position: center center;
        top: 7px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
        height: 20px;
    }

    .UploadImageAvtr .previewUplodImg {
        width: 192px;
        height: 192px;
        position: relative;
        /* border-radius: 100%; */
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .UploadImageAvtr .previewUplodImg>div {
        width: 100%;
        height: 100%;
        /* border-radius: 100%; */
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }




    .file-upload-cstm .file-upload-cstm-select {
        display: block;
        color: #dbdbdb;
        cursor: pointer;
        text-align: left;
        background: #ffffff;
        overflow: hidden;
        position: relative;
        border-radius: 0;
        border: 1px solid #dbdbdb;
        font-size: 15px;
        padding: 4px;
    }

    .file-upload-cstm .file-upload-cstm-select .file-select-button {
        background: #033b4c;
        padding: 10px;
        display: inline-block;
    }

    .file-upload-cstm .file-upload-cstm-select .file-select-name {
        display: inline-block;
        padding: 10px;
        color: #757782;
    }

    .file-upload-cstm .file-upload-cstm-select:hover .file-select-button {
        background: #324759;
        color: #ffffff;
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
    }

    .file-upload-cstm .file-upload-cstm-select input[type="file"] {
        display: none;
    }

    .validation_error {
        color: #ff0000;
        font-size: 14px;
        display: block;
        line-height: 1.4;
    }
   .alert.alert-primary {
    color: #27be26;
    text-align: center;
}
.validationcard_erro {
     text-align: center;
    font-size: 20px;
    color: red;
    
}


</style>

<section class="banner-section" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/breadcrumb-bg.jpg')">
    <div class="custom-container">
        <div class="inner-content-banner">
            <h1><?php the_title();?></h1>
        </div>
    </div>
</section>
<section class="formStepSection">
<div class="custom-container">


<div class="alert alert-primary" role="alert">
 <?php echo  $error; ?>
</div>
<form id="formMultipleStep"  action="" class="formStyleStepIn" method="post" enctype="multipart/form-data">
    <h5 class="totalAmountTop">Your Total Amount: $<span></span></h5>
    <h2 class="titleMainForm">Admissions Application Form</h2>
    <div class="progress progressBarMain">
        <div class="progress-done progress-bar" data-done="0">
            0%
        </div>
    </div>  
 <!-- <fieldset> 
        <div class="form-card align-left">
            <h4 class="stepsCount">Step 1 - 14</h4>
            <div class="mainContentStyleForm  align-left">
                <div class="innerContentForm">
                    <h2 class="align-center">Filling in the form</h2>
                    <h3>General Instructions</h3>
                    <p>You may find here instructions on how to fill in the various sections of the application form. Not all sections have specific instructions, as most of them are self‐explanatory. Please find below the ones that need your attention.</p>
                </div>
                <ol class="listStyleContent" type="A">
                    <li class="innerContentForm">
                        <h4>Personal details</h4>
                        <p>Please give your name as it appears on your passport or ID Card. If your forename and family name are not clear, your application could be delayed.</p>
                    </li>
                    <li class="innerContentForm">
                        <h4> Contact details</h4>
                        <p>The University will address all correspondence through the address provided in Section B. It is essential that the University is noti fied of any change of address/email at the earliest opportunity.</p>
                    </li>
                    <li class="innerContentForm">
                        <h4> Funding details</h4>
                        <p>In order to be informed about tuition fees, you may contact the University directly or visit our official website.</p>
                    </li>
                    <li class="innerContentForm">
                        <h4> Previous education</h4>
                        <p>Our minimum entry requirements are listed in our prospectus and on our website. If you are not sure your qualifications are suitable, contact the Admissions Office before you apply. Applicants are strongly encouraged to supply additional information to support their application. Please use this section to include this information, and continue on a separate sheet if necessary.</p>
                    </li>
                    <li class="innerContentForm">
                        <h4>English language details</h4>
                        <p>We use the information you give us to decide whether or not you meet the English language requirements for your chosen course. A list of the English language qualifications and the minimum grades we accept can be found on our website. If you don't have one of the qualifications listed, we may offer you a place on the condition that you submit an acceptable language certificate before the commencement of the course, or you would be mandated to take the English as a Second Language course.</p>
                        <p>All applicants should attach copies of the results of any English language examinations undertaken (please check our admissions requirements). Please include results of any examinations undertaken during any on going studies (e.g. year 1 or year 2 results of a current degree course). SJU's reference code for the TOEFL test is 7234. All copies of English language qualifications should be certified.</p>
                    </li>
                    <li class="innerContentForm">
                        <h4>Checklist</h4>
                        <p>We use the information you give us to decide whether or not you meet the English language requirements for your chosen course. A list of the English language qualifications and the minimum grades we accept can be found on our website. If you don't have one of the qualifications listed, we may offer you a place on the condition that you submit an acceptable language certificate before the commencement of the course, or you would be mandated to take the English as a Second Language course.</p>
                        <p>All applicants should attach copies of the results of any English language examinations undertaken (please check our admissions requirements). Please include results of any examinations undertaken during any on going studies (e.g. year 1 or year 2 results of a current degree course). SJU's reference code for the TOEFL test is 7234. All copies of English language qualifications should be certified.</p>
                        <div class="innerContentForm subInnerItemForm">
                            <h4>Deadlines</h4>
                            <p>Most undergraduate courses have no deadline for applications, unless you're applying for a specific scholarship. However, entry to all courses is competitive. To increase your chance of an offer, you should apply as early as possible. Applying early gives you more chances to be accepted. </p>
                        </div>
                    </li>
                </ol>

                <div class="innerContentForm">
                    <h3>What happens after we receive your application?</h3>
                    <p>1. As soon as we get your application, it is processed and assessed by the Admissions Office and the relevant academic department. </p>
                    <p>2. When the assessment is complete and a recommendation is made, we notify you through email.</p>
                    <div class="innerContentForm subInnerItemForm">
                        <h4>How long does it take?</h4>
                        <p>The Admissions Office will try to send you a decision as quickly as possible. The process usually takes up to two weeks. Remember, if you send/email supporting documents separately, this can delay the decision.</p>
                    </div>
                    <div class="innerContentForm subInnerItemForm">
                        <h4>What can I do to speed things up?</h4>
                        <p>1. Applicants are required to send all documents (application form, supporting documents etc.) through email or upload them using the on-line application form on our website. You may be required to submit hard copies of the above documents and this may be done via airmail or courier or submit them to our representative office in your country.</p>
                        <p>2. If your postal or email address changes, please let us know straight away. Contact us at the address below. </p>
                    </div>
                </div>
                <div class="innerContentForm contactDetailContent">
                    <h3>Admissions contact details</h3>
                    <p>St. Joseph University</p>
                    <p>Office of Admissions</p>
                    <p>Cnr Great Marlborough & Great George St, Roseau, Commonwealth of Dominica </p>
                    <p>Email: <a href="mailto:admissions@stjosephuniversity.edu.dm">admissions@stjosephuniversity.edu.dm</a></p>
                    <p><a href="https://stjosephuniversity.edu.dm/">www.stjosephuniversity.edu.dm </a></p>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnThemeInput commonBtnInput">
                <input type="button" name="next" class="next action-button" value="Next" />
            </div>
        </div>
    </fieldset>
    <fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 2 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <p><strong>Use this application form to apply for an Undergraduate Course. All sections should be filled in by all applicants.</strong></p>
                    <h3 class="text-theme-grn">Personal details</h3>
                    <p>It is important that you provide these details as they are shown on your ID card / passport.</p>
                    <div class="imageUploadForm">
                        <div class="">
                            <div class="UploadImageAvtr">
                                <div class="editUploadImg">
                                    <input type='file' id="fileUploadStyle" name="Student_photos" accept=".png, .jpg, .jpeg" />
                                    <label for="fileUploadStyle"></label>
                                </div>
                                <div class="previewUplodImg">
                                    <div id="imageShowPreview" style="background-image: url(/wp-content/uploads/2023/04/profile-student.jpg);">
                                    </div>
                                </div>
                            </div>
                            <span id="Error_Image" class="validation_error"></span>
                        </div>
                    </div>
                </div>
                <div class="fields-input-main">
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Surname / Family Name</label>
                        <input type="text" class="form-custom-cntrl" id="Student_Surnames" placeholder="Surname / Family Name" name="Student_Surname">
                        <span id="Student_Surname_error" class="validation_error"></span>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Forename(s)</label>
                            <input type="text" class="form-custom-cntrl" id="Student_FOrenames" placeholder="Forename" name="Student_FOrename">
                            <span id="Student_FOrename_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm">Title</h4>
                            <div class="checkboxGrpCustom topSpaceTn">
                                <div class="inner-col-checkbox">
                                    <input type="radio" id="labelRdoMr" class="form-custom-radio" value="Mr" name="name_pro">
                                    <label class="labelRadioCnt" for="labelRdoMr">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Mr
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input type="radio" id="labelRdoMs" class="form-custom-radio" value="Ms" name="name_pro">
                                    <label for="labelRdoMs" class="labelRadioCnt">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Ms
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input type="radio" id="labelRdoMis" class="form-custom-radio" value="Miss" name="name_pro">
                                    <label for="labelRdoMis" class="labelRadioCnt">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Miss
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input id="labelRdoMrs" type="radio" class="form-custom-radio" value=" Mrs" name="name_pro">
                                    <label for="labelRdoMrs" class="labelRadioCnt">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Mrs
                                    </label>
                                </div>
                            </div>
                            <span id="Student_title_error" class="validation_error"></span>
                        </div>
                        
                    </div>

                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Father's Name</label>
                            <input type="text" class="form-custom-cntrl" id="Student_Father_names" placeholder="Father's Name" name="Student_Father_name">
                            <span id="Student_Father_name_error" class="validation_error"></span>

                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Mother's Name</label>
                            <input type="text" class="form-custom-cntrl" placeholder="Mother's name" name="Student_Mother_name" id="Student_Mother_names">
                            <span id="Student_Mother_name_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Date of birth</label>
                            <input type="date" class="form-custom-cntrl" id="Student_Date_of_birthS" placeholder="Date of Birth" name="Student_Date_of_birth">

                            <span id="Student_Date_of_birth_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Place of birth</label>
                            <input type="text" class="form-custom-cntrl" placeholder="Place of birth" name="Student_place_of_birth" id="Student_place_of_births">
                            <span id="Student_place_of_birth_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm">Gender</h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input id="labelRdoMale" type="radio" class="form-custom-radio" value="Male" name="gender">
                                    <label for="labelRdoMale" class="labelRadioCnt">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Male
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input id="labelRdoFemale" type="radio" class="form-custom-radio" value="Female" name="gender">
                                    <label for="labelRdoFemale" class="labelRadioCnt">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Female
                                    </label>
                                </div>
                            </div>
                             <span id="Student_Gender_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm">Marital Status</h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input id="labelRdoMarried" type="radio" class="form-custom-radio" value="Married" name="mStatus">
                                    <label for="labelRdoMarried" class="labelRadioCnt">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Married
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input id="labelRdoSingle" type="radio" class="form-custom-radio" value="Single" name="mStatus">
                                    <label for="labelRdoSingle" class="labelRadioCnt">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Single
                                    </label>
                                </div>
                            </div>
                            <span id="Student_Marital_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Nationality</label>
                        <input type="text" class="form-custom-cntrl" id="Student_Nationalitys" placeholder="Nationality" name="Student_Nationality">
                        <span id="Student_Nationality_error" class="validation_error"></span>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm"> ID card No (for local applicants):</label>
                            <input type="text" class="form-custom-cntrl" id="Student_ID_Card_Nos" placeholder="ID Card Number" name="Student_ID_Card_No">
                            <span id="Student_ID_Card_No_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Date of issue</label>
                            <input type="date" class="form-custom-cntrl" placeholder="Nationality" name="Student_Card_issue_date" id="Student_Card_issue_dates">
                            <span id="Student_Card_issue_date_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Passport No (for non-local applicants)</label>
                        <input type="text" class="form-custom-cntrl" placeholder="Passport Number" name="Student_Passport_number" id="Student_Passport_numbers">
                        <span id="Student_Passport_number_error" class="validation_error"></span>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Date of issue</label>
                            <input type="date" class="form-custom-cntrl" placeholder="Date of issue" name="Student_Pass_date_issue" id="Student_Pass_date_issues">
                            <span id="Student_Pass_date_issue_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Valid until</label>
                            <input type="date" class="form-custom-cntrl" placeholder="Valid until" name="Student_Pass_valid_until" id="Student_Pass_valid_untils">
                            <span id="Student_Pass_valid_until_error" class="validation_error"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="hidden" name="next" class="next First_button " value="Next" />
                <input type="button" name="next" id="First_button" class="action-button" value="Next" />

            </div>
        </div>


  </fieldset>
    <fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 3 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <h3 class="text-theme-grn">Contact details</h3>
                    <p>Unless dates are specified, St. Joseph University will use this correspondence address for all
                        correspondence.</p>
                </div>
                <div class="fields-input-main">
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Permanent (home) address</label>
                        <textarea type="textarea" class="form-custom-textarea resize-none" rows="4" placeholder="Permanent Address" name="Permanent_Home_Add" id="Permanent_Home_Adds"></textarea>
                        <span id="Permanent_Home_Add_error" class="validation_error"></span>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Post Code</label>
                            <input type="text" class="form-custom-cntrl" placeholder="Post Code" name="Stude_Post_code" id="Stude_Post_codes">
                            <span id="Stude_Post_code_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Tel. No</label>
                            <input type="text" class="form-custom-cntrl" placeholder="Telephone Number" name="StudentTelNo" id="StudentTelNos">
                            <span id="StudentTelNo_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Mobile phone no</label>
                            <input type="text" class="form-custom-cntrl" placeholder="Mobile Phone Number" name="Student_Mobile_number" id="Student_Mobile_numbers">
                            <span id="Student_Mobile_number_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Email</label>
                            <input type="email" class="form-custom-cntrl" placeholder="Email" name="Student_Email" id="Student_Emails">
                            <span id="Student_Email_error" class="validation_error"></span>
                        </div>
                    </div>
                    <h3 class="labelSizeForm">Dates when contactable at this address: </h3>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">From</label>
                            <input type="date" class="form-custom-cntrl" placeholder="From" name="contactable_add_Dates_form" id="contactable_add_Dates_forms">
                            <span id="contactable_add_Dates_form_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">To</label>
                            <input type="date" class="form-custom-cntrl" placeholder="To" name="contactable_add_Dates_to" id="contactable_add_Dates_tos">
                            <span id="contactable_add_Dates_to_error" class="validation_error"></span>
                        </div>
                    </div>
                </div>
                <div class="fields-input-main">
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Correspondence address <sup>(if different)<sup></label>
                        <textarea type="textarea" class="form-custom-textarea resize-none" rows="4" placeholder="Permanent Address" name="StudentCorrespondence_address" id="StudentCorrespondence_addresss"></textarea>
                        <span id="StudentCorrespondence_address_error" class="validation_error"></span>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Post Code</label>
                            <input type="text" class="form-custom-cntrl" placeholder="Post Code" name="Student_postCodeTWo" id="Student_postCodeTWos">
                            <span id="Student_postCodeTWo_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Tel. No</label>
                            <input type="text" class="form-custom-cntrl" placeholder="Telephone Number" name="StudentTelNoTwo" id="StudentTelNoTwos">
                            <span id="StudentTelNoTwo_errror" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Mobile phone no</label>
                            <input type="text" class="form-custom-cntrl" placeholder="Mobile Phone Number" name="StudentMobilephoneTwo" id="StudentMobilephoneTwos">
                            <span id="StudentMobilephoneTwo_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Email</label>
                            <input type="email" class="form-custom-cntrl" placeholder="Email" name="Student_EnailTwo" id="Student_EnailTwos">
                            <span id="Student_EnailTwo_error" class="validation_error"></span>
                        </div>
                    </div>
                    <h3 class="labelSizeForm">Dates when contactable at this address: </h3>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">From</label>
                            <input type="date" class="form-custom-cntrl" placeholder="From" name="contactable_add_Dates_formTWo" id="cont_add_Dates_formTWo">
                            <span id="contactable_add_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">To</label>
                            <input type="date" class="form-custom-cntrl" placeholder="To" name="contactable_add_Dates_toTwo" id="contactable_toTwo">
                            <span id="contactable_add_error" class="validation_error"></span>
                        </div>
                    </div>
                </div>
                <div class="desc-content-btm">
                    <p>Please notify St. Joseph University of any change of address as soon as possible, to ensure that any correspondence reaches you</p>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="hidden" name="next" class="next secound_button " value="Next" />
                <input type="button" name="next" id="secound_button" class="action-button" value="Next" />
            </div>
        </div>
    </fieldset>-->
     <fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 4 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <h3 class="text-theme-grn">Programme of study details</h3>
                </div>
                <div class="fields-input-main">
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Title of the course</label>
                        <div class="p-relative">
                            <select class="js-states singleSelecter select2CustomStyle" name="AllCourse" id="AllCourse_id">
                                <option disabled selected>Please select your course</option>
                                <option value="4-year-medical-doctor-program-fees">4 YEAR Medical Doctor Program</option>
                                <option value="5-year-medical-doctor-program-fees" >5 Year Medical Doctor Program</option>
                                <option value="bachelor-of-marine-biology">Bachelor of Marine Biology</option>
                                <option value="bachelor-of-culinary-arts" >Bachelor of Culinary Arts</option>
                                <option value="bachelor-of-midwifery-program-fees">Bachelor of Midwifery Program</option>
                                <option value="bachelor-of-pharmacy-program-fees">Bachelor of Pharmacy Program</option>
                                <option value="bachelor-of-nursing-program-fees">Bachelor of Nursing Program</option>
                                <option value="esl-1-year-program">ESL(English as a second language) 1 Year Program</option>
                                <option value="diagnostic-medical-sonography-program-fees">Diagnostic Medical Sonography Program</option>
                                <option value="laboratory-technology-program-fees">Laboratory Technology Program</option>
                                <option value="special-education-program-fees">Special Education Program</option>
                                <option value="bsc-computer-science-and-information-technology-program-fees">BSc Computer Science and Information Technology Program</option>
                                <option value="bachelor-in-business-administration-program-fees">Bachelor in Business Administration Program</option>
                                <option value="bachelor-in-accounting-program-fees">Bachelor in Accounting Program</option>
                                <option value="bsc-early-childhood-program-fees">BSc Early Childhood Program</option>
                                <option value="bsc-general-education-program-fees">BSc General Education Program</option>
                                <option value="bachelor-in-business-management-program-fees">Bachelor in Business Management Program</option>
                                <option value="bachelor-in-sports-management-program-fees">Bachelor in Sports Management Program</option>
                                <option value="bachelor-in-criminal-justice-program-fees">Bachelor in Criminal Justice Program</option>
                                <option value="bachelor-of-counseling">Bachelor of Counseling</option>
                                <option value="bachelor-of-psychology">Bachelor of Psychology</option>
                                <option value="bachelor-of-public-health">Bachelor of Public Health</option>
                                <option value="bachelor-of-hospitality-management">Bachelor of Hospitality Management</option>
                                <option value="associates-in-medical-administration-program-fees">Associates in Medical Administration Program</option>
                                <option value="associates-in-sustainable-agriculture-program-fees">Associates in Sustainable Agriculture Program</option>
                            </select>
                            <div id="append-data-load" class="loader-main-style">
                                <div class="loaderEffect"></div>
                            </div>
                        </div>
                        <span id="AllCourse_error" class="validation_error"></span>
                        
                    </div>
                    
                    
                    <div class="inner-input-fields tableListAppend">
                    </div>
                    <div class="inner-input-fields">
                        <h4 class="labelSizeForm">Time Model</h4>
                        <div class="checkboxGrpCustom topSpaceTn">
                            <div class="inner-col-checkbox">
                                <input type="radio" id="labelFirst" class="form-custom-radio" value="3 Year" name="Stud_attendance" >
                                <label class="labelRadioCnt" for="labelFirst">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    As per semester
                                </label>
                            </div>
                            <div class="inner-col-checkbox">
                                <input type="radio" id="labelScnd" class="form-custom-radio" value="4 Year" name="Stud_attendance" >
                                <label for="labelScnd" class="labelRadioCnt">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    Full Course
                                </label>
                                <span id="labelFirst_error" class="validation_error"></span>

                            </div>
                        </div>
                        <span id="AllCousame_error" class="validation_error"></span>
                    </div>
					
                    <div class="inner-input-fields" id="showSameData" ></div>
                    <div class="inner-input-fields" id="showSameDatasss" ></div>

                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Department in which you wish to study</label>
                        <input type="text" class="form-custom-cntrl" placeholder="Department" name="Stud_Department" id="Stud_Departments">
                        <span id="Stud_Department_error" class="validation_error"></span>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Location of studies</label>
                        <input type="text" class="form-custom-cntrl" placeholder="Location of studies" name="Location_Study" id="Location_StudyS">
                        <span id="Location_Study_error" class="validation_error"></span>
                        <p class="noteClassStyle">Please note that different modes of study may not be available for all courses.</p>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">In which month and year do you wish to start your studies?</label>
                        <input type="month" class="form-custom-cntrl" placeholder="Department" name="start_your_studies" id="start_your_studies_id">
                        <span id="start_your_studies_error" class="validation_error"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="hidden" name="next" class="next third_button " value="Next" />
                <input type="button" name="next" id="third_button" class="action-button" value="Next"  disabled />
            </div>
        </div>
    </fieldset>
  
 <!--<fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 5 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <h3 class="text-theme-grn">Funding details</h3>
                </div>
                <div class="fields-input-main">
                    <div class="inner-input-fields">
                        <h4 class="labelSizeForm">Please indicate how you intend to finance your studies.</h4>
                        <h6 class="subTitleForm">Select one or multiple options</h6>
                        <div class="checkboxGrpCustom topSpaceTn">
                            <div class="inner-col-checkbox">
                                <input type="checkbox" id="labelPrnt" checked="" class="form-custom-radio" value="Parents" name="Stud_Finance[]">
                                <label class="labelRadioCnt" for="labelPrnt">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    Parents
                                </label>
                            </div>
                            <div class="inner-col-checkbox">
                                <input type="checkbox" id="labelSelf" class="form-custom-radio" value="Self-funded" name="Stud_Finance[]">
                                <label for="labelSelf" class="labelRadioCnt">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    Self-funded
                                </label>
                            </div>
                            <div class="inner-col-checkbox">
                                <input type="checkbox" id="labelSchl" class="form-custom-radio" value="Scholarship" name="Stud_Finance[]">
                                <label for="labelSchl" class="labelRadioCnt">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    Scholarship
                                </label>
                            </div>
                            <div class="inner-col-checkbox">
                                <input type="checkbox" id="labelCmpny" class="form-custom-radio" value="Company" name="Stud_Finance[]">
                                <label for="labelCmpny" class="labelRadioCnt">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    Company
                                </label>
                            </div>
                            <div class="inner-col-checkbox">
                                <input type="checkbox" id="labelOthr" class="form-custom-radio" value="Other" name="Stud_Finance[]">
                                <label for="labelOthr" class="labelRadioCnt">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    Other (please specify)
                                </label>
                            </div>
                            <span id="Stud_Finance_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Please Specify</label>
                        <input type="text" class="form-custom-cntrl" id="stude_other_fundes" placeholder="Please Specify" name="stude_other_funde">
                        <span id="stude_other_funde_error" class="validation_error"></span>
                    </div>
                    <div class="inner-input-fields">
                        <h4 class="labelSizeForm">Is this funding definite or proposed</h4>
                        <div class="checkboxGrpCustom topSpaceTn">
                            <div class="inner-col-checkbox">
                                <input type="radio" id="labelDef" checked="" class="form-custom-radio" value="Definite" name="Stud_Fund">

                                <label class="labelRadioCnt" for="labelDef">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    Definite
                                </label>
                            </div>
                            <div class="inner-col-checkbox">
                                <input type="radio" id="labelProposed" class="form-custom-radio" value="Proposed" name="Stud_Fund">
                                <label for="labelProposed" class="labelRadioCnt">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    Proposed
                                </label>
                            </div>
                            <span id="Stud_Fund_error" class="validation_error"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="hidden" name="next" class="next fouth_button " value="Next" />
                <input type="button" name="next" id="fouth_button" class="action-button" value="Next" />
            </div>
        </div>
    </fieldset>
    <fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 6 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <h3 class="text-theme-grn">Previous education details</h3>
                </div>
                <h4 class="labelSizeForm">Please provide details, including results of all secondary/ high school level qualifications you have already received, or will be receiving (starting with the most recent) and attach copies of transcripts or certificates where possible. Include results of any examinations taken as part of any current studies.</h4>
                <div class="fields-input-main">
                    <div class="inner-input-fields">

                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Qualification</label>
                            <input type="text" class="form-custom-cntrl" name="Student_Qualification" placeholder="Qualification" id="Student_Qualifications">
                            <span id="Student_Qualification_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">School / Institution</label>
                            <input type="text" class="form-custom-cntrl" name="Student_School" placeholder="School / Institution" id="Student_Schools">
                            <span id="Student_School_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Class / score/grade / GPA</label>
                            <input type="text" class="form-custom-cntrl" name="Student_score" placeholder="Class / score/grade / GPA" id="Student_score_id">
                            <span id="Student_score_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Date of award</label>
                            <input type="date" class="form-custom-cntrl" id="Stude_DateOf_Awards" name="Stude_DateOf_Award" placeholder="Date of award">
                            <span id="Stude_DateOf_Award_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="fieldsTopSpace">
                        <div class="groupMainfeilds">
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Qualification</label>
                                <input type="text" class="form-custom-cntrl" name="Student_QualificationTwo" placeholder="Qualification" id="Student_QualificationTwos">
                                <span id="Student_QualificationTwo_error" class="validation_error"></span>
                            </div>
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">School / Institution</label>
                                <input type="text" class="form-custom-cntrl" name="Student_SchoolTwo" placeholder="School / Institution" id="Student_SchoolTwos">
                                <span id="Student_SchoolTwo_error" class="validation_error"></span>
                            </div>
                        </div>
                        <div class="groupMainfeilds">
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Class / score/grade / GPA</label>
                                <input type="text" class="form-custom-cntrl" name="Student_scoreTwo" placeholder="Class / score/grade / GPA" id="Student_scoreTwos">
                                <span id="Student_scoreTwo_error" class="validation_error"></span>
                            </div>
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Date of award</label>
                                <input type="date" class="form-custom-cntrl" name="Stude_DateOf_AwardTWo" placeholder="Date of award" id="Stude_DateOf_AwardTWos">
                                <span id="Stude_DateOf_AwardTWo_error" class="validation_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Please provide details of any other qualifications you have (i.e. other languages, seminars or courses you have attended, computer skills etc.) </label>
                        <textarea type="textarea" class="resize-none form-custom-textarea" rows="6" name="student_Skills" id="student_Skills_id"></textarea>
                        <span id="student_Skills_error" class="validation_error"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="hidden" name="next" class="next Five_button " value="Next" />
                <input type="button" name="next" id="Five_button" class="action-button" value="Next" />
            </div>
        </div>
  </fieldset> 
      <fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 7 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <h3 class="text-theme-grn">English language details</h3>
                </div>
                <h4 class="labelSizeForm">This information will be used to determine whether you already meet our minimum English language requirements or whether you will need to take an additional English as a Second Language Program. </h4>
                <div class="fields-input-main">
                    <div class="inner-input-fields">
                        <h4 class="labelSizeForm"> Is English your first language?</h4>
                        <div class="checkboxGrpCustom topSpaceTn">
                            <div class="inner-col-checkbox">
                                <input type="radio" id="labelYs" checked="" class="form-custom-radio" value="Yes" name="click_f_language">
                                <label class="labelRadioCnt" for="labelYs">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    Yes
                                </label>
                            </div>
                            <div class="inner-col-checkbox">
                                <input type="radio" id="labelNo" checked="" class="form-custom-radio" value="No" name="click_f_language">
                                <label for="labelNo" class="labelRadioCnt">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="inner-input-fields">
                        <h4 class="labelSizeForm"> Was your previous education undertaken in English?</h4>
                        <div class="checkboxGrpCustom topSpaceTn">
                            <div class="inner-col-checkbox">
                                <input type="radio" id="labelEng" class="form-custom-radio" value="Yes" name="Pre_edu_Eng">
                                <label class="labelRadioCnt" for="labelEng">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    Yes
                                </label>
                            </div>
                            <div class="inner-col-checkbox">
                                <input type="radio" id="labelNoe" class="form-custom-radio" value="NO" name="Pre_edu_Eng">
                                <label for="labelNoe" class="labelRadioCnt">
                                    <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">If No, please state the language in which you were educated</label>
                        <input type="text" class="form-custom-cntrl" name="State_language" placeholder="Language Educated" id="State_languages">
                        <span id="State_language_error" class="validation_error"></span>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Please state your native language</label>
                        <input type="text" class="form-custom-cntrl" name="native_language" placeholder="State Language" id="native_languages">
                        <span id="native_language_error" class="validation_error"></span>
                    </div>
                    <div class="inner-input-fields">
                        <h4 class="labelSizeForm">Please list and attach certificates/transcripts of any English language qualifications you possess: </h4>
                        <div class="file-upload-cstm">
                            <div class="file-upload-cstm-select">
                                <div class="file-select-button">Choose File</div>
                                <div class="file-select-name">No file chosen...</div>
                                <input type="file" name="file-upload-cstm-input" id="file-upload-cstm-input">
                            </div>
                            <span id="file-upload-cstm-input_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="moreDivAdd">
                        <div class="groupMainfeilds">
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Qualification</label>
                                <input type="text" class="form-custom-cntrl" name="Studemt_E_Qualification" placeholder="Qualification" id="Studemt_E_QualificationS">
                                <span id="Studemt_E_Qualification_error" class="validation_error"></span>
                            </div>
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Awarding body</label>
                                <input type="text" class="form-custom-cntrl" name="Student_Awarding_body" placeholder="Awarding body" id="Student_Awarding_bodyS">
                                <span id="Student_Awarding_body_error" class="validation_error"></span>
                            </div>
                        </div>
                        <div class="groupMainfeilds">
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Overall grade/score</label>
                                <input type="text" class="form-custom-cntrl" name="Student_E_Score" placeholder="Overall grade/score" id="Student_E_ScoreS">
                                <span id="Student_E_Score_error" class="validation_error"></span>
                            </div>
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Date of award</label>
                                <input type="date" class="form-custom-cntrl" name="Stude_Date_of_award" placeholder="Date" id="Stude_Date_of_awardS">
                                <span id="Stude_Date_of_award_error" class="validation_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="buttonMainStyleGrp">
                        <a href="javascript:void(0)" id="addmore" class="btn btn-theme">+ Add Row</a>
                    </div>
                     <div id="moreAEDHTML">
                           </div>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="hidden" name="next" class="next six_button " value="Next" />
                <input type="button" name="next" id="six_button" class="action-button" value="Next" />
            </div>
        </div>
    </fieldset>
    <fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 8 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <h3 class="text-theme-grn">Employment details <sup>(if applicable)</sup></h3>
                </div>
                <h4 class="labelSizeForm"> Please provide details of employment: </h4>
                <div class="fields-input-main">
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <div class="groupMainfeilds">
                                <div class="inner-input-fields">
                                    <label class="labelSizeForm sizeSmallFont">From</label>
                                    <input type="date" class="form-custom-cntrl" name="stud_employment_details_form" placeholder="From" id="stud_employment_detailID">
                                    <span id="stud_employment_details_error" class="validation_error"></span>
                                </div>
                                <div class="inner-input-fields">
                                    <label class="labelSizeForm sizeSmallFont">To</label>
                                    <input type="date" class="form-custom-cntrl" name="stud_employment_details_to" placeholder="To" id="stud_employment_details_toS">
                                    <span id="stud_employment_to_error" class="validation_error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">Position held</label>
                            <input type="text" class="form-custom-cntrl" name="stud_employment_Position_held" placeholder="Position held" id="stud_employment_Position_heldS">
                            <span id="stud_employment_Position_held_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Name and address of employer</label>
                        <input type="text" class="form-custom-cntrl" name="Employer_name_address" placeholder="Name and address of employer" id="Employer_name_addressID">
                        <span id="Employer_name_address_error" class="validation_error"></span>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Key Responsibilities</label>
                        <input type="text" class="form-custom-cntrl" name="employer_Key_Respon" placeholder="Key Responsibilities" id="employer_Key_ResponS">
                        <span id="employer_Key_Respon_error" class="validation_error"></span>
                    </div>
                    <div class="fieldsTopSpace">
                        <div class="groupMainfeilds">
                            <div class="inner-input-fields">
                                <div class="groupMainfeilds">
                                    <div class="inner-input-fields">
                                        <label class="labelSizeForm sizeSmallFont">From</label>
                                        <input type="date" class="form-custom-cntrl" name="stud_employment_details_formTwo" placeholder="From" id="stud_employment_de_formTwoS">
                                        <span id="stud_employmentwo__error" class="validation_error"></span>
                                    </div>
                                    <div class="inner-input-fields">
                                        <label class="labelSizeForm sizeSmallFont">To</label>
                                        <input type="date" class="form-custom-cntrl" name="stud_employment_details_toTwo" placeholder="To" id="stud_employment_details_toTwS">
                                        <span id="stud_employment_details_toTwo_error" class="validation_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-input-fields">
                                <label class="labelSizeForm sizeSmallFont">Position held</label>
                                <input type="text" class="form-custom-cntrl" name="stud_employment_Position_heldTwo" id="stud_employment_Position_heldTwoS" placeholder="Position held">
                                <span id="stud_employment_Position_heldTwo_error" class="validation_error"></span>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Name and address of employer</label>
                            <input type="text" class="form-custom-cntrl" name="Employer_name_addressTwo" placeholder="Name and address of employer" id="Employer_name_addressTwoS">
                            <span id="Employer_name_addressTwo_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Key Responsibilities</label>
                            <input type="text" class="form-custom-cntrl" name="employer_Key_ResponTwo" placeholder="Key Responsibilities" id="employer_Key_ResponTwoS">
                            <span id="employer_Key_ResponTwo_error" class="validation_error"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="hidden" name="next" class="next Seven_button " value="Next" />
                <input type="button" name="next" id="Seven_button" class="next action-button" value="Next" />
            </div>
        </div>
    </fieldset>
  <!--<fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 9 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <h3 class="text-theme-grn"> Interests and Hobbies</h3>
                </div>
                <div class="fields-input-main">
                    <div class="inner-input-fields">
                        <textarea type="textarea" class="resize-none form-custom-textarea" name="Student_Hob_Intere" rows="6" id="Student_Hob_IntereS"></textarea>
                        <span id="Student_Hob_Intere_error" class="validation_error"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="button" name="next" class="next action-button" value="Next" />
            </div>
        </div>
    </fieldset>
   <fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 10 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <h3 class="text-theme-grn"> Family information</h3>
                </div>
                <div class="fields-input-main">
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Father's name</label>
                            <input type="text" class="form-custom-cntrl" name="Student_fathe_name" placeholder="Father's name" id="Student_fathe_nameS">
                            <span id="Student_fathe_name_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Profession</label>
                            <input type="text" class="form-custom-cntrl" name="Stud_father_Profes" placeholder="Profession" id="Stud_father_ProfesS">
                            <span id="Stud_father_Profes_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Father's education</label>
                            <input type="text" class="form-custom-cntrl" name="StudentFeducation" placeholder="Father's education" id="StudentFeducationS">
                            <span id="StudentFeducation_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Tel. No</label>
                            <input type="text" class="form-custom-cntrl" name="Stude_F_No" id="Stude_F_NoID" placeholder="Tel. No">
                            <span id="Stude_F_No_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="inner-input-fields">
                        <label class="labelSizeForm">Job address</label>
                        <textarea type="textarea" class="resize-none form-custom-textarea" name="Stude_fJobAddres" rows="4" placeholder="Job Address" id="Stude_fJobAddresS"></textarea>
                        <span id="Stude_fJobAddres_error" class="validation_error"></span>
                    </div>
                    <div class="fieldsTopSpace">
                        <div class="groupMainfeilds">
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Mother's name</label>
                                <input type="text" class="form-custom-cntrl" name="Student_Mothe_name" placeholder="Mother's name" id="Student_Mothe_nameS">
                                <span id="Student_Mothe_name_error" class="validation_error"></span>
                            </div>
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Profession</label>
                                <input type="text" class="form-custom-cntrl" name="Stud_mother_Profes" placeholder="Profession" id="Stud_mother_ProfesS">
                                <span id="Stud_mother_Profes_error" class="validation_error"></span>
                            </div>
                        </div>
                        <div class="groupMainfeilds">
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Mother's education</label>
                                <input type="text" class="form-custom-cntrl" name="StudentMeducation" placeholder="Mother's education" id="StudentMeducationS">
                                <span id="StudentMeducation_error" class="validation_error"></span>
                            </div>
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Tel. No</label>
                                <input type="text" class="form-custom-cntrl" id="Stude_M_NoS" name="Stude_M_No" placeholder="Tel. No">
                                <span id="Stude_M_No_error" class="validation_error"></span>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm">Job address</label>
                            <textarea type="textarea" class="resize-none form-custom-textarea" name="Stude_MJobAddres" rows="4" placeholder="Job Address" id="Stude_MJobAddresS"></textarea>
                            <span id="Stude_MJobAddres_error" class="validation_error"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="hidden" name="next" class="next Eight_button " value="Next" />
                <input type="button" name="next" id="Eight_button" class="next action-button" value="Next" />
            </div>
        </div>
    </fieldset> -->
   <fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 11 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <h3 class="text-theme-grn"> Marketing Information</h3>
                </div>
                <h4 class="labelSizeForm"> It would be helpful if you could indicate where you heard about St. Joseph University by ticking the appropriate box:</h4>
                <div class="fields-input-main mrgnTop20">
                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input id="addvrtsmnt" type="checkbox" class="form-custom-checkbox" value="A" name="approprite">
                                    <label for="addvrtsmnt" class="labelCheckCnt">
                                        <span class="mainCheckTick">
                                            <img src="/wp-content/uploads/2023/04/uncheck.png" class="uncheckTick">
                                            <img src="/wp-content/uploads/2023/04/checked.png" class="checkTick">
                                        </span>
                                        Advertisement
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <input type="text" class="form-custom-cntrl" name="Advertisement_Specify" placeholder="Please Specify" id="Advertisement_SpecifyS" disabled>
                            <span id="Advertisement_Specify_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input id="Education" type="checkbox" class="form-custom-checkbox" name="appropriteOne">
                                    <label for="Education" class="labelCheckCnt">
                                        <span class="mainCheckTick">
                                            <img src="/wp-content/uploads/2023/04/uncheck.png" class="uncheckTick">
                                            <img src="/wp-content/uploads/2023/04/checked.png" class="checkTick">
                                        </span>
                                        Advertisement
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <input type="text" class="form-custom-cntrl" name="Advertisement_SpecifyOne" placeholder="Please Specify" id="Advertisement_SpecifyOneS" disabled>
                            <span id="Advertisement_SpecifyOne_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input id="internetS" type="checkbox" class="form-custom-checkbox" name="appropriteTWO">
                                    <label for="internetS" class="labelCheckCnt">
                                        <span class="mainCheckTick">
                                            <img src="/wp-content/uploads/2023/04/uncheck.png" class="uncheckTick">
                                            <img src="/wp-content/uploads/2023/04/checked.png" class="checkTick">
                                        </span>
                                        Advertisement
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <input type="text" class="form-custom-cntrl" name="Advertisement_SpecifyTWO" placeholder="Please Specify" id="Advertisement_SpecifyTWOS" disabled>
                            <span id="Advertisement_SpecifyTWO_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input id="recommendation" type="checkbox" class="form-custom-checkbox" name="appropriteThree">
                                    <label for="recommendation" class="labelCheckCnt">
                                        <span class="mainCheckTick">
                                            <img src="/wp-content/uploads/2023/04/uncheck.png" class="uncheckTick">
                                            <img src="/wp-content/uploads/2023/04/checked.png" class="checkTick">
                                        </span>
                                        Personal recommendation by friends/alumni/other
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <input type="text" class="form-custom-cntrl" name="Advertisement_SpecifyFO" placeholder="Please Specify" id="Advertisement_SpecifyFOS" disabled>
                            <span id="Advertisement_SpecifyFO_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm">I am a CITY College alumnus/a</h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input id="alumnusYs" type="radio" class="form-custom-checkbox" value="YES" name="alumnus">
                                    <label for="alumnusYs" class="labelCheckCnt">
                                        <span class="mainCheckTick">
                                            <img src="/wp-content/uploads/2023/04/uncheck.png" class="uncheckTick">
                                            <img src="/wp-content/uploads/2023/04/checked.png" class="checkTick">
                                        </span>
                                        Yes
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input id="alumnusNo" type="radio" class="form-custom-checkbox" value="No" name="alumnus">
                                    <label for="alumnusNo" class="labelCheckCnt">
                                        <span class="mainCheckTick">
                                            <img src="/wp-content/uploads/2023/04/uncheck.png" class="uncheckTick">
                                            <img src="/wp-content/uploads/2023/04/checked.png" class="checkTick">
                                        </span>
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <input type="text" class="form-custom-cntrl" name="Specify_City_college" placeholder="Please Specify" id="Specify_City_collegeS" disabled>
                            <span id="Specify_City_college_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input id="otherLast" type="checkbox" value="other" name="checkboox_other" class="form-custom-checkbox" name="approprite_other">
                                    <label for="otherLast" class="labelCheckCnt">
                                        <span class="mainCheckTick">
                                            <img src="/wp-content/uploads/2023/04/uncheck.png" class="uncheckTick">
                                            <img src="/wp-content/uploads/2023/04/checked.png" class="checkTick">
                                        </span>
                                        Other
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <input type="text" class="form-custom-cntrl" name="Specify_other" placeholder="Please Specify" id="Specify_otherS" disabled>
                            <span id="Specify_other_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="inner-input-fields">
                        <h4 class="labelSizeForm">It would be helpful if you could let us know which other Universities/ Colleges/Institutions you have applied to</h4>
                    </div>
                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">University/College/Institution</label>
                            <textarea type="textarea" class="resize-none form-custom-textarea" name="Student_Uni_Colleg" rows="5" id="Student_Uni_CollegS"></textarea>
                            <span id="Student_Uni_Colleg_error" class="validation_error"></span>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">Course title</label>
                            <textarea type="textarea" class="resize-none form-custom-textarea" name="course_name_Tit" rows="5" id="course_name_TitS"></textarea>
                            <span id="course_name_Tit_error" class="validation_error"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="button" name="next" class="next action-button" value="Next" />
            </div>
        </div>
    </fieldset> 
  <!--  <fieldset>
        <div class="form-card">
            <h4 class="stepsCount">Step 12 - 14</h4>
            <div class="mainContentStyleForm align-left">
                <div class="innerContentForm">
                    <h3 class="text-theme-grn">Checklist</h3>
                </div>
                <h4 class="labelSizeForm"> Please indicate which of the following items you have sent with your ap Certified Copy of the High School Transcript Enclosed</h4>
                <div class="fields-input-main mrgnTop20">
                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm sizeSmallFont">Certified Copy of the High School Transcript</h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="enclosed1" class="form-custom-radio" name="Stud_Highg_enclosed1">
                                    <label class="labelRadioCnt" for="enclosed1">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Enclosed
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="week1" class="form-custom-radio" name="Stud_High_SentTwoWeek">
                                    <label class="labelRadioCnt" for="week1">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Will be sent within 2 weeks
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">Will be sent by</label>
                            <input type="date" class="form-custom-cntrl" name="Stud_highSent_byDate" id="Stud_highSent_byDateS" placeholder="" disabled>
                            <span id="Stud_highSent_byDate_error" class="validation_error"></span>
                        </div>
                    </div>
                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm sizeSmallFont">Certified Copy of the High School Transcript</h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="enclosedd1" class="form-custom-radio" name="Stud_Highg_enclosed2">
                                    <label class="labelRadioCnt" for="enclosedd1">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Enclosed
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="weekk1" class="form-custom-radio" name="Stud_High_SentTwoWeek2">
                                    <label class="labelRadioCnt" for="weekk1">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Will be sent within 2 weeks
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">Will be sent by</label>
                            <input type="date" class="form-custom-cntrl" name="Stud_highSent_byDate2" placeholder="" id="Stud_highSent_byDate2S" disabled>
                            <span id="Stud_highSent_byDate2_error" class="validation_error"></span>
                        </div>
                    </div>

                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm sizeSmallFont">Certified Translation of the High School</h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="enclosed3" class="form-custom-radio" name="stud_Highg_enclosed3">
                                    <label class="labelRadioCnt" for="enclosed3">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Enclosed
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="week3" class="form-custom-radio" name="Stud_High_SentTwoWeek3">
                                    <label class="labelRadioCnt" for="week3">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Will be sent within 2 weeks
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">Will be sent by</label>
                            <input type="date" class="form-custom-cntrl" name="Stud_highSent_byDate3" id="Stud_highSent_byDate3S" placeholder="" disabled>
                            <span id="Stud_highSent_byDate3_error" class="validation_error"></span>
                        </div>
                    </div>

                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm sizeSmallFont">Leaving Certificate</h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="enclosed4" class="form-custom-radio" name="Stude_leaving_Caertificate">
                                    <label class="labelRadioCnt" for="enclosed4">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Enclosed
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="week4" class="form-custom-radio" name="Stud_High_SentTwoWeek4">
                                    <label class="labelRadioCnt" for="week4">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Will be sent within 2 weeks
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">Will be sent by</label>
                            <input type="date" class="form-custom-cntrl" name="Stud_highSent_byDate4" id="Stud_highSent_byDate4S" placeholder="" disabled>
                            <span id="Stud_highSent_byDate4_error" class="validation_error"></span>
                        </div>
                    </div>


                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm sizeSmallFont">English Language Test Scores/Certificate</h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="enclosed5" class="form-custom-radio" name="Stud_English_testScoreore">
                                    <label class="labelRadioCnt" for="enclosed5">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Enclosed
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="week5" class="form-custom-radio" name="Stud_High_SentTwoWeek5">
                                    <label class="labelRadioCnt" for="week5">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Will be sent within 2 weeks
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">Will be sent by</label>
                            <input type="date" class="form-custom-cntrl" name="Stud_highSent_byDate5" placeholder="" id="Stud_highSent_byDate5ID" disabled>
                            <span id="Stud_highSent_byDate54_error" class="validation_error"></span>
                        </div>
                    </div>


                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm sizeSmallFont">Copy of passport or ID</h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="enclosed6" class="form-custom-radio" name="Student_CopyPassportID">
                                    <label class="labelRadioCnt" for="enclosed6">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Enclosed
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="week6" class="form-custom-radio" name="Stud_High_SentTwoWeek6">
                                    <label class="labelRadioCnt" for="week6">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Will be sent within 2 weeks
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">Will be sent by</label>
                            <input type="date" class="form-custom-cntrl" name="Stud_highSent_byDate6" placeholder="" id="Stud_highSent_byDates" disabled>
                            <span id="Stud_highSent_byDate6_error" class="validation_error"></span>
                        </div>
                    </div>


                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm sizeSmallFont">Photograph </h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="enclosed7" class="form-custom-radio" name="Student_Photograph">
                                    <label class="labelRadioCnt" for="enclosed7">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Enclosed
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="week7" class="form-custom-radio" name="Stud_High_SentTwoWeek7">
                                    <label class="labelRadioCnt" for="week7">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Will be sent within 2 weeks
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">Will be sent by</label>
                            <input type="date" class="form-custom-cntrl" name="Stud_highSent_byDate7" placeholder="" id="Stud_highSent_byDater" disabled>
                            <span id="Stud_highSent_byDate7_error" class="validation_error"></span>
                        </div>
                    </div>



                    <div class="groupMainfeilds mrgnBtm20">
                        <div class="inner-input-fields">
                            <h4 class="labelSizeForm sizeSmallFont">Registration Fee Payment Slip </h4>
                            <div class="checkboxGrpCustom topSpaceAdd">
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="enclosed8" class="form-custom-radio" name="Stude_Registration_Fee">
                                    <label class="labelRadioCnt" for="enclosed8">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Enclosed
                                    </label>
                                </div>
                                <div class="inner-col-checkbox">
                                    <input type="checkbox" id="week8" class="form-custom-radio" name="Stud_High_SentTwoWeek8">
                                    <label class="labelRadioCnt" for="week8">
                                        <span class="checkImgStle"><img src="/wp-content/uploads/2023/04/checkIcon.png"></span>
                                        Will be sent within 2 weeks
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="inner-input-fields">
                            <label class="labelSizeForm sizeSmallFont">Will be sent by</label>
                            <input type="date" class="form-custom-cntrl" name="Stud_highSent_byDate8" id="Stud_highSent_byDateSr" placeholder="" disabled>
                            <span id="Stud_highSent_byDate8_error" class="validation_error"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="hidden" name="next" class="next nine_button " value="Next" />
                <input type="button" name="next" id="nine_button" class="action-button" value="Next" />
            </div>
        </div>
    </fieldset> 
	<fieldset>
        <div class="form-card align-left">
            <h4 class="stepsCount">Step 13 - 14</h4>
            <div class="mainContentStyleForm  align-left">
                <div class="innerContentForm">
                    <h2 class="align-center">Declaration </h2>
                </div>
                <div class="innerContentForm">
                    <p>All decisions by the University are made in good faith on the basis of the information you provide in your application form. If we discover that you have made a false statement or have failed to provide significant and relevant information, we are entitled to withdraw or amend the offer, according to the circumstances. You may even be required to withdraw from the course if you have already started it. In accordance with General Data Protection Regulation (GDPR), the information contained in this application will be used for the purpose of processing your application and, if you are admitted, will form the basis of your student record. </p>
                    <p>I confirm to the best of my knowledge that the information I have provided in this application is complete and accurate. </p>
                    <p>I understand that any offer of admission as an undergraduate student that I may receive, will be based upon the information given in this form, and that if I am found to have given false information, the offer may be withdrawn.</p>
                    <p>I understand that the information supplied on this form will be retained by St. Joseph University, Dominica and will be used for the purpose of processing my application and collecting feedback on the admissions process. In addition, application data may be used for research purposes to better understand general recruitment and admissions administration including the analysis of applicant numbers and trends to improve the student experience and for strategic planning purposes.</p>
                    <p>Data will not be used in a way that identifies any individual and will be managed in accordance with the General Data Protection Regulation (GDPR). In the event that my application is successful, I understand that the information will form part of my student record. If admitted to the University, I agree to abide by the Regulations of St. Joseph University, being in force at the moment.</p>
                    <p>I authorise the college to use photographs taken from social or other college activities, in which I might appear, for promotional purposes</p>

                </div>
                <div class="innerContentForm contactDetailContent">
                    <h4>Please return the completed form to </h4>
                    <p>St. Joseph University</p>
                    <p>Office of Admissions</p>
                    <p>3rd - 6th Floor Adams Tower,</p>
                    <p>Cnr Great Marlborough & Great George St, Roseau,</p>
                    <p>Email: <a href="mailto:admissions@stjosephuniversity.edu.dm">admissions@stjosephuniversity.edu.dm</a></p>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
               
               <input type="button" name="next" class="next action-button" value="Next" />
            </div>
        </div>
    </fieldset>-->
    <!-- <div class="btnThemeInput commonBtnInput">
        <input type="submit" name="submit_form" class="action-button" value="submit" />
    </div> -->
    <fieldset>
    
        <div class="form-card align-left">
            <h4 class="stepsCount">Step 14 - 14</h4>
            <div class="mainContentStyleForm  align-left">
                <div class="innerContentForm">
                    <h2 class="align-center">Payment Details </h2>
                </div>
                 
                <div class="main-payment-method">
                    <div class="col-feild-payment">
                        <h4 class="paymentTitleInner">Payment Method</h4>
                        <div class="selectPaymentOption">
                            <div class="innerPaymentOption">
                                <input type="radio" class="inputClickStyle" name="payment-selected" id="visaCard" value="pm_card_visa" />
                                <label for="visaCard">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/04/visa-card-logo-9.png"  alt="VisaCard"  />
                                </label>
                            </div>
                            <div class="innerPaymentOption">
                                <input type="radio" class="inputClickStyle" name="payment-selected" id="mstrCard" value="pm_card_mastercard" />
                                <label for="mstrCard">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/04/MasterCard_Logo.png" alt="MasterCard"/>
                                </label>
                            </div>
                            <div class="innerPaymentOption">
                                <input type="radio" class="inputClickStyle" name="payment-selected" id="amrcnExpress" value= "pm_card_amex"/>
                                <label for="amrcnExpress">
                                    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/04/American_express.png" alt="AmericanExpress"/>
                                </label>
                            </div>
                        </div> <span id="paymentcheck" class="validation_error"></span>
                        <div class="mainPaymentField">
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Cardholder Name</label>
                                <input type="text" name="CardholderName"  class="form-custom-cntrl" >
                            </div>
                             <span id="Cardholder_error" class="validation_error"></span>
                            <div class="inner-input-fields">
                                <label class="labelSizeForm">Card Number</label>
                                <input type="number" name="CardNumber" class="form-custom-cntrl" id="card_number" value="4242424242424242">
                            </div>
							<span id="CARDNnumber_error" class="validation_error"></span>
                      
                            <div class="groupMainfeilds mrgnBtm20">
                                <div class="inner-input-fields">
                                    <label class="labelSizeForm">Expiry Month</label>
                                    <input type="tel" maxlength="2" name="ExpirationMonth" class="form-custom-cntrl" id="exp_month" placeholder="MM" >
									<span id="CARDEXPIRYMONTH_error" class="validation_error"></span>
                                </div>
								
                                 <div class="inner-input-fields">
                                    <label class="labelSizeForm">Expiry Year</label>
                                    <input type="tel" maxlength="4" name="ExpirYear" class="form-custom-cntrl" id="exp_Year" placeholder="YY" >
									<span id="CARDEXPIRYyear_error" class="validation_error"></span>
                                </div>
                                <div class="inner-input-fields">
                                    <label class="labelSizeForm">CVV</label>
                                    <input type="number"  name="cvvNumber" maxlength="3" class="form-custom-cntrl" id="cvc_number" placeholder="123" >
									<span id="CARDEXPIRYcvv_error" class="validation_error"></span>
                                </div>
                                
                            </div>
                             <span id="cvvNumber_error" class="validation_error"></span>

                        </div>
                        <span id="CardNumber_error" class="validationcard_erro"></span>
                        <input type="hidden" name="Selecteerror" id="SelectedAmoerror" >
                    </div>
                    <div class="payment-total-desc">
                        <h3 class="rightPaymentText">Payment method</h3>
                        <ul class="listPaymentStyle">
                            <li>
                                <span class="keyName">Your Selected Program</span>
                                <span class="valueName" id="Selectcource"></span>
                                <input type="hidden" name="selectcourse" id="Selectcources" >
                            </li>
                            <li>
                                <span class="keyName">Time Mode</span>
                                <span class="valueName" id="course-Sem-and-Full"></span>
                                <input type="hidden" name="selectco" id="courseSemandFulls" value="" />
                            </li>
                            <li>
                                <span class="keyName">Program Amount</span>
                                <span class="valueName">$ <span  id="SelectAmount"></span></span>
								<input type="hidden" name="SelectedAmount" id="SelectedAmounts" >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="buttonGrpStepFrm">
            <div class="btnScndryInput commonBtnInput">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
            </div>
            <div class="btnThemeInput commonBtnInput">
                <input type="submit" name="submit_form" id="amountvalue" class="action-button ajaxcallsuvmit"  value="Pay $4,500" />
            </div>
        </div>
    </fieldset>
    
    </form>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
 <script type="text/javascript" src="https://sandbox-assets.secure.checkout.visa.com/checkout-widget/resources/js/integration/v1/sdk.js"></script><script>
            Stripe.setPublishableKey('pk_test_51M6vIYSIQBtPanH4Z9pGHR2AYQYYJnfVc1mOkpR99a5uoNn5amgNKYLerJS6w0KQdwvlqx2JJR2d84k59FAv6Epn00a6mS1rwD');
        </script>
<script>

 

    (function($) {

        const progress = document.querySelector('.progress-done');
        progress.style.width = progress.getAttribute('data-done') + '%';
        progress.style.opacity = 1;
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imageShowPreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imageShowPreview').hide();
                    $('#imageShowPreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#fileUploadStyle").change(function() {
            readURL(this);
        });


        // $(".single").select2({
        //     placeholder: "Please Select",
        //     allowClear: true
        // });
        // $("#multiple").select2({
        //     placeholder: "Please Select",
        //     allowClear: true
        // });
        let fileInput = document.getElementById("file-upload-cstm-input");
        let fileSelect = document.getElementsByClassName("file-upload-cstm-select")[0];
        fileSelect.onclick = function() {
            fileInput.click();
        }
        fileInput.onchange = function() {
            let filename = fileInput.files[0].name;
            let selectName = document.getElementsByClassName("file-select-name")[0];
            selectName.innerText = filename;
        }

    });

    jQuery(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = jQuery("fieldset").length;

        setProgressBar(current);

        jQuery(".next").click(function() {

            current_fs = jQuery(this).parent().parent().parent();
            next_fs = jQuery(this).parent().parent().parent().next();
            console.log(current_fs);
            console.log(current_fs);
            //Add Class Active
            // jQuery("#progressbar li").eq(jQuery("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        jQuery(".previous").click(function() {

            current_fs = jQuery(this).parent().parent().parent();
            previous_fs = jQuery(this).parent().parent().parent().prev();

            //Remove class active
            // jQuery("#progressbar li").eq(jQuery("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            jQuery(".progress-bar").css("width", percent + "%");
            jQuery(".progress-bar").html(percent + '%');
        }

        jQuery(".submit").click(function() {
            return false;
        })

    });


jQuery(document).ready(function() {
jQuery("#First_button").click(function(event) {
            event.preventDefault();
         
            jQuery("#Error_Image").text('');
            jQuery("#Student_Surname_error").text('');
            jQuery("#Student_FOrename_error").text('');
            jQuery("#Student_Father_name_error").text('');
            jQuery("#Student_Mother_name_error").text('');
            jQuery("#Student_Date_of_birth_error").text('');
            jQuery("#Student_place_of_birth_error").text('');
            jQuery("#Student_Nationality_error").text('');
            jQuery("#Student_ID_Card_No_error").text('');
            jQuery("#Student_Card_issue_date_error").text('');
            jQuery("#Student_Passport_number_error").text('');
            jQuery("#Student_Pass_date_issue_error").text('');
            jQuery("#Student_Pass_valid_until_error").text('');

            var A1 = jQuery("#fileUploadStyle").val();
            var A2 = jQuery("#Student_Surnames").val();
            var A3 = jQuery("#Student_FOrenames").val();
            var A4 = jQuery("#Student_Father_names").val();
            var A5 = jQuery("#Student_Mother_names").val();
            var A6 = jQuery("#Student_Date_of_birthS").val();
            var A7 = jQuery("#Student_place_of_births").val();
            var A8 = jQuery("#Student_Nationalitys").val();
            var A9 = jQuery("#Student_ID_Card_Nos").val();
            var A10 = jQuery("#Student_Card_issue_dates").val();
            var A11 = jQuery("#Student_Passport_numbers").val();
            var A12 = jQuery("#Student_Pass_date_issues").val();
            var A13 = jQuery("#Student_Pass_valid_untils").val();


            if (A1 == "" && A2 == "" && A4 == "" && A5 == "" && A6 == "" && A7 == "" && A8 == "" && A9 == "" && A10 == "" && A11 == "" && A12 == "" && A13 == "") {


                jQuery("#Error_Image").text("Please Add image");
                jQuery("#Student_Surname_error").text("Enter the name");
                jQuery("#Student_FOrename_error").text("Enter the name");
                jQuery("#Student_Father_name_error").text("Please Enter father name");
                jQuery("#Student_Mother_name_error").text("Please Enter mother name");
                jQuery("#Student_Date_of_birth_error").text("Please Enter Date of birth");
                jQuery("#Student_place_of_birth_error").text("Please Enter place  of birth");
                jQuery("#Student_Nationality_error").text("please Enter the Nationality");
                jQuery("#Student_ID_Card_No_error").text("Enter the ID card");
                jQuery("#Student_Card_issue_date_error").text("Enter the card issue Date");
                jQuery("#Student_Passport_number_error").text("Enter the Passport Number");
                jQuery("#Student_Pass_date_issue_error").text("Enter the Passport issue Date");
                jQuery("#Student_Pass_valid_until_error").text("Enter the valid date");
                return false;

            } else if (A1 == "") {

                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
                jQuery("#Error_Image").text("Please Add image");
				
				// window.setTimeout(function() {
				// jQuery('#Error_Image').fadeOut("slow");
				// }, 3000 );
				
                return false;

            } else if (A2 == "") {

                jQuery("#Error_Image").text('');
                jQuery("#Student_Surname_error").text("Enter the name");
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
				// window.setTimeout(function() {
				// jQuery('#Student_Surname_error').fadeOut("slow");
				// }, 3000 );
				
                return false;

            } else if (A3 == "") {

                jQuery("#Error_Image").text('');
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text("Enter the name");
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
				
                return false;

            } else if (A4 == "") {
                jQuery("#Error_Image").text();
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text("Please Enter father name");
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
					
                return false;
            } else if (A5 == "") {
                jQuery("#Error_Image").text('');
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text("Please Enter mother name");
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
				
                return false;
            } else if (A6 === "") {
                jQuery("#Error_Image").text('');
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text("Please Enter Date of birth");
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
				
                return false;
            } else if (A7 == "") {
                jQuery("#Error_Image").text('');
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text("Please Enter place  of birth");
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
				
                return false;
            } else if (A8 == "") {
                jQuery("#Error_Image").text();
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text("please Enter the Nationality");
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
				// jQuery('#Student_Nationality_error').fadeOut("slow");
                return false;
            } else if (A9 == "") {
                jQuery("#Error_Image").text('');
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text("Enter the ID card");
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
				// jQuery('#Student_ID_Card_No_error').fadeOut("slow");
                return false;
            } else if (A10 == "") {
                jQuery("#Error_Image").text('');
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text("Enter the card issue Date");
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
				// jQuery('#Student_Card_issue_date_error').fadeOut("slow");
                return false;
            } else if (A11 == "") {
                jQuery("#Error_Image").text('');
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text("Enter the Passport Number");
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text('');
				// jQuery('#Student_Passport_number_error').fadeOut("slow");
                return false;
            } else if (A12 == "") {
                jQuery("#Error_Image").text('');
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text("Enter the Passport issue Date");
                jQuery("#Student_Pass_valid_until_error").text('');
                return false;
            } else if (A13 == "") {
                jQuery("#Error_Image").text('');
                jQuery("#Student_Surname_error").text('');
                jQuery("#Student_FOrename_error").text('');
                jQuery("#Student_Father_name_error").text('');
                jQuery("#Student_Mother_name_error").text('');
                jQuery("#Student_Date_of_birth_error").text('');
                jQuery("#Student_place_of_birth_error").text('');
                jQuery("#Student_Nationality_error").text('');
                jQuery("#Student_ID_Card_No_error").text('');
                jQuery("#Student_Card_issue_date_error").text('');
                jQuery("#Student_Passport_number_error").text('');
                jQuery("#Student_Pass_date_issue_error").text('');
                jQuery("#Student_Pass_valid_until_error").text("Enter the valid date");
                return false;
            }else {

                jQuery(".next.First_button").trigger("click");
            

            }
             

            
    

        });

        jQuery("#third_button").click(function(event) {
            event.preventDefault();
             jQuery('#AllCourse_error').text("");
             var Course =jQuery("select[name='AllCourse']").val();
             var Fee =jQuery("input[name='Stud_attendance']:checked").val();

             console.log(Course);
             console.log(Fee);
              if( Course == null && Fee == undefined ) {

                jQuery('#AllCourse_error').text("Select above course for fee");
                jQuery('#AllCousame_error').text("Select above  fee");
                return false;

              } else if(Course == null)
              {
                jQuery('#AllCourse_error').text("Select above course for fee");
                jQuery('#AllCousame_error').text("");
                 return false;

              } else if(Fee == undefined) {
                
                jQuery('#AllCourse_error').text("");
                jQuery('#AllCousame_error').text("Select above  fee");
                 return false;
             }else {
                jQuery(".next.third_button").trigger("click");
             }


            
            
           
        });

        jQuery("#secound_button").click(function(event) {
            event.preventDefault();

            jQuery("#Permanent_Home_Add_error").text('');
            jQuery("#Stude_Post_code_error").text('');
            jQuery("#StudentTelNo_error").text('');
            jQuery("#Student_Mobile_number_error").text('');
            jQuery("#Student_Email_error").text('');
            jQuery("#contactable_add_Dates_form_error").text('');
            jQuery("#contactable_add_Dates_to_error").text('');

            var C1 = jQuery("#Permanent_Home_Adds").val();
            var C2 = jQuery("#Stude_Post_codes").val();
            var C3 = jQuery("#StudentTelNos").val();
            var C4 = jQuery("#Student_Mobile_numbers").val();
            var C5 = jQuery("#Student_Emails").val();
            var C6 = jQuery("#contactable_add_Dates_forms").val();
            var C7 = jQuery("#contactable_add_Dates_tos").val();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (C1 == "" && C2 == "" && C3 == "" && C4 == "" && C5 == "" && C6 == "" && C7 == "") {

                jQuery("#Permanent_Home_Add_error").text("Enter the Permanent Address");
                jQuery("#Stude_Post_code_error").text(" Enter the post code");
                jQuery("#StudentTelNo_error").text(" Enter the  Telephone number");
                jQuery("#Student_Mobile_number_error").text("Enter the phone number");
                jQuery("#Student_Email_error").text(" Enter the Email Address");
                jQuery("#contactable_add_Dates_form_error").text("Please Enter the date  form");
                jQuery("#contactable_add_Dates_to_error").text("Please Enter the date To");
                return false;
            } else if (C1 == "") {
                jQuery("#Stude_Post_code_error").text('');
                jQuery("#StudentTelNo_error").text('');
                jQuery("#Student_Mobile_number_error").text('');
                jQuery("#Student_Email_error").text('');
                jQuery("#contactable_add_Dates_form_error").text('');
                jQuery("#contactable_add_Dates_to_error").text('');
                jQuery("#Permanent_Home_Add_error").text("Enter the Permanent Address");
                return false;

            } else if (C2 == "") {

                 jQuery("#Permanent_Home_Add_error").text('');
                jQuery("#StudentTelNo_error").text('');
                jQuery("#Student_Mobile_number_error").text('');
                jQuery("#Student_Email_error").text('');
                jQuery("#contactable_add_Dates_form_error").text('');
                jQuery("#contactable_add_Dates_to_error").text('');
                jQuery("#Stude_Post_code_error").text(" Enter the post code");
                return false;
            } else if (C3 == "") {
                     jQuery("#Permanent_Home_Add_error").text('');
                    // jQuery("#labelFirst_error").text();
                    jQuery("#Stude_Post_code_error").text('');
                    jQuery("#Student_Mobile_number_error").text('');
                    jQuery("#Student_Email_error").text('');
                    jQuery("#contactable_add_Dates_form_error").text('');
                    jQuery("#contactable_add_Dates_to_error").text('');
                jQuery("#StudentTelNo_error").text(" Enter the  Telephone number");
                return false;

            } else if (C4 == "") {
                 jQuery("#Permanent_Home_Add_error").text('');
                jQuery("#Stude_Post_code_error").text('');
                jQuery("#StudentTelNo_error").text('');
                jQuery("#Student_Email_error").text('');
                jQuery("#contactable_add_Dates_form_error").text('');
                jQuery("#contactable_add_Dates_to_error").text('');
                jQuery("#Student_Mobile_number_error").text("Enter the phone number");
                return false;

            } else if (!emailPattern.test(C5)) {
               
                 jQuery("#Permanent_Home_Add_error").text('');
                jQuery("#Stude_Post_code_error").text('');
                jQuery("#StudentTelNo_error").text('');
                jQuery("#Student_Mobile_number_error").text('');
                jQuery("#contactable_add_Dates_form_error").text('');
                jQuery("#contactable_add_Dates_to_error").text('');

                jQuery("#Student_Email_error").text(" Enter the Email Address");
                return false;
            } else if (C6 == "") {


                 jQuery("#Permanent_Home_Add_error").text('');
                jQuery("#Stude_Post_code_error").text('');
                jQuery("#StudentTelNo_error").text('');
                jQuery("#Student_Mobile_number_error").text('');
                jQuery("#Student_Email_error").text('');
                jQuery("#contactable_add_Dates_to_error").text('');
                jQuery("#contactable_add_Dates_form_error").text("Please Enter the date Form");
                return false;

            } else if (C7 == "") {

                 jQuery("#Permanent_Home_Add_error").text('');
                jQuery("#Stude_Post_code_error").text('');
                jQuery("#StudentTelNo_error").text('');
                jQuery("#Student_Mobile_number_error").text('');
                jQuery("#Student_Email_error").text('');
                jQuery("#contactable_add_Dates_form_error").text('');
                
                jQuery("#contactable_add_Dates_to_error").text("Please Enter the date To");
                return false;
            } else {
                jQuery(".next.secound_button").trigger("click");
               

            }

        });
        jQuery("#fouth_button").click(function(event) {
            event.preventDefault();

            jQuery("#stude_other_funde_error").text();
            var Ab = jQuery("#stude_other_fundes").val();

            if (Ab == "") {
                jQuery("#stude_other_funde_error").text("Please Enter Specify ");
                return false;

            } else {
                jQuery(".next.fouth_button").trigger("click");
                

            }



        });
        jQuery("#Five_button").click(function(event) {
            event.preventDefault();

            jQuery("#Student_Qualification_error").text('');
            jQuery("#Student_School_error").text('');
            jQuery("#Student_score_error").text('');
            jQuery("#Stude_DateOf_Award_error").text('');

            var D1 = jQuery("#Student_Qualifications").val();
            var D2 = jQuery("#Student_Schools").val();
            var D3 = jQuery("#Student_score_id").val();
            var D4 = jQuery("#Stude_DateOf_Awards").val();


            if (D1 == "" && D2 == "" && D3 == "" && D4 == "") {

                jQuery("#Student_Qualification_error").text("Please Enter the Qualification");
                jQuery("#Student_School_error").text("Enter the College/Institution Name");
                jQuery("#Student_score_error").text("Enter the score/grade / GPA");
                jQuery("#Stude_DateOf_Award_error").text("Please Enter date Award");
                return false;


            } else if (D1 == "") {

                jQuery("#Student_School_error").text('');
                jQuery("#Student_score_error").text('');
                jQuery("#Stude_DateOf_Award_error").text('');
                jQuery("#Student_Qualification_error").text("Please Enter the Qualification");
                return false;


            } else if (D2 == "") {

                jQuery("#Student_Qualification_error").text('');
                jQuery("#Student_score_error").text('');
                jQuery("#Stude_DateOf_Award_error").text('');
                jQuery("#Student_School_error").text("Enter the College/Institution Name");
                return false;


            } else if (D3 == "") {

                jQuery("#Student_Qualification_error").text('');
                jQuery("#Student_School_error").text('');
                jQuery("#Stude_DateOf_Award_error").text('');
                jQuery("#Student_score_error").text("Enter the score/grade / GPA");
                return false;


            } else if (D4 == "") {

                jQuery("#Student_Qualification_error").text('');
                jQuery("#Student_School_error").text('');
                jQuery("#Student_score_error").text('');
                jQuery("#Stude_DateOf_Award_error").text("Please Enter date Award");
                return false;


            } else {
                jQuery(".next.Five_button").trigger("click");
               
            }

        });

        jQuery("#six_button").click(function(event) {
            event.preventDefault();

            jQuery("#State_language_error").text('');
            jQuery("#native_language_error").text('');
            jQuery("#file-upload-cstm-input_error").text('');
            jQuery("#Studemt_E_Qualification_error").text('');
            jQuery("#Student_Awarding_body_error").text('');
            jQuery("#Student_E_Score_error").text('');
            jQuery("#Stude_Date_of_award_error").text('');

            var E1 = jQuery("#State_languages").val();
            var E2 = jQuery("#native_languages").val();
            var E3 = jQuery("#file-upload-cstm-inputs").val();
            var E4 = jQuery("#Studemt_E_QualificationS").val();
            var E5 = jQuery("#Student_Awarding_bodyS").val();
            var E6 = jQuery("#Student_E_ScoreS").val();
            var E7 = jQuery("#Stude_Date_of_awardS").val();


            if (E1 == "" && E2 == "" && E3 == "" && E4 == "" && E5 == "" && E6 == "" && E7 == "") {

                jQuery("#State_language_error").text("Please Enter the State language");
                jQuery("#native_language_error").text("Please Enter the Native language");
                jQuery("#file-upload-cstm-input_error").text("Please Upload File");
                jQuery("#Studemt_E_Qualification_error").text("Please Enter Qualification");
                jQuery("#Student_Awarding_body_error").text("Please Fill  Awarding body Feild ");
                jQuery("#Student_E_Score_error").text("Enter the score/grade / GPA");
                jQuery("#Stude_Date_of_award_error").text("Please Enter date Award");
                return false;

            } else if (E1 == "") {

                jQuery("#native_language_error").text('');
                jQuery("#file-upload-cstm-input_error").text('');
                jQuery("#Studemt_E_Qualification_error").text('');
                jQuery("#Student_Awarding_body_error").text('');
                jQuery("#Student_E_Score_error").text('');
                jQuery("#Stude_Date_of_award_error").text('');
                jQuery("#State_language_error").text("Please Enter the State language");
                return false;

            } else if (E2 == "") {

                jQuery("#State_language_error").text('');
                jQuery("#file-upload-cstm-input_error").text('');
                jQuery("#Studemt_E_Qualification_error").text('');
                jQuery("#Student_Awarding_body_error").text('');
                jQuery("#Student_E_Score_error").text('');
                jQuery("#Stude_Date_of_award_error").text('');
                jQuery("#native_language_error").text("Please Enter the Native language");
                return false;

            } else if (E3 == "") {

                jQuery("#State_language_error").text('');
                jQuery("#native_language_error").text('');
                jQuery("#Studemt_E_Qualification_error").text('');
                jQuery("#Student_Awarding_body_error").text('');
                jQuery("#Student_E_Score_error").text('');
                jQuery("#Stude_Date_of_award_error").text('');
                jQuery("#file-upload-cstm-input_error").text("Please Upload File");
                return false;

            } else if (E4 == "") {

                jQuery("#State_language_error").text('');
                jQuery("#native_language_error").text('');
                jQuery("#file-upload-cstm-input_error").text('');
                jQuery("#Student_Awarding_body_error").text('');
                jQuery("#Student_E_Score_error").text('');
                jQuery("#Stude_Date_of_award_error").text('');
                jQuery("#Studemt_E_Qualification_error").text("Please Enter Qualification");
                return false;

            } else if (E5 == "") {
                jQuery("#State_language_error").text('');
                jQuery("#native_language_error").text('');
                jQuery("#file-upload-cstm-input_error").text('');
                jQuery("#Studemt_E_Qualification_error").text('');
                jQuery("#Student_E_Score_error").text('');
                jQuery("#Stude_Date_of_award_error").text('');
                jQuery("#Student_Awarding_body_error").text("Please Fill  Awarding body Feild ");
                return false;

            } else if (E6 == "") {
                jQuery("#State_language_error").text('');
                jQuery("#native_language_error").text('');
                jQuery("#file-upload-cstm-input_error").text('');
                jQuery("#Studemt_E_Qualification_error").text('');
                jQuery("#Student_Awarding_body_error").text('');
                jQuery("#Stude_Date_of_award_error").text('');
                jQuery("#Student_E_Score_error").text("Enter the score/grade / GPA");
                return false;

            } else if (E7 == "") {
                jQuery("#State_language_error").text('');
                jQuery("#native_language_error").text('');
                jQuery("#file-upload-cstm-input_error").text('');
                jQuery("#Studemt_E_Qualification_error").text('');
                jQuery("#Student_Awarding_body_error").text('');
                jQuery("#Student_E_Score_error").text('');
                jQuery("#Stude_Date_of_award_error").text("Please Enter date Award");
                return false;

            } else {
                jQuery(".next.six_button").trigger("click");
                

            }

        });

        jQuery("#nine_button").click(function() {
            event.preventDefault();

            jQuery("#Stud_highSent_byDate_error").text('');
            jQuery("#Stud_highSent_byDate2_error").text('');
            jQuery("#Stud_highSent_byDate3_error").text('');
            jQuery("#Stud_highSent_byDate4_error").text('');
            jQuery("#Stud_highSent_byDate54_error").text('');
            jQuery("#Stud_highSent_byDate6_error").text('');
            jQuery("#Stud_highSent_byDate7_error").text('');
            jQuery("#Stud_highSent_byDate8_error").text('');

            var F1 = jQuery("#Stud_highSent_byDateS").val();
            var F2 = jQuery("#Stud_highSent_byDate2S").val();
            var F3 = jQuery("#Stud_highSent_byDate3S").val();
            var F4 = jQuery("#Stud_highSent_byDate4S").val();
            var F5 = jQuery("#Stud_highSent_byDate5ID").val();
            var F6 = jQuery("#Stud_highSent_byDates").val();
            var F7 = jQuery("#Stud_highSent_byDater").val();
            var F8 = jQuery("#Stud_highSent_byDateSr").val();

            if (F1 == "" && F2 == "" && F3 == "" && F4 == "" && F5 == "" && F6 == "" && F7 == "" && F8 == "") {

                jQuery("#Stud_highSent_byDate_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate2_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate3_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate4_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate54_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate6_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate7_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate8_error").text("Fill the fields");
                return false;
            } else if (F1 == "") {

                jQuery("#Stud_highSent_byDate_error").text("Fill the feild");
                jQuery("#Stud_highSent_byDate2_error").text('');
                jQuery("#Stud_highSent_byDate3_error").text('');
                jQuery("#Stud_highSent_byDate4_error").text('');
                jQuery("#Stud_highSent_byDate54_error").text('');
                jQuery("#Stud_highSent_byDate6_error").text('');
                jQuery("#Stud_highSent_byDate7_error").text('');
                jQuery("#Stud_highSent_byDate8_error").text('');
			// 		jQuery('#Stud_highSent_byDate_error').fadeOut("slow");
                // return false;
            } else if (F2 == "") {

                jQuery("#Stud_highSent_byDate_error").text('');
                jQuery("#Stud_highSent_byDate2_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate3_error").text('');
                jQuery("#Stud_highSent_byDate4_error").text('');
                jQuery("#Stud_highSent_byDate54_error").text('');
                jQuery("#Stud_highSent_byDate6_error").text('');
                jQuery("#Stud_highSent_byDate7_error").text('');
                jQuery("#Stud_highSent_byDate8_error").text('');
				
                return false;
            } else if (F3 == "") {

                jQuery("#Stud_highSent_byDate_error").text('');
                jQuery("#Stud_highSent_byDate2_error").text('');
                jQuery("#Stud_highSent_byDate3_error").text("Fill the feild");
                jQuery("#Stud_highSent_byDate4_error").text('');
                jQuery("#Stud_highSent_byDate54_error").text('');
                jQuery("#Stud_highSent_byDate6_error").text('');
                jQuery("#Stud_highSent_byDate7_error").text('');
                jQuery("#Stud_highSent_byDate8_error").text('');
                return false;
            } else if (F4 == "") {

                jQuery("#Stud_highSent_byDate_error").text('');
                jQuery("#Stud_highSent_byDate2_error").text('');
                jQuery("#Stud_highSent_byDate3_error").text('');
                jQuery("#Stud_highSent_byDate4_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate54_error").text('');
                jQuery("#Stud_highSent_byDate6_error").text('');
                jQuery("#Stud_highSent_byDate7_error").text('');
                jQuery("#Stud_highSent_byDate8_error").text('');
                return false;
            } else if (F5 == "") {

                jQuery("#Stud_highSent_byDate_error").text('');
                jQuery("#Stud_highSent_byDate2_error").text('');
                jQuery("#Stud_highSent_byDate3_error").text('');
                jQuery("#Stud_highSent_byDate4_error").text('');
                jQuery("#Stud_highSent_byDate54_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate6_error").text('');
                jQuery("#Stud_highSent_byDate7_error").text('');
                jQuery("#Stud_highSent_byDate8_error").text('');
                return false;
            } else if (F6 == "") {
                jQuery("#Stud_highSent_byDate_error").text('');
                jQuery("#Stud_highSent_byDate2_error").text('');
                jQuery("#Stud_highSent_byDate3_error").text('');
                jQuery("#Stud_highSent_byDate4_error").text('');
                jQuery("#Stud_highSent_byDate54_error").text('');
                jQuery("#Stud_highSent_byDate6_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate7_error").text('');
                jQuery("#Stud_highSent_byDate8_error").text('');
                return false;
            } else if (F7 == "") {
                jQuery("#Stud_highSent_byDate_error").text('');
                jQuery("#Stud_highSent_byDate2_error").text('');
                jQuery("#Stud_highSent_byDate3_error").text('');
                jQuery("#Stud_highSent_byDate4_error").text('');
                jQuery("#Stud_highSent_byDate54_error").text('');
                jQuery("#Stud_highSent_byDate6_error").text('');
                jQuery("#Stud_highSent_byDate7_error").text("Fill the fields");
                jQuery("#Stud_highSent_byDate8_error").text('');
                return false;
            } else if (F8 == "") {
                jQuery("#Stud_highSent_byDate_error").text('');
                jQuery("#Stud_highSent_byDate2_error").text('');
                jQuery("#Stud_highSent_byDate3_error").text('');
                jQuery("#Stud_highSent_byDate4_error").text('');
                jQuery("#Stud_highSent_byDate54_error").text('');
                jQuery("#Stud_highSent_byDate6_error").text('');
                jQuery("#Stud_highSent_byDate7_error").text('');
                jQuery("#Stud_highSent_byDate8_error").text("Fill the fields");
                return false;
            } else {
                jQuery(".next.nine_button").trigger("click");
               

            }
        });
    });

    // jQuery(".validation_error").keyup(function(e) {
    //     jQuery(this).siblings('.validation_error').fadeOut();
    // });


    // check box disabled
    jQuery('#addvrtsmnt').change(function() {
        jQuery('#Advertisement_SpecifyS').attr('disabled', !this.checked)
    });
    jQuery('#Education').change(function() {
        jQuery('#Advertisement_SpecifyOneS').attr('disabled', !this.checked)
    });
    jQuery('#internetS').change(function() {
        jQuery('#Advertisement_SpecifyTWOS').attr('disabled', !this.checked)
    });
    jQuery('#recommendation').change(function() {
        jQuery('#Advertisement_SpecifyFOS').attr('disabled', !this.checked)
    });
    jQuery('#alumnusNo').change(function() {
        jQuery('#Specify_City_collegeS').attr('disabled', !this.checked)
    });
    jQuery('#alumnusNo').change(function() {
        jQuery('#Specify_City_collegeS').attr('disabled', !this.checked)
    });
    jQuery('#otherLast').change(function() {
        jQuery('#Specify_otherS').attr('disabled', !this.checked)
    });

    ///checkboxx

    jQuery('#enclosed1').change(function() {
        jQuery('#Stud_highSent_byDateS').attr('disabled', !this.checked)
    });
    jQuery('#week1').change(function() {
        jQuery('#Stud_highSent_byDateS').attr('disabled', !this.checked)
    });

    jQuery('#enclosedd1').change(function() {
        jQuery('#Stud_highSent_byDate2S').attr('disabled', !this.checked)
    });
    jQuery('#weekk1').change(function() {
        jQuery('#Stud_highSent_byDate2S').attr('disabled', !this.checked)
    });


    jQuery('#enclosed3').change(function() {
        jQuery('#Stud_highSent_byDate3S').attr('disabled', !this.checked)
    });
    jQuery('#week3').change(function() {
        jQuery('#Stud_highSent_byDate3S').attr('disabled', !this.checked)
    });

    jQuery('#enclosed4').change(function() {
        jQuery('#Stud_highSent_byDate4S').attr('disabled', !this.checked)
    });
    jQuery('#week4').change(function() {
        jQuery('#Stud_highSent_byDate4S').attr('disabled', !this.checked)
    });

    jQuery('#enclosed5').change(function() {
        jQuery('#Stud_highSent_byDate5ID').attr('disabled', !this.checked)
    });
    jQuery('#week5').change(function() {
        jQuery('#Stud_highSent_byDate5ID').attr('disabled', !this.checked)
    });
    jQuery('#enclosed6').change(function() {
        jQuery('#Stud_highSent_byDates').attr('disabled', !this.checked)
    });
    jQuery('#week6').change(function() {
        jQuery('#Stud_highSent_byDates').attr('disabled', !this.checked)
    });

    jQuery('#enclosed7').change(function() {
        jQuery('#Stud_highSent_byDater').attr('disabled', !this.checked)
    });
    jQuery('#week7').change(function() {
        jQuery('#Stud_highSent_byDater').attr('disabled', !this.checked)
    });

    jQuery('#enclosed8').change(function() {
        jQuery('#Stud_highSent_byDateSr').attr('disabled', !this.checked)
    });
    jQuery('#week8').change(function() {
        jQuery('#Stud_highSent_byDateSr').attr('disabled', !this.checked)
    });
	
	third_button
jQuery(document).ready(function(){
jQuery('select').change(function(){
     jQuery('#third_button').attr('disabled', false);
    var data = jQuery("#AllCourse_id").val();
	// console.log(data);
	jQuery.ajax({
            type: "post",
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            data: {
                action: "couser_data_select",
                data: data
            },
            success: function(data) {
				//console.log(data);
				 jQuery("#showSameData").html(data);
		}			
	});			
});
});	
jQuery(document).ready(function(){
jQuery('select').change(function(){
    var data = jQuery("#AllCourse_id").val();
    jQuery('#third_button').attr('disabled', false);
	jQuery.ajax({
            type: "post",
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            data: {
                action: "couser_dataFull",
                data: data
            },
            success: function(data) {
				//console.log(data);
				jQuery("#showSameDatasss").html(data);	
		}			
	});			
});
});	

jQuery(document).ready(function(){
jQuery("#showSameData").hide();
jQuery("#showSameDatasss").hide();	
jQuery('.totalAmountTop').hide();
	
	jQuery("#labelFirst").click(function(){
		
		jQuery("#showSameData").show();
		jQuery("#showSameDatasss").hide();
		var fullamounts = jQuery("#semamount").val();
		//console.log(fullamounts);
		var fullcourse = jQuery("#dataCoursenameSem").val();
		jQuery(".totalAmountTop span").html(fullamounts);
		
		jQuery("#SelectAmount").html(fullamounts);
		jQuery("#Selectcource").html(fullcourse);
		jQuery("#course-Sem-and-Full").html('As per semester');
        jQuery("#courseSemandFulls").val('semester');
		jQuery("#SelectedAmounts").val(fullamounts);
        jQuery("#Selectcources").val(fullcourse);
        
		
		jQuery("#amountvalue").val('Pay $'+fullamounts);
		jQuery('#semamount').attr('disabled', !this.checked);

		jQuery('#fullamount').attr('disabled','diasbled'); 
		jQuery('.totalAmountTop').show();
		
	});
	jQuery("#labelScnd").click(function(){
		jQuery("#showSameDatasss").show();
		jQuery("#showSameData").hide();
		
		var fullamount = jQuery("#fullamount").val();
		var SemCourse = jQuery("#dataCoursenamefull").val();
		//console.log(fullamount);
		jQuery(".totalAmountTop span").html(fullamount);
		jQuery("#Selectcource").html(SemCourse);
		jQuery("#SelectAmount").html(fullamount);
		jQuery("#amountvalue").val('Pay $'+fullamount);
		 jQuery("#Selectcources").val(SemCourse);
		jQuery("#SelectedAmounts").val(fullamount);
		jQuery("#course-Sem-and-Full").html('Full Course');
        jQuery("#courseSemandFulls").val('FullCourse');
		
		jQuery('#fullamount').attr('disabled', !this.checked);
		jQuery('#semamount').attr('disabled','diasbled'); 
		jQuery('.totalAmountTop').show();
		 
	});

});

jQuery(document).ready(function() {
  jQuery('#formMultipleStep').submit(function(event) {
	    //event.preventDefault();
	     jQuery('#Cardholder_error').text("");
          jQuery('#CARDNnumber_error').text("");
		jQuery('#paymentcheck').text("");
		jQuery('#CARDNumber_error').text("");
		jQuery('#CARDEXPIRYMONTH_error').text("");
		jQuery('#CARDEXPIRYyear_error').text("");
		jQuery('#CARDEXPIRYcvv_error').text("");
	
		var val1 = jQuery("input[name='CardholderName']").val();
		var val2 = jQuery("input[name='CardNumber']").val();
		var val3 = jQuery("input[name='ExpirationMonth']").val();
		var val5 = jQuery("input[name='ExpirYear']").val();
		var val4 = jQuery("input[name='cvvNumber']").val();
		var NameUser = jQuery("#Student_Surnames").val();
		var Email = jQuery("#Student_Emails").val();
		var Address = jQuery("#Permanent_Home_Adds").val();
		var Numbers = jQuery("#Student_Mobile_numbers").val();
		var FeeStructure = jQuery("#courseSemandFulls").val();
		var amont = jQuery("#SelectedAmounts").val();
		var Cosurse = jQuery("#Selectcources").val();
		var valuesss = jQuery("#SelectedAmoerror").val();
		 var cardPattern = /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;
          if (!jQuery("input[name='payment-selected']:checked").val()) {
			jQuery('#paymentcheck').text("Select payment Method");
			return false
           }else if( val1 =="" && val2 =="" && val3 =="" && val4 =="" && valuesss == "" ){
				 jQuery('#Cardholder_error').text("Enter the Card Holder name");
				 jQuery('#CARDNnumber_error').text("Enter the Card Number");
				 jQuery('#CARDEXPIRYcvv_error').text("Enter the Expire date CVV Number");
				 jQuery('#CARDEXPIRYMONTH_error').text("Enter the Expiry Month");
				 jQuery('#CARDEXPIRYyear_error').text("Enter the Expiry Year");
				 return false;
		   }else if(val1 ==""){
				jQuery('#Cardholder_error').text("Enter the Card Holder name");
				 return false;
			 }else if(!cardPattern.test(val2)){
				 jQuery('#CARDNnumber_error').text("Enter the valid Card Number");
				 return false;
			 }else if(val2 == ""){
				 jQuery('#CARDNnumber_error').text("Enter the valid Crad Number");
				 return false;
			 }
			 else if(val3 ==""){
				 jQuery('#CARDEXPIRYMONTH_error').text("Enter the Expiry Month");
				 return false;
			 }else if(val5 == ""){
				 jQuery('#CARDEXPIRYyear_error').text("Enter the Expiry Year");
				 return false;
			 } else if(val4.length < '3' || val4.length > '4'){
				 jQuery('#CARDEXPIRYcvv_error').text("Enter the vaild  CVV Number");
				 return false;
			 }else{
				 
				var validation = ""
				 jQuery.ajax({
					type: "post",
					url: "<?php echo admin_url('admin-ajax.php'); ?>",
					data: {
						action: "card_Element_data",val2:val2,val3:val3,val4:val4,val5:val5
					},
					cache: false
				}).done(function(data) {
					
					console.log(data);
					const obj = JSON.parse(data);
          					if(obj.status === "error"){
          						jQuery("#CardNumber_error").text(obj.message); 
          						jQuery("#SelectedAmoerror").val(obj.message);
								validation = "no";								
								return false;
          					}else{
								validation = "yes";
                                        return true;
								//jQuery("#formMultipleStep").submit();
							}
				}).fail(function() {
					jQuery("#CardNumber_error").text("Something went wrong please try again later."); 
					validation = "no";
					return false;
				});
          	  }
      });  
});

jQuery(document).ready(function(){
    jQuery("#addmore").click(function(event){


        var addMorebutton ='<div class="moreDivAdd">'+
                          '<input type="button" name="remove" class="removecopy" value="Remove" style=" margin-left: 88%;  background-color: #c35f21; padding: 10px 30px;font-size: 15px; text-transform: capitalize;">'+
                        '<div class="groupMainfeilds">'+
                            '<div class="inner-input-fields">'+
                               ' <label class="labelSizeForm">Qualification</label>'+
                                '<input type="text" class="form-custom-cntrl" name="Studemt_E_Qualification" placeholder="Qualification" id="Studemt_E_QualificationS">'+
                               ' <span id="Studemt_E_Qualification_error" class="validation_error"></span>'+
                            '</div>'+
                            '<div class="inner-input-fields">'+
                               ' <label class="labelSizeForm">Awarding body</label>'+
                                '<input type="text" class="form-custom-cntrl" name="Student_Awarding_body" placeholder="Awarding body" id="Student_Awarding_bodyS">'+
                                '<span id="Student_Awarding_body_error" class="validation_error"></span>'+
                           ' </div>'+
                        '</div>'+
                        '<div class="groupMainfeilds">'+
                            '<div class="inner-input-fields">'+
                                '<label class="labelSizeForm">Overall grade/score</label>'+
                                '<input type="text" class="form-custom-cntrl" name="Student_E_Score" placeholder="Overall grade/score" id="Student_E_ScoreS">'+
                                '<span id="Student_E_Score_error" class="validation_error"></span>'+
                            '</div>'+
                            '<div class="inner-input-fields">'+
                                '<label class="labelSizeForm">Date of award</label>'+
                                '<input type="date" class="form-custom-cntrl" name="Stude_Date_of_award" placeholder="Date" id="Stude_Date_of_awardS">'+
                                '<span id="Stude_Date_of_award_error" class="validation_error"></span>'+
                            '</div>'+
                        '</div>'+
                    '</div>';
                    jQuery('#moreAEDHTML').append(addMorebutton);


         jQuery("body").on("click", ".removecopy", function() {

                  jQuery(this).parent(".moreDivAdd").remove();

        });
      
    });

});

</script>

<?php
 get_footer();
?>
