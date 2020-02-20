<div class="form-group {{ $errors->has('order_type') ? 'has-error' : ''}}">
    <label for="order_type" class="control-label">{{ 'Order Type' }}</label>
    <input class="form-control" name="order_type" type="number" id="order_type" value="{{ isset($order->order_type) ? $order->order_type : ''}}" >
    {!! $errors->first('order_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company') ? 'has-error' : ''}}">
    <label for="company" class="control-label">{{ 'Company' }}</label>
    <input class="form-control" name="company" type="number" id="company" value="{{ isset($order->company) ? $order->company : ''}}" >
    {!! $errors->first('company', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('work_order_no') ? 'has-error' : ''}}">
    <label for="work_order_no" class="control-label">{{ 'Work Order No' }}</label>
    <input class="form-control" name="work_order_no" type="text" id="work_order_no" value="{{ isset($order->work_order_no) ? $order->work_order_no : ''}}" >
    {!! $errors->first('work_order_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('weight') ? 'has-error' : ''}}">
    <label for="weight" class="control-label">{{ 'Weight' }}</label>
    <input class="form-control" name="weight" type="number" id="weight" value="{{ isset($order->weight) ? $order->weight : ''}}" >
    {!! $errors->first('weight', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kva') ? 'has-error' : ''}}">
    <label for="kva" class="control-label">{{ 'Kva' }}</label>
    <input class="form-control" name="kva" type="text" id="kva" value="{{ isset($order->kva) ? $order->kva : ''}}" >
    {!! $errors->first('kva', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('expected_delivery_date') ? 'has-error' : ''}}">
    <label for="expected_delivery_date" class="control-label">{{ 'Expected Delivery Date' }}</label>
    <input class="form-control" name="expected_delivery_date" type="date" id="expected_delivery_date" value="{{ isset($order->expected_delivery_date) ? $order->expected_delivery_date : ''}}" >
    {!! $errors->first('expected_delivery_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('po_date') ? 'has-error' : ''}}">
    <label for="po_date" class="control-label">{{ 'Po Date' }}</label>
    <input class="form-control" name="po_date" type="date" id="po_date" value="{{ isset($order->po_date) ? $order->po_date : ''}}" >
    {!! $errors->first('po_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('po_no') ? 'has-error' : ''}}">
    <label for="po_no" class="control-label">{{ 'Po No' }}</label>
    <input class="form-control" name="po_no" type="number" id="po_no" value="{{ isset($order->po_no) ? $order->po_no : ''}}" >
    {!! $errors->first('po_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('rate') ? 'has-error' : ''}}">
    <label for="rate" class="control-label">{{ 'Rate' }}</label>
    <input class="form-control" name="rate" type="number" id="rate" value="{{ isset($order->rate) ? $order->rate : ''}}" >
    {!! $errors->first('rate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <select name="status" class="form-control" id="status" >
    @foreach (json_decode('{"1":"New","3":"On Hold","4":"Cancelled","5":"Completed","0":"Deleted"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($order->status) && $order->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($order->user_id) ? $order->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
