<div class="container" style="position: absolute;z-index: 2;top: 211px;">
    <div class="col-md-12">
        <div class="top-spacer">
            <div class="row" style="padding-top: 5px">
                <div class="col-md-4 col-md-offset-4"></div>
                <div class="col-md-4">
                    <?php if ($this->session->userdata('uid')) : ?>
                    <div class="input-group">
                        <input ng-model="file_name" type="text"class="form-control" placeholder="Put a name here and" />
                        <span class="input-group-btn" style="padding-right: 5px">
                            <button ng-click="saveData()" class="savetocloud btn btn-warning">
                                {{ action_text }}
                            </button>
                        </span>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>