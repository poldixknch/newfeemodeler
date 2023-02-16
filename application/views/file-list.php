<div class="panel">
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12">
                <?php if($this->session->userdata('role')=='admin'): ?>
                    <a href="<?= site_url('main/download_report') ?>" class="btn btn-primary pull-right">Download Report</a>
                <?php endif; ?>
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th width="5%">NO</th>
                            <th width="25%">NAME</th>
                            <th>COPY</th>
                            <th width="25%">ACTION</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>
                                <form>
                                    <div class="input-group">
                                        <input type="text" name="name_like" class="form-control">
                                        <span class="input-group-btn">
                                            <input type="submit" value="Find" class="btn btn-warning" />
                                            <a href="<?= base_url() ?>" class="btn btn-danger">Reset</a>
                                        </span>
                                    </div>
                                </form>
                            </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($stored as $file): ?>
                            <tr>
                                <td align="right"><?= $no ?></td>
                                <td><?= $file->name ?></td>
                                <td>
                                    <form action="<?= site_url("main/replicate/$file->id_data") ?>" method="POST">
                                    <div class="input-group">
                                        <input type="text" name="new_name" class="form-control" placeholder="Put a new file name and...">
                                        <span class="input-group-btn">
                                            <input class="btn btn-warning" type="submit" value="Copy" />
                                        </span>
                                    </div>
                                    </form>
                                </td>
                                <td>
                                    <a href="<?= site_url("main/show/$file->id_data") ?>" class="btn btn-info">LOAD</a>
                                    <a href="<?= site_url("main/delete/$file->id_data") ?>" class="btn btn-danger">DELETE</a>
                                </td>
                            </tr>
    <?php $no++;
endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>