<div class="row">
    <div class="container-fluid">
        <button class="btn btn-success" onclick="add_weekly()"><i class="fas fa-plus-square"></i> New</button>
        <hr/>

        <div class="table-responsive">
            <table id="weeklyListTable" class="table table-sm table-bordered">
                <thead class="table-dark">
                    <tr>
                        <td>Period</td>
                        <td>Created</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($weeklyList as $weekly) : ?>
                        <tr>
                            <td><?php echo $weekly->name; ?></td>
                            <td>
                                <?php
                                $date = date_create($weekly->created);
                                echo date_format($date, "Y/m/d H:i:s");
                                ?>

                            </td>
                            <td><?php echo $weekly->status; ?></td>
                            <td>
                                <button id="btnEditWeekly" class="btn btn-primary btn-sm"
                                <?php
                                if ($weekly->status == 'Close') {
                                    ?>
                                        onclick="this.disabled = true"
                                    <?php
                                } else {
                                    ?>
                                            onclick="edit_weekly(<?php echo $weekly->x_weekly_id; ?>)"
                                    <?php
                                }
                                    ?>

                                 >
                                    <i class="fas fa-edit">                                        
                                    </i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_weekly" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="weeklyModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form">
                <form action="#" id="form_weekly" class="form-horizontal">
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
                <button type="button" class="btn btn-primary" onclick="save_weekly()"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>