<?php
include('../class_conn.php');
$cls_conn=new class_conn;
include('../mpdf/mpdf.php');
$mpdf=new mPDF();
$head="
           <style>
                body{
                    font-family: 'THSarabun';//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
                }
            </style>
            
            <table>
             <tr>
               <th rowspan='3' style='text-align:left'><img src='../image/logo.png' width='100px' height='100px'></th>
                
             </tr>
             
            <tr>
            <td><h1>JN SUCCESS CO., LTD.</h1></td>
         
            
            </tr>
            <tr>
            <td>Address : 58/12 Moo 5, T.bangmeanang,
                 <br/>  A.Bangyai, Nonthaburi 11140, Thailand
                  <br/>  TEL:(66)0 2916 4274 FAX:(66)0 2916 4274
                  <br/>  REGISTERED NO.:0-1255-53016-10-9
                <td>
            </tr>
  
</table>
            
           
            
            <h2 style='text-align:center'>Receipt / Tax Invoice</h2>
            
             
              <table id='bg-table' width='100%' style='border-collapse: collapse;font-size:12pt;margin-top:8px;'>
              <tr style='border:1px solid #000;padding:4px;'>
               <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>
               Received From &nbsp;&nbsp;&nbsp;&nbsp;:".$_GET['user_fullname']."
               </td>
               
               <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'> Number &nbsp;&nbsp;&nbsp;&nbsp;:".$_GET['bill_no']."
                <br/> Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:".$_GET['bill_date']."
               </td>
               </tr>
              </table>
			  
			  
			  
            <table id='bg-table' width='100%' style='border-collapse: collapse;font-size:12pt;margin-top:8px;'>
                    <tr style='border:1px solid #000;padding:4px;'>
                        <td  style='border-right:1px solid #000;padding:4px;text-align:center;'   width='10%'><b>No.</b></td>
						<td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='15%'><b>Description</b></td>
						<td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='15%'><b>Gross AMT.</b></td>
                        <td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='15%'><b>Vat AMT.</b></td>
						<td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='15%'><b>Total AMT.</b></td>
					
                        
                    </tr>

            </thead>
                <tbody>";

$mpdf->WriteHTML($head);
$content = "";
            $sql2="  SELECT
tb_billdetail.bill_id,
tb_billdetail.billdetail_item,
tb_billdetail.billdetail_grossamt,
tb_billdetail.billdetail_vatamt,
tb_billdetail.billdetail_totalamt
FROM
tb_billdetail

";
            $sql2.=" where";
		    $sql2.=" tb_billdetail.bill_id='".$_GET['id']."'";
            $result2=$cls_conn->select_base($sql2);
            $i=1;
            while($row2=mysqli_fetch_array($result2))
            {
                
              
			$content .= '<tr style="border:1px solid #000;">
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$i.'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row2['billdetail_item'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row2['billdetail_grossamt'].'</td> 
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row2['billdetail_vatamt'].'</td>
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$total[]=$row2['billdetail_totalamt'].'</td>
			 
			</tr>';
			$i++;
		}

        $content .= '<tr style="border:1px solid #000;">
				 
				<td style="border-right:1px solid #000;padding:2px;text-align:center;" colspan="2"  ><h3>Total</h3></td> 
                <td style="border-right:1px solid #000;padding:1px;text-align:center;"   >'.array_sum($total).'</td>
                <td style="border-right:1px solid #000;padding:1px;text-align:center;"   >'.array_sum($total).'</td>
                <td style="border-right:1px solid #000;padding:1px;text-align:center;"   >'.array_sum($total).'</td>
			 
			</tr>';
	 
$mpdf->WriteHTML($content);
 
$end = "</tbody>
</table>
<table id='bg-table' width='100%' style='border-collapse: collapse;font-size:12pt;margin-top:8px;'>
              <tr style='border:1px solid #000;'>
           
               <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='50%'>
                   AMOUNT IN WORDS
    
               </td>
               </tr>
</table>

<table id='bg-table' width='100%' style='border-collapse: collapse;font-size:12pt;margin-top:8px;'>
                
                 <tr style='border:1px solid #000;padding:4px;'>
             
                        <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>Cush By:".$_GET['bill_cashby']."
                <br/> Date :".$_GET['bill_date']."
                 <br/>  Cheque no.:".$_GET['bill_cheque_no']."
                  <br/>    Dated:".$_GET['bill_dated_real']."
                  <br/>    Bank:".$_GET['bill_bank']."
                  <br/>    Branch:".$_GET['bill_branch']."
               </td>
                    </tr>
            
            
                     </table>
                     
             <table id='bg-table' width='100%' style='border-collapse: collapse;font-size:12pt;margin-top:8px;'>
              <tr style='border:1px solid #000;'>
           
               <td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='50%'>
                   <br/><hr>
                   (Collector) 
               </td>
               
               <td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='50%'>
                   <br/><hr>
                   (Authorized Signature)
               </td>
               </tr>
              </table>
                     
  <p style='text-align:center'>THIS RECEIPT IS VALID ONLY WHEN IT BEARS THE AUTHORIZED SIGNATURE FOR EVERY PAYMENT THIS OFFICAL RECEIPT MUST BE INSISTED UPON.</p>                   
<br/>
 
             
 
";
$mpdf->WriteHTML($end);
$mpdf->Output();

?>