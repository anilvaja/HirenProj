<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($company->title) ? $company->title : ''}}" required>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('details') ? 'has-error' : ''}}">
    <label for="details" class="control-label">{{ 'Details' }}</label>
    <textarea class="form-control" rows="5" name="details" type="textarea" id="details" required>{{ isset($company->details) ? $company->details : ''}}</textarea>
    {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <textarea class="form-control" rows="5" name="address" type="textarea" id="address" required>{{ isset($company->address) ? $company->address : ''}}</textarea>
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email" value="{{ isset($company->email) ? $company->email : ''}}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contact_no') ? 'has-error' : ''}}">
    <label for="contact_no" class="control-label">{{ 'Contact No' }}</label>
    <input class="form-control" name="contact_no" type="text" id="contact_no" value="{{ isset($company->contact_no) ? $company->contact_no : ''}}" required>
    {!! $errors->first('contact_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alt_contact_no') ? 'has-error' : ''}}">
    <label for="alt_contact_no" class="control-label">{{ 'Alt Contact No' }}</label>
    <input class="form-control" name="alt_contact_no" type="text" id="alt_contact_no" value="{{ isset($company->alt_contact_no) ? $company->alt_contact_no : ''}}" required>
    {!! $errors->first('alt_contact_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company_code') ? 'has-error' : ''}}">
    <label for="company_code" class="control-label">{{ 'Company Code' }}</label>
    <input class="form-control" name="company_code" type="text" id="company_code" value="{{ isset($company->company_code) ? $company->company_code : ''}}" required>
    {!! $errors->first('company_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gst_no') ? 'has-error' : ''}}">
    <label for="gst_no" class="control-label">{{ 'Gst No' }}</label>
    <input class="form-control" name="gst_no" type="text" id="gst_no" value="{{ isset($company->gst_no) ? $company->gst_no : ''}}" required>
    {!! $errors->first('gst_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('terms_and_condition') ? 'has-error' : ''}}">
    <label for="terms_and_condition" class="control-label">{{ 'Terms And Condition' }}</label>
    <textarea class="form-control" rows="5" name="terms_and_condition" type="textarea" id="terms_and_condition" required>{{ isset($company->terms_and_condition) ? $company->terms_and_condition : ''}}</textarea>
    {!! $errors->first('terms_and_condition', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <select name="status" class="form-control" id="status" >
    @foreach (json_decode('{"1":"Active","2":"Inactive","0":"Deleted"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($company->status) && $company->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
