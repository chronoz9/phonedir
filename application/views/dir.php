<h1>Phone Directory</h1>

<div>
    <a href="<?php echo base_url().'phonedir/form' ?>"><button>Add New Directory</button></a>
</div>
<div>
    <table border="1">
    <thead>
        <th>name</th>
        <th>phone</th>
        <th>address</th>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $r): ?>
                <tr><td><?php echo $r->name ?></td><td><?php echo $r->phone ?></td><td><?php echo $r->address ?></td></tr>
            <?php endforeach ?> 
        <?php else: ?>
            <tr><td colspan="3">No record found.</td> </tr>
        <?php endif ?>
    </tbody>
    <tfoot>
        <tr><td colspan="3" align="right"><a href="<?php echo $prevlink ?>">Previous Page</a> <a href="<?php echo $nextlink ?>">Next Page</a></td></tr>
     
        
        
    </tfoot>
    </table>
    
</div>