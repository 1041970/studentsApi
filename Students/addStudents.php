<?php
include('./config.inc');
$responseCode='100';
$responseMessage='Add Students Failure';
$addStudentsQuery="INSERT INTO tblStudents(studentName, studentRollNo, studentDob, studentAddress,createdOn) VALUES ('Jagan','2108','2002-09-27','4/44 selva street',NOW()),
 ('Prakash','2108','2002-09-27','4/44 selva street',NOW()),
 ('MOhan','2108','2002-09-27','4/44 selva street',NOW())";
$rsd = mysqli_query($connect_var, $addStudentsQuery);
if($rsd)
{
    $responseCode='01';
    $responseMessage='Add Students Successfull';
}
echo json_encode(array("statusCode"=>$responseCode, "responseMessage"=>$responseMessage)); //Return Response
?>