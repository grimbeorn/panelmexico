<html>
<head>
    <meta charset="utf-8">
    <title>Presupuesto</title>
    
    <style>
    .invoice-box {
        max-width: 900px;
        margin: auto;
        padding: 5px;
        /*border: 1px solid #eee;*/
/*        box-shadow: 0 0 10px rgba(0, 0, 0, .15);*/
        font-size: 14px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: black;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: rgb(50,150,170);
        border-bottom: 1px solid rgb(50,150,170);
        /*font-weight: bold;*/
        font-size: 15px;
        color: white;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid black;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(5) {
        border-top: 2px solid #eee;
        /*font-weight: bold;*/
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
  <div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
      <tr class="top">
        <td colspan="2">
          <table>
            <tr>
              <td class="title">
                <img src="logoAbeja_001.svg" style="width:100%; max-width:100px;">
              </td>              
            </tr>
          </table>
        </td>
      </tr>
      <tr class="information">
          <td colspan="5">
              <table>
                  <tr>
                    <td>
                      
                      John Doe<br>
                      johndoe@gmail.com
                      
                    </td>
                    <td>
                      Barrafranca S.A. de C.V.<br>
                      Colina de Buenaventura 47<br>
                      Boulevares, Naucalpan, C.P. 53110<br>
                      contacto@panelmexico.com<br>
                      55 8421 4610
                    </td>
                  </tr>
              </table>
          </td>
      </tr>


  </div>
</body>
</html>