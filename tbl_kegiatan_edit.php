﻿
        <!--PAGE CONTENT -->
        <div id="content">
            <div class="inner">
				<!--BLOCK SECTION -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						<table width="100%">
						<tr>
							<td width="50%">
                            UBAH KEGIATAN
							</td>
							<td width="50%" align="right" >
                            ID : 
							<?php
							$kode_kegiatan = $_GET['id'];
							$query_data = mysqli_fetch_array(mysqli_query($con, "select * from tbl_kegiatan where kode_kegiatan='$kode_kegiatan'"));
							$kode_kegiatan = $query_data['kode_kegiatan'];
							echo $kode_kegiatan;?>
							</td>
						</tr>
						</table>
                        </div>
                        <div class="panel-body">
					<form class="form-horizontal" action="?pert=tbl_kegiatan_proses&act=edit" method="POST" enctype="multipart/form-data">
					<!--LEFT SECTION -->
					<div class="col-lg-10">
						<div class="form-group">
							<label class="control-label col-lg-4">KODE KEGIATAN</label>
							<div class="col-lg-8">
								<input type="text" name="kode_kegiatan" value="<?php echo $kode_kegiatan;?>" class="form-control" readonly />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">NAMA PROJECT</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="kode_project">
										<?php $query_data_project = mysqli_fetch_array(mysqli_query($con, "select * from tbl_project where kode_project='$query_data[kode_project]'"));?>
											<option value="<?php echo $query_data_project['kode_project'];?>"><?php echo $query_data_project['nama_project'];?></option>
										<?php $query_project = mysqli_query($con, "select * from tbl_project where kode_project !='$query_data[kode_project]' order by nama_project ASC");
										while($data_project = mysqli_fetch_array($query_project)){
										?>	
											<option value="<?php echo $data_project['kode_project'];?>"><?php echo $data_project['nama_project'];?></option>
										<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">NAMA KEGIATAN</label>
							<div class="col-lg-8">
								<input type="text" name="nama_kegiatan" value="<?php echo $query_data['nama_kegiatan'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">WAKTU OPTIMIS</label>
							<div class="col-lg-8">
								<input type="text" name="waktuselesai_optimis" value="<?php echo $query_data['waktuselesai_optimis'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">WAKTU MEMUNGKINKAN</label>
							<div class="col-lg-8">
								<input type="text" name="waktuselesai_realistis" value="<?php echo $query_data['waktuselesai_realistis'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">WAKTU PESIMIS</label>
							<div class="col-lg-8">
								<input type="text" name="waktuselesai_pesimis" value="<?php echo $query_data['waktuselesai_pesimis'];?>" class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4"></label>
							<div class="col-lg-7">
								<button class="btn btn-warning"><i class="icon-arrow-right icon-white"></i> Simpan </button>
							</div>
						</div>
					</div>
					<!--RIGHT SECTION -->
					</form>
                        </div>
                    </div>
                </div>
            </div>
			<?php include "footer.php";?>
            </div>
        </div>
       <!--END PAGE CONTENT -->
