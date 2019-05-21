<div class="row">
    <div class="container-fluid">
        <button class="btn btn-success" onclick="add_year()"><i class="fas fa-plus-square"></i> New</button>
        <hr/>
        <div class="table-responsive">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <td>Period</td>
                        <td>Created</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($yearList as $year) : ?>
                        <tr>
                            <td><?php echo $year->name; ?></td>
                            <td>
                                <?php
                                $date = date_create($year->created);
                                echo date_format($date, "Y/m/d H:i:s");
                                ?>

                            </td>
                            <td>
                                <button class="btn btn-primary btn-sm" onclick="edit_year(<?php echo $year->c_year_id; ?>)">
                                    <i class="fas fa-edit">                                        
                                    </i>
                                </button>
                                <button onclick="periodPage(<?php echo $year->c_year_id; ?>)" class="btn btn-primary btn-sm">
                                    <i class="fas fa-calendar-check"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_year" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="yearModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form_year" class="form-horizontal">
                    <input class="d-none" name="id"/>
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <div>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                <button type="button" class="btn btn-primary" onclick="save_year()"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>