<link href="<?php echo base_url('assets/plugins/fullcalendar/fullcalendar.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/plugins/fullcalendar/fullcalendar.print.css')?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/plugins/jquery.datetimepicker/jquery.datetimepicker.css')?>" rel="stylesheet" type="text/css" />
<!-- Main content -->
<section class="content">

        <!-- Small boxes (Stat box) -->
	
		<?php
        $admin = $this->session->userdata('admin');
		$access = $admin['user_role'];
		if($access==2){
		?>				
		
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo count($my_cases)?></h3>
                        <p><?php echo lang('my_cases');?></p>
                    </div>
                    <div class="icon"><i class="fa fa-list"></i></div>
                    <a href="<?php echo site_url('admin/my_cases')?>" class="small-box-footer">
                        <?php echo lang('more_info')?><i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo $client_setting->client_case_alert;?></h3>
                        <p><?php echo lang('case_alert_days')?></p>
                    </div>
                    <div class="icon"><i class="fa fa-bell"></i></div>
                    <a href="#myModal" data-toggle="modal"  class="small-box-footer">
                        <?php echo lang('click_here_to_change_setting'); ?><i class="fa fa-cog"></i>
                    </a>
                </div>
            </div>
        </div>
	
		<?php } else { ?>		
    
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo count($clients)?></h3>
                        <p><?php echo lang('clients');?></p>
                    </div>
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <a href="<?php echo site_url('admin/clients')?>" class="small-box-footer">
                        <?php echo lang('more_info');?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php echo count($case_all)?></h3>
                        <p><?php echo lang('cases');?></p>
                    </div>
                    <div class="icon"><i class="fa fa-list"></i></div>
                    <a href="<?php echo site_url('admin/cases')?>" class="small-box-footer">
                        <?php echo lang('more_info');?>  <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php echo count($starred)?></h3>
                        <p><?php echo lang('starred_cases');?></p>
                    </div>
                    <div class="icon"><i class="fa fa-star"></i></div>
                    <a href="<?php echo site_url('admin/cases/starred_cases')?>" class="small-box-footer">
                       <?php echo lang('more_info');?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo count($archived)?></h3>
                        <p><?php echo lang('archived_cases'); ?></p>
                    </div>
                    <div class="icon"><i class="fa fa-archive"></i></div>
                    <a href="<?php echo site_url('admin/cases/archived_cases')?>" class="small-box-footer">
                       <?php echo lang('more_info');?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
	   <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="small-box bg-blue">
                    <div class="inner">
                        <h3><?php echo count($employees)?></h3>
                        <p><?php echo lang('employees');?></p>
                    </div>
                    <div class="icon"><i class="fa fa-users"></i></div>
                    <a href="<?php echo site_url('admin/employees')?>" class="small-box-footer">
                        <?php echo lang('more_info');?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php echo count($tasks)?></h3>
                        <p><?php echo lang('tasks');?></p>
                    </div>
                    <div class="icon"><i class="fa fa-tasks"></i></div>
                    <a href="<?php echo site_url('admin/tasks')?>" class="small-box-footer">
                        <?php echo lang('more_info');?>  <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="small-box bg-light-blue-gradient">
                    <div class="inner">
                        <h3><?php echo count($case_study)?></h3>
                        <p><?php echo lang('case_study');?></p>
                    </div>
                    <div class="icon"><i class="fa fa-book"></i></div>
                    <a href="<?php echo site_url('admin/case_study')?>" class="small-box-footer">
                       <?php echo lang('more_info');?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo count($my_tasks)?></h3>
                        <p><?php echo lang('my_tasks'); ?></p>
                    </div>
                    <div class="icon"><i class="fa fa-inbox"></i></div>
                    <a href="<?php echo site_url('admin/tasks/my_tasks')?>" class="small-box-footer">
                       <?php echo lang('more_info');?> <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
	
	<div class="row dashboard-box-widget">	
	   <?php if(check_user_role(105)==1){?>		
	   <section class="col-lg-6 col-sm-12 col-xs-12">	
		  <div class="box box-solid">
            <div class="box-header with-border">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title"><?php echo lang('todays_cases');?></h3>
            </div>
            <div class="box-body">
                <ul class="todo-list">
				    <?php if(isset($cases)):?>
			             <?php $i=1;foreach ($cases as $new){?>
                            <li>
                                <span class="text">
                                    <a href="<?php echo site_url('admin/cases/dates/'.$new->case_id); ?>"><?php echo $new->case_no  ." - ". $new->title; ?> </a>
                                </span>
                                <div class="tools"><i class="fa fa-eye"></i></div>
                            </li>
                         <?php $i++;}?>
	                <?php endif;?>	
                 </ul>
             </div>
             <div class="box-footer clearfix no-border">
                <button class="btn btn-default pull-right">
                    <a href="<?php echo site_url('admin/cases/view_all'); ?>"><i class="fa fa-plus"></i> <?php echo lang('view_all'); ?></a>
                </button>
             </div>
          </div>		
	</section>
	<?php } ?>
	<?php if(check_user_role(107)== 1){?>		
	<section class="col-lg-6 col-sm-12 col-xs-12">	
		<div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-tasks"></i>
                <h3 class="box-title"><?php echo lang('todays_to_do'); ?></h3>
            </div>
            <div class="box-body">
                <ul class="todo-list ">
                    <?php if(isset($to_do)):?>
	                   <?php $i=1;foreach ($to_do as $new){?>
                       <li>
                          <span class="text">
                            <a href="<?php echo site_url('admin/to_do_list/view_to_do/'.$new->id);?>"><?php echo  $new->title; ?> </a>
                          </span>
                          <div class="tools">
                            <i class="fa fa-eye"></i>
                          </div>
                       </li>
		               <?php $i++;}?>
                    <?php endif;?>	
                </ul>
            </div>
            <div class="box-footer clearfix no-border">
                <button class="btn btn-default pull-right">
                    <a href="<?php echo site_url('admin/to_do_list/view_all'); ?>"><i class="fa fa-plus"></i> <?php echo lang('view_all'); ?></a>
                </button>
            </div>
        </div>
    </section>
    <?php }?>    				
    <section class="col-lg-6 col-sm-12 col-xs-12">	
		<div class="box box-solid">
            <div class="box-header with-border">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title"><?php echo lang('notice_board')?></h3>
            </div>
            <div class="box-body">
                <ul class="todo-list">
                    <?php if(isset($notice)):?>
    			         <?php $i=1;foreach ($notice as $new){?>  
                            <li>
                                <span class="label label-info"><i class="fa fa-clock-o"></i> <?php echo date_time_convert($new->date_time); ?></span>
                                <span class="text"><?php echo $new->title; ?></span>
                                <div class="tools">
                                   <a href="<?php echo site_url('admin/notice/view/'.$new->id)?>"> <i class="fa fa-eye"></i></a>
                                </div>
                            </li>
    		              <?php $i++;}?>
    	            <?php endif;?>	
                </ul>
            </div>
            <div class="box-footer clearfix no-border">
                <button class="btn btn-default pull-right">
                    <i class="fa fa-plus"></i> <a href="<?php echo site_url('admin/notice/')?>"><?php echo lang('view_all')?></a>
                </button>
            </div>
        </div>
    </section>
    <?php if($access==1 && $todays_leaves){ ?>
    <section class="col-lg-6 col-sm-12 col-xs-12">	
		<div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-user"></i>
                <h3 class="box-title"><?php echo lang('today_employees_on_leave')?></h3>
            </div>
            <div class="box-body">
                <ul class="todo-list">
	               <?php $i=1;foreach ($todays_leaves as $new){?>  
                      <li>
                        <span class="text"><?php echo $new->user; ?></span>
                        <span class="text label label-success"><?php echo $new->leave_type; ?></span>
                      </li>
		           <?php $i++;}?>
		        </ul>
            </div>
		</div>
    </section>
    <?php } ?>
    <?php if($access !=2){ ?>
    <section class="col-lg-6 col-sm-12 col-xs-12">	
		<div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-user"></i>
                <h3 class="box-title"><?php echo lang('attendance')?></h3>
            </div>
            <div class="box-body">
			     <?php if(empty($check_today)){ ?>	
		              <?php if(!empty($att_status)){?>		
		                  <?php if($att_status->current_status==NULL OR $att_status->current_status==0){?>
                                <a href="#mark_in" class="btn bg-olive btn-flat margin" data-toggle="modal"  > <i class="fa fa-sign-in"></i> <?php echo lang('mark_in')?></a>
		                  <?php }else{?>
								<a href="#mark_out" class="btn bg-orange btn-flat margin" data-toggle="modal"  > <i class="fa fa-sign-out"></i> <?php echo lang('mark_out')?></a>		
                          <?php } ?>
		              <?php } else { ?>
		                  <a href="#mark_in" class="btn bg-olive btn-flat margin" data-toggle="modal"  > <i class="fa fa-sign-in"></i> <?php echo lang('mark_in')?></a>	
		              <?php } ?>	
			     <?php } else { ?>
		              <button class="btn bg-maroon btn-flat margin">Today is <?php echo $check_today->leave_type?></button>
				<?php } ?>	
                <a href="#apply_leave" class="btn bg-purple btn-flat margin" data-toggle="modal"  > <i class="fa fa-arrow-circle-up"></i> <?php echo lang('apply_leave')?></a>				
            </div>
			<div class="box-footer clearfix no-border">
                <a href="<?php echo site_url('admin/attendance/my_attendance');?>" style="padding-right:7px" class="btn btn-default"><i class="fa fa-user"></i> <?php echo lang('my_attendance')?></a>
				<a href="<?php echo site_url('admin/attendance/my_leaves');?>"  class="btn btn-default pull-right"><i class="fa fa-plus"></i> <?php echo lang('my_leaves')?></a>	
            </div>
		</div>
    </section>
    <?php } ?>
  </div>
  
  <div class="row full-calendar">
    <div class="col-md-3">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h4 class="box-title"><?php echo lang('events'); ?></h4>
        </div>
        <div class="box-body">
          <!-- the events -->
          <div id="external-events">
            <div class="form-group">
                <select id='lang-selector' class="form-control select2" style="width: 100%;">
                </select>
            </div>
            <div class="external-event bg-light-blue"><?php echo lang('appointments'); ?></div>
            <div class="external-event bg-red"><?php echo lang('cases'); ?></div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /. box -->
    </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="box box-solid">
        <div class="box-body">
          <!-- THE CALENDAR -->
          <div id="calendar"></div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /. box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <?php } ?>
  
  
  <!-- Case Alert setting for client -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <?php echo form_open_multipart('admin/my_cases/case_alert/'); ?>  
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo lang('case_alert_days') ?> <?php echo lang('settings') ?></h4>
          </div>
          <div class="modal-body">
             <div class="form-group">
                  <label><?php echo lang('case_alert_days') ?></label>
                  <input type="number" class="form-control" name="days" value="" />
             </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?php echo lang('close') ?></button>
            <button type="submit" class="btn btn-primary"><?php echo lang('save') ?></button>
          </div>
          <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  
  
  <!-- Modal Box for Mark In ( Attendance ) -->
  <div class="modal fade" id="mark_in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <?php echo form_open_multipart('admin/attendance/mark_in/'); ?>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo lang('mark_in') ?></h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label><?php echo lang('notes') ?></label>
                <textarea class="form-control" rows="3" name="notes"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?php echo lang('close') ?></button>
            <button type="submit" class="btn btn-primary"><?php echo lang('save') ?></button>
          </div>
          <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  
  
  <!-- Modal Box for Mark Out ( Attendance ) -->
  <div class="modal fade" id="mark_out" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <?php echo form_open_multipart('admin/attendance/mark_out/'); ?>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo lang('mark_out') ?></h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label><?php echo lang('notes') ?></label>
                <textarea class="form-control" rows="3" name="notes"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?php echo lang('close') ?></button>
            <button type="submit" class="btn btn-primary"><?php echo lang('mark_out') ?></button>
          </div>
          <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
  
  
  <!-- Modal Box for Apply Leave -->
  <div class="modal fade" id="apply_leave" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <?php echo form_open_multipart('admin/attendance/apply_leave/'); ?>
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title"><?php echo lang('apply_leave') ?></h4>
          </div>
          <div class="modal-body input_fields_wrap">
            <div class="row">
                <div class="col-xs-3">
                  <input type="text" name="date[]" value="" placeholder="<?php echo lang('date')?>" class="form-control datepicker" required/>
                </div>
                <div class="col-xs-4">
                  <div class="form-group">
                    <select name="leave_id[]" class="form-control select2" style="width: 100%;">
                      <option value="">-- Select Leave Type</option>
	                  <?php 
					  foreach($leave_types as $new){
						echo "<option value='".$new->id."'>".$new->name."</option>";
					  }
					  ?>
                    </select>
                  </div>
                </div>
                <div class="col-xs-5">
                  <input type="text" name="reason[]" value="" placeholder="Reason" class="form-control" required />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                  <button class="add_field_button btn btn-success m-b-20">Add More </button>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?php echo lang('close') ?></button>
            <button type="submit" class="btn btn-primary"><?php echo lang('submit') ?></button>
          </div>
          <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->


  <!-- Morris.js charts -->
  <script src="<?php echo base_url('assets/plugins/morris/raphael-min.js')?>"></script>
  <script src="<?php echo base_url('assets/plugins/morris/morris.min.js')?>" type="text/javascript"></script>
  
  <!-- Sparkline -->
  <script src="<?php echo base_url('assets/plugins/sparkline/jquery.sparkline.min.js')?>" type="text/javascript"></script>
  <!-- jvectormap -->
  <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>" type="text/javascript"></script>
  <!-- fullCalendar -->
  <script src="<?php echo base_url('assets/plugins/fullcalendar/moment.min.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/plugins/fullcalendar/fullcalendar.min.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/plugins/fullcalendar/lang-all.js')?>" type="text/javascript"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?php echo base_url('assets/plugins/jqueryKnob/jquery.knob.js')?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/plugins/jquery.datetimepicker/jquery.datetimepicker.js')?>" type="text/javascript"></script>

  <script type="text/javascript">

  // Apply Leave Popup 
  $(document).ready(function() {
    
        var max_fields      = 100; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="row"><div class="col-xs-3"><input type="text" name="date[]" value="" placeholder="<?php echo lang('date')?>" class="form-control datepicker" required/></div><div class="col-xs-4"><div class="form-group"><select name="leave_id[]" class="form-control select2" style="width: 100%;"><option value="">-- Select Leave Type</option><?php foreach($leave_types as $new){ echo "<option value=".$new->id.">".$new->name."</option>";}?></select></div></div><div class="col-xs-5"><input type="text" name="reason[]" value="" placeholder="Reason" class="form-control" required /></div></div><div class="row"><div class="col-xs-12"><a  href="#" class="remove_field btn btn-danger m-b-20">Remove </a></div></div>'); //add input box
    			jQuery('.datepicker').datetimepicker({
    			 timepicker:false,
    			 format:'Y-m-d',
                 minDate:'-1970/01/01',
                 onSelectDate:function(ct,$i){
                  $i.datetimepicker('destroy');
                 }
    			});			
    
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
        
        $('.datepicker').datetimepicker({
         timepicker:false,
         format:'Y-m-d',
         minDate:'-1970/01/01',
         onSelectDate:function(ct,$i){
          $i.datetimepicker('destroy');
         }
        });	
    
    });

    </script>



    <script type="text/javascript">
    
      $(function() {
				
		var currentLangCode = 'en';

		// build the language selector's options
		$.each($.fullCalendar.langs, function(langCode) {
			$('#lang-selector').append(
				$('<option/>')
					.attr('value', langCode)
					.prop('selected', langCode == currentLangCode)
					.text(langCode)
			);
		});

		// rerender the calendar when the selected option changes
		$('#lang-selector').on('change', function() {
			if (this.value) {
				currentLangCode = this.value;
				$('#calendar').fullCalendar('destroy');
				//start cal code
					

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date();
                var d = date.getDate(),
                        m = date.getMonth(),
                        y = date.getFullYear();
                $('#calendar').fullCalendar({
					 showAgendaButton: true,
                columnFormat: { month: 'ddd', week: 'ddd d/M', day: 'dddd d/M' },
                timeFormat: 'H:mm',
                axisFormat: 'H:mm',
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
					lang: currentLangCode,
                    buttonText: {
                        today: 'today',
                        month: 'month',
                        week: 'week',
                        day: 'day'
                    },
                    //Random default events
                    events:[
					
            		<?php  
            			foreach($case_all as $order){
            				
            				echo "{
            				title: '".'#'.$order->case_no."',
            				start: '".date('M d Y 12:00:00', strtotime($order->next_date))."',
            				backgroundColor: '#3c8dbc',
            				className : 'custom1',
            				url:   '".site_url('admin/cases/view_case/'.$order->case_id)."'
            				},
            					  ";
            			 }		
            			 
            			 
            			 foreach($appointment_all as $new){
            				
            				echo "{
            				title: '".$new->title."',
            				date: '".date('M d Y 12:00:00', strtotime($new->date_time))."',
            				backgroundColor: '#3c8dbc',
            				className : 'custom',
            				
            				url:   '".site_url('admin/appointments/view_appointment/'.$new->id)."'
            				},
            					  ";
            			 }		
            		?>
            		],
                    editable: true,
                    droppable: false, // this allows things to be dropped onto the calendar !!!
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        copiedEventObject.backgroundColor = $(this).css("background-color");
                        copiedEventObject.borderColor = $(this).css("border-color");

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }

                    }
                });
				
				
				//end cal code
				
				
			}
		});

				
				

                /* initialize the calendar
                 -----------------------------------------------------------------*/
                //Date for the calendar events (dummy data)
                var date = new Date();
                var d = date.getDate(),
                        m = date.getMonth(),
                        y = date.getFullYear();
                $('#calendar').fullCalendar({
					 showAgendaButton: true,
                columnFormat: { month: 'ddd', week: 'ddd d/M', day: 'dddd d/M' },
                timeFormat: 'H:mm',
                axisFormat: 'H:mm',
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
					lang: currentLangCode,
                    buttonText: {
                        today: 'today',
                        month: 'month',
                        week: 'week',
                        day: 'day'
                    },
                    //Random default events
                    events:[
					
            		<?php  
            			foreach($case_all as $order){
            				
            				echo "{
            				title: '".'#'.$order->case_no."',
            				start: '".date('M d Y 12:00:00', strtotime($order->next_date))."',
            				backgroundColor: '#3c8dbc',
            				className : 'custom1',
            				url:   '".site_url('admin/cases/view_case/'.$order->case_id)."'
            				},
            					  ";
            			 }		
            			 
            			 
            			 foreach($appointment_all as $new){
            				
            				echo "{
            				title: '".$new->title."',
            				date: '".date('M d Y 12:00:00', strtotime($new->date_time))."',
            				backgroundColor: '#3c8dbc',
            				className : 'custom',
            				
            				url:   '".site_url('admin/appointments/view_appointment/'.$new->id)."'
            				},
            					  ";
            			 }		
            		?>
            		],
                    editable: true,
                    droppable: true, // this allows things to be dropped onto the calendar !!!
                    drop: function(date, allDay) { // this function is called when something is dropped

                        // retrieve the dropped element's stored Event Object
                        var originalEventObject = $(this).data('eventObject');

                        // we need to copy it, so that multiple events don't have a reference to the same object
                        var copiedEventObject = $.extend({}, originalEventObject);

                        // assign it the date that was reported
                        copiedEventObject.start = date;
                        copiedEventObject.allDay = allDay;
                        copiedEventObject.backgroundColor = $(this).css("background-color");
                        copiedEventObject.borderColor = $(this).css("border-color");

                        // render the event on the calendar
                        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                        // is the "remove after drop" checkbox checked?
                        if ($('#drop-remove').is(':checked')) {
                            // if so, remove the element from the "Draggable Events" list
                            $(this).remove();
                        }

                    }
                });

                
               
            });
		
        </script>  