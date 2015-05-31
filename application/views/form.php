<?php echo form_open(base_url().'phonedir',array('id'=>'phoneform')) ?>
<div>
    <label>Name*</label>
    <input type="text" name="uname">
</div>
<div>
    <label>Phone Number*</label>
    <input type="text" name="pnum">
</div>
<div>
    <label>Address</label>
    <textarea name="addr"></textarea>
</div>
<div>
    <input type="submit" name="subform" value="Submit Form">
</div>
<?php echo form_close() ?>