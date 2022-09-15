

<?php
include("admin.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

  <title>CSRLS | Applicants</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">  
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-13">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">

      <div class="d-flex align-items-left justify-content-left ">
          <a href="downloads.php" class="btn btn-primary">View uploaded documents</a>  
        </div>

      <h2 style="text-align: center;">CSRLS Loan Application Database</h2>
      <table class="table table-condensed table-striped table-bordered">
       <thead><tr><th>S.N</th>

         <th>First Name</th>
         <th>Last Name</th>
         <th>Gender</th>
         <th>Email</th>
         <th>Phone</th>
         <th>DOB</th>
         <th>Loan Type</th>
         <th>Loan Amount</th>
         <th>MDA</th>
         <th>Designation</th>
         <th>Confirmation</th>
         <th>Employee Number</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['firstname']??''; ?></td>
       <td><?php echo $data['lastname']??''; ?></td>
      <td><?php echo $data['gender']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['phone']??''; ?></td>
      <td><?php echo $data['dob']??''; ?></td>
      <td><?php echo $data['loantype']??''; ?></td>
      <td><?php echo $data['loanamount']??''; ?></td>  
       <td><?php echo $data['mda']??''; ?></td>
        <td><?php echo $data['designation']??''; ?></td>
         <td><?php echo $data['confirmation']??''; ?></td>
          <td><?php echo $data['employeenumber']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="13">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>