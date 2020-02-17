﻿<?php
include('header.php');
include('menu.php');
?>
 <link rel="stylesheet" href="<?php echo URL;?>assets/plugins/Font-Awesome/css/font-awesome.css" />
     <link rel="stylesheet" href="<?php echo URL;?>assets/plugins/wysihtml5/dist/bootstrap-wysihtml5-0.0.2.css" />
    <link rel="stylesheet" href="<?php echo URL;?>assets/css/bootstrap-wysihtml5-hack.css" />
     <style>
                        ul.wysihtml5-toolbar > li {
                            position: relative;
                        }
                    </style>
    <!-- END PAGE LEVEL  STYLES -->
<!--PAGE CONTENT -->
      <!--PAGE CONTENT -->
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Data Contact  <?php echo  Code::GetField("customer","CustomerName","CustomerID=".$this->id);?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo URL; ?>admin/UpdContact/<?php echo $this->ContactSingle['id'];?>" method="POST"  enctype="multipart/form-data" >
                                        <div class="form-group">
										<div class="form-group">
                                            <label>Nama Customer</label>
                                            <input class="form-control" id="nama" name="nama" value="<?php echo $this->ContactSingle['Name'];?>" required>
                                        </div>
                                            <label>Alamat</label>
                                            <input class="form-control" id="alamat" name="alamat" value="<?php echo $this->ContactSingle['Address'];?>" required>
                                        </div>
										<div class="form-group">
                                            <label>No.Telp</label>
                                            <input class="form-control" id="phone" name="phone"  value="<?php echo $this->ContactSingle['Phone'];?>">
                                        </div>
										<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" id="email" name="email"  value="<?php echo $this->ContactSingle['Email'];?>">
											<input type="hidden" class="form-control" id="CID" name="CID"  value="<?php echo $this->ContactSingle['CustomerID'];?>">
                                        </div>
										<div class="form-group">
                                            <label>Recieving Report</label>
                                            <select class="form-control" id="recieve" name="recieve">
                                                <option value="1" <?php if($this->ContactSingle['recieve']==1){ echo "selected";}?>>Yes</option>
												<option value="0" <?php if($this->ContactSingle['recieve']==0){ echo "selected";}?>>No</option>
                                            </select>
                                        </div>
										
										<br>
                                       <input type="submit" value="Submit" class="btn btn-primary">
                                        
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    
                    </div>
                    
                    
                    

                </div>
            <!--END PAGE CONTENT -->
 

    <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  vistamedia &nbsp;2017 &nbsp;</p>
    </div>
    <!--END FOOTER -->


    <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo URL;?>assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo URL;?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo URL;?>assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

  <script src="<?php echo URL;?>assets/plugins/wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
    <script src="<?php echo URL;?>assets/plugins/bootstrap-wysihtml5-hack.js"></script>
    
    <script src="<?php echo URL;?>assets/js/editorInit.js"></script>
    <script>
        $(function () { formWysiwyg(); });
        </script>

</body>

    <!-- END BODY -->
</html>
