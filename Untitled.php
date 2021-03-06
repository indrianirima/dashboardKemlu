<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
    <link href="http://cdn.syncfusion.com/16.2.0.41/js/web/flat-azure/ej.web.all.min.css" rel="stylesheet" />
    <link href="16.2.0.41/themes/web/content/default.css" rel="stylesheet" />
    <link href="16.2.0.41/themes/web/content/default-responsive.css" rel="stylesheet" />
 
    <script type="text/javascript" src="http://cdn.syncfusion.com/js/assets/external/jquery-2.1.4.min.js"></script>    
	 
    <script type="text/javascript" src="http://cdn.syncfusion.com/16.2.0.41/js/web/ej.web.all.min.js"></script>
    <script src="16.2.0.41/scripts/web/properties.js" type="text/javascript"></script>


    <style type="text/css">
        p {
            font-family: verdana;
            font-size:35px;
            margin-top: 100px;
            margin-bottom: 50px;
            margin-right: 100px;
            margin-left: 100px;
            text-align: center;

        }
    </style>
 </head>
 <body> 
    <p> KONDISI UMUM KEUANGAN KEMLU TA 2018 </p>
	<div class="content-container-fluid">      
        <div class="row">                
            <div class="cols-sample-area">                                  				
				<div id="container"></div> 					                   
            </div>				
        </div>
    </div>

    <div class="content-container-fluid">      
        <div class="row">                
            <div class="cols-sample-area">                                                  
                <div id="container2"></div>                                     
            </div>              
        </div>
    </div>
 <script type="text/javascript" language="javascript">
	$(function () 
	{
        $("#container").ejChart(
        {
			//Initializing Series
            series:
			[	
				{
                    points: [{ x: 'Perwakilan', y: 28, text: '28%' }, { x: 'Pusat', y: 10, text: '10%' }],
                    marker:
					{ 
                        dataLabel:
						{ 
							visible:true, 
							font: { size: '30px', fontWeight: 'lighter' },
                            enableContrastColor:true
						}						
					},
                    name: 'Newyork', 
					type: 'doughnut', 
					explode: true, 
					doughnutSize:0.9,
					labelPosition:'inside', 
					enableAnimation : true
                }
            ],
			load:"loadTheme",
			canResize:true,
			title: { text: 'Proporsi Pagu Dipa Kemlu' },
            size: { height: "450" },
            legend: { visible: true, position:'top'}
        });
    });


    $(function () 
    {
        $("#container2").ejChart(
        {
            //Initializing Series
            series:
            [   
                {
                    points: [{ x: 'Perwakilan', y: 28, text: '28%' }, { x: 'Pusat', y: 10, text: '10%' }],
                    marker:
                    { 
                        dataLabel:
                        { 
                            visible:true, 
                            font: { size: '30px', fontWeight: 'lighter' },
                            enableContrastColor:true
                        }                       
                    },
                    name: 'Newyork', 
                    type: 'doughnut', 
                    explode: true, 
                    doughnutSize:0.9,
                    labelPosition:'inside', 
                    enableAnimation : true
                }
            ],
            load:"loadTheme",
            canResize:true,
            title: { text: 'Realisasi Anggaran' },
            size: { height: "450" },
            legend: { visible: true, position:'top'}
        });
    });
 </script>

 <table style="width:100%">
  <tr>
    <th>Pembagian   </th>
    <th>pagu    </th> 
    <th>Porsi pagu  </th>
    <th>Realisasi   </th>
    <th>% Realisasi     </th>
    <th>Sisa    </th>
  </tr>
  <tr>
    <td>Perwakilan</td>
    <td>
        <?php
            $serverName= "DESKTOP-6T8VCKD";
            $connectionInfo=array('Database'=>'dashboard');
            $conn = sqlsrv_connect($serverName,$connectionInfo);
            if($conn){
                echo $conn;
            }else{
                echo 'EtaTerangkanlah <br />';
            }

            $sql= sqlsrv_query($conn,"SELECT pagu from kon_um WHERE jenis='perwakilan'");

            while( $row = sqlsrv_fetch_array( $sql) ) {
            echo $row["pagu"];
            }

        ?>
    </td> 
    <td></td>
  </tr>
  <tr>
    <td>Pusat</td>
    <td></td> 
    <td></td>
  </tr>
  <tr>
    <td>Total</td>
    <td></td> 
    <td></td>
  </tr>
</table>

 </body>
</html>


