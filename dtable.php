<script src="jquery.1.7.2.min.js"></script>
<script src="jquery.dataTables.js"></script>


 <link rel="stylesheet" href="datatable.css">

<script>

$(document).ready(function() 
 { 

 var unadTable = $('#taskList').dataTable( {  
    "sPaginationType": "full_numbers",
 });
 });

</script>


 <table width="60%" border="1" cellspacing="0" cellpadding="0" class="taskList" id="taskList">
                    <thead> 
                      <tr class="tableHead">
                        
                        <th width="59%" align="left" valign="top">Task type</th>
                        <th width="20%" align="left" valign="top">Billing Status</th>
                      	<th width="10%" align="left" valign="top">Enabled</th>
                        <th width="11%" align="left" valign="top">Action</th>
                        
                        
                      </tr>
					  
                    </thead>
					<tr>
					<td align="left" valign="top">Development</td>
					<td align="left" valign="top">Billable</td>
					<td align="left" valign="top">Enable</td>
					<td align="left" valign="top">Delete</td>
					</tr>
					<tr>
					<td align="left" valign="top">2Development</td>
					<td align="left" valign="top">3Billable</td>
					<td align="left" valign="top">4Enable</td>
					<td align="left" valign="top">5Delete</td>
					</tr>
					<tr>
					<td align="left" valign="top">7Development</td>
					<td align="left" valign="top">8Billable</td>
					<td align="left" valign="top">9Enable</td>
					<td align="left" valign="top">10Delete</td>
					</tr>
                     <tbody>
					 </tbody>