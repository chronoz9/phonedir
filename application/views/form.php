<h1>Add New Directory</h1>
<?php echo validation_errors(); ?>

<?php echo form_open(base_url().'phonedir/postform',array('id'=>'phoneform')) ?>
<div>* = mandatory</div>
<div>
    <label>Name*</label>
    <input type="text" name="uname" value="<?php echo set_value('uname'); ?>">
</div>
<div>
    <label>Phone Number*</label>
    <input type="text" name="pnum" value="<?php echo set_value('pnum'); ?>">
</div>
<div>
    <label>Address</label>
    <textarea name="addr"><?php echo set_value('addr'); ?></textarea>
</div>
<div>
    <input type="submit" name="subform" value="Submit Form">
    <a href="<?php echo base_url().'phonedir' ?>"><button type="button">Cancel</button></a>
</div>
<?php echo form_close() ?>