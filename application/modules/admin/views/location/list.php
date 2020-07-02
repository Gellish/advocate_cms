<link href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function areyousure()
{
	return confirm('<?php echo lang('are_you_sure');?>');
}
</script>
<section class="content-header">
        <h1>
            <?php echo $page_title; ?>
            <small><?php echo lang('list');?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin')?>"><i class="fa fa-dashboard"></i> <?php echo lang('dashboard');?></a></li>
            <li class="active"><?php echo lang('locations');?></li>
        </ol>
</section>

<section class="content">
  	  	 <div class="row" style="margin-bottom:10px;">
            <div class="col-xs-12">
                <div class="btn-group pull-right">
				 <?php if(check_user_role(52)==1){?>	
                    <a class="btn btn-default" href="<?php echo site_url('admin/location/add/'); ?>"><i class="fa fa-plus"></i> <?php echo lang('add_new');?></a>
				<?php } ?>		
                </div>
            </div>    
        </div>	
        
  	  	<div class="row">
          <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo lang('locations');?></h3>                                    
                </div><!-- /.box-header -->
				
                <div class="box-body table-responsive" >
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo lang('serial_number');?></th>
								<th><?php echo lang('name');?></th>
								<th width="20%"></th>
                            </tr>
                        </thead>
                        
                        <?php if(isset($locations)):?>
                        <tbody>
                            <?php $i=1;foreach ($locations as $new){?>
                                <tr class="gc_row">
                                    <td><?php echo $i?></td>
                                    <td><?php echo $new->name?></td>
									
                                    <td>
                                        <div class="btn-group">
                                         <?php if(check_user_role(53)==1){?>	 
										  <a class="btn btn-primary"  href="<?php echo site_url('admin/location/edit/'.$new->id); ?>"><i class="fa fa-edit"></i> <?php echo lang('edit');?></a>
										  <?php } ?>	
										   <?php if(check_user_role(54)==1){?>	
                                         <a class="btn btn-danger" style="margin-left:20px;" href="<?php echo site_url('admin/location/delete/'.$new->id); ?>" onclick="return areyousure()"><i class="fa fa-trash"></i> <?php echo lang('delete');?></a>
										 <?php } ?>	
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++;}?>
                        </tbody>
                        <?php endif;?>
                    </table>
					
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section>

<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.js')?>" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('#example1').dataTable({
	});
});

</script>