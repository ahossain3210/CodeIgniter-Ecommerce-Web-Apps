<html>
    <head>
        <title>Invoice</title>
<!--        <style>
            *{ margin:0px; padding: 0px;}
            #header{}
            .header_top{overflow: hidden; }
            .header_top_left{float: left; padding:10px; text-transform: uppercase;}
            .header_top_right{float: right; padding:10px; text-transform: uppercase;}
            .header_body{overflow: hidden;}
            .header_body_hold{float: right; }
            .header_left{float: left; margin-top: 8px}
            .header_left p {padding: 5px; margin-right: 20px; }
            .header_right{float: right; padding: 10px;}
            .header_right p {border: 1px solid black;  padding: 4px; margin-bottom: -1px;}
            .header_footer{overflow: hidden; }
            .header_footer_left { float: left; }
            .header_footer_left p { margin: 6px; padding-left: 10px;}
            .header_footer_right { float: right; }
            .header_footer_right p { margin: 6px; padding-left: 10px; }
            .header_line{background: #0081c2; width: 300px; font-size:20px; color: white;}
            .wrapper { width: 900px; margin: 0 auto; }
            #body_part{overflow: hidden; padding: 10px 0px;}
            .body_line{ background:#0077b3; text-align:center; font-size:20px; color: white;}
            .count {float:left; width: 4%}
            .count p {border: 1px solid #444; margin-bottom: -1px; margin-right:-1px; text-align: center;}
            .body_part_one{float: left; width: 36%;}
            .body_part_one p { border: 1px solid #444; margin-bottom: -1px; margin-right:-2px;}
            .body_part_two{float: right; width: 20%; text-align: center; }
            .body_part_two p { border: 1px solid #444; margin-bottom: -1px; margin-left:-1px;}
            .body_part_three{float: right;  width: 20%; text-align: center;}
            .body_part_three p {border: 1px solid #444; margin-bottom: -1px;}
            .body_part_four{float: right;  width: 20%; text-align: center; margin-right:-1px;}
            .body_part_four p {border: 1px solid #444; margin-bottom: -1px;}
            .tabil_amount{ float: right; width: 20.1%;}
            .tabil_amount p { text-align: center;  border: 1px solid #444; margin-bottom: -1px;}
            .tabil_total{ float:right; width: 20%;}
            .tabil_total p { text-align: center; margin-top: 20px;}
             #footer{ overflow: hidden; }
            .footer_content{float:left ;  width: 15%;}
            .footer_content p { text-align: center;}
            .footer_coment{background: #0077b3; padding: 20px; color: #999999; margin-top: 20px; }
            .footer_coment .wrapper p {float: right; margin-top:-8px;}
        </style>-->
    </head>
    <body bgcolor="#efefef">
        <table width="100%" align="center" cellpadding="10" bgcolor="#cccccc" cellspacing="1">
            <h2>Order View</h2>
            <br>
            <table width="100%" cellspacing="0" cellpadding="10">
                <tbody>
                    <tr>
                        <td colspan="2" style="border: 1px solid #cccccc;">
                            <table width="100%" height="100" cellspacing="0" cellpadding="10">
                                <tbody>
                                    <tr>
                                        <td width="50%" valign="top" style="border: 1px solid #cccccc">
                                            <strong style="border-bottom: 2px solid #333;">Invoice To</strong> <br>
                                            <?php echo $customerInfo->customer_name;?> <br>
                                            <?php echo $customerInfo->address;?> <br>
                                            <script type="text/javascript">
                                                key='<?php echo $customerInfo->country;?>';
                                                country=getCountryFullName(key);
                                                document.write(country);
                                            </script>
                                        </td>
                                        <td width="50%" valign="top" style="border: 1px solid #cccccc">
                                            <strong style="border-bottom: 2px solid #333;">Ship To</strong> <br>
                                            <?php echo $shippingInfo->first_name." ".$shippingInfo->last_name;?> <br>
                                            <?php echo $shippingInfo->address;?> <br>
                                            <script type="text/javascript">
                                                key='<?php echo $shippingInfo->country;?>';
                                                country=getCountryFullName(key);
                                                document.write(country);
                                            </script>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <strong>Invoice #inv-<?php echo $orderInfo->order_id;?></strong><br>
            Invoice Date : <?php echo date('d-M-Y',  strtotime($orderInfo->order_date))?><br>
            Due Date : <?php echo date('d-M-Y',  strtotime($orderInfo->order_date.'+ 7 day'))?><br>
            <hr/>
            <h2>Order Details</h2>
            <hr/>
            <table border="1" width="100%" cellspacing="0" cellpadding="10">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total=0;
                    foreach ($orderDetailsInfo as $v_order_info)
                    {
                    ?>
                    <tr>
                        <td class="center"><?php echo $v_order_info->product_name;?></td>
                        <td class="center"><?php echo $v_order_info->product_sales_quantity;?></td>
                        <td class="center">BDT <?php echo $v_order_info->product_price;?></td>
                        <td class="center">BDT <?php echo $v_order_info->product_sales_quantity*$v_order_info->product_price;?></td>
                    </tr>
                    <?php }
                    $total=$total+$v_order_info->product_sales_quantity*$v_order_info->product_price;
                    ?>
                </tbody>
            </table>
            <table align="right" cellpadding="10">
                <tbody>
                    <tr>
                        <td colspan="5"></td>
                        <td class="right"><b>Sub-Total : BDT <?php echo $total;?></b></td>
                        <td class="right number"></td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td class="right"><b>VAT (15%):
                            <?php 
                            $vat=(15*$total)/100;
                            echo 'BDT '.$vat;
                            ?>
                        </td>
                        <td class="right number"></td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td class="right"><b>Grand-Total : BDT <?php echo $total+$vat;?></b></td>
                        <td class="right number"></td>
                    </tr>
                </tbody>
            </table>
            
        </table>
        
    </body>
</html>

