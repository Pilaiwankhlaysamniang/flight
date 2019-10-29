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
             
           
            <h2 style='text-align:center'>Booking Confirmation</h2>
            <h3 style='text-align:left'>Customer name:".$_GET['booking_customer']."</h3>
            <h3 style='text-align:left'>DATE:".$_GET['booking_datereg']."</h3>
           
            
                <table id='bg-table' width='100%' style='border-collapse: collapse;font-size:12pt;margin-top:8px;'>
                
                 <tr style='border:1px solid #000;padding:4px;'>
                         <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>Booking No.:".$_GET['booking_no']."</td>
                         <td  style='border-right:1px solid #000;padding:4px;text-align:right;'  width='30%'>Port of loading:".$_GET['booking_port_of_loading']."</td>
                    </tr>
                    
                    <tr style='border:1px solid #000;padding:4px;'>
                         <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>Port of discharge:".$_GET['booking_port_of_discharge']."</td>
                         <td  style='border-right:1px solid #000;padding:4px;text-align:right;'  width='30%'>Port of delivery:".$_GET['booking_port_of_delivery']."</td>
                    </tr>
                    
                      <tr style='border:1px solid #000;padding:4px;'>
                         
                         <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>ETD:".$_GET['booking_etd']."</td>
                         <td  style='border-right:1px solid #000;padding:4px;text-align:right;'  width='30%'>ETA:".$_GET['booking_eta']."</td>
                    </tr>
                    
                    <tr style='border:1px solid #000;padding:4px;'>
                         <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>Feeder vessel:".$_GET['booking_feeder_vessel']."</td>
                         <td  style='border-right:1px solid #000;padding:4px;text-align:right;'  width='30'>Mother vessel :".$_GET['booking_mother_vessel']."</td>
                    </tr>
                    
                    <tr style='border:1px solid #000;padding:4px;'>
                        <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'> Weight:".$_GET['booking_weight']."</td>
                        <td  style='border-right:1px solid #000;padding:4px;text-align:right;'  width='30%'> Quantity :".$_GET['booking_quantity']."</td>
                           
                         
                    </tr>
                    
                     
                    <tr style='border:1px solid #000;padding:4px;'>
                        
                         <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'> Volume :".$_GET['booking_volume']."</td>  
                         
                    </tr>
                    <tr>
                        <td colspan='2'></td>
                    </tr>
                    <tr>
                        <td colspan='2'></td>
                    </tr>
                    
                    
                    <tr style='border:1px solid #000;padding:4px;'>
                         <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>Loading at:".$_GET['booking_loading_at']."</td>
                          <td  style='border-right:1px solid #000;padding:4px;text-align:right;'  width='30%'>Loading date:".$_GET['booking_loading_date']."</td>
                    </tr>
                    
                    <tr style='border:1px solid #000;padding:4px;'>
                    <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>Closing Date:".$_GET['booking_closing_date']."</td>
                       
                         <td  style='border-right:1px solid #000;padding:4px;text-align:right;'  width='30%'>Closing Time :".$_GET['booking_closing_time']."</td>
                    </tr>
                     <tr style='border:1px solid #000;padding:4px;'>
                         <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>Truck type:".$_GET['booking_truck_type']."</td>
                       
                         <td  style='border-right:1px solid #000;padding:4px;text-align:right;'  width='30%'>Truck no.:".$_GET['booking_truck_no']."</td>
                    </tr>
                     <tr style='border:1px solid #000;padding:4px;'>
                    <td  style='border-right:1px solid #000;padding:4px;text-align:left;'  width='15%'>Shipping contact:".$_GET['booking_shipping_contact']."</td>
                       
                         <td  style='border-right:1px solid #000;padding:4px;text-align:right;'  width='30%'>TEL :".$_GET['booking_tel']."</td>
                    </tr>
                    
             </table>
             <br/>
                <h3 style='text-align:left'>REMARK:".$_GET['booking_remark']."</h3>
              
            

            </thead>
                <tbody>";

$mpdf->WriteHTML($head);
$content = "";


           
        
	 
$mpdf->WriteHTML($content);
 
$end = "</tbody>
</table>
<br/>
 
";
$mpdf->WriteHTML($end);
$mpdf->Output();

?>