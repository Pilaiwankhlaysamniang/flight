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
               <h2 style='text-align:center'>Quotation</h2>
            
    
                
            <h3 style='align:left'>Our Ref:".$_GET['quotation_ourref']."</h3>
            <h3 style='align:left'>Date:".$_GET['quotation_date']."</h3>
            <h3 style='align:left'>Customer:".$_GET['user_companyname']."</h3>
            <h3 style='align:left'>TEL:".$_GET['user_tel']."</h3> </br>
            
        <table width='100%'>
         <tr>
         <th style='text-align:left'>Commodity:".$_GET['quotation_commodity']."</th>
          <th style='text-align:right'>POL:".$_GET['quotation_pol']."</th>
           </tr>
           <tr>
           <th style='text-align:left'>Volume:".$_GET['quotation_volume']."</th>
          <th style='text-align:right'>POD:".$_GET['quotation_pod']."</th>
           </tr>
           
           <tr>
           <th style='text-align:left'> Freight Term:".$_GET['quotation_freightterm']."</th>
           </tr>
           
            <tr>
           <th style='text-align:right'>CURR:THB</th>
           </tr>
           </table>
           
                
             
           
              
            <table id='bg-table' width='100%' style='border-collapse: collapse;font-size:12pt;margin-top:8px;'>
                    <tr style='border:1px solid #000;padding:4px;'>
                        <td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='15%'><b>DESCRIPTION</b></td>
						<td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='15%'><b>RATE</b></td>
						
						
                        
                    </tr>
                    
                    

            </thead>
                <tbody>";

$mpdf->WriteHTML($head);
$content = "";
            $sql2="  SELECT
tb_quotationdetail.quotationdetail_id,
tb_quotationdetail.quotationdetail_description,
tb_quotationdetail.quotationdetail_rate,
tb_quotationdetail.quotation_id
FROM
tb_quotationdetail

";
            $sql2.=" where";
		    $sql2.=" tb_quotationdetail.quotation_id='".$_GET['id']."'";

 
            $result2=$cls_conn->select_base($sql2);
            $i=1;
            while($row2=mysqli_fetch_array($result2))
            {
                
              
			$content .= '<tr style="border:1px solid #000;">
				
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row2['quotationdetail_description'].'</td>
				
                
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$total[]=$row2['quotationdetail_rate'].'</td>
                
			 
			</tr>';
			$i++;
		}

        $content .= '<tr style="border:1px solid #000;">
				 
				<td style="border-right:1px solid #000;padding:2px;text-align:center;" colspan="1"  ><h3>Total</h3></td> 
                <td style="border-right:1px solid #000;padding:1px;text-align:center;"   >'.array_sum($total).'</td>
			 
			</tr>';
	 
$mpdf->WriteHTML($content);
 
$end = "</tbody>
</table>

<h3 style='align:left'>ETD:".$_GET['quotation_etd']."</h3>
<h3 style='align:left'>T/T:".$_GET['quotation_tt']."</h3>
<h3 style='align:left'>Carrier:".$_GET['quotation_carrier']."</h3>
 <h3 style='align:left'>Duty Tax:".$_GET['quotation_dutytax']."</h3> </br>
 
 
  <table width='100%'>
         <tr>
         <th style='text-align:left'>REMARK:</th>
          
          <th style='text-align:left'>1.The above prices do not include VAT 7%</th>
          <th></th>
           </tr>
         
          <tr>
         <th></th>
          <th style='text-align:left'>2.The above rate are subject to change with prior notice.</th>
            <th></th>
            </tr>
           <tr>
         <th></th>
          <th style='text-align:left'>3.Un-ordinary expenses i.e.Import duty tax,Customer overtime, and as per actual official receipt.</th>
           <th></th>
           </tr>
  </table>
 
<br/>
 
";
$mpdf->WriteHTML($end);
$mpdf->Output();

?>