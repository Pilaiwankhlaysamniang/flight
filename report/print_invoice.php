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
            <h2 style='text-align:center'>Invoice</h2>
             <h3 style='text-align:left'>Customer name".$_GET['user_companyname']."</h3>
             <h3 style='text-align:left'>Address".$_GET['user_address']."</h3>
             
             <h3 style='text-align:right'>Invoice No.:".$_GET['invoice_no']."</h3>
			  <h3 style='text-align:right'>Date:".$_GET['invoice_date']."</h3>
               <h3 style='text-align:right'>TERMS: 30 DAYS</h3>
               <h3 style='text-align:right'>Due Date:".$_GET['invoice_duedate']."</h3>
                <h3 style='text-align:right'>Job No.:".$_GET['invoice_jobno']."</h3>
                <h3 style='text-align:right'>OBL No.:".$_GET['invoice_oblno']."</h3>
                <h3 style='text-align:right'>HBL No.:".$_GET['invoice_hblno']."</h3>
              
              
         
             <br/>
             <table id='bg-table' width='100%' style='border-collapse: collapse;font-size:12pt;margin-top:8px;'>
                
                 <tr style='border:1px solid #000;padding:4px;'>
                    <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>Feeder vessel:".$_GET['invoice_feeder_vessel']."
                         <br/>Occean vessel:".$_GET['invoice_occean_vessel']."
                         <br/>ETD:".$_GET['invoice_etd']." &nbsp;&nbsp;&nbsp;&nbsp; ETA:".$_GET['invoice_eta']."
                         <br/>Port of loading:".$_GET['invoice_port_of_loading']."
                         <br/>Port of delivery:".$_GET['invoice_port_of_delivery']."
                           
                           <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>PKG/WT/MEAS:".$_GET['invoice_pkg_wt_meas']."
                         
                          </td>
                     
                    </td>
                        
                    </tr>
                    
                     <tr style='border:1px solid #000;padding:4px;'>
                         <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>Container no./seal:".$_GET['invoice_container_no']."
                         
                       </td>
                       <td> </td>
                    </tr>
           

                    
            </table>
              
            <table id='bg-table' width='100%' style='border-collapse: collapse;font-size:12pt;margin-top:8px;'>
                    <tr style='border:1px solid #000;padding:4px;'>
                        <td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='15%'><b>DESCRIPTION</b></td>
						<td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='15%'><b>EXCH RATE</b></td>
						<td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='15%'><b>NONVAT</b></td>
                        <td  style='border-right:1px solid #000;padding:4px;text-align:center;'  width='15%'><b>VAT</b></td>
						
                        
                    </tr>

            </thead>
                <tbody>";

$mpdf->WriteHTML($head);
$content = "";
            $sql2="  SELECT
tb_invoicedetail.invoice_id,
tb_invoicedetail.invoicedetail_desc,
tb_invoicedetail.invoicedetail_exhrate,
tb_invoicedetail.invoicedetail_nonvat,
tb_invoicedetail.invoicedetail_vat
FROM
tb_invoicedetail


";
            $sql2.=" where";
		    $sql2.=" tb_invoicedetail.invoice_id='".$_GET['id']."'";

 
            $result2=$cls_conn->select_base($sql2);
            $i=1;
            while($row2=mysqli_fetch_array($result2))
            {
                
              
			$content .= '<tr style="border:1px solid #000;">
				
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row2['invoicedetail_desc'].'</td>
				<td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$row2['invoicedetail_exhrate'].'</td> 
                
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$total[]=$row2['invoicedetail_nonvat'].'</td>
                <td style="border-right:1px solid #000;padding:3px;text-align:center;"  >'.$total2[]=$row2['invoicedetail_vat'].'</td>
			 
               
               
			 
			</tr>';
			$i++;
		}

        $content .= '<tr style="border:1px solid #000;">
				 
				<td style="border-right:1px solid #000;padding:2px;text-align:center;" colspan="2"  ><h3>Total</h3></td> 
                <td style="border-right:1px solid #000;padding:1px;text-align:center;"   >'.array_sum($total).'</td>
                   <td style="border-right:1px solid #000;padding:1px;text-align:center;"   >'.array_sum($total2).'</td>
                   
                   
			 
			</tr>';
	 
$mpdf->WriteHTML($content);
 
$end = "</tbody>
</table>

<h3 style='text-align:left'>REMARK:".$_GET['invoice_remark']."</h3>
<br/>
 
";
$mpdf->WriteHTML($end);
$mpdf->Output();

?>