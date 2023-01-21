<?php
include('./config.inc');
$responseCode='100';
$responseMessage='Add Students Failure';
$addStudentsQuery="INSERT INTO tblStudents(studentName, studentRollNo, studentDob, studentAddress,createdOn) VALUES ('Jagan','2107','2003-01-31','4/45 richie street',NOW()),
 ('Prakash','2109','2002-11-02','4/46 ganesh street',NOW()),
 ('MOhan','2110','2002-08-11','4/47 tirupathistreet',NOW())";
$rsd = mysqli_query($connect_var, $addStudentsQuery);
if($rsd)
{
    $responseCode='01';
    $responseMessage='Add Students Successfull';
}
echo json_encode(array("statusCode"=>$responseCode, "responseMessage"=>$responseMessage)); //Return Response
?>
