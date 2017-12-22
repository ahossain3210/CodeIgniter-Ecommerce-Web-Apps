<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Invoice</title>
        <style type="text/css">
            
            body,td,input,select{
                font-family: Tahoma;
                font-size: 11px;
                color: #000000;
            }
            form{
                margin: 0;
            }
            a{
                color: #000000;
            }
            #wrapper{
                width: 600px;
            }
            #invoicetobtables{
                width: 100%;
                background: #cccccc;
                border-collapse: separate;
            }
            td#invoicecontent{
                background: #ffffff;
                color: #000000;
            }
            
        </style>
    </head>
    <body bgcolor="#efefef">
	<h2>E-Shopper</h2>
	<p>Only You Can Trust</p>
	
        <table id="wrapper" width="80%" align="center" cellpadding="10" bgcolor="red" cellspacing="1">
            <h2>Order View</h2>
            <hr>
            <br>
			<table id="invoicetobtables" width="100%" cellspacing="0">
                <tbody>
                    <tr>
                        <td id="invoicecontent" colspan="2" style="border: 1px solid #cccccc;"></td>
			<table width="100%" height="100" cellspacing="0" cellpadding="10">
                            <tbody>
                                <tr>
                                    <td width="50%" valign="top" style="border: 1px solid #cccccc">
                                        <strong style="border-bottom: 1px solid #333;">Invoice To</strong> <br>
                                        <br>
                                        <br>

                                    </td>
                                    <td width="50%" valign="top" style="border: 1px solid #cccccc">
                                        <strong style="border-bottom: 1px solid #333;">Ship To</strong> <br>
                                        <br>
                                        <br>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </tr>
                </tbody>
            </table>
			<br>
            <strong>Invoice #inv-</strong><br>
            Invoice Date :<br>
            Due Date :<br>
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
                    
                    <tr>
                        <td class="center"></td>
                        <td class="center"></td>
                        <td class="center">BDT</td>
                        <td class="center">BDT</td>
                    </tr>
                   
                </tbody>
            </table>
			<table align="right" cellpadding="10">
                <tbody>
                    <tr>
                        <td colspan="5"></td>
                        <td class="right"><b>Sub-Total : BDT </b></td>
                        <td class="right number"></td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td class="right"><b>VAT (15%):
                            
                        </td>
                        <td class="right number"></td>
                    </tr>
                    <tr>
                        <td colspan="5"></td>
                        <td class="right"><b>Grand-Total : BDT </b></td>
                        <td class="right number"></td>
                    </tr>
                </tbody>
            </table>
        </table>
    </body>
    
</html>