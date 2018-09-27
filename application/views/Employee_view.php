<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
    <form method="post" action="<?php echo base_url()?>index.php/Employee/empReg" onsubmit="return validateForm();">
       <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;
	padding:5%;
	margin-left:10%"> 
	   <label>Employee Name </label>
        <input type="text" name="emp_name" style="padding-left: 20px;
  height: 3.3em;
  width: 20em;
  margin-top: .2em;
  border-radius: 1px;
  border: 2px solid #eeeeee;" id="emp_name"  value="" required="" title="Please enter you empname"  placeholder="enter empname" onkeypress="return ischar(event);">
        <span class="text-danger"><?php echo form_error("emp_name");?></span>              
        <span id="errorBoxname" value=""></span><br>
        
        <label>Dept Name </label>
        <select name="dept_name" id="dept_name" style="padding-left: 20px;
  height: 3.3em;
  width: 20em;
  margin-top: .2em;
  border-radius: 1px;
  border: 2px solid #eeeeee;" ><option >select dept</option>
        <?php foreach($records as $row) { ?>
        <option value="<?php echo $row->dept_id; ?>"><?php echo $row->dept_name; ?></option>
        <?php } ?>
        </select>
        <br>
        <input type="submit" name="submit" value="ADD" style=" margin-top: 15px;
  padding-top: 2%;
  color:#fff;
  background-color: #ffab48;
  width: 100px;
  height: 40px;
  font-size: 15px;
  text-align: center;
  padding-top: 6px;
  border-radius: 2px;
  font-family: 'Slack-Lato','Roboto',Arial, Helvetica, sans-serif;
  box-shadow: 0 8px 10px 0 rgba(0,0,0,0.3);
  cursor: pointer;
  transition: 0.3s;" id="submit"  value="" required="" >
                                                  
        <?php
           echo "<font color=green>".$this->session->flashdata("msg");
        ?>
		</div>
    </form>
    
    <div style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;
	padding:5%;
	margin-left:10%">
        <h4><font color="red">EMPLOYE DETAILS</font></h4>
          <table class="table table-striped table-bordered">
            <tr><td><strong></strong></td><td><strong>EMPLOYE NAME</strong></td>
                <td><strong>DEPARMENT</strong></td><td>
            </tr> 
           <?php $no=1; if(isset($recordss))foreach($recordss as $row) { ?>
            <tr><td><?php echo $no;?></td><td><?php echo $row->emp_name;?></td>
                <td><?php echo $row->dept_name;?></td>
            </tr>
           <?php $no++; } ?>  
        </table>
    </div> 
</body>
</html>