<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.EditLanguage')); ?> <small><?php echo e(trans('labels.EditLanguage')); ?>...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li><a href="<?php echo e(URL::to('admin/languages')); ?>"><i class="fa fa-dashboard"></i><?php echo e(trans('labels.ListingAllLanguages')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.EditLanguage')); ?></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo e(trans('labels.EditLanguage')); ?></h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
          <div class="row">
              <div class="col-xs-12">              		
				  <?php if(count($errors) > 0): ?>
					  <?php if($errors->any()): ?>
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <?php echo e($errors->first()); ?>

						</div>
					  <?php endif; ?>
				  <?php endif; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
              	  <div class="box box-info">
                        <!-- form start -->                        
                         <div class="box-body">
                         
                            <?php echo Form::open(array('url' =>'admin/updatelanguages', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')); ?>

                            <?php echo Form::hidden('id',  $result['languages'][0]->languages_id, array('class'=>'form-control', 'id'=>'languages_id')); ?>

                             <?php echo Form::hidden('oldImage', $result['languages'][0]->image , array('id'=>'oldImage')); ?>

                            <div class="form-group">
								<label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Name')); ?></label>
								<div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('name',  $result['languages'][0]->name, array('class'=>'form-control field-validate', 'id'=>'name')); ?>

                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.exampleLanguageName')); ?></span>
                                    <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
								</div>
							</div>
                            
                            <div class="form-group">
								<label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Code')); ?></label>
								<div class="col-sm-10 col-md-4">
                                    <?php echo Form::text('code',  $result['languages'][0]->code, array('class'=>'form-control field-validate', 'id'=>'code')); ?>

								<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.exampleLanguageCode')); ?></span>
                                    <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
								</div>
							</div>
                            
                            <div class="form-group">
								<label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Direction')); ?></label>
								<div class="col-sm-10 col-md-4">
                                    <select class="form-control field-validate" id="direction" name="direction">
                                        <option value="ltr" <?php if($result['languages'][0]->direction=="ltr"): ?> selected <?php endif; ?>><?php echo e(trans('labels.RightToLeft')); ?></option>
                                        <option value="rtl" <?php if($result['languages'][0]->direction=="rtl"): ?> selected <?php endif; ?>><?php echo e(trans('labels.LeftToRight')); ?></option>
                                   </select>
								<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.LanguageDirection')); ?></span>
                                   <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
								</div>
							</div>
                            
                            <div class="form-group">
                              <label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Icon')); ?></label>
                              <div class="col-sm-10 col-md-4">
                                <?php echo Form::file('newImage', array('id'=>'newImage')); ?>

                               <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.LanguageFlag')); ?></span><br>
                                <img src="<?php echo e(asset('').$result['languages'][0]->image); ?>" alt="" width=" 25px">
                              </div>
                            </div>
							
							<div class="form-group">
								<label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.Directory')); ?></label>
								<div class="col-sm-10 col-md-4">
									<?php echo Form::text('directory',  $result['languages'][0]->directory, array('class'=>'form-control', 'id'=>'directory')); ?>

								<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
								<?php echo e(trans('labels.exampleLanguageDirectory')); ?></span>
								
								</div>
							</div>	
                            
                            <div class="form-group">
								<label for="name" class="col-sm-2 col-md-3 control-label"><?php echo e(trans('labels.defaultLanguage')); ?></label>
								<div class="col-sm-10 col-md-4">
                                    <select class="form-control field-validate" id="is_default" name="is_default">
                                        <option value="1" <?php if($result['languages'][0]->is_default=="1"): ?> selected <?php endif; ?>><?php echo e(trans('labels.Yes')); ?></option>
                                        <option value="0" <?php if($result['languages'][0]->is_default=="0"): ?> selected <?php endif; ?>><?php echo e(trans('labels.No')); ?></option>
                                   </select>
								<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;"><?php echo e(trans('labels.defaultLanguageText')); ?></span>
                                   <span class="help-block hidden"><?php echo e(trans('labels.textRequiredFieldMessage')); ?></span>
								</div>
							</div>	
                            					
							<!-- /.box-body -->
							<div class="box-footer text-right">
                            	<div class="col-sm-offset-2 col-md-offset-3 col-sm-10 col-md-4">
                                    <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.Update')); ?></button>
                                    <a href="<?php echo e(URL::to('admin/languages')); ?>" type="button" class="btn btn-default"><?php echo e(trans('labels.back')); ?></a>
                                </div>
							</div>
                              <!-- /.box-footer -->
                            <?php echo Form::close(); ?>

                        </div>
                  </div>
              </div>
            </div>
            
          </div>
          
          
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 
    </div>
    <!-- /.row --> 
    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>