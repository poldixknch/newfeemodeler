<div class="container" ng-app="app" ng-controller="ListsController" ng-cloak>
  <div class="row">
    <div class="col-md-12">
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
                                              <input ng-model="file_name" type="text" class="form-control" />
                                              <span class="input-group-btn">
                                                  <input type="button" value="Find" ng-click="filterLists()" class="btn btn-warning" />
                                                  <input ng-click="resetFilter()" value="Reset" type="button" class="btn btn-danger" />
                                              </span>
                                          </div>
                                      </form>
                                  </th>
                                  <th></th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody ng-if="lists.length > 0 && !requesting">
                              <tr ng-repeat="list in lists track by $index">
                                  <td align="right">{{ $index + 1 }}</td>
                                  <td>{{ list.file_name }}</td>
                                  <td>
                                      <div class="input-group">
                                          <input ng-model="list.copy_name" type="text" class="form-control" placeholder="Put a new file name and...">
                                          <span class="input-group-btn">
                                              <input ng-click="copyModel(list, $event)" class="btn btn-warning" type="button" value="Copy" />
                                          </span>
                                      </div>
                                  </td>
                                  <td>
                                      <a ng-click="loadList(list)" href="" class="btn btn-info">LOAD</a>
                                      <a ng-click="deleteList(list)" href="" class="btn btn-danger">DELETE</a>
                                  </td>
                              </tr>
                          </tbody>
                          <tbody ng-if="lists.length == 0 && !requesting">
                            <tr>
                              <td></td>
                              <td>No results found.</td>
                            </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>