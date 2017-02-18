<!-- Modal -->
<div aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Sign In</h4>
            </div>
            <div class="modal-body">
                <form class="ajax" action="/signup" method="post" role="form">
                    <div class="form-group">
                        <label for="email">Email address:</label> <input class="form-control" id="email" type="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label> <input class="form-control" id="pwd" type="password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div><button class="btn btn-primary" type="submit">Sign In</button>
                </form>
            </div>
        </div>
    </div>
</div>