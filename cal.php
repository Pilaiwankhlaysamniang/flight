<img src="../image/logo.png" width="150px" height="150px" />
<?php

if(isset($_POST['submit_calculate']))
{
   
                                        $service=$_POST['service'];
                                        $by=$_POST['by'];
                                        $freight=$_POST['freight'];
                                        $from=$_POST['from'];
                                        $quantity=$_POST['quantity'];
                                        $type=$_POST['type'];
                                        $weight=$_POST['weight'];
                                        $height=$_POST['height'];
                                        $lenght=$_POST['lenght'];
                                        $wide=$_POST['wide'];
                                        
                                        if($by=="Sea")
                                        {
                                             
                                     
                                        $volumn=round(($height*$lenght*$wide)/1000000,3);
                                        $total_volumn=$volumn*$quantity;
                                        $cost_ship=25;
                                        $exchang_rate=32;
                                        $usd=$total_volumn*$cost_ship;
                                        $thb=$usd*$exchang_rate;
                                        }
                                        
                                           if($by=="Air")
                                        {
                                             
                                     
                                        $volumn=round(($height*$lenght*$wide)/6000,3);
                                        $total_volumn=$volumn*$quantity;
                                        if($total_volumn>$weight)
                                        {
                                            $total_volumn=$total_volumn;
                                        }
                                        else
                                        {
                                            $total_volumn=$weight;
                                        }
                                               
                                        $cost_ship=2.5;
                                        $exchang_rate=32;
                                        $usd=$total_volumn*$cost_ship;
                                           
                                        $thb=$usd*$exchang_rate;
                                        }
                                        
                                        
                                              if($by=="Land")
                                        {
                                            
                                     
                                        $volumn=round(($height*$lenght*$wide)/1000000,3);
                                        $total_volumn=$volumn*$quantity;
                                      
                                        
                                        $cost_ship=22.5;
                                        $exchang_rate=32;
                                        $km=$_POST['from'];
                                        $thb=$km*$cost_ship;
                                        $usd=$thb/$exchang_rate;
                                        }
?>
<?php
    
                        if($total_volumn>5)
                                        {?>
                                    <font size="6pt" color="red"><br/> Volumn is low plese contact to staff 
                                            <br/>
                                        please contact email:operation@jns2010.com
</font>
                                <?php 
                                        }
    else{
        
  
?>

<font size="6pt" color="blue">
                                <p>    Estimate Cost By <?=$by;?><br/>
                                    #Import from China by Ocean freight<br/>
                                    #volume = <?=$volumn;?> CBM<br/>
                                    #quantity <?=$quantity;?> carton<br/>
                                    #total volume:<?=$total_volumn;?> CBM<br/>
                                    #total price<?=$usd;?> USD<br/>  
                                    #THB:<?=$thb;?><br/>
                                  </p>
    </font>

<?php   }}?>
 