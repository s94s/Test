<?php echo $this->Html->script('jquery-1.11.3.min');?>
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" media="screen" />
<div>     
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                       <center><span style="font-size: 20px;">Inspection Reports</span></center>
            </div>
        </div>
    </div>
    <br>
    <div class="content-body" >        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12" id="dataTable">
                        <table  id="pdfTableId">
                            <thead>
                                <tr>
                                    <th class="col-xs-2 col-md-1 col-lg-1"><?php echo $headers['Inspection ID'] ?></th>
                                    <th class="col-xs-2 col-md-2 col-lg-2"><?php echo $headers['Name'] ?></th>                                  
                                    <th class=" col-xs-1 col-md-1 col-lg-1 "><?php echo $headers['Project'] ?></th>                                    
                                    <th class=" col-xs-2 col-md-2 col-lg-2 "><?php echo $headers['Status'] ?></th>                                    
                                    <th class="col-xs-2 col-md-1 col-lg-1"><?php echo $headers['Location1'] ?></th>
                                    <th class="col-xs-2 col-md-2 col-lg-2"><?php echo $headers['Description'] ?></th>
                                    <th class="col-xs-2 col-md-1 col-lg-1"><?php echo $headers['Discipline '] ?></th>
                                </tr>   
                            </thead>
                            <tbody>
                                    <?php  foreach($inspectors as $key=>$inspection){?>
                                        <tr>
                                            <td>
                                                <?php echo $inspection['id']; ?>
                                            </td>
                                            <td>
                                                 <?php echo $inspection['Name']; ?>
                                            </td>
                                            <td>
                                                 <?php echo $inspection['Project']; ?>
                                            </td>
                                            <td>
                                                 <?php echo $inspection['Status']; ?>
                                            </td>
                                            <td>
                                                 <?php echo $inspection['Location1']; ?>
                                            </td>
                                            <td>
                                                 <?php echo $inspection['Description']; ?>
                                            </td>
                                            <td>
                                                 <?php echo $inspection['Discipline ']; ?>
                                            </td>
                                         </tr>   
                                         <?php } ?>
                            </tbody>
                            
                        </table>                    
                </div>
            </div>
        </div>
    </div>
    <br>
     
</div>
<script>    
$(document).ready( function () {
 $("#pdfTableId").dataTable({
        sPaginationType: "full_numbers",
        "iDisplayLength":7,
        "bLengthChange": false,
        "bInfo": false,
        "order": [[ 0, 'asc' ]],
        "columnDefs" : [{ "width": "10%", "targets": 0 }],
    });
 } );
   
</script>
