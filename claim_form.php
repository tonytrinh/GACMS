<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> UTP/CGS/003A - Allowance Claiming Form </title>
</head>

<body>
<strong> PART A: In class activities</strong>

<?php
   function print_distance($f_distance_by_paragraph)
   {
      if($f_distance_by_paragraph)
      {
         for($i = 0 ; $i < $f_distance_by_paragraph ; $i++)
         {
            echo "<p></p>";
         }
      }   
      
   }
   $percent_width_of_child_table = "48%";
   $percent_width_of_research_activities = "80%";
   $distance_by_paragraph = 1;
   $max_teaching_days_a_week = 5;
   $max_teaching_weeks_a_month = 4;
   $max_research_days_a_month = 26;
   $middle_research_day = 13;
   for($teaching_week = 0; $teaching_week < $max_teaching_weeks_a_month; $teaching_week++)
   {
      if($teaching_week % 2 == 0)
      {
         print_distance($distance_by_paragraph);
         echo "
         <table width='100%' border='0'>
            <tr>";
      }
      else 
      {
         echo "
               <td >&nbsp;</td>";
      }
      ?>
               <td width="<?php echo $percent_width_of_child_table; ?>">
                  <table width="100%" border="1">
                     <tr>
                        <th colspan="3" scope="col">Week <?php echo ($teaching_week + 1);?> (description of work done for the week)</th>
                     </tr>
                     <tr>
                        <th>Date</th>
                        <th>Lab/Tutorial/Duties performed</th>
                        <th>Total hours</th>
                     </tr>
                     <?php 
                     for($teaching_day = 0; $teaching_day < $max_teaching_days_a_week; $teaching_day++)
                     {
                     ?>
                     <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                     </tr>
                     <?php    
                     }
                     ?>
                  </table>
               </td>
      <?php 
      if($teaching_week % 2 != 0)
      {
         echo "
            </tr>
         </table>";
         print_distance($distance_by_paragraph);
      }
    }
?>


<strong><hr></hr></strong>
<strong> PART B: Research activities recorded for the month (Daily): { Must be tally with Student Research Log Book & authorized by Supervisor}</strong>
<?php print_distance($distance_by_paragraph);?>
<table width='100%' border='0'>
<tr>
   <?php 
   for($research_day = 0; $research_day < $max_research_days_a_month; $research_day++)
   {
      if($research_day == 0 || $research_day == $middle_research_day )
      {
         echo "
   <td width='" . $percent_width_of_child_table. "'>
      <table width='100%' border='1'>
         <tr>
            <th>Date</th>
            <th width = '".$percent_width_of_research_activities."'>Activities </th>
         </tr>";
      }
         echo "
         <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
         </tr>";
      if($research_day == ($middle_research_day -1))
      {
         echo "
      </table>
   </td>
   <td >&nbsp;</td>";
      }
      else if($research_day == ($max_research_days_a_month -1))
      {
         echo "
      </table>
   </td>";
      }
   }
   ?>
</tr>
</table>
   

</body>
</html>
