<div class="modal fade" id="noteModal" tabindex="-1" role="dialog" aria-labelledby="noteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="noteModalLabel">{{ note.title }}</h4>
      </div>
      <div class="modal-body">
        <h5>{{ note.label }}</h5>
        <pre ng-if="note.action == 'view'">{{ note.data.notes }}</pre>
        <textarea style="max-width:100%;min-width:100%;max-height:250px;min-height:250px;resize:none;" ng-if="note.action != 'view'" ng-model="note.note" placeholder="Add note here..."></textarea>
      </div>
      <div class="modal-footer">
        <button ng-if="note.action != 'update'" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button ng-if="note.action == 'update'" ng-click="cancelEditNote()" type="button" class="btn btn-danger">Cancel</button>
        <button ng-if="note.action == 'view'" ng-click="editNote()" type="button" class="btn btn-primary">Edit</button>
        <button ng-if="note.action == 'view'" ng-click="deleteNote()" type="button" class="btn btn-danger">Delete</button>
        <button ng-disabled="!note.note" ng-if="note.action != 'view'" ng-click="updateNote()" type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>