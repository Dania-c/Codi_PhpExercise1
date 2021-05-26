<?php 


if(isset($_POST['submit'])){

$salary=$_POST['salary'];
$nonTax=$_POST['non-tax'];
$timeFrame=$_POST['timeFrame'];

 if($timeFrame=="Month"){
  $salary_Year=$salary*12;
  $salary_Month=$salary;
  $noTaxYear=$nonTax*12;
  $noTaxMonth=$nonTax;
 }
  else if ($timeFrame=="yearly"){
    $salary_Month=$salary/12;
    $salary_Year=$salary;
    $noTaxMonth=$nonTax/12;
    $noTaxYear=$nonTax;
  }
  if ($salary_Year>0 && $salary_Year<10000){
    $tax=0;
    $taxMonth=0;
    $ssf=0;
    $ssfMonth=0;
    $salaryAftertaxMonth=$salary_Month+$noTaxMonth;    
    $salaryAfterTaxYearly=$salary_Year+$noTaxYear;
    
    }
    else if($salary_Year>=10000 && $salary_Year<25000){
      $tax=$salary_Year*(11/100);
      $taxMonth=$tax/12;
      
      $ssf=$salary_Year*(4/100);
      $ssfMonth=$ssf/12;

      $salaryAftertaxMonth=$salary_Month-$taxMonth-$ssfMonth+$noTaxMonth;    
      $salaryAfterTaxYearly=$salary_Year-$tax-$ssf+$noTaxYear;
      }
      else if($salary_Year>=25000 && $salary_Year<50000){
      $tax=$salary_Year*(30/100);
      $taxMonth=$tax/12;

      $ssf=$salary_Year*(4/100);
      $ssfMonth=$ssf/12;

      $salaryAftertaxMonth=$salary_Month-$taxMonth-$ssfMonth+$noTaxMonth;    
      $salaryAfterTaxYearly=$salary_Year-$tax-$ssf+$noTaxYear;
    }
      else if($salary_Year>=50000){
      $tax=$salary_Year*(45/100);
      $taxMonth=$tax/12;

      $ssf=$salary_Year*(4/100);
      $ssfMonth=$ssf/12;
        
      $salaryAftertaxMonth=$salary_Month-$taxMonth-$ssfMonth+$noTaxMonth;    
      $salaryAfterTaxYearly=$salary_Year-$tax-$ssf+$noTaxYear;
      }
    }
else{
  echo " kindly enter  Info ";
}

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    
</head>
<body>
<section >

  <div>
    <div>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input type='number'  name="salary" placeholder='Salary in USD' value=<?php
     if (isset ($_POST['submit'])) echo $salary?> required>
     <input type="number" id="tax" name="non-tax" placeholder="Tax Free in USD" value=<?php
     if (isset ($_POST['submit'])) echo $nonTax?> required>
    </div>
    
    <div>
      <label>
     <input type="radio" name="timeFrame" value="yearly" 
     <?php if(isset($_POST['submit'])) if($_POST['timeFrame'] == "yearly") echo "checked"; ?> required> Yearly
    </label>
    
     <label>
       <input type="radio" name="timeFrame" value="Month" 
       <?php if(isset($_POST['submit'])) if($_POST['timeFrame'] == "Month") echo "checked"; ?> required> Month  
      </label>
    </div> 
    
    <div>
     <input type="submit" name="submit" value="Submit" >
    </div>
    <div>
      <input type='submit' name='clear' value='Clear' >
    </div>
     <div>  
       </div>
      </form>
      
      
      <div>
        <table >
          <tr>
            <th ><?php 
            if(isset($_POST['clear'])){
              echo " -clear- " ; }
              
              if(isset($_POST['submit'])){
                echo " -done- " ; }?> </th>
     <th>Month</th>
     <th>Yearly</th>
    </tr>
    <tr>
      <td>Total Salary</td>
      <td> <?php echo $salary_Month ?></td>
     <td> <?php echo $salary_Year ?></td>
     </tr>
     <tr>
       <td>Tax Amount</td>
       <td> <?php echo $taxMonth ?></td>
       <td> <?php echo $tax?></td>
      </tr>
      <tr>
        <td>Social Security Fee </td>
        <td><?php echo $ssfMonth?></td>
        <td><?php echo $ssf?></td>
      </tr>
      <tr>
        <td>Salary After Tax</td>
        <td><?php echo $salaryAftertaxMonth ?></td>
     <td> <?php echo $salaryAfterTaxYearly ?></td>
    </tr> 
  </section>
    
  </table>
</div>
</body>
</html>