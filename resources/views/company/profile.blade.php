@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading"><?php echo Lang::get('company.title'); ?></div>

				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/company/save') }}"  accept-charset="UTF-8" enctype="multipart/form-data">
						<input type="text" class="form-control" name="id" value="<?php echo $object->id;?>">
					    <?php echo Form::token(); ?> 
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.code')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="code" value="<?php echo $object->code;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.slug')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="slug" value="<?php echo $object->slug;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.name')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="<?php echo $object->name;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.description')?></label>
							<div class="col-md-6">
							    <textarea class="form-control" name="description">
							    	<?php echo $object->description;?>
							    </textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.short_description')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="short_description" value="<?php echo $object->short_description;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.email')?></label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="<?php echo $object->email;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.phone')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="phone" value="<?php echo $object->phone;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.fax')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="fax" value="<?php echo $object->fax;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.tax_id')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="tax_id" value="<?php echo $object->tax_id;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.website')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="website" value="<?php echo $object->website;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.address1')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="address1" value="<?php echo $object->address1;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.address2')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="address2" value="<?php echo $object->address2;?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.ward_id')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="ward_id" value="{{ old('ward_id') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.district_id')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="district_id" value="{{ old('district_id') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.province_id')?></label>
							<div class="col-md-6">
								<select class="form-control" name="province_id">
										<?php foreach ($provinces as $province) { ?>
										<option value = "<?php echo $province->province_id;?>" <?php echo !($province->province_id == $object->province_id) ? 'selected' : '';?>><?php echo $province->name;?></option>
										<?php } ?>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.status')?></label>
							<div class="col-md-6">
								<input type="checkbox" name="status" value="{{ old('status') }}">
							</div>
						</div>
												
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.zipcode')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="zipcode" value="{{ old('zipcode') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.state')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="state" value="{{ old('state') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.country_id')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="country_id" value="{{ old('country_id') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.type')?></label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="type" value="{{ old('type') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.picture')?></label>
							<div class="col-md-6">
								<input type="file" name="picture" value="{{ old('picture') }}">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label"><?php echo Lang::get('company.cover')?></label>
							<div class="col-md-6">
								<input type="file" name="cover" value="{{ old('cover') }}">
							</div>
						</div>
						
						

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary" value="1" name ="submit_save">
									Save
								</button>
								
								<button type="submit" class="btn btn-success" value="2" name ="submit_save">
									Finish
								</button>
								
								<button type="button" class="btn btn-default back-button" onclick="goBack()">
									Cancel
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
