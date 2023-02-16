<div class="panel">
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped table-bordered table-hover table-condensed table-user-list">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>EMAIL</th>
                            <th>ROLE</th>
                            <th>STATUS</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;foreach ($stored as $file): ?>
                            <tr>
                                <form method="post" action="<?= site_url("account/update/$file->uid") ?>">
                                <td><?= $no ?></td>
                                <td><?= $file->email ?></td>
                                <td>
                                    <select name="role" class="form-control">
                                    <?php foreach(array('admin','principal','user') as $role): ?>
                                        <option <?= $file->role==$role ? 'selected':'' ?> value="<?= $role ?>"><?= $role ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </td>
                                <td>
                                    <select name="active" class="form-control">
                                    <?php foreach(array(0,1) as $role): ?>
                                        <option <?= $file->active==$role ? 'selected':'' ?> value="<?= $role ?>"><?= $role == 1 ? 'active' : 'inactive' ?></option>
                                    <?php endforeach; ?>
                                    </select>
                                </td>
                                <td class="text-center">
                                    <a href="<?= site_url("account/delete/$file->uid") ?>" class="btn btn-sm btn-danger">DELETE</a>
                                </td>
                                </form>
                            </tr>
                        <?php $no++;endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>